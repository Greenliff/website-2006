<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

$job = "Finance Test Consultant";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Finance Test Consultant</title> 
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
          <h3>Finance Test Consultant</h3>
              <p>You support our clients with the definition, implementation and execution of test tools and test cases in an heterogeneous environment based on the clients current QA process.</p>

	  <h3>Experience</h3>
	    <ul>
               <li>Several years of testing</li>
               <li>Best practises in software testing</li>
               <li>Standard test concepts and methods</li>
               <li>Experience with at least one test tool such as LoadRunner, WinRunner and QALoad</li>
               <li>Multi-tier systems and intercommunication</li>
               <li>Shell scripting</li>
	    </ul>

	  <h3>Responsibilities</h3>
           <ul>
             <li>Create test tools and test cases</li>
             <li>Support the existing team with test execution</li>
             <li>Define test approaches and test concepts</li>
          </ul>
          </div>

          <div class="spalte2">
	    <h3>Requirements</h3>
	    <ul>
	      <li>Solid banking and IT knowledge based on a University degree or similar</li>
	      <li>Good ability to communicate with the development and test team and report the status suitably</li>
	      <li>Strong oral and written communication skills in English and in German</li>
              <li>Sound knowledge of testing practices particular testing methodology and key performance indicators</li>
	    </ul>
	  </div> 
         
<?php include_once("../../includes/job_application.html"); ?>
      </div>
<?php include_once("../../includes/footer.html"); ?>
    </div>
  </body>
</html>
