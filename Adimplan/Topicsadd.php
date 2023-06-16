<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tutorial Learning</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/adim1.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/052ae4ae7c.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  <?php
  include 'navbaradmin.php';
  include 'siderbar.php';
  include '../database/database.php';


  ?>
  <section class="dis">
    <div class="table1">
      <h1 class="fs-5">List of Topics</h1>
      <?php

        $sql = "SELECT * FROM topicsa WHERE Course_Id = '{$_GET['Id']}'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
      ?>
          <table class="table">

            <thead class="table-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Topics_Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                  <th scope="row"><?php echo $row['Id']; ?></th>
                  <td><?php echo $row['Topics_Name']; ?></td>

                  <td>

                    <form action="updatetopics.php" method="POST" class="d-inline">
                      <input type="hidden" name="Id" value='<?php echo $row["Id"] ?>'>
                      <button type="submit" class="btn btn-info mr-3" name="view" value="view">
                        <i class="bi bi-pencil"></i>
                      </button>
                    </form>

                    <form action="" method="POST" class="d-inline">
                      <input type="hidden" name="Id" value='<?php echo $row["Id"] ?>'>
                      <button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete">
                        <i onclick="return checkdelete()" class="bi bi-trash3"></i>
                      </button>

                    </form>
                    <!-- <script>
        function checkdelete() {
          var result = confrim("Are you sure update the course?");
          if (result) {
            return true;
          } else {
            return false
          }
        }
      </script> -->
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>


      <?php } else {
          echo "0 result ";
        }
        if(isset($_POST['delete'])){
        $sql = "DELETE FROM topicsa WHERE Id ={$_POST['Id']}";
        if ($conn->query($sql) == TRUE) {
    
          
          function function_alert($msg)
          {
              // Display the alert box 
              echo "<script>alert('$msg');</script>";
          }
          function_alert("Topics Are delete");

          
        } else {
          function function_alert($msg)
          {
              // Display the alert box 
              echo "<script>alert('$msg');</script>";
          }
          function_alert("Unable to Delete Data:"). $conn->error;
        }
        }
      ?><br><br>


      <a type="submit" class="btn btn-danger box mr-3" href="Addtopics.php">
        <i class="bi bi-plus fs-5"></i>
      </a>
    </div>
  </section>
</body>

</html>