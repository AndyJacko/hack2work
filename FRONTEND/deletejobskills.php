<?php
  include("dbcon.php");
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "DELETE FROM tbl_jobskills WHERE id = (". $_GET["id"] .")";
  mysqli_query($conn, $sql); 
  header("Location: /");
?>