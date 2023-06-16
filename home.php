<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial Learning</title>
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/nav.css">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/sider.css">
  <link rel="stylsheet" href="css/media.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <style>
    .jumbotron {
      background: linear-gradient(rgb(8, 48, 61), rgb(8, 48, 61), rgba(8, 42, 65, 0.746)), url(images/about-image/header.jpg), no-repeat center center;
      background-size: cover;
    }
 
    .top .pb-5,
    .py-5 {
      padding-bottom: 3rem !important;
    }

    .top .pt-5,
    .py-5 {
      padding-top: 3rem !important;
    }

    .top .container,
    .container-fluid,
    .container-sm,
    .container-md,
    .container-lg,
    .container-xl {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }

    @media (min-width: 1200px) {

      .top .container,
      .container-sm,
      .container-md,
      .container-lg,
      .container-xl {
        max-width: 1140px;

      }
    }

    @media (min-width: 1200px) {

      .top .cat-overlay .h4,
      h4 {
        font-size: 1.2rem;
      }
    }

    @media (min-width: 1000px) {

      .top .cat-overlay .h4,
      h4 {
        font-size: 1.0rem;
      }
    }

    @media (min-width: 900px) {

      .top .cat-overlay .h4,
      h4 {
        font-size: 1.0rem;
      }
    }

    @media (min-width: 500px) {

      .top .cat-overlay .h4,
      h4 {
        font-size: 0.8rem;
      }
    }

    @media (max-width: 575.98px) {

      .top .container,
      .container-sm,
      .container-md,
      .container-lg,
      .container-xl {
        padding-right: 0;
        padding-left: 0;
      }
    }

    @media (max-width: 991.98px) {
      .top .carousel-indicators {
        width: 45px;
        right: calc(100% - 45px);
      }

      .top .carousel-indicators li {
        width: 15px;
        height: 15px;
      }
    }


    @media (max-width: 575.98px) {
      .top .carousel-caption h5 {
        font-size: 16px;
      }

      .top .carousel-caption h1 {
        font-size: 25px;
        font-weight: 700 !important;
      }
    }

    .top .cat-item img {
      transition: .5s;
    }

    .top .cat-item:hover img {
      transform: scale(1.3);
    }

    .top .cat-overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    nav {
      background-color: rgb(8, 48, 61);
      color: white;
    } 


    /*============================================================== premium packs =================================*/
  </style>

</head>

<body>
  <?php
  if (!isset($_SESSION)) {
    session_start();
  }
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">

      <img width="45px" src="images/logo/whitebackground.png" class="navbar-brand">Tutorial Learning</img>
      <button style="color:white;" class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span  class="navbar-toggler-icon"></span> -->
        <i style="color:white;" class="bi bi-list fs-4"></i>
      </button>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Courses
            </a>


            <ul class="dropdown-menu">

              <li>
                <?php
                include 'database/database.php';
                $query = "SELECT * FROM coursea";
                $result = $conn->query($query);
                while ($row = mysqli_fetch_array($result)) {
                ?>
                  <a href="html.php?Id=<?php echo $row['Id'] ?>" class="dropdown-item"><?php if (isset($row['Course_Name'])) {
                                                                                          echo $row['Course_Name'];
                                                                                        }
                                                                                        ?></a>

                <?php  } ?>

              </li>
            </ul>

          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Packs
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="permium.php">PremiumPacks</a></li>
              <li><a class="dropdown-item" href="Trending.php">Trending Packs</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>&nbsp;&nbsp;&nbsp;

          <li class="nav-item" style="  display: flex;align-items: center;">
            <?php

            if (isset($_SESSION['UserId'])) {
              $query = "SELECT * FROM signa WHERE Id = {$_SESSION['UserId']}";
              $result = $conn->query($query);
              if (mysqli_num_rows($result) > 0) {
                $fetch = mysqli_fetch_assoc($result);
              } ?>
              <img style="border-radius: 50px;  border:3px solid white;  box-shadow: 2px 2px 10px 2px white;" width="40" height="40" src="<?php echo 'loginandsign/';?><?php echo $fetch['images'] ?>" onclick="toggleMenu()">
            <?php } else { ?>
              <img style="border-radius: 50px;  border:3px solid white;  box-shadow: 2px 2px 10px 2px white;" width="40" height="40" src="images/top/profile-1.jpg" onclick="toggleMenu()">

            <?php
            }
            ?>

            <div class="sub-menu-wrap" id="subMenu">
              <div class="sub-menu">
                <?php

                if (isset($_SESSION['UserId'])) {
                  $query = "SELECT * FROM signa WHERE Id = {$_SESSION['UserId']}";
                  $result = $conn->query($query);
                  if (mysqli_num_rows($result) > 0) {
                    $fetch = mysqli_fetch_assoc($result);
                  }
                ?>
                  <div class="user-info">
                    <img src="<?php echo 'loginandsign/';?><?php echo $fetch['images'] ?>">
                    <h3 class="text-dark"><?php echo $fetch['First_Name'] ?> <?php echo $fetch['Last_Name'] ?></h3>
                  </div> <?php
                        } else {  ?>
                  <div class="user-info">
                    <img src="images/top/profile-1.jpg">
                    <h3 class="text-dark">YOUR NAME</h3>
                  </div> <?php
                        }


                          ?>

                <hr>
                <?php

                if (isset($_SESSION['UserId'])) {
                  echo ' <a href="profile.php" class="sub-menu-link">
<i class="bi bi-person-fill"></i>
<p>Edit Profile</p>
</a>';
                } else {
                  echo '
   <a href="home.php" class="sub-menu-link">
<i class="bi bi-person-fill"></i>
<p>Edit Profile</p>

</a>';
                }
                ?>

                <a href="contact.php" class="sub-menu-link">
                  <i class="bi bi-question-circle-fill"></i>
                  <p>help</p>
                </a>


                <?php
                if (!isset($_SESSION['UserId'])) {
                  echo '<a href="loginandsign/login.php" class="sub-menu-link">
                  <i class="bi bi-door-open-fill"></i>
                  <p>Login</p>
                </a>';
                } else {
                  echo '<a href="loginandsign/logout.php" class="sub-menu-link">
                  <i class="bi bi-door-open-fill"></i>
                  <p>Logout</p>
                </a>';
                }

                ?>




              </div>

            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <script>
    let subMenu = document.getElementById("subMenu");

    function toggleMenu() {
      subMenu.classList.toggle("open-Menu");
    }
  </script>

  <section>
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
      <div class="container text-center my-5 py-5">
        <h1 class="text-white mt-4 mb-4">Learn From Home</h1>
        <h1 class="text-white display-1 mb-5">Education Courses</h1>
        <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
        </div>
      </div>
  </section>

  <!-- ====================================== count  ======================= -->
  <section class="conuting">
    <script>
      $(document).ready(function() {
        $('.counter-value').each(function() {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
            duration: 3500,
            easing: 'swing',
            step: function(now) {
              $(this).text(Math.ceil(now));
            }
          });
        });
      });
    </script>
    <div class="container">
      <div class="row">

        <div class="col-md-3 col-sm-6">
          <div class="counter orange">
            <div class="counter-icon">
              <i class="bi bi-globe-americas" style="color: white;"></i>
            </div>
            <span class="counter-value">1963</span>
            <h3>ONLINE COURSES</h3>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="counter blue">
            <div class="counter-icon">
              <i class="bi bi-rocket-takeoff-fill" style="color: white;"></i>
            </div>
            <span class="counter-value">1854</span>
            <h3>HAPPY STUDENTS</h3>
          </div>
        </div>

        <div class="col-md-3 col-sm-6">
          <div class="counter pink">
            <div class="counter-icon">
              <i class="bi bi-briefcase-fill" style="color: white;"></i>
            </div>
            <span class="counter-value">1756</span>
            <h3>SKILLED INSTRUCTORS</h3>
          </div>
        </div>


        <div class="col-md-3 col-sm-6">
          <div class="counter purple">
            <div class="counter-icon">
              <i class="bi bi-phone-fill" style="color: white;"></i>
            </div>
            <span class="counter-value">1823</span>
            <h3>AVAILABLE SUBJECTS</h3>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- =========================================      Top Categories     =================  -->
  <section class="top">
    <div class="container-fluid py-5">
      <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
          <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><i class="bi bi-box fs-5"></i> Subjects</h5>
          <h1>Top Categories</h1>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-1.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Development</h4>
                <span>200+ Courses</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-2.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">IT And Networking</h4>
                <span>800+ Courses</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-3.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">DataScience</h4>
                <span>650+ Courses</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-4.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Markting</h4>
                <span>250+ Courses</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-5.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Cyber Secuirty</h4>
                <span>300+ Courses</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-6.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Business</h4>
                <span>100+ Courses</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-7.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Lifestyle</h4>
                <span>200+ Courses</span>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="cat-item position-relative overflow-hidden rounded mb-2">
              <img class="img-fluid" src="images/top/cat-8.jpg" alt="">
              <a class="cat-overlay text-white text-decoration-none" href="">
                <h4 class="text-white font-weight-medium">Office Productivity</h4>
                <span>300+ Courses</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--========================================================= premium packs =============================-->

  <section>
    <div class="permium">

      <div class="slide-container swiper">
      <h5><i class="bi bi-boxes fs-5"></i>&nbsp; Premium Packs</h5>
        <h1>Curated courses packed together from expert tutors</h1>
        <div class="slide-content">
          <?php

          $sql = "Select * from premiumpacks";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
          ?>
            <div class="card-wrapper swiper-wrapper">
              <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="card swiper-slide">
                  <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                      <img src="<?php if (isset($row['Premium_Images'])) {
                                  echo $row['Premium_Images'];
                                } ?>" alt="" class="card-img">
                    </div>
                  </div>

                  <div class="card-content">
                    

                    <h2 class="name"><?php if (isset($row['Premium_Name'])) {
                                        echo $row['Premium_Name'];
                                      } ?></h2>
                                      <div>
                      <a href="#"><i class="bi bi-star-fill"></i></a>
                      <a href="#"><i class="bi bi-star-fill"></i></a>
                      <a href="#"><i class="bi bi-star-fill"></i></a>
                      <a href="#"><i class="bi bi-star-half"></i></a>
                    </div>
                    <p class="description"><?php if (isset($row['Premium_Desprition'])) {
                                              echo $row['Premium_Desprition'];
                                            } ?></p>
                    <h2 class="name"><i class="bi bi-currency-rupee"></i><?php if (isset($row['Premium_Selling'])) {
                                        echo $row['Premium_Selling'];
                                      } ?></h2>

                    <form action="buy.php" method="POST">
                      <input type="hidden" name="Id" value='<?php echo $row["Id"] ?>'>
                      <button class="button" type="submit" name="submitaddbtn" id="submitaddbtn">Buy More</button>
                    </form>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php
          }
          ?>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>

      </div>

      <div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!--========================================free tutorial================================-->



  <section class="fr">

    <div class="swimlane getting-started">
      <div class="container">
        <div class="row">
          <div class="row vscode-for">
            <h2><i class="bi bi-bookmarks-fill fs-1"></i> Free Tutorials Library</h2>
          </div>
          <div class="row home-languages-list">
            <div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/free/javascript.svg" width="30px" height="30px" role="presentation"> JavaScript</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/free/python.svg" width="30px" height="30px" role="presentation"> Python</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/free/java.svg" width="30px" height="30px" role="presentation"> Java</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/markdown.svg" width="30px" height="30px" role="presentation"> Markdown</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/typescript.svg" width="30px" height="30px" role="presentation"> TypeScript</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/cpp.svg" width="30px" height="30px" role="presentation"> C/C++</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/json.svg" width="30px" height="30px" role="presentation"> JSON</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/powershell.svg" width="30px" height="30px" role="presentation"> Powershell</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/html.svg" width="30px" height="30px" role="presentation"> HTML/CSS</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/csharp.svg" width="30px" height="30px" role="presentation"> C#</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/php.svg" width="30px" height="30px" role="presentation"> PHP</p>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-2">
                <p><img class="language-icon" src="images/Free/yaml.svg" width="30px" height="30px" role="presentation"> YAML</p>
              </div>
            </div>
          </div>
          <div class="getting-started-marketplace-link">
            <p><a href="" aria-label="">The Largest Free Online Library...</a></p>
          </div>
        </div>
        <div class="row caption">
          <div class="col-sm-12">
            <a id="home-get-started-now-link" class="link-button" href="#">Get Started Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--========================================= footer =============================================-->

  <?php
  include 'footer.php';
  ?>


</body>
<script src="js/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</html>