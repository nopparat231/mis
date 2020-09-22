

<?php if (isset($_POST['saveh3'])){
  include '../conn.php';

  $h31 = $_POST['h31'];
  $h32 = $_POST['h32'];
  $h33 = $_POST['h33'];

  $user_c_id = $_POST['user_c_id'];
  $type = $_POST['type'];
  //print_r($h31);

  for ($i=0; $i < COUNT($h31); $i++){ 

    $f_phhh_detail1 = $h31[$i];
    $f_phhh_detail2 = $h32[$i];
    $f_phhh_detail3 = $h33[$i];


//echo($f_phhh_detail3);

$sqlacdd =" SELECT * FROM f_action WHERE f_ac_user_c_id = '$user_c_id' AND f_ac_status LIKE '1' ";
$qryacdd = mysqli_query($conn,$sqlacdd);
$rowscdd = mysqli_fetch_assoc($qryacdd);
$rowcheckac = mysqli_num_rows($qryacdd);

if ($rowcheckac > 0) {
  $sql = "INSERT INTO f_phhh (f_phhh_user_c_id , f_phhh_detail1 ,f_phhh_detail2,f_phhh_detail3, f_phhh_status) VALUES ( '$user_c_id' ,  '$f_phhh_detail1','$f_phhh_detail2','$f_phhh_detail3', 1)";

}else{
  $sql = "INSERT INTO f_phhh (f_phhh_user_c_id , f_phhh_detail1 ,f_phhh_detail2,f_phhh_detail3, f_phhh_status) VALUES ( '$user_c_id' ,  '$f_phhh_detail1','$f_phhh_detail2','$f_phhh_detail3', 0)";

}
   
    if ($conn->query($sql) === TRUE) {

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }


  }

  header('Location: ../index.php?ph&ph3&user_c_id='.$user_c_id.'&showphhh');
  $conn->close();
  ?>

  <?php } ?>