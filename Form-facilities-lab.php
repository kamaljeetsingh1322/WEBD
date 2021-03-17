<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple form</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <script src="jquery/jquery-1.8.2.min.js"></script>
    <script src="angular.min.js"></script>
  <style>
  input[type=text] {
      height: 2.5rem;
    width: 100%;
    padding: 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
      color:black;
  }
     
  input[type=submit] {
    width:10%;
    color: black;
    padding: 0.2rem 0.4rem;
    margin: 0.18rem 0;
    border: none;
    cursor: pointer;
      margin-bottom: 0.2rem;
  }
      input[type=submit]:hover {
    width:10%;
    background-color:forestgreen;
    color: black;
    padding: 0.2rem 0.4rem;
    margin: 0.18rem 0;
    border: none;
    cursor: pointer;
      margin-bottom: 0.2rem;
  }
  div {
    background-color: white;
  }
  textarea {
    width: 100%;
    height: 8rem;
    padding: 0.1rem 0.2rem;
    box-sizing: border-box;
    border: 0.08rem solid #ccc;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
  }
    body{
        font-family: monospace;
        font-size: 1.3rem;
        font-weight:500;
    }
   
    #t{
        height: 100%;
        position: fixed;
        margin-left: 0;
        margin-top: 0;
        padding:3rem;
        width: 15rem;
        text-align: center;
        background-color:#e0e0e0 ;    
    }
    
      hr{
          border-top: 0.09rem dotted black;
}
      }
      #labform{
          width:15rem;
      }
    </style>
    <style>
      select{
             width: 100%;
  padding: 0.5rem;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
        }
#info {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
        th{
            background-color: beige;
        }

</style>
<style>
    #labform{
        width: 70rem;
    }
    </style>
       <script>
       var module = angular.module("ourmodule", []);
        module.controller("ourcontroller", function($scope, $http) {
          
            $scope.arrysel;
            $scope.showtable = function(dept) {
                $http.get("fetch-facilities-lab.php?dept="+dept).then(ok, notok);
                
                function ok(resp) {
                  
                    $scope.arrysel = resp.data;
                }
                function notok(resp) {
                    alert(resp);
                }               
            }                      
                          });
    </script>
</head>
<body ng-app="ourmodule" ng-controller="ourcontroller" >
<center>
    <div class="mt-1" id="info">
    <div id="labform">
    <h3 style="background-color:white;text-align: center;height:3rem;padding-top: 0.5rem;"><b>LAB INFORMATION FORM</b></h3>
      <div class="container-fluid mt-2" style="background-color:#CDCDCD; ">
       
        <form action="Form-facilities-lab-back.php" method="post" id="form" enctype="multipart/form-data">
         
          <label class="mt-2" for="dept"><b>Select the Department</b></label>
          <select ng-model="dept" id="dept" name="dept" class="form-select" aria-label="Default select example">
            <option value="Choose" selected>Choose</option>
            <option value="Bio">Bio-Technology</option>
            <option value="Chemical">Chemical Engineering</option>
            <option value="Civil">Civil Engineering</option>
      <option value="Computer">Computer Engineering</option>
      <option value="Electrical">Electrical Engineering</option>
      <option value="Information">Information Technology</option>
      <option value="Ipe">Industrial and production Engineering</option>
          </select>
          
          <label for="labname"><b>Enter Lab name:</b></label><br>
          <input type="text" id="labname" name="labname" value=" "><br>
          
          <label for="labinfo"><b>Lab info in parts</b></label>
          <textarea name="labinfo" id="labinfo">Some text...</textarea>
          
      <b>Select image to upload:</b>
        <input type="file" name="pic" id="pic" multiple id="fileToUpload">
         
          <input type="submit" id="btn" name="btn" class="brn-primary mb-2" value="Submit">
        </form>
        
      </div>
        </div><hr><hr></div>
        <center>
            <button type="button" class="btn btn-primary mt-5" id="btnrate" ng-click="showtable(dept);">Fetch your labs info</button></center>
        <table class="ml-2 mt-3" border="1" rules="all" cellpadding="10%" width="80%"><tr>
            <th class="ml-2 mr-2">S NO:</th>
            <th ng-click="sort('uid');">DEPARTMANET NAME</th>
            <th ng-click="sort('mobile');">LAB NAME</th>
            <th ng-click="sort('dos');">LAB INFO</th>
            <th ng-click="sort('status');">PIC NAME</th>
            <th ng-click="sort('status');">DATE</th>
            <th ng-click="sort('status');">TIME</th>
            <th>ACTION</th>
            </tr>
            <tr ng-repeat="obj in arrysel|orderBy:colname">
                <td>
                {{$index+1}}
                </td>&nbsp;
                <td>
                {{obj.dept}}
                </td>&nbsp;
                <td>
                {{obj.labname}}
                </td>&nbsp;<td>
                {{obj.labinfo}}
                </td>&nbsp;
                <td>
               {{obj.orgname}}
                </td>&nbsp;
                <td>
               {{obj.curdate}}
                </td>&nbsp;
                <td>
               {{obj.curtime}}
                </td>&nbsp;
               <td>
                <input type="button" class="mt-2" id="btn" ng-model="block" value="EDIT" ng-click="block(obj.uid);">
               <br>
                <input type="button" id="btn" class="mt-2" ng-model="unblock" value="ENABLE" ng-click="unblock(obj.uid);">
               <br>
                <input type="button" id="btn" class="mt-2" value="DISABLE" ng-click="delete(obj.uid,$index);">
                </td>&nbsp;
            </tr>
        </table>
        </center>
</body>

</html>
