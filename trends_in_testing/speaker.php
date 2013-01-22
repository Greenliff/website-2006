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
    <title>Greenliff: Trends in Testing 2012 - Partner</title>
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Agile Testing, Test nonstop, Softwaretest, Fast, Zurich, Zuerich, Zürich, Agile Testing, Test nonstop, Softwaretest" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/trendsintesting.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/print.css" media="print" />
	<style type="text/css">
		.spalte {
			margin-top: 20px;
			width: 140px;
			margin-right: 10px;
			float: left;
		}

		.spalte img {
			height: 120px;
			margin-bottom: 10px;
		}
	</style>
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
          <h1>Vortragende</h1>

        <div class="spalte">
          <img src="../images/trends_in_testing/speaker/Matthias_Daigl.jpg" alt="Matthias Daigl.jpg" />
          <p>
				<strong>Matthias Daigl</strong>, ist Managing Consultant bei der imbus AG. Seit 1997 ist er in zahlreichen Softwareprojekten als Berater, Trainer (u.a. ISTQB CTFL und AL) und Coach für Softwaretest tätig. In der Normungsarbeit vertritt er das DIN in der Arbeitsgruppe 26 des ISO/IEC JTC1 SC7, die sich mit dem Thema Softwaretest
				und der Erstellung des ISO/IEC 29119 auseinandersetzt.
				</p>
        </div>

        <div class="spalte">
          <img src="../images/trends_in_testing/speaker/Dierk_Engelhardt.jpg" alt="Dierk Engelhardt" />
          <p>
					<strong>Dierk Engelhardt</strong>, imbus AG, ist Produktmanager der TestBench - das Testmanagement- und Testdesignwerk-zeug der imbus AG, welches eines der innovativsten Werkzeuge seiner Klasse ist.
					Unter seiner Leitung arbeitet diese Entwicklungsabteilung heute agil auf Basis von Scrum.
				</p>
        </div>

        <div class="spalte">
          <img src="../images/trends_in_testing/speaker/Rolf_Glunz.jpg" alt="Rolf Glunz" />
          <p><strong>Rolf Glunz</strong>, imbus AG, ist Leiter des Vertriebs bei imbus. Mit mehr als 15-jähriger Erfahrung in Professional Services Organisationen (u.a. bei Oracle Deutschland und IHS-Technologies) gilt sein Interesse dem Erfolg des Kunden beim Einsatz von Dienstleistungen und Produkten in Qualitätsmanagement und Test von Software.
			</p>
        </div>

        <div class="spalte">
          <img src="../images/trends_in_testing/speaker/Michael_Riemer.jpg" alt="Michael Riemer" />
          <p><strong>Michael Riemer</strong>, imbus AG,
				ist Softwaretest Consultant bei imbus. Mit mehrjähriger Projekterfahrung in der Qualitätssicherung im Umfeld hoher regulatorischer Anforderungen an den Software Entwicklungsprozess ist er ein begeisterter Botschafter des Einsatzes internationaler Normen im Projektalltag. 
			</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
