<?php
//Following 3 variables are defaults for databases, 4th is the database name so I just used an example
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "housingdb";

//Connection to database
$conn = new mysqli($servername, $username, $password, $dbname);

//Connection check
if($conn->connect_error){
	die("Connection failed:".$conn->connect_error);
}
else{
	echo "Successfully connected to the database";
}


//Insert command
//Let's say the table has fields id, name, roomType. That'd mean it's an integer, varchar, and varchar.
$sqlEx1 = "INSERT INTO TableName VALUES (123456789,'sans undertale','single')";
if($conn->query($sqlEx1) === TRUE){
	echo "<br/>"; //new line
	echo "Insertion Successful";
}
else{
	echo "<br/>"; //new line
	echo "Error accessing the database: ".$conn->error;
}


//Update command
$sqlEx2 = "UPDATE TableName SET columnName = 'Value' WHERE otherColumn = 'Other Value'";
if($conn->query($sqlEx2) === TRUE){
	echo "<br/>"; //new line
	echo Update Successful";
}
else{
	echo "<br/>"; //new line
	echo "Error accessing the database: ".$conn->error;
}


//Select command - Full table
$sqlEx3 = "SELECT * FROM TableName";
$result1 = $conn->query(sqlEx3);
echo "<br/>Total records: $result1->num_rows<br/>";
if ($result1->num_rows>0){
	//output data of each row using loop
	while($row = $result1->fetch_assoc()){
		echo "ID: ".$row["id"] ." Student Name: ".$row["name"]." Dept Name: ".$row["dept_name"]." Credits: ".$row["tot_cred"]."<br>";
	}
}
else{
	echo "No results";
}


//Select command - Only one specific row
$sqlEx4 = "SELECT columnName FROM TableName WHERE otherColumn = 'Value'";
$result2 = $conn->query(sqlEx4);
$val = $result2->fetch_assoc();
echo $val["building"];


//Connection has to be closed after use; VERY IMPORTANT!!
$conn->close();
?>
