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
          <p>Click skill to remove.</p>
          <?php while($rowjobskills = mysqli_fetch_assoc($resultjobskills)) { ?>  
          <div class="jobskills"><a href="deletejobskills.php?id=<?php echo $rowjobskills["id"]; ?>"><?php echo $rowjobskills["skillname"]; ?></a></div>             
          <?php } ?>           
          </div>
        </div>  

        <div class="customerDetails">
          <div class="detailsHeader">CUSTOMER PERSONAL SKILLS</div>
          <div class="customerinfo">
          <p>Click skill to remove.</p>
          <?php while($rowperskills = mysqli_fetch_assoc($resultperskills)) { ?>  
          <div class="personalskills"><a href="deletepersonalskills.php?id=<?php echo $rowperskills["id"]; ?>"><?php echo $rowperskills["skillname"]; ?></a></div>             
          <?php } ?>           
          </div>          
        </div>  


       <div class="addskillscontainer">

        <div class="addskills">
          <div class=""><strong>ADD NEW JOB SKILLS</strong></div>
          <div class="skillsform">
            <form method="post" action="/insertskills.php">
              <input type="hidden" name="userid" value="<?php echo $rowperskills["id"]; ?>">
              <div>
                <p>Skill: </p>      
                <input type="text" name="name1">        
              </div>           
              <div>
                <p>Skill: </p>      
                <input type="text" name="name2">        
              </div>           
              <div>
                <p>Skill: </p>      
                <input type="text" name="name3">        
              </div>           
              <div>
                <p>Skill: </p>      
                <input type="text" name="name4">        
              </div> 
              
              <button type="submit">ADD JOB SKILLS</button>
            </form>           
          </div>
        </div>  


        <div class="addskills">
          <div class=""><strong>ADD NEW PERSONAL SKILLS</strong></div>
          <div class="skillsform">
            <form method="post" action="/insertpersonalskills.php">
              <input type="hidden" name="userid" value="<?php echo $rowperskills["id"]; ?>">
              <div>
                <p>Skill: </p>      
                <input type="text" name="name1">        
              </div>           
              <div>
                <p>Skill: </p>      
                <input type="text" name="name2">        
              </div>           
              <div>
                <p>Skill: </p>      
                <input type="text" name="name3">        
              </div>           
              <div>
                <p>Skill: </p>      
                <input type="text" name="name4">        
              </div> 
              
              <button type="submit">ADD PERSONAL SKILLS</button>
            </form>           
          </div>
        </div> 


        </div>

      </div>


      <div class="contentRight">
        <div class="profilepic"><img src="/images/anonymous-person.png" alt="profile"></div>
        <p><?php echo nl2br($row["name"]); ?></p>
        <button type="button" onclick="window.location.href='/searchjobs.php'">SEARCH JOBS</button>
        <button type="button" onclick="window.location.href='/searchskills.php'">SEARCH SKILLS</button>
        <button type="button" onclick="window.location.href='/generateskills.php'">GENERATE SKILLS</button>
        <br>
        <a href="futureupdates.php">Future Updates</a>
        <br><br><br>
        <div>
          <strong>AUTOMATIC JOB NOTIFICATIONS</strong>
          <div>Opt In: <input type="checkbox" value="" checked></div>
          <br>
          <div>Frequency: </div>

          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
            <label class="form-check-label" for="inlineRadio1">Hour</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Day</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
            <label class="form-check-label" for="inlineRadio3">Week</label>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>