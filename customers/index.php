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
    <title>Greenliff: Customers</title> 
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/customers.css" media="screen" />
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
      <div id="content" class="customers">
        <p class="remark marker">The customers listed above have consented to publicity.</p>
        <div class="spalte1">
          
          <h2>Finance</h2>
          
          <div class="center" style="width: 160px;">
            <a href="http://www.zkb.ch" target="_blank" class="customerlogo"><img src="../images/customers/zkb.gif" width="160" height="31" alt="Zürcher Kantonalbank" style="width:160px;margin-left:auto;margin-right:auto;" /></a>
          </div>
          
          <div class="center" style="width: 160px;">
            <a href="http://www.avanon.com/" target="_blank" class="customerlogo" style="margin-top:5px;"><img src="../images/customers/avanon_logo.gif" alt="Avanon AG" width="160" height="38" /></a>
          </div>
          
          <div class="center" style="width: 160px;">
            <a href="http://www.six-swiss-exchange.com/" target="_blank" class="customerlogo" style="margin-top:5px;"><img src="../images/customers/swx_logo.gif" alt="SWX Swiss Exchange" width="110" height="72" /></a>
          </div>
        </div>

        <div class="spalte2">
          <h2>Telecom</h2>
          
          <div class="center" style="width: 140px;">
            <a href="http://www.myriadgroup.com/" target="_blank" class="customerlogo" style="margin-top:10px;"><img src="../images/customers/myriad_logo.gif" alt="Myriad" width="140" height="49" /></a>
          </div>
          
          <div class="center" style="width: 130px;">
            <a href="http://www.sicap.ch" target="_blank" class="customerlogo" style="margin-top:10px;"><img src="../images/customers/sicap_logo.gif" width="130" height="57" alt="Sicap AG" /></a>
          </div>
          
          <div class="center" style="width: 180px;">
            <a href="http://www.surfkitchen.com/" target="_blank" class="customerlogo" style="margin-top:10px;"><img src="../images/customers/surfkitchen_logo.gif" width="180" height="47" alt="SurfKitchen" /></a>
          </div>
        </div> 
         
        <div class="spalte3">
        
          <h2>Medical</h2>
          
          <div class="center" style="width: 123px;">
            <a href="http://www.varian.com" target="_blank" class="customerlogo"><img src="../images/customers/varian_logo.gif" width="123" height="41" alt="Varian Medical Systems" /></a>
          </div>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
