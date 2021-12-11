<?php
include_once __DIR__.'\..\controller\mainController.php';

    $delStaff = deleteStaff($_GET['id']);
    if($delStaff){
            echo "<script language='javascript'>;
            alert('Delete Successful!');
            window.location.href='../view/upskill.php';
            </script>";
    }else{
        echo "<script language='javascript'>;
            alert('Delete Unsuccessful!');
            window.location.href='../view/upskill.php';
            </script>";
    }


?>