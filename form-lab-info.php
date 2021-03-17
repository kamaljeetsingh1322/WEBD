<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lab Form</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.2/angular.min.js" integrity="sha512-7oYXeK0OxTFxndh0erL8FsjGvrl2VMDor6fVqzlLGfwOQQqTbYsGPv4ZZ15QHfSk80doyaM0ZJdvkyDcVO7KFA==" crossorigin="anonymous"></script>

  
  
  
    <style>
        body {
            background-color: ;
            font-family: Arial, Helvetica, sans-serif;
        }

        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        label {
            font-size: 1.0rem;
            border: 2px solid #2874A6;
            color: white;
            background-color: #2874A6;
            padding: 4px;
            margin: 3px;
        }

        th {
            background-color: beige;
        }

    </style>

    <script>
        var module = angular.module("ourmodule", []);
        module.controller("ourcontroller", function($scope, $http) {
            $scope.arrysel;
            $scope.showtable = function(uid) {
                $http.get("fetch-facilities-lab.php?uid=" + uid).then(ok, notok);

                function ok(resp) {

                    $scope.arrysel = resp.data;
                }

                function notok(resp) {
                    alert(resp);
                }
            }
            $scope.showtable2 = function(uid) {
                $http.get("fetch-facilities-lab-disabled.php?uid=" + uid).then(ok, notok);

                function ok(resp) {

                    $scope.arrysel2 = resp.data;
                }

                function notok(resp) {
                    alert(resp);
                }
            }
            $scope.block = function(sno){
             
                 $http.get("form-lab-block.php?sno="+sno).then(ok,notok);
                   function ok(resp){
                       alert("Are you sure want to block this id?");
                   } 
                    function notok(resp){
                        alert(resp.data);
                    }
                }
            $scope.unblock = function(sno){
             
                 $http.get("form-lab-unblock.php?sno="+sno).then(okfunc,notokfunc);
                   function okfunc(resp){
                       alert("Are you sure want to unblock this id?");
                       
                   } 
                    function notokfunc(resp){
                        alert(resp.data);
                    }
                }
            $scope.edit = function(uid){
                 $http.get("form-lab-edit.php?uid="+uid).then(okfunc,notokfunc);
                   function okfunc(resp){
                       alert("Are you sure want to edit details?");
                   } 
                    function notokfunc(resp){
                        alert(resp.data);
                    }
                }
            ///////////////////////////
             $scope.fetch = function(sno) {
                $http.get("form-lab-full-json-fetch.php?sno="+sno).then(ok, notok);
                function ok(resp) {
                    $scope.ARRY = resp.data;
                $scope.dept1 = $scope.ARRY[0].dept;
                $scope.uid1= $scope.ARRY[0].uid;
                $scope.uname1 = $scope.ARRY[0].uname;
                $scope.labname1 = $scope.ARRY[0].labname;
                $scope.labinfo1 = $scope.ARRY[0].labinfo;
                    alert($scope.ARRY[0].orgname)
                $scope.hdn = $scope.ARRY[0].orgname;
                    $scope.images1=$scope.ARRY[0].orgname;
                    alert($scope.images1)
                    $scope.image_preview1.attr("src","uploads/"+ARRY[0].orgname);
                }
                      function notok(resp) {
                    alert(resp);
                }
            }
            //////////////////////////
         $scope.fetch11 = function(sno) {
                alert(sno);
                $http.get("form-lab-full-json-fetch.php?sno="+sno).then(ok, notok);
                function ok(resp) {
                    alert(JSON.stringify(resp.data))
                    $scope.ARRY1 = resp.data;
                $scope.dept11 = $scope.ARRY1[0].dept;
                $scope.uid11= $scope.ARRY1[0].uid;
                $scope.uname11 = $scope.ARRY1[0].uname;
                $scope.labname11 = $scope.ARRY1[0].labname;
                $scope.labinfo11 = $scope.ARRY1[0].labinfo;
                $scope.images11 = $scope.ARRY1[0].orgname;
                }
                      function notok(resp) {
                    alert(resp);
                }
            }
            
        });


    </script>
        
<script>
       function preview_images() 
{
 var total_file=document.getElementById("pic").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-12'><img class='img' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
    function preview_images1() 
{
 var total_file=document.getElementById("images1").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview1').append("<div class='col-md-12'><img class='img1' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
    
    function preview_images11() 
{
 var total_file=document.getElementById("images11").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview11').append("<div class='col-md-12'><img class='img1' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
    </script>
    <style>
        .img{
            height: 200px;
            width: 200px;
            float: left;
            margin-left: 10px;
            margin-top: 10px;
        }
        .img1{
            height: 170px;
            width: 170px;
            float: left;
            margin-left: 5px;
            margin-top: 5px;
        }
    </style>
</head>

<body ng-app="ourmodule" ng-controller="ourcontroller">


    <div class="container">
        <form action="Form-facilities-lab-back.php" method="post" id="form" enctype="multipart/form-data">
            <br>
            <center>
                <h3 style="background-color: #2874A6; color: white; border: .125rem solid  #2874A6;">
                    <u>LAB INFORMATION FORM</u>
                </h3>
            </center>
            <hr>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="dept">Select the Department</label>
                    <select ng-model="dept" id="dept" name="dept" class="form-control">
                        <option value="" selected>Choose</option>
                        <option value="bt">Bio-Technology</option>
                        <option value="cme">Chemical Engineering</option>
                        <option value="ce">Civil Engineering</option>
                        <option value="cse">Computer Science & Engineering</option>
                        <option value="ee">Electrical Engineering</option>
                        <option value="ele">Electronics Engineering</option>
                        <option value="it">Information Technology</option>
                        <option value="ipe">Industrial and production Engineering</option>
                        <option value="ice">Instrumentation and Conrtrols Engineering</option>
                        <option value="me">Mechanical Engineering</option>
                        <option value="te">Textile Engineering</option>

                    </select>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="uid">User ID</label>
                    <input type="text" ng-model="uid" name="uid" id="uid" class="form-control"  placeholder="Enter User ID here" ng-change="showtable(uid); showtable2(uid);">
                </div>
                <div class="form-group col-md-4">
                    <label for="uname">User Name</label>
                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter User Name here">
                </div>
                <div class="form-group col-md-4">
                    <label for="labname">Lab Name</label>
                    <input type="text" name="labname" id="labname" class="form-control" placeholder="Enter Lab Name here">
                </div>

            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="labinfo">Lab info in parts</label>
                    <textarea id="labinfo" name="labinfo" style="height:12.5rem" placeholder="Write something.."></textarea>
                </div>
            </div>
            <div class="form-row">
               <div class="col-md-12">
                <label for="images">Select image to upload</label>
                <input type="file" class="form-control" id="pic" name="pic" onchange="preview_images();" >

            </div>
            
            </div>
            
            <div class="form-row ">
            <div class="col-md-12">
                <div id="image_preview"></div>
            </div>
            </div>
            
            <center>
            <input type="submit" id="btn" name="submit_image" class="btn col-md-4 mt-4 mr-2" style="background-color:  #2874A6; color: white;" value="Submit">
            </center>
        </form>
        <h3>ENABLED</h3>
        <table class="col-md-12 mt-3 mb-5" border="1" rules="all" cellpadding="10%">
            <tr>
                <th class="ml-2 mr-2">S NO:</th>
                <th >DEPARTMANET NAME</th>
                <th>USER ID</th>
                <th>USER NAME</th>
                <th >LAB NAME</th>
                <th >LAB INFO</th>
                <th >PIC NAME</th>
                <th >DATE</th>
                <th >TIME</th>
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
                    {{obj.uid}}
                </td>&nbsp;
                <td>
                    {{obj.uname}}
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
                  
                  
                   <input type="button" value="edit" id="fetch" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" ng-click="fetch(obj.sno);">
                   
                   

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2874A6; color:white;" >
        <h5 class="modal-title"  id="exampleModalLabel">Update Details</h5>
        <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group col-md-12">
                    <label for="dept1">Select the Department</label>
                    <select ng-model="dept1" id="dept" name="dept1" class="form-control">
                        <option value="" selected>Choose</option>
                        <option value="bt">Bio-Technology</option>
                        <option value="cme">Chemical Engineering</option>
                        <option value="ce">Civil Engineering</option>
                        <option value="cse">Computer Science & Engineering</option>
                        <option value="ee">Electrical Engineering</option>
                        <option value="ele">Electronics Engineering</option>
                        <option value="it">Information Technology</option>
                        <option value="ipe">Industrial and production Engineering</option>
                        <option value="ice">Instrumentation and Conrtrols Engineering</option>
                        <option value="me">Mechanical Engineering</option>
                        <option value="te">Textile Engineering</option>

                    </select>
                </div>
            <div class="col-md-12">
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="uid1">User ID</label>
                    <input type="text" name="uid1"  ng-model="uid1" id="uid1" readonly class="form-control" >
                </div>
                <div class="form-group col-md-4">
                    <label for="uname1">User Name</label>
                    <input type="text" name="uname1" ng-model="uname1" id="uname1" class="form-control" >
                </div>
                <div class="form-group col-md-4">
                    <label for="labname1">Lab Name</label>
                    <input type="text" name="labname1" id="labname1" ng-model="labname1" class="form-control" >
                </div>

            </div>
            </div>
            <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="labinfo1">Lab info in parts</label>
                    <textarea id="labinfo1" name="labinfo1" ng-model="labinfo1" style="height:12.5rem" ></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-row">
               <div class="col-md-12">
                <label for="images1">Select image to upload</label>
                <input type="file" class="form-control" ng-model="images1" id="images1" name="images1" onchange="preview_images1();">
            </div>
            
            </div>
          </div>
            <div class="col-md-12">
            <div class="form-row ">
            <div class="col-md-12">
                <div id="image_preview1"></div>
            </div>
            </div>
          </div>
      </div>
      <div class="modal-footer" style="background-color:#2874A6;">
        
        <button type="button" class="btn btn-danger" ng-click="edit(obj.uid)" >Save changes</button>
      </div>
    </div>
  </div>
</div>
                    <br>
                    
                    
                    <input type="button" id="btn" class="mt-2" value="DISABLE" ng-click="block(obj.sno);">
                </td>&nbsp;
            </tr>
        </table>
        <hr><hr>
        <h3>DISABLED</h3>
        
        <table class="col-md-12 mt-3 mb-5" border="1" rules="all" cellpadding="10%">
            <tr>
                <th class="ml-2 mr-2">S NO:</th>
                <th >DEPARTMANET NAME</th>
                <th>USER ID</th>
                <th>USER NAME</th>
                <th >LAB NAME</th>
                <th >LAB INFO</th>
                <th >PIC NAME</th>
                <th >DATE</th>
                <th >TIME</th>
                <th>ACTION</th>
            </tr>
            <tr ng-repeat="obj2 in arrysel2|orderBy:colname">
                <td>
                    {{$index+1}}
                </td>&nbsp;
                <td>
                    {{obj2.dept}}
                </td>&nbsp;
                <td>
                    {{obj2.uid}}
                </td>&nbsp;
                <td>
                    {{obj2.uname}}
                </td>&nbsp;
                <td>
                    {{obj2.labname}}
                </td>&nbsp;<td>
                    {{obj2.labinfo}}
                </td>&nbsp;
                <td>
                    {{obj2.orgname}}
                </td>&nbsp;
                <td>
                    {{obj2.curdate}}
                </td>&nbsp;
                <td>
                    {{obj2.curtime}}
                </td>&nbsp;
                <td>
                   <input type="button" value="edit" id="fetch" ng-click="fetch11(obj2.sno)" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#2874A6; color:white;" >
        <h5 class="modal-title"  id="exampleModalLabel">Update Details</h5>
        <button type="button" style="color:white;" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group col-md-12">
                    <label for="dept11">Select the Department</label>
                    <select ng-model="dept11" id="dept11" name="dept11" class="form-control">
                        <option value="" selected>Choose</option>
                        <option value="bt">Bio-Technology</option>
                        <option value="cme">Chemical Engineering</option>
                        <option value="ce">Civil Engineering</option>
                        <option value="cse">Computer Science & Engineering</option>
                        <option value="ee">Electrical Engineering</option>
                        <option value="ele">Electronics Engineering</option>
                        <option value="it">Information Technology</option>
                        <option value="ipe">Industrial and production Engineering</option>
                        <option value="ice">Instrumentation and Conrtrols Engineering</option>
                        <option value="me">Mechanical Engineering</option>
                        <option value="te">Textile Engineering</option>

                    </select>
                </div>
            <div class="col-md-12">
                <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="uid11">User ID</label>
                    <input type="text" name="uid11" ng-model="uid11" id="uid11" readonly class="form-control" >
                </div>
                <div class="form-group col-md-4">
                    <label for="uname11">User Name</label>
                    <input type="text" name="uname11" ng-model="uname11" id="uname11" class="form-control" >
                </div>
                <div class="form-group col-md-4">
                    <label for="labname11">Lab Name</label>
                    <input type="text" name="labname11" ng-model="labname11" id="labname11" class="form-control" >
                </div>

            </div>
            </div>
            <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="labinfo11">Lab info in parts</label>
                    <textarea id="labinfo11" ng-model="labinfo11" name="labinfo11" style="height:12.5rem" ></textarea>
                </div>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-row">
               <div class="col-md-12">
                <label for="images11">Select image to upload</label>
                <input type="file" class="form-control" ng-model="images11" id="images11" name="images11" onchange="preview_images11();">

            </div>
            
            </div>
          </div>
            <div class="col-md-12">
            <div class="form-row ">
            <div class="col-md-12">
                <div id="image_preview11"></div>
            </div>
            </div>
          </div>
      </div>
      <div class="modal-footer" style="background-color:#2874A6;">
        <button type="button" class="btn btn-danger" ng-click="edit(obj.uid)" >Save changes</button>
      </div>
    </div>
  </div>
</div>
                    <br>
                    
                    <input type="button" id="btn" class="mt-2" ng-model="unblock" value="ENABLE" ng-click="unblock(obj2.sno);">
                    <br>
                    &nbsp;
            </tr>
            </table>
    </div>
</body>

</html>
