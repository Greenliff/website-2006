<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

$job = "Assistent";

require_once("../../includes/funktionen.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Test Automation Engineer</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="" />
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
    <?php include_once("../../includes/google-analytics.html"); ?>
  </head>
  
  <body>
    <div id="abstand"></div>
    <div id="container">
<?php include_once("../../includes/printhead.php"); ?>
      <div id="left">
      <?php include_once("../../includes/navigation.php"); ?>
      </div>
      <div id="middle">
      </div>
      <div id="scrollcontent">
        <div class="spalte1">
          <h3>Sekretärin/Assistentin<br />
              (20% - 60%)</h3>
          <p>Aufgrund Mutterschaft und zur Verstärkung unseres Teams suchen wir zu Beginn des neuen Jahres 2009</p>
          <h3>Was wir bieten:</h3>
          <ul>
            <li>Ein internationales, motiviertes, aufgestelltes Mitarbeiterteam</li>
            <li>Flexible Arbeitszeiten</li>
            <li>Gute Einarbeitung in die vielseitigen Aufgaben</li>
            <li>5 Wochen Ferien</li>
            <li>Unterstützung in der Weiterbildung u.v.m.</li>
          </ul>
          <h3>Zu Ihrem Aufgabenbereich gehören:</h3>
          <ul>
            <li>Allgemeine Korrespondenz in Deutsch und Englisch</li>
            <li>Vor- und nachbereitende Buchhaltungsarbeiten, Rechnungen erstellen</li>
            <li>Mithilfe bei der Planung und Organisation von Sitzungen, Schulungen, Konferenz-/Messeteilnahme, Geschäftsreisen, Team Events etc.</li>
            <li>Kontakt zu Kunden, Partnern, Behörden und anderen externen Stellen</li>
            <li>Entgegennahme, Weiterleitung bzw. Bearbeitung von Telefonaten, der E-Mails und der Post</li>
          </ul>
        </div>

        <div class="spalte2">
          <h3>Für diese Position wünschen wir uns eine aufgestellte, verantwortungsbewusste und zuverlässige Persönlichkeit, welche folgende Qualifikationen und Eigenschaften mitbringt:</h3>
          <ul>
            <li>Kaufmännische Grundausbildung</li>
            <li>Erste Berufserfahrung in einer ähnlichen Position</li>
            <li>Versiert im Umgang mit MS Office-Programmen</li> 
            <li>Stilsicheres Deutsch und gute Englischkenntnisse</li>
            <li>Ausgeglichene und mitdenkende Persönlichkeit</li>
            <li>Selbständigkeit sowie eine exakte Arbeitsweise</li>
            <li>Gerne auch Wiedereinsteigerin</li>
          </ul>
          <a href="/docs/081031_GApplicationreenliff_Assistant.pdf" target="_blank" title="Assistant">PDF Download</a></p>
  	  </div>
      <div class="news">

        <h3>Bewerbung</h3>
        <p>Interessiert Sie diese abwechslungsreiche Aufgabe, und würden Sie gerne in einem übersichtlichen Team tätig sein?  Dann freut sich Herr Markus Pilz, Managing Director, über Ihre vollständigen Bewerbungsunterlagen per Post oder Email an:<br />
        <a href="<?php echo htmlencode("mailto:markus.pilz@greenliff.com"); ?>"><?php echo htmlencode("markus.pilz@greenliff.com"); ?></a></p>
    </div>
      </div>
<?php include_once("../../includes/footer.html"); ?>
    </div>
  </body>
</html>
