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
    <title>Greenliff: Software Health Check</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/products.css" media="screen" />
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
<?php include_once("../includes/printhead.php"); ?>
      <div id="left">
      <?php include_once("../includes/navigation.php"); ?>
      </div>
      <div id="middle">
      </div>
      <div id="content" class="productsBlank">
        <div class="spalte1">
          <h1>Sotograph</h1>
          
          <p>Sotograph is a powerful software analysis workbench. It can efficiently analyze very large software systems with several million lines of code.</p>

          <p>Sotograph extracts structural information and stores it in a central repository. This repository is used to perform very powerful analyses, such as structure, dependency, cycle, quality, what-if and impact analyses. The results are visualized both graphically and textually.</p>
          
          <p>Sotograph can compare different versions of a software system. This makes it is possible to investigate and monitor structural and qualitative evolution.</p>

        </div>

        <div class="spalte2">
          <h1>Software Health Check</h1>
          <ul>
            <li>Would you like to get an overview of the structure and communication paths of a large, complex or unknown software system?</li>
            <li>Do you need support for planning and execution of a re-engineering task?</li>
            <li>Are you asking for a detailed quality assessment of your application?</li>
          </ul>
          <p>Greenliff can help you with all of this. Using the Sotograph, we can provide a software health check for your business critical applications. Depending on the degree of details of the required results, such an assessment takes between two days and two weeks.</p>
        </div> 
      
        <div class="news">
          <h3>More Information</h3>
          <ul>
            <li><a href="http://www.software-tomography.com/" target="_blank">Software Tomography</a></li>
          </ul>
          <p>In a software health check carried out at your site, we can analyze structure, architecture conformance, understandability, extensibility and maintainability of your application.</p>
 
          <p>Please use our <a href="more_information.php?infos=Sotograph">online request form</a> to submit your inquiry.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
