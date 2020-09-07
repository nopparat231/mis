<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_kan_activity'])) {
	
    $name_activity = $_POST['name_activity'];
    $detail = $_POST['detail'];
    //$activity_file = $_POST['activity_file'];
    
    
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["activity_file"]["tmp_name"];
	$file_name = basename($_FILES["activity_file"]["name"]);
	$activity_file = rand(1000,1000000)."_".$file_name;
    $target_file = $target_dir . $activity_file;
    
	if(isset($file_name) and !empty($file_name)){
        move_uploaded_file($file_tmp, $target_file);

        $sql = "INSERT INTO kan_activity ( name_activity , detail , activity_file )
        VALUES ( '$name_activity' , '$detail' , '$activity_file')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?kan_activity");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    
	$conn->close();


}elseif (isset($_POST['edit_kan_activity'])) {

	$kan_activity_id = $_POST['kan_activity_id'];

	$name_activity = $_POST['name_activity'];
    $detail = $_POST['detail'];
    //$activity_file = $_POST['activity_file'];
    
    
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["activity_file"]["tmp_name"];
	$file_name = basename($_FILES["activity_file"]["name"]);
	$activity_file = rand(1000,1000000)."_".$file_name;
	$target_file = $target_dir . $activity_file;
	
	if(isset($file_name) and !empty($file_name)){
    move_uploaded_file($file_tmp, $target_file);
	
	$sql = "UPDATE kan_activity SET 
	name_activity = '$name_activity' , 
	detail  = '$detail' , 
	activity_file  = '$activity_file'
	WHERE kan_activity_id = '$kan_activity_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kan_activity");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}else{
	
	$activity_file = "ไม่มีไฟล์";
		
	$sql = "UPDATE kan_activity SET 
	name_activity = '$name_activity' , 
	detail  = '$detail' , 
	activity_file  = '$activity_file'
	WHERE kan_activity_id = '$kan_activity_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kan_activity");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}

	$conn->close();



}elseif (isset($_GET['del_kan_activity'])) {
	
	$kan_activity_id = $_GET['kan_activity_id'];

	$sql =  "UPDATE kan_activity SET kan_activity_status = 1 WHERE kan_activity_id = '$kan_activity_id' ";
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kan_activity");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>