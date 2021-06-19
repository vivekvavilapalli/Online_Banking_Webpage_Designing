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
    table{
        color:white;
        font-size:150%;
    }
    input[type=text], input[type=password]{
        width: 100%;
        margin: 10px 0;
        padding: 10px 60px;
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
  <center><h1 style="color:#ECF0F1 ;"><strong><b>Signup</b></strong></h1></center>
  <form action="" method="POST">
  <table border="0" align="center" cellspacing="20">
    <tr>
        <td><b><strong>Account Holder Name</strong></b></td>
        <td><input type="text"  placeholder="Enter Account Holder Name" name="hn" required ></td>
    </tr>
    <tr>
        <td><b><strong>Account Number</strong></b></td>
        <td><input type="text"  placeholder="Enter Account Number" name="an" required ></td>
    </tr>
    <tr>
          <td style="padding:0px 50px;"><button onclick="window.location.href='Startup.php';"> <b><i> BACK </i></b> </button></td>
          <td><center> <input type="Submit" name="Submit" id="btn" ></td> </center>
    </tr>
  </table>
  </form>
</body>



</html>


<?php
    if(isset($_POST['Submit']))
    {
      
      $hn1=$_POST['hn'];
      $an1=$_POST['an'];
      $_SESSION['Acc_no']=$an1;
      $query="SELECT * FROM account WHERE Acc_no='$an1' and Acc_name='$hn1' ";
      $data=mysqli_query($conn,$query);
      $total=mysqli_num_rows($data);


      if($total==0)
      {
        header("location:signupfalse.php");
      }
      else
      {
            $check=" SELECT * FROM card WHERE Acc_no='$an1' ";
            $data=mysqli_query($conn,$check);
            $total1=mysqli_num_rows($data);
            if($total1==0)
            {
              header("location:Signuptrue.php");
            }
            else
            {
              header("location:Alreadyhavecard.php");
            }
      }
  }
?>
