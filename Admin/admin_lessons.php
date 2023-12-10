<?php
if (!isset($_SESSION)) {
    session_start();
}
define('TITLE', 'Lessons');
define('PAGE', 'lessons');
include('./AdminInclude/admin_header.php');
include('../dbConnection.php');

if (isset($_SESSION['is_admin_login'])) {
    $adminEmail = $_SESSION['admin_log_mail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}
?>

<div class="col-sm-9 mt-5 mx-3">
    <form action="" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3">
            <label for="checkid">Enter Course ID or Name: </label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

    <?php
    if (isset($_REQUEST['checkid'])) {
        $searchTerm = $_REQUEST['checkid'];

        $sql = "SELECT * FROM course WHERE course_id = ? OR course_name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $searchTerm, $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            $_SESSION['course_id'] = $row['course_id'];
            $_SESSION['course_name'] = $row['course_name'];
            ?>

            <h3 class="mt-5 bg-dark text-white p-2">
                Course ID : <?php echo $row['course_id']; ?> and Course Name: <?php echo $row['course_name']; ?>
            </h3>

            <?php
            $lessonSql = "SELECT * FROM lesson WHERE course_id = ? OR course_name = ?";
            $lessonStmt = $conn->prepare($lessonSql);
            $lessonStmt->bind_param("ss", $searchTerm, $searchTerm);
            $lessonStmt->execute();
            $lessonResult = $lessonStmt->get_result();

            if ($lessonResult->num_rows > 0) {
                echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Lesson ID</th>
                                <th scope="col">Lesson Name</th>
                                <th scope="col">Lesson Link</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>';

                while ($lessonRow = $lessonResult->fetch_assoc()) {
                    echo '<tr>';
                    echo '<th scope="row">' . $lessonRow["lesson_id"] . '</th>';
                    echo '<td>' . $lessonRow["lesson_name"] . '</td>';
                    echo '<td>' . $lessonRow["lesson_link"] . '</td>';
                    echo '<td>
                        <form action="admin_editlesson.php" method="POST" class="d-inline">
                            <input type="hidden" name="id" value=' . $lessonRow["lesson_id"] . '>
                            <button type="button" class="btn btn-info mr-3" data-bs-toggle="modal" data-bs-target="#lesson_edit_warning_model' . $lessonRow["lesson_id"] . '">
                                <i class="fas fa-pen"></i>
                            </button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#lesson_delete_model' . $lessonRow["lesson_id"] . '">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>';
                // Edit Warning Modal
        echo '<div class="modal fade" id="lesson_edit_warning_model' . $lessonRow["lesson_id"] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="lesson_edit_warning_modelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="lesson_edit_warning_modelLabel">Update Lesson Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Are you sure you want to edit the lesson <strong>' . $lessonRow["lesson_name"] . '</strong> ?</h6>
                    <p><strong>Warning:</strong> Update a lesson may affect user data and ongoing activities associated with this lesson.</p>           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="admin_lessoncourse.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="' . $lessonRow["lesson_id"] . '">
                        <button type="submit" class="btn btn-info" name="view" value="View">
                            <i class="fas fa-pen"></i> Continue Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>';

                    
                    // Delete Modal
                    echo '<div class="modal fade" id="lesson_delete_model' . $lessonRow["lesson_id"] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="lesson_delete_modelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="lesson_delete_modelLabel">Delete Lesson</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $lessonRow["lesson_id"] . '">
                                        <input type="hidden" name="lesson_name" value="' . $lessonRow["lesson_name"] . '">
                                        <h6>Are you sure you want to delete the Lesson <strong>' . $lessonRow["lesson_name"] . '</strong> with Lesson ID <strong>' . $lessonRow["course_id"] . '</strong>?</h6>
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
                echo '<div class="alert alert-dark mt-4" role="alert">
                        No lessons found for the selected course.
                    </div>';
            }
        } else {
            echo '<div class="alert alert-dark mt-4" role="alert">
                    Course Not Found!
                </div>';
        }
    }
    ?>
</div>



<?php
if (isset($_SESSION['course_id'])) {
    echo '<div><a class="btn btn-danger box" href="./admin_addLessons.php"><i class="fas fa-plus fa-2x"></i></a></div>';
}
?>

</div>
<!-- div Row close from header -->
<?php include('./AdminInclude/admin_footer.php'); ?>
