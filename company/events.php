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
    <title>Upcoming Events</title>
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Z�rich" />
    <meta name="description" content="" />
    <meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
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
      <div id="scrollcontent">
        <h1>Upcoming events</h1>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <img src="../images/events/logo_art-of-technology.png" alt="Art of Technology" /></a>
          </div>

          <div class="spalte2Breit">
				<h2>Z�rich, 26. Oktober 2012</h2>
				<h3 style="padding-top: 11px;">
					[INSIGHT] Art of Technology AG<br />
					Aufbau und Betrieb eines automatisierten Testroboters f�r H�rger�te
				</h3>
				<p>
					Ort: Technopark Z�rich<br />
					Referent: Alexander Houben (Greenliff AG) &amp; Phonak<br />
					<a href="http://www.medical-cluster.ch/anmeldung_insight" target="_blank">Anmeldung</a><br />
               <a href="../docs/insight.pdf" target="_blank">Weitere Informationen (PDF)</a>
				</p>
          </div>
        </div>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">&nbsp;</div>

          <div class="spalte2Breit">
            <h2>Z�rich, 20. November 2012</h2>
            <h3 style="padding-top: 11px;">Brauchen Agile Software-Projekte eine Prozessverbesserung?</h3>
            <p>
					Ort: Technopark Z�rich<br />
               Referenten: Dr. Ernest Wallm�ller (Qualit�t & Informatik), Carl Worms (Credit Suisse), Martin Voss (Nixdorf)<br />
               <a href="121120_sign-in.php">Anmeldung</a><br />
               <a href="../docs/Agile_Software_Qualitaetsverbesserung_14092012.pdf" target="_blank">Weitere Informationen (PDF)</a>
				</p>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">&nbsp;</div>

          <div class="spalte2Breit" style="margin-top:10px;">
            <h2>Zurich, 28. November 2012</h2>
            <h3 style="padding-top: 11px;">Crowd &amp; Cloud based Testing</h3>              
            <p>
               Ort: Primetower Zurich<br />
               Topics:
            </p>
            <ul>
              <li>The Crowd in the Cloud (Carl Esposti, Founder and CEO crowdsourcing.org)</li>  
              <li>eBay's Crowd Testing Strategy (Michael Palotas, Head Quality Engineering Europe, eBay International)</li> 
              <li>How Crowd Testing works (Dieter Speidel, CEO PASS Group)</li> 
              <li>Cloud Scale Testing (Joachim B�chse, Managing Director Greenliff)</li>             
            </ul>
            <p>
              <a href="121128_sign-in.php">Registration</a><br />
              <a href="../docs/Event_Agenda_Cloud_Crowd_based_On-Demand_Testing.pdf" target="_blank">More information (PDF)</a>
            </p>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">&nbsp;</div>

          <div class="spalte2Breit" style="margin-top:10px;">
            <h2>Zurich, 6./7. M�rz 2013</h2>
				<h3 style="padding-top: 11px;">Ranorex</h3>
				<p>
					Ort: Technopark Z�rich<br />
				</p>
				<ul>
					<li>1. Tag: 3 - 4 Praxisvortr�ge von bereits bestehenden Ranorex Kunden in der Schweiz/Deutschland</li>
					<li>2. Tag: Workshop</li>
				</ul>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" />
          </div>

          <div class="spalte2Breit" style="margin-top:10px;">
            <h2>Zurich, 13. March 2013</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>
          </div>
        </div>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <img src="../images/events/trends_in_testing.png" alt="Logo Trends in Testing" width="150" height="74" />
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 13. April 2012</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3 style="padding-top: 11px;">Trends in Testing 2013</h3>
            </div>
          </div>
        </div>

					


      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>