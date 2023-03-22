<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
     <ul>
       <li><a href="index.php">Home</a> </li>
       <li><a href="create.php">Create Account</a> </li>
       <li><a href="view.php">View Balance</a> </li>
       <li><a href="deposit.php">Deposit</a> </li>
       <li><a href="withdraw.php">Withdraw</a></li>
       <li><a href="transfer.php">Money Transfer</a></li>
     </ul>
    <div class="form">
    <h1>Deposit Amount</h1>
    <form action="updatedeposit.php" method="post">
         <br> &nbsp Account Number : <input type="text" name="accnumber" required> <br><br>
         &nbsp Amount : <input type="text" name="newamount" required><br><br>
         &nbsp  &nbsp  &nbsp <input type="submit" value="Update" name = "update">
         <?php
           if(isset($_SESSION['depstatus'])) {
             echo  '<p>'.$_SESSION['depstatus'].'<p>' ;
             unset($_SESSION['depstatus']);
           }
         ?>
    </form>
    </div>
</body>
</html>