<?php 
include '../conn.php';
include 'class_db.php';

if (isset($_POST['add_kana'])) {

    $user_id = $_POST["user_id"];

    $sqlf = " SELECT * FROM kana ";
    $qryf = mysqli_query($conn,$sqlf);
    $rowcheckf = mysqli_num_rows($qryf); 
    
    if ($rowcheckf > 0) {
    
    while($rowf = $qryf->fetch_array()){
    
        $ac = "a1".$rowf['kana_id'];
        $kana__id = $rowf['kana_id'];

        $p_kana_ac = $_POST[$ac];

        $sql = "INSERT INTO p_kana ( p_kana_id_kana_id , p_kana_user_id , p_kana_ac , p_kana_status )
        VALUES ( '$kana__id' , '$user_id','$p_kana_ac','0')";

		if ($conn->query($sql) === TRUE) {
			
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    }
    header("location:../index.php?p_kana");
    
    }

    //     $sql = "INSERT INTO p_kana ( p_kana_id_kana_id , p_kana_user_id , p_kana_ac , p_kana_status )
    //     VALUES ( '$kana__id' , '$user_id','$p_kana_ac','0')";

	// 	if ($conn->query($sql) === TRUE) {
	// 		header("location:../index.php?p_kana");
	// 	} else {
	// 		echo "Error: " . $sql . "<br>" . $conn->error;
    //     }

	$conn->close();


}elseif (isset($_POST['edit_kanzon'])) {

	$kanzon_id = $_POST['kanzon_id'];

	$kanzon_user_id = $_POST['kanzon_user_id'];
    $kanzon_detail = $_POST['kanzon_detail'];
    $kanzon_term = $_POST['kanzon_term'];
	//$kanzon_file = $_POST['kanzon_file'];
	
	$target_dir = "../uploads/";
	$file_tmp = $_FILES["kanzon_file"]["tmp_name"];
	$file_name = basename($_FILES["kanzon_file"]["name"]);
	$kanzon_file = rand(1000,1000000)."_".$file_name;
	$target_file = $target_dir . $kanzon_file;
	
	if(isset($file_name) and !empty($file_name)){
    move_uploaded_file($file_tmp, $target_file);
	
	$sql = "UPDATE kanzon SET 
	kanzon_user_id = '$kanzon_user_id' , 
	kanzon_detail  = '$kanzon_detail' , 
	kanzon_term = '$kanzon_term' ,
	kanzon_file  = '$kanzon_file'
	WHERE kanzon_id = '$kanzon_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kanzon");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}else{
	
	$kanzon_file = "ไม่มีไฟล์";

	$sql = "UPDATE kanzon SET 
	kanzon_user_id = '$kanzon_user_id' , 
	kanzon_detail  = '$kanzon_detail' , 
	kanzon_term ='$kanzon_term' ,
	kanzon_file  = '$kanzon_file'
	WHERE kanzon_id = '$kanzon_id' ";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kanzon");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	}

	$conn->close();



}elseif (isset($_GET['del_kanzon'])) {
	
	$kanzon_id = $_GET['kanzon_id'];

	$sql =  "UPDATE kanzon SET kanzon_status = 1 WHERE kanzon_id = '$kanzon_id' ";
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?kanzon");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>