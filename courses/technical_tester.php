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
    <title>Greenliff: Technical Tester-ISTQB&#174;-Certified Tester Advanced Level</title> 
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
      <div id="scrollcontent" class="coursesBlank">
        <div class="startspalte">
          <h1>Technical Tester - ISTQB&#174; Certified Tester Advanced Level</h1>

          <p>This training course presents a comprehensive set of methods and techniques for deriving and specifying software tests at the white box level. On completing the course, participants are able to select and apply techniques for test case derivation such as control flow or data flow testing as well as static and dynamic analysis. They will also be familiar with supplementary non-functional techniques such as reliability testing, usability testing, performance, load and stress testing.</p>

          <p>Test tools are also considered. The various software testing tools available are reviewed and their application fields and limits discussed. Participants will discover which tools could support their work, and learn how to avoid potential pitfalls in selection and implementation.</p>
          
          <p>This seminar is the ideal preparation for the Technical Tester examination - part of the "ISTQB&#174; Certified Tester Advanced Level" certification. In preparation for the exam, participants are familiarized with the subject matter behind the test standard and deepen their understanding by working through tool demonstrations and case studies. It is possible to take the examination directly at the end of the seminar.</p>
          
          <h3>Contents</h3>
          <div class="spalte1">
          	<ul>
          		<li>Structural techniques: control flow based
                <ul>
                  <li>Statement and branch coverage</li>
                  <li>Path coverage, LCSAJ and segment-pair coverage</li>
                  <li>Simple, multiple and minimal-multiple condition coverage</li>
                </ul>
              </li>
          	</ul>       
          </div>
          
          <div>
          	<ul>
              <li>Data flow-based structural techniques and coverage criteria</li>
              <li>Static and dynamic analysis</li>
          		<li>Non-functional techniques
                <ul>
                  <li>Usability testing</li>
                  <li>Performance, load and stress test</li>
                  <li>Reliability testing</li>
                </ul>
              </li>
          	</ul>
          </div>
        </div>

        <div class="spalte3" style="margin-left:20px;">
          <h3 class="abstandOben">Target audience</h3>
          <p>Software testers, programmers; developers who want to deepen their knowledge of test design and test specification, enabling them to develop better and more precise test cases and select, implement and use test tools; anyone interested in being certified as an ISTQB&#174; Certified Tester Advanced Level.</p>
          <h3>Prerequisites</h3>
          <p>We recommend completing the "<a href="foundation_level.php">ISTQB&#174; Certified Tester Foundation Level</a>" seminar before attending this course.</p>
          <h3>Seminar code</h3>
          <p>CT-AT</p>
          <h3>Duration</h3>
          <p>3 days</p>
          <h3>Price</h3>
          <p>2500</p>
          <p>All fees are given in CHF excluding legal VAT. When taking an exam, additional examination fees will be charged by the certification partner.</p>
          <p>To qualify to sit for an exam, you must have verifiable work experience in software or systems testing and hold an ISTQB&#174; Certified Tester Foundation Level certificate.</p>
        </div> 
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
