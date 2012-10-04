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
    <title>Offices in Zurich and Bern</title> 
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="" />
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
      <div id="content" class="home">
        <div class="spalte1">
          <h2>Greenliff AG</h2>
          <p>Technoparkstrasse 1<br />
          8005 Zürich<br />
          Switzerland</p>
          
          <p><span class="anschrift" style="width: 65px;">Phone</span>+41 43 20 40 800<br />
          <span class="anschrift" style="width: 65px;">Fax</span>+41 43 20 40 808</p>
          
          <p><span class="anschrift" style="width: 65px;">Email</span><a href="mailto:&#105;&#110;&#102;&#111;&#64;&#103;&#114;&#101;&#101;&#110;&#108;&#105;&#102;&#102;&#46;&#99;&#111;&#109;">&#105;&#110;&#102;&#111;&#64;&#103;&#114;&#101;&#101;&#110;&#108;&#105;&#102;&#102;&#46;&#99;&#111;&#109;</a></p>
        </div>

        <div class="spalte1">
          <h2>Greenliff Bern</h2>
          <p>&nbsp;<br />
          &nbsp;<br />
          &nbsp;</p>
          
          <p><span class="anschrift" style="width: 65px;">Phone</span>+41 31 51 12 080<br />
          <span class="anschrift" style="width: 65px;">Fax</span>+41 31 51 12 089</p>
        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
