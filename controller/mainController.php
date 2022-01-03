<?php
//connect to employee class
//include('certificate_class.php');
spl_autoload_register(function($class){
    require_once('certificate_class.php');
});

// Inserting a new staff
function createStaff($employeeID,$employeeName,$employeePassword1,$employeeEmail,$employeeDepartment){
    // Create new employee object
    $cert = new Certificate;

    // Run query
    $runQuery = $cert->create($employeeID,$employeeName,$employeePassword1,$employeeEmail,$employeeDepartment);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}
function getProfiles(){
    // Create new employee object
    $profile = new Certificate;

    // Run query
    $runQuery = $profile->getAllProfiles();

    if($runQuery){
        $profiles = array();
        while($record = $profile->db_fetch()){
            $profiles[] = $record;
        }
        return $profiles;
    }else{
        return false;
    }
}

function loginStaff($employeeEmail,$employeePassword){
    // Create new employee object
    $cert = new Certificate;

    // Run query
    $runQuery = $cert->loginCheck($employeeEmail,$employeePassword);

    if($runQuery){
        $staff = array();
        while($record = $cert->db_fetch()){
            $staff[] = $record;
        }
        return $staff[0];
    }else{
        return false;
    }
}
// Get Functions
function getStaff(){
    // Create new employee object
    $cert = new Certificate;

    // Run query
    $runQuery = $cert->getAllStaff();

    if($runQuery){
        $staff = array();
        while($record = $cert->db_fetch()){
            $staff[] = $record;
        }
        return $staff;
    }else{
        return false;
    }
}

function certChecker($certID,$staffID,$certName){
    // Create new employee object
    $cert = new Certificate;

    // Run query
    $runQuery = $cert->checker($certID,$staffID,$certName);

    if($runQuery){
        $checks = array();
        while($record = $cert->db_fetch()){
            $checks[] = $record;
        }
        return $checks;
    }else{
        return false;
    }
}

function certPay($staffID,$amount){
    // Create new employee object
    $cert = new Certificate;

    // Run query
    $runQuery = $cert->apply($staffID,$amount);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function getPayment(){
    // Create new employee object
    $cert = new Certificate;

    // Run query
    $runQuery = $cert->pay();

    if($runQuery){
        $checks = array();
        while($record = $cert->db_fetch()){
            $checks[] = $record;
        }
        return $checks;
    }else{
        return false;
    }
}
function rejectPay($transNo){
    // Create new employee object
    $employee = new Certificate;

    // Run query
    $runQuery = $employee->cancelPay($transNo);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function approvePay($transNo){
    // Create new employee object
    $employee = new Certificate;

    // Run query
    $runQuery = $employee->acceptPay($transNo);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}


function updateStaff($id, $staffName,$staffEmail,$staffDepartment){
    // Create new employee object
    $staff = new Certificate;

    // Run query
    $runQuery = $staff->update($id, $staffName,$staffEmail,$staffDepartment);

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}
function deleteStaff($id){
    // Create new employee object
    $staff = new Certificate;

    // Run query
    $runQuery = $staff->delete($id);
    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function deleteEmployee($id){
    // Create new employee object
    $staff = new employee;

    // Run query
    $runQuery = $staff->delete($id,"employee_id","Employee");

    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}


?>
