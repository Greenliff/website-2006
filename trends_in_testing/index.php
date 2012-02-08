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
    <title>Greenliff: Agile Testing, Test nonstop, Softwaretest</title>
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Agile Testing, Test nonstop, Softwaretest, Fast, Zurich, Zuerich, Zürich, Agile Testing, Test nonstop, Softwaretest" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/trendsintesting.css" media="screen" />
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
      <div id="content">
        <div class="spalte1">
          <h1>Trends in Testing 2012</h1>
          <p>Time-to-Market ist dominierender Wettbewerbsfaktor &ndash; auch und besonders bei Softwareprodukten. Durch Einsatz agiler Methoden kann die Time-to-Market erheblich verkürzt werden. Der Entwicklungszyklus komprimiert sich bis auf ein- bis drei-wöchige Sprints.</p>
          <a href="/images/trends_in_testing/agile_testing.jpg"><img src="/images/trends_in_testing/agile_testing_small.jpg" alt="Poster Agile Testing" width="173" height="121" /></a>

        </div>

        <div class="spalte2">

          <p class="abstandOben">QS und Test müssen mit dieser höheren &laquo;Taktfrequenz&raquo; Schritt halten. Die Tester müssen Features in kurzen Intervallen prüfen und ihr Feedback unmittelbar geben können. Testen findet nonstop und automatisiert statt. Trends in Testing 2012 zeigt Ihnen, wie Sie Test nonstop in Ihrem Projekt implementieren, auch wenn Sie nicht agil entwickeln, sondern z.B. nach V-Modell, kann Test nonstop Integrations- und Systemtest deutlich beschleunigen.</p>
        </div>

        <div class="news">
          <h3>Über Trends in Testing</h3>
          <img src="../images/events/trends_in_testing.png" width="110" />
          <p>Die Veranstaltungsreihe &laquo;Trends in Testing&raquo; organisieren wir zusammen mit <a href="http://www.imbus.de/" target="_blank">imbus AG</a>, userem Partner in Deutschland. Bei Trends in Testing werden Sie über die neuesten Entwicklungen im Bereich Software Qualitäts-<br />sicherung  und -Test informiert.
          Die Mischung aus Best Practices und Forschungsergebnissen in Kombination mit Beispielen zur konkreten Toolunterstützung macht die Veranstaltung in diesem Rahmen einzigartig.  In diesem Jahr geht der Ausblick in Richtung Test nonstop.</p>
          <p><a href="../docs/120403_TrendsinTestingZuerich.pdf">Veranstaltungs-Flyer</a> (pdf)</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
