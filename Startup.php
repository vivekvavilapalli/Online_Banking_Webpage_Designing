<?php
	include("connection.php");
	error_reporting(0);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Signin_Login</title>
	</head>
<style>
	body{
		background-image: url('Money.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
	    padding: 350px 700px;
	}
	button{
		background-color: transparent;
        border-width: 4px;
        border-color: black;
		border-radius: 20px;
		font-size: 20px;
		font-family: cursive;
		color:white;
	}
</style>
<body>

	<button style="padding:15px 34px;"  onclick="window.location.href='Login.php';"> <b> Login </b> </button>
	<button style="padding:15px 30px;"  onclick="window.location.href='Signup.php';"> <b> SignUp </b> </button>

	</body>
</html>