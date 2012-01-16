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
    <title>Greenliff: Certified Tester - Background information</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/courses.css" media="screen" />
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
      <div id="content" class="courses">
        <div class="spalte1">
          <h1>ISTQB&#174; Certified Tester</h1>
          <p>With the ISTQB&#174; Certified Tester certificate you are studying a test standard that is well established and broadly accepted throughout Europe, America and Asia.</p>
          <p>It is the International Software Testing Qualifications Board (ISTQB) to support 
a single, universally accepted, international qualification scheme, aimed at software and system testing professionals, by providing the core syllabi and by setting guidelines for accreditation and examination for national boards.</p>
          <p>The contents of each syllabus are taught as courses by training providers, which have been accredited by national boards. They are globally marketed under the brand name "ISTQB&#174; Certified Tester"</p>
        </div>

        <div class="spalte2">
          <p class="abstandOben">All seminars are run by <a href="http://www.imbus.de/engl/" target="_blank">imbus</a>, an ISTQB&#174; accredited training provider. imbus was the first German training organization being accredited. imbus is accredited by the German Testing Board for teaching german courses and by the Indian Testing Board for english courses (both Foundation Level and Advanced Level).</p>
          <img src="../images/istqb_al_acc.gif" width="113" height="109" alt="Accredited Tester" />
        </div> 
        
        <div class="news">        
          <h3>Links</h3>
          <ul>
            <li><a href="http://www.istqb.org/" target="_blank">International Software Testing Qualifications Board (ISTQB)</a></li>
            <li><a href="http://www.swiss-testing-board.ch/" target="_blank">Swiss Testing Board (STB)</a></li>
            <li><a href="http://www.german-testing-board.info/de/index.shtm" target="_blank">German Testing Board (GTB)</a></li>
            <li><a href="../docs/ProTester-Jan04-Linz-et-al.pdf" target="_blank">Press</a> (pdf)</li>
          </ul>
          <p>Please use our <a href="more_information.php?infos=CertifiedTester">online request form</a> to obtain more information on the ISTQB&#174; Certified Tester.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
