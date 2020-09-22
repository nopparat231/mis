<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_p_rate'])) {
	
    $f_hhh = $_POST['f_hhh'];
    $f_score = $_POST['f_score'];
 
 
        $sql = "INSERT INTO f_pam ( f_th , f_h_id , f_hhh , f_score , f_pam_num , f_staus )
        VALUES ( 1 , 1 , '$f_hhh' , '$f_score' , f_pam_num , 0)";

		if ($conn->query($sql) === TRUE) {
			header("location:../index.php?p_rate");
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }

    
	$conn->close();


}elseif (isset($_POST['edit_p_rate'])) {

	$f_id = $_POST['f_id'];

    $f_hhh = $_POST['f_hhh'];
    $f_score = $_POST['f_score'];
 
	//$kanzon_file = $_POST['kanzon_file'];

	$sql = "UPDATE f_pam SET 
	f_th = '$f_th' , 
	f_h_id  = '$f_h_id' ,
    f_hhh = '$f_hhh' , 
	f_score = '$f_score' ,
	f_pam_num  = '$f_pam_num'
	WHERE f_id = '$f_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?p_rate");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}elseif (isset($_GET['del_p_rate'])) {
	
	$f_id = $_GET['f_id'];

	$sql =  "UPDATE f_pam SET f_staus = 1 WHERE f_id = '$f_id' ";
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?p_rate");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>