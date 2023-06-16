<?php 
 include '../database/database.php';


if (isset($_POST['delete'])) {
    $sql = "DELETE FROM topicsa WHERE Id ={$_POST['Id']}";
    if ($conn->query($sql) == TRUE) {

      header("location:Topicsadd.php");
      
      
    } else {

      echo "Unable to Delete Data: " . $conn->error;
    }
  }

?>