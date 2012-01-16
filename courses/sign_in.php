<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];
require_once("../includes/funktionen.inc.php");
if(isset($_REQUEST))
{
  $missbrauch = formularmissbrauch($_REQUEST);
}
// Courses
if(isset($_GET['id']))
{
  // Formularmissbraeuche abfangen
  $_GET = array_map('_filterData',$_GET);
  
  // Kursnummer abholen, um die Angaben ueber den Kurs zuweisen zu koennen
  $kursid = $_GET["id"];
  
  // Kurstitel, -datum, -Ort (?), Gebuehr und Sprache werden definiert in der Datei
  // kursdetails.txt
  include_once("kursdetails.txt");
  
  // Konnte kein Kurs zugeordnet werden, entweder umleiten auf eine Errorseite (?) oder auf die
  // Kursliste (zweiteres macht nicht so viel Sinn, weil die Leute ja von da kommen sollten
  // Folglich hat es einen Fehler im Skript...)
  // Ist der Kurs nicht mehr publiziert, ist eine Umleitung auf die Liste der bevorstehenden
  // Kurse sinnvoll.
  if($kursid <= 0 || $kurse[$kursid]["training"] == "" || !$kurse[$kursid]["published"] || $kurse[$kursid]["until"] < date("Y-m-d"))
  {
    header("Location:upcoming_courses.php");
    exit();
  }
}
else {
  header("Location:upcoming_courses.php");
  exit();
}
if(isset($_POST))
{
  $_POST = array_map('_filterData',$_POST);
}

// Variablen initialisieren
$empfaenger = "training@greenliff.com";
//$empfaenger = "uburri@netweaver.ch";
$trainingCoordinator = 'Christa Himmler';
$anker = "";
$datei = $_SERVER['PHP_SELF']."?id=".$kursid;
$checked1 = "";
$checked2 = "";
$checked3 = "";
$comment = "";
$readonly = "";
$fehler = false;
$invoice_fehler = false;
$exam_fehler = false;
$success = false;
// Participiant's address
$title = "";
$firstname = "";
$lastname = "";
$company = "";
$department = "";
$e_mail = "";
$phone = "";
$fax = "";
$street = "";
$zip = "";
$city = "";
$country = "CH";
$exam = "yes";
$terms = "";
// home address
$home_address = "";
$home_zip = "";
$home_city = "";
$date_of_birth = "";
$place_of_birth = "";
// invoice address
$invoice_address = "";
$invoice_firstname = "";
$invoice_lastname = "";
$invoice_phone = "";
$invoice_company = "";
$invoice_department = "";
$invoice_street = "";
$invoice_zip = "";
$invoice_city = "";
$invoice_country = "CH";

if(isset($_POST["send"]))
{
  // Teilnehmerdaten
  if(isset($_POST["title"]))
  {
    $title = $_POST["title"];
  }
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $company = $_POST["company"];
  $department = $_POST["department"];
  $e_mail = $_POST["e_mail"];
  $phone = $_POST["phone"];
  $fax = $_POST["fax"];
  $street = $_POST["street"];
  $zip = $_POST["zip"];
  $city = $_POST["city"];
  $country = $_POST["country"];
  $home_address = $_POST["home_address"];
  $home_zip = $_POST["home_zip"];
  $home_city = $_POST["home_city"];
  $date_of_birth = $_POST["date_of_birth"];
  $home_city = $_POST["home_city"];
  $place_of_birth = $_POST["place_of_birth"];
  if(isset($_POST["exam"]))
  {
    $exam = $_POST["exam"];
  }
  if(isset($_POST["terms"]))
  {
    $terms = $_POST["terms"];
  }
  // Rechnungsadresse
  if(isset($_POST["invoice_address"]))
  {
    $invoice_address = $_POST["invoice_address"];
  }
  $invoice_firstname = $_POST["invoice_firstname"];
  $invoice_lastname = $_POST["invoice_lastname"];
  $invoice_company = $_POST["invoice_company"];
  $invoice_department = $_POST["invoice_department"];
  $invoice_phone = $_POST["invoice_phone"];
  $invoice_street = $_POST["invoice_street"];
  $invoice_zip = $_POST["invoice_zip"];
  $invoice_city = $_POST["invoice_city"];
  $invoice_country = $_POST["invoice_country"];
  // Kommentar
  $comment = $_POST["comment"];
  
  // leere Felder bei Teilnehmerdaten
  if($title == "" || $firstname == "" || $lastname == "" || $company == "" || $e_mail == "" || $phone == "" || $street == "" || $zip == "" || $city == "" || $terms == "")
  {
    $meldung = 'Please fill in all <a href="#Address">required</a> fields.';
    $fehler = true;
  }
  /* Nicht mehr zwingend (8.4.)
  // leere Felder bei den persoenlichen Angaben fuer die Pruefung
  else if($exam == "yes" && ($home_address == "" || $home_zip == "" || $home_city == "" || $date_of_birth == "" || $place_of_birth == ""))
  {
    $meldung  = 'Please fill in all <a href="#Home_Address">required fields</a>. This information is needed for the ISTQB&#174; certificat. You need to fill it in if you take the exam.';
    $exam_fehler = true;
  }
  */
  // leere Felder bei der Rechnungsadresse
  else if($invoice_address == "yes" && ($invoice_firstname == "" || $invoice_lastname == "" || $invoice_company == "" || $invoice_phone == "" || $invoice_street == "" || $invoice_zip == "" || $invoice_city == ""))
  {
    $meldung = 'Please fill in all <a href="#Invoice_Address">required fields</a>.';
    $invoice_fehler = true;
  }
  // E-Mail ist formal nicht korrekt
  else if(!teste_email($e_mail))
  {
    $meldung = "Invalid email address.";
    $fehler = true;
  }
  else
  {
    $extra = "MIME-Version: 1.0\nContent-Type: text/plain; charset=iso-8859-1\nContent-Transfer-Encoding: 8-bit\n";
    $betreff = "Registration confirmation";
    $text = "Dear ".$title." ".$lastname."\n\nThank you very much for your registration with the information below. We will send you a paper confirmation with regular mail in the next days.\n\nIn case of questions or problems please contact our training coordinator " . $trainingCoordinator . ". Mail to <mailto:" . $empfaenger . "> or call +41 43 20 40 800.\n\nWe look forward to meeting you in the training course.\n\n";
    $text .= "You registered for the following training:\n";
    $text .= "Training......: ".str_replace("&#174;","®",$kurse[$kursid]["training"])."\n";
    $text .= "Date..........: ".$kurse[$kursid]["date"]."\n";
    $text .= "City..........: ".$kurse[$kursid]["location"]."\n";
    $text .= "Fee...........: ".$kurse[$kursid]["fee"]."\n";
    $text .= "Language......: ".$kurse[$kursid]["language"]."\n\n";
    $text .= "*Participiant*\n";
    $text .= "Title.........: ".$title."\n";
    $text .= "Name..........: ".$firstname." ".$lastname."\n";
    $text .= "Company.......: ".$company."\n";
    if($department != "")
    {
      $text .= "Department....: ".$department."\n";
    }
    $text .= "Address.......: ".$street."\n";
    $text .= "ZIP/City......: ";
    if($country != "")
    {
      $text .= $country."-";
  	}
    $text .= $zip." ".$city."\n";
    $text .= "E-Mail-Address: ".$e_mail."\n";
    $text .= "Phone.........: ".$phone;
    if($fax != "")
    {
      $text .= "\nFax...........: ".$fax;
  	}
    $text .= "\n\nExam..........: ".$exam;
    if($exam == "yes")
    {
      $text .= "\nHome address..: ".$home_address;
      $text .= "\nHome ZIP......: ".$home_zip;
      $text .= "\nHome city.....: ".$home_city;
      $text .= "\nDate of birth : ".$date_of_birth;
      $text .= "\nPlace of birth: ".$place_of_birth;
    }
    if($invoice_address == "yes")
    {
      $text .= "\n\n";
      $text .= "*Invoice Address*\n";
      $text .= "Company.......: " . $invoice_company . "\n";
      $text .= "Name..........: " . $invoice_firstname . " " . $invoice_lastname . "\n";
      if($invoice_department != "")
      {
        $text .= "Department....: "  .$invoice_department . "\n";
      }
      $text .= "Address.......: " . $invoice_street . "\n";
      $text .= "ZIP/City......: ";
      if($invoice_country != "")
      {
        $text .= $invoice_country . "-";
    	}
      $text .= $invoice_zip." ".$invoice_city . "\n";
      $text .= "Phone.........: ".$invoice_phone;
    }
    $text .= "\nI have read and accepted the terms and conditions: ".$terms;
    if($comment != "")
    {
      $text .= "\n\n*Comment*\n" . $comment;
    }

    $text .=  $trainingCoordinator . "\n";
    $text .=  'Training Coordination' . "\n\n";
    $text .=  'Phone +41-43 20 40 800' . "\n";
    $text .=  'training@greenliff.com' . "\n\n";
    $text .=  'Greenliff AG, Technoparkstrasse 1, CH-8005 Zuerich, www.greenliff.com' . "\n";

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

    	if(@mail($e_mail,$betreff,$text,$headers))
      {
        $meldung = "<p>Thank you very much for your registration.</p>\n<p>You will receive a confirmation email in the next minutes, and a paper confirmation with normal mail in the next days.</p>";
        $success = true;
        $readonly = ' readonly="readonly"';
      }
      else {
        $meldung = 'Your request could not be processed due to an unexpected problem. Please <a href="mailto:info@greenliff.com">inform us</a> about the problem so we can fix it and contact you regarding your registration.';
        $fehler = true;
      }
    }
    
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Certified Tester - Registration</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
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
      <div id="scrollcontent" class="courses">
        <div class="startspalte">
          <h1>Registration</h1>
          <h2><?php echo $kurse[$kursid]["training"]; ?></h2>
          <div class="div1">
            <span class="label required">Date</span><?php echo $kurse[$kursid]["date"]; ?>
          </div> 
          <div class="div1">
            <span class="label required">Location</span><?php echo $kurse[$kursid]["location"]; ?>
          </div> 
          <div class="div1">
            <span class="label required">Fee (CHF)</span><?php echo $kurse[$kursid]["fee"]; ?>
          </div>
          <div class="div1">
            <span class="label required">Language</span><?php echo $kurse[$kursid]["language"]; ?>
          </div>
          
          <a name="Address"></a>
          <form method="post" action="<?php echo $datei; ?>" style="margin-top: 30px;">
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $company == "") echo " marker"; ?>">Company</span><input type="text" name="company"<?php echo $readonly; ?> class="formfeld" value="<?php echo $company; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Department</span><input type="text" name="department"<?php echo $readonly; ?> class="formfeld" value="<?php echo $department; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $title == "") echo " marker"; ?>"><!-- Title --></span><input type="radio" name="title" value="Mr." <?php if($title == "Mr.") { echo ' checked="checked"'; } ?> /><span class="<?php if($fehler && $title == "") echo " marker"; ?>">Mr.</span> <input type="radio" name="title" value="Ms." <?php if($title == "Ms.") { echo ' checked="checked"'; } ?> style="margin-left:20px;" /><span class="<?php if($fehler && $title == "") echo " marker"; ?>">Ms.</span>
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $firstname == "") echo " marker"; ?>">First name</span><input type="text" name="firstname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $firstname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $lastname == "") echo " marker"; ?>">Last name</span><input type="text" name="lastname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $lastname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $phone == "") echo " marker"; ?>"">Phone</span><input type="text" name="phone"<?php echo $readonly; ?> class="formfeld" value="<?php echo $phone; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Fax</span><input type="text" name="fax"<?php echo $readonly; ?> class="formfeld" value="<?php echo $fax; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $e_mail == "") echo " marker"; ?>">E-Mail</span><input type="text" name="e_mail"<?php echo $readonly; ?> class="formfeld" value="<?php echo $e_mail; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $street == "") echo " marker"; ?>">Address</span><input type="text" name="street"<?php echo $readonly; ?> class="formfeld" value="<?php echo $street; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $zip == "") echo " marker"; ?>">ZIP</span><input type="text" name="zip"<?php echo $readonly; ?> class="formfeldkurz" value="<?php echo $zip; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $city == "") echo " marker"; ?>">City</span><input type="text" name="city"<?php echo $readonly; ?> class="formfeld" value="<?php echo $city; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Country</span><input type="text" name="country"<?php echo $readonly; ?> class="formfeldkurz" value="<?php echo $country; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Exam</span><input type="checkbox" name="exam" value="no"<?php if($exam == "no") { echo ' checked="checked"'; } ?> />&nbsp;I will <span class="marker">not take the exam</span> at the end of the seminar
            </div>
            
            <a name="Home_Address"></a><h3 style="margin-top: 30px;">Personal Information</h3>
            <p>This information is needed for the ISTQB&#174; certificat. You only need to fill it in if you take the exam.</p>
            <div class="div1">
              <span class="formlabel required<?php if($exam_fehler && $home_address == "") echo " marker"; ?>">Home address</span><input type="text" name="home_address"<?php echo $readonly; ?> class="formfeld" value="<?php echo $home_address; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($exam_fehler && $home_zip == "") echo " marker"; ?>">Home ZIP</span><input type="text" name="home_zip"<?php echo $readonly; ?> class="formfeldkurz" value="<?php echo $home_zip; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($exam_fehler && $home_city == "") echo " marker"; ?>">Home City</span><input type="text" name="home_city"<?php echo $readonly; ?> class="formfeld" value="<?php echo $home_city; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($exam_fehler && $date_of_birth == "") echo " marker"; ?>">Date of birth</span><input type="text" name="date_of_birth"<?php echo $readonly; ?> class="formfeld" value="<?php echo $date_of_birth; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($exam_fehler && $place_of_birth == "") echo " marker"; ?>">Place of birth (Heimatort)<br />
Place of origin</span><input type="text" name="place_of_birth"<?php echo $readonly; ?> class="formfeld" value="<?php echo $place_of_birth; ?>" style="margin-top:10px;" />
            </div>
            
            <a name="Invoice_Address"></a><h3 style="margin-top: 30px;">Invoice address</h3>
            <p>Different invoice address? <input type="checkbox" name="invoice_address" value="yes"<?php if($invoice_address == "yes") { echo ' checked="checked"'; } ?> />	Yes</p>
	          
            <div class="div1">
              <span class="formlabel required<?php if($invoice_fehler && $invoice_company == "") echo " marker"; ?>">Company</span><input type="text" name="invoice_company"<?php echo $readonly; ?> class="formfeld" value="<?php echo $invoice_company; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Department</span><input type="text" name="invoice_department"<?php echo $readonly; ?> class="formfeld" value="<?php echo $invoice_department; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($invoice_fehler && $invoice_firstname == "") echo " marker"; ?>">First name</span><input type="text" name="invoice_firstname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $invoice_firstname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($invoice_fehler && $invoice_lastname == "") echo " marker"; ?>">Last name</span><input type="text" name="invoice_lastname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $invoice_lastname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($invoice_fehler && $invoice_phone == "") echo " marker"; ?>">Phone</span><input type="text" name="invoice_phone"<?php echo $readonly; ?> class="formfeld" value="<?php echo $invoice_phone; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($invoice_fehler && $invoice_street == "") echo " marker"; ?>">Address</span><input type="text" name="invoice_street"<?php echo $readonly; ?> class="formfeld" value="<?php echo $invoice_street; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($invoice_fehler && $invoice_zip == "") echo " marker"; ?>">ZIP</span><input type="text" name="invoice_zip"<?php echo $readonly; ?> class="formfeldkurz" value="<?php echo $invoice_zip; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($invoice_fehler && $invoice_city == "") echo " marker"; ?>">City</span><input type="text" name="invoice_city"<?php echo $readonly; ?> class="formfeld" value="<?php echo $invoice_city; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Country</span><input type="text" name="invoice_country"<?php echo $readonly; ?> class="formfeldkurz" value="<?php echo $invoice_country; ?>" />
            </div>
            <div class="div1" style="margin-top: 30px;">
              <span class="formlabel">Comment</span><textarea name="comment"<?php echo $readonly; ?> class="textarea" cols="" rows=""><?php echo $comment; ?></textarea>
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $terms == "") echo " marker"; ?>">Terms &#38;<br />
              Conditions</span><br />
              <input type="checkbox" name="terms" value="yes"<?php if($terms == "yes") { echo ' checked="checked"'; } ?> />&nbsp;I have read and accepted the <a href="conditions.php">terms and conditions</a> 
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
          <h3>More Information</h3>
          <p>Did you read our <a href="conditions.php">terms and conditions</a>?</p>
          <p>All fees are given in CHF excluding legal VAT. When taking an exam, additional examination fees will be charged by the certification partner. </p>

        </div>
<?php
}
else if($fehler || $invoice_fehler || $exam_fehler)
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
          <h3>Coming soon!</h3>
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
