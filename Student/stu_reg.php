<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbconnection.php');


if(isset($_POST['checkemail']) && isset($_POST['student_mail'])){
      $student_mail = $_POST['student_mail'];
  $sql = "SELECT stu_email FROM student WHERE stu_email='".$student_mail."'";
  $result = $conn->query($sql);
  $row = $result->num_rows;
  echo json_encode($row);
}



if(isset($_POST['student_signup']) && isset($_POST['student_name']) && isset($_POST['student_mail']) && isset($_POST['student_password'])){


    $student_name = $_POST['student_name'];
    $student_mail = $_POST['student_mail'];
    $student_password= $_POST['student_password'];

    $sql = "INSERT INTO student(stu_name, stu_email, stu_pass ) VALUES('$student_name','$student_mail','$student_password')";
    
    if($conn->query($sql) == TRUE){
        echo json_encode("OK");
    }
    else{
        echo json_encode("Failed");
    }
 
}

?>