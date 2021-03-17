<?php
include_once("connection.php");
$dept=$_POST["dept"];
$uid=$_POST["uid"];
$uname=$_POST["uname"];
$labname=$_POST["labname"];
$labinfo=$_POST["labinfo"];
$orgname=$_FILES["pic"]["name"];
$tmpname=$_FILES["pic"]["tmp_name"];

$query= "";
$table=mysqli_query($dbCon,$query);
$arr=array();
while($row=mysqli_fetch_array($table))
{
    $arr[]=$row;
}
echo json_encode($arr);
?>


    if($orgName=="")//user do not want any change in piture
    {
        $filename=$hdn;
    }
    else
    {
        $filename=$orgName;
        move_uploaded_file($tmpName,"uploads/".$orgName);
        unlink("uploads/".$hdn);
    }
      $query="update faclab set dept='$dept',uname='$uname',labname='$labname',labinfo='$labinfo',orgname='$orgname' where uid='$uid'";
    mysqli_query($dbCon,$query);
     $msg=mysqli_error($dbCon);
    if($msg=="")
    {
        echo "Updated record successfully.....!";
    }
    else echo $msg;