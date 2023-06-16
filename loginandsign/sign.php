<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign UP</title>
    <link rel="stylesheet" href="../loginandsign/CSS/sign.css">
    <link rel="icon" href="../login and sign/images/logo/whitebackground.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <section class="one">
        <div class="">
            <img width="100" height="95" src="images/logo/whitebackground.png">
        </div>
        <?php if (isset($msg)) {
            echo $msg;
        } ?>
        <div class="two">
            <div class="col-4">

                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">

                    <?php
                    session_start();
                    include '../database/database.php';


                    if (isset($_POST['btnsign'])) {
                        $txtemail = $_POST['Email'];
                        if (($_POST['First_Name'] == "") ||
                            ($_POST['Last_Name'] == "")  ||
                            ($_FILES['images'] == "") ||
                            ($_POST['DOB'] == "") ||
                            ($_POST['Country'] == "") ||
                            ($_POST['btn_Password'] == "") ||
                            ($_POST['confirm_password'] == "")


                        ) {
                            function function_alert($msg)
                            {
                                // Display the alert box 
                                echo "<script>alert('$msg');</script>";
                            }
                            function_alert("Fill All Fileds");
                        } else {
                            $firstname = $_POST['First_Name'];
                            $lastName = $_POST['Last_Name'];
                            $txtemail = $_POST['Email'];
                            $DOB = $_POST['DOB'];
                            $Conutry = $_POST['Country'];
                            $btnpassword = $_POST['btn_Password'];
                            $txtpassword = $_POST['confirm_password'];
                            $txtimage = $_FILES['images']['name'];
                            $txt_image = $_FILES['images']['tmp_name'];
                            $img_folder = 'images/profile/'.$txtimage;
                            move_uploaded_file($txt_image,$img_folder);

                          

                            if ($_POST['Email']) {
                                $query = "SELECT Email FROM signa WHERE Email = '" . $txtemail . "' ";
                                $result = $conn->query($query);
                                $row = $result->num_rows;
                                if ($row != 0) {
                                    function function_alert($msg)
                                    {
                                        // Display the alert box 
                                        echo "<script>alert('$msg');</script>";
                                    }
                                    function_alert("Your Email Already use");
                                } elseif ($row == 0) {

                                    if ($btnpassword != $txtpassword) {
                                        function function_alert($msg)
                                        {
                                            // Display the alert box 
                                            echo "<script>alert('$msg');</script>";
                                        }
                                        function_alert("Your Password are not match");
                                        mysqli_close($conn);
                                    } else {
                                        $sql = "INSERT INTO signa (First_Name,Last_Name,Email,btn_Password,DOB,Country,images) VALUES ('$firstname','$lastName','$txtemail','$btnpassword',' $DOB','$Conutry','$img_folder')";

                                        if ($conn->query($sql) == TRUE) {
                                            function function_alert($msg)
                                            {
                                                // Display the alert box 
                                                echo "<script>alert('$msg');</script>";
                                            }
                                            function_alert("Reigester Successfully");

                                        } else {
                                            function function_alert($msg)
                                            {
                                                // Display the alert box 
                                                echo "<script>alert('$msg');</script>";
                                            }
                                            function_alert("Not Register Try Again...");
                                        }
                                        mysqli_close($conn);
                                    }
                                }
                            }
                        }
                    }



                    ?>
                    <script>
                        function myFun() {
                            var x = document.getElementById("btn_Password");
                            if (x.type === "password") {
                                x.type = "text";
                                document.getElementById("ge").style.color = " rgb(8, 48, 61)";
                                document.getElementById("ge").innerHTML = '<i class="bi bi-eye-slash-fill fs-4"></i>';

                            } else {
                                x.type = "password";
                                document.getElementById("ge").style.color = "rgb(8, 48, 61)";
                                document.getElementById("ge").innerHTML = '<i class="bi bi-eye-fill fs-4"></i>';
                            }
                        }

                        function myFunction() {
                            var x = document.getElementById("confirm_password");
                            if (x.type === "password") {
                                x.type = "text";
                                document.getElementById("gi").style.color = " rgb(8, 48, 61)";
                                document.getElementById("gi").innerHTML = '<i class="bi bi-eye-slash-fill fs-4"></i>';

                            } else {
                                x.type = "password";
                                document.getElementById("gi").style.color = "rgb(8, 48, 61)";
                                document.getElementById("gi").innerHTML = '<i class="bi bi-eye-fill fs-4"></i>';
                            }
                        }
                    </script>
                    <h1 class="list-group-item fs-2">SIGN UP</h1>
                    <form class="row g-2" method="POST" enctype="multipart/form-data">
                        <div class="col-md-12">

                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault01" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="First_Name" name="First_Name" required>
                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault02" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="Last_Name" name="Last_Name" required>
                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault03" class="form-label">Email</label>
                                <input type="text" class="form-control" id="Email" name="Email" required>
                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault02" class="form-label">Date of Brith </label>
                            <input type="text" class="form-control" id="DOB" name="DOB" required>
                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault03" class="form-label">Conutry</label>
                            <input type="text" class="form-control" id="Country" name="Country" required>
                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault05" class="form-label">Image</label>
                            <input type="file" class="form-control" id="images" name="images" required>
                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault05" class="form-label">Password</label>
                            <input type="password" class="form-control" id="btn_Password" name="btn_Password" required>
                            <a id="ge" onclick="myFun()"><i class="bi bi-eye-fill fs-4"></i></a>
                        </div>

                        <div class="col-md-8">
                            <label for="validationDefault05" class="form-label">Confrim Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                            <a id="gi" onclick="myFunction()"><i class="bi bi-eye-fill fs-4"></i></a>
                        </div>
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>

                        <div class="col-10">
                            <button class="btn btn-primary fs-5" type="submit" id="btnsign" name="btnsign">Sign up</button>
                            <div class="lo">
                                <label class="form-check-label" for="invalidCheck2">
                                    Already have an account?<a href="../loginandsign/Login.php"> Login</a>
                                </label>
                            </div>
                        </div>


                    </form>
    </section>
    </div>
    </div>
    </div>

</body>

</html>