<?php
session_start();
include 'database/database.php';
		 $Premium_Name=$_POST['txt2'];
		echo "hello sunil";
		$q="SELECT * FROM payment WHERE Premium_Id = '$Premium_Name'";
		$result=mysqli_query($conn,$q);
		$res=mysqli_fetch_array($result); 
	?>
      <div class="card col-md-6">
           <?php 
           	
           //echo $res['description'];
            header("location:buy.php?Id=".$res['Premium_Id']); ?>
      </div>

