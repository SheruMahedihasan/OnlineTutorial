<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial Learning</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="Css/nav.css">
  <link rel="stylesheet" href="Css/buy.css">
  <link rel="stylsheet" href="css/media.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <?php
  include 'navbar.php';
  $Id = $_GET['Id'];
  $sql = "SELECT * FROM premiumpacks WHERE Course_Id = '$Id'";
  $result = $conn->query($sql);
  $res = $result->fetch_assoc();
  ?>
  <section>
    <div class="prime-banner position-relative overlay-bottom">
      <div class="container px-xl-2">
        <div class="col-sm-12 col-md-12 col-xl-12">
          <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 ms-2">
              <h2 style="text-transform:uppercase;"><?php if (isset($res['Premium_Name'])) {
                    echo $res['Premium_Name'];
                  } ?> Prime Pack</h2>
              <ul class="list-inline mt-2 mb-1 bundle-list-inline">
                <li class="list-inline-item fw-light">
                  <i class="bi bi-person"></i> <a href="permiumpack.php">&nbsp;&nbsp;Tutorialspoint</a>
                </li><br>
                <li class="list-inline-item fw-light"><i class="bi bi-globe-americas"></i>&nbsp;&nbsp; Language - English</li><br>
                <li class="list-inline-item fw-light"><i class="bi bi-clock-history"></i>&nbsp;&nbsp; Updated on Nov, 2022</li><br>
                <li class="list-inline-item fw-light"><i class="bi bi-boxes"></i>&nbsp;&nbsp;Development , Programming Languages , <?php if (isset($res['Premium_Name'])) {
                                                                                                                                      echo $res['Premium_Name'];
                                                                                                                                    } ?></li><br>

<div>
  <label style="color:white;"> 4.5 </label>
                      <a href="#"><i class="bi bi-star-fill"></i></a>
                      <a href="#"><i class="bi bi-star-fill"></i></a>
                      <a href="#"><i class="bi bi-star-fill"></i></a>
                      <a href="#"><i class="bi bi-star-fill"></i></a>
                      <a href="#"><i class="bi bi-star-half"></i></a>
                      <label style="color:white;">Rating (39)</label>
                    </div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="buy1">
    <?php
    $Premium_Name = $_GET['Id'];
    $sql = "SELECT * from Topicsa WHERE Course_Id = '$Premium_Name' LIMIT 8";
    $result = $conn->query($sql);
  

    ?>
    <div class="courses-container">
      <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="course">
          <div class="course-preview">
            <h2><?php if (isset($res['Premium_Name'])) {
                  echo $res['Premium_Name'];
                } ?></h2>
          </div>
          <div class="course-info">
            <h2><?php if (isset($row['Topics_Name'])) {
                  echo $row['Topics_Name'];
                } ?></h2>
            <video class="btn" width="40px" src="<?php if (isset($row['Topics_video'])) {
                                                    echo $row['Topics_video'];
                                                  } ?>"><span>&times;</span></video>
          </div>
        </div>
      <?php } ?>
    </div>

    <?php
    $Id = $_GET['Id'];
    $sql = "SELECT * FROM premiumpacks WHERE Course_Id = '$Id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    ?>


    <div class="permium swiper">
      <div class="slider-container ">
        <div class="slide-content">
          <div class="card-wrapper swiper-wrapper d-flex">

            <div class="card swiper-slide m-5">
              <div class="image-content">
                <span class="overlay"></span>
                <div class="card-image">
                  <img src="images/top/team-1.jpg" alt="" class="card-img">
                </div>
              </div>
              <div class="card-content">
                <h2 class="name" style="text-transform:uppercase;"><?php if (isset($row['Premium_Name'])) {
                                    echo $row['Premium_Name'];
                                  } ?></h2>

                <div class="card-btn">
                  <li class="card-btn-allow">
                    <span>
                      <i class="bi bi-play-circle"></i> video
                    </span>
                    <b>9</b>
                  </li>
                  <li class="card-btn-allow">
                    <span>
                      <i class="bi bi-clock"></i> Duration
                    </span>
                    <b>51 hourse</b>
                  </li>
                  <li class="card-btn-allow">
                    <span>
                      <i class="bi bi-universal-access-circle"></i> Lifetime Access
                    </span>
                    <b>Yes</b>
                  </li>
                  <li class="card-btn-allow">
                    <span>
                      <i class="bi bi-globe-americas"></i> Language
                    </span>
                    <b>English</b>
                  </li>
                  <li class="card-btn-allow">
                    <span>
                      <i class="bi bi-cash-coin"></i> 30-Days Money Back Guarantee
                    </span>
                    <b>Yes</b>
                  </li>
                  <li class="card-btn-allow ">
                    <span>
                      <i class="bi bi-gear-wide"></i> Certificate
                    </span>
                    <b>Yes</b>
                  </li>
                </div>
                <h2 class="name"><?php if (isset($row['Premium_Selling'])) {
                                    echo $row['Premium_Selling'];
                                  } ?></h2>
                <div class="checkout-payment-btn">

                  <form action="checkout.php?Course_Id=<?php echo $row['Course_Id'] ?>" method="POST">
                    <input type="hidden" name="txt1" value='<?php echo $row["Id"] ?>'>
                    <button class="button" id="stulogEmail" name="stulogEmail">&nbsp;&nbsp;&nbsp; Buy &nbsp;&nbsp;&nbsp;&nbsp;</button>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
        </div><?php
              if (isset($_SESSION['UserId'])) {
                $User_Id = $_SESSION['UserId'];


                $sql = "SELECT * FROM payment WHERE User_Id = '$User_Id'";
                $row = $conn->query($sql);
                if ($row = mysqli_fetch_assoc($row)) {

                  $Premium_Name = $_GET['Id'];
                  $query = "SELECT * FROM payment WHERE Premium_Id = '$Premium_Name'";
                  $result = $conn->query($query);
                  if ($row = mysqli_fetch_assoc($result)) {
              ?>

              <div class="pop-video">
                <span>&times;</span>
                <video src="images/video/Pexels Videos 1793334.mp4" controls>
                </video>
              </div>
            <?php
                  } else { ?>

              <div class="pop-video" hidden>
                <span>&times;</span>
                <video src="images/video/Pexels Videos 1793334.mp4" controls>
                </video>
              </div>

        <?php
                  }
                }
              }



        ?>

        <script>
          document.querySelectorAll('.courses-container video').forEach(vid => {
            vid.onclick = () => {
              document.querySelector('.pop-video').style.display = 'block';
              document.querySelector('.pop-video video').src = vid.getAttribute('src');
            }
          });
          document.querySelector('.pop-video span').onclick = () => {
            document.querySelector('.pop-video').style.display = 'none';

          }
        </script>



  </section>

  <style>

  </style>


  <?php
  include 'footer.php';
  ?>
  <script src="js/main.js"></script>
</body>

</html>