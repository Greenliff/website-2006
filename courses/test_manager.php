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
    <title>Greenliff: Testmanager-ISTQB&#174;-Certified Tester Advanced Level</title>
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
      <div id="scrollcontent" class="coursesBlank">
        <div class="startspalte">
          <h1><a href="http://www.imbus.de/akademie/akademie-leistungen/kursuebersicht/" target="_blank">Testmanager - ISTQB&#174; Certified Tester Advanced Level</a></h1>

          <p>The training is divided into two main sections on test management and test process improvement.</p>

          <p>The test management section provides project managers and Testmanagers with the knowledge they need to successfully plan, control and monitor software tests within their projects (operative test management). Participants are shown how to introduce, anchor and continually improve software tests as an effective, established process within their company (strategic test management).</p>
          
          <p>Various documents related to test planning (IEEE Std. 829) are presented. The fundamental concepts of fault management (IEEE Std. 1044), risk management and test management are explained, and their interrelationships examined. The participants learn what quality information and fault statistics can be gained through the testing process, and how this objective test data can be used to make well-founded product-release decisions. This section also includes an overview of the various organizational designs seen in software testing practice. Participants are helped to choose the optimum organizational design for their own situation. A testing center case study shows the factors to be considered in the successful organization of software tests.</p>
          
          <p>When the test process has been set up and is running, the next stage is test process improvement. Adapting and optimizing the various processes is a constant challenge for the Testmanager. Participants learn various models of process improvement and discover how the models can be applied. The main focus is placed on adapted models for improving the test process. As a practical exercise, participants go through the steps of applying a process improvement model.</p>
          
          <p>The seminar is rounded off with an examination of the role of the tester within the company. The seminar discussed the special situation of the tester as well as the specialist knowledge and social skills he will need.</p>
          
          <p>This seminar is the ideal preparation for the Testmanager examination - part of the "ISTQB&#174; Certified Tester Advanced Level" certification. The course sticks closely to the subject matter behind the test standard and deepens understanding with case studies and exercises. It is possible to take the examination directly at the end of the seminar.</p>
          
          <h3>Contents</h3>
          <div class="spalte1">          	
        		<ul>
        			<li>Test process</li>
        			<li>Test planning, Test resource estimation</li>
        			<li>Test monitoring</li>
        			<li>Defect management</li>
        			<li>Risk management in testing</li>
        		</ul>    
          </div>
          
          <div>
          	<ul>
        			<li>Anchoring the test in the company, organizational designs for testing</li>
        			<li>Designing and setting up a test center</li>
        			<li>Process improvement for the test process</li>
        			<li>The test team</li>
        			<li>The role of the tester</li>
          	</ul>
          </div>
        </div>

        <div class="spalte3" style="margin-left:20px;">
          <h3 class="abstandOben">Target audience</h3>
          <p>Senior managers and CEOs of software companies, Testmanagers, project managers, quality managers, software development team leaders; anyone interested in the ISTQB&#174; Certified Tester Advanced Level certification.</p>

          <h3>Prerequisites</h3>
          <p>We recommend completing the "<a href="foundation_level.php">ISTQB&#174; Certified Tester Foundation Level</a>" seminar before attending this course.</p>
          <h3>Seminar code</h3>
          <p>CT-AMA<br />
             CT-AMA-I (intensive course)</p>
          <h3>Duration</h3>
          <p>6 days</p>
          <h3>Price</h3>
          <p>3150</p>
          <p>All fees are given in CHF excluding legal VAT. When taking an exam, additional examination fees will be charged by the certification partner.</p>
          <p>To qualify to sit for an exam, you must have verifiable work experience in software or systems testing and hold an ISTQB&#174; Certified Tester - Foundation Level certificate.</p>
        </div> 
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
