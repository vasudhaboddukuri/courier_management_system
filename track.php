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
			
			
			$un=$_POST['username'];
			$cid=$_POST['cid'];
			
			$sql="select * from courier_table where sname='$un' and cid='$cid'";
			
			
			
			$result=mysql_query($sql,$con);
			include("report3.php");
			if(!$result)
			{
			echo "Incorrect details !" . "</br>";
			include 'client.php';
			}
			else {
			
			echo "<table>";
			
			while( $row=mysql_fetch_row($result))
			{
				
				echo "<tr><td>Courier ID= <p></p></td><td>$row[0]</td></tr><tr><td><p>Sender's Name=</p></td><td>$row[3]</td></tr><tr><td><p>Status=</p></td><td>$row[9]</td></tr>"; 
				
				
			
			
			}
			echo "</table>"; }
        ?>

</body>
</html>
