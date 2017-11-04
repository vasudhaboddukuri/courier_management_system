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


if($_POST['pay'])
{

if(strcmp($_POST['mode'],Speed_post)) $mode=100;
else if(strcmp($_POST['mode'],Care)) $mode=70;
else $mode=50;
$rate=$_POST['wt']*$_POST['num']*$mode;
$query="INSERT INTO `courier_table`(orig,dest,sname,rname,radd,rate,mode) VALUES ('$_POST[orig]','$_POST[dest]','$_POST[sname]','$_POST[rname]','$_POST[raddress]',$rate,'$_POST[mode]')";
$result=mysql_query($query,$con);

	if(!$result)
	{	
		echo "Incorrect details !" . "</br>";
		include 'addc.php';
	}
	else {
		echo " Courier Loaded !"."</br>";
		$query="select * from courier_table order by cid desc limit 1 ";
$result=mysql_query($query,$con);
	$row=mysql_fetch_row($result);
		echo "Courier ID for tracking purposes: ->> ".$row[0];
		echo "</br>";
		echo "Amount to be payed: ->> &#x20B9;".$row[7];
		include 'addc.php';
	}

}	
	mysql_close($con);
?>

</body>
</html>
