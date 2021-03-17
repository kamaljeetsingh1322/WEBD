<?php
include_once("connection.php");

$dept=$_POST["dept"];
$uid=$_POST["uid"];
$uname=$_POST["uname"];
$labname=$_POST["labname"];
$labinfo=$_POST["labinfo"];
$orgname=$_FILES["pic"]["name"];
$tmpname=$_FILES["pic"]["tmp_name"];
    
$query="insert into faclab(dept,uid,uname,labname,labinfo,orgname,curdate,status) values('$dept','$uid','$uname','$labname','$labinfo','$orgname',curdate(),'0')";

    mysqli_query($dbCon,$query);

    $msg=mysqli_error($dbCon);
    if($msg==""){
    echo "Signed in successfully....";
       move_uploaded_file($tmpname,"uploads/".$orgname);
    }
    else
        echo $msg;
?>