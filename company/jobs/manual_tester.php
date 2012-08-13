<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

$job = "Manual Tester";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Manual Tester</title>
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
          <h3>Manual Tester</h3>
          <p>Greenliff is a small, dynamic and growing company specializing in software testing. We are currently seeking  manual testersat our Zurich Technopark office. </p>
          <p>Our projects cover the entire test cycle from requirement analysis to implementation and production for a variety of customers within the financial, telecom, medical and industrial sectors. Additionally, we develop testing solutions  including  FAST! Greenliff's  test automation tool.</p>
          <p>This is an opportunity to get into testing and develop your career in the testing environment.</p>

          <h3>We offer:</h3>
          <ul>
            <li>Work in interesting projects in small teams</li>
            <li>flexible work hours</li>
            <li>further education</li>
            <li>possibility for personal and career development</li>
          </ul>

        </div>

        <div class="spalte2">

          <h3>We are looking for candidates with:</h3>
          <ul>
            <li>an education in IT or similar</li>
            <li>experience in manual testing</li>
            <li>knowledge of test tools an asset</li>
            <li>written and spoken English desirable</li>
          </ul>

          <p>If you are interested in working with us or have more questions Peter Wlodarczak is happy to receive your dossier or answer any questions you might have.</p>
  	   </div> 
	
<?php include_once("../../includes/job_application.html"); ?>
      </div>
<?php include_once("../../includes/footer.html"); ?>
    </div>
  </body>
</html>
