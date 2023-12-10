<?php
if (!isset($_SESSION)) {
    session_start();
}

define('TITLE', 'Change Password');
define('PAGE', 'changepass');
include('./AdminInclude/admin_header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
    $admin_email = $_SESSION['admin_log_mail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}

$admin_email = $_SESSION['admin_log_mail'];

if (isset($_REQUEST['adminPassUpdatebtn'])) {
    if ($_REQUEST['admin_pass'] == "") {
        // msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    } else {
        $sql = "SELECT * FROM admin WHERE admin_email='$admin_email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $admin_pass = $_REQUEST['admin_pass'];
            $sql = "UPDATE admin SET admin_pass = '$admin_pass' WHERE admin_email = '$admin_email'";

            if ($conn->query($sql) == TRUE) {
                // below msg display on form submit success
                $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
            } else {
                // below msg display on form submit failed
                $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
            }
        }
    }
}
?>

<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php echo $admin_email ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputnewpassword">New Password</label>
                    <input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="admin_pass">
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
                <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                <?php if (isset($passmsg)) {echo $passmsg; } ?>
            </form>
        </div>
    </div>
</div>
</div>
<!-- div Row close from header -->
</div>
<!-- div Conatiner-fluid close from header -->
<?php include('./AdminInclude/admin_footer.php'); ?>
