<?php
	include("connection.php");
	session_start();
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Transfer</title>
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
		<br><br><br><br><br><br><br>
		<center><h1 style="color:#ECF0F1 ;"><strong><b>Transfer</b></strong></h1></center>
		<form action="" method="POST">
		<table border="0" align="center" cellspacing="20">
			<tr>
				<td><b><strong>Enter Receiver Account Number</strong></b></td>
				<td><input type="text" placeholder="Enter Receiver Account Number" name="acn" required ></td>
			</tr>
    		<tr>
        		<td><b><strong>Enter Amount</strong></b></td>
        		<td><input type="text" placeholder="Enter Amount" name="bal" required ></td>
    		</tr>
    		<tr>
          		<td align="center" colspan="2"> <input type="Submit" name="Submit" id="btn"></td>
    		</tr>
    	</table>
    </form>
	</body>
</html>

<?php
	if(isset($_POST['Submit']))
    {
    	$acn1=$_POST['acn'];
    	$bal1=$_POST['bal'];
		$x=$_SESSION['Card_no'];
		$query="SELECT * FROM account WHERE Acc_no IN (SELECT Acc_no FROM card WHERE Card_no='$x')";
		$data=mysqli_query($conn,$query);
		$balance=mysqli_fetch_assoc($data);
		$acc_no=$balance['Acc_no'];
		$query1="SELECT * FROM account WHERE Acc_no='$acn1' ";
		$data1=mysqli_query($conn,$query1);
		$tot=mysqli_num_rows($data1);

		if($bal1<=$balance['Balance']-500 && $tot!=0)
		{
			$bal2=$balance['Balance']-$bal1;
			$update="UPDATE account SET Balance='$bal2' WHERE Acc_no='$acc_no'";
			$data=mysqli_query($conn,$update);

			$res=mysqli_fetch_assoc($data1);
			$bal3=$res['Balance']+$bal1;
			$update1="UPDATE account SET Balance='$bal3' WHERE Acc_no='$acn1'";
			$data2=mysqli_query($conn,$update1);
			header("location:Withdrawalsuccess.php");
		}
		else if($tot==0)
		{
			header("location:Transferfail.php");
		}
		else
		{
			header("location:Withdrawalfail.php");
		}
		
	}
?>