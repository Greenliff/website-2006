
      <div id="navcontainer">
<?php
if(!isset($pfad))
{
  $pfad = "company";
}
?>

        <ul>
          <li><a href="/"<?php if ($pfad == "company" && $datei == "index") { echo ' class="doppelpfeil"'; } else if ($pfad == "company") { echo ' class="einfachpfeil"'; } ?>>Company</a><?php
if($pfad == "company" || ($pfad == "" && $datei != "imprint"))
{
?>
            <ul>
<?php
/*
              <li><a href="/company/protect.php"<?php if($datei == "protect") { echo ' class="doppelpfeil"'; } ?>>We protect your IT</a></li>
              <li><a href="/company/believes.php"<?php if($datei == "believes") { echo ' class="doppelpfeil"'; } ?>>Our believes</a></li>
*/
?>
              <li><a href="/company/news.php"<?php if($datei == "news") { echo ' class="doppelpfeil"'; } ?>>News</a></li>
              <!--<li><a href="/company/events.php"<?php if($datei == "events") { echo ' class="doppelpfeil"'; } ?>>Upcoming events</a></li>-->
              <li><a href="/company/past_events.php"<?php if($datei == "past_events") { echo ' class="doppelpfeil"'; } ?>>Past events</a></li>
              <li><a href="/company/jobs.php"<?php if($datei == "jobs") { echo ' class="doppelpfeil"'; } ?>>Jobs</a></li>
              <li><a href="/company/contact.php"<?php if($datei == "contact") { echo ' class="doppelpfeil"'; } ?>>Offices</a></li>
              <li><a href="/company/location.php"<?php if($datei == "location") { echo ' class="doppelpfeil"'; } ?>>How to find us</a></li>
              <li><a href="/company/request.php"<?php if($datei == "request") { echo ' class="doppelpfeil"'; } ?>>Contact us</a></li>
            </ul>
<?php
}
?>
          </li>
<!--
          <li><a href="/trends_in_testing"<?php if ($pfad == "trends" && $datei == "index") { echo ' class="doppelpfeil"'; } else if ($pfad == "trends_in_testing") { echo ' class="einfachpfeil"'; } ?>>Trends in Testing 2013</a>
<?php
if($pfad == "trends_in_testing")
{
?>          <ul>
              <li><a href="/trends_in_testing/agenda.php"<?php if($datei == "agenda") { echo ' class="doppelpfeil"'; } ?>>Agenda</a></li>
              <li><a href="/trends_in_testing/speaker.php"<?php if($datei == "speaker") { echo ' class="doppelpfeil"'; } ?>>Speakers</a></li>
              <li><a href="/trends_in_testing/experts.php"<?php if($datei == "experts") { echo ' class="doppelpfeil"'; } ?>>Meet the Experts</a></li>
              <li><a href="/trends_in_testing/sign-in.php"<?php if($datei == "sign-in") { echo ' class="doppelpfeil"'; } ?>>Registration</a></li>
              <li><a href="/trends_in_testing/schedule.php"<?php if($datei == "schedule") { echo ' class="doppelpfeil"'; } ?>>Schedule</a></li>
            </ul>
<?php
}
?>
          </li>
-->
          <li><a href="/portfolio/"<?php if ($pfad == "portfolio" && $datei == "index") { echo ' class="doppelpfeil"'; } else if ($pfad == "portfolio") { echo ' class="einfachpfeil"'; } ?>>Service Portfolio</a>
<?php
if($pfad == "portfolio")
{
?>          <ul>
              <li><a href="/portfolio/test_consultancy.php"<?php if($datei == "test_consultancy") { echo ' class="doppelpfeil"'; } ?>>Test Consultancy</a></li>
              <li><a href="/portfolio/test_engineering.php"<?php if($datei == "test_engineering") { echo ' class="doppelpfeil"'; } ?>>Test Engineering</a></li>
              <li><a href="/portfolio/application_testing.php"<?php if($datei == "application_testing") { echo ' class="doppelpfeil"'; } ?>>Application Testing</a></li>
              <li><a href="/portfolio/performance_testing.php"<?php if($datei == "performance_testing") { echo ' class="doppelpfeil"'; } ?>>Performance Testing</a></li>
              <li><a href="/portfolio/managed_testing_services.php"<?php if($datei == "managed_testing_services") { echo ' class="doppelpfeil"'; } ?>>Testing Services</a></li>
            </ul>
<?php
}
?>
          </li>

          <li><a href="/products/"<?php if ($pfad == "products" && $datei == "more_information") { echo ' class="doppelpfeil"'; } else if ($pfad == "products") { echo ' class="einfachpfeil"'; } ?>>Products</a>
<?php
if($pfad == "products")
{
?>          <ul>
              <li><a href="/products/"<?php if($datei == "index") { echo ' class="doppelpfeil"'; } ?>>Fast!</a></li>
              <li><a href="http://www.testmachine.ch/" target="_blank">TestMachine</a></li>
              <li><a href="http://www.imbus.de/produkte/imbus-testbench/" target="_blank">Test Bench</a></li>
            </ul>
<?php
}
?></li>

          <li><a href="/courses/upcoming_courses.php"<?php if ($pfad == "courses") { echo ' class="einfachpfeil"'; } ?>>Certified Tester</a>
<?php
if($pfad == "courses")
{
?>          <ul>
              <li><a href="/courses/"<?php if($datei == "index") { echo ' class="doppelpfeil"'; } ?>>Training Courses</a></li>
              <li><a href="/courses/background_information.php"<?php if($datei == "background_information") { echo ' class="doppelpfeil"'; } ?>>ISTQB&#174; Certified</a></li>
              <li><a href="/courses/course_structure.php"<?php if($datei == "course_structure" || $datei == "functional_tester" || $datei == "technical_tester" || $datei == "test_manager" || $datei == "foundation_level") { echo ' class="doppelpfeil"'; } ?>>Course Structure</a></li>
              <li><a href="/courses/upcoming_courses.php"<?php if($datei == "upcoming_courses" || $datei == "conditions") { echo ' class="doppelpfeil"'; } ?>>Upcoming Courses</a></li>
            </ul>
<?php
}
?>
          </li>

          <li><a href="/partners/"<?php if ($pfad == "partners") { echo ' class="doppelpfeil"'; } ?>>Partners</a></li>

          <li><a href="/customers/"<?php if ($pfad == "customers" && $datei == "index") { echo ' class="doppelpfeil"'; } else if ($pfad == "customers") { echo ' class="doppelpfeil"'; } ?>>Customers</a>
          </li>
        </ul>
      </div>
      <div id="impressum"><a href="/imprint.php"<?php if ($datei == "imprint") { echo ' class="doppelpfeil"'; } ?>>Imprint</a></div>
