<?php
require "connect.php";
global $conn;
$AdminId = $_POST['AdminId'];
$AdminEmail = $_POST['AdminEmail'];
$AdminNewPassword = $_POST['AdminNewPassword'];

if (strlen($AdminId) > 0 && strlen($AdminEmail) > 0 && strlen($AdminNewPassword) > 0) {
    $query = "SELECT AdminEmail FROM admin WHERE AdminID='$AdminId' && AdminEmail='$AdminEmail'";
    $data = mysqli_query($conn, $query);
    $ret = mysqli_fetch_array($data);
    if ($ret>0) {
        $query1 = "UPDATE admin SET AdminPassword='$AdminNewPassword' WHERE AdminID='$AdminId' && AdminEmail='$AdminEmail'";
        $data = mysqli_query($conn, $query1);
        if($data) {
            echo "ADMIN_CHANGE_PASSWORD_SUCCESSFUL";
        }
        else{
            echo "ADMIN_CHANGE_PASSWORD_FAILED";
        }
    } else {
        echo "ADMIN_CHANGE_PASSWORD_FAILED";
    }
} else {
    echo "ADMIN_CHANGE_PASSWORD_NULL";
}
?>
