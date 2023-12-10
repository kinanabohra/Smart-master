<?php
if (!isset($_SESSION)) {
    session_start();
}

define('TITLE', 'Courses');
define('PAGE', 'courses');

include('./AdminInclude/admin_header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['admin_log_mail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}
?>

<div class="col-sm-9 mt-5">
    <!-- Table -->
    <p class="bg-dark text-white p-2">List of Courses</p>
    <?php
    $sql = "SELECT * FROM course";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">Course ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">' . $row["course_id"] . '</th>';
                echo '<td>' . $row["course_name"] . '</td>';
                echo '<td>' . $row["course_author"] . '</td>';
                echo '<td>
                <form action="admin_editcourse.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value=' . $row["course_id"] . '>
                <button type="button" class="btn btn-info mr-3" data-bs-toggle="modal" data-bs-target="#course_edit_warning_model' . $row["course_id"] . '">
                    <i class="fas fa-pen"></i>
                </button>
            </form>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#course_delete_model' . $row["course_id"] . '">
            <i class="far fa-trash-alt"></i>
            </button>
        </td>
    </tr>';
            
    
    // Edit Warning Modal
    echo '<div class="modal fade" id="course_edit_warning_model' . $row["course_id"] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="course_edit_warning_modelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="course_edit_warning_modelLabel">Update Course Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Are you sure you want to edit the course <strong>' . $row["course_name"] . '</strong> ?</h6>
                    <p><strong>Warning:</strong> Update a course may affect user data and ongoing activities associated with this course.</p>           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="admin_editcourse.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="' . $row["course_id"] . '">
                        <button type="submit" class="btn btn-info" name="view" value="View">
                            <i class="fas fa-pen"></i> Continue Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>';

                    
                    // Delete Modal
                    echo '<div class="modal fade" id="course_delete_model' . $row["course_id"] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="course_delete_modelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="course_delete_modelLabel">Delete Course</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["course_id"] . '">
                                        <input type="hidden" name="course_name" value="' . $row["course_name"] . '">
                                        <h6>Are you sure you want to delete the Course <strong>' . $row["course_name"] . '</strong> with Course ID <strong>' . $row["course_id"] . '</strong>?</h6>
                                        <p>This action cannot be undone.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger" name="delete" value="Delete">
                                        <i class="far fa-trash-alt"></i> Delete
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                
        echo '</tbody>
            </table>';
    } else {
        echo "0 Result";
    }

    if (isset($_REQUEST['delete'])) {
        $sql = "DELETE FROM course WHERE course_id = {$_REQUEST['id']}";
        if ($conn->query($sql) === TRUE) {
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {
            echo "Unable to Delete Data";
        }
    }
    ?>


<!-- Row close from header -->
<div><a class="btn btn-danger box" href="./admin_addCourses.php"><i class="fas fa-plus fa-2x"></i></a></div>
</div>
<!-- Container-fluid close from header -->


<?php
include('./AdminInclude/admin_footer.php');
?>
                    