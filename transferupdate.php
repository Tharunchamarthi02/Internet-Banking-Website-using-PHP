<?php
    include_once "./dbconnection.php";
    $accnumber1=$_POST["accnumber1"];
    $accnumber2=$_POST["accnumber2"];
    $inamount=$_POST["newamount"];
    session_start();
    $sql1="update accounts set balance= balance-$inamount where accountnumber='$accnumber1'";
    $status1=$con->query($sql1);
    $sql2="update accounts set balance= balance+$inamount where accountnumber='$accnumber2'";
    $status2=$con->query($sql2);
    if($status1===true and $status2===true){
        $_SESSION['transferstatus']="Amount Transferred Successfully";
        header('location:transfer.php');
    }
    else{
        $_SESSION['transferstatus']="Error";
        header('location:transfer.php');
    }
?>