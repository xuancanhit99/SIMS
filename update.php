<?php
require "connect.php";
global $conn;
$StudentId = $_POST['StudentId'];
$StudentNo = $_POST['StudentNo'];
$StudentName = $_POST['StudentName'];
$StudentDOB = $_POST['StudentDOB'];
$StudentClass = $_POST['StudentClass'];
$StudentPhone = $_POST['StudentPhone'];
$StudentEmail = $_POST['StudentEmail'];
$StudentAvatar = $_POST['StudentAvatar'];
$StudentGender = $_POST['StudentGender'];
$StudentCurrentAvatar = $_POST['StudentCurrentAvatar'];

//$StudentId = "29";
//$StudentNo = "12345";
//$StudentName = "Name";
//$StudentDOB = "DOB";
//$StudentClass = "Class";
//$StudentPhone = "123123123123";
//$StudentGender = "0";
//$StudentEmail = "a@gmail.com";
//$StudentAvatar = "123123";
//$StudentCurrentAvatar = "/1620556160674_1620556161769.jpg";

if (strlen($StudentName) > 0 && strlen($StudentEmail) > 0 && strlen($StudentId) > 0) {
    $query = "UPDATE students SET StudentNo='$StudentNo', StudentName='$StudentName', StudentDOB='$StudentDOB', StudentClass='$StudentClass', StudentPhone='$StudentPhone',  StudentEmail='$StudentEmail', StudentAvatar='$StudentAvatar', StudentGender='$StudentGender' WHERE StudentId='$StudentId'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        if($StudentCurrentAvatar != "NO_CURRENT_IMAGE_STUDENT_UPDATE") {
            unlink("images".$StudentCurrentAvatar);
        }
        echo "STUDENT_UPDATE_SUCCESSFUL";
    } else {
        echo "STUDENT_UPDATE_FAILED";
    }
} else {
    echo "STUDENT_UPDATE_NULL";
}
?>
