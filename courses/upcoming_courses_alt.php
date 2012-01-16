<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

include_once("kursdetails.txt");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Certified Tester - Upcoming Courses</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Z�rich" />
		<meta name="description" content="" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/courses.css" media="screen" />
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
      <div id="scrollcontent">
        <div class="spalte1">
          <h1>Upcoming Courses</h1>
          <p>Find all currently scheduled open trainings in the table below. Open trainings take place at the <href="/contact/location.php">Technopark</a> in Zurich. It is possible to take the exam directly at the end of the seminar.</p>
          <p>We also offer all our trainings as inhouse-trainings at your company site. Please contact us about information on classes in English and on schedules tailored to your specific need.</p>
        </div>
        <div class="spalte2">
          <p class="marker abstandOben">Sign in earlier than six weeks prior to the training and save 10 percent Early Bird Discount on the regular fee!</p>
          <p>All fees are given in CHF excluding legal VAT. When taking an exam, additional examination fees will be charged by the independent certification center <a href="http://www.saq.ch/" target="_blank">Swiss Association for Quality (SAQ)</a>. Please contact us for current information on the fees or examine the <a href="http://www.saq.ch/de/zertifikate/lehrgaenge_zertifikate.php" target="_blank">web-site of the SAQ</a>.</p>
        </div>
                
        <div class="news">        
          <h3>More Information</h3>
          <ul>
            <li><a href="conditions.php">Terms and Conditions</a></li>
            <li><a href="../contact/location.php">How to get there</a></li>
          </ul>
          <p>Please use our <a href="more_information.php">online request form</a> to submit your inquiry for a company course.<br />
          <br />
          Our training coordinator <a href="mailto:istqb@greenliff.com">Markus Pilz</a>  will be pleased to answer remainig questions you might have. Call +41 43 20 40 806</p>
        </div>
        
        <div class="spaltebreit" style="clear:both;padding-top:30px;">
                
    			<table class="collapse">
            <th class="tdSpalte tablehead" style="width:220px;">Training</th>
            <th class="tdSpalte tablehead" style="width:100px;">Next Dates</th>
            <th class="tdSpalte tablehead" style="width:30px;">Lang.</th>
            <th class="tdLeerspalte">&nbsp;</th>
            <th class="tdSpalte tablehead">Location</th>
            <th class="tdSpalte tablehead">Fee[CHF]</th>
            <th></th>
            <tbody>
<?php
foreach($kurse as $kurs)
{
  if($kurs["published"] && $kurs["until"] >= date("Y-m-d"))
  {
?>
              <tr>
                <td class="tdSpalte"><a href="sign_in.php?id=<?php echo $kurs["id"]; ?>" title="sign in"><?php echo $kurs["training"]; ?></a></td>
                <td class="tdSpalte"><?php echo $kurs["date"]; ?></td>
                <td class="tdSpalte"><?php echo $kurs["shortlanguage"]; ?></td>
                <td class="tdLeerspalte">&nbsp;</th>
                <td class="tdSpalte"><?php echo $kurs["location"]; ?></td>
                <td class="tdSpalte"><?php echo $kurs["fee"]; ?></td>
                <td><a href="sign_in.php?id=<?php echo $kurs["id"]; ?>"><img src="../images/courses_pfeil.gif" width="7" height="11" alt="sign in" title="sign in" style="margin-top:2px;" />&nbsp;sign&nbsp;in</a></td>
              </tr>
<?php
  }
}
?>
            </tbody>
          </table>
				</div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
