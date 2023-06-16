<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial Learning</title>
  <link rel="stylesheet" href="../loginandsign/CSS/forget.css">
  <link rel="icon" href="../login and sign/images/logo/whitebackground.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

         
          if (isset($_POST['btnforget'])) {
            $txtemail = $_POST['Email'];
          
            $sql = "SELECT Email FROM signa WHERE Email = '" . $txtemail . "' ";
            $result =  $conn->query($sql);
            $row = $result->num_rows;

            if ($row == 1) {
              echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
              header("location: ../loginandsign/forgot.php");
            } else if ($row == 0) {
              
              echo '<script>alert("Your Email invalid")</script>';
              
              echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
            }
          }
        
          ?>

          <h2 class="list-group-item fs-1">FORGOT PASSWORD</h2>
          <div class="col-12">
              <div class="for">
                <label class="form-check-label" for="invalidCheck2">Enter Your Email Adress
                </label>
              </div>
            </div>
          <form class="row g-2" method="POST">

            <div class="col-md-8">
              <label for="validationDefault01" class="form-label">Email</label>
              <input type="Email" class="form-control" id="Email" name="Email" required>
            </div>

            <div class="col-10">
              <button class="btn btn-primary fs-5" type="submit" id="btnforget" name="btnforget">Continue</button>
              <div class="for">
                <label class="form-check-label" for="invalidCheck2"><a href="../loginandsign/Login.php">Back</a>
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