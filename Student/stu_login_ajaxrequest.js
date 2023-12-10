function check_Student_Login() {
    var student_log_mail = $("#student_log_mail").val();
    var student_log_password = $("#student_log_password").val();
  
    $.ajax({
      url: "Student/stu_login.php",
      method: "POST",
      data: {
        checkLogemail: "checkLogmail",
        student_log_mail: student_log_mail,
        student_log_password: student_log_password,
      },
      success: function (data) {
        if (data == 0) {
          $("#status_log_msg").html(
            '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
          );
        } else if (data == 1) {
          $("#status_log_msg").html(
            '<div class="spinner-border text-success" role="status"</div>'
          );
          setTimeout(() => {
            window.location.href = "index.php";
          }, 500);
        }
      },
    });
  }
  
  function clearstuloginForm() {
    $("#student_log_mail").val("");
    $("#student_log_password").val("");
    $("#status_log_msg").html(""); 
  }