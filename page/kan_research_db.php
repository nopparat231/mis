<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_kan_research'])) {
	
    $name_th = $_POST['name_th'];
    $detail = $_POST['detail'];
    //$research_file = $_POST['research_file'];
    
    
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["research_file"]["tmp_name"];
	$file_name = basename($_FILES["research_file"]["name"]);
	$research_file = rand(1000,1000000)."_".$file_name;
    $target_file = $target_dir . $research_file;
    
	if(isset($file_name) and !empty($file_name)){
        move_uploaded_file($file_tmp, $target_file);

        $sql = "INSERT INTO kan_research ( name_th , detail , research_file )
        VALUES ( '$name_th' , '$detail' , '$research_file')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?kan_research");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    
	$conn->close();


}elseif (isset($_POST['edit_kan_research'])) {

	$kan_research_id = $_POST['kan_research_id'];

	$name_th = $_POST['name_th'];
    $detail = $_POST['detail'];
    //$research_file = $_POST['research_file'];
    
    
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["research_file"]["tmp_name"];
	$file_name = basename($_FILES["research_file"]["name"]);
	$research_file = rand(1000,1000000)."_".$file_name;
	$target_file = $target_dir . $research_file;
	
	if(isset($file_name) and !empty($file_name)){
    move_uploaded_file($file_tmp, $target_file);
	
	$sql = "UPDATE kan_research SET 
	name_th = '$name_th' , 
	detail  = '$detail' , 
	research_file  = '$research_file'
	WHERE kan_research_id = '$kan_research_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kan_research");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}else{
	
	$research_file = "ไม่มีไฟล์";
		
	$sql = "UPDATE kan_research SET 
	name_th = '$name_th' , 
	detail  = '$detail' , 
	research_file  = '$research_file'
	WHERE kan_research_id = '$kan_research_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kan_research");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}

	$conn->close();



}elseif (isset($_GET['del_kan_research'])) {
	
	$kan_research_id = $_GET['kan_research_id'];

	$sql =  "UPDATE kan_research SET research_status = 1 WHERE kan_research_id = '$kan_research_id' ";
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kan_research");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>