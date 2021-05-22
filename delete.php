<?php
require "connect.php";
global $conn;

$StudentId = $_GET['StudentId'];
$StudentAvatar = $_GET['StudentAvatar'];
if(strlen($StudentId) > 0 && strlen($StudentAvatar) > 0) {
    $query = "DELETE FROM students WHERE StudentId = '$StudentId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        if($StudentAvatar != "NO_IMAGE_STUDENT_UPDATE") {
            unlink("images".$StudentAvatar);
        }
        echo "STUDENT_ACC_DELETED_SUCCESSFUL";
    }
    else {
        echo "STUDENT_ACC_DELETED_FAILED";
    }
}
else{
    echo "STUDENT_ACC_DELETED_NULL";
}
?>