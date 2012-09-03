<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Jobs</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
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
      <div id="scrollcontent" class="home">        
        <div class="spalte1">
          <p class="marker">Zurich, 24.10.2006</p>
        </div>
        
        <div class="spalte2">
          <img src="../images/istqb_klein.gif" width="97" height="79" alt="Logo ISTQB&#174; Certified Tester" />
        </div>
        
        <div class="spalte3">
          <h2>Greenliff to offer ISTQB&#174; Certified Tester trainings in collaboration with imbus.</h2>
          <p>Greenliff organizes both Foundation Level and Advanced Level courses, open courses and company courses, in English and in German. All seminars are run by <a href="http://www.imbus.de/engl/" target="_blank">imbus</a>, an ISTQB&#174; accredited training provider.<br />
          <a href="../courses/">Read more...</a></p>
        </div>        
        
        <div style="clear:left">
          <div class="spalte1">
            <p class="marker">Zurich, 21.07.2006</p>
          </div>
          
          <div class="spalte2">
            <a href="http://www.sqs-conferences.com/ch/index.htm" target="_blank"><img src="../images/events/sqs-conferences.gif" width="182" height="48" alt="SOFTWARE &amp; SYSTEMS QUALITY CONFERENCES" /></a>
          </div>
          
          <div class="spalte3">
            <p>Visit Greenliff at the <a href="http://www.sqs-conferences.com/ch/index.htm" target="_blank">SOFTWARE &amp; SYSTEMS QUALITY CONFERENCES</a> in Zürich from Sept 5th - Sept 6th at the Hotel Marriot</p>
          </div>        
        </div>       
        
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
