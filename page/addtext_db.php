	<?php 
	include '../conn.php';

	$text = $_POST['text'];

	$sql = "INSERT INTO `mis`.`f_pam` (`f_id`, `f_th`, `f_hh`, `f_hhh`, `f_score`, `f_pam_num`, `f_staus`) VALUES (NULL, '3', '3', '$text', '5', '1', '0');";

	if ($conn->query($sql) === TRUE) {
		
		echo "Ok";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

	?>
