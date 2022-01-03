<?php
include_once "/var/www/html/certify/controller/mainController.php";
$conn = new mysqli('localhost', 'root', '', 'certificatedb');
    $id = $_GET['id'];
    $staffName= $_POST['updateName'];
    $staffEmail = $_POST['updateEmail'];
    $staffDepartment = $_POST['updateDepartment'];

    $updatee = updateStaff($id,$staffName,$staffEmail,$staffDepartment);
    if($updatee){
    echo "<script language='javascript'>;
        alert('Update Successful!');
        window.location.href='../view/upskill.php';
        </script>";
    }else{
        echo "<script language='javascript'>;
        alert('Update Unsuccessful!');
        window.location.href='../view/update.php';
        </script>";
    }
?>
