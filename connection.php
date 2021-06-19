<?php
	$sern="localhost";
	$user="root";
	$password="";
	$dbn="project";
	$conn=mysqli_connect($sern,$user,$password,$dbn);
	if(!($conn))
		echo "Connection not Ok";
	//else
	//	echo "Connection not ok";
?>