<?php
require "connect.php";
global $conn;

$AdminId = $_GET['AdminId'];
$AdminAvatar = $_GET['AdminAvatar'];
if(strlen($AdminId) > 0 && strlen($AdminAvatar) > 0) {
    $query = "DELETE FROM admin WHERE AdminId = '$AdminId'";
    $data = mysqli_query($conn, $query);
    if($data) {
        if($AdminAvatar != "NO_IMAGE_ADMIN_UPDATE") {
            unlink("images".$AdminAvatar);
        }
        echo "ADMIN_ACC_DELETED_SUCCESSFUL";
    }
    else {
        echo "ADMIN_ACC_DELETED_FAILED";
    }
}
else{
    echo "ADMIN_ACC_DELETED_NULL";
}
?>