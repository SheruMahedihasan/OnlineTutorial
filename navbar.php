<?php
include 'database/database.php';
if (!isset($_SESSION)) {
  session_start();
}
?>
<link rel="stylesheet" href="Css/navbar.css">
<nav class="navbar navbar-expand-lg fixed-top" style="  background-color: rgb(8, 48, 61);">
  <div class="container-fluid">

    <img width="45px" src="images/logo/whitebackground.png" class="navbar-brand">Tutorial Learning</img>
    <button class="navbar-toggler border-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                while($row = mysqli_fetch_array($result)) {
                ?>
                    <a href="html.php?Id=<?php echo $row['Id']?>" class="dropdown-item"><?php if (isset($row['Course_Name'])) {
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
                } ?>
                <div class="user-info">
                  <img src="<?php echo 'loginandsign/';?><?php echo $fetch['images'] ?>">
                  <h3 class="text-dark"><?php echo $fetch['First_Name'] ?> <?php echo $fetch['Last_Name'] ?></h3>
                </div><?php
                    } else { ?>
                <div class="user-info">
                  <img src="images/top/profile-1.jpg">
                  <h3 class="text-dark">YOUR NAME</h3>
                </div>
              <?php       }
              ?>
              <hr>
              <?php

              if (isset($_SESSION['UserId'])) {
                echo ' <a href="profile.php" class="sub-menu-link">
  <i class="bi bi-person-fill"></i>
  <p>Edit Profile</p>
</a>';
              } else {
                echo ' <a href="home.php" class="sub-menu-link">
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
        <script>
          let subMenu = document.getElementById("subMenu");

          function toggleMenu() {
            subMenu.classList.toggle("open-Menu");
          }
        </script>

      </ul>
    </div>
  </div>
</nav>