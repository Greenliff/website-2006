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
      <div id="content" class="home">
        <div class="spalte1">
          <h1>Jobs</h1>
      	  <p> Greenliff is a fast growing company that manages a couple of challenging software testing projects across a wide array of technologies. We are constantly looking for highly qualified individuals to join our successful team.</p>

      	  <p>If you are a Software Test Engineer, a Software Test Manager or a Software Test Consultant with a passion for your work then Greenliff is the perfect place for you.</p>

      		<p>At Greenliff you will receive more than just a competitive salary. Additional benefits include offshore and on-site engagements, exposure to cutting edge technology, continuous education programs to extend and update your skills, and a very dynamic workplace with a highly motivated team.</p>
        </div>

         <div class="spalte2">
          <h1>We are hiring</h1>

          <p>We are currently looking for motivated individuals to fill the following openings:</p>
          <h2>Zurich</h2>
          <ul>
            <li><a href="../docs/20130410_EN_SoftwareTesterWepApps.pdf" target="_blank">Software Tester Web Applications (m/f)</a></li>
          </ul>
         </div>

         <div class="news">
          <h3>Application</h3>
          <p>If you are interested in working with us or if you have any job related questions do not hesitate to contact us. <a href="<?php echo htmlencode("mailto:jobs@greenliff.com"); ?>">Markus Pilz</a> is pleased to answer all questions you have.</p>
          <p style="padding:3px 5px;">We only consider candidates with a valid Swiss work permit or EU citizens. No agencies.</p>
          <p style="padding:3px 5px;">Please send your curriculum vitae preferably by email to <a href="<?php echo htmlencode("mailto:jobs@greenliff.com"); ?>"><?php echo htmlencode("jobs@greenliff.com"); ?></a></p>
         </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
