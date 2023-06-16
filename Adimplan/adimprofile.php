<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial Learning</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/nav.css">
    <link rel="stylsheet" href="../css/media.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <style>
        body {
            background-color: #f9f9fa
        }

        .padding {
            padding: 6rem !important
        }

        .user-card-full {
            overflow: hidden;
        }

        .card {
            border-radius: 5px;
            box-shadow: 0 1px 20px 0 gray;
            border: none;
            margin-bottom: 30px;
        }

        .bg-c-lite-green {

            background: linear-gradient(to right, #ee5a6f, #f29263);
        }

        .user-profile {
            padding: 80px 0;
        }

        .card-block {
            padding: 1.25rem;
        }

        .m-b-25 {
            margin-bottom: 25px;
        }

        h6 {
            font-size: 14px;
        }


        @media (min-width: 1200px) {
            .col-xl-6 {
                flex: 0 0 auto;
                width: 70%;
            }
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px;
            }
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .card .card-block p {
            line-height: 25px;
        }


        .text-muted {
            color: #919aa3 !important;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .m-t-40 {
            margin-top: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }
        .img-radius
        {
            border-radius: 50%;
        }
        h7
        {
            font-size: 20px;
        }
        .page-content .close span {
    position: absolute;
    top: 80px;
    right: 40px;
    font-size: 50px;
    color: #000;
    font-weight: bolder;
    z-index: 100;
    cursor: pointer;
  }
    </style>

</head>

<body>
    <?php
    include '../database/database.php';
    
    $query = "SELECT * FROM signa WHERE Id ={$_SESSION['UserId']}";
    $result = $conn->query($query);
    if(mysqli_num_rows($result) >0 )
    {
      $fetch = mysqli_fetch_assoc($result);
    }
    ?>

    <div class="page-content page-container" id="page-content" style="padding-top: 10px;">
    <div class="close">
            <span>&times;</span>
          </div>

        <div class="padding">

            <div class="row container d-flex justify-content-center">
                <div class="col-xl-6 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img width="150px" height="150px" src="<?php echo '../loginandsign/';?><?php echo $fetch['images'] ?>" class="img-radius" alt="User-Profile-Image">
                                    </div>
                                    <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information.....</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">First Name</p>
                                        <h6 class="text-muted f-w-400"><?php echo $fetch['First_Name'] ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Last Name</p>
                                            <h6 class="text-muted f-w-400"><?php echo $fetch['Last_Name'] ?></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Deatils....</h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Email</p>
                                            <h6 class="text-muted f-w-400"><?php echo $fetch['Email'] ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Password</p>
                                            <h6 class="text-muted f-w-400"><?php echo $fetch['btn_Password'] ?></h6>
                                        </div>
                                    </div>
                                    <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Brith Date</p>
                                            <h6 class="text-muted f-w-400"><?php echo $fetch['DOB'] ?></h6>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class="m-b-10 f-w-600">Country</p>
                                            <h6 class="text-muted f-w-400"><?php echo $fetch['Country'] ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.querySelector('.page-content .close span').onclick = () => {
     location.href = "Dashboard.php";

    }
  </script>
</body>

</html>