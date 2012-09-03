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
    <title>Control the automatic execution and reporting of 3rd party test tools.</title> 
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="Fast! automatically executes various 3rd party test tools and reports all results in a uniform way. Plug-in architecture for integration of new tools." />
    <meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/products.css" media="screen" />
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
      <div id="content" class="products">
        <div class="spalte1">
          <h1>Fast!</h1>
          <p>We provide software solutions that automatically execute various 3rd party test tools and report all their results in a uniform way. It can accommodate a wide range of testing infrastructures: A single multi-processor machine simulating a mobile phone network can be integrated into FAST as easily as a network of different internet servers and load generators. The plug-in architecture of FAST aims at making it simple to integrate new test tools in terms of automatic execution and reporting.</p>
      </div>

        <div class="spalte2">
          <p class="abstandOben">The test results-often of format specific to the test tool that generated them-are parsed, archived, and presented in a user-configurable way. It is possible to combine the test results with information from other sources like e.g. bug-tracking, source versioning, or change request systems. Conversely, the test results are available for direct querying in the archive and can thus be integrated into existing reports.</p>
        </div> 
      
        <div class="news">
          <h3>Information Request</h3>
          <p>Please use our <a href="more_information.php?infos=Fast">online request form</a> to submit your inquiry.</p>
          <p>To download our white paper please click <a href="../docs/Greenliff_Fast_White_Paper_v.2.1.pdf" target="_blank">here</a> (pdf).</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
