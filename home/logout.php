<?php
session_start();
$user_id = $_SESSION["USER_ID"];


session_destroy();

include 'Log_logout.php';

header("location:../index.php");

?>