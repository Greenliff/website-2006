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
    <title>Past Events: Trends in Testing, Swiss Test Day, Software Quality Days,...</title>
    <meta name="keywords" content="Greenliff, Software Testing, Test Consultancy, Test Automation, Performance Testing, Test Case, Test Tool Development, Financial Application Testing, Mobile Application Testing, Test Oursourcing, Fast, Zurich, Zuerich, Zürich" />
    <meta name="description" content="" />
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
      <div id="scrollcontent">
        <h1>Past Events</h1>

        <div class="event">
          <div class="spalte1">
            <img src="../images/event.png" /><br ><br />
				<h3>Greenliff Afternoon Talks</h3>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 28. November 2012</h2>
            <h3 style="padding-top: 11px;padding-bottom: 5px;">
					<a href="121128_sign-in.php">Crowd &amp; Cloud based Testing</a>
				</h3>
				How can you utilize millions of testers on the Internet to execute your test project in quick and cost-saving manner?<br /><br />
				Organised in cooperation with <a href="http://www.pass.ch/" target="_blank">PASS Technology AG</a><br />              
            Location: Clouds on top of Prime Tower Zurich<br /><br />
            Topics:
            <ul>
              <li>
					The Crowd in the Cloud <br />
					Carl Esposti (Founder and CEO crowdsourcing.org)
				  </li>
              <li>
					eBay's Crowd Testing Strategy<br />
					Michael Palotas (Head Quality Engineering Europe, eBay International)
				  </li>
              <li>
					How Crowd Testing works <br />
					Dieter Speidel (CEO PASS Group)
				  </li>
              <li>
					Cloud Scale Testing <br />
					Joachim Büchse (Managing Director Greenliff)
				  </li>
            </ul>
            <p>
              <a href="../docs/Event_Agenda_Cloud_Crowd_based_On-Demand_Testing.pdf" target="_blank">More information (PDF)</a><br />
            </p>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <img src="../images/event.png" /><br />
				<br />
				<h3>Greenliff Afternoon Talks</h3>
          </div>

          <div class="spalte2Breit">
            <h2>Zürich, 20. November 2012</h2>
            <h3 style="padding-top: 11px;padding-bottom: 5px;">
					<a href="121120_sign-in.php">Brauchen Agile Software-Projekte eine Prozessverbesserung?</a>
				</h3>
				Mit dieser Frage beschäftigten wir uns in einem unserer Greenliff Afternoon Talks. Drei Experten berichteten in diversen 
				Bereichen darüber, welche Erfahrungen sie mit agilen Entwicklungsprojekten bereits gemacht haben. Wir danken Herrn 
				Dr. Ernest Wallmüller, Herrn Carl Worms und Herrn Martin Voss für den gelungenen Event und ihre tolle Arbeit als Referenten.
				<br />
				<br />

				Organisiert zusammen mit <a href="http://www.itq.ch/" target="_blank">Qualiät &amp; Informatik</a><br />              
				Ort: Technopark Zürich<br /><br />
				<p>
               <a href="../docs/Agile_Software_Qualitaetsverbesserung_14092012.pdf" target="_blank">Weitere Informationen (PDF)</a><br />
				</p>
          </div>
        </div>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <a href="http://www.medical-cluster.ch/index.php?section=calendar&cmd=detail&catid=0&key=4" target="_blank"><img src="../images/events/logo_art-of-technology.png" alt="Art of Technology" /></a>
          </div>

          <div class="spalte2Breit">
				<h2>Zürich, 26. Oktober 2012</h2>
				<h3 style="padding-top: 11px;padding-bottom: 5px;">
					<a href="http://www.medical-cluster.ch/index.php?section=calendar&cmd=detail&catid=0&key=4" target="_blank">[INSIGHT] Art of Technology AG<br />
					Aufbau und Betrieb eines automatisierten Testroboters für Hörgeräte</a>
				</h3>
				<p>
					Ort: Technopark Zürich<br />
					Referent: Alexander Houben (Greenliff AG) &amp; Phonak<br />
               <a href="../docs/insight.pdf" target="_blank">Weitere Informationen (PDF)</a><br />
				</p>
          </div>
        </div>

        <div class="event" style="margin-top:10px;">
          <div class="spalte1">
            <a href="../docs/Greenliff_STD2012-Flyer.pdf" target="_blank"><img src="../images/events/trends_in_testing.png" alt="Logo Trends in Testing" width="150" height="74" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zürich, 03. April 2012</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3 style="padding-top: 11px;">Trends in Testing 2012</h3>
              <div class="bildlinks" style="padding-top: 11px;">
                <img src="../images/events/test_nonstop.png" width="100" height="99" />
              </div>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Have you ever wondered what it would take to implemented continuous integration and test nonstop in your projects? We did! Together with imbus, we made it possible that over 40 Testers shared their ideas and swapped experiences on the subject.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.swisstestingday.ch/" target="_blank"><img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit" style="margin-top:10px;">
            <h2>Zurich, 14. March 2012</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>It was a great pleasure to be partner of the <a href="http://www.swisstestingday.ch/" target="_blank">Swiss Testing Day 2012</a>.</p>
              <p>Greenliff showed cutting edge solutions for Test Management and Test Automation. Especially our demonstration of automated App testing for iPhones and iPads did draw the attention of many visitors.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="../docs/110927_TrendsinTestingZuerich.pdf" target="_blank"><img src="../images/events/trends_in_testing.png" alt="Logo Trends in Testing" width="150" height="74" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 27. September 2011</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Testautomatisierung out-of-the-box!</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff and Imbus had a talk about Test automation.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://internet-briefing.ch" target="_blank"><img src="../images/events/internet-briefing.gif" alt="Logo Internet Briefing" width="160" height="10" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 05. April 2011</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Testing of Mobile Applications</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Markus Pilz from Greenliff had a talk on "<a href="http://internet-briefing.ch/index.cfm?page=101498&amp;anlass_id=271" target="_blank">Testen von Mobilen Applikationen</a>".</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.swisstestingday.ch/" target="_blank"><img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 16. March 2011</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was Goldsponsor of the Swiss Testing Day 2011.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.swisstestingday.ch/" target="_blank"><img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 17. March 2010</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was present with a booth at the Swiss Testing Day 2010.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.iqnite-conferences.com/" target="_blank"><img src="../images/events/sqs-conferences_09.gif" alt="Logo Software &amp; Systems Quality Conference 2009" width="182" height="54" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 15. September 2009</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Software &amp; Systems Quality Conference 2009</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was again sponsor of the Software &amp; Systems Quality Conference Zurich 2009.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.swisstestingday.ch/" target="_blank"><img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 18. March 2009</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was present with a booth at the Swiss Testing Day 2009.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.software-quality-days.at/" target="_blank"><img src="../images/events/Logo_SWQD.gif" width="160" height="70" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Vienna, 20. - 22. January 2009</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Software Quality Days 2009</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was the Swiss event partner for the 2009 Software Quality Days in Vienna, Austria.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.jug.ch/eventdetail.php?year=2008&event=android_experience" target="_blank"><img src="../images/events/android.gif" alt="Android Experience Day at Java User Group Switzerland" width="160" height="35" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Windisch, 3. December 2008</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Android Experience Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Markus Pilz and Peter Wlodarczak had a talk at the Android Experience Day. Read more about it <a href="http://www.jug.ch/eventdetail.php?year=2008&event=android_experience" target="_blank">here</a>.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.iqnite-conferences.com/" target="_blank"><img src="../images/events/sqs-conferences_08.gif" alt="Logo Android" width="182" height="54" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 2. + 3. September 2008</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Software &amp; Systems Quality Conference 2008</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was Software &amp; Systems Quality Conference 2008 sponsor. We were present with a booth and with a talk on <a href="../products/">Fast!</a>.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://jazoon.com/portals/0/Content/ArchivWebsite/jazoon.com/jazoon08/en.html" target="_blank"><img src="../images/events/jazoon08.gif" width="160" height="24" alt="Jazoon'08" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 23. - 27. June 2008</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>JAZOON'08</h3>
              <p>The international conference on Java technology</p>
            </div>
            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was present at the Jazoon 08 with 2 talks on Java technology for the mobile world. Peter Wlodarczak talked about the all new <a href="http://jazoon.com/jazoon08/en/conference/presentationdetails.html?type=sid&amp;detail=3661" target="_blank">Google phone and Android</a> and Carol Hamer talked about the <a href="http://jazoon.com/jazoon08/en/conference/presentationdetails.html?type=sid&amp;detail=2640" target="_blank">customization of mobile applications for different handsets</a></p>
              <p>Size does not matter! Beeing a small company, Greenliff is very proud that two of its submissions have been accepted at such an important Java conference!</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.jug.ch/" target="_blank"><img src="../images/events/jugs-logo-20.gif" width="164" height="59" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 29. Mai 2008</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Java User Group Switzerland: RIA for Mobile Devices</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Markus Pilz and Peter Wlodarczak talked about the <a href="http://www.jug.ch/eventdetail.php?year=2008&event=android" target="_blank">Google phone and the Android GUI Framework</a>. Download the <a href="http://www.jug.ch/events/slides/080529_The_Android_platform_v2.0_Handouts.pdf" target="_blank">slides here</a>.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.swisstestingday.ch/" target="_blank"><img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 19. March 2008</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was present with a boot at the yearly main gathering of Swiss software testers. It was great to see you all again. </p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.openhandsetalliance.com/" target="_blank"><img src="../images/events/android.gif" alt="Logo Android" width="160" height="35" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 25. February 2008</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>TekZone081: <br />
              Google Goes Mobile</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Markus Pilz from Greenliff participated in the TekZone roundtable discussion on Android and the Google phone. <a href="http://www.tekzone.ch/program/program2008/tekzoneforum-081/index.html" target="_blank">Read more</a>.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.finance-forum.com/" target="_blank"><img src="../images/events/finance_forum.gif" width="165" height="42" alt="Finance Forum" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 6. + 7. November 2007</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>17. Finance Forum</h3>
            </div>
            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff was exhibiting at the number one conference on IT for finance.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.iqnite-conferences.com/" target="_blank"><img src="../images/events/sqs-conferences_07.gif" width="182" height="52" alt="SOFTWARE &amp; SYSTEMS QUALITY CONFERENCES" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 25. + 26. September 2007</h2>
            <div class="spalte2" style="padding-top: 10px;">
              <h3>Software &amp; Systems Quality Conference 2007</h3>
            </div>

            <div class="spalte3" style="padding-top: 10px;">
              <p>Greenliff is Software &amp; Systems Quality Conference 2007 sponsor. And we showed the latest Fast! features: RSS feed support and the integration of static code analyzes tools.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://jazoon.com/portals/0/Content/ArchivWebsite/jazoon.com/jazoon07/en.html" target="_blank"><img src="../images/events/logo_jazoon.gif" width="165" height="25" alt="Jazoon'07" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 24. - 28. June 2007</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>JAZOON'07</h3>
              <p>The international conference on Java technology</p>
            </div>
            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff participated in the Jazoon '07 conference together with Agitar. Participants could bring their projects and generate unit tests for it right there at the show.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.swisstestingday.ch/" target="_blank"><img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 14. March 2007</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff shows both its <a href="/products/">Fast!</a> test execution environment and automated JUnit generation with <a href="/products/agitarone.php">AgitarOne</a>.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.agitar.com/" target="_blank"><img src="../images/partners/agitar.gif" width="173" height="83" alt="Agitar" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 14. March 2007</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Greenliff becomes Agitar reseller for Switzerland</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>AgitarOne is a comprehensive, fully integrated, unit testing solution. As Agitar reseller, Greenliff provides comprehensive product and services solutions to ensure customer success with implementing developer testing.<br />
              <a href="/products/agitarone.php">Read more...</a></p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.istqb.org/" target="_blank"><img src="../images/istqb_ct.gif" width="134" height="101" alt="ISTQB&#174; Certified Tester" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 2. November 2006</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Greenliff to offer ISTQB&#174; Certified Tester trainings</h3>
              <p>in collaboration with imbus</p>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff organizes both Foundation Level and Advanced level courses, open courses and company courses in English and German. All seminars are run by imbus, an ISTQB&#174; accredited training provider.<br />
              <a href="../docs/061102_Medienmitteilung.pdf" target="_blank">Read more...</a></p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.iqnite-conferences.com/" target="_blank"><img src="../images/events/sqs-conferences_06.gif" width="182" height="52" alt="SOFTWARE &amp; SYSTEMS QUALITY CONFERENCES" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 5. + 6. September 2006</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Software &amp; Systems Quality Conference 2006</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff is Software &amp; Systems Quality Conference sponsor.<br />
              Greenliff demonstrates the latest features with <a href="/products/">Fast!</a>, its automated test execution environment.</p>
            </div>
          </div>
        </div>

        <div class="event">
          <div class="spalte1">
            <a href="http://www.swisstestingday.ch/" target="_blank"><img src="../images/events/logo_swisstestingday.gif" width="161" height="77" alt="Swiss Testing Day" /></a>
          </div>

          <div class="spalte2Breit">
            <h2>Zurich, 15. March 2006</h2>
            <div class="spalte2" style="padding-top: 11px;">
              <h3>Swiss Testing Day</h3>
            </div>

            <div class="spalte3" style="padding-top: 11px;">
              <p>Greenliff presents its fully automatic test execution envirionment Fast!.<br />
              <a href="/docs/FAST_White_Paper_v_11.pdf" target="_blank">read more</a>...</p>
            </div>
          </div>
        </div>

      </div>
<?php include_once("../includes/footer.html"); ?>
    </div>
  </body>
</html>
