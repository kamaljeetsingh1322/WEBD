<?php
include_once("connection.php");

$dept=$_POST["dept"];
$labname=$_POST["labname"];
$labinfo=$_POST["labinfo"];

$orgname=$_FILES["pic"]["name"];
$tmpname=$_FILES["pic"]["tmp_name"];
    
$query="insert into facLab (dept,labname,labinfo,orgname,curdate) values('$dept','$labname','$labinfo','$orgname',curdate())";

    mysqli_query($dbCon,$query);

    $msg=mysqli_error($dbCon);
    if($msg==""){
        echo "Signed in successfully....";
        move_uploaded_file($tmpname,"uploads/".$orgname);
    }
    else
        echo $msg;
?>