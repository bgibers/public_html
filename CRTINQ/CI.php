<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>


<?php
$servername = "mysql1.cs.clemson.edu";
$username = "CrtvInqSrch_q5gn";
$password = "tntmbgpp123";
$dbname = "CreativeInqSearch_7xyl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM CreativeInq";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Name</th><th>Description</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Des"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>