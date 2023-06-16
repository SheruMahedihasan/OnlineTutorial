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

        if (isset($_POST['updateb'])) {
            // checking for empty fields
            if (($_POST['Id'] == "") ||
                ($_POST['Topics_Name'] == "") ||
                ($_POST['Topics_Description'] == "") ||
                ($_POST['Course_Id'] == "") ||
                ($_FILES['Topics_video'] == "")
            ) {
                function function_alert($msg)
                {

                    // Display the alert box 
                    echo "<script>alert('$msg');</script>";
                }
                function_alert("Fill All Fileds");
            } else {
                $txId = $_POST['Id'];
                $txname = $_POST['Topics_Name'];
                $txtdes = $_POST['Topics_Description'];
                $txcou = $_POST['Course_Id'];
                $filename = $_FILES["Topics_video"]["name"];
                $tempname = $_FILES["Topics_video"]["tmp_name"];
                $folder = "images/topics/" . $filename;
                

                $sql = "UPDATE Topicsa SET Id= '$txId' , Topics_Name= '$txname ' ,Topics_Description= '$txtdes' , Course_Id= '$txcou' ,Topics_video='$folder' WHERE Id= '$txId' ";

                if ($conn->query($sql) == TRUE) {
                    echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
                    function function_alert($msg)
                    {

                        // Display the alert box 
                        echo "<script>alert('$msg');</script>";
                    }
                    function_alert(" Topics update Succesfully");
                } else {
                    $msg = '';
                    function_alert("Unable update Succesfully");
                }
                mysqli_close($conn);
            }
        }





        if (isset($_POST['view'])) {
            $sql = "SELECT * FROM Topicsa WHERE Id = {$_POST['Id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }


        ?>
        <div class="col-6   ">

            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

                <h1 class="list-group-item fs-2">UPDATA Topics</h1>
                <form class="row g-2" method="POST" enctype="multipart/form-data"> 

                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">Topics Id</label>
                        <input type="text" class="form-control" id="Id" name="Id" value="<?php if (isset($row['Id'])) {
                                                                                                echo $row['Id'];
                                                                                            } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault01" class="form-label">Topics Name</label>
                        <input type="text" class="form-control" id="Topics_Name" name="Topics_Name" value="<?php if (isset($row['Topics_Name'])) {
                                                                                                                echo $row['Topics_Name'];
                                                                                                            } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault03" class="form-label">Topics_Description</label>
                        <textarea class="form-control" rows="5" cols="8" id="Topics_Description" name="Topics_Description" required><?php if (isset($row['Topics_Description'])) {
                                                                                                                                        echo $row['Topics_Description'];
                                                                                                                                    } ?></textarea><br>
                        <script>
                            CKEDITOR.replace('Topics_Description');
                        </script>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault05" class="form-label">Course Id</label>
                        <input type="text" class="form-control" id="Course_Id" name="Course_Id" value="<?php if (isset($row['Course_Id'])) {
                                                                                                                echo $row['Course_Id'];
                                                                                                            } ?>" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationDefault05" class="form-label">video</label>
                        <input type="file" class="form-control" id="Topics_video" name="Topics_video" value="<?php if (isset($row['Topics_video'])) {
                                                                                                                echo $row['Topics_video'];
                                                                                                            } ?>" required><br>
                    </div><br>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit" onclick="myFunction()" id="updateb" name="updateb">Submit </button>
                        <a class="btn btn-secondary" href="Topics.php">Close</a>
                    </div>

                </form>
            </div>
        </div>
        </div>
</body>

</html>