<?php
    $file_path = "images/";
    $file_path = $file_path.basename($_FILES['upload_file']['name']);
    if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $file_path)) {
        echo $_FILES['upload_file']['name'];
    }
    else {
        echo "Failed";
    }
    ?>