<?php

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

	$sql = "SELECT id, firstname, lastname FROM myguests WHERE id = 5";
	$result = $conn->query($sql);
	$name = '';

	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		print_r($row);
		$name = $row['firstname'];
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	
	echo "Hello Irina";
	echo "<h3>nice to see you " . $name . "</h3> ";

	$conn->close();
?>


<h2>PHP Form Validation for Posts</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Title: <input type="text" name="title">
  <br><br>
  Content: <textarea name="content" rows="5" cols="40"></textarea>
  <br><br>
  Author: <input type="text" name="author">
  <br><br>
  Date: <input type="date" name="date">
  <br><br>
  Gender: 
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $title;
echo "<br>";
echo $content;
echo "<br>";
echo $author;
echo "<br>";
echo $date;
echo "<br>";
echo $gender;
?>


