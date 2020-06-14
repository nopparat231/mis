<?php 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$user_status = $_POST['user_status'];

include '../conn.php';


$sql = "INSERT INTO user (first_name , last_name , username , password , user_status) VALUES ($first_name,$last_name,$username,$password,$user_status)";

if ($conn->query($sql) === TRUE) {
	header("location:../index.php?pa8");
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>