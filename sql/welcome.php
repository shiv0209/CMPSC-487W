<html>
<body>

<?php
//Once again, using these three entries as an example.
$value1 = $_POST["id"];
$value2 = $_POST["name"];
$value3 = $_POST["roomType"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitydb";

//Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
else{
	echo "Successfully connected to the database";
}

//Todo: add code to execute here

$sql = "INSERT INTO TableName VALUES ('$value1', '$value2', '$value3')";
if($conn->query($sql) === TRUE){
	echo "<br/>"; //new line
	echo "Insertion Successful";
}
else{
	echo "<br/>"; //new line
	echo "Error accessing the database: ".$conn->error;
}

//Closes the connection
$conn->close();
?>

</body>
</html>
