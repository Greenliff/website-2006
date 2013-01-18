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
            <a href="http://www.ranorex.com/" target="_blank"><img src="../images/events/ranorex_logo.png" alt="Ranorex" /></a>
          </div>

          <div class="spalte2Breit" style="">
            <h2>Zürich, 6./7. März 2013</h2>
				<h3 style="padding-top: 11px;padding-bottom: 5px;">Ranorex - Best Practises in Test Automation</h3>
				<p>
					Ort: Technopark Zürich<br />
				</p>
				<a href="ranorex-sign-in.php">Anmeldung</a><br />
				<a href="../docs/2013-03-Best-Practice-Day-Zurich.pdf" target="_blank">Flyer</a>
          </div>
        </div>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <a href="../trends_in_testing/"><img src="../images/events/trends_in_testing.png" alt="Logo Trends in Testing" width="150" height="74" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zürich, 19. März 2013</h2>
            <a href="../trends_in_testing/"><h3 style="padding-top: 11px;">Trends in Testing 2013</h3></a>
				<br />
				Ort: Holiday Inn, Zürich Oerlikon<br /><br />
				<strong>Neue Norm fürs Testen: Testen wird einfacher!</strong><br /><br />
          </div>
        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>