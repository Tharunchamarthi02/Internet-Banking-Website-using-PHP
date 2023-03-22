<?php
   $dbhostname = "localhost";
   $dbusername = 'root';
   $dbpassowrd = '';
   $dbname = 'bank';

   $con = new mysqli($dbhostname,$dbusername,$dbpassowrd,$dbname);
   if($con -> connect_error === true) {
       die('Connection Failed :'.$con->connect_error);
   }
   else {
       
   }
?>