<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial Learning</title>
  <link rel="stylesheet" href="../loginandsign/CSS/Login.css">
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
          include "../database/database.php";

          session_start();
          if(ISSET($_POST['btnlogin'])){
            $username = $_POST['Email'];
            $password = $_POST['btn_password'];
         
            $query = mysqli_query($conn, "SELECT * FROM signa WHERE Email ='". $username."' AND btn_password = '".$password."'");
            $fetch = mysqli_fetch_array($query);
            $row = mysqli_num_rows($query);
           
            if($username == "balsaniyamahediali@gmail.com" and $password == "ml" ){
              $_SESSION['UserId']=$fetch['Id'];
              $_SESSION['Email']=$fetch['Email'];
              echo "<script>alert('AdimPlan Login Successfully!')</script>";
              echo "<script>window.location='../Adimplan/Dashboard.php'</script>";
            }
           elseif($row > 0){
              $_SESSION['UserId']=$fetch['Id'];
              $_SESSION['Email']=$fetch['Email'];
              echo "<script>alert('Login Successfully!')</script>";
              echo "<script>window.location='../home.php'</script>";
            }
            else{
              echo "<script>alert('Invalid username or password')</script>";
              echo "<script>window.location='login.php'</script>";
            }
         
          }
          
          ?>
          <script>
            function myFunction() {
              var x = document.getElementById("btn_password");
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
          <h1 class="list-group-item fs-1">LOGIN</h1>
          <form class="row g-2" method="POST">

            <div class="col-md-8">
              <label for="validationDefault01" class="form-label">Email</label>
              <input type="Email" class="form-control" id="Email" name="Email" required>
            </div>

            <div class="col-md-8 ">
              <label for="validationDefault02" class="form-label">Password</label>
              <div class="ij">
                <input type="password" class="form-control" id="btn_password" name="btn_password" required>
                <a id="ge" onclick="myFunction()"><i class="bi bi-eye-fill fs-4"></i></a>
              </div>
            </div>

            <div class="col-12">
              <div class="">
                <label class="form-check-label" for="invalidCheck2">Need an account <a href="../loginandsign/sign.php">signup</a>
                </label>
              </div>
            </div>

            <div class="col-10">
              <button class="btn btn-primary fs-5" type="submit" id="btnlogin" name="btnlogin">LOGIN</button>
              <div class="for">
                <label class="form-check-label" for="invalidCheck2"><a href="../loginandsign/forget.php">Forget Password</a>
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