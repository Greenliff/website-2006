<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

require_once("../includes/funktionen.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <title>Software Testing, Test Consultancy, Automation, Performance Testing, Zurich</title>
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="We are a fast growing company that manages challenging software testing projects. We are constantly looking for highly qualified individuals." />
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
      <div id="content">
        <div class="spalte1">
			<h1>Greenliff and PASS Join Forces</h1>
			05.11.2012<br /><br />
			<p> 
				<a href="http://www.pass.ch/" target="_blank">PASS Technologies</a> and <a href="/">Greenliff</a> have stepped into a strategic partnership to extend their portfolio of QA and testing services.
				Since many years, both companies have been specialising in software quality assurance and application testing.
				The partnership enables both companies to focus their expertise from different domains and disciplines and thereby to 
				broaden their customer base. While Greenliff benefits by having access to PASS' crowdtesting platform
				<a href="http://www.passbrains.com" target="_blank">passbrains.com</a>,
				PASS enlarges their portfolio through Greenliff's Know-how in automated testing of mobile apps and development of test software.
			<p>
			<p> 
				<a href="../docs/partnerschaft-pass-greenliff.pdf">Medienmittelung (PDF)</a><br />
				<a href="../partners/index.php">Partners</a><br />
			</p> 
       </div>
         <div class="spalte2">
			<p> 
				<a href="http://www.pass.ch/" target="_blank">PASS Technologies</a> und <a href="/">Greenliff</a> sind eine strategische Partnerschaft eingegangen, um bestehenden und neuen Kunden eine erweiterte 
				Palette von Testdienstleistungen anbieten zu können. Beide Firmen sind seit vielen Jahren Spezialisten rund um die Sicherstellung 
				von Software-Qualität und das Testen von Software-Lösungen. Ziel der Partnerschaft ist es, die unterschiedliche Expertise hinsichtlich 
				Branchen-Fokus und Dienstleistungsportfolio zu bündeln und einem breiteren Kundenkreis zugänglich zu machen. Während Greenliff durch 
				die Partnerschaft Zugang zur Crowdtesting-Plattform <a href="http://www.passbrains.com" target="_blank">passbrains.com</a> erhält, 
				kann PASS dank Greenliffs Know-how sein Angebot rund um das 
				automatisierte Testen von mobilen Apps und der Entwicklung von Testsoftware ausbauen.			
			</p>
         </div>

         <div class="news">
          <h3>Links</h3>
			<div class="bildlinks" style="padding:5px;">
				<a href="http://www.pass.ch/" target="_blank"><img src="../images/partners/pass-logo-small.png" alt="Pass" /></a>
			</div>
				<p>
					<a href="http://www.pass.ch/" target="_blank">PASS Technologies AG</a><br />
					<a href="http://www.passbrains.com/" target="_blank">PASSbrains Website</a>
					<br /><br />
				</p>
         </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
