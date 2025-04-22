<?php
$servername = "my-mysql";
$username = "root";
$password = "root";
$dbname = "BookReview";

# Create connection
$conn = new mysqli($servername, $username, $password, $dbname;

# Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

# Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);  # Store plain password

    # Debugging: Print password before inserting
    echo "Password entered: " . $password . "<br>";

    # Ensure required fields are not empty
    if (empty($username) || empty($phone) || empty($email) || empty($password)) {
        echo "<script>
                alert('All fields are required!');
                window.location.href='sign2.php';
              </script>";
        exit();
    }

    # Validate phone number (only digits, 10-15 characters)
    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
        echo "<script>
                alert('Invalid phone number! Enter a number between 10-15 digits.');
                window.location.href='sign2.php';
              </script>";
        exit();
    }

    # Store plain password in database
    $sql = "INSERT INTO users (username, phone, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $phone, $email, $password);

    if ($stmt->execute()) {
        echo "<script>
                alert('Registration successful!');
                window.location.href='login.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $stmt->error . "');
                window.location.href='sign2.php';
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
