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

	$sqlscore=" SELECT * FROM f_save_score WHERE s_u_c = '$user_c' AND s_f_h =".$type;
	$qryscore = mysqli_query($conn,$sqlscore);
	//$rowscore = mysqli_fetch_assoc($qryscore);

	$rowcheckac = mysqli_num_rows($qryscore);


	

	if ($type == 2) {

		if ($rowcheckac > 0) {
			while ($rownew = $qryscore->fetch_array()) {
				$su += $rownew['s_f_score'];

				return number_format($su/5,2);
			}
		}else{
			return 0;
		}


		//echo number_format($score = $rowscore['score']/5);
	}

	if ($type == 3) {

		if ($rowcheckac > 0) {
			$t = 0;
			$w = 0;
			$n = 0;
			$o = 0;

			while ($rownew = $qryscore->fetch_array()) {

				if ($rownew['s_f_score'] >= 3) {
					$t+=1;
				//echo $rownew['s_f_score'];
				}elseif ($rownew['s_f_score'] <= 2) {
					$w+=1;
				}elseif ($rownew['s_f_score'] <= 1) {
					$n+=1;
				}elseif ($rownew['s_f_score'] <= 0) {
					$o+=1;
				}
			}

			if ($t <> 0) {
				$t = $t*3;
			}
			if ($w <> 0) {
				$w = $w*2;
			}
			if ($n <> 0) {
				$n = $n*1;
			}
			if ($o <> 0) {
				$o = $o*0;
			}

			$sumall = $t+$w+$n+$o;

			return number_format($sumall/39,2);

			}else{
				return 0;
			}



		//echo number_format($score = $rowscore['score']/5);
		}


		$conn->close();

	}



	?>