<?php
include '../database/database.php';
if (!isset($_SESSION)) {
  session_start();
}
?>
<link href="../css/nav.css" rel="stylesheet">
<?php
    include '../database/database.php';
   
    $query = "SELECT * FROM signa WHERE Id ={$_SESSION['UserId']}";
    $result = $conn->query($query);
    if(mysqli_num_rows($result) >0 )
    {
      $fetch = mysqli_fetch_assoc($result);
    }
    ?>
<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #b3afaf;">
  <div class="container-fluid">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">


      <li class="nav-item" style="  display: flex;align-items: center;">
        <img style="border-radius: 50px;border: 3px solid black;" width="50" height="50" src="<?php echo '../loginandsign/';?><?php echo $fetch['images'] ?>" onclick="toggleMenu()">

        <div class="sub-menu-wrap" id="subMenu">
          <div class="sub-menu">
            <div class="user-info">
              <img src="<?php echo '../loginandsign/';?><?php echo $fetch['images'] ?>">
              <h3 class="text-dark"><?php echo $fetch['First_Name'] ?> <?php echo $fetch['Last_Name'] ?></h3>
            </div>
            <hr>

            <a href="adimprofile.php" class="sub-menu-link">
              <i class="bi bi-person-fill"></i>
              <p>Edit Profile</p>
            </a>

            <a href="contact.php" class="sub-menu-link">
              <i class="bi bi-question-circle-fill"></i>
              <p>help</p>
            </a>

            <a href="../loginandsign/Login.php" class="sub-menu-link">
              <i class="bi bi-door-open-fill"></i>
              <p>Logout</p>
            </a>


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
</nav>