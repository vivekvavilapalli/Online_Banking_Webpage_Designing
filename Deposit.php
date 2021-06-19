<?php
	include("connection.php");
	session_start();
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Deposit</title>
	</head>
	<style>
	body{
		padding:100px;
		background-image: url('signup1.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
  		opacity:1.0;
	}
	table{
        color:white;
        font-size:150%;
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
    input[type=text] {
        width: 100%;
        margin: 10px 0;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid #3498DB ;
        box-sizing: border-box;
    }
	</style>

	<body>
		<br><br><br><br><br><br><br><br>
		<center><h1 style="color:#ECF0F1 ;"><strong><b>Deposit</b></strong></h1></center>
		<form action="" method="POST">
		<table border="0" align="center" cellspacing="20">
    		<tr>
        		<td><b><strong>Enter Amount</strong></b></td>
        		<td><input type="text" placeholder="Enter Amount" name="bal" required ></td>
    		</tr>
    		<tr >
          		<td align="center" colspan="2"> <input type="Submit" name="Submit" id="btn"></td>
    		</tr>
    	</table>
    </form>
	</body>
</html>

<?php
if(isset($_POST['Submit']))
    {
      
    $bal1=$_POST['bal'];
	$x=$_SESSION['Card_no'];
	$query="SELECT * FROM account WHERE Acc_no IN (SELECT Acc_no FROM card WHERE Card_no='$x')";
	$data=mysqli_query($conn,$query);
	$balance=mysqli_fetch_assoc($data);
	$acc_no=$balance['Acc_no'];
	$bal2=$balance['Balance']+$bal1;
	$update="UPDATE account SET Balance='$bal2' WHERE Acc_no='$acc_no'";
	$data=mysqli_query($conn,$update);
	header("location:Withdrawalsuccess.php");
}
?>