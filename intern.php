<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

$Iname=$_GET["Iname"];
$Iemail=$_GET["Iemail"];;
$uname=$_GET["uname"];;
/*
if(isset($_POST["Iname"])||isset($_POST["Iemail"])||isset($_POST["uname"])){
  $Iname=$_POST["Iname"];
  $Iemail=$_POST["Iemail"];
  $uname=$_POST["uname"];
  }
*/

echo" User name:".$Iname."<br>";
echo" Email id:".$Iemail."<br>";
echo" Ph no:".$uname."<br>";





$servername = "localhost";
$username = "root";
$password = "";
$database="ast_db";
$port=3306;

$conn = new mysqli($servername, $username, $password ,$database,$port);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "INSERT INTO ast_tbl (uname,uemail,uphno)
VALUES ('".$Iname."', '".$Iemail."','".$uname."' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
    <script src= "https://www.gstatic.com/firebasejs/10.5.0/firebase.js"></script>
    <script src= "https://www.gstatic.com/firebasejs/10.5.0/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyA9PlXPs0nKb0Ef338rP5-MmGsqz0gRbUE",
      authDomain: "otp-v-4dad2.firebaseapp.com",
      projectId: "otp-v-4dad2",
      storageBucket: "otp-v-4dad2.appspot.com",
      messagingSenderId: "1002501064669",
      appId: "1:1002501064669:web:f67bf1619caace67e01834",
      measurementId: "G-Y3B1QVHS54"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
     firebase.analytics();
</script>
    <script src="firebase.js" type="text/javascript"></script>
  </body>


</body>
</html>