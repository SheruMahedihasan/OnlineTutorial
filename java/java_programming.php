<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Unique Developer</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				
		}

		body
		{
			

		}



		#mainpagecontent
		{
			background-color: white;
			margin-top: 80px;
			height: auto;
			box-shadow: 5px 5px 5px 5px #ccc; 
			border-color: #ccc;


		}
		.content
		{
			color: black !important;
		}

	</style>
</head>
<body>


	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			
			<?php
                   
					$servername = "localhost";
					$username = "root";
					$password = "";
					$db_name= "online";
					
					// Create connection
					$conn = new mysqli($servername, $username, $password,$db_name);
					
					// Check connection
					if ($conn->connect_error) {
					  die("Connection failed: " . $conn->connect_error);
					}
				
					
					$sql = "SELECT * FROM Topicsa WHERE Course_Name = 'html'";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) { ?>
					  <form action="fetch_main_content.php" method="POST">
						<input type="hidden" name="txt1" value="<?php echo $row["Id"] ?>">
						<button class="list-group-item list-group-item-action">
						  <li style="width: 300px; list-style: none;"><?php echo $row["Topics_Name"] ?></li>
						</button>
					  </form>
					<?php } ?>

		</ul>
	</div>

		 <!------Side bar ends---->

 		<!------java main content starts ---->

	<div id="mainpagecontent" class="shadow">
		
		<div class="content">
			<p>

			<?php

			if (isset($_SESSION['Topics_Description'])) {
				echo $_SESSION['Topics_Description'];
			}

			  ?>
			</p>
		
		</div>
			
		<button id="btn_next">Next</button>
	
	</div>


	
		<!------java main content Ends ---->



		<!------youtube subscribe button starts---->

<div id="yt"  class="g-ytsubscribe" data-channelid="UCxwf74gbHaiHHJ7XxZ51JyA" data-layout="full" data-count="default"></div>

		
		<!------youtube subscribe button Ends---->


		<!-- 	<script type="text/javascript">
		
		function opensidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='250px';
			document.getElementById('mainpagecontent').style.marginLeft='250px';
		}

		function closesidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='0';
			document.getElementById('mainpagecontent').style.marginLeft='0px';			
		}

	</script>
 -->

 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>

</body>
</html>