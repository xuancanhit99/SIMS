<?php
require "connect.php";
global $conn;
$StudentId = $_POST['StudentId'];
$StudentReply = $_POST['StudentReply'];
$query = "UPDATE students SET StudentReply='$StudentReply' WHERE StudentId='$StudentId'";
$data = mysqli_query($conn, $query);
if ($data) {
    echo "STUDENT_REPLY_UPDATE_SUCCESSFUL";
} else {
    echo "STUDENT_REPLY_UPDATE_FAILED";
}
?>