<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="transferupdate.php" method="post">
        <h1>Transfer Money</h1>
         <br> &nbsp Sender Account : <input type="text" name="accnumber1" required> <br><br>
         &nbsp Reciever Account : <input type="text" name="accnumber2" required> <br><br>
         &nbsp Amount : <input type="text" name="newamount" required><br><br>
         &nbsp  &nbsp  &nbsp <input type="submit" value="Transfer" name = "transfer">
         <?php
           if(isset($_SESSION['transferstatus'])) {
             echo  '<p>'.$_SESSION['transferstatus'].'<p>' ;
             unset($_SESSION['transferstatus']);
           }
         ?>
    </form>
  </div> 
</body>
</html>