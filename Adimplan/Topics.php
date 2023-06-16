<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADIMPLAN</title>
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="stylesheet" href="../CSS/adim1.css">
    <link rel="icon" href="../images/logo/whitebackground.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
    <style>


.ca .col .card-footer a
{
    margin: auto 40%;
    border: none;
    color: rgb(8, 42, 61);
    font-weight: 600;
    font-family: cursive;
    font-size: 20px;
}
.ca .col .card-footer a:hover
{
    color: rgb(2, 142, 142);
}
    </style>
</head>

<body>
    <?php
    include 'navbaradmin.php';
    include 'siderbar.php';
    include '../database/database.php';
    ?>

    <div class="ca">
        <?php
        $sql = "Select * from Coursea";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        ?>
            <div class="row row-cols-1 row-cols-md-3 g-5 m-5">
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <div class="col">
                        <div class="card h-100">
                            <img width="20%" src="<?php if (isset($row['Course_image'])) {
                                                        echo $row['Course_image'];
                                                    } ?>" class="card-img-top" alt="...">
                            <div class="card-footer">
                            <a href="Topicsadd.php?Id=<?php echo $row['Id'] ?>" class="dropdown-item"><?php if (isset($row['Course_Name'])) {
                                                                                          echo $row['Course_Name'];
                                                                                        }
                                                                                        ?></a>

                                <!-- <form action="Topicsadd.php" method="POST">
                                    <input type="hidden" name="Id" value='<?php echo $row["Id"] ?>'>
                                    <button type="submit" name="topicsbtn"><?php if (isset($row['Course_Name'])) {
                                                                                echo $row['Course_Name'];
                                                                            }
                                                                            ?> Topics</button>
                                </form> -->
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        <?php } ?>

    </div>




</body>

</html>