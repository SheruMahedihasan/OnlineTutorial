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
    .ft {
      width: 75%;
    margin-left: auto;
    padding-top: 130px;
    padding-right: 70px;
    }

    .overview-wrap {
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      -webkit-box-pack: justify;
      -webkit-justify-content: space-between;
      -moz-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
    }

    @media (max-width: 767px) {
      .overview-wrap {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
      }

      .overview-wrap .button {
        -webkit-box-ordinal-group: 2;
        -webkit-order: 1;
        -moz-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
      }

      .overview-wrap h2 {
        -webkit-box-ordinal-group: 3;
        -webkit-order: 2;
        -moz-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
      }
    }

    .overview-item {
      -webkit-border-radius: 10px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      padding: 30px;
      padding-bottom: 0;
      -webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
      -moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
      box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
      margin-bottom: 40px;
    }

    @media (min-width: 992px) and (max-width: 1519px) {
      .overview-item {
        padding-left: 15px;
        padding-right: 15px;
      }
    }

    .overview-item--c1 {
      background-image: -moz-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
      background-image: -webkit-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
      background-image: -ms-linear-gradient(90deg, #3f5efb 0%, #fc466b 100%);
    }

    .overview-item--c2 {
      background-image: -moz-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
      background-image: -webkit-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
      background-image: -ms-linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
    }

    .overview-item--c3 {
      background-image: -moz-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
      background-image: -webkit-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
      background-image: -ms-linear-gradient(90deg, #ee0979 0%, #ff6a00 100%);
    }

    .overview-item--c4 {
      background-image: -moz-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
      background-image: -webkit-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
      background-image: -ms-linear-gradient(90deg, #45b649 0%, #dce35b 100%);
    }

    .overview-box .icon {
      display: inline-block;
      vertical-align: top;
      margin-right: 15px;
    }

    .overview-box .icon i {
      font-size: 60px;
      color: #fff;
    }

    @media (min-width: 992px) and (max-width: 1199px) {
      .overview-box .icon {
        margin-right: 3px;
      }

      .overview-box .icon i {
        font-size: 30px;
      }
    }

    @media (max-width: 991px) {
      .overview-box .icon {
        font-size: 46px;
      }
    }

    .overview-box .text {
      font-weight: 300;
      display: inline-block;
    }

    .overview-box .text h2 {
      font-weight: 300;
      color: #fff;
      font-size: 36px;
      line-height: 1;
      margin-bottom: 5px;
    }

    .overview-box .text span {
      font-size: 20px;
      color: rgba(255, 255, 255, 0.6);
      font-weight: 500;
    }

    @media (min-width: 992px) and (max-width: 1199px) {
      .overview-box .text {
        display: inline-block;
      }

      .overview-box .text h2 {
        font-size: 20px;
        margin-bottom: 0;
      }

      .overview-box .text span {
        font-size: 14px;
      }
    }

    @media (max-width: 991px) {
      .overview-box .text h2 {
        font-size: 26px;
      }

      .overview-box .text span {
        font-size: 15px;
      }
    }

    .overview-chart {
      height: 115px;
    }

    .container-fluid {
      width: 100%;
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
    }


  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  <?php
  include 'navbaradmin.php';
  include 'siderbar.php';
  include '../database/database.php';
  $sql = "SELECT * FROM coursea";

  if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);
  }
  ?>


  <section class="ft">

    <div class="row m-t-25">
      <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="zmdi zmdi-account-o"></i>
              </div>
              <div class="text">
                <h2><?php echo ($rowcount); ?></h2>
                <span>online Course</span>
              </div>
            </div>
            <div class="overview-chart">
              <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
              </div>
              <canvas id="widgetChart1" height="130" style="display: block; width: 216px; height: 130px;" width="216" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
      <?php
      $sql = "SELECT * FROM topicsa";

      if ($result = mysqli_query($conn, $sql)) {

        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);
      }
      ?>
      <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="zmdi zmdi-shopping-cart"></i>
              </div>
              <div class="text">
                <h2><?php echo ($rowcount); ?></h2>
                <span>Total Topics</span>
              </div>
            </div>
            <div class="overview-chart">
              <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
              </div>
              <canvas id="widgetChart2" height="115" style="display: block; width: 216px; height: 115px;" width="216" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
      <?php
      $sql = "SELECT * FROM premiumpacks";
      if ($result = mysqli_query($conn, $sql)) {
        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);
      }

      ?>
      <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="zmdi zmdi-calendar-note"></i>
              </div>
              <div class="text">
                <h2><?php echo ($rowcount); ?></h2>
                <span>Premium Packs</span>
              </div>
            </div>
            <div class="overview-chart">
              <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
              </div>
              <canvas id="widgetChart3" height="115" style="display: block; width: 216px; height: 115px;" width="216" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
      <?php
      $sql = "SELECT * FROM premiumpacks";

      if ($result = mysqli_query($conn, $sql)) {

        // Return the number of rows in result set
        $rowcount = mysqli_num_rows($result);
      }

      ?>
      <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="zmdi zmdi-money"></i>
              </div>
              <div class="text">
                <h2><?php echo ($rowcount); ?></h2>
                <span>Terding</span>
              </div>
            </div>
            <div class="overview-chart">
              <div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                </div>
                <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                  <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                </div>
              </div>
              <canvas id="widgetChart4" height="115" style="display: block; width: 216px; height: 115px;" width="216" class="chartjs-render-monitor"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="dis">
    <div class="table1">
      <h1 class="fs-5">List of Course</h1>
      <?php
      $sql = "Select * from Coursea";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      ?>
        <table class="table">

          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Course_Name</th>
              <th scope="col">Course_Url</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <th scope="row"><?php echo $row['Id']; ?></th>
                <td><?php echo $row['Course_Name']; ?></td>
                <td><?php echo $row['course_url']; ?></td>
                <td>

                  <form action="update.php" method="POST" class="d-inline">
                    <input type="hidden" name="Id" value='<?php echo $row["Course_Id"] ?>'>
                    <button type="submit" class="btn btn-info mr-3" name="view" value="view">
                      <i class="bi bi-pencil"></i>
                    </button>

                  </form>

                  <form action="" method="POST" class="d-inline">

                    <input type="hidden" name="Id" value='<?php echo $row["Course_Id"] ?>'>
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
        $sql = "DELETE FROM coursea WHERE Course_Id ={$_POST['Course_Id']}";
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