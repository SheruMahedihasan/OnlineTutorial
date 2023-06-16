<?php
session_start();

if (!isset($_SESSION['UserId']) ){
  header('location:loginandsign/Login.php');
  }
include 'database/database.php';
$Id = $_GET['Course_Id'];
$q = "select * from premiumpacks where Course_Id   = '$Id'";
$result = mysqli_query($conn, $q);
$row = mysqli_fetch_array($result);
?>

</div>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="CSS/nav.css">
  <link rel="stylesheet" href="css/buy.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .sucess {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 100;
      background: rgba(0, 0, 0, 0.8);
      height: 100%;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .sucess .button {
      width: 50%;
      display: block;
      margin: 20px auto;
      border-radius: 25px;
      padding: 10px;
      text-decoration: none;
      background: rgb(74, 137, 78);
      color: rgb(0, 0, 0);
      text-align: center;
      letter-spacing: 0.05em;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <div class="card col-md-6">
    <?php
    if (isset($_POST['btnpayment'])) {
      // checking for empty fields
      if (($_POST['Payment_Name'] == "") ||
        ($_POST['Payment_Number'] == "") 
      ) {
        function function_alert($msg)
        {
          // Display the alert box 
          echo "<script>alert('$msg');</script>";
        }
        function_alert("Fill All Fileds");
      } else {
        $txtname = $_POST['Payment_Name'];
        $txtnumber = $_POST['Payment_Number'];
        $txtuserId = $_SESSION['UserId'];
        $sql = "INSERT INTO payment(Payment_Name,Payment_Number,Premium_Id,User_Id) VALUES  ('$txtname','$txtnumber','$Id','$txtuserId')";
        if ($conn->query($sql) == TRUE) {
          ?>	<div class="sucess">
          <div class="close">
            <span>&times;</span>
          </div>
          <div class="popup" id="success1">
            <div class="popup-content">
              <div class="imgbox">
                <img src="images/logo/checked.png" alt="" class="img">
              </div>
              <div class="title">
                <h3>Payment</h3>
              </div>
              <p class="para">successfully</p>
               <form action="fetch1.php" method="POST">
               <input type="hidden" name="txt2" value="<?php echo $row['Course_Id'] ?>">
                 <button class="button">OKAY</button>
               </form>
            </div>
          </div>
        </div><?php
         
        } else {

          ?>	<div class="sucess">
<div class="close">
  <span>&times;</span>
</div>
<div class="popup" id="success1">
  <div class="popup-content">
    <div class="imgbox">
      <img src="images/logo/Cancel.png" alt="" class="img">
    </div>
    <div class="title">
      <h3>Payment</h3>
    </div>
    <p class="para">Cancel</p>
    <form action="ckeckout.php" method="POST">
    <input type="hidden" name="txt2" value="<?php echo $row['Id'] ?>">
    <button class="button">OKAY</button>
    </form>
  </div>
</div>
</div><?php
        }
        mysqli_close($conn);
      }
    }

    //echo $res['description'];
    ?>
    <?php  ?>
    <div class="checkout">

      <!-- <?php
      if (isset($msg)) {
        echo $msg;
      }
      ?>-->
      <div class="checkout-payment">
        <form action="" method="POST">
          <div class="row">
            <div class="col">
              <h1 class="title">Payment Details</h1>

              <div class="inputBox">
                <span>Card accepted :</span>
                <img src="images/logo/bootstrap.png" alt="" required>
              </div>

              <div class="inputBox">
                <span>Name of Card :</span>
                <input type="text" id="Payment_Name" name="Payment_Name" placeholder="mr .abc xyz" required>
              </div>

              <div class="inputBox">
                <span>Credit Card number :</span>
                <input type="text" id="Payment_Number" name="Payment_Number" placeholder="1111-2222-3333-4444" required>
              </div>

              <div class="inputBox">
                <span>exp month :</span>
                <input type="text" id="Payment_Month" name="Payment_Month" placeholder="january" required>
              </div>



              <div class="flex">

                <div class="inputBox">
                  <span>exp year :</span>
                  <input type="text" id="Payment_Year" name="Payment_Year" placeholder="2023" required>
                </div>

                <div class="inputBox">
                  <span>CVV :</span>
                  <input type="text" id="Payment_Cvv" name="Payment_Cvv" placeholder="4321" required>
                </div>

              </div>

            </div>

            <div class="col">
              <h1 class="title">Order Summary</h1>

              <div class="inputBox1">
                <span>Premium Packs :</span>
                <label><?php if (isset($row['Premium_Name'])) {
                          echo $row['Premium_Name'];
                        } ?> Packs</label>
              </div>

              <div class="inputBox1">
                <span>1 Packs :</span>
                <label><?php if (isset($row['Premium_Selling'])) {
                          echo $row['Premium_Selling'];
                        } ?>/year</label>
              </div>

              <div class="inputBox1">
                <span>ALL Video :</span>
                <label style="color:green;">FREE</label>
              </div>

              <div class="inputBox1">
                <span>Amount Paid :</span>
                <label for=""><?php if (isset($row['Premium_Selling'])) {
                                echo $row['Premium_Selling'];
                              } ?></label>
              </div>


            </div>
          </div>
          <button type="submit" class="submit" name="btnpayment" id="btnpayment">Proceed to checkout</button>
        </form>
      </div>
    </div><?php ?>
    <?php
    ?>
</body>

</html>