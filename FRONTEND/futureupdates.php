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

    <title>DWP - UNIVERSAL CREDIT - FUTURE UPDATES</title>
  </head>
  <body>    
    <div class="pageHeader" onclick="window.location.href='/'"><h1>DWP - UNIVERSAL CREDIT - FUTURE UPDATES</h1></div>
    <div class="searchtitle"><h2>THIS LIST CONSISTS OF HYPOTHETICAL FUTURE FEATURES</h2></div>
    <div class="content"> 

      <div class="customerDetails">
        <div class="detailsHeader"><strong>WORK COACH PORTAL</strong></div>
        <div class="customerinfo">            
          <p>The portal from the work coach perspective would offer notifications if/when a customer updates any of their skills or 
          information, so that the work coach can check or ammend those results.</p>
          <p>Work coach would be able to make changes to the customers profile and AI would send notification to the customer and a 
          selection of new found vacancies if any are available.</p>
          <p>Work coach and the AI would be able to see what skills a customer is missing and suggest ways of obtaining those skills 
          and opening the customer up to more opportunities.</p>
        </div>
      </div>     

      <div class="customerDetails">
        <div class="detailsHeader"><strong>ACCESSIBILITY FEATURES</strong></div>
        <div class="customerinfo">
          <ul>
            <li>Full reactive mobile first design.</li>
            <li>Using latest technology - React/Angular, NodeJS, MongoDB.</li>
            <li>Use semantic code for screen readers.</li>
            <li>Options for light/dark themes.</li>
            <li>Input fields would use autocomplete and suggestions to avoid typos.</li>
            <li>Different language options.</li>
            <li>Navigate the website without the use of a mouse.</li>
          </ul>
        </div>
      </div>              
        
      <div class="customerDetails">
        <div class="detailsHeader"><strong>LEARNING AI</strong></div>
        <div class="customerinfo">            
          <p>Over time the AI would use machine learning to offer more relevant jobs to the customer based on their 
          skills and past experience by using features that allow a customer to rate the quality of any matched jobs.</p>
          <p>AI would know when a customer has clicked to apply for a job and enter the details into the customer 
          Journal saving them from having to log into the portal and entering the details manually.</p>
          <p>Whenever new jobs are added to the portal the AI will match those up to local customers 
          who match experience and skills and send the customer notifications which they can fully opt in/out of and select the 
          frequency of those notifications.</p>
        </div>
      </div>       
        
      <div class="customerDetails">
        <div class="detailsHeader"><strong>PULL JOBS IN FROM OTHER LOCATIONS</strong></div>
        <div class="customerinfo">            
          <p>The AI would be able to search for jobs from other providers such as LinkedIn, Monster and Indeed using their APIs and 
          manipulate the results to include those jobs in any searches made by the customer.</p>
        </div>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>