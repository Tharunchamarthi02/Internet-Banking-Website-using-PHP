<?php
    include_once "./dbconnection.php";

    $accnumber = $_POST['accnumber'];
    $inamount = $_POST['newamount'];
    session_start();

    $sql1 = "update accounts set balance= balance-$inamount where accountnumber='$accnumber'"; 
    $records = $con->query($sql1);
        if($records===true) {
            $_SESSION['withstatus']="Withdraw Successfull";
            header('location:withdraw.php');
        }
        else {
            $_SESSION['withstatus']=$con->error;
            header('location:withdraw.php');
        }

?>