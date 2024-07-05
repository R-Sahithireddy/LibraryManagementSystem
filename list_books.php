<?php
include 'db.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Title</th><th>Author</th><th>Published Year</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["book_id"]. "</td><td>" . $row["title"]. "</td><td>" . $row["author"]. "</td><td>" . $row["published_year"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
