<?php
include '../conn.php';
$target_dir = "../uploads/";
// can upload same image using rand function
$file_name = basename($_FILES["fileToUpload"]["name"]);
$final_name = rand(1000,1000000).$file_name;

$target_file = $target_dir . $final_name;

$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
// can upload same image using rand function


  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //insert form data in the database
$insert = $conn->query("INSERT upload (upload_detail) VALUES ('".$final_name."')");

if ($insert === false) {
    echo "Error: " . $insert . "<br>" . $conn->error;
}else{
    echo "ไฟล์แนบ ".$file_name;
}
   
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}