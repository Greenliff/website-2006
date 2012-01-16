<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

$job = "Web Application Engineer";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Web Application Engineer</title> 
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
	 <h3>Web Application Engineer</h3>
           <p>You will join our product development team to build a framework for distributed and automated test case execution and contribute to the core components. Additionally, you will help our clients to develop and execute test cases.</p> 
	   
	  <h3>Experience</h3>
	    <ul>
               <li>Ajax, Ruby on Rails</li>
	       <li>Java, JavaScript, HTML, XML</li>
               <li>.NET, Python, Perl [optional]</li>
               <li>Heterogeneous (UNIX, Windows) and distributed development environments</li>
	       <li>Databases (MySQL)</li>
	    </ul>

	  <h3>Responsibilities</h3>
           <ul>
             <li>Enhance and extend the GUI layer that presents the results stored in the DB</li>
	     <li>Strengthen our core development team</li>
          </ul>
          </div>

          <div class="spalte2">
	    <h3>Requirements</h3>
	    <ul>
	      <li>Graphical design background [optional]</li>
	      <li>Sound IT knowledge based on a University degree or similar</li>
              <li>Team worker with the ability to work autonomously</li>
	      <li>Follow a structural and methodological approach</li> 
	      <li>Open to work with cutting-edge technologies</li>
              <li>Development experience [optional]</li>
	    </ul>
              <a href="/docs/Greenliff_Job_Web_Application_Engineer.pdf" target="_blank" title="Automation Engineer">PDF Download</a></p>
	  </div> 
	
 <?php include_once("../../includes/job_application.html"); ?>
      </div>
<?php include_once("../../includes/footer.html"); ?>
    </div>
  </body>
</html>
