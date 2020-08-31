<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_pla'])) {
	
    $la_user_id = $_POST['la_user_id'];
    $la_type = $_POST['la_type'];
    $la_start = $_POST['la_start'];
    $la_end = $_POST['la_end'];
    $la_total = $_POST['la_total'];
    $la_balance = $_POST['la_balance'];
    //$la_file = $_POST['la_file'];
    

	$target_dir = "../uploads/";
	$file_tmp = $_FILES["la_file"]["tmp_name"];
	$file_name = basename($_FILES["la_file"]["name"]);
	$la_file = rand(1000,1000000).$file_name;
    $target_file = $target_dir . $la_file;
    
	if(isset($file_name) and !empty($file_name)){
        move_uploaded_file($file_tmp, $target_file);

        $sql = "INSERT INTO kan_la ( la_user_id , la_type , la_start , la_end , la_total , la_balance , la_file) 
        VALUES ( '$la_user_id' , '$la_type','$la_start','$la_end','$la_total','$la_balance','$la_file')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?pla");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    
	$conn->close();


}elseif (isset($_POST['edit_pla'])) {

    $la_id = $_POST['la_id'];
	
	$la_user_id = $_POST['la_user_id'];
    $la_type = $_POST['la_type'];
    $la_start = $_POST['la_start'];
    $la_end = $_POST['la_end'];
    $la_total = $_POST['la_total'];
	$la_balance = $_POST['la_balance'];
	
	$sql = "UPDATE kan_la SET 
	la_user_id = '$la_user_id' , 
	la_type  = '$la_type' , 
	la_start ='$la_start' , 
	la_end = '$la_end' , 
	la_total = '$la_total' , 
	la_balance = '$la_balance'
	WHERE la_id =".$la_id;

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pla");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();



}elseif (isset($_GET['del_pla'])) {
	
	$la_id = $_GET['la_id'];

	$sql =  "UPDATE kan_la SET la_status = 1 WHERE la_id =".$la_id;
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pla");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>