<?php
require "connect.php";
global $conn;
$StudentName = $_POST['StudentName'];
$StudentEmail = $_POST['StudentEmail'];
$StudentPassword = $_POST['StudentPassword'];
$StudentAvatar = $_POST['StudentAvatar'];
$StudentNo = $_POST['StudentNo'];
$StudentGender = $_POST['StudentGender'];
$StudentDOB = $_POST['StudentDOB'];
$StudentClass = $_POST['StudentClass'];
$StudentActive = $_POST['StudentActive'];
$StudentPhone = $_POST['StudentPhone'];

if (strlen($StudentName) > 0 && strlen($StudentEmail) > 0 && strlen($StudentPassword) > 0) {
    if($StudentAvatar != "NO_IMAGE_ADD_STUDENT") {
        $query = "INSERT INTO students (StudentId, StudentNo, StudentName, StudentDOB, StudentClass, StudentGender, StudentPhone, StudentEmail, StudentPassword, StudentActive, StudentAvatar) VALUES (null, '$StudentNo', '$StudentName', '$StudentDOB', '$StudentClass', '$StudentGender', '$StudentPhone', '$StudentEmail', '$StudentPassword', '$StudentActive', '$StudentAvatar')";
    }
    else{
        $query = "INSERT INTO students (StudentId, StudentNo, StudentName, StudentDOB, StudentClass, StudentGender, StudentPhone, StudentEmail, StudentPassword, StudentActive) VALUES (null, '$StudentNo', '$StudentName', '$StudentDOB', '$StudentClass', '$StudentGender', '$StudentPhone', '$StudentEmail', '$StudentPassword', '$StudentActive')";
    }
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "ADD_STUDENT_SUCCESSFUL";
    } else {
        echo "ADD_STUDENT_FAILED";
    }
} else {
    echo "ADD_STUDENT_NULL";
}
?>
