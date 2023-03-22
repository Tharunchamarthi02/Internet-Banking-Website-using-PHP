<?php
   include_once "./dbconnection.php";
   session_start();
   $name = $_POST['username'];
   $accnum =$_POST['accountnum'];
   $inamount = $_POST['inamount'];

   $sql = "insert into accounts values('$name','$accnum','$inamount')";
   $status = $con->query($sql);
   if($status===true) {
       $_SESSION['status']="User Account Created Successfully";
       header('location:create.php');
   }
   else {
       $_SESSION['status']=$con->error;
       header('location:create.php');
   }
?>