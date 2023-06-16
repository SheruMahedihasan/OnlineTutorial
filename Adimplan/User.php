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
  <style>
         .col-6{
            margin-top: 100px;
    margin-left: auto;
    margin-right: 50px;
    width: 60%;
        }
    </style>
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
      <h1 class="fs-5">List of Payment</h1>
      <?php
      $sql = "Select * from signa";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $num = 0;
      ?>
        <table class="table">

          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">First_Name</th>
              <th scope="col">Last_Name</th>
              <th scope="col">Email</th>
              <th scope="col">btn_Password</th>
              <th scope="col">DOB</th>
              <th scope="col">Country</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { $num++; ?>
              <tr>
                <th scope="row"><?php echo $row['Id']; ?></th>
                <td><?php echo $row['First_Name']; ?></td>
                <td><?php echo $row['Last_Name']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['btn_Password']; ?></td>
                <td><?php echo $row['DOB']; ?></td>
                <td><?php echo $row['Country']; ?></td>
                <td>

                  <form action="" method="POST" class="d-inline">
                    <input type="hidden" name="Id" value='<?php echo $row["Id"] ?>'>
                    <button type="submit" class="btn btn-secondary mr-3" name="delete" value="Delete">
                      <i class="bi bi-trash3"></i>
                    </button>

                  </form>

                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>


      <?php } else {
        echo "0 result ";
      }
      if (isset($_POST['delete'])) {
        $sql = "DELETE FROM signa WHERE Id ={$_POST['Id']}";
        if ($conn->query($sql) == TRUE) {

          echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
        } else {

          echo "Unable to Delete Data: " . $conn->error;
        }
      }


      ?><br><br>
    </div>
  </section>
</body>

</html>