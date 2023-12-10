$(document).ready(function () {
  $("#student_mail").on("blur", function () {
    var reg = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
    var student_mail = $("#student_mail").val();
    $.ajax({
      url: "Student/stu_reg.php",
      method: "POST",
      data: {
        checkemail: "checkmail",
        student_mail: student_mail,
      },
      success: function (data) {
        if (data != 0) {
          $("#status_msg2").html(
            '<small style="color:red;">Email ID is Already in Use. Please choose a different email.</small>'
          );
          $("#signup").attr("disabled", true);
        } else if (data == 0 && reg.test(student_mail)) {
          $("#status_msg2").html(
            '<small style="color:green;">You Can Proceed.</small>'
          );
          $("#signup").attr("disabled", false);
        } else if (!reg.test(student_mail)) {
          $("#status_msg2").html(
            '<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>'
          );
          $("#signup").attr("disabled", false);
        }
        if (student_mail == "") {
          $("#status_msg2").html(
            '<small style="color:red;">Please Enter Email !</small>'
          );
        }
      },
    });
  });
});

function addstu() {
  var reg = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
  var student_name = $("#student_name").val();
  var student_mail = $("#student_mail").val();
  var student_password = $("#student_password").val();

  if (student_name.trim() == "") {
    $("#status_msg1").html(
      '<small style="color:red;">Please Enter Name !</small>'
    );
    $("#student_name").focus();
    return false;
  } else if (student_mail.trim() == "") {
    $("#status_msg2").html(
      '<small style="color:red;">Please Enter Email !</small>'
    );
    $("#student_mail").focus();
    return false;
  } else if (student_mail.trim() != "" && !reg.test(student_mail)) {
    $("#status_msg2").html(
      '<small style="color:red;">Please Enter Valid Email e.g. example@mail.com</small>'
    );
    $("#student_mail").focus();
    return false;
  } else if (student_password.trim() == "") {
    $("#status_msg3").html(
      '<small style="color:red;">Please Enter Password !</small>'
    );
    $("#student_password").focus();
    return false;
  } else {
    $.ajax({
      url: "Student/stu_reg.php",
      method: "POST",
      dataType: "json",
      data: {
        student_signup: "student_signup",
        student_name: student_name,
        student_mail: student_mail,
        student_password: student_password,
      },
      success: function (data) {
        console.log(data);
        if (data === "OK") {
          $("#success_msg").html(
            "<span style='background-color:  #4CAF50; color: #fff; padding: 10px; border-radius: 5px; font-size: 16px; font-weight: bold;'>Registration Successful ! </span>"
          );
          clearstuRegForm();
          setTimeout(() => {
            window.location.href = "index.php";
          }, 1000);
        } else if (data === "Failed") {
          $("#success_msg").html(
            "<span style='background-color: #FF5733; color: #fff; padding: 10px; border-radius: 5px; font-size: 16px; font-weight: bold;'>Registration Unsuccessful. </span>"
          );
          setTimeout(() => {
            window.location.href = "index.php";
          }, 1000);
        }
      },
    });
  }
}

function clearstuRegForm() {
  $("#stuRegForm").trigger("reset");
  $("#status_msg1").html(" ");
  $("#status_msg2").html(" ");
  $("#status_msg3").html(" ");
}



