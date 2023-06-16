
<?php
session_start();
include 'database/database.php';
		 $id=$_POST['txt1'];
		echo "hello sunil";
		$q="select * from Topicsa where id=$id";
		$result=mysqli_query($conn,$q);
		$res=mysqli_fetch_array($result); 
	?>
      <div class="card col-md-6">
           <?php $_SESSION['Topics_Description']=$res['Topics_Description'];
           	
           //echo $res['description'];
            header("location:html.php?Course_Name=".$res['Course_Name']); ?>
      </div>

