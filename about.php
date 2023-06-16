<?php 

session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial Learning</title>
    <link rel="stylesheet" href="Css/nav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
    <style>
        .col-offset-2 {
            margin-left: 12%;
        }

        .col-8 {
            flex-basis: 62.99019607843137%;
            max-width: 67%;
        }

        .page-hero-title {
            color: #fff;
            margin-bottom: 0;
        }

        .text-24,
        blockquote,
        .page-hero-text,
        .application-cta-get-started-text,
        .application-create-installation-caption,
        .application-overview-hero-caption,
        .platform-heading-caption {
            font-size: 24px;
            font-weight: 400;
            line-height: 32px;
        }

        .page-hero-text,
        .page-hero-text p {
            color: rgba(255, 255, 255, 0.9);
            margin-top: 12px;
        }

        .page-hero-title h1 {
            margin-right: 20px;
        }

        .page-hero {
            max-width: 100%;
            background-image: linear-gradient(225deg, rgb(7, 98, 91) 0%, rgb(8, 48, 61) 49%, rgb(8, 48, 61) 100%);
            color: #fff;
            position: relative;
            overflow: hidden;
            padding: 80px 0;
            background-size: cover;
            padding-bottom: 25px;
        }
        @media(max-width:1200px)
        {
            .col-8 .text-block .display-2
        {
            font-size: 2.40rem;
            font-weight: 600;
            line-height: 1;
        }
        }
        @media(max-width:1000px)
        {
            .col-8 .text-block .display-2
        {
            font-size: 2.40rem;
            font-weight: 600;
            line-height: 1;
        }
        }
        @media(max-width:800px)
        {
            .col-8 .text-block .display-2
        {
            font-size: 2.40rem;
            font-weight: 600;
            line-height: 1;
        }
        }
        @media(max-width:600px)
        {
            .col-8 .text-block .display-2
        {
            font-size: 2.40rem;
            font-weight: 600;
            line-height: 1;
        }
        }
        @media(max-width:400px)
        {
            .col-8 .text-block .display-2
        {
            font-size: 2.40rem;
            font-weight: 600;
            line-height: 1;
        }
        }
        .text-white {
            color: #fff !important;
        }

        .display-2 {
            font-size: 2.975rem;
            font-weight: 700;
            line-height: 1;

        }

        .color-emphasized {
            color: red;
            font-size: 2.975rem;
        }

        .line-draw {
            border-bottom: 5px solid red;
            width: 28%;
            transform: rotate(294deg);
        }


        .flex-block {
            max-width: 100%;
        }

        .flex-block-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
        }

        .flex-open-block {
            padding: 10px;
            padding-left: 135px;
            padding-bottom: 30px;

        }

        .title2 .title--center {
            text-align: center;
            font-weight: 700;
            color: black;
        }

        .message-name .container {
            max-width: 75%;
            display: flex;
            padding-top: 150px;
            padding-bottom: 150px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>

<body>
    <?php
    include 'database/database.php';
    include 'navbar.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



    <section class="application-features-hero page-hero section position-relative overlay-bottom">
        <div class="line-draw"></div>
        <div class="inner">
            <div class="col-row">
                <div class="main-content d-md-flex align-items-center justify-content-between">
                    <div class="col-8 col-offset-2 col-s-12 col-s-offset-0">

                        <div class="text-block d-md-flex flex-column align-items-start justify-content-center">
                            <div class="heading-label fs-5">About Us</div>
                            <h1 class="display-2 text-white">Transformation<span class="color-emphasized"> through <br>education</span></h1>
                        </div>
                    </div>
                    <div class="image-block d-none d-lg-block">
                        <img class="hero-image" src="images/about-image/about-us-hero.webp" alt="" data-ot-ignore="">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="message-name">
        <div class="container">
            <div class="p-2">
                <div class="row featurette d-flex justify-content-center align-items-center">
                    <div class="col-md-7 order-md-3">
                        <h5 style="margin-bottom: 30px; color: red;" class="fs-2">Welcome to Tutorial-Learning.</h5>
                        <h4 class="featurette-heading fw-normal lh-1"><b>You can join with Tutorial-Learning and upgrade your skill for your <span style="color: red;">bright future .</span></b></h4>
                        <p style="margin-top: 50px;">Tutorial-Learning is a Delhi/NCR based leading IT Company established in year 2011. The development of Tutorial-Learning began with a motto to spread technical knowledge and help students learn efficiently. Earlier the Business was set up in Ghaziabad Later, it was shifted to Noida in 2015. The company kept on growing and eventually reached the mark of 180+ employees and has been growing since then.</p>
                    </div>
                    <div class="col-md-4 order-md-2">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="images/about-image/impact.webp" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="generic-block-wrapper block block--custom-color block--light block--left padding-top-hundred padding-bottom-hundred block_work_together clearfix">
        <div class="main clearfix">
            <div class="content clearfix">
                <div class="column-control section">
                    <div class="container column-control-container">
                        <div class="row large column-control--wide">
                            <div class="columns large-12 small-12">
                                <div class="title2 section">
                                    <div data-emptytext="Title">
                                        <h2 class="title--center">
                                            Working together
                                        </h2>
                                    </div>
                                </div>
                                <div class="text-4 text section remove-bottom-margin">
                                    <div id="text-4-8d3724380c" class="cmp-text">
                                        <p style="text-align: center;" class="remove-bottom-margin"><span class="remove-bottom-margin">With the help of our partners, we bring technology skills to the masses.</span></p>
                                    </div>
                                </div>
                                <div class="spacer section">
                                    <div class="spacer  " style="height:40px"></div>
                                </div>
                                <div class="flex-block section">
                                    <div class="flex-block-container flex-section desktop-three tablet-three mobile-two">
                                        <div class="flex-open-block section">
                                            <div class="flex-open-block-wrapper block--transparent block--center flex-open-block--vertical-center clearfix">
                                                <div class="main clearfix">
                                                    <div class="column-control section">
                                                        <div class="container column-control-container">
                                                            <div class="row large padding-bottom-twenty">
                                                                <div class="columns large-12 small-12">
                                                                    <div class="image section">
                                                                        <img src="images/logo/w3schools-logo-icon.png" alt="w3school" style=" width: 110px;" class="image--center " data-airgap-id="34">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-open-block section">
                                            <div class="flex-open-block-wrapper block--transparent block--center flex-open-block--vertical-center clearfix">
                                                <div class="main clearfix">
                                                    <div class="column-control section">
                                                        <div class="container column-control-container">
                                                            <div class="row large padding-bottom-twenty">
                                                                <div class="columns large-12 small-12">
                                                                    <div class="image section">
                                                                        <img src="images/logo/bootstrap.png" alt="bootstrap" style="width:170px;" class="image--center " data-airgap-id="56">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="flex-open-block section">
                                            <div class="flex-open-block-wrapper block--transparent block--center flex-open-block--vertical-center clearfix">
                                                <div class="main clearfix">
                                                    <div class="column-control section">
                                                        <div class="container column-control-container">
                                                            <div class="row large padding-bottom-twenty">
                                                                <div class="columns large-12 small-12">
                                                                    <div class="image section">
                                                                        <img src="images/logo/udatcity.png" alt="udaticy" style="width: 130px;" class="image--center " data-airgap-id="60">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-open-block section">
                                            <div class="flex-open-block-wrapper block--transparent block--center flex-open-block--vertical-center clearfix">
                                                <div class="main clearfix">
                                                    <div class="column-control section">
                                                        <div class="container column-control-container">
                                                            <div class="row large padding-bottom-twenty">
                                                                <div class="columns large-12 small-12">
                                                                    <div class="image section">
                                                                        <img src="images/logo/logo.png" alt="tutorialpoint" style="width: 280px;" class="image--center " data-airgap-id="52">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="flex-open-block section">
                                            <div class="flex-open-block-wrapper block--transparent block--center flex-open-block--vertical-center clearfix">
                                                <div class="main clearfix">
                                                    <div class="column-control section">
                                                        <div class="container column-control-container">
                                                            <div class="row large padding-bottom-twenty">
                                                                <div class="columns large-12 small-12">
                                                                    <div class="image section">
                                                                        <img src="images/logo/stackoverflow.png" alt="stackoverflow" style="width: 260px;" class="image--center " data-airgap-id="54">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-open-block section">
                                            <div class="flex-open-block-wrapper block--transparent block--center flex-open-block--vertical-center clearfix">
                                                <div class="main clearfix">
                                                    <div class="column-control section">
                                                        <div class="container column-control-container">
                                                            <div class="row large padding-bottom-twenty">
                                                                <div class="columns large-12 small-12">
                                                                    <div class="image section">
                                                                        <img src="images/logo/codecademy.png" alt="codecademy" style="max-width: 240px;width: 220px;" class="image--center " data-airgap-id="58">

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

</body>

</html>