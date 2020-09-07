<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_arts_and_culture'])) {

	$art_and_culture_user_id = $_POST['art_and_culture_user_id'];
    $name_artculture = $_POST['name_artculture'];
    $detail = $_POST['detail'];
    //$art_and_culture_file = $_POST['art_and_culture_file'];
    
    
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["art_and_culture_file"]["tmp_name"];
	$file_name = basename($_FILES["art_and_culture_file"]["name"]);
	$art_and_culture_file = rand(1000,1000000)."_".$file_name;
    $target_file = $target_dir . $art_and_culture_file;
    
	if(isset($file_name) and !empty($file_name)){
        move_uploaded_file($file_tmp, $target_file);

        $sql = "INSERT INTO arts_and_culture ( art_and_culture_user_id , name_artculture , detail , art_and_culture_file )
        VALUES ( '$art_and_culture_user_id' , '$name_artculture' , '$detail' , '$art_and_culture_file')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?arts_and_culture");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    
	$conn->close();


}elseif (isset($_POST['edit_arts_and_culture'])) {

	$artsculture_id = $_POST['artsculture_id'];

	$art_and_culture_user_id = $_POST['art_and_culture_user_id'];
    $name_artculture = $_POST['name_artculture'];
    $detail = $_POST['detail'];
    //$art_and_culture_file = $_POST['art_and_culture_file'];
    
    
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["art_and_culture_file"]["tmp_name"];
	$file_name = basename($_FILES["art_and_culture_file"]["name"]);
	$art_and_culture_file = rand(1000,1000000)."_".$file_name;
	$target_file = $target_dir . $art_and_culture_file;
	
	if(isset($file_name) and !empty($file_name)){
    move_uploaded_file($file_tmp, $target_file);
	
	$sql = "UPDATE arts_and_culture SET 
	art_and_culture_user_id = '$art_and_culture_user_id' , 
	name_artculture = '$name_artculture' , 
	detail  = '$detail' , 
	art_and_culture_file  = '$art_and_culture_file'
	WHERE artsculture_id = '$artsculture_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?arts_and_culture");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}else{
	
	$art_and_culture_file = "ไม่มีไฟล์";
		
	$sql = "UPDATE arts_and_culture SET 
	art_and_culture_user_id = '$art_and_culture_user_id' , 
	name_artculture = '$name_artculture' , 
	detail  = '$detail' , 
	art_and_culture_file  = '$art_and_culture_file'
	WHERE artsculture_id = '$artsculture_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?arts_and_culture");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}

	$conn->close();



}elseif (isset($_GET['del_arts_and_culture'])) {
	
	$artsculture_id = $_GET['artsculture_id'];

	$sql =  "UPDATE arts_and_culture SET art_and_culture_status = 1 WHERE artsculture_id = '$artsculture_id' ";
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?arts_and_culture");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>