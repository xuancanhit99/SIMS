<?php
require "connect.php";
global $conn;
$StudentId = $_POST['StudentId'];
$StudentReport = $_POST['StudentReport'];



    $query = "UPDATE students SET StudentReport='$StudentReport' WHERE StudentId='$StudentId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "STUDENT_REPORT_SUCCESSFUL";
    } else {
        echo "STUDENT_REPORT_FAILED";
    }

?>
