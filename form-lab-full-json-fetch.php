<?php
include_once("connection.php");
$sno=$_GET["sno"];
$query= "select * from faclab where sno ='$sno' ";
$table=mysqli_query($dbCon,$query);
$arr=array();
while($row=mysqli_fetch_array($table))
{
    $arr[]=$row;
}
echo json_encode($arr);
?>