<DOCTYPE HTML>
<HTML>
<head>
<title>Sign-Up</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body id = "body color">
<div id = "Sign-up">
<fieldset style=width:30%><legend> Registration From </legend>
<table border="0">
<tr>
<form method="POST" action= "connect-sign-up.php">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
UserName: <input type="text" name="user"><br>
Password: <input type="password" name="password"><br>
<input id=<"button" type="submit" value="Sign-UP"><br>
<fie>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slow";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table

$sql = "CREATE TABLE IF NOT EXISTS slow (
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
username VARCHAR(50),
password VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table slow created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO slow (name, email, username, password)
VALUES ('lalit', 'vimal', 'kala','sa')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>

</body>
</html>
http://mrbool.com/how-to-create-a-sign-up-form-registration-with-php-and-mysql/28675