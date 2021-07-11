<?php 
include("dbcon.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM tbl_customer WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$sqljobs = "SELECT * FROM tbl_commitments WHERE userid = 1";
$resultjobs = mysqli_query($conn, $sqljobs);

$sqljobskills = "SELECT * FROM tbl_jobskills WHERE userid = 1";
$resultjobskills = mysqli_query($conn, $sqljobskills);

$sqlperskills = "SELECT * FROM tbl_personalskills WHERE userid = 1";
$resultperskills = mysqli_query($conn, $sqlperskills);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet" crossorigin="anonymous">

    <title>DWP - UNIVERSAL CREDIT - CUSTOMER PROFILE</title>
  </head>
  <body>    
    <div class="pageHeader" onclick="window.location.href='/futureupdates.php'"><h1>DWP - UNIVERSAL CREDIT - CUSTOMER PROFILE</h1></div>
    <div class="searchtitle"><h2>THESE SKILLS HAVE BEEN GENERATED FROM YOUR JOB EXPERIENCE AND PERSONAL SKILLS</h2></div>
    <div class="content">
      <div class="contentLeft">
        <div class="customerDetails">
          <div class="detailsHeader">CUSTOMER DETAILS</div>
          <div class="customerinfo">
            <p><?php echo nl2br($row["address"]); ?></p>
            <p><?php echo nl2br($row["email"]); ?></p>
            <p><?php echo nl2br($row["telephone"]); ?></p>
          </div>
        </div>   

        <div class="customerDetails">
          <div class="detailsHeader">CUSTOMER JOB EXPERIENCE</div>
          <div class="customerinfo">
            <?php while($rowjobs = mysqli_fetch_assoc($resultjobs)) { ?>
              <p><?php echo nl2br($rowjobs["name"]); ?></p>   
            <?php } ?>  
          </div>
        </div>    

        <div class="customerDetails">
          <div class="detailsHeader">CUSTOMER JOB SKILLS</div>
          <div class="customerinfo">
          <?php while($rowjobskills = mysqli_fetch_assoc($resultjobskills)) { ?>  
            <div class="jobskills"><a href="deletejobskills.php?id=<?php echo $rowjobskills["id"]; ?>"><?php echo $rowjobskills["skillname"]; ?></a></div>             
          <?php } ?>           
          </div>
        </div>  

        <div class="customerDetails">
          <div class="detailsHeader">CUSTOMER PERSONAL SKILLS</div>
          <div class="customerinfo">
          <?php while($rowperskills = mysqli_fetch_assoc($resultperskills)) { ?>  
            <div class="personalskills"><a href="deletepersonalskills.php?id=<?php echo $rowperskills["id"]; ?>"><?php echo $rowperskills["skillname"]; ?></a></div>            
          <?php } ?>           
          </div>          
        </div> 
        
        
        <div class="generatedskills">
          <p><strong>Click Skills To Add To Profile</strong></p>
          <p><span><a href="insertgeneratedskill.php?name=Software Knowledge">Software Knowledge</a></span>  <span><a href="insertgeneratedskill.php?name=PHP Programming">PHP Programming</a></span>  <span><a href="insertgeneratedskill.php?name=Patience">Patience</a></span></p>
          <p><span><a href="insertgeneratedskill.php?name=Attentiveness">Attentiveness</a></span>  <span><a href="insertgeneratedskill.php?name=Industry Knowledge">Industry Knowledge</a></span>  <span><a href="insertgeneratedskill.php?name=Attention To Detail">Attention To Detail</a></span></p>
          <p><span><a href="insertgeneratedskill.php?name=Data Science">Data Science</a></span>  <span><a href="insertgeneratedskill.php?name=Adaptability">Adaptability</a></span>  <span><a href="insertgeneratedskill.php?name=Web Developer">Web Developer</a></span></p>
        </div>

      </div>


      <div class="contentRight">
        <div class="profilepic"><img src="/images/anonymous-person.png" alt="profile"></div>
        <p><?php echo nl2br($row["name"]); ?></p>
        <button type="button" onclick="window.location.href='/'">PROFILE</button>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>