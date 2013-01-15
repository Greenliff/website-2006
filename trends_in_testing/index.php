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
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Greenliff: Agile Testing, Test nonstop, Softwaretest</title>
	<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
	<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/trendsintesting.css" media="screen" />
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
      <div id="content">
        <div class="spalte1">
          <h1>Testen wird einfacher! Neue Norm fürs Testen</h1>
          <p>
				Qualität ist ein massgeblicher Wettbewerbsfaktor für Softwareprodukte. Die steigenden Anforderungen an den IT-Markt sind untrennbar mit Qualitätssicherung und Test verbunden.
          </p>

          <p>
				Immer komplexer werdende Entwicklungsprozesse müssen in kurzen Zeitabständen bewältigt werden, was auch die Ansprüche an die Testbranche kontinuierlich wachsen lässt.
				Tests müssen vergleichbar, messbar und auch für Fachbereichsmitarbeiter verständlich sein, häufig auch, um gesetzliche Vorgaben erfüllen zu können.
          </p>

          <p>
				Lassen Sie sich im Rahmen der <strong>Trends in Testing 2013</strong> erklären, wie Sie die in Standards verfügbare jahrzehntelange Testerfahrung vieler Testspezialisten sofort für sich und Ihr Unternehmen nutzen können.
          </p>
        </div>

        <div class="spalte2">
          <p class="abstandOben">
				Der Standard arbeitet für Sie! Holen Sie sich Rückendeckung für eine klare Struktur in Ihrem Testprozess.
          </p>

          <p>
				Unsere Experten nehmen den Normen ihren vorurteilsbehafteten Ruf von "trockener Materie" und zeigen, dass jedes Projekt, ob klassisch angelegt oder agil durchgeführt, von Standards, wie etwa <strong>ISO/IEC 29119</strong>, partizipieren kann.
			</p>
		</div>

        <div class="news">
          <h3>Über Trends in Testing</h3>
          <img src="../images/events/trends_in_testing.png" width="110" alt="Trends in testing" />
          <p>Die Veranstaltungsreihe &laquo;Trends in Testing&raquo; organisieren wir zusammen mit <a href="http://www.imbus.de/" target="_blank">imbus AG</a>, userem Partner in Deutschland. Bei Trends in Testing werden Sie über die neuesten Entwicklungen im Bereich Software Qualitäts-<br />sicherung  und -Test informiert.
          Die Mischung aus Best Practices und Forschungsergebnissen in Kombination mit Beispielen zur konkreten Toolunterstützung macht die Veranstaltung in diesem Rahmen einzigartig.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
