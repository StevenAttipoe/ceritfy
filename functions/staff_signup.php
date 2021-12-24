<?php
include_once "/var/www/html/certify/controller/mainController.php";

    // Grab form data
    $employeeName = $_POST['fullName'];
    $employeeEmail = $_POST['email'];
    $employeeID = $_POST['staffID'];
    $employeeDepartment = $_POST['department'];
    $employeePassword1 = hash('sha256',$_POST['password1']);
    $employeePassword2 = hash('sha256',$_POST['password2']);

    if($employeePassword1 == $employeePassword2){
      $signUp = createStaff($employeeID,$employeeName,$employeePassword1,$employeeEmail,$employeeDepartment);
      if($signUp){
            header("location: ../view/login.php");
      } else{
            echo "error";
      }
    }
    

?>

