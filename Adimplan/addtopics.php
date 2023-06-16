<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADIMPLAN</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/adim1.css">
    <link rel="icon" href="../images/logo/whitebackground.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
    <script src="../ckeditor/ckeditor.js"></script>
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

        if (isset($_POST['addtopics'])) {
            // checking for empty fields
            if (($_POST['Topics_Name'] == "") ||
                ($_POST['Topics_Description'] == "") ||
                ($_FILES['Topics_video'] == "") ||
                ($_POST['Course_Id'] == "")
            ) {
                // Display the alert box 
                  
                function function_alert($msg)
                {
                    // Display the alert box 
                    echo "<script>alert('$msg');</script>";
                }
                function_alert(" Fill the Fileds");
               
            } else {
                $txtname = $_POST['Topics_Name'];
                $txtcourse = $_POST['Course_Id'];
                $filename = $_FILES["Topics_video"]["name"];
                $tempname = $_FILES["Topics_video"]["tmp_name"];
                $folder = "images/video/" . $filename;
                $txtfiles = $_POST['Topics_Description'];

                $sql = "INSERT INTO topicsa (Topics_Name,Topics_Description,Topics_video,Course_Id) VALUES ('$txtname','$txtfiles','$folder','$txtcourse')";
                if ($conn->query($sql) == TRUE) {

                    function function_alert($msg)
                    {
                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Add Topics Succsefully");
                } else {
                    function function_alert($msg)
                    {
                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert("Unable Add Topics");
                }
                mysqli_close($conn);
            }
        }

        ?>
        <div class="col-6   ">

            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

                <h1 class="list-group-item fs-2">ADD NEW TOPICS</h1>
                <form class="row g-2" method="POST" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <?php if (isset($msg)) {
                            echo $msg;
                        } ?>
                    </div>
                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">Topics Name</label>
                        <input type="text" class="form-control" id="Topics_Name" name="Topics_Name" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault03" class="form-label">Topics_Description</label>
                        <textarea class="form-control" rows="5" cols="8" id="Topics_Description" name="Topics_Description" required></textarea><br>
                        <script>
                            CKEDITOR.replace('Topics_Description');
                        </script>
                    </div><br>

                    <div class="col-md-8">
                        <label for="validationDefault05" class="form-label">Topics_video</label>
                        <input type="file" class="form-control" id="Topics_video" name="Topics_video" required><br>
                    </div><br>

                    <div class="col-md-8">
                        <label for="validationDefault04" class="form-label">Course_Id</label>
                        <input type="text" class="form-control" id="Course_Id" name="Course_Id" required>
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
                        <button class="btn btn-primary" type="submit" onclick="myFunction()" id="addtopics" name="addtopics">Submit</button>
                        <a class="btn btn-secondary" href="Topics.php">Close</a>
                    </div>

                </form>
            </div>
        </div>
        </div>
</body>

</html>