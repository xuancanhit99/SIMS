<?php
require "connect.php";
global $conn;
$StudentNotice = $_POST['StudentNotice'];
//$StudentNotice = "123";

    $query = "UPDATE students SET StudentNotice='$StudentNotice'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "NOTICE_UPDATE_SUCCESSFUL";
    } else {
        echo "NOTICE_UPDATE_FAILED";
    }

?>
