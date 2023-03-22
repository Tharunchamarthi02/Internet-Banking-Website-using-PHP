<?php
  include_once './dbconnection.php';
  $accnumber1 = $_POST['accnumber'];
  session_start();
  $sql = "select * from accounts where accountnumber='$accnumber1'";
  $result = $con->query($sql);
  if($result->num_rows>0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION['viewstatus']="Your balance is ".$row['balance'];
        header('location:viewbalance.php');
      }
  }
  else {   
    $_SESSION['viewstatus']=$con->error;
    header('location:viewbalance.php');
  }
?>