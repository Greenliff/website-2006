<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Partners</title>
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/partners.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/print.css" media="print" />
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
      <div id="content" class="partners">

        <div class="spalte1">
          <div class="center" style="width: 150px;height:110px;">
            <a href="http://www.imbus.de" target="_blank" class="partnerlogo"><img src="../images/partners/Imbus-partner.gif" alt="imbus AG" width="150" /></a>
          </div>
          <p>imbus AG is one of Germany's leading specialists for software quality assurance and test. With more than 110 personnel at four locations, imbus supports companies and IT-users in verifying and validating complex and demanding software systems, as well as in the optimization of their software development processes.</p>
        </div>

        <div class="spalte2">
          <div class="center" style="width: 150px;height:110px;">
            <a href="http://www.testmachine.ch/" target="_blank"><img src="../images/partners/logo_testmachine.png" width="130" alt="TestMachine" /></a>
          </div>
          <p>Sukha IT is the company behind the TestMachine, an end-to-end test automation framework for iPhone and iPad Apps. No jailbreaking needed! TestMachine enables you to write automated tests in Java and supports unattended nightly test runs and full configuration management out-of-the-box. </p>
        </div>
        <div class="spalte3">
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
