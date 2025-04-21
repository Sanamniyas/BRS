<?php
# booking2.php

# Include database connection
require_once 'dbconnection.php';

# Check if $conn is set
if (!isset($conn) || $conn->connect_error) {
    die("Database connection is not established. Please check dbconnection.php. Error: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookId = $_POST['book_id'] ?? '';
    $rating = $_POST['rating'] ?? '';
    $review = $_POST['review'] ?? '';

    # Validate input
    if (empty($rating) || empty($review) || empty($bookId)) {
        echo "Please provide all required fields.";
        exit;
    }

    # Debug: Check the received bookId
    echo "Debug: bookId = '$bookId'<br>";

    # Map book ID strings to numeric book IDs
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
        die("Invalid book_id: $bookId");
    }

    # Verify book exists
    $bookCheck = $conn->prepare("SELECT book_id FROM books WHERE book_id = ?");
    $bookCheck->bind_param("i", $numericBookId);
    $bookCheck->execute();
    $bookResult = $bookCheck->get_result();
    echo "Debug: num_rows = " . $bookResult->num_rows . "<br>";

    # Optional debug: show available book_ids
    $allBooks = $conn->query("SELECT book_id FROM books");
    echo "Debug: Available book_ids = ";
    while ($row = $allBooks->fetch_assoc()) {
        echo "'" . $row['book_id'] . "', ";
    }
    echo "<br>";

    if ($bookResult->num_rows === 0) {
        die("Book not found for book_id: $numericBookId");
    }
    $bookCheck->close();

    # Set a user_id (must exist in your users table)
    $userId = 1;

    # Verify user exists
    $userCheck = $conn->prepare("SELECT user_id FROM users WHERE user_id = ?");
    $userCheck->bind_param("i", $userId);
    $userCheck->execute();
    $userCheck->store_result();
    if ($userCheck->num_rows === 0) {
        die("User with user_id = $userId does not exist. Please add the user first.");
    }
    $userCheck->close();

    # Insert review
    $sql = "INSERT INTO reviews (user_id, book_id, rating, review_description, review_date) VALUES (?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("iiis", $userId, $numericBookId, $rating, $review);
    if ($stmt->execute()) {
        header("Location: bookdetails.php?book=$bookId&success=Review+submitted+successfully");
        exit;
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No form data submitted.";
}
?>
