<?php 


function showth($thid){

	include './conn.php';

	$sqlth=" SELECT * FROM f_th WHERE f_thstatus = 0 AND f_thid =".$thid;
	$qryth = mysqli_query($conn,$sqlth);
	$rowth = $qryth->fetch_array();


	echo $rowth['f_thdettail'];


}




?>