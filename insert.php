<?php
require "connect.php";
global $conn;
$StudentName = $_POST['StudentName'];
$StudentEmail = $_POST['StudentEmail'];
$StudentPassword = $_POST['StudentPassword'];
$StudentAvatar = $_POST['StudentAvatar'];

if (strlen($StudentName) > 0 && strlen($StudentEmail) > 0 && strlen($StudentPassword) > 0) {
    if($StudentAvatar != "NO_IMAGE_STUDENT_REGISTER") {
        $query = "INSERT INTO students (StudentId, StudentName, StudentEmail, StudentPassword, StudentAvatar) VALUES (null, '$StudentName', '$StudentEmail', '$StudentPassword', '$StudentAvatar')";
    }
    else{
        $query = "INSERT INTO students (StudentId, StudentName, StudentEmail, StudentPassword, StudentAvatar) VALUES (null, '$StudentName', '$StudentEmail', '$StudentPassword', '')";
    }
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "STUDENT_INSERT_SUCCESSFUL";
    } else {
        echo "STUDENT_INSERT_FAILED";
    }
} else {
    echo "STUDENT_INSERT_NULL";
}
?>

