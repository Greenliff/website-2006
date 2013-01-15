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
          <h1>Testen wird einfacher! Neue Norm f�rs Testen</h1>
          <p>
				Qualit�t ist ein massgeblicher Wettbewerbsfaktor f�r Softwareprodukte. Die steigenden Anforderungen an den IT-Markt sind untrennbar mit Qualit�tssicherung und Test verbunden.
          </p>

          <p>
				Immer komplexer werdende Entwicklungsprozesse m�ssen in kurzen Zeitabst�nden bew�ltigt werden, was auch die Anspr�che an die Testbranche kontinuierlich wachsen l�sst.
				Tests m�ssen vergleichbar, messbar und auch f�r Fachbereichsmitarbeiter verst�ndlich sein, h�ufig auch, um gesetzliche Vorgaben erf�llen zu k�nnen.
          </p>

          <p>
				Lassen Sie sich im Rahmen der <strong>Trends in Testing 2013</strong> erkl�ren, wie Sie die in Standards verf�gbare jahrzehntelange Testerfahrung vieler Testspezialisten sofort f�r sich und Ihr Unternehmen nutzen k�nnen.
          </p>
        </div>

        <div class="spalte2">
          <p class="abstandOben">
				Der Standard arbeitet f�r Sie! Holen Sie sich R�ckendeckung f�r eine klare Struktur in Ihrem Testprozess.
          </p>

          <p>
				Unsere Experten nehmen den Normen ihren vorurteilsbehafteten Ruf von "trockener Materie" und zeigen, dass jedes Projekt, ob klassisch angelegt oder agil durchgef�hrt, von Standards, wie etwa <strong>ISO/IEC 29119</strong>, partizipieren kann.
			</p>
		</div>

        <div class="news">
          <h3>�ber Trends in Testing</h3>
          <img src="../images/events/trends_in_testing.png" width="110" alt="Trends in testing" />
          <p>Die Veranstaltungsreihe &laquo;Trends in Testing&raquo; organisieren wir zusammen mit <a href="http://www.imbus.de/" target="_blank">imbus AG</a>, userem Partner in Deutschland. Bei Trends in Testing werden Sie �ber die neuesten Entwicklungen im Bereich Software Qualit�ts-<br />sicherung  und -Test informiert.
          Die Mischung aus Best Practices und Forschungsergebnissen in Kombination mit Beispielen zur konkreten Toolunterst�tzung macht die Veranstaltung in diesem Rahmen einzigartig.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
