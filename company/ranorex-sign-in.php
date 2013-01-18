<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];
require_once("../includes/funktionen.inc.php");

// Variablen initialisieren
$empfaenger = 'events@greenliff.com';
$success = false;
$fehler = false;
$readonly = '';
$title = '';
$firstname = '';
$lastname  = '';
$company = '';
$department = '';
$phone = '';
$fax = '';
$e_mail = '';
$street = '';
$zip = '';
$city = '';
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
  $firstname = $_POST['firstname'];
  $lastname  = $_POST['lastname'];
  $company = $_POST['company'];
  $department = $_POST['department'];
  $phone = $_POST['phone'];
  $fax = $_POST['fax'];
  $e_mail = $_POST['e_mail'];
  $street = $_POST['street'];
  $zip = $_POST['zip'];
  $city = $_POST['city'];
  $comment = $_POST['comment'];

  // fehlende Daten
  if($firstname == '' || $lastname == '' || $company == '' || $phone == '' || $e_mail == '' || $street == '' || $zip == '' || $city == '')
  {
    $meldung = "Bitte füllen Sie alle benötigten Daten aus.";
    $fehler = true;
  }
  // E-Mail ist formal nicht korrekt
  else if(!teste_email($e_mail))
  {
    $meldung = "Ungültige E-Mail-Adresse.";
    $fehler = true;
  }
  else
  {
    $extra = "MIME-Version: 1.0\nContent-Type: text/plain; charset=iso-8859-1\nContent-Transfer-Encoding: 8-bit\n";
    $betreff = "Anmeldung 06. März 2013: Ranorex - Best Practises in Test Automation";
    $text = "\n\n";
    $text .= 'Anmeldung für den Anlass "Ranorex - Best Practises in Test Automation" vom 06. März 2013' . ":\n\n";
    $text .= "Anmeldedatum...: " . date("d.m.Y") . "\n";
    $text .= "Anrede.........: " . $title . "\n";
    $text .= "Name...........: " . $firstname . " " . $lastname . "\n";
    $text .= "Firma..........: " . $company . "\n";
    $text .= "Abteilung......: " . $department . "\n";
    $text .= "Strasse........: " . $street . "\n";
    $text .= "PLZ/Ort........: " . $zip . " " . $city . "\n";
    $text .= "E-Mail-Addresse: " . $e_mail . "\n";
    $text .= "Telefon........: " . $phone;
    $text .= "Mobile........: " . $mobile;
    $text .= "\nFax............: " . $fax;

    if($comment != "")
    {
      $text .= "\n\nMitteilung: \n" . $comment;
    }
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
        $meldung = "<p>Vielen Dank für Ihre Anmeldung.</p>\n<p>Sie erhalten eine Kopie Ihrer Anmeldung per Mail.</p>";
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
    <title>Greenliff: Trends in Testing 2012 - Anmeldung</title>
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
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
      <div id="scrollcontent" class="courses">
        <div class="startspalte">
          <h1>Registration</h1>

          <a name="Address"></a>
          <form method="post" action="<?php echo $datei; ?>.php" style="margin-top: 30px;">
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $title == "") echo " marker"; ?>"><!-- Title --></span><input type="radio" name="title" value="Herr" <?php if($title == "Herr") { echo ' checked="checked"'; } ?> /><span class="<?php if($fehler && $title == "") echo " marker"; ?>">Herr</span> <input type="radio" name="title" value="Frau" <?php if($title == "Frau") { echo ' checked="checked"'; } ?> style="margin-left:20px;" /><span class="<?php if($fehler && $title == "") echo " marker"; ?>">Frau</span>
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $firstname == "") echo " marker"; ?>">Name</span><input type="text" name="firstname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $firstname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $lastname == "") echo " marker"; ?>">Vorname</span><input type="text" name="lastname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $lastname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $company == "") echo " marker"; ?>">Firma</span><input type="text" name="company"<?php echo $readonly; ?> class="formfeld" value="<?php echo $company; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $department == "") echo " marker"; ?>">Abteilung/Funktion</span><input type="text" name="department"<?php echo $readonly; ?> class="formfeld" value="<?php echo $department; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $phone == "") echo " marker"; ?>">Telefon</span><input type="text" name="phone"<?php echo $readonly; ?> class="formfeld" value="<?php echo $phone; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Mobile</span><input type="text" name="mobile"<?php echo $readonly; ?> class="formfeld" value="<?php echo $mobile; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Fax</span><input type="text" name="fax"<?php echo $readonly; ?> class="formfeld" value="<?php echo $fax; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $e_mail == "") echo " marker"; ?>">E-Mail</span><input type="text" name="e_mail"<?php echo $readonly; ?> class="formfeld" value="<?php echo $e_mail; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $street == "") echo " marker"; ?>">Strasse</span><input type="text" name="street"<?php echo $readonly; ?> class="formfeld" value="<?php echo $street; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $zip == "") echo " marker"; ?>">PLZ</span><input type="text" name="zip"<?php echo $readonly; ?> class="formfeldkurz" value="<?php echo $zip; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $city == "") echo " marker"; ?>">Ort</span><input type="text" name="city"<?php echo $readonly; ?> class="formfeld" value="<?php echo $city; ?>" />
            </div>
            <div class="div1" style="margin-top: 30px;">
              <span class="formlabel">Bemerkung</span><textarea name="comment"<?php echo $readonly; ?> class="textarea" style="height:60px;" rows="5" cols="40"><?php echo $comment; ?></textarea>
            </div>
<?php
if(!$success)
{
?>
            <div class="div2">
            <input type="submit" name="send" value="send" class="submit" />
            </div>
           </form>
<?php
}
?>
        </div>
<?php
if(!isset($_POST["send"]))
{
?>
        <div class="news">
          <h3>6. März 2013</h3>
          <p>Ranorex - Best Practises in Test Automation</p>
        </div>
<?php
}
else if($fehler)
{
?>
        <div class="news">
          <h3>Registration</h3>
          <p><?php echo $meldung; ?></p>
        </div>
<?php
}
else if($success)
{
?>
        <div class="news">
          <h3>Anmeldung erfolgreich!</h3>
          <?php echo $meldung; ?>
        </div>
<?php
}
?>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
