<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

// if(!isset($_SESSION['is_login'])){
  if(isset($_POST['checkLogemail']) && isset($_POST['admin_log_mail']) && isset($_POST['admin_log_password'])){
    $admin_log_mail = $_POST['admin_log_mail'];
    $admin_log_password = $_POST['admin_log_password'];
    $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email='".$admin_log_mail."' AND  admin_pass='".$admin_log_password."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
  if($row === 1){
    $_SESSION['is_admin_login']= true;
    $_SESSION['admin_log_mail']= $admin_log_mail;
    echo json_encode($row);
   }
  else if($row === 0){
   echo json_encode($row);
   }
  }
// }
?>