<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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
       <h1>Create Account</h1>
       <form action="save.php" method="post">
         <br> &nbsp Name : <input type="text" name="username" required> <br><br>
              &nbsp Account Number : <input type="text" name="accountnum" required> <br><br>
              &nbsp Initial Amount : <input type="text" name="inamount" required> <br><br>
              &nbsp  &nbsp  &nbsp <input type="submit" value="Create Account">
         <?php
            if(isset($_SESSION['status'])) {
            echo  '<p>'.$_SESSION['status'].'<p>' ;
            unset($_SESSION['status']);
           }
         ?>
         </form>
    </div>

</body>
</html>