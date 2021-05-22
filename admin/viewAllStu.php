<?php
require "connect.php";
global $conn;

class Student
{
    function __construct($id, $email, $password, $name, $no, $avatar, $dob, $class, $phone, $gender, $active)
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
    }
}
$arrStudents = array();
$query = "SELECT * FROM students";
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
            $row['StudentActive']
        ));
    }
    if (count($arrStudents) > 0) {
        echo json_encode($arrStudents);
    } else {
        echo "Fail";
    }
}
?>

