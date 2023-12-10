<?php
if (!isset($_SESSION)) {
    session_start();
}

define('TITLE', 'Student Detail');
define('PAGE', 'Student Detail');

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
    <p class="bg-dark text-white p-2">List of Students</p>
    <?php
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo '<table class="table">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>';
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">' . $row["stu_id"] . '</th>';
                echo '<td>' . $row["stu_name"] . '</td>';
                echo '<td>' . $row["stu_email"] . '</td>';
                echo '<td>
                <form action="admin_editstudent.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value=' . $row["stu_id"] . '>
                <button type="button" class="btn btn-info mr-3" data-bs-toggle="modal" data-bs-target="#stu_edit_warning_model' . $row["stu_id"] . '">
                    <i class="fas fa-pen"></i>
                </button>
            </form>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#stu_delete_model' . $row["stu_id"] . '">
            <i class="far fa-trash-alt"></i>
            </button>
        </td>
    </tr>';
            
    
    // Edit Warning Modal
    echo '<div class="modal fade" id="stu_edit_warning_model' . $row["stu_id"] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="stu_edit_warning_modelLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="stu_edit_warning_modelLabel">Update Student Detail</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Are you sure you want to edit the detail of <strong>' . $row["stu_name"] .  '</strong> ?</h6>
                    <p><strong>Warning:</strong> Update a student detail may affect user data and ongoing activities associated with this student.</p>           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="admin_editstudent.php" method="POST" class="d-inline">
                        <input type="hidden" name="id" value="' . $row["stu_id"] . '">
                        <button type="submit" class="btn btn-info" name="view" value="View">
                            <i class="fas fa-pen"></i> Continue Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>';

                    
                    // Delete Modal
                    echo '<div class="modal fade" id="stu_delete_model' . $row["stu_id"] . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="stu_delete_modelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="stu_delete_modelLabel">Delete Student ID</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="POST" class="d-inline">
                                        <input type="hidden" name="id" value="' . $row["stu_id"] . '">
                                        <input type="hidden" name="stu_name" value="' . $row["stu_name"] . '">
                                        <h6>Are you sure you want to delete the detail of Student <strong>' . $row["stu_name"] . '</strong> with Student ID <strong>' . $row["stu_id"] . '</strong>?</h6>
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
        $sql = "DELETE FROM student WHERE stu_id = {$_REQUEST['id']}";
        if ($conn->query($sql) === TRUE) {
            echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
        } else {
            echo "Unable to Delete Data";
        }
    }
    ?>


<!-- Row close from header -->
<div><a class="btn btn-danger box" href="./admin_addstudents.php"><i class="fas fa-plus fa-2x"></i></a></div>
</div>
<!-- Container-fluid close from header -->


<?php
include('./AdminInclude/admin_footer.php');
?>
                    