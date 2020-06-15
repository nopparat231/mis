<?php 

include '../conn.php';

if (isset($_POST['add_new'])) {


	//$n_id = $_GET['new_id'];

	$n_head = $_POST['n_head'];
	$new_detail = $_POST['new_detail'];


	$user_id = $_POST["user_id"];


	
	$sql = "INSERT INTO news (n_user_id , n_head , n_detail , n_status) VALUES ($user_id , '$n_head' , '$new_detail' , 0)";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa7");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}elseif (isset($_POST['edit_new'])) {


	$n_id = $_POST['new_id'];
	$n_head = $_POST['n_head'];
	$new_detail = $_POST['new_detail'];


	$user_id = $_POST["user_id"];


	
	$sql = "UPDATE news SET n_head = '$n_head' , n_detail = '$new_detail' WHERE n_id =".$n_id;

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa7");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}elseif (isset($_GET['del_new'])) {


	$n_id = $_GET['new_id'];
	$n_head = $_POST['n_head'];
	$new_detail = $_POST['new_detail'];


	$user_id = $_POST["user_id"];


	
	$sql =  "UPDATE news SET n_status = 1 WHERE n_id =".$n_id;

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa7");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}



?>