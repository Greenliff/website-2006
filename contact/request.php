<?php
$array = explode ('/', $_SERVER['PHP_SELF']);
$pfad = $array[1];
$datei = $array[2];
$array = explode('.', $datei);
$datei = $array[0];

// Schaedliche Eingaben filtern, Formularspam aussortieren
require_once("../includes/funktionen.inc.php");
$missbrauch = formularmissbrauch($_REQUEST);
if(isset($_GET))
{
  $_GET = array_map('_filterData',$_GET);
}
if(isset($_POST))
{
  $_POST = array_map('_filterData',$_POST);
}

// Variablen initialisieren
$empfaenger = "info-request@greenliff.com";
//$empfaenger = "uburri@netweaver.ch";
$checked1 = "";
$checked2 = "";
$checked3 = "";
$information = "";
$fullname = "";
$company = "";
$e_mail = "";
$phone = "";
$other = "";
$readonly = "";
$fehler = false;
$success = false;

if(isset($_POST["send"]))
{
  $fullname = $_POST["fullname"];
  $company = $_POST["company"];
  $e_mail = $_POST["e_mail"];
  $phone = $_POST["phone"];
  $other = $_POST["other"];
    
  if(isset($_POST["contact"]) && $_POST["contact"] == "contact")
  {
    $information .= "Please contact me\n";
    $checked1 = ' checked="checked"';
  }
  if(isset($_POST["brochure"]) && $_POST["brochure"] == "brochure")
  {
    $information .= "Send me a Greenliff company brochure.\n";
    $checked2 = ' checked="checked"';
  }
  if(isset($_POST["mailing_list"]) && $_POST["mailing_list"] == "mailing_list")
  {
    $information .= "Add me to the Greenliff mailing list.\n";
    $checked3 = ' checked="checked"';
  }
  if($other != "")
  {
    $information .= $other."\n";
  }
  
  // leere Felder
  if($fullname == "" || $e_mail == "")
  {
    $meldung = "Please fill in all required fields and we will contact you as soon as possible.";
    $fehler = true;
  }
  // E-Mail ist formal nicht korrekt
  else if(!teste_email($e_mail))
  {
    $meldung = "Invalid email address.";
    $fehler = true;
  }
  // Keine Checkbox gewaehlt
  else if($information == "")
  {
    $meldung = "Please specify your request.";
    $fehler = true;
  }
  else
  {
    $information .= "\n";
    
    $extra = "MIME-Version: 1.0\nContent-Type: text/plain; charset=iso-8859-1\nContent-Transfer-Encoding: quoted-printable\n";
    $betreff = "Request";
    $text = $information;
    $text .= "Name..........: ".$fullname."\n";
    if($company != "")
    {
      $text .= "Company.......: ".$company."\n";
    }
    $text .= "E-Mail-Address: ".$e_mail."\n";
    if($phone != "")
    {
      $text .= "Phone.........: ".$phone."\n";
  	 }
    $ip = $_SERVER['REMOTE_ADDR'];
	 $text .= "\nIP............: ".$ip."\n";
    $host = gethostbyaddr($ip);
    if($host != "") {
	 	$text .= "Hostname......: ".$host."\n";
    }

  	// E-Mail-Versand
    if(!$missbrauch)
    {
    	if(@mail($empfaenger,$betreff,$text,$extra."From: website@greenliff.com\nReply-To: ".$e_mail."\nX-Mailer: PHP/".phpversion()))
      {
        $meldung = "Thank you very much for your interest in our company. We handle your
request you as soon as possible.";
        $success = true;
        $readonly = ' readonly="readonly"';
      }
      else {
        $meldung = 'Your request could not be processed due to an unexpected problem. Please <a href="mailto:info@greenliff.com">inform us</a> about the problem so we can fix it and contact you regarding your request.';
        $fehler = true;
      }
        //echo nl2br($text);
    }
    
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>    
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greenliff: Online request</title> 
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Z�rich" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/contact.css" media="screen" />
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
      <div id="content" class="contact">
        <div class="startspalte">
          <h2>Please enter your details for your online request.</h2>
          <form name="interest" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="div4">
              <span class="formlabel required<?php if($fehler && $fullname == "") echo " marker"; ?>">Name</span><input type="text" name="fullname"<?php echo $readonly; ?> class="formfeld" value="<?php echo $fullname; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel required<?php if($fehler && $e_mail == "") echo " marker"; ?>">E-Mail</span><input type="text" name="e_mail"<?php echo $readonly; ?> class="formfeld" value="<?php echo $e_mail; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Company</span><input type="text" name="company"<?php echo $readonly; ?> class="formfeld" value="<?php echo $company; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Phone</span><input type="text" name="phone"<?php echo $readonly; ?> class="formfeld" value="<?php echo $phone; ?>" />
            </div>
            <div class="div5">
              Interest
            </div>
            <div class="div3">
            <input type="checkbox" name="contact"<?php echo $readonly; ?> value="contact"<?php echo $checked1; ?> class="ie6korrektur" />&nbsp;Contact me<br />
            <input type="checkbox" name="brochure"<?php echo $readonly; ?> value="brochure"<?php echo $checked2; ?> class="ie6korrektur" />&nbsp;Send me a Greenliff company brochure<br />
            <input type="checkbox" name="mailing_list"<?php echo $readonly; ?> value="mailing_list"<?php echo $checked3; ?> />&nbsp;Add me to the Greenliff mailing list
            </div>
            <div class="div1">
              <span class="formlabel">Comment</span><textarea name="other"<?php echo $readonly; ?> class="textarea" cols="" rows=""><?php echo $other; ?></textarea>
            </div>
<?php
if(!$success)
{
?>
            <div class="div2">
            <input type="submit" name="send" value="send" class="submit" />
            </div>
<?php
}
?>
          </form> 
        </div> 
      
<?php
if($fehler)
{
?>        
        <div class="news">
          <h3>Information Request</h3>
          <p><?php echo $meldung; ?></p>
        </div>
<?php
}
else if($success)
{
?>        
        <div class="news">
          <h3>Information Request</h3>
          <p><?php echo $meldung; ?></p>
        </div>
<?php
}
?>
      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
