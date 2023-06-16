<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <link rel="stylsheet" href="css/media.css">
   <link rel="stylesheet" href="css/contact.css">
   <link rel="stylesheet" href="Css/nav.css">
    <style>
        @media(max-width:1200px)
        {
         .col-row
         {
            width: 100%;
         }
        }
        @media(max-width:1000px)
        {
         .col-row
         {
            width: 100%;
         }
        }
        @media(max-width:800px)
        {
         .col-row
         {
            width: 100%;
         }
        }
        @media(max-width:600px)
        {
         .col-row
         {
            width: 100%;
         }
        }
    </style>
    <title>Tutorial Learning</title>
  </head>
  <body>
    
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   

    <?php
      include 'navbar.php';
    ?>
 
 <section class="application-features-hero page-hero section position-relative overlay-bottom">
        <div class="line-draw "></div>
        <div class="inner">
            <div class="col-row">
                <div class="main-content d-md-flex align-items-center justify-content-between">
                    <div class="col-8 col-offset-2 col-s-12 col-s-offset-0">

                        <div class="text-block d-md-flex flex-column align-items-start justify-content-center">
                            <div class="heading-label fs-5">Contact Us</div>
                            <h1 class="display-2 text-white">Contact  <span class="color-emphasized"> For Any <br>Query</span></h1>
                        </div>
                    </div>
                    <div class="image-block d-none d-lg-block">
                        <img class="hero-image" src="images/about-image/about-us-hero.webp" alt="" data-ot-ignore="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include 'database/database.php';
    if (isset($_POST['btnsubmit'])) {
            // checking for empty fields
            if (($_POST['First_Name'] == "") ||
                ($_POST['Email'] == "") ||
                ($_POST['Contact_Subject'] == "") ||
                ($_POST['Contact_Message'] == "")
            ) {

                $msg = '<div class="alert alert-danger" role="alert">
               Fill the Fileds
             </div>';
            } else {
                $txtfirstname = $_POST['First_Name'];
                $txtemail = $_POST['Email'];
                $txtsubject = $_POST['Contact_Subject'];
                $txtmessages = $_POST['Contact_Message'];
               


                $sql = "INSERT INTO contact (First_Name,Email,Contact_Subject,Contact_Message) VALUES ('$txtfirstname','$txtemail','$txtsubject','$txtmessages')";
                if ($conn->query($sql) == TRUE) {

                    
                    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">
                 your message are send succefully 
             </div>';
             echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
                } else {
                       
                    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">
                    your message are not send    
                  </div>';
                }
                mysqli_close($conn);
            }
        }

?>
    <section class="contact">
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                            <i class="bi bi-geo-alt-fill text-white fs-3"></i>
                                
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0">123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-danger mr-4">
                            <i class="bi bi-telephone-fill text-white fs-3"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call Us</h4>
                                <p class="m-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                            <i class="bi bi-envelope-fill text-white fs-3"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-primary text-uppercase pb-2">Need Help?</h6>
                        <h1 class="display-4">Send Us A Message</h1>
                    </div>
                    <?php if (isset($msg)) {
                        echo $msg;
                    } ?>
                    <div class="contact-form">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" class="form-control p-1 m-2" id="First_Name" name="First_Name" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" class="form-control p-1 m-2" id="Email" name="Email" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control p-1 mt-3 m-2" id="Contact_Subject" name="Contact_Subject" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control p-1 mt-3 m-2" rows="5" id="Contact_Message" name="Contact_Message" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" id="btnsubmit" name="btnsubmit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>



    <?php 
  include 'footer.php';
?>

  </body>
</html>