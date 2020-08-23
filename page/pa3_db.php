<?php 

include '../conn.php';


$th_id = $_POST['th_id'];
$f_ac_kid_from = $_POST['kid_from'];
$f_ac_kid_end = $_POST['kid_end'];

$f_ac_rob = $_POST['rob'];


$f_ac_user_h_id = $_POST['user_id'];
$f_ac_user_c_id = $_POST['user_c_id'];

$sqlf=" SELECT * FROM f_pam WHERE f_th =".$th_id;
$qryf = mysqli_query($conn,$sqlf);

$rowcheckf = mysqli_num_rows($qryf); 

if ($rowcheckf > 0) {

while($rowf = $qryf->fetch_array()){

	$ac = "a".$rowf['f_id'].$rowf['f_h_id'];
	$com1 = "com1".$rowf['f_id'];
	$fileToUpload = "fileToUpload".$rowf['f_id'];

	$f_ac_score = $_POST[$ac];
	$com11 = $_POST[$com1];
	

	if ($fileToUpload == "") {
		$fileToUpload = "";
		addaction($rowf['f_id'],$rowf['f_h_id'],$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id,$com11,$fileToUpload);
	}else {
		
	$target_dir = "../uploads/";
	$file_tmp = $_FILES[$fileToUpload]["tmp_name"];
	$file_name = basename($_FILES[$fileToUpload]["name"]);
	$final_name = rand(1000,1000000).$file_name;
	$target_file = $target_dir . $final_name;
	if(isset($file_name) and !empty($file_name)){
		move_uploaded_file($file_tmp, $target_file);
			addaction($rowf['f_id'],$rowf['f_h_id'],$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id,$com11,$final_name);
		
	}else{
		$final_name = "";
		//move_uploaded_file($file_tmp, $target_file);
		addaction($rowf['f_id'],$rowf['f_h_id'],$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id,$com11,$final_name);
	
	}

		
		
	}

	

}	

}else{
	echo "Error";
}




function addaction($f_ac_pam_id,$f_ac_h_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id,$com11,$target_file)
{
	include '../conn.php';


	$sql = "INSERT INTO f_action (f_ac_pam_id , f_ac_th_id ,f_ac_h_id , f_ac_user_h_id , f_ac_user_c_id , f_ac_score , f_ac_rob , f_ac_kid_from, f_ac_kid_end, f_ac_comment1 ,f_af_upfile) VALUES ('$f_ac_pam_id','$th_id','$f_ac_h_id','$f_ac_user_h_id','$f_ac_user_c_id','$f_ac_score','$f_ac_rob','$f_ac_kid_from','$f_ac_kid_end', '$com11' , '$target_file')";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa2&user_c_id=$f_ac_user_c_id&type=$th_id&save");
	}else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}




?>