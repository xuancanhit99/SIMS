<?php
    require "connect.php";
    global $conn;
    $AdminId = $_POST['AdminId'];
    $AdminName = $_POST['AdminName'];
    $AdminEmail = $_POST['AdminEmail'];
    $AdminAvatar = $_POST['AdminAvatar'];
    $AdminCurrentAvatar = $_POST['AdminCurrentAvatar'];

    if (strlen($AdminName) > 0 && strlen($AdminEmail) > 0 && strlen($AdminId) > 0) {
        $query = "UPDATE admin SET AdminName='$AdminName', AdminEmail='$AdminEmail', AdminAvatar='$AdminAvatar' WHERE AdminId='$AdminId'";
        $data = mysqli_query($conn, $query);
        if ($data) {
            if($AdminCurrentAvatar != "NO_DELETE_CURRENT_IMAGE") {
                unlink("images".$AdminCurrentAvatar);
            }
            echo "ADMIN_UPDATE_SUCCESSFUL";
        } else {
            echo "ADMIN_UPDATE_FAILED";
        }
    } else {
        echo "ADMIN_UPDATE_NULL";
    }
    ?>
