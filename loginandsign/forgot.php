<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial Learning</title>
  <link rel="stylesheet" href="../loginandsign/CSS/forget.css">
  <link rel="icon" href="../login and sign/images/logo/whitebackground.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <section class="one">
    <div>
      <img width="150px" height="150px" src="images/logo/whitebackground.png">
    </div>

    <div class="two">
      <div class="col-4">

        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
          <?php
          include '../database/database.php';

          if (isset($_POST['updatebtn'])) {
            // checking for empty fields
            if (($_POST['Id'] == "") ||
                ($_POST['btn_password'] == "")
            ) {
                function function_alert($msg)
                {

                    // Display the alert box 
                    echo "<script>alert('$msg');</script>";
                }
                function_alert("Fill All Fileds");
            } else {
                $txId = $_POST['Id'];
                $txtpassword = $_POST['btn_password'];
                $sql = "UPDATE sign SET btn_password= '$txtpassword ' WHERE Id= '$txId' ";

                if ($conn->query($sql) == TRUE) {
                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                    update Succesfully
         </div>';
                } else {
                
                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                    Unable update Succesfully
                 </div>';
                }
                mysqli_close($conn);
            }
        }

          ?>
          <script>
            function myFunction() {
              var x = document.getElementById("new_password");
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
          </script>
           <script>
            function myFun() {
              var x = document.getElementById("btn_password");
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


          <h2 class="list-group-item fs-1">FORGOT PASSWORD</h2>
          <form class="row g-2" method="POST">

            <div class="col-md-8">
              <label for="validationDefault01" class="form-label">New Password </label>
              <input type="password" class="form-control" id="new_password" name="new_password" required>
              <a id="ge" onclick="myFunction()"><i class="bi bi-eye-fill fs-4"></i></a>
            </div>

            
            <div class="col-md-8">
              <label for="validationDefault01" class="form-label">Confrim Password </label>
              <input type="password" class="form-control" id="btn_password" name="btn_password" required>
              <a id="gi" onclick="myFun()"><i class="bi bi-eye-fill fs-4"></i></a>
            </div>

            <div class="col-10">
              <button class="btn btn-primary fs-5" type="submit" id="btnforget" name="btnforget">Continue</button>
              <div class="for">
                <label class="form-check-label" for="invalidCheck2"><a href="../loginandsign/forget.php">Back</a>
                </label>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>


    </div>

  </section>
</body>

</html>