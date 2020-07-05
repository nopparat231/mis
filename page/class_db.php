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
	echo "<script type='text/javascript'>window.location.href = '$page';</script>";
}

function goblack(){
	echo "<script type='text/javascript'>window.history.back();</script>";
}

function savescore($user_c,$type,$f_ac_h_id,$score){
	include './conn.php';

	$sql = "INSERT INTO f_save_score (s_id , s_u_c , s_f_h , s_f_ac_h_id , s_f_score , s_status) VALUES (null , '$user_c' , '$type' , $f_ac_h_id , '$score' , 0)";

	if ($conn->query($sql) === false) {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}else{
		gotopage("index.php?pa2&user_c_id=$user_c&type=$type");
	}

	$conn->close();

}


function showscore($user_c,$type){

	include './conn.php';

	$sqlscore=" SELECT SUM(s_f_score) as score , s_u_c , s_f_h FROM f_save_score WHERE s_u_c = '$user_c' AND s_f_h =".$type;
	$qryscore = mysqli_query($conn,$sqlscore);
	$rowscore = mysqli_fetch_assoc($qryscore);


	echo number_format($rowscore['score'],2);

	$conn->close();

}



?>