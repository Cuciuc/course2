
<?php
// define variables and set to empty values
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "first";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$title = $content = $author = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $title = $_POST["title"];
  $content = $_POST["content"];
  $author = $_POST["author"];
  
}

echo $title;
// $sql = "INSERT INTO posts (title, content, author) VALUES ($title, $content, $author)";
$sql = "INSERT INTO posts (Title, Content, Author) VALUES ('$title', '$content', '$author')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>