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
      <div id="content" class="courses">
          <h1>Partner</h1>
          <p>Trends in Testing 2012 findet unter Mitwirkung der Partner QFS und Ranorex statt.</p>

        <div class="spalte1">
          <div class="center" style="width: 150px;height:80px;">
            <a href="http://www.imbus.de" target="_blank" class="partnerlogo"><img src="../images/partners/Imbus-partner.gif" alt="imbus AG" width="150" /></a>
          </div>
          <p style="margin-top:20px;">Die Veranstaltungsreihe &laquo;Trends in Testing&raquo; organisieren wir zusammen mit <a href="http://www.imbus.de/" target="_blank">imbus AG</a>, userem Partner in Deutschland.</p>
        </div>

        <div class="spalte2">
          <div class="center" style="width: 150px;height:80px;">
            <a href="http://www.qfs.de/" target="_blank" class="partnerlogo"><img src="../images/partners/logo_qfs.png" alt="Logo QFS" width="150" height="72" style="margin-top:20px;" /></a>
          </div>
          <p style="margin-top:20px;">QFS bietet das Produkt "QF-Test"  zum automatisierten Testen von Java Software. QFS ist mit QF-Test imbus TestBench Werkzeugpartner.</p>
        </div>

        <div class="spalte3">
          <div class="center" style="width: 150px;height:80px;">
            <a href="http://www.ranorex.com/" target="_blank" class="partnerlogo"><img src="../images/partners/logo_ranorex.png" alt="Logo Ranorex" width="150" height="41" style="margin-top:47px;" /></a>
          </div>
          <p style="margin-top:20px;">Ranorex bietet Produkte für automatisierte GUI Test und ist imbus TestBench Werkzeugpartner.</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
