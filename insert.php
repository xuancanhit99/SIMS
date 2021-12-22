<?php
require "connect.php";
global $conn;

//$StudentName = "Canh";
//$StudentEmail = "xuancanhit991@gmail.com";
//$StudentPassword = "123";
//$StudentAvatar = "";


$StudentName = $_POST['StudentName'];
$StudentEmail = $_POST['StudentEmail'];
$StudentPassword = $_POST['StudentPassword'];
$StudentAvatar = $_POST['StudentAvatar'];

if (strlen($StudentName) > 0 && strlen($StudentEmail) > 0 && strlen($StudentPassword) > 0) {


    $query = mysqli_query($conn, "SELECT * FROM students WHERE StudentEmail='" . $StudentEmail . "'");
    if (mysqli_num_rows($query) > 0) {
        echo "STUDENT_EMAIL_ALREADY_EXISTS";
    } else {
        if ($StudentAvatar != "NO_IMAGE_STUDENT_REGISTER") {
            $query = "INSERT INTO students (StudentId, StudentName, StudentEmail, StudentPassword, StudentAvatar) VALUES (null, '$StudentName', '$StudentEmail', '$StudentPassword', '$StudentAvatar')";
        } else {
            $query = "INSERT INTO students (StudentId, StudentName, StudentEmail, StudentPassword, StudentAvatar) VALUES (null, '$StudentName', '$StudentEmail', '$StudentPassword', '')";
        }
        $data = mysqli_query($conn, $query);
        if ($data) {
            echo "STUDENT_INSERT_SUCCESSFUL";
        } else {
            echo "STUDENT_INSERT_FAILED";
        }
    }


} else {
    echo "STUDENT_INSERT_NULL";
}
?>

