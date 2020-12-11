<?php 
include '../conn.php';
include 'class_db.php';
require './excel/vendor/autoload.php';

if (isset($_POST["import"])) {

    $allowedFileType = [
        'application/vnd.ms-excel',
        'text/xls',
        'text/xlsx',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];

    if (in_array($_FILES["fileToUpload"]["type"], $allowedFileType)) {

        $targetPath = './upexcel/' . $_FILES['fileToUpload']['name'];
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetPath);

        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(TRUE);
         $spreadsheet = $reader->load($targetPath); //Load the excel form
         
        $worksheet = $spreadsheet->getActiveSheet();
         $highestRow = $worksheet->getHighestRow(); // total number of rows
         $highestColumn = $worksheet->getHighestColumn(); // total number of columns
        $highestColumnIndex = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn); // e.g. 5
         
        $lines = $highestRow - 1; 
        if ($lines <= 0) {
                 Exit ('There is no data in the Excel table');
        }
         
        $sql = "INSERT INTO user ( first_name , last_name , username , password , user_tumn ,  user_kana_id , user_saka_id , user_head , user_status , user_data_id_card , sex , date_of_birth  , nationality , house_number , moo , road , district , area , province , phone , post_code ,
        faculty , department , branch , teaching_disciplines , personnel_type , sub_personnel_type , academic_position , administrative_position ,
        name_of_position , civil_servant_level , date_of_employment , term_of_employment , employment_money , highest_graduate_level , course_name ,
        graduate_disciplines , major_graduate_disciplines , graduate_institution_name , country_of_graduation) VALUES ";
         
        for ($row = 2; $row <= $highestRow; ++$row) {
                 //$name = $worksheet->getCellByColumnAndRow(1, $row)->getValue(); //Name
                 
                 $first_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue(); //first_name
                 $last_name = $worksheet->getCellByColumnAndRow(2, $row)->getValue(); //last_name
                 $username = $worksheet->getCellByColumnAndRow(3, $row)->getValue(); //username
                 $password = $worksheet->getCellByColumnAndRow(4, $row)->getValue(); //password
                 $user_tumn = $worksheet->getCellByColumnAndRow(5, $row)->getValue(); //user_tumn
                 $user_kana_id = $worksheet->getCellByColumnAndRow(6, $row)->getValue(); //user_kana_id
                 $user_saka_id = $worksheet->getCellByColumnAndRow(7, $row)->getValue(); //user_saka_id
                 $user_head = $worksheet->getCellByColumnAndRow(8, $row)->getValue(); //user_head
                 $user_status = $worksheet->getCellByColumnAndRow(9, $row)->getValue(); //user_status

                 $user_data_id_card = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                 $sex = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                 $nationality = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                 $date_of_birth = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                 $house_number = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                 $moo = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                 $road = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                 $district = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
                 $area = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
                 $province = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
                 $phone = $worksheet->getCellByColumnAndRow(20, $row)->getValue();
                 $post_code = $worksheet->getCellByColumnAndRow(21, $row)->getValue();
                 $faculty = $worksheet->getCellByColumnAndRow(22, $row)->getValue();
                 $department = $worksheet->getCellByColumnAndRow(23, $row)->getValue();
                 $branch = $worksheet->getCellByColumnAndRow(24, $row)->getValue();
                 $teaching_disciplines = $worksheet->getCellByColumnAndRow(25, $row)->getValue();
                 $personnel_type = $worksheet->getCellByColumnAndRow(26, $row)->getValue();
                 $sub_personnel_type = $worksheet->getCellByColumnAndRow(27, $row)->getValue();
                 $academic_position = $worksheet->getCellByColumnAndRow(28, $row)->getValue();
                 $administrative_position = $worksheet->getCellByColumnAndRow(29, $row)->getValue();
                 $name_of_position = $worksheet->getCellByColumnAndRow(30, $row)->getValue();
                 $civil_servant_level = $worksheet->getCellByColumnAndRow(31, $row)->getValue();
                 $date_of_employment = $worksheet->getCellByColumnAndRow(32, $row)->getValue();
                 $term_of_employment = $worksheet->getCellByColumnAndRow(33, $row)->getValue();
                 $employment_money = $worksheet->getCellByColumnAndRow(34, $row)->getValue();
                 $highest_graduate_level = $worksheet->getCellByColumnAndRow(35, $row)->getValue();
                 $course_name = $worksheet->getCellByColumnAndRow(36, $row)->getValue();
                 $graduate_disciplines = $worksheet->getCellByColumnAndRow(37, $row)->getValue();
                 $major_graduate_disciplines = $worksheet->getCellByColumnAndRow(38, $row)->getValue();
                 $graduate_institution_name = $worksheet->getCellByColumnAndRow(39, $row)->getValue();
                 $country_of_graduation = $worksheet->getCellByColumnAndRow(40, $row)->getValue();
                 

         
            $sql .= "('$first_name','$last_name','$username','$password', '$user_tumn' , '$user_kana_id','$user_saka_id', '$user_head' ,'$user_status' , '$user_data_id_card', '$sex' , '$date_of_birth' , '$nationality','$house_number','$moo','$road','$district','$area','$province','$phone','$post_code',
			      '$faculty','$department','$branch','$teaching_disciplines','$personnel_type','$sub_personnel_type','$academic_position','$administrative_position',
			      '$name_of_position','$civil_servant_level','$date_of_employment','$term_of_employment','$employment_money','$highest_graduate_level','$course_name',
			      '$graduate_disciplines','$major_graduate_disciplines','$graduate_institution_name','$country_of_graduation'),";
        }
         $sql = rtrim($sql, ","); //Remove the last one,
        try {
            
          if ($conn->query($sql) === TRUE) {
              $message = 'Import ข้อมูลสำเร็จ';
              echo "<script type='text/javascript'>alert('$message');</script>";
              header("location:../index.php?pa8");	

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        } catch (Exception $e) {
            $err = $e->getMessage();
            $message = 'Import ข้อมูลไม่สำเร็จ'.$err;
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("location:../index.php?pa8");
        }
        
     
    } else {
        $type = "error";
        $message = "Invalid File Type. Upload Excel File.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:../index.php?pa8");
    }
}


?>