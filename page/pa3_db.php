<?php 

include '../conn.php';


$th_id = $_GET['th_id'];
$f_ac_kid_from = $_GET['kid_from'];
$f_ac_kid_end = $_GET['kid_end'];

$f_ac_rob = $_GET['rob'];

//รอบที่ประเมิน

$f_ac_user_h_id = $_GET['user_id'];
$f_ac_user_c_id = $_GET['user_c_id'];

$sqlf=" SELECT * FROM f_pam WHERE f_th =".$th_id;
$qryf = mysqli_query($conn,$sqlf);

$rowcheckf = mysqli_num_rows($qryf); 

if ($rowcheckf > 0) {

while($rowf = $qryf->fetch_array()){

	$ac = "a".$rowf['f_id'].$rowf['f_h_id'];

	$f_ac_score = $_GET[$ac];

	$com1 = "com1".$rowf['f_id'];
	$com2 = "com2".$rowf['f_id'];
	$com3 = "com3".$rowf['f_id'];
	$com4 = "com4".$rowf['f_id'];
	$com5 = "com5".$rowf['f_id'];

	$com11 = $_GET[$com1];
	$com12 = $_GET[$com2];
	$com13 = $_GET[$com3];
	$com14 = $_GET[$com4];
	$com15 = $_GET[$com5];

	addaction($rowf['f_id'],$rowf['f_h_id'],$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id,$com11,$com12,$com13,$com14,$com15);

}	

}else{
	echo "Error";
}




function addaction($f_ac_pam_id,$f_ac_h_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id,$com11,$com12,$com13,$com14,$com15)
{
	include '../conn.php';


	$sql = "INSERT INTO f_action (f_ac_pam_id , f_ac_th_id ,f_ac_h_id , f_ac_user_h_id , f_ac_user_c_id , f_ac_score , f_ac_rob , f_ac_kid_from, f_ac_kid_end, f_ac_comment1 , f_ac_comment2, f_ac_comment3, f_ac_comment4, f_ac_comment5) VALUES ('$f_ac_pam_id','$th_id','$f_ac_h_id','$f_ac_user_h_id','$f_ac_user_c_id','$f_ac_score','$f_ac_rob','$f_ac_kid_from','$f_ac_kid_end', '$com11' ,'$com12','$com13','$com14','$com15')";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa2&user_c_id=$f_ac_user_c_id&type=$th_id&save");
	}else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}




?>