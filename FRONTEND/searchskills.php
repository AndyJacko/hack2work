<?php 
include("dbcon.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM tbl_customer WHERE id = 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet" crossorigin="anonymous">

    <title>DWP - UNIVERSAL CREDIT - SEARCH SKILLS</title>
  </head>
  <body>    
    <div class="pageHeader" onclick="window.location.href='/futureupdates.php'"><h1>DWP - UNIVERSAL CREDIT - SEARCH SKILLS</h1></div>
    <div class="searchtitle"><h2>THESE JOBS ARE MATCHED WITH SKILLS YOU CURRENTLY HAVE</h2></div>
    <div class="content">
      <div class="contentLeft">

      <div class="customerDetails">
          <div class="detailsHeader"><strong>CUSTOMER SERVICE ADVISOR</strong></div>
          <div class="customerinfo">
            <p><strong>Some Hospitality Company, Manchester, M1</strong></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p><strong>Job Skills Required:</strong> Focused, Punctual, Assertive, Time Management, Listening - <strong>You have 5 of 5 Skills Required</strong></p>
          </div>
        </div>              

        <div class="customerDetails">
          <div class="detailsHeader"><strong>SHOP CASHIER</strong></div>
          <div class="customerinfo">
            <p><strong>Some Shop Company, Manchester, M2</strong></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p><strong>Job Skills Required:</strong> Focused, Punctual, Assertive, Time Management, Handling Cash - <strong>You have 4 of 5 Skills Required</strong> - <a href="">Get Missing Skills</a></p>
          </div>
        </div>

        <div class="customerDetails">
          <div class="detailsHeader"><strong>CARE SUPPORT WORKER</strong></div>
          <div class="customerinfo">
            <p><strong>Some Care Company, Manchester, M3</strong></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p><strong>Job Skills Required:</strong> Focused, Punctual, Assertive, Dealing With Public, Empathy - <strong>You have 3 of 5 Skills Required</strong> - <a href="">Get Missing Skills</a></p>
          </div>
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