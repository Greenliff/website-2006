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
    <title>Greenliff: Products &#38; Solutions</title> 
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
          <h1>AgitarOne</h1>
          <p>AgitarOne supports your move to unit testing. As a comprehensive, fully integrated, unit testing solution, AgitarOne brings automation to each of the distinct activities of unit testing.</p>

          <p>AgitarOne makes it easy to adopt unit testing, both on new development projects and on the maintenance and enhancement of legacy code. With AgitarOne, you can cut bugs from development to QA up to 90%, driving quality upstream in your development process, and saving both time and money.</p>

        
      </div>

        <div class="spalte2">
          <h1>Developer Testing</h1>
          <p>Greenliff has a strong track record and broad experience in unit testing. Our consultants can help you in all aspects related to developer testing.</p>

          <p>We can coach your developers on their first steps and on advanced issues. We can define processes, set-up continuous integration, nightly tests, and reporting infrastructure. And we can help you with the development and maintenance of your unit test suites and mock objects.</p>
        </div> 
      
        <div class="news">
          <h3>More Information</h3>
          <ul>
            <li><strong>Automated JUnit Generation</strong><br />
            <a href="http://www.agitar.com/solutions/products/automated_junit_generation.html" target="_blank">Learn more</a> | <a href="http://www.agitar.com/downloads/demos/junit_gen/junitGen.html" target="_blank">view demo</a></li>
            <li><strong>Software Agitation</strong><br />
            <a href="http://www.agitar.com/solutions/products/software_agitation.html" target="_blank">Learn more</a> | <a href="http://www.agitar.com/downloads/demos/agi_demo/agiDemo.html" target="_blank">view demo</a></li>
            <li><a href="http://www.agitar.com/" target="_blank">Agitar</a></li>
          </ul>
          <p>As a Agitar reseller, Greenliff provides comprehensive product and services solutions to ensure customers' success with implementing developer testing.</p>
 
          <p>Please use our <a href="more_information.php?infos=AgitarOne">online request form</a> to submit your inquiry.</p>
        </div>
          
        <div class="bildlinks" style="clear:left">
          <img src="../images/AgitarOnePlatform.gif" width="237" height="120" alt="Illustration AgitarOne" />
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
