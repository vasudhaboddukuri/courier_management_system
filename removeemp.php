

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NITK - Courier Management System</title>
</head>

<body>
<?php
        
			$con=mysql_connect("localhost","root","vasudha");
			if(!$con)
			{
			die('could not connect'.mysql_error());
			}
			
			mysql_select_db("courier",$con);
			
			
			$emp=$_POST['emp'];			
			$sql="DELETE FROM `courier`.`employee` WHERE `employee`.`username`='$emp'";	
			
			$result=mysql_query($sql,$con);
			
			if(!$result)
			{
			echo "Incorrect details !" . "</br>";
			include 'admin.php';
			}
			else {
			

			 include("admin.php");}
        ?>
</body>
</html>
