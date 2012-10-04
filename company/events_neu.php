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
    <title>Greenliff: Events</title>
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
      <div id="scrollcontent">
        <h1>News and Events</h1>

        <div class="company" style="margin-top:10px;">
          <div class="spalte1">
            &nbsp;
          </div>

          <div class="spalte2Breit">
            <h2>Zürich, 20. November 2012</h2>
            <h3 style="padding-top: 11px;"><a href="../trends_in_testing/">Brauchen Agile Software-Projekte eine Prozessverbesserung?</a></h3>
            <p>Ort: Technopark Zürich<br />
               Referenten: Dr. Ernest Wallmüller, Carl Worms, Martin Voss<br />
               <a href="121120_sign-in.php">Anmeldung</a><br />
               <a href="../docs/Agile_Software_Qualitaetsverbesserung_14092012.pdf" target="_blank">Weitere Informationen</a>... (pdf).</p>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            &nbsp;
          </div>

          <div class="spalte2Breit" style="margin-top:10px;">
            <h2>Zurich, 28. November 2012</h2>
            <div class="spalte2Breit" style="padding-top: 11px;">
              <h3>Crowd &amp; Cloud based Testing</h3>              
              <p>Ort: Primetower Zurich<br />
                 Topics:</p>
              <ol>
                <li>The Crowd in the Cloud (Carl Esposti, Founder and CEO crowdsourcing.org)</li>  
                <li>eBay's Crowd Testing Strategy (Michael Palotas, Head Quality Engineering Europe, eBay International)</li> 
                <li>How Crowd Testing works (Dieter Speidel, CEO PASS Group)</li> 
                <li>Cloud Scale Testing (Joachim Büchse, Managing Director Greenliff)</li>             
              </ol>
              <p><a href="121128_sign-in.php">Registration</a><br />
              <a href="../docs/Event_Agenda_Cloud_Crowd_based_On-Demand_Testing.pdf" target="_blank">More information</a>... (pdf)</p>
            </div>
          </div>
        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
