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
    <title>Greenliff: Customers</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/styles/customers.css" media="all" />
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
      <div id="content" class="customers">
        <div class="spalte1">
          <h2>Finance</h2>
          <div class="center" style="width: 160px;">
            <a href="http://www.zkb.com" target="_blank" class="customerlogo"><img src="../images/customers/zkb.gif" width="160" height="31" alt="Zürcher Kantonalbank" style="width:160px;margin-left:auto;margin-right:auto;" /></a>
          </div>
          <div class="center" style="width: 110px;">
            <a href="http://www.swx.ch" target="_blank" class="customerlogo"><img src="../images/customers/swx_logo.gif" width="110" height="65" alt="SWX Swiss Exchange" /></a>
          </div>
        </div>

        <div class="spalte2">
          <h2>Telecom</h2>
          <div class="center" style="width: 160px;">
            <a href="http://www.esmertec.com" target="_blank" class="customerlogo" style="margin-top:30px;"><img src="../images/customers/esmertec_logo.gif" width="160" height="19" alt="Esmertec AG" /></a>
          </div>
          <div class="center" style="width: 130px;">
            <a href="http://www.sicap.ch" target="_blank" class="customerlogo"><img src="../images/customers/sicap_logo.gif" width="130" height="57" alt="Sicap AG" /></a>
          </div>
        </div> 
         
        <div class="spalte3">
          <h2>Medical</h2>
          <div class="center" style="width: 123px;">
            <a href="http://www.varian.com" target="_blank" class="customerlogo"><img src="../images/customers/varian_logo.gif" width="123" height="41" alt="Varian Medical Systems" /></a>
          </div>
        </div>
        <p class="remark marker">This list of customers is a non representative subset of our current set of customers.</p>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
