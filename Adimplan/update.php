<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial Learning</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/adim1.css">
    <link rel="icon" href="../images/logo/whitebackground.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
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

        if (isset($_POST['updatebtn'])) {
            // checking for empty fields
            if (($_POST['Id'] == "") ||
                ($_POST['Course_Name'] == "") ||
                ($_POST['course_url'] == "")  ||
                ($_FILES['Course_image'] == "")
            ) {
                function function_alert($msg)
                {

                    // Display the alert box 
                    echo "<script>alert('$msg');</script>";
                }
                function_alert("Fill All Fileds");
            } else {
                $txId = $_POST['Id'];
                $txname = $_POST['Course_Name'];
                $txurl = $_POST['course_url'];
                $filename = $_FILES["Course_image"]["name"];
                $tempname = $_FILES["Course_image"]["tmp_name"];
                $folder = "../images/topics/".$filename;
               

                $sql = "UPDATE coursea SET Id= '$txId' , Course_Name= '$txname ' ,course_url= '$txurl' ,Course_image='$folder'  WHERE Id= '$txId' ";

                if ($conn->query($sql) == TRUE) {
                    function function_alert($msg)
                    {

                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Course Update successfully");
                } else {

                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                        
                     </div>';
                    function function_alert($msg)
                    {

                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Unable update Succesfully");
                }
                mysqli_close($conn);
            }
        }





        if (isset($_POST['view'])) {
            $sql = "SELECT * FROM coursea WHERE Id = {$_POST['Id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }


        ?>
        <div class="col-6   ">

            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

                <h1 class="list-group-item fs-2">UPDATA COURSE</h1>
                <form class="row g-2" method="POST" enctype="multipart/form-data">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">course Id</label>
                        <input type="text" class="form-control" id="Id" name="Id" value="<?php if (isset($row['Id'])) {
                                                                                                echo $row['Id'];
                                                                                            } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">course Name</label>
                        <input type="text" class="form-control" id="Course_Name" name="Course_Name" value="<?php if (isset($row['Course_Name'])) {
                                                                                                                echo $row['Course_Name'];
                                                                                                            } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Course URL</label>
                        <input type="text" class="form-control" id="course_url" name="course_url" value="<?php if (isset($row['course_url'])) {
                                                                                                                echo $row['course_url'];
                                                                                                            } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Images</label>
                        <input type="file" class="form-control" id="Course_image" name="Course_image" value="<?php if (isset($row['Course_image'])) {
                                                                                                                echo $row['Course_image'];
                                                                                                            } ?>" required>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" onclick="return checkdelete()" id="updatebtn" name="updatebtn">Submit </button>
                        <a class="btn btn-secondary" href="course.php">Close</a>
                    </div>
                    <script>
                        function checkdelete() {
                            var result = confrim("Are you sure update the course?");
                            if (result) {
                                return true;
                            } else {
                                return false
                            }
                        }
                    </script>
                </form>
            </div>
        </div>
        </div>
</body>

</html>