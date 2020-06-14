<?php 

include '../conn.php';


$th_id = $_GET['th_id'];
$rob = $_GET['rob'];
$y = $_GET['y'];
$yy = $_GET['yy'];
//รอบที่ประเมิน

$nameh = $_GET['nameh'];
$tumh = $_GET['tumh'];
//ตำแหน่งผู้ถูกประเมิน

$namec = $_GET['namec'];
$tumc = $_GET['tumc'];


$f_ac_user_h_id = $_GET['user_id'];
$f_ac_user_c_id = 4;

$sqlf=" SELECT * FROM f_pam WHERE f_th =".$th_id;
$qryf = mysqli_query($conn,$sqlf);

$rowcheckf = mysqli_num_rows($qryf); 

if ($rowcheckf > 0) {

while($rowf = $qryf->fetch_array()){

	$ac = "a".$rowf['f_id'].$rowf['f_hh'];

	$f_ac_score = $_GET[$ac];

	addaction($rowf['f_id'],$rowf['f_hh'],$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score);


}	

}else{
	echo "Error";
}




function addaction($f_ac_pam_id,$f_ac_h_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score)
{
	include '../conn.php';


	$sql = "INSERT INTO f_action (f_ac_pam_id , f_ac_h_id , f_ac_user_h_id , f_ac_user_c_id , f_ac_score) VALUES ($f_ac_pam_id,$f_ac_h_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score)";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa2&user_c_id=".$f_ac_user_c_id);
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}




?>