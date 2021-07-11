<?php
  include("dbcon.php");
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if ($_POST['name1'] != "") {
    $sql = "INSERT INTO tbl_personalskills (userid, skillname) VALUES (1, '". $_POST["name1"] ."')";    //"INSERT INTO tbl_jobskills (userid, skillname)  VALUES (1,popo)";
    mysqli_query($conn, $sql);
  }  
  
  if ($_POST['name2'] != "") {
    $sql = "INSERT INTO tbl_personalskills (userid, skillname) VALUES (1, '". $_POST["name2"] ."')";    //"INSERT INTO tbl_jobskills (userid, skillname)  VALUES (1,popo)";
    mysqli_query($conn, $sql);
  }

  if ($_POST['name3'] != "") {
    $sql = "INSERT INTO tbl_personalskills (userid, skillname) VALUES (1, '". $_POST["name3"] ."')";    //"INSERT INTO tbl_jobskills (userid, skillname)  VALUES (1,popo)";
    mysqli_query($conn, $sql);
  }

  if ($_POST['name4'] != "") {
    $sql = "INSERT INTO tbl_personalskills (userid, skillname) VALUES (1, '". $_POST["name4"] ."')";    //"INSERT INTO tbl_jobskills (userid, skillname)  VALUES (1,popo)";
    mysqli_query($conn, $sql);
  }
 
  header("Location: /");
?>