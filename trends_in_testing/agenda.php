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
        <h1>Agenda und Vorträge</h1>

        <div style="margin-top:10px;">
          <h2>Datum: 19. März 2013 </h2>
          <p><strong>Ort:</strong> Holiday Inn Oerlikon, Zürich Oerlikon</p>
          <p>Die Veranstaltung ist für Sie kostenlos. Allen Teilnehmern stehen die Vortragsfolien nach der Veranstaltung im Downloadbereich zur Verfügung.</p>
          <table>
            <tr>
              <td style="width:100px;">09:00 - 09:30</td>
              <td>Registrierung</td>
            </tr>
            <tr>
              <td>09:30 - 09:40</td>
              <td>Begrüssung</td>
            </tr>
            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">09:40 - 10:00</td>
              <td class="tdSpalte tablehead">Warum können Normen helfen?</td>
            </tr>

            <tr>
              <td></td>
              <td>
<p>Der am häufigsten genannte Grund, Normen zu nutzen, ist die Erfüllung gesetzlicher Vorgaben, z.B. Zertifizierungsvorschriften.</p>
<p>Damit wird das Thema schnell unliebsam und der Nutzen angesichts des Zwangs oft nicht entsprechend gewertet. Dieser Eröffnungsbeitrag motiviert zu erkennen, dass die Nutzung vorhandener Expertise immer ein Gewinn ist; auch für diejenigen, die nicht gesetzlich dazu "verdonnert" sind. Gerade das Qualitätsmanagement kann als Unterstützungsprozess ideal vom Wissen vorheriger Spezialisten-Generationen partizipieren und damit dem Unternehmen Freiräume schaffen, sich auf die Kernkompetenzen in ihrer Domäne zu konzentrieren.</p>
<p>Normen sind ein exzellentes Vehikel, mit  dem sich dieses Spezialistenwissen in die eigene Firma transportieren lässt.</p>
<p>Das Rad neu zu erfinden, lohnt sich eben nur für neue Räder!</p> 
              </td>
            </tr>
            <tr>
              <td>10:00 - 10:30</td>
              <td>Pause &ndash; "Meet the Experts"</td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">10:30 - 11:30</td>
              <td class="tdSpalte tablehead">Der Weg zur Norm</td>
            </tr>
            <tr>
              <td></td>
              <td>
<p>Es ist offensichtlich - die Normungsgremien dieser Welt sind höchst produktiv. Eine kaum überschaubare Anzahl von Standards wird jährlich verabschiedet, überarbeitet und veröffentlicht.</p>
<p>Viele davon betreffen die Arbeit in der Sofwarebranche, einige spezifisch den Softwaretest.</p>
<p>Wie kommt es zu einem Standard, und wer ist am Entwicklungsprozess beteiligt?</p>
<p>In diesem Vortrag geht es um den Weg von der Motivation zur Erstellung von Standards um Ideen, den Entscheidungsweg bis hin zum Lebenszyklus des Standards, vor dem Hintergrund nationaler und internationaler Gremien und deren Zusammenarbeit.</p>
				</td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">11:30 - 12:30</td>
              <td class="tdSpalte tablehead">ISO/IEC 29119 - Juwelen des Softwaretest</td>
            </tr>
            <tr>
              <td></td>
              <td>
<p>Als Füllhorn, voll von Anregungen für Prozesse und Dokumente, bereichert sie jeden Software Entwicklungsprozess.</p>
<p>Ihre Ideen und Konzepte bringen Impulse für Arbeit und Erfolg der Projekte. Aber woraus besteht der Schatz ISO/IEC 29119?</p>
<p>Wie kann man ihn finden? Dieser Vortrag führt zur Schatztruhe. Lassen Sie sich die Kostbarkeiten erklären und nutzen Sie die ISO/IEC 29119 als Leitfaden zur Erreichung wirtschaftlicher und qualitativ hochwertiger Projektergebnisse.</p>
              </td>
            </tr>


            <tr>
              <td>12:30 - 14:00</td>
              <td>Mittagspause &ndash; "Meet the Experts"</td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">14:00 - 15:00</td>
              <td class="tdSpalte tablehead">DIN ISO IEC 29119: Nitro oder Bremse?</td>
            </tr>
            <tr>
              <td></td>
              <td>
<p>Nach vielen Jahren Arbeit im ISO/IEC Normenausschuss JTC1 SC7 ist es nun soweit:</p>
<p>Der neue, vierteilige Standard ISO/IEC 29119 steht kurz vor der Fertigstellung, und wird, wie IEEE 829 und BS 7925 vor ihm, zum langjährigen Wegbegleiter der Softwaretest-Experten werden.</p>
<p>Was bringt der neue Standard mit sich?</p>
<p>Dieser Vortrag beantwortet die praktischen Fragen der neuen Norm, mit dem Schwerpunkt Softwaretest-Dokumentation:<br />
	Welche Dokumente machen beim Testen Sinn? Wie hängen diese Dokumente zusammen?
</p>
<p>Was sind die Inhalte des Standards, und wie lässt sich dieser  in einem klassischen oder beispielsweise in einem agilen Prozess anwenden?</p>
              </td>
            </tr>

            <tr>
              <td>15:00 - 15:30</td>
              <td>Pause &ndash; "Meet the Experts"</td>
            </tr>

            <tr>
              <td class="tdSpalte tablehead" style="width:100px;">15:30 - 16:45</td>
              <td class="tdSpalte tablehead">Gibt es das? Normenkonform arbeiten und berichten ohne Mühe?</td>
            </tr>
            <tr>
              <td></td>
              <td>
<p>Landläufig wird meist festgestellt, dass normenkonformes Arbeiten einher geht mit vielen extra Aufwänden zum Nachweis der Konformität, die man ohne die Normen nicht hätte.</p>
<p>Hierbei gilt als einer der Aufwandstreiber das Berichtswesen bzw. das Bereitstellen korrekter und ausreichender Daten für diese Berichte, die die notwendigen Nachweise liefern sollen. So mancher Testmanager kennt die Situation, dass er erst lange Informationen erheben und konsolidieren muss, bis er einen aussagekräftigen Bericht erzeugen kann.</p>
<p>Wenn die Prüfung der Daten auf Korrektheit und ausreichend für die Berichte erst kurz vor der Erstellung der Berichte oder gar erst auf Basis der erstellten Berichte stattfindet, ist das sicher immer wieder der Fall.</p>
<p>Im Blick auf ein schnelles, schlankes und hinsichtlich der Normenkonformität korrektes Berichtswesen lohnt sich der Einsatz von Werkzeugen und ein frühzeitiges Prüfen der zugrunde liegenden Daten.</p>
<p>Wie so oft ist der richtige Werkzeugeinsatz an der richtigen Stelle entscheidend, der fast nebenbei ein schnelles, vollständiges und laufend wiederholbares Berichtswesen ermöglicht.</p> 
              </td>
            </tr>
            <tr>
              <td>ab 16:45 Uhr</td>
              <td>Closing mit anschliessendem Get Together</td>
            </tr>
          </table>

        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
