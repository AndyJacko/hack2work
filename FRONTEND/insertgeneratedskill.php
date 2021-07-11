<?php
  include("dbcon.php");
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($_GET['name'] != "") {
    $sql = "INSERT INTO tbl_jobskills (userid, skillname) VALUES (1, '". $_GET["name"] ."')";    //"INSERT INTO tbl_jobskills (userid, skillname)  VALUES (1,popo)";
    mysqli_query($conn, $sql);
  }  
  header("Location: /generatedskills.php");
?>