<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add'])) {
	
    $used_time_user_id = $_POST['used_time_user_id'];
    $used_date = $_POST['used_date'];
	$used_time_detail = $_POST['used_time_detail'];
	
    //$ = $_POST[''];

        $sql = "INSERT INTO used_time ( used_time_user_id , used_date , used_time_detail)
        VALUES ( '$used_time_user_id' , '$used_date','$used_time_detail')";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?used_time");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }

    
	$conn->close();


}elseif (isset($_POST['edit'])) {

	$used_time_id = $_POST['used_time_id'];

    $used_time_user_id = $_POST['used_time_user_id'];
    $used_date = $_POST['used_date'];
	$used_time_detail = $_POST['used_time_detail'];

	$sql = "UPDATE used_time SET 
	used_time_user_id = '$used_time_user_id' , 
	used_date  = '$used_date' , 
	used_time_detail = '$used_time_detail' 
	 
	WHERE used_time_user_id = '$used_time_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?used_time");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}


	$conn->close();



}elseif (isset($_GET['del'])) {
	
	$used_time_id = $_GET['used_time_id'];

	$sql =  "UPDATE used_time SET used_time_status = 1 WHERE used_time_id = '$used_time_id' ";
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?used_time");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>