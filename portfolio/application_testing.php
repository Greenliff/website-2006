<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Application Testing</title>
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="" />
    <meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/portfolio.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/print.css" media="print" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_once("../includes/google-analytics.html"); ?>
  </head>

  <body>
    <div id="abstand"></div>
    <div id="container">
<?php include_once("../includes/printhead.php"); ?>
      <div id="left">
      <?php include_once("../includes/navigation.php"); ?>
      </div>
      <div id="middle">
      </div>
      <div id="content" class="portfolio">
        <div class="spalte1">
          <h1>Financial Application Testing</h1>
          <p>Effective testing of financial applications can only be performed by engineers who have specific industry knowledge and the right software testing skills. Our consultants bring these competencies in addition to their comprehensive experience and unique track record in the financial industry.</p>
        </div>

         <div class="spalte2">
          <h1>Mobile Application Testing</h1>
          <p>Mobile application development is far more complex than development for standardized PCs or servers. There are many vendor specific APIs, proprietary kernels and operating systems, different screen sizes and MMIs. Furthermore, many mobile applications are to be deployed on hundreds of different mobile phones or devices, increasingly over the air! We have an outstanding track record on testing mobile applications running on all kinds of mobile phones, PDAs, and other embedded devices.</p>
         </div>

        <div class="news">
          <h3>Information Request</h3>
          <p>Please use our <a href="more_information.php?infos=FinancialApplications">online request form</a> to submit your inquiry.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
