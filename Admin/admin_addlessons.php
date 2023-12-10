<?php
// Start session if not already started
if (!isset($_SESSION)) {
    session_start();
}

// Include necessary files
define('TITLE', 'Add Lesson');
include('./AdminInclude/admin_header.php');
include('../dbConnection.php');

// Check if admin is logged in
if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['admin_log_mail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}

if (isset($_REQUEST['lessonSubmitBtn'])) {
    // Checking for Empty Fields
    if (
        ($_REQUEST['lesson_name'] == "") ||
        ($_REQUEST['lesson_desc'] == "") ||
        ($_REQUEST['course_id'] == "") ||
        ($_REQUEST['course_name'] == "")
    ) {
        // Display a message if required field is missing
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
    } else {
        // Assigning User Values to Variables
        $lesson_name = $_REQUEST['lesson_name'];
        $lesson_desc = $_REQUEST['lesson_desc'];
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['course_name'];

        // Upload Lesson Link
        $lesson_link = $_FILES['lesson_link']['name'];
        $lesson_link_temp = $_FILES['lesson_link']['tmp_name'];
        $link_folder = '../Dynamic_video_img/lessons_vid/' . $lesson_link;
        move_uploaded_file($lesson_link_temp, $link_folder);

        // Insert data into the database
        $sql = "INSERT INTO lesson (lesson_name, lesson_desc, lesson_link, course_id, course_name) VALUES ('$lesson_name', '$lesson_desc','$link_folder', '$course_id', '$course_name')";
        
        if ($conn->query($sql) == TRUE) {
            // Display success message on form submit success
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Lesson Added Successfully </div>';
        } else {
            // Display error message on form submit failed
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Add Lesson </div>';
        }
    }
}
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Lesson</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php if(isset($_SESSION['course_id'])) { echo $_SESSION['course_id']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="<?php if(isset($_SESSION['course_name'])) { echo $_SESSION['course_name']; } ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lesson_name">Lesson Name</label>
            <input type="text" class="form-control" id="lesson_name" name="lesson_name">
        </div>
        <div class="form-group">
            <label for="lesson_desc">Lesson Description</label>
            <textarea class="form-control" id="lesson_desc" name="lesson_desc" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="lesson_link">Lesson Video Link</label>
            <input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
            <a href="admin_lessons.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) { echo $msg; } ?>
    </form>
</div>

<!-- JavaScript for input validation -->
<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if (!(/[0-9]/.test(ch))) {
            evt.preventDefault();
        }
    }
</script>
</div> <!-- div Row close from header -->
</div> <!-- div Container-fluid close from header -->
<?php include('./AdminInclude/admin_footer.php'); ?>

