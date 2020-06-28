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

	addaction($rowf['f_id'],$rowf['f_h_id'],$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id);


}	

}else{
	echo "Error";
}




function addaction($f_ac_pam_id,$f_ac_h_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score,$f_ac_rob,$f_ac_kid_from,$f_ac_kid_end,$th_id)
{
	include '../conn.php';


	$sql = "INSERT INTO f_action (f_ac_pam_id , f_ac_th_id ,f_ac_h_id , f_ac_user_h_id , f_ac_user_c_id , f_ac_score , f_ac_rob , f_ac_kid_from, f_ac_kid_end) VALUES ($f_ac_pam_id,$th_id,$f_ac_h_id,$f_ac_user_h_id,$f_ac_user_c_id,$f_ac_score ,$f_ac_rob ,$f_ac_kid_from ,$f_ac_kid_end )";

	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa2&user_c_id=$f_ac_user_c_id&type=$th_id");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}




?>