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

        if (isset($_POST['addPremium'])) {
            // checking for empty fields
            if (($_POST['Premium_Name'] == "") ||
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
                function_alert(" Fill the Fileds");
            } else {
                $txtname = $_POST['Premium_Name'];
                $txtdes = $_POST['Premium_Desprition'];
                $filename = $_FILES["Premium_Images"]["name"];
                $tempname = $_FILES["Premium_Images"]["tmp_name"];
                $folder = "images/topics/". $filename;
                $txtselling = $_POST['Premium_Selling'];
                $txtCourse_Id = $_POST['Course_Id'];


                $sql = "INSERT INTO premiumpacks (Premium_Name,Premium_Desprition,Premium_Images,Premium_Selling,Course_Id) VALUES ('$txtname','$txtdes','$folder','$txtselling','$txtCourse_Id')";

                if ($conn->query($sql) == TRUE) {

                    
                   
                    function function_alert($msg)
                    {
                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Premium Packs Add Succsefully");

                } else {
                    function function_alert($msg)
                    {
                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Unable to Add Premium Packs");
                }
                mysqli_close($conn);
            }
        }

        ?>
        <div class="col-6   ">

            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

                <h1 class="list-group-item fs-2">ADD NEW Premium Packs</h1>
                <form class="row g-2" method="POST" enctype="multipart/form-data">
                <?php if (isset($msg)) {
                        echo $msg;
                    } ?>
                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">Premium_Name</label>
                        <input type="text" class="form-control" id="Premium_Name" name="Premium_Name" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Premium_Desprition</label>
                        <input type="text" class="form-control" id="Premium_Desprition" name="Premium_Desprition" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault05" class="form-label">Premium_Images</label>
                        <input type="file" class="form-control" id="Premium_Images" name="Premium_Images" required><br>
                    </div><br>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Premium_Selling</label>
                        <input type="text" class="form-control" id="Premium_Selling" name="Premium_Selling" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault02" class="form-label">Course_Id</label>
                        <input type="text" class="form-control" id="Course_Id" name="Course_Id" required>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div><br>
                   
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" onclick="myFunction()" id="addPremium" name="addPremium">Submit</button>
                        <a class="btn btn-secondary" href="PremiumPacks.php  ">Close</a>
                    </div>

                </form>
            </div>
        </div>
        </div>
</body>

</html>