<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

$job = "Performance Test Consultant";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Performance Test Consultant</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />  
    <link rel="stylesheet" type="text/css" href="/styles/print.css" media="print" />
    <!--[if IE 5]>
    <link href="/styles/ie5.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]--> 
    <!--[if IE 6]>
    <link href="/styles/ie6.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]--> 
    <!--[if IE 7]>
    <link href="/styles/ie7.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]-->
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_once("../../includes/google-analytics.html"); ?>
  </head>
  
  <body>
    <div id="abstand"></div>
    <div id="container">
<?php include_once("../../includes/printhead.php"); ?>
      <div id="left">
      <?php include_once("../../includes/navigation.php"); ?>
      </div>
      <div id="middle">
      </div>
      <div id="content" class="home">
        <div class="spalte1">
          <h3>Performance Test Consultant</h3>
          <p>You support our clients with the definition and execution of performance and load tests in an heterogeneous environment based on the clients current QA process.</p>

          <h3>Experience</h3>
          <ul>
            <li>2 years performance testing</li>
            <li>Experience with at least one test tool such as LoadRunner, WinRunner and QALoad</li>
            <li>J2EE, Webservers, and HTTP</li>
            <li>Multi-tier systems and intercommunication</li>
            <li>OS resource management</li>
            <li>Unix, shell scripting and perl [optional]</li>
            <li>Databases, design and optimization [optional]</li>
          </ul>

          <h3>Responsibilities</h3>
          <ul>
            <li>Doing technical analysis to identify and remove the bottlenecks</li>
            <li>Executing test cases using a test plan and matrix for performance engineering</li>
          </ul>
          </div>

          <div class="spalte2">
          <h3>Requirements</h3>
          <ul>
            <li>Solid IT knowledge based on a University degree or similar</li>
            <li>Good ability to communicate with the development team and report the status suitably</li>
            <li>Strong oral and written communication skills in English and in German</li>
            <li>Sound knowledge of testing practices particular for performance testing methodology, measurements, and key performance indicators</li>
          </ul>
          <a href="/docs/Greenliff_Job_Performance_Consultant.pdf" target="_blank" title="Performance Consultant">PDF Download</a></p>
	  </div> 
         
<?php include_once("../../includes/job_application.html"); ?>
      </div>
<?php include_once("../../includes/footer.html"); ?>
    </div>
  </body>
</html>
