<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADIMPLAN</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="Css/nav.css">
  <link rel="stylsheet" href="css/media.css">
  <link rel="icon" href="../images/logo/whitebackground.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
  <style>
    .adim .row {
      max-width: 100%;
      
    }
    .adim .row .col-8
    {
        width:65%;
        padding: auto;
    }

    .adim .row .col-2 {
      position: fixed;
      top: 0;
      height: 100%;
      width: 260px;
      overflow-x: hidden;
      background-color: #d3d7d7;
      padding: 6px 14px;
      padding-top: 20px;
      transition: all 0.5s ease;
    }

    @media(max-width:1200px) {
      .adim .row .col-2 {
        width: 58px;
      }
    }

    @media(max-width:1200px) {
      .adim .row .col-2.active {
        width: 260px;
      }
    }

    .adim .row .col-2 .list-group h1 {
      margin-top: 90px;
      margin-bottom: 20px;
      background-color: rgba(216, 244, 244, 0);
      border: none;
      font-size: 30px;
      font-weight: 500;
    }

    .adim .row .col-2 .list-group h1:hover {
      color: rgb(0, 0, 0);
    }

    .adim .row .col-2 .list-group button {
      border: none;
      background-color: #d3d7d7;
      color: black;
    }

    .adim .row .col-2 .list-group button li {
      font-size: 18px;
      opacity: 1;
      pointer-events: none;
    }

    @media(max-width:1200px) {
      .adim .row .col-2 .list-group button li {
        opacity: 0;
        pointer-events: none;
        width: 58px;
      }
    }

    .adim .row .col-2.active .list-group button li {
      opacity: 1;
      pointer-events: none;
    }

    .adim .col-2 .Logo_content {
      padding-top: 25px;
      padding-left: 40px;
      font-size: 20px;
      color: white;
    }

    .adim .row .col-2 .list-group button:hover {
      background-color: rgba(14, 91, 91, 0.978);
      color: rgb(255, 255, 255);
    }

    .adim .row .col-8 {
      margin: auto;
      margin-top: 150px;
    }

    @media(max-width:1300px) {
      .adim .row .col-8 {
        width: 77%;
      }
    }

    .adim .row .col-8 h4 {
      color: black;
      font-size: 40px;
      text-transform: uppercase;
    }

    .adim .row .icon-menu {
      width: 50px;
      padding-top: 123px;
      padding-left: 50px;
    }

    .adim .col-2 #btn {
      position: absolute;
      left: 90%;
      top: 90px;
      font-size: 30px;
      height: 50px;
      width: 50px;
      text-align: center;
      line-height: 50px;
      color: #000;
      transform: translateX(-50px);
    }

    @media(max-width:1200px) {
      .adim .col-2 #btn {
        left: 100%;
      }
    }

    .adim .col-2.active #btn {
      left: 90%;
    }
    @media(max-width:1200px)
  {
    .adim .row .col-8
    {
        width:75%;
    }
  }
  @media(max-width:1000px)
  {
    .adim .row .col-8
    {
        width:75%;
    }
  }
  @media(max-width:800px)
  {
    .adim .row .col-8
    {
        width:75%;
    }
  }
  @media(max-width:600px)
  {
    .adim .row .col-8
    {
        width:65%;
    }
  }
  @media(max-width:400px)
  {
    .adim .row .col-8
    {
        width:65%;
    }
  }
  @media(max-width:200px)
  {
    .adim .row .col-8
    {
        width:65%;
    }
  }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <?php
  include 'navbar.php';
  ?>
  <div class="sider">
    <section class="adim">
      <div class="row">
        <div class="col-2">
          <div class="Logo_content">
            <i id="btn" class="bi bi-list"></i>
          </div>
          <div id="list-example" class="list-group">
            <h1 class="list-group-item list-group-item-action"></h1>
            <!-- <i style="color:black;" class="bi bi-list fs-4"></i> -->
            <?php
            include 'database/database.php';
            $Course_Id = $_GET['Id'];
            $q = "select * from Topicsa where Course_Id= '$Course_Id'";
            $result = mysqli_query($conn, $q);
            while ($res = mysqli_fetch_array($result)) {
            ?>

              <form action="fetch.php" method="POST">

                <input type="hidden" name="txt1" value="<?php echo $res['Id'] ?>">
                <button class="list-group-item list-group-item-action">
                  <li style="width: 300px; list-style: none;"><?php echo $res['Topics_Name']; ?></li>
                </button>

              </form>


            <?php } ?>


          </div>
        </div>




        </button>
        <div class="col-8">

          <div data-bs-spy="scroll" data-bs-target="#list-example" show data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">


            <h4></h4>
            <p><?php

                if (isset($_SESSION['Topics_Description'])) {
                  echo $_SESSION['Topics_Description'];
                }

                ?></p>

          </div><br><br>

        </div>


      </div>
    </section>
  </div>
  <script>
    let btn = document.querySelector("#btn");
    let siderbar = document.querySelector(".adim .col-2");

    btn.onclick = function() {
      siderbar.classList.toggle("active");
    }
  </script>

</body>

</html>