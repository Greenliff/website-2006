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
    <title>Certified Tester - Course Structure</title> 
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="" />
    <meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/courses.css" media="screen" />
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
      <div id="scrollcontent">
        <div class="spalte1">
          <p>There are currently two levels of certification: The Foundation Level and the Advanced Level. For both levels, international working parties develop and maintain internationally uniform curricula and exams. Our training courses closely match the ISTQB&#174; Certified Tester standard with its two level structure.</p>
        </div>

        <div class="spalte2">
           <p>The Foundation Level exam checks for the basics in software testing. It provides information about the certificate holder's level of familiarity with the most common concepts of software testing and the associated terminology. The <a href="/courses/foundation_level.php">Foundation Level</a> is an important stepping stone on your way to become a test expert.</p>            
        </div> 
        
        <div class="spalte3">
          <p>The Advanced Level is more in-dept and much more practice oriented than the Foundation Level. The Advanced Level exam is composed of three sections. They correspond to the three different subject areas: <a href="http://www.imbus.de/akademie/akademie-leistungen/kursuebersicht/" target="_blank">Test Analyst</a>, <a href="http://www.imbus.de/akademie/akademie-leistungen/kursuebersicht/" target="_blank">Technical Test Analyst</a>, and <a href="http://www.imbus.de/akademie/akademie-leistungen/kursuebersicht/" target="_blank">Testmanager</a>.</p>
        </div>
        
        <div style="clear:left;">
  			  <table class="border">
            <tbody>
              <!-- Foundation Level -->
              <tr> 
                <td class="tdSpalte tablehead tdZweispaltig"><b>Foundation Level </b></td>
                <td class="tdLeerspalte">&nbsp;</td>
                <td class="tdSpalte tablehead tdRechts">Duration</td>  
                <td class="tdSpalte tablehead tdRechts">Code</td> 
              </tr>
              <tr> 
                <td class="tdSpalte tdZweispaltig noBorder"> 
                  <p><a href="foundation_level.php">ISTQB&#174; 
                    Certified Tester Foundation Level </a><br />  
                    fundamental knowledge of software testing; 
                    lifecycles; dynamic and static testing; 
                    test management and tools; &amp; more. </p>
                </td>
                <td class="tdLeerspalte noBorder">&nbsp;</td>
                <td class="tdSpalte noBorder tdRechts">4&nbsp;days<br />3&nbsp;days</td>
                <td class="tdSpalte noBorder tdRechts">CT-FL<br />CT-FL-I<br />(intensive course)</td>
              </tr>
              <!-- Advanced Level -->
              <tr> 
                <td class="tdSpalte tablehead tdZweispaltig"><b>Advanced Level </b></td>
                <td class="tdLeerspalte">&nbsp;</td>
                <td class="tdSpalte tablehead">Duration</td> 
                <td class="tdSpalte tablehead tdRechts">Code</td>

              </tr>
              <tr> 
                <td class="tdSpalte tdZweispaltig"><a href="http://www.imbus.de/akademie/akademie-leistungen/kursuebersicht/" target="_blank">Test Analyst - ISTQB&#174; Certified Tester Advanced Level</a><br />
                  testing at blackbox level: functional techniques, special techniques; selecting tests; review principles &amp; roles; &amp; more.<br />  
                </td>
                <td class="tdLeerspalte">&nbsp;</td>
                <td class="tdSpalte tdRechts">6 days<br />5 days</td>
                <td class="tdSpalte tdRechts">CT-ATA<br />CT-ATA-I<br />(intensive course)</td>
              </tr>
              <tr> 
                <td class="tdSpalte tdZweispaltig"><a href="http://www.imbus.de/akademie/akademie-leistungen/kursuebersicht/" target="_blank">Technical Test Analyst - ISTQB&#174; Certified Tester Advanced Level</a><br />
                  testing at whitebox level: structural, dataflow-based &amp; non-functional techniques, static/dynamic analysis, test &amp; tool selection; &amp; more <br />  
                </td>
                <td class="tdLeerspalte">&nbsp;</td>
                <td class="tdSpalte tdRechts">6 days<br />5 days</td>
                <td class="tdSpalte tdRechts">CT-ATT<br />CT-ATT-I<br />(intensive course)</td>
              </tr>
              <tr> 
                <td class="tdSpalte tdZweispaltig"><a href="http://www.imbus.de/akademie/akademie-leistungen/kursuebersicht/" target="_blank">Testmanager - ISTQB&#174; Certified Tester Advanced Level</a><br />
                  planning, assessing &amp; monitoring a test; managing incidents &amp; risk; test process improvement, setting up a test centre; organisation forms; and more. </td>
                <td class="tdLeerspalte">&nbsp;</td>  
                <td class="tdSpalte tdRechts">6 days<br />5 days</td>
                <td class="tdSpalte tdRechts">CT-AMA<br />
                                              CT-AMA-I<br />(intensive course)</td>
              </tr>
            </tbody>
          </table>
			  </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
