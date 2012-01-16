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
$checked4 = "";
$checked5 = "";
$checked6 = "";
$checked7 = "";
$information = "";
$datei = "index";
$fullname = "";
$company = "";
$e_mail = "";
$phone = "";
$other = "";
$comment = "";
$fehler = false;
$success = false;
$readonly = "";

if(isset($_GET['infos']))
{
  switch($_GET['infos'])
  {
    case "TestConsultancy":
      $checked1 = ' checked="checked"';
      $datei = "test_consultancy";
      break;
    case "TestEngineering":
      $checked4 = ' checked="checked"';
      $datei = "test_case_and_tool_development";
      break;
    case "TestAutomation":
      $checked2 = ' checked="checked"';
      $datei = "test_automation";
      break;
    case "PerformanceTesting":
      $checked3 = ' checked="checked"';
      $datei = "performance_testing";
      break;
    case "FinancialApplications":
      $checked5 = ' checked="checked"';
      $datei = "financial_application_testing";
      break;
    case "MobileApplication":
      $checked6 = ' checked="checked"';
      $datei = "mobile_application_testing";
      break;
    case "ManagedTestingServices":
      $checked7 = ' checked="checked"';
      $datei = "managed_testing_services";
      break;
  }
}

if(isset($_POST["send"]))
{
  if($_POST["company"] == strtolower('google') && $_POST["phone"] == strtolower('123456'))
  {
    $missbrauch = true;
  }
  $fullname = $_POST["fullname"];
  $company = $_POST["company"];
  $e_mail = $_POST["e_mail"];
  $phone = $_POST["phone"];
  $other = $_POST["other"];
  $comment = $_POST["comment"];

  if(isset($_POST["TestConsultancy"]) && $_POST["TestConsultancy"] == "TestConsultancy")
  {
    $information .= "* Test Consultancy\n";
    $checked1 = ' checked="checked"';
  }
  if(isset($_POST["TestEngineering"]) && $_POST["TestEngineering"] == "TestEngineering")
  {
    $information .= "* Test Engineering\n";
    $checked4 = ' checked="checked"';
  }
  if(isset($_POST["TestAutomation"]) && $_POST["TestAutomation"] == "TestAutomation")
  {
    $information .= "* Test Automation\n";
    $checked2 = ' checked="checked"';
  }
  if(isset($_POST["PerformanceTesting"]) && $_POST["PerformanceTesting"] == "PerformanceTesting")
  {
    $information .= "* Performance Testing\n";
    $checked3 = ' checked="checked"';
  }
  if(isset($_POST["FinancialApplications"]) && $_POST["FinancialApplications"] == "FinancialApplications")
  {
    $information .= "* Financial Application Testing\n";
    $checked5 = ' checked="checked"';
  }
  if(isset($_POST["MobileApplication"]) && $_POST["MobileApplication"] == "MobileApplication")
  {
    $information .= "* Mobile Application Testing\n";
    $checked6 = ' checked="checked"';
  }
  if(isset($_POST["ManagedTestingServices"]) && $_POST["ManagedTestingServices"] == "ManagedTestingServices")
  {
    $information .= "* Managed Testing Services\n";
    $checked7 = ' checked="checked"';
  }
  if($other != "")
  {
    $information .= "* ".$other."\n";
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
  // E-Mail ist formal nicht korrekt
  else if($information == "")
  {
    $meldung = "Please let us know about what you would like to receive more information.";
    $fehler = true;
  }
  else
  {
    $information .= "\n";

    $extra = "MIME-Version: 1.0\nContent-Type: text/plain; charset=iso-8859-1\nContent-Transfer-Encoding: quoted-printable\n";
    $betreff = "More Information";
    $text = "Please send me more information about: "."\n".$information;
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
    if($comment != "")
    {
      $text .= "\nComment:\n".$comment."\n";
  	}
  	// E-Mail-Versand
    if(!$missbrauch)
    {
    	if(@mail($empfaenger,$betreff,$text,$extra."From:".$e_mail."\nX-Mailer:PHP/".phpversion()))
      {
        $meldung = "Thank you very much for your interest in our services. We will contact you as soon as possible.";
        $success = true;
        $readonly = ' readonly="readonly"';
      }
      else {
        $meldung = 'Your request could not be processed due to an unexpected problem. Please <a href="mailto:info@greenliff.com">inform us</a> about the problem so we can fix it and contact you regarding your request.';
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
    <title>Greenliff: Please send me more information</title>
		<meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <meta name="language" content="en" />
		<meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/portfolio.css" media="screen" />
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
      <div id="content">
        <div class="startspalte">
          <h2>I would like to receive more information about...</h2>
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
              <input type="checkbox" name="TestConsultancy"<?php echo $readonly; ?> value="TestConsultancy"<?php echo $checked1; ?> class="ie6korrektur" />&nbsp;Test Consultancy<br />
              <input type="checkbox" name="TestEngineering"<?php echo $readonly; ?> value="TestEngineering"<?php echo $checked4; ?> />&nbsp;Test Engineering<br />
              <input type="checkbox" name="TestAutomation"<?php echo $readonly; ?> value="TestAutomation"<?php echo $checked2; ?> class="ie6korrektur" />&nbsp;Test Automation<br />
              <input type="checkbox" name="PerformanceTesting"<?php echo $readonly; ?> value="PerformanceTesting"<?php echo $checked3; ?> />&nbsp;Performance Testing<br />
              <input type="checkbox" name="FinancialApplications"<?php echo $readonly; ?> value="FinancialApplications"<?php echo $checked5; ?> />&nbsp;Financial Application Testing<br />
              <input type="checkbox" name="MobileApplication"<?php echo $readonly; ?> value="MobileApplication"<?php echo $checked6; ?> />&nbsp;Mobile Application Testing<br />
              <input type="checkbox" name="ManagedTestingServices"<?php echo $readonly; ?> value="ManagedTestingServices"<?php echo $checked7; ?> />&nbsp;Managed Testing Services
            </div>
            <div class="div1">
              <span class="formlabel">Other</span><input type="text" name="other"<?php echo $readonly; ?> class="formfeld" value="<?php echo $other; ?>" />
            </div>
            <div class="div1">
              <span class="formlabel">Comment</span><textarea name="comment"<?php echo $readonly; ?> class="textarea" cols="" rows=""><?php echo $comment; ?></textarea>
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
          <h3>Coming soon!</h3>
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
