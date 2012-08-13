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
    <title>Greenliff: Service Portfolio</title>
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="Our software- testing services are measure-tailored. Our offering includes testing services customizable to your needs. The services range from handling a single test project to full responsibility of your testing activities on an ongoing basis." />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/portfolio.css" media="screen" />
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
      <div id="content" class="portfolio">
        <div class="spalte1">
          <h2>Software testing services specific to your needs.</h2>
          <p>Our knowledge, resources, and state-of-the-art test consulting and services are customized to fit your needs. We can take end-to-end responsibility for one or more software testing tasks or provide software test professionals for selective tasks. Our engineers can work with your existing tools or bring in other, established testing products. And we carefully consider your development and testing process and integrate with it.</p>

        </div>

        <div class="spalte2">
          <h2>How do we work?</h2>
          <p>Our consultancy includes coaching and guidance in all software testing activities. We are technology independent and tool agnostic. We develop concepts and solutions, but we like to participate in the implementation too. We identify critical test data, develop test plans, select appropriate tools, execute tests, define and produce test reports, analyze results and recommend any necessary corrections.<br />
          Everything <em>including the know-how</em> is given to you as part of our service.</p>

        </div>

        <div class="spalte3">
          <h2>In-house and off site services.</h2>
          <p>Our offering includes either in-house, off site or offshore testing services customizable to your needs. The services range from handling a single test project to taking full responsibility of your testing activities on an ongoing basis.<br />
          If you are considering off-shoring your testing, we can help with that too!</p>

          <h2 style="margin-top:25px;">Our service portfolio</h2>
          <ul>
	         <li><a href="test_consultancy.php">Test Consultancy </a></li>
            <li><a href="test_engineering.php">Test Engineering</a></li>
          	<li><a href="test_automation.php">Test Automation</a></li>
          	<li><a href="performance_testing.php">Performance Testing</a></li>
          	<li><a href="financial_application_testing.php">Financial Application Testing</a></li>
          	<li><a href="mobile_application_testing.php">Mobile Application Testing</a></li>
          	<li><a href="managed_testing_services.php">Managed Testing Services</a></li>
          </ul>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
