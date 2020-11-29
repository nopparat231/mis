<?php 
include '../conn.php';
include 'class_db.php';


if (isset($_POST['add_user'])) {
	
	$user_tumn = $_POST['user_tumn'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_status = $_POST['user_status'];
	$user_kana_id = $_POST['user_kana'];
	$user_saka_id = $_POST['user_saka'];

	$user_data_id_card = $_POST['user_data_id_card'];
	$sex = $_POST['sex'];
	$nationality = $_POST['nationality'];
	$date_of_birth = $_POST['date_of_birth'];
	$house_number = $_POST['house_number'];
	$moo = $_POST['moo'];
	$road = $_POST['road'];
	$district = $_POST['district'];
	$area = $_POST['area'];
	$province = $_POST['province'];
	$phone = $_POST['phone'];
	$post_code = $_POST['post_code'];
	$faculty = $_POST['faculty'];
	$department = $_POST['department'];
	$branch = $_POST['branch'];
	$teaching_disciplines = $_POST['teaching_disciplines'];
	$personnel_type = $_POST['personnel_type'];
	$sub_personnel_type = $_POST['sub_personnel_type'];
	$academic_position = $_POST['academic_position'];
	$administrative_position = $_POST['administrative_position'];
	$name_of_position = $_POST['name_of_position'];
	$civil_servant_level = $_POST['civil_servant_level'];
	$date_of_employment = $_POST['date_of_employment'];
	$term_of_employment = $_POST['term_of_employment'];
	$employment_money = $_POST['employment_money'];
	$highest_graduate_level = $_POST['highest_graduate_level'];
	$course_name = $_POST['course_name'];
	$graduate_disciplines = $_POST['graduate_disciplines'];
	$major_graduate_disciplines = $_POST['major_graduate_disciplines'];
	$graduate_institution_name = $_POST['graduate_institution_name'];
	$country_of_graduation = $_POST['country_of_graduation'];
	$user_head = $_POST['user_head'];

	$sqlhuser=" SELECT * FROM user WHERE username = '$username' ";
	$qryhuser = mysqli_query($conn,$sqlhuser);
	$rowcheckuser = mysqli_num_rows($qryhuser); 

	if ($rowcheckuser == 0) {

		$sql = "INSERT INTO user ( user_tumn , first_name , last_name , username , password , user_kana_id , user_saka_id , user_head , user_status) VALUES ( '$user_tumn' , '$first_name','$last_name','$username','$password','$user_kana_id','$user_saka_id', '$user_head' ,'$user_status')";

		if ($conn->query($sql) === TRUE) {

			$strmax = "SELECT MAX(user_id) maximum FROM user";
			$qrymax = mysqli_query($conn,$strmax);
			$maxx = mysqli_fetch_assoc($qrymax);
			$user_id = $maxx["maximum"];
			

			$sql_user_data = "INSERT INTO user_data (user_data_id_card , user_id , sex , date_of_birth  , nationality , house_number , moo , road , district , area , province , phone , post_code ,
			faculty , department , branch , teaching_disciplines , personnel_type , sub_personnel_type , academic_position , administrative_position ,
			name_of_position , civil_servant_level , date_of_employment , term_of_employment , employment_money , highest_graduate_level , course_name ,
			graduate_disciplines , major_graduate_disciplines , graduate_institution_name , country_of_graduation ) VALUE ( '$user_data_id_card','$user_id', '$sex' , '$date_of_birth' , '$nationality','$house_number','$moo','$road','$district','$area','$province','$phone','$post_code',
			'$faculty','$department','$branch','$teaching_disciplines','$personnel_type','$sub_personnel_type','$academic_position','$administrative_position',
			'$name_of_position','$civil_servant_level','$date_of_employment','$term_of_employment','$employment_money','$highest_graduate_level','$course_name',
			'$graduate_disciplines','$major_graduate_disciplines','$graduate_institution_name','$country_of_graduation' ) ";

			if ($conn->query($sql_user_data) === TRUE) {
				header("location:../index.php?pa8");	
			} else {
				echo "Error: " . $sql_user_data . "<br>" . $conn->error;
			}

			
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}else{

		$message = 'มีชื่อผู้ใช้นี้แล้ว';
		echo "<script type='text/javascript'>alert('$message');</script>";
		header("location:../index.php?pa8");

	}

	
	$conn->close();



}elseif (isset($_POST['edit_user'])) {
	
	$user_tumn = $_POST['user_tumn'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user_status = $_POST['user_status'];
	$user_kana_id = $_POST['user_kana'];
	$user_saka_id = $_POST['user_saka'];

	$user_data_id_card = $_POST['user_data_id_card'];
	$sex = $_POST['sex'];
	$nationality = $_POST['nationality'];
	$date_of_birth = $_POST['date_of_birth'];
	$house_number = $_POST['house_number'];
	$moo = $_POST['moo'];
	$road = $_POST['road'];
	$district = $_POST['district'];
	$area = $_POST['area'];
	$province = $_POST['province'];
	$phone = $_POST['phone'];
	$post_code = $_POST['post_code'];
	$faculty = $_POST['faculty'];
	$department = $_POST['department'];
	$branch = $_POST['branch'];
	$teaching_disciplines = $_POST['teaching_disciplines'];
	$personnel_type = $_POST['personnel_type'];
	$sub_personnel_type = $_POST['sub_personnel_type'];
	$academic_position = $_POST['academic_position'];
	$administrative_position = $_POST['administrative_position'];
	$name_of_position = $_POST['name_of_position'];
	$civil_servant_level = $_POST['civil_servant_level'];
	$date_of_employment = $_POST['date_of_employment'];
	$term_of_employment = $_POST['term_of_employment'];
	$employment_money = $_POST['employment_money'];
	$highest_graduate_level = $_POST['highest_graduate_level'];
	$course_name = $_POST['course_name'];
	$graduate_disciplines = $_POST['graduate_disciplines'];
	$major_graduate_disciplines = $_POST['major_graduate_disciplines'];
	$graduate_institution_name = $_POST['graduate_institution_name'];
	$country_of_graduation = $_POST['country_of_graduation'];
	$user_head = $_POST['user_head'];
	$user_id = $_POST['user_id'];

	$sql = "UPDATE user SET 
	user_tumn = '$user_tumn' , 
	first_name  = '$first_name' , 
	last_name ='$last_name' , 
	username = '$username' , 
	password = '$password' , 
	user_kana_id = '$user_kana_id' , 
	user_saka_id = '$user_saka_id' , 
	user_head = '$user_head' ,
	user_status = '$user_status' 
	WHERE user_id =".$user_id;

	if ($conn->query($sql) === TRUE) {
		
		$sqlu = "UPDATE user_data SET 
		user_data_id_card = '$user_data_id_card' , 
		sex = '$sex' , 
		date_of_birth = '$date_of_birth' , 
		nationality = '$nationality' , 
		house_number = '$house_number' , 
		moo = '$moo' , 
		road = '$road' , 
		district = '$district' , 
		area = '$area' , 
		province = '$province' , 
		phone = '$phone' , 
		faculty = '$faculty' , 
		department = '$department' , 
		branch = '$branch' , 
		teaching_disciplines = '$teaching_disciplines' , 
		sub_personnel_type = '$sub_personnel_type' , 
		academic_position = '$academic_position' , 
		administrative_position = '$administrative_position' , 
		name_of_position = '$name_of_position' , 
		civil_servant_level = '$civil_servant_level' , 
		date_of_employment = '$date_of_employment' , 
		term_of_employment = '$term_of_employment' , 
		employment_money = '$employment_money' , 
		highest_graduate_level = '$highest_graduate_level' , 
		course_name = '$course_name' , 
		graduate_disciplines = '$graduate_disciplines' , 
		major_graduate_disciplines = '$major_graduate_disciplines' ,
		graduate_institution_name = '$graduate_institution_name' , 
		country_of_graduation = '$country_of_graduation' 

		WHERE user_id =".$user_id;

		if ($conn->query($sqlu) === TRUE) {
			header("location:../index.php?pa8");
		}else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}



	$conn->close();



}elseif (isset($_GET['del_user'])) {
	
	$user_id = $_GET['user_id'];


	$sql =  "UPDATE user SET user_status = 3 WHERE user_id =".$user_id;
	if ($conn->query($sql) === TRUE) {
		header("location:../index.php?pa8");
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();



}


?>