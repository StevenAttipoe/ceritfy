<?php
//connect to database class
require('../model/db_connect.php');

class Certificate extends connection {
    public function create($employeeID,$employeeName,$employeePassword1,$employeeEmail,$employeeDepartment){
        // sql query
        $sql = "INSERT into Staff(Staff_ID,fullName,pswd,email,department) values ('$employeeID','$employeeName','$employeePassword1','$employeeEmail','$employeeDepartment')";

        // run query
        return $this->db_query($sql);
    }

    public function getAllProfiles(){
        // sql query
        $sql = "SELECT job_id,job_title,salary,skills_set FROM `joboffer`";

        // run query
        return $this->db_query($sql);
    }

    public function loginCheck($employeeEmail,$employeePassword){
        //sql query
        $sql = "SELECT Staff_ID FROM Staff WHERE email = '$employeeEmail' and pswd = '$employeePassword' ";
         
        //run query 
        return $this->db_query($sql);
    }

    public function getAllStaff(){
        //sql query
        $sql = "SELECT Staff_ID,fullName,email,department FROM Staff";

        //run query
        return $this->db_query($sql);
    }

    public function checker($certID,$staffID,$certName){
        //sql query
        $sql = "SELECT Certificate_ID FROM certificate WHERE Certificate_ID = '$certID' and Staff_ID = '$staffID' and Certificate_Name = '$certName' ";

        //run query
        return $this->db_query($sql);
    }

    public function apply($staffID,$amount){
        // sql query
        $transNo = rand(1,100000000);
        $sql = "INSERT into payment(Transaction_No,Staff_ID,Total_Amount,Payment_Status) values ('$transNo','$staffID','$amount','Pending')";

        // run query
        return $this->db_query($sql);
    }

    public function pay(){
        // sql query
        $sql = "SELECT * FROM payment";
        // run query
        return $this->db_query($sql);
    }

    public function cancelPay($transNo){
        // sql query
        $sql = "UPDATE payment SET `Payment_Status`='Failed' WHERE `Transaction_No`='$transNo'";
        // run query
        return $this->db_query($sql);
    }
    public function acceptPay($transNo){
        // sql query
        $sql = "UPDATE payment SET `Payment_Status`='Successful' WHERE `Transaction_No`='$transNo'";
        // run query
        return $this->db_query($sql);
    }

    

    public function delete($id){
        // sql query
        $sql = "DELETE FROM Staff WHERE Staff_ID = '$id' ";

        // run query
        return $this->db_query($sql);
    }
}

?>