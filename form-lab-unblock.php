<?php
include_once("connection.php");
$sno=$_GET["sno"];
$query= "update faclab set status='1' where sno='$sno'";
$table=mysqli_query($dbCon,$query);
$arr=array();
while($row=mysqli_fetch_array($table))
{
    $arr[]=$row;
}
echo json_encode($arr);
?>