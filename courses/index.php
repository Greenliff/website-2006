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
    <title>Greenliff: Certified Tester</title> 
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
      <div id="content" class="courses">
        <div class="spalte1">
          <h1>Training Courses</h1>
          <p>Greenliff organizes training courses for software and system testing professionals who would like to obtain the ISTQB&#174; software tester certification.</p> 
          <p>The <a href="background_information.php">ISTQB&#174; Certified Tester</a> curriculum is an international and universally accepted qualification scheme. It enables professionally qualified testers to be recognised by employers, customers and peers. And it raises the profile of software testers.</p>
          <a href="background_information.php"><img src="../images/istqb_ct.gif" width="134" height="101" alt="Logo ISTQB&#174; Certified Tester" /></a>

        </div>

        <div class="spalte2">

          <p class="abstandOben">We organize training courses both for the foundation and the advanced level. Courses are held in German or English. Open courses are scheduled regularly at our site in the Technopark in Zurich, Switzerland. Additionally, we are happy to give training courses at your corporate location.</p>
          <p>All seminars are run by <a href="http://www.imbus.de/engl/" target="_blank">imbus</a>, an ISTQB&#174; accredited training provider. imbus has a long and outstanding track record in training professionals for the ISTQB&#174; Certified tester exams.</p>
        </div> 
        
        <div class="news">
        
          <h3>More Information</h3>
          <ul>
            <li><a href="background_information.php">ISTQB&#174; Certified</a></li>
            <li><a href="course_structure.php">Course Structure</a></li>
            <li><a href="upcoming_courses.php">Upcoming Courses and Subscription</a></li>
          </ul>
          <p>To download our flyer with more details about how to obtain the ISTQB&#174; certification, click <a href="../docs/EN_flyer_6seitig.pdf" target="_blank">here</a> (pdf).<br />
          To download the flyer in german click <a href="../docs/DE_flyer_6seitig.pdf" target="_blank">here</a> (pdf).</p>
          <p>Please use our <a href="more_information.php?infos=CertifiedTester">online request form</a> to submit your inquiry for a company course at your site.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
