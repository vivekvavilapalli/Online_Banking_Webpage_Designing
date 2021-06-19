<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login True</title>
  </head>
  <style>
    body{
      background-image: url('logintrue1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 115% 100%;
    }
      p{
        padding:100px;
      }
    h1{
      color:#D0D3D4;
      text-shadow:2px 2px;
      font-size:40px;
    }
    button{
      padding:10px 30px;
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
      <center><h1><strong><i>Pick Your Choice</i></strong></h1></center>
      <center>
        <table>
        <tr>
          <td style="padding:20px;"><button onclick="window.location.href='Withdrawalsuccess.php';"><strong><i>Balance</i></strong></button></td>
          <td style="padding:20px 4px;"><button onclick="window.location.href='Pinchange.php';"><strong><i>Pin Change</i></strong></button></td>
        </tr>
        <tr>
          <td style="padding:20px 10px;"><button onclick="window.location.href='Transfer.php';"><strong><i>Transfer</i></strong></button></td>
          <td style="padding:20px;"><button onclick="window.location.href='Deposit.php';"><strong><i>Deposit</i></strong></button></td>
        </tr>
      </table>
     </center>
    </p>
  </body>
</html>
