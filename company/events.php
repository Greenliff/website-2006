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
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
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

        <div class="event">
          <div class="spalte1">
            <img src="../images/event.png" /><br ><br />
				<h3>Greenliff Afternoon Talks</h3>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 28. November 2012</h2>
            <h3 style="padding-top: 11px;padding-bottom: 5px;">
					<a href="121128_sign-in.php">Crowd &amp; Cloud based Testing</a>
				</h3>
				How can you utilize millions of testers on the Internet to execute your test project in quick and cost-saving manner?<br /><br />
				Organised in cooperation with <a href="http://www.pass.ch/" target="_blank">PASS Technology AG</a><br />              
            Location: Clouds on top of Prime Tower Zurich<br /><br />
            Topics:
            <ul>
              <li>
					The Crowd in the Cloud <br />
					Carl Esposti (Founder and CEO crowdsourcing.org)
				  </li>
              <li>
					eBay's Crowd Testing Strategy<br />
					Michael Palotas (Head Quality Engineering Europe, eBay International)
				  </li>
              <li>
					How Crowd Testing works <br />
					Dieter Speidel (CEO PASS Group)
				  </li>
              <li>
					Cloud Scale Testing <br />
					Joachim Büchse (Managing Director Greenliff)
				  </li>
            </ul>
            <p>
              <a href="../docs/Event_Agenda_Cloud_Crowd_based_On-Demand_Testing.pdf" target="_blank">More information (PDF)</a><br />
              <a href="121128_sign-in.php">Registration</a>
            </p>
          </div>
        </div>

        <div class="event">
          <div class="spalte1" style="padding-top: 11px">
            <a href="http://www.ranorex.com/" target="_blank"><img src="../images/events/ranorex_logo.png" alt="Ranorex" /></a>
          </div>

          <div class="spalte2Breit" style="margin-top:10px;">
            <h2>Zürich, 6./7. März 2013</h2>
				<h3 style="padding-top: 11px;padding-bottom: 5px;">Ranorex</h3>
				<p>
					Ort: Technopark Zürich<br />
				</p>
				<ul>
					<li>1. Tag: 3 - 4 Praxisvorträge von bereits bestehenden Ranorex Kunden in der Schweiz/Deutschland</li>
					<li>2. Tag: Workshop</li>
				</ul>
          </div>
        </div>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <img src="../images/events/trends_in_testing.png" alt="Logo Trends in Testing" width="150" height="74" />
          </div>

          <div class="spalte2Breit">
            <h2>Zürich, 19. März 2013</h2>
            <h3 style="padding-top: 11px;">Trends in Testing 2013</h3>
          </div>
        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>