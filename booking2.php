<?php
ob_start(); // Enable output buffering to prevent header issues

# Include database connection
require_once 'dbconnection.php';

# Check if $conn is set
if (!isset($conn) || $conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookId = $_POST['book_id'] ?? '';
    $rating = $_POST['rating'] ?? '';
    $review = $_POST['review'] ?? '';

    # Validate input
    if (empty($rating) || empty($review) || empty($bookId)) {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
        exit;
    }

    # Map string book IDs to numeric ones
    $bookIdMap = [
        'adulthood' => 1,
        'floating_world' => 2,
        'cat_sensei' => 3,
        'wimpy_kid' => 4,
        'dogman' => 5,
        'styles' => 6,
        'art_and_fear' => 7,
        'alchemist' => 8,
        'vincent_letters' => 9,
        'story_of_art' => 10,
        'shoedog' => 11,
        'malala' => 12
    ];

    $numericBookId = $bookIdMap[$bookId] ?? null;
    if ($numericBookId === null) {
        echo "<script>alert('Invalid book ID.'); window.history.back();</script>";
        exit;
    }

    # Check if book exists
    $bookCheck = $conn->prepare("SELECT book_id FROM books WHERE book_id = ?");
    $bookCheck->bind_param("i", $numericBookId);
    $bookCheck->execute();
    $bookResult = $bookCheck->get_result();

    if ($bookResult->num_rows === 0) {
        echo "<script>alert('Book not found.'); window.history.back();</script>";
        $bookCheck->close();
        exit;
    }
    $bookCheck->close();

    # Set dummy user_id (replace with session logic if available)
    $userId = 1;

    # Check if user exists
    $userCheck = $conn->prepare("SELECT user_id FROM users WHERE user_id = ?");
    $userCheck->bind_param("i", $userId);
    $userCheck->execute();
    $userCheck->store_result();

    if ($userCheck->num_rows === 0) {
        echo "<script>alert('User not found.'); window.history.back();</script>";
        $userCheck->close();
        exit;
    }
    $userCheck->close();

    # Insert review
    $stmt = $conn->prepare("INSERT INTO reviews (user_id, book_id, rating, review_description, review_date) VALUES (?, ?, ?, ?, NOW())");
    if ($stmt === false) {
        echo "<script>alert('Query preparation failed.'); window.history.back();</script>";
        exit;
    }

    $stmt->bind_param("iiis", $userId, $numericBookId, $rating, $review);
    if ($stmt->execute()) {
        header("Location: bookdetails.php?book=$bookId&success=Review+submitted+successfully");
        exit;
    } else {
        echo "<script>alert('Error submitting review.'); window.history.back();</script>";
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}

ob_end_flush(); // Flush output buffer
?>
