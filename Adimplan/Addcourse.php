<?php 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADIMPLAN</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/adim1.css">
    <link rel="icon" href="../images/logo/whitebackground.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>\
    <style>
        .col-6{
            margin-top: 100px;
    margin-left: auto;
    margin-right: 50px;
    width: 60%;
        }
        
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



    <section class="adim">

        <?php
        include 'navbaradmin.php';
        include 'siderbar.php';
        include '../database/database.php';

        if (isset($_POST['addcoursebtn'])) {
            // checking for empty fields
            if (($_POST['Course_Name'] == "") ||
                ($_POST['course_url'] == "") ||
                ($_FILES['Course_image'] == "")
            ) {
                function function_alert($msg)
                {
                    // Display the alert box 
                    echo "<script>alert('$msg');</script>";
                }
                function_alert("Fill All Fileds");
               
            } else {
                $txtname = $_POST['Course_Name'];
                $txturl = $_POST['course_url'];
                $filename = $_FILES["Course_image"]["name"];
                $tempname = $_FILES["Course_image"]["tmp_name"];
                $folder = "images/topics/". $filename;


                $sql = "INSERT INTO coursea (Course_Name,course_url,Course_image) VALUES ('$txtname','$txturl','$folder')";

                if ($conn->query($sql) == TRUE) {

             function function_alert($msg)
             {
                 // Display the alert box 
                 echo "<script>alert('$msg');</script>";
             }
             function_alert(" Add Course Succsefully");
                } else {
                  function function_alert($msg)
                  {
                      echo "<script>alert('$msg');</script>";
                  }
                  function_alert("Unable to Add Course");
                  
                }
                mysqli_close($conn);
            }
        }

        ?>
        <div class="col-6">

            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

                <h1 class="list-group-item fs-2">ADD NEW COURSE</h1>
                <form class="row g-2" method="POST" enctype="multipart/form-data">
                    
                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">Course_Name</label>
                        <input type="text" class="form-control" id="Course_Name" name="Course_Name" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">course_url</label>
                        <input type="text" class="form-control" id="course_url" name="course_url" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault05" class="form-label">Image</label>
                        <input type="file" class="form-control" id="Course_image" name="Course_image" required><br>
                    </div><br>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div><br>
                   
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" onclick="myFunction()" id="addcoursebtn" name="addcoursebtn">Submit form</button>
                        <a class="btn btn-secondary" href="course.php">Close</a>
                    </div>

                </form>
            </div>
        </div>
        </div>
</body>

</html>