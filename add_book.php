<?php
include 'db.php';

$title = $_POST['title'];
$author = $_POST['author'];
$published_year = $_POST['published_year'];

$sql = "INSERT INTO books (title, author, published_year) VALUES ('$title', '$author', '$published_year')";

if ($conn->query($sql) === TRUE) {
    echo "New book added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
