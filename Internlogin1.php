<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$Iname=$_POST["Iname"];
$Iemail=$_POST["Iemail"];
$Iphno=$_POST["Iphno"];


echo" User name:".$Iname."<br>";
echo" Email id::".$Iemail."<br>";
echo" Ph no:".$Iphno."<br>";


?>
   
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="ast_db";
$port=3306;
// Create connection
$conn = new mysqli($servername, $username, $password ,$database,$port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "INSERT INTO uast_tbl (uname,mail,phno)
VALUES ('".$Iname."', '".$Iemail."','".$Iphno."' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    
</body>
</html>