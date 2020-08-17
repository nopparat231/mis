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
	$user_kana_id = $_POST['user_kana'];
	$user_saka_id = $_POST['user_saka'];

	$sqlhuser=" SELECT * FROM user WHERE username =".$username;
	$qryhuser = mysqli_query($conn,$sqlhuser);
	$rowuser = mysqli_fetch_assoc($qryhuser);
	$rowcheckuser = mysqli_num_rows($qryhuser); 

	if ($rowcheckuser == 0) {

		$sql = "INSERT INTO user ( user_tumn , first_name , last_name , username , password , user_kana_id , user_saka_id , user_status) VALUES ( '$user_tumn' , '$first_name','$last_name','$username','$password','$user_kana_id','$user_saka_id','$user_status')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?pa8");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}else{

		$message = 'มีชื่อผู้ใช้นี้แล้ว';
		echo "<script type='text/javascript'>alert('$message');</script>";

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
	$user_kana_id = $_POST['user_kana'];
	$user_saka_id = $_POST['user_saka'];

	$sql = "UPDATE user SET 
	user_tumn = '$user_tumn' , 
	first_name  = '$first_name' , 
	last_name ='$last_name' , 
	username = '$username' , 
	password = '$password' , 
	user_kana_id = '$user_kana_id' , 
	user_saka_id = '$user_saka_id' , 
	user_status = '$user_status' 
	WHERE user_id =".$user_id;

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa8");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
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