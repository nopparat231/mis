<?php
date_default_timezone_set('Asia/Bangkok');
$used_date = date("d/m/Y H:i:s");
$used_time_detail = "เข้าสู่ระบบสำเร็จ";

$sql = "INSERT INTO used_time (used_time_id, used_time_user_id, used_date, used_time_detail, used_time_status) VALUES (NULL, '$user_id', '$used_date','$used_time_detail','0')";

if ($conn->query($sql) === TRUE) {
    
    //echo "Ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
