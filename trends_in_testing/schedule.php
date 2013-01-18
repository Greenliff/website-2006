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
    <title>Greenliff: Trends in Testing 2012 - Referenten</title>
		<meta name="description" content="Greenliff is an independent Engineering and Service company focused on software testing and quality control. Serving customers in the telecom, the industrial, the medical and the finance sectors, we specialize in test consultancy, test automation and the development of test solutions covering the entire software life cycle from specification to maintenance." />
    <link rel="stylesheet" type="text/css" href="/styles/screen.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/styles/trendsintesting.css" media="screen" />
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
        <h1>Termine</h1>
        <div style="margin-top:10px;">
          <table>
            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">19. März 2013</td>
              <td class="tdSpalte tablehead" style="width:400px;">Zürich</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p>Holiday Inn Oerlikon, Wallisellenstrasse 48, 8050 Zürich<br />
                09:30 bis 17:00 Uhr mit anschliessendem Apéro<br />
                <a href="sign-in.php">Zur Anmeldung</a></p>
              </td>
            </tr>
          </table>

          <h2>Weitere Termine in Deutschland</h2>
          <table style="margin-top:10px;">
            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">21. Februar 2013</td>
              <td class="tdSpalte tablehead" style="width:400px;">Hamburg</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p>Gastwerk Hotel Hamburg, Beim Alten Gaswerk 3, 22761 Hamburg<br />
                09:30 bis 17:00 Uhr mit anschliessendem Get-Together<br />
                <a href="https://www.imbus.de/veranstaltungen/trends-in-testing-2013/anmeldung/" target="_blank">Zur Anmeldung</a></p>
              </td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">28. Februar 2013</td>
              <td class="tdSpalte tablehead">Nürnberg</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p>Ofenwerk Nürnberg, Klingenhofstraße 72, 90411 Nürnberg<br />
                09:30 bis 17:00 Uhr mit anschliessendem Get-Together<br />
                <a href="https://www.imbus.de/veranstaltungen/trends-in-testing-2013/anmeldung/" target="_blank">Zur Anmeldung</a></p>
              </td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">05. Mär 2013</td>
              <td class="tdSpalte tablehead">Filderstadt</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p>NH Hotel Stuttgart Airport, Bonländer Hauptstr. 145, 70794 Filderstadt<br />
                09:30 bis 17:00 Uhr mit anschliessendem Get-Together<br />
                <a href="https://www.imbus.de/veranstaltungen/trends-in-testing-2013/anmeldung/" target="_blank">Zur Anmeldung</a></p>
              </td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">07. März 2013</td>
              <td class="tdSpalte tablehead">München</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p>SkyLounge München, Dingolfinger Str. 7, 81673 München<br />
                09:30 bis 17:00 Uhr mit anschliessendem Get-Together<br />
                <a href="https://www.imbus.de/veranstaltungen/trends-in-testing-2013/anmeldung/" target="_blank">Zur Anmeldung</a></p>
              </td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">12. März 2013</td>
              <td class="tdSpalte tablehead">Bonn</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p>Rheinisches LandesMuseum, Colmantstraße 14-16, 53115 Bonn<br />
                09:30 bis 17:00 Uhr mit anschliessendem Get-Together<br />
                <a href="https://www.imbus.de/veranstaltungen/trends-in-testing-2013/anmeldung/" target="_blank">Zur Anmeldung</a></p>
              </td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">14. März 2013</td>
              <td class="tdSpalte tablehead">Hofheim am Taunus</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <p>Stadthalle Hofheim, Chinonplatz4, 65719 Hofheim am Taunus<br />
                09:30 bis 17:00 Uhr mit anschliessendem Get-Together<br />
                <a href="https://www.imbus.de/veranstaltungen/trends-in-testing-2013/anmeldung/" target="_blank">Zur Anmeldung</a></p>
              </td>
            </tr>
	



          </table>

        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
