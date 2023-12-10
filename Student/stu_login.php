<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');

//f(!isset($_SESSION['is_login'])){
if(isset($_POST['checkLogemail']) && isset($_POST['student_log_mail']) && isset($_POST['student_log_password'])){
    $student_log_mail = $_POST['student_log_mail'];
    $student_log_password = $_POST['student_log_password'];
    $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email='".$student_log_mail."' AND  stu_pass='".$student_log_password."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
  if($row === 1){
    $_SESSION['is_login']= true;
    $_SESSION['student_log_mail']= $student_log_mail;
    echo json_encode($row);
   }
  else if($row === 0){
   echo json_encode($row);
   }
  }
// }
?>