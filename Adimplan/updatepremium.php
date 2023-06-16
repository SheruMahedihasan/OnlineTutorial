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

        if (isset($_POST['premiumbtn'])) {
            // checking for empty fields
            if (($_POST['Id'] == "") ||
                ($_POST['Premium_Name'] == "") ||
                ($_POST['Premium_Desprition'] == "") ||
                ($_FILES['Premium_Images'] == "") ||
                ($_POST['Premium_Selling'] == "") ||
                ($_POST['Course_Id'] == "")

            ) {
                function function_alert($msg)
                {
                    // Display the alert box 
                    echo "<script>alert('$msg');</script>";
                }
                function_alert("Fill All Fileds");
            } else {
                $txId = $_POST['Id'];
                $txtname = $_POST['Premium_Name'];
                $txtdes = $_POST['Premium_Desprition'];
                $filename = $_FILES["Premium_Images"]["name"];
                $tempname = $_FILES["Premium_Images"]["tmp_name"];
                $folder = "images/topics/" . $filename;
                $txtselling = $_POST['Premium_Selling'];
                $txtCourse_Id = $_POST['Course_Id'];

                $sql = "UPDATE premiumpacks SET Id = '$txId' , Premium_Name= '$txtname ' ,Premium_Desprition= '$txtdes' ,Premium_Images='$folder' ,Premium_Selling='$txtselling' ,Course_Id='$txtCourse_Id'  WHERE Id= '$txId' ";

                if ($conn->query($sql) == TRUE) {
                    function function_alert($msg)
                    {
                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Update Successfully");
                    
                } else {

                    function function_alert($msg)
                    {
                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Unabel Update");
                }
                mysqli_close($conn);
            }
        }

        if (isset($_POST['view'])) {
            $sql = "SELECT * FROM premiumpacks WHERE Id = {$_POST['Id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }


        ?>
        <div class="col-6   ">

            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

                <h1 class="list-group-item fs-2">UPDATA PremimPAcks</h1>
                <form class="row g-2" method="POST" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <?php if (isset($msg)) {
                            echo $msg;
                        } ?>
                    </div>
                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">Premium Id</label>
                        <input type="text" class="form-control" id="Id " name="Id" value="<?php if (isset($row['Id'])) {
                                                                                                echo $row['Id'];
                                                                                            } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">Premium Name</label>
                        <input type="text" class="form-control" id="Premium_Name" name="Premium_Name" value="<?php if (isset($row['Premium_Name'])) {
                                                                                                                    echo $row['Premium_Name'];
                                                                                                                } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Premium Desprition</label>
                        <input type="text" class="form-control" id="Premium_Desprition" name="Premium_Desprition" value="<?php if (isset($row['Premium_Desprition'])) {
                                                                                                                                echo $row['Premium_Desprition'];
                                                                                                                            } ?>" required>
                    </div>


                    <div class="col-md-8">
                        <label for="validationDefault05" class="form-label">Premium Images</label>
                        <input type="file" class="form-control" id="Premium_Images" name="Premium_Images" value="<?php if (isset($row['Premium_Images'])) {
                                                                                                                        echo $row['Premium_Images'];
                                                                                                                    } ?>" required><br>
                    </div><br>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Premium Selling</label>
                        <input type="text" class="form-control" id="Premium_Selling" name="Premium_Selling" value="<?php if (isset($row['Premium_Selling'])) {
                                                                                                                        echo $row['Premium_Selling'];
                                                                                                                    } ?>" required>
                    </div>
                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Course_Id</label>
                        <input type="text" class="form-control" id="Course_Id" name="Course_Id"  value="<?php if (isset($row['Course_Id'])) {
                                                                                                                        echo $row['Course_Id'];
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
                        <button class="btn btn-primary" type="submit" onclick="myFunction()" id="premiumbtn" name="premiumbtn">Submit </button>
                        <a class="btn btn-secondary" href="PremiumPacks.php">Close</a>
                    </div>

                </form>
            </div>
        </div>
        </div>
</body>

</html>