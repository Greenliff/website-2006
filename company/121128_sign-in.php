<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];
require_once("../includes/funktionen.inc.php");

// Variablen initialisieren
$empfaenger = 'events@greenliff.com';
//$empfaenger = 'uburri@netweaver.ch';
$success = false;
$fehler = false;
$readonly = '';
$fullname = '';
$phone = '';
$e_mail = '';
$comment = '';


if(isset($_REQUEST))
{
  $missbrauch = formularmissbrauch($_REQUEST);
}
// Courses
if(isset($_POST['send']))
{
  // Formularmissbraeuche abfangen
  $_POST = array_map('_filterData',$_POST);

  if(isset($_POST['title']))
  {
    $title = $_POST['title'];
  }
  $fullname = $_POST['fullname'];
  $phone = $_POST['phone'];
  $e_mail = $_POST['e_mail'];
  $comment = $_POST['comment'];

  // fehlende Daten
  if($fullname == '' || $phone == '' || $e_mail == '')
  {
    $meldung = '<p class="marker">Please fill in all required fields.</p>';
    $fehler = true;
  }
  // E-Mail ist formal nicht korrekt
  else if(!teste_email($e_mail))
  {
    $meldung = '<p class="marker">This E-mail seems to be invalid.</p>';
    $fehler = true;
  }
  else
  {
    $extra = "MIME-Version: 1.0\nContent-Type: text/plain; charset=iso-8859-1\nContent-Transfer-Encoding: 8-bit\n";
    $betreff = "Registration 28. November 2012: Crowd & Cloud based Testing";
    $text = "\n\n";
    $text .= 'Registration for the event "Crowd & Cloud based Testing" (28. November 2012)' . ":\n\n";
    $text .= "Date.........: " . date("d.m.Y") . "\n";
    $text .= "Full name....: " . $fullname . "\n";
    $text .= "E-mail.......: " . $e_mail . "\n";
    $text .= "Phone........: " . $phone;
    if($comment != "")
    {
      $text .= "\n\nComment: \n" . $comment;
    }
    // print_r($text);
  	// E-Mail-Versand
    if(!$missbrauch)
    {
      /* Baut Header der Mail zusammen */
      $headers = 'From:' . $empfaenger . "\n";
      $headers .= 'X-Mailer: PHP/' . phpversion() . "\n";
      $headers .= 'X-Sender-IP: ' . $REMOTE_ADDR . "\n";
      $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
      $headers .= "Content-Transfer-Encoding: 8-bit\n";
      $headers .= 'Cc: ' . $empfaenger . "\n";
//echo nl2br($text);
    	if(@mail($e_mail,$betreff,$text,$headers))
      {
        $meldung = '<p class="marker">Thank you for your registration.<br />You will receive a copy of the registration by e-mail.</p>';
        $success = true;
        $readonly = ' readonly="readonly"';
      }
      else {
        $meldung = 'Ihre Anmeldung konnte nicht abgeschickt werden. Bitte <a href="mailto:info@greenliff.com">informieren Sie uns</a> über das Problem, so dass wir es beheben und Sie für den Anlass registrieren können.';
        $fehler = true;
      }
    }

  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: &laquo;Crowd &amp; Cloud based Testing&raquo; - PASS & Greenliff Afternoon Talks - Registration</title>
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/print.css" media="print" />
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
      <div id="scrollcontent" class="events">
        <div class="startspalte">
          <h1>Event Registration</h1>
          <h2>Crowd &amp; Cloud based Testing - PASS & Greenliff Afternoon Talks</h2>
          <ul>
            <li>The Crowd in the Cloud (Carl Esposti, Founder and CEO crowdsourcing.org)</li>    
            <li>eBay's Crowd Testing Strategy (Michael Palotas, Head Quality Engineering Europe, eBay International)</li>     
            <li>How Crowd Testing works (Dieter Speidel, CEO PASS Group)</li>     
            <li>Cloud Scale Testing (Joachim Büchse, Managing Director Greenliff Bern)</li>           
          </ul>

          <a name="Registration"></a>
          <form method="post" action="<?php echo $datei; ?>.php#Registration" style="margin-top: 30px;">
          <h3>Bookings</h3>
<?php
          if(isset($meldung) && $meldung != '')
{
?>
          <?php echo $meldung; ?>
<?php
}
?>
            <div class="div1">
              <span class="formlabel">Price</span>CHF 190</span>
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $fullname == "") echo " marker"; ?>">Full name</span><input type="text" name="fullname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $fullname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $phone == "") echo " marker"; ?>">Phone</span><input type="text" name="phone"<?php echo $readonly; ?> class="formfeld" value="<?php echo $phone; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $e_mail == "") echo " marker"; ?>">E-mail</span><input type="text" name="e_mail"<?php echo $readonly; ?> class="formfeld" value="<?php echo $e_mail; ?>" />
            </div>
            <div class="div1" style="margin-top: 30px;">
              <span class="formlabel">Comment</span><textarea name="comment"<?php echo $readonly; ?> class="textarea" style="height:60px;"><?php echo $comment; ?></textarea>
            </div>
<?php
if(!$success)
{
?>
            <div class="div2">
            <input type="submit" name="send" value="Send your booking" class="submit" />
            </div>
           </form>
<?php
}
?>
        </div>
        <div class="news">
          <h3>28. November 2012</h3>
          <p><a href="http://primetower.ch/en/eat-meet/konferenzen" target="_blank">Clouds Conference Center</a><br />Prime Tower Zürich<br />Maagplatz 5<br />8005 Zurich</p>
          <p>
          	14:00 - 17:00h Talks<br />
          	Afterwards: Networking &ndash; &laquo;Meet the Experts&raquo;
          </p>
          <p>Cost: CHF 190.-</p>
          <p>Audience: CIOs, R&D Managers, SW-Development Managers, Product Owners, Project Managers, Test Managers, Software Quality Managers</p>
          <p><a href="../docs/Event_Agenda_Cloud_Crowd_based_On-Demand_Testing.pdf" target="_blank">More information (PDF)</a></p>
          <p><a href="#Registration">Registration form</a></p>

        </div>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
