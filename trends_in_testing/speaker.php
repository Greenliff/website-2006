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
    <title>Greenliff: Trends in Testing 2012 - Partner</title>
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
          <h1>Vortragende</h1>

        <div class="spalte1" style="margin-top: 20px;">
          <div class="center" style="width: 150px;height:120px;">
            <img src="../images/trends_in_testing/speaker/Christian_Brandes.jpg" alt="Christian Brandes" width="86" height="120" />
          </div>
          <p style="margin-top:20px;"><strong>Dr. Christian Brandes</strong>, imbus AG, ist Principal Consultant und Trainer sowie Hochschuldozent für Software-QS und -Test. Neben Testautomatisierung, Testmanagement und modellbasiertem Testen beschäftigt sich der Certified Professional Scrum Master in Theorie und Praxis mit dem Testen in Scrum-Projekten.<br />
                Dr. Christian Brandes hat zahlreiche Publikationen und Vorträge verfasst. </p>
        </div>

        <div class="spalte2" style="margin-top: 20px;">
          <div class="center" style="width: 150px;height:120px;">
                <img src="../images/trends_in_testing/speaker/Dirk_Engelhardt.png" alt="Dierk Engelhardt" width="86" height="120" />
          </div>
          <p style="margin-top:20px;"><strong>Dierk Engelhardt</strong>, imbus AG, ist Produktmanager der TestBench - das Testmanagement- und Testdesignwerk-zeug der imbus AG, welches eines der innovativsten Werkzeuge seiner Klasse ist.<br />
                Unter seiner Leitung arbeitet diese Entwicklungsabteilung heute agil auf Basis von Scrum. Damit verfügt Dierk Engelhardt neben den zahlreichen Einführungs­projekten bei TestBench-Kunden über umfassendes Praxiswissen.</p>
        </div>

        <div class="spalte3" style="margin-top: 20px;">
          <div class="center" style="width: 150px;height:120px;">
                <img src="../images/trends_in_testing/speaker/Rolf_Glunz.jpg" alt="Rolf Glunz" width="86" height="120" />
          </div>
          <p style="margin-top:20px;"><strong>Rolf Glunz</strong>, imbus AG, ist Leiter des Vertriebs bei imbus. Mit mehr als 15-jähriger Erfahrung in Professional Services Organisationen (u.a. bei Oracle Deutschland und IHS-Technologies) gilt sein Interesse dem Erfolg des Kunden beim Einsatz von Dienstleistungen und Produkten in Qualitätsmanagement und Test von Software.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
