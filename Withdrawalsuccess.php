<?php
  include("connection.php");
  session_start();
  error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Withdrawal success</title>
  </head>
  <style>
    p{
      padding: 150px;

    }
    body{
      background-image: url('signup1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    }
    h2{
      color:#F0FFFF;
      font-size:270%;
    }
    button{
      padding: 10px 30px;
      font-size:20px;
      border-radius:20px;
      background-color:transparent;
      color:white;
      border-color:white;
      border-width:3px;
    }
  </style>
  <body>

    <p>
    <center>
      <h2><strong><i> 
        <?php 
          $x=$_SESSION['Card_no'];
          $query="SELECT * FROM account WHERE Acc_no IN (SELECT Acc_no FROM card WHERE Card_no='$x')";
          $data=mysqli_query($conn,$query);
          $balance=mysqli_fetch_assoc($data);
          $bal=$balance['Balance'];
          echo "Your Balance : ".$bal;
        ?> 
      </i></strong></h2>
    </center>
    <br>
    <center>
    <button onclick="window.location.href='Login.php';">
      <b><i>Back</i></b>
    </button>
      </center>
    </p>
  </body>
</html>
<?php
  
  
?>