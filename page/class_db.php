<?php 


function showth($thid){

	include './conn.php';

	$sqlth=" SELECT * FROM f_th WHERE f_thstatus = 0 AND f_thid =".$thid;
	$qryth = mysqli_query($conn,$sqlth);
	$rowth = mysqli_fetch_assoc($qryth);


	echo $rowth['f_thdettail'];


}

function showhh($user_c_id,$f_id){

	include './conn.php';

	$user_id = $_SESSION["USER_ID"];

	$sqljoin=" SELECT * FROM f_action INNER JOIN f_pam ON f_id = f_ac_pam_id WHERE f_ac_user_h_id = '$user_id' AND f_ac_user_c_id = '$user_c_id' AND f_id =".$f_id;
	$qryjoin = mysqli_query($conn,$sqljoin);
	$rowjoin = mysqli_fetch_assoc($qryjoin);

	echo $rowjoin['f_ac_score'];

}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}

function gotopage($page){
	header("location: $page");
}

function goblack(){
	echo "<script type='text/javascript'>window.history.back();</script>";
}


?>