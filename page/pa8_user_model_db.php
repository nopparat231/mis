<?php 
include '../conn.php';


$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
          {
$user_tumn = $filesop[0];
$first_name = $filesop[1];
$last_name = $filesop[2];
$username = $filesop[3];
$password = $filesop[4];
$user_kana_id = $filesop[5];
$user_head = $filesop[6];
$user_status = $filesop[7];
$user_status = $filesop[8];

if($c>1){ 
$sql = "INSERT INTO user ( user_tumn , first_name , last_name , username , password , user_kana_id , user_saka_id , user_head , user_status) VALUES ( '$user_tumn' , '$first_name','$last_name','$username','$password','$user_kana_id','$user_saka_id', '$user_head' ,'$user_status')";
$stmt = mysqli_prepare($conn,$sql);
mysqli_stmt_execute($stmt);
}

$c = $c + 1;
 }

  if($sql){
    $message = 'Import ข้อมูลสำเร็จ';
    echo "<script type='text/javascript'>alert('$message');</script>";
    
   } 
else
{
    $message = 'Import ข้อมูลไม่สำเร็จ';
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>