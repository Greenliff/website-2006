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
      <div id="scrollcontent" class="home">
        <h1>Visit us at the following events</h1>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <a href="../docs/110927_TrendsinTestingZuerich.pdf" target="_blank"><img src="../images/events/trends_in_testing.png" alt="Logo Trends in Testing" width="150" height="74" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zürich, 27. September 2011</h2>
              <h3 style="padding-top: 11px;"><a href="../docs/110927_TrendsinTestingZuerich.pdf" target="_blank">Testautomatisierung out-of-the-box!</a></h3>
              <p>Lohnt sich Testautomatisierung in der Praxis? - Nicht in jedem Fall.<br />
              Aber wir können Ihnen zeigen, wie man schnell und erfolgreich zu einer wirtschaftlichen Testautomatisierung kommt!</p>
              <p>&quot;Trends in Testing&quot; ist das Forum, um sich kompakt und umfassend über die neuesten Entwicklungen im Bereich Software Qualitätssicherung und -Test zu informieren.<br />
              Gemeinsam mit der <a href="http://www.imbus.de/veranstaltungen/trends-in-testing-schweiz/" target="_blank">imbus AG</a> starten wir das Pilotprojekt Trends in Testing Schweiz, um in diesem Jahr aufzuzeigen, welchen Mehrwert und welche Einsatzmöglichkeiten Ihnen Testautomatisierung heute bietet &ndash; &laquo;out of the box&raquo;!</p>
              <p>Im Rahmen der Veranstaltung stehen Ihnen unsere Experten und Referenten natürlich auch für Ihre individuellen Fragen gerne zur Verfügung.</p>
              <p><strong>Termin</strong>:<br />
              <strong>27. September 2011</strong>, Technopark Zürich, Technoparkstrasse 1, 8005 Zürich</p>
              <p>Die Veranstaltung ist kostenfrei und beginnt um 13:00 Uhr.</p>
              <p>Die ausführliche <b>Programmbeschreibung und Ihr Anmeldeformular</b> finden Sie im <a href="../docs/110927_TrendsinTestingZuerich.pdf" target="_blank">Veranstaltungsflyer</a>.</p>
          </div>
        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
