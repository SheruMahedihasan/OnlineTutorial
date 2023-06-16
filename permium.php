<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tutorial Learning</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="Css/nav.css">
    <link rel="stylsheet" href="css/media.css">
    <link rel="stylesheet" href="Css/permium.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
       .packs
       {
        width: 100%;
       }
       @media(max-width:1200px)
       {
        .packs
        {
            width: 100%;
        }
    }
    .button {
    border: none;
    font-size: 16px;
    color: #fff;
    padding: 8px 16px;
    background-color: #4070f4;
    border-radius: 6px;
    margin: 14px;
    text-decoration: none;
}
.button:hover {
    background: #1345cf;
    color: white;
}
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <?php
    include 'navbar.php';
    ?>
        <section class="packs application-features-hero page-hero section position-relative overlay-bottom">
            <div class="line-draw"></div>
            <div class="inner">
                <div class="col-row">
                    <div class="main-content d-md-flex align-items-center justify-content-between">
                        <div class="col-8 col-offset-2 col-s-12 col-s-offset-0">

                            <div class="text-block d-md-flex flex-column align-items-start justify-content-center">
                                <div class="heading-label fs-5">Permium Packs</div>
                                <h1 class="display-2 text-white">Become a <span class="color-emphasized"> Pro Packs <br>User</span></h1>
                            </div>
                        </div>
                        <div class="image-block d-none d-lg-block">
                            <img class="hero-image" src="images/about-image/about-us-hero.webp" alt="" data-ot-ignore="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="permium">

                <?php
                $sql = "Select * from premiumpacks";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                ?>
                    <div class="slider-container">
                        <div class="slide-content ">
                            <div class="header-h1">
                                <h1>Premium Packs</h1>
                                
                            </div>
                            <div class="card-wrapper">

                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <div class="card m-5">
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
                                            <p class="description fs-3 text-dark"><i class="bi bi-currency-rupee"></i><?php if (isset($row['Premium_Selling'])) {
                                                                                                                                echo $row['Premium_Selling'];
                                                                                                                            } ?></p>

                                            
                                                <a href="buy.php?Id=<?php echo $row['Course_Id']?>" class="button">Buy More</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>

        </section>

    <?php
        include 'footer.php';
    
    ?>


</body>

</html>