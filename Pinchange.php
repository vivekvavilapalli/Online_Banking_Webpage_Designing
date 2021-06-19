<?php
	include("connection.php");
	session_start();
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Pinchange</title>
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
    input[type=password] {
        width: 100%;
        margin: 10px 0;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid #3498DB ;
        box-sizing: border-box;
    }
	</style>

	<body>
		<br><br><br><br><br><br>
		<center><h1 style="color:#ECF0F1 ;"><strong><b>Pin Change</b></strong></h1></center>
		<form action="" method="POST">
		<table border="0" align="center" cellspacing="20">
    		<tr>
        		<td><b><strong>New Pin</strong></b></td>
        		<td><input type="password" placeholder="Enter New Pin" name="new" required ></td>
    		</tr>
    		<tr>
        		<td><b><strong>Re-Enter New Pin</strong></b></td>
        		<td><input type="password" placeholder="Re-Enter" name="new1" required ></td>
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
      
    $npn=$_POST['new'];
    $npn1=$_POST['new1'];

    if($npn==$npn1)
    {
		$x=$_SESSION['Card_no'];
		$update="UPDATE card SET Pin='$npn' WHERE Card_no='$x'";
		$data=mysqli_query($conn,$update);
		header("location:Pinchangesuccess.php");
	}
	else
	{
		header("location:Pinchangefail.php");
	}
}
?>