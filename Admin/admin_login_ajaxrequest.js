function check_Admin_Login() {
    var admin_log_mail = $("#admin_log_mail").val();
    var admin_log_password = $("#admin_log_password").val();
  
    $.ajax({
      url: "Admin/admin_login.php",
      method: "POST",
      data: {
        checkLogemail: "checkLogmail",
        admin_log_mail: admin_log_mail,
        admin_log_password: admin_log_password,
      },
      success: function (data) {
        if (data == 0) {
          $("#status_admin_msg").html(
            '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
          );
        } else if (data == 1) {
          $("#status_admin_msg").html(
            '<small class="alert alert-success">Success Loading...</small>'
          );
          setTimeout(() => {
            window.location.href = "Admin/admin_dashboard.php";
          }, 1000);
        }
      },
    });
  }
  
  function clearadminloginForm() {
    $("#admin_log_mail").val("");
    $("#admin_log_password").val("");
    $("#status_admin_msg").html(""); 
  }