<?php 

include '../conn.php';


$rob = $_GET['rob'];
$y = $_GET['y'];
$yy = $_GET['yy'];
//รอบที่ประเมิน

$nameh = $_GET['nameh'];
$tumh = $_GET['tumh'];
//ตำแหน่งผู้ถูกประเมิน

$namec = $_GET['namec'];
$tumc = $_GET['tumc'];

$f_ac_user_h_id = 1;
$f_ac_user_c_id = 1;

$sqlf=" SELECT * FROM f_pam ";
$qryf = mysqli_query($conn,$sqlf);

$rowcheckf = mysqli_num_rows($qryf); 

while($rowf = $qryf->fetch_array()){

	$ac = "a".$rowf['f_id'].$rowf['f_hh'];

	$f_ac_score = $_GET[$ac];

	addaction($rowf['f_id'],$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score);
}


function addaction($f_ac_pam_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score)
{
	include '../conn.php';


	$sql = "INSERT INTO f_action (f_ac_pam_id , f_ac_user_h_id , f_ac_user_c_id , f_ac_score) VALUES ($f_ac_pam_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score)";

	if ($conn->query($sql) === TRUE) {
		echo "+เพิ่ม <br>";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}




?>