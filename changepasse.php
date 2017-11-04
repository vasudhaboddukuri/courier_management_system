<?php 

		if(isset($_POST['submit']))
		{
			$u=$_POST['username'];
			$op=$_POST['opassword'];
			$np=$_POST['npassword'];

			include("connect.php");
			$sql_connect=mysql_connect($host,$user,$pass) or die("cannot connect to database.please try after sometime");
			mysql_select_db($db,$sql_connect) or die("cannot find database");
			
			$select_user_query="SELECT * FROM `employee` WHERE `username`='$u' AND `password`='$op'";
			$select_user=mysql_query($select_user_query);
		
			$change=mysql_query("UPDATE `courier`.`employee` SET `password`='$np' WHERE `employee`.`username`='$u'");
			session_start();
			$_SESSION['change']=1;
			header("Location: employee.php#contact");
			
					
					
	}

?><!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NITK - Courier Management System</title>
</head>

<body>
</body>
</html>
