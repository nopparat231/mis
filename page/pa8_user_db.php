<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_user'])) {
	
	$user_tumn = $_POST['user_tumn'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_status = $_POST['user_status'];

	$sqlhuser=" SELECT * FROM user WHERE username =".$username;
	$qryhuser = mysqli_query($conn,$sqlhuser);
	$rowuser = mysqli_fetch_assoc($qryhuser);
	$rowcheckuser = mysqli_num_rows($qryhuser); 

	if ($rowcheckuser == 0) {

		$sql = "INSERT INTO user ( user_tumn , first_name , last_name , username , password , user_status) VALUES ( '$user_tumn' , '$first_name','$last_name','$username','$password','$user_status')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?pa8");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}else{

		aleart('มีชื่อผู้ใช้นี้แล้ว');

	}

	
	$conn->close();



}elseif (isset($_POST['edit_user'])) {
	
	$user_id = $_POST['user_id'];
	$user_tumn = $_POST['user_tumn'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_status = $_POST['user_status'];

	$sqlhuser=" SELECT * FROM user WHERE username =".$username;
	$qryhuser = mysqli_query($conn,$sqlhuser);
	$rowuser = mysqli_fetch_assoc($qryhuser);
	$rowcheckuser = mysqli_num_rows($qryhuser); 

	if ($rowcheckuser == 0) {


		$sql = "UPDATE user SET user_tumn = '$user_tumn' , first_name  = '$first_name' , last_name ='$last_name' , username = '$username' , password = '$password' , user_status = '$user_status' WHERE user_id =".$user_id;

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?pa8");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}


	}else{

		aleart('มีชื่อผู้ใช้นี้แล้ว');
		//goblack();

	}

	$conn->close();



}elseif (isset($_GET['del_user'])) {
	
	$user_id = $_GET['user_id'];


	$sql =  "UPDATE user SET user_status = 3 WHERE user_id =".$user_id;
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa8");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();



}


?>