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
    <title>Greenliff: Trends in Testing 2012 - Meet the experts</title>
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
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
      <div id="content" class="courses">
        <div class="spalte1">
          <h1>Meet the Experts</h1>
<p>Treffen Sie die Experten f�r Software-Qualit�tssicherung und -Test! Kommen Sie mit den Spezialisten ins Gespr�ch, stellen Sie Ihre Fragen und diskutieren Sie Ihre Anforderungen. In den Pausen an den Demo-St�nden und zwanglos beim Get-Together.</p>
<p>Erfahren Sie, wie die imbus L�sungen Sie in Ihrer t�glichen Arbeit unterst�tzen und entlasten. Nutzen Sie die Detailinformationen aus erster Hand und erleben Sie Test nonstop live!</p>
        </div>

        <div class="spalte2">
          <p class="abstandOben">Wir freuen uns auf Ihre Fragen und anregenden Diskussionen!</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
