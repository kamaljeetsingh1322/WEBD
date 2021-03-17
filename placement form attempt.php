<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <title>PLACEMENT</title>
    <style>
    .btn-primary {
        color: #fff;
        background-color: #1a202c;
        border-color: #1a202c;
    }
    </style>
    <style>
    td {
        height: 20px;
    }
    </style>

    <!-- <style>
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
    </style> -->
</head>

<body style="background-color: #1a202c ;">

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <!-- echo "here"; -->
                    <form action="placement form attempt.php" method="post">
                    <input type="hidden" name="snoEdit" id="snoEdit">

                        <!-- <hr class="mb-3 col-md-3"> -->
                        <!-- <center><H6 style="margin-top: 0px;font-size: 1rem;">Contact us for your concerns</H6></center> -->

                        <center>
                            <h2>Placement Form</h2>
                        </center>



                        <!-- <hr class="mb-3 col-md-3"> -->

                        <div class="container row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" class="form-label"
                                    style="     padding-top: 30px; "><b>Select
                                        the batch</b></label>
                                <select name="batchEdit" id="batchEdit" class="form-control">
                                    <option value=" "></option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="exampleInputEmail1" class="form-label"
                                    style="     padding-top: 30px; "><b>Select
                                        the Department</b></label>
                                <select name="departmentEdit" id="departmentEdit" class="form-control">
                                    <option value=" "></option>
                                    <option value="Bio">Bio-Technology</option>
                                    <option value="Chemical">Chemical Engineering</option>
                                    <option value="Civil">Civil Engineering</option>
                                    <option value="Computer">Computer Engineering</option>
                                    <option value="Electrical">Electrical Engineering</option>
                                    <option value="Information">Information Technology</option>
                                    <option value="Ipe">Industrial and production Engineering</option>
                                </select>
                            </div>
                        </div>


                        <div class="container row ">

                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label"><b>First Name</b></label>
                                <input type="text" name="firstNameEdit" id="firstNameEdit" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label"><b>Last Name</b></label>
                                <input type="text" name="lastNameEdit" id="lastNameEdit" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>

                        </div>


                        <div class="container row">
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" class="form-label"><b>Mobile Number</b></label>
                                <input type="text" name="mobileNoEdit" id="mobileNoEdit" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" class="form-label"><b>Course Name</b></label>
                                <input type="text" name="courseEdit" id="courseEdit" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1" class="form-label"><b>Branch</b></label>
                                <input type="text" name="branchEdit" id="branchEdit" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="container row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label"><b>Roll Number</b></label>
                                <input type="text" name="rollNoEdit" id="rollNoEdit" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label"><b>Email ID</b></label>
                                <input type="email" name="emailEdit" id="emailEdit" class="form-control"
                                    aria-describedby="emailHelp">
                            </div>
                        </div>

                            <div>
                                <br>
                            </div>



                            <div class="container row">
                                <div style=><b>Select Student image to upload:</b>
                                <input class="form-control" type="file" name="imageEdit" id="imageEdit">
                            </div>
                            </div>
                            <div><br></div>

                            <div class="container row">
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><b>Company</b></label>
                                    <input type="text" name="companyEdit" id="companyEdit" class="form-control"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label"><b>packages</b></label>
                                    <input type="text" name="packagesEdit" id="packagesEdit" class="form-control"
                                        aria-describedby="emailHelp">
                                </div>
                            </div>
                              
                                

                                <center><button type="submit" class="btn btn-primary">Submit</button></center>
                    </form>

                </div>

            </div>
        </div>
    </div>





    <?php
    
            // Connecting to the Database

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "collegewebsite"; 

            // Create a connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Die if connection was not successful
            
            if (!$conn){
                die("Sorry we failed to connect: ". mysqli_connect_error());
                }

            else{ 
        //       echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="padding-top: 1px;
        //       /* margin-top: -2px; */
        //       padding-bottom: 2px;">
        //       <strong>wooohoooo!</strong> We  connected successfully 
        //       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: -13px;"></button>
        //   </div>';

                
                      if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        // echo "successfully connected";
                        // <h1 style="color: blue;" >A Blue Heading</h1>
                        $batch=$_POST['batch']; 
                        $department=$_POST['department']; 
                        $firstName=$_POST['firstName']; 
                        $lastName=$_POST['lastName']; 
                        $mobileNo=$_POST['mobileNo'];
                        $course=$_POST['course'];
                        // $image=$_POST['fileToUpload'];
                    //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="padding-top: 1px;
                    //     /* margin-top: -2px; */
                    //     padding-bottom: 2px;">
                    //     <strong>wooohoooo!</strong>'.$image.'
                    //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: -13px;"></button>
                    // </div>';
                        $branch=$_POST['branch'];
                        $rollNo=$_POST['rollNo'];
                        $email=$_POST['email'];
                        $company=$_POST['company'];
                        $packages=$_POST['packages'];

                        $target_dir = "uploads/";
                        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        $nameOfimage= $_FILES["fileToUpload"]["name"] ;
                        if(isset($_POST["submit"])) {
                          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                          if($check !== false) {
                            // echo "File is an image - " . $check["mime"] . ".";
                            $uploadOk = 1;
                          } else {
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="padding-top: 1px;
                          /* margin-top: -2px; */
                          padding-bottom: 2px;">
                          <strong>oops!</strong>File is not an image.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: -13px;"></button>
                      </div>'; 
                            $uploadOk = 0;
                          }
                        }

                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="padding-top: 1px;
                          /* margin-top: -2px; */
                          padding-bottom: 2px;">
                          <strong>wooohoooo!</strong>Sorry, only JPG, JPEG, PNG & GIF files are allowed.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: -13px;"></button>
                      </div>'; 
                          $uploadOk = 0;
                        }

                        // Check if $uploadOk is set to 0 by an error
                        if ($uploadOk == 0) {
                          echo "Sorry, your file was not uploaded.";
                        // if everything is ok, try to upload file
                        } else {
                          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                            // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="padding-top: 1px;
                        /* margin-top: -2px; */
                        padding-bottom: 2px;">
                        <strong>wooohoooo!</strong>Image uploaded successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: -13px;"></button>
                    </div>';    
                        } else {
                            echo "Sorry, there was an error uploading your file.";
                          }
                        }

                        $sql2 = "INSERT INTO `placement` (`batch`,`department`,`firstName`,`lastName`, `mobileNo`, `course`,`branch`,`rollNo`,`email`,`image`,`company`, `packages`) VALUES ('$batch','$department','$firstName','$lastName', '$mobileNo', '$course','$branch','$rollNo','$email','$nameOfimage', '$company', '$packages')";

                        $result = mysqli_query($conn, $sql2); 
                        if($result){
                          $update = true;
                        //   move_uploaded_file($tmpname,"uploads/".$image);

                                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="padding-top: 1px;
                                /* margin-top: -2px; */
                                padding-bottom: 2px;">
                                <strong>wooohoooo!</strong> We  updated the record successfully 
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: -13px;"></button>
                            </div>';
                          }
                      else{
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="padding-top: 1px;
                        /* margin-top: -2px; */
                        padding-bottom: 2px;">
                        <strong>Noooooooooo!</strong> We could not update the record successfully 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: -13px;"></button>
                    </div>';
                      }
                  }
                }

    ?>

    <!-- <center> -->

    <div class="container  mt-3"
        style=" padding-top: 29px; border-radius: 65px 65px 65px 65px;background-color: #e2e8f0; ">

        <center>
            <form action="placement form attempt.php" method="post" enctype="multipart/form-data">

                <center>
                    <h2>Placement Form</h2>
                </center>


                <div class="container row">
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label" style="     padding-top: 30px; "><b>Select
                                the batch</b></label>
                        <select name="batch" id="batch" class="form-control">
                            <option value=" "></option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <label for="exampleInputEmail1" class="form-label" style="     padding-top: 30px; "><b>Select
                                the Department</b></label>
                        <select name="department" id="department" class="form-control">
                            <option value=" "></option>
                            <option value="Bio">Bio-Technology</option>
                            <option value="Chemical">Chemical Engineering</option>
                            <option value="Civil">Civil Engineering</option>
                            <option value="Computer">Computer Engineering</option>
                            <option value="Electrical">Electrical Engineering</option>
                            <option value="Information">Information Technology</option>
                            <option value="Ipe">Industrial and production Engineering</option>
                        </select>
                    </div>
                </div>


                <div class="container row ">

                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label"><b>First Name</b></label>
                        <input type="text" name="firstName" id="firstName" class="form-control"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label"><b>Last Name</b></label>
                        <input type="text" name="lastName" id="lastName" class="form-control"
                            aria-describedby="emailHelp">
                    </div>

                </div>


                <div class="container row">
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label"><b>Mobile Number</b></label>
                        <input type="text" name="mobileNo" id="mobileNo" class="form-control"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label"><b>Course Name</b></label>
                        <input type="text" name="course" id="course" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md-4">
                        <label for="exampleInputEmail1" class="form-label"><b>Branch</b></label>
                        <input type="text" name="branch" id="branch" class="form-control" aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="container row">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label"><b>Roll Number</b></label>
                        <input type="text" name="rollNo" id="rollNo" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label"><b>Email ID</b></label>
                        <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp">
                    </div>

                    <div>
                        <br>
                    </div>



                    <div class="container row">
                        <div style=><b>Select Student image to upload:</b>
                        <input type="file" name="fileToUpload" class="form-control" id="fileToUpload" >
                    </div>
                    <div><br></div>

                    <div class="container row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label"><b>Company</b></label>
                            <input type="text" name="company" id="company" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label"><b>packages</b></label>
                            <input type="text" name="packages" id="packages" class="form-control"
                                aria-describedby="emailHelp">
                        </div>
                        <div><br></div>

                        <center><button type="submit" value="Upload Image" name="submit" class="btn btn-primary">Submit</button></center>
            </form>
        </center>

        <div class="container  col-md-10 mt-3" style=" padding-top: 29px; border-radius: 65px 65px 65px 65px; ">
            <br>
            <div>
                <table>
                    <br>
                    <table id="myTable" class="display compact" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Batch</th>
                                <th scope="col">Department</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Course</th>
                                <th scope="col">Branch</th>
                                <th scope="col">Roll No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Company</th>
                                <th scope="col">packages</th>
                                <th scope="col">Actions</th>

                            </tr>
                        </thead>

                        <tbody>

                            <?php
                              $servername = "localhost";
                              $username = "root";
                              $password = "";
                              $database = "collegewebsite"; 

                              $conn = mysqli_connect($servername, $username, $password, $database);
                              $sql = "SELECT * FROM `placement`";
                              $result = mysqli_query($conn, $sql);

                              $num = mysqli_num_rows($result);
                            
                              if($num> 0){
                                 
                                  $no=1;
                                  while($row = mysqli_fetch_assoc($result)){  
                                
                                      echo "<tr>
                                      <th scope='row'>".$no."</th>
                                      <td>".$row['batch']."</td>
                                      <td>".$row['department']."</td>
                                      <td>".$row['firstName']."</td>
                                      <td>".$row['lastName']."</td>
                                      <td>".$row['mobileNo']."</td>
                                      <td>".$row['course']."</td>
                                      <td>".$row['branch']."</td>
                                      <td>".$row['rollNo']."</td>
                                      <td>".$row['email']."</td>
                                      <td style='white-space:nowrap;'>".$row['image'].' '."</td>
                                      <td>".$row['company']."</td>
                                      <td>".$row['packages']."</td>
                                      <td style='white-space:nowrap;'>
                                      <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button>".' '."<button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Del</button>".' '." </td>
                                      
                                      </tr>";
                                      $no=$no+1;
                                      
                                      
                                  }
                              }

                      ?>




                        </tbody>
                    </table>
                </table>
            </div>
            <br>
            <br>
            <br>
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
                crossorigin="anonymous"></script>

            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
            <!-- $(document).ready(function() {
                $('#myTable').DataTable();

            }); -->
            <script>
            $(document).ready(function() {
                $('#myTable').DataTable({
                    "scrollY": 200,
                    "scrollX": true
                });
            });
            </script>
            <script>
            edits = document.getElementsByClassName('edit');
            Array.from(edits).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("edit ");
                    tr = e.target.parentNode.parentNode;
                    batch = tr.getElementsByTagName("td")[0].innerText;
                    department = tr.getElementsByTagName("td")[1].innerText;
                    firstName = tr.getElementsByTagName("td")[2].innerText;
                    lastName = tr.getElementsByTagName("td")[3].innerText;
                    mobileNo = tr.getElementsByTagName("td")[4].innerText;
                    course = tr.getElementsByTagName("td")[5].innerText;
                    branch = tr.getElementsByTagName("td")[6].innerText;
                    rollNo = tr.getElementsByTagName("td")[7].innerText;
                    email = tr.getElementsByTagName("td")[8].innerText;
                    image = tr.getElementsByTagName("td")[9].innerText;
                    company = tr.getElementsByTagName("td")[10].innerText;
                    packages = tr.getElementsByTagName("td")[11].innerText;
                    console.log(batch, department, firstName, lastName, mobileNo, course, branch,
                        rollNo, email, image, company,packages);
                    batchEdit.value = batch;
                    departmentEdit.value = department;
                    firstNameEdit.value = firstName;
                    lastNameEdit.value = lastName;
                    mobileNoEdit.value = mobileNo;
                    courseEdit.value = course;
                    branchEdit.value = branch;
                    rollNoEdit.value = rollNo;
                    emailEdit.value = email;
                    imageEdit.value = image;
                    companyEdit.value = company;
                    packagesEdit.value = packages;
                    snoEdit.value = e.target.id;
                    console.log(e.target.id)
                    $('#editModal').modal('toggle');
                })
            })

            deletes = document.getElementsByClassName('delete');
            Array.from(deletes).forEach((element) => {
                element.addEventListener("click", (e) => {
                    console.log("edit ");
                    sno = e.target.id.substr(1, );

                    if (confirm("Are you sure you want to delete this note!")) {
                        console.log("yes");
                        window.location = `GET & POST request.php?delete=${sno}`;
                    } else {
                        console.log("no");
                    }
                })
            })
            </script>
                    </div></div></form></center></div>


</body>

</html>