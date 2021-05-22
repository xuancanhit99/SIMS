<?php
require "connect.php";
global $conn;
$StudentId = $_POST['StudentId'];
$StudentNewPassword = $_POST['StudentNewPassword'];


if (strlen($StudentId) > 0 && strlen($StudentNewPassword) > 0) {
    $query = "UPDATE students SET StudentPassword='$StudentNewPassword' WHERE StudentId='$StudentId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "STUDENT_CHANGE_PASSWORD_SUCCESSFUL";
    } else {
        echo "STUDENT_CHANGE_PASSWORD_FAILED";
    }
} else {
    echo "STUDENT_CHANGE_PASSWORD_NULL";
}
?>
