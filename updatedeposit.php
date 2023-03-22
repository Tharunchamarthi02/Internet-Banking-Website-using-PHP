<?php
    include_once "./dbconnection.php";
    $accnumber = $_POST['accnumber'];
    $inamount = $_POST['newamount'];
    session_start();
    $sql1 = "update accounts set balance= balance+$inamount where accountnumber='$accnumber'"; 
    $status=$con->query($sql1);
        if($status===true) {
            $_SESSION['depstatus']="Amount Deposited Successfully";
            header('location:deposit.php');
        }
        else {
            $_SESSION['depstatus']="Error";
            header('location:deposit.php');
        }
?>