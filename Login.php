<?php
  include("connection.php");
  session_start();
  error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
      <title>Login</title>
    </head>

  <style>
    table{
        color:white;
        font-size:150%;
    }
    input[type=text], input[type=password] {
        width: 100%;
        margin: 10px 0;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid #3498DB ;
        box-sizing: border-box;
    }
    #btn{
       padding:10px 30px;
       font-size:20px;
       border-radius:20px;
       background-color:transparent;
       color:white;
       border-color:white;
       border-width:3px;
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

<body background="Login_background.jpg">
  <br><br><br><br><br><br><br><br><br><br><br>
  <center><h1 style="color:#ECF0F1 ;"><strong><b>Login</b></strong></h1></center>
  <form action="" method="POST">
  <table border="0" align="center" cellspacing="20">
    <tr>
        <td><b><strong>Card Number</strong></b></td>
        <td><input type="text" placeholder="Enter Card Number" name="cn" required ></td>
    </tr>
    <tr>
        <td><b><strong>Pin</strong></b></td>
        <td><input type="password" placeholder="Enter Pin" name="pn" required ></td>
    </tr>
    <tr>
          <td style="padding:0px 20px;"><button onclick="window.location.href='Startup.php';"> <b><i> BACK </i></b> </button></td>
          <td> <input type="Submit" name="Submit" id="btn"></td>
    </tr>
  </table>
  </form>
</body>



</html>


<?php
    if(isset($_POST['Submit']))
    {
      
      $cn1=$_POST['cn'];
      $pn1=$_POST['pn'];

      $_SESSION['Card_no']=$cn1;

      $query="SELECT * FROM card WHERE Card_no='$cn1' ";
      $data=mysqli_query($conn,$query);
      $total=mysqli_num_rows($data);
  
      if($total==0)
      {
        header("location:Loginfalse.php");
      }
      else
      {
          $result=mysqli_fetch_assoc($data);
          
          if($pn1==$result['Pin'])
          {
            header("location:Logintrue.php");
          }
          else
          {
            header("location:Loginfalse.php");
          }
      }
    exit;
  }
?>
