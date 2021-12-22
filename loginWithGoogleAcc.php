<?php
require "connect.php";
global $conn;

//$StudentEmail = "xuancanhit99@gmail.com";
//$StudentPassword = "Canh1412";

$StudentEmail = $_POST['StudentEmail'];

//$StudentName = $_POST['StudentName'];
//$StudentNo = $_POST['StudentNo'];
//$StudentGender = $_POST['StudentGender'];
//$StudentDOB = $_POST['StudentDOB'];
//$StudentClass = $_POST['StudentClass'];
//$StudentActive = $_POST['StudentActive'];
//$StudentAvatar = $_POST['StudentAvatar'];
//$StudentPhone = $_POST['StudentPhone'];


class Student
{
    function __construct($id, $email, $password, $name, $no, $avatar, $dob, $class, $phone, $gender, $active, $notice, $report, $reply)
    {
        $this->StuId = $id;
        $this->StuEmail = $email;
        $this->StuPassword = $password;
        $this->StuName = $name;
        $this->StuNo = $no;
        $this->StuAvatar = $avatar;
        $this->StuDOB = $dob;
        $this->StuClass = $class;
        $this->StuPhone = $phone;
        $this->StuGender = $gender;
        $this->StuActive = $active;
        $this->StuNotice = $notice;
        $this->StuReport = $report;
        $this->StuReply = $reply;
    }
}

if (strlen($StudentEmail) > 0) {
    $arrStudents = array();
    $query = "SELECT * FROM students WHERE StudentEmail = '$StudentEmail'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        while ($row = mysqli_fetch_assoc($data)) {
            array_push($arrStudents, new Student($row['StudentId'],
                $row['StudentEmail'],
                $row['StudentPassword'],
                $row['StudentName'],
                $row['StudentNo'],
                $row['StudentAvatar'],
                $row['StudentDOB'],
                $row['StudentClass'],
                $row['StudentPhone'],
                $row['StudentGender'],
                $row['StudentActive'],
                $row['StudentNotice'],
                $row['StudentReport'],
                $row['StudentReply']
            ));
        }
        if (count($arrStudents) > 0) {
            echo json_encode($arrStudents);
        } else {
            echo "Fail";
        }
    }
} else {
    echo "Null";
}
?>


<?php
//    require "connect.php";
//    global $conn;
//    $StudentEmail = $_POST['StudentEmail'];
//    $StudentPassword = $_POST['StudentPassword'];
//
//
//    class Students {
//        function __construct($id, $email, $password, $avatar){
//            $this->Id = $id;
//            $this->Email = $email;
//            $this->Password = $password;
//            $this->Avatar = $avatar;
//        }
//    }
//
//    if(strlen($StudentEmail) > 0 && strlen($StudentPassword) > 0) {
//        $arrstudents = array();
//        $query = "SELECT * FROM students WHERE FIND_IN_SET('$StudentEmail', StudentEmail) AND FIND_IN_SET('$StudentPassword', StudentPassword)";
//        $data = mysqli_query($conn, $query);
//        if ($data) {
//            while ($row = mysqli_fetch_assoc($data)) {
//                array_push($arrstudents, new Students($row['StudentId'],
//                                                            $row['StudentEmail'],
//                                                            $row['StudentPassword'],
//                                                            $row['StudentAvatar']));
//            }
//            if(count($arrstudents) > 0){
//                echo json_encode($arrstudents);
//            }
//            else {
//                echo "Fail";
//            }
//        }
//    }
//    else{
//        echo "Null";
//    }
//?>