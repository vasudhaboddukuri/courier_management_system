<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NITK - Courier Management System</title>

</head>

<body>
		
<img src="final.png" style="width:1270px;height:168px;">

<?php
        
			$con=mysql_connect("localhost","root","vasudha");
			if(!$con)
			{
			die('could not connect'.mysql_error());
			}
			
			mysql_select_db("courier",$con);
			
			$sql="select * from employee";
					
			$result=mysql_query($sql,$con);
			include("report2.php");
			if(!$result)
			{
			echo "Incorrect details !" . "</br>";
			include 'admin.php';
			}
			else {
			
			echo "<table>";
   echo"username &nbsp;&nbsp; 
	name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email-id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;city &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;country ";
			while( $row=mysql_fetch_row($result))
			{
				
				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[7]</td></tr>";
			
			
			}
			
			echo "</table>"; }
        ?>

</body>
</html>
