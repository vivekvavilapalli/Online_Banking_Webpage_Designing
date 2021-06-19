<?php
  include("connection.php");
  session_start();
  error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
      <title>Signup</title>
    </head>
<style>
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

<body >
  <br><br><br><br><br><br><br><br><br><br><br>
  <p>
    <center>
      <h2><strong><i>Signup Successful!!
      <?php
        $acc_no=$_SESSION['Acc_no'];
        $query="SELECT * FROM random ";
        $data=mysqli_query($conn,$query);
        $result=mysqli_fetch_assoc($data);
        $card_no=++$result['Card_no'];
        echo "<br>"."Card Number:".$card_no;
        $pin=++$result['Pin'];
        echo "<br>"."PIN:".$pin;
        $query1=" INSERT INTO card VALUES('$acc_no','$card_no','$pin') ";
        $data=mysqli_query($conn,$query1);
        $query2=" UPDATE random SET Card_no='$card_no',Pin='$pin' ";
        $data=mysqli_query($conn,$query2);

      ?>
</i></strong></h2>
    </center>
    <br>
    <center>
    <button onclick="window.location.href='Startup.php';">
      <b><i>Back</i></b>
    </button>
      </center>
    </p>
</body>



</html>



