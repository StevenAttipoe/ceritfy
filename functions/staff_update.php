<?php
include_once "/var/www/html/certify/controller/mainController.php";
$conn = new mysqli('localhost', 'root', '', 'certificatedb');
    $id = $_GET['id'];
    $staffName= $_POST['updateName'];
    $staffEmail = $_POST['updateEmail'];
    $staffDepartment = $_POST['updateDepartment'];


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE Staff SET fullName='$staffName' ,  email='$staffEmail' , department='$staffDepartment' WHERE Staff_ID='$id' ";
    if(mysqli_query($conn, $sql)){
    echo "<script language='javascript'>;
        alert('Update Successful!');
        window.location.href='../view/upskill.php';
        </script>";
    }else{
        echo "<script language='javascript'>;
        alert('Update Unsuccessful!');
        </script>";
    }
?>