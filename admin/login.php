<?php
    require "connect.php";
    global $conn;
    $AdminEmail = $_POST['AdminEmail'];
    $AdminPassword = $_POST['AdminPassword'];

//$AdminEmail = "admin@gmail.com";
//$AdminPassword = "admin";

    class Admin {
        function __construct($id, $email, $password, $name, $avatar){
            $this->AdId = $id;
            $this->AdEmail = $email;
            $this->AdPassword = $password;
            $this->AdName = $name;
            $this->AdAvatar = $avatar;
        }
    }

    if(strlen($AdminEmail) > 0 && strlen($AdminPassword) > 0) {
        $arrAdmins = array();
        $query = "SELECT * FROM admin WHERE FIND_IN_SET('$AdminEmail', AdminEmail) AND FIND_IN_SET('$AdminPassword', AdminPassword)";
        $data = mysqli_query($conn, $query);
        if ($data) {
            while ($row = mysqli_fetch_assoc($data)) {
                array_push($arrAdmins, new Admin($row['AdminId'],
                                                            $row['AdminEmail'],
                                                            $row['AdminPassword'],
                                                            $row['AdminName'],
                                                            $row['AdminAvatar']));
            }
            if(count($arrAdmins) > 0){
                echo json_encode($arrAdmins);
            }
            else {
                echo "Fail";
            }
        }
    }
    else{
        echo "Null";
    }
?>