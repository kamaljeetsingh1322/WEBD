<?php
include_once("connection.php");
$uid=$_GET["uid"];
$query="select * from faclab where uid='$uid' and status='0'";
$table=mysqli_query($dbCon,$query);
$ary=array();
while($row=mysqli_fetch_array($table))
	$ary[]=$row;
echo json_encode($ary);
?>
