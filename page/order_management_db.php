<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_order'])) {
	
    $order_user_id = $_POST['order_user_id'];
    $order_time = $_POST['order_time'];
	$order_where = $_POST['order_where'];
	$order_detail = $_POST['order_detail'];
    //$order_file = $_POST['order_file'];
  
    
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["order_file"]["tmp_name"];
	$file_name = basename($_FILES["order_file"]["name"]);
	$order_file = rand(1000,1000000)."_".$file_name;
    $target_file = $target_dir . $order_file;
    
	if(isset($file_name) and !empty($file_name)){
        move_uploaded_file($file_tmp, $target_file);

        $sql = "INSERT INTO order_management ( order_user_id , order_time , order_where , order_detail , order_file )
        VALUES ( '$order_user_id' , '$order_time','$order_where','$order_detail' , '$order_file')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?order_management");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    
	$conn->close();


}elseif (isset($_POST['edit_order'])) {

	$order_id = $_POST['order_id'];

    $order_user_id = $_POST['order_user_id'];
    $order_time = $_POST['order_time'];
	$order_where = $_POST['order_where'];
	$order_detail = $_POST['order_detail'];
	//$order_file = $_POST['order_file'];
	
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["order_file"]["tmp_name"];
	$file_name = basename($_FILES["order_file"]["name"]);
	$order_file = rand(1000,1000000)."_".$file_name;
	$target_file = $target_dir . $order_file;
	
	if(isset($file_name) and !empty($file_name)){
    move_uploaded_file($file_tmp, $target_file);
	
	$sql = "UPDATE order_management SET 
	order_user_id = '$order_user_id' , 
	order_time  = '$order_time' , 
	order_where = '$order_where' ,
	order_detail  = '$order_detail' ,
	order_file  = '$order_file'
	WHERE order_id = '$order_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?order_management");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}else{
	
	$order_filell = $_POST['order_file'];

	$sql = "UPDATE order_management SET 
	order_user_id = '$order_user_id' , 
	order_time  = '$order_time' , 
	order_where = '$order_where' ,
	order_detail  = '$order_detail' ,
	order_file  = '$order_filell'
	WHERE order_id = '$order_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?order_management");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}

	$conn->close();



}elseif (isset($_GET['del_order'])) {
	
	$order_id = $_GET['order_id'];

	$sql =  "UPDATE order_management SET order_status = 1 WHERE order_id = '$order_id' ";
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?order_management");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>