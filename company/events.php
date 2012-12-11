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


        <div class="event">
          <div class="spalte1">
            <a href="http://www.ranorex.com/" target="_blank"><img src="../images/events/ranorex_logo.png" alt="Ranorex" /></a>
          </div>

          <div class="spalte2Breit" style="">
            <h2>Z�rich, 6./7. M�rz 2013</h2>
				<h3 style="padding-top: 11px;padding-bottom: 5px;">Ranorex</h3>
				<p>
					Ort: Technopark Z�rich<br />
				</p>
				<ul>
					<li>1. Tag: 3 - 4 Praxisvortr�ge von bereits bestehenden Ranorex Kunden in der Schweiz/Deutschland</li>
					<li>2. Tag: Workshop</li>
				</ul>
          </div>
        </div>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <img src="../images/events/trends_in_testing.png" alt="Logo Trends in Testing" width="150" height="74" />
          </div>

          <div class="spalte2Breit">
            <h2>Z�rich, 19. M�rz 2013</h2>
            <h3 style="padding-top: 11px;">Trends in Testing 2013</h3>
				<br />
				Ort: Holiday Inn, Z�rich Oerlikon<br /><br />
				Neue Norm f�rs Testen: Testen wird einfacher!<br /><br />
				Diverse Themen �ber die neue TestNorm und was f�r Benefits daraus entstehen bei richtiger Anwendung/Umsetzung.
          </div>
        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>