<?php
include_once "/var/www/html/certify/controller/mainController.php";

    // Grab form data
    $employeeEmail = $_POST['inputEmail'];
    $employeePassword = hash('sha256',$_POST['inputPassword']);

  if($employeeEmail =="root@admin.com" &&  $employeePassword == hash('sha256','admin')){
      echo "<script language='javascript'>;
       alert('Admin Log In Successful!');
      window.location.href='../view/portal.php';
      </script>";
      }

    $logIn = loginStaff($employeeEmail,$employeePassword);
      if($logIn){
            echo "<script language='javascript'>;
            alert('Log In Successful!');
            window.location.href='../view/apply.php';
           </script>";  
      } else{
            echo "<script>;
            alert('Invalid credentails. Try Again');
            window.location.href='../view/login.php';
            </script>";
      }


?>

