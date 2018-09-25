<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prospera Free - New Amazing HTML5 Template</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="dataTables.bootstrap.css">

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body class="size-1140">
    <header role="banner">
      <!-- Top Bar -->
      <div class="top-bar background-white">
        <div class="line">
          <div class="s-12 m-6 l-6">
            <div class="top-bar-contact">
              <p class="text-size-12">Contact Us: 0800 200 200 | <a class="text-orange-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
            </div>
          </div>
          <div class="s-12 m-6 l-6">
            <div class="right">
              <ul class="top-bar-social right">
                <li><a href="/"><i class="icon-facebook_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-twitter_circle text-orange-hover"></i></a> </li>
                <li><a href="/"><i class="icon-google_plus_circle text-orange-hover"></i></a></li>
                <li><a href="/"><i class="icon-instagram_circle text-orange-hover"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Top Navigation -->
      <nav class="background-white background-primary-hightlight">
        <div class="line">
          <div class="s-12 l-2">
            <a href="index.php" class="logo"><img src="img/logo-free.png" alt=""></a>
          </div>
          <div class="top-nav s-12 l-10">
            <p class="nav-text"></p>
            <ul class="right chevron">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a>Ministeries</a>
              <ul>
                <li><a href="officials.php">Officials</a></li>
                <li><a href="dcg.php">DCGS</a></li>
                <li><a href="voluntry_unit.php">Voluntry Unit</a></li>
                <li><a href="forms.php">Forms</a></li>
              </ul>
            </li>
            <li><a>Resources</a>
            <ul>
              <li><a href="events.php">Events</a></li>
              <li><a href="e_library.php">E-Library</a></li>
              <li><a href="cwc.php">CWC Publication</a></li>
            </ul>
          </li>
          <li><a>Giving</a>
          <ul>
            <li><a href="donate.php">Donate</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>

<!-- MAIN -->
<main role="main">
<!-- Content -->
<article>
  <header class="section background-primary text-center">
    <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">E-LIBRARY</h1>
  </header>
  <div class="section background-white">
    <div class="line">
      <h3 style="font-size:32px; text-align:center">PAST QUESTIONS</h3>
      <button class="accordion">PAST QUESTIONS</button>
      <div class="panel">
        <br>
        <!-- <h4 style="text-align:center">Please Fill the forms correctly and indicate where intrested</h4>
        <br> -->
        <div id="qform-container">
        <form class="customform text-white" id="qselectForm" method="POST">
        <p align="center" id='quploadPanel'>
          <div class="line">
            <div class="margin">

              <select name="qfaculty" id="qfaculty" class="required name border-radius" required>
                <option>Choose Your Faculty</option>
                <option value="agriculture">Agriculture</option>
                <option value="engineering">Engineering</option>
                <option value="environmental_science">Environmental Science</option>
                <option value="law">Law</option>
                <option value="management_science">Management Science</option>
                <option value="sciences">Science</option>
                <option value="education">Technical Science and Education</option>
              </select>
              <select name="qdepartment" id="qdepartment" class="required name border-radius" required>
                <option>Choose Your Department</option>
              </select>
              <p style='display:none; position: relative; top: 5%; left: 40%; z-index: 5000; width: 422px; text-align: center; ' id='qwaitPanel'>
        <img src='loader.gif' title='Please Wait' />
    </p>
              <select name="qlevel" id="qlevel" class="required name border-radius" required>
                <option>Choose Your Level</option>
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
              </select>
              <select name="qsem" id="qsem" class="required name border-radius" required>
                <option>Choose Your Semester</option>
                <option>1</option>
                <option>2</option>
              </select>

              <div class="s-12"><button class="submit-form button background-primary border-radius text-white"  >Submit Button</button></div>
             
            </div>
          </div>
          </p>
    
        </form>
        </div>
        &nbsp;
        <!-- Table in qDisplay.php -->
      </div>
      <h3 style="font-size:32px; text-align:center">MATERIALS</h3>
      <button class="accordion">MATERIALS</button>
      <div class="panel">
        <br>
        <!-- <h4 style="text-align:center">Please Fill the forms correctly and indicate where intrested</h4>
        <br> -->
        <div id="mform-container">
        <form class="customform text-white" id="mselectForm" action="" method="POST">
        <p align="center" id='muploadPanel'>
          <div class="line">
            <div class="margin">

              <select name="mfaculty" id="mfaculty" class="required name border-radius" required>
                <option>Choose Your Faculty</option>
                <option value="agriculture">Agriculture</option>
                <option value="engineering">Engineering</option>
                <option value="environmental_science">Environmental Science</option>
                <option value="law">Law</option>
                <option value="management_science">Management Science</option>
                <option value="sciences">Science</option>
                <option value="education">Technical Science and Education</option>
              </select>
              <select name="mdepartment" id="mdepartment" class="required name border-radius" required>
                <option>Choose Your Department</option>
              </select>
              <p style='display:none; position: relative; top: 5%; left: 40%; z-index: 5000; width: 422px; text-align: center; ' id='mwaitPanel'>
        <img src='loader.gif' title='Please Wait' />
    </p>
              <select name="mlevel" class="required name border-radius" required>
                <option>Choose Your Level</option>
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
              </select>
              <select name="msem" class="required name border-radius" required>
                <option>Choose Your Semester</option>
                <option>1</option>
                <option>2</option>
              </select>

              <div class="s-12"><button class="submit-form button background-primary border-radius text-white" >Submit Button</button></div>

            </div>
          </div>
      </p>
        </form>
        </div>
        &nbsp;
<!-- Table in qdispaly.php -->
      </div>
      <h3 style="font-size:32px; text-align:center">PAST PROJECT WORKS</h3>
      <button class="accordion">PAST PROJECT WORKS</button>
      <div class="panel">
        <br>
        <!-- <h4 style="text-align:center">Please Fill the forms correctly and indicate where intrested</h4>
        <br> -->
        <div id="pform-container">
        <form class="customform text-white" id="pselectForm" action="" method="POST">
        <p align="center" id='puploadPanel'>
          <div class="line">
            <div class="margin">

              <select name="pfaculty" id="pfaculty" class="required name border-radius" required>
                <option>Choose Your Faculty</option>
                <option value="agriculture">Agriculture</option>
                <option value="engineering">Engineering</option>
                <option value="environmental_science">Environmental Science</option>
                <option value="law">Law</option>
                <option value="management_science">Management Science</option>
                <option value="sciences">Science</option>
                <option value="education">Technical Science and Education</option>
              </select>
              <p style='display:none; position: relative; top: 5%; left: 40%; z-index: 5000; width: 422px; text-align: center; ' id='pwaitPanel'>
        <img src='loader.gif' title='Please Wait' />
    </p>
              <select name="pdepartment" id="pdepartment" class="required name border-radius" required>
                <option>Choose Your Department</option>
              </select>
              <select name="plevel" class="required name border-radius" required>
                <option>Choose Your Level</option>
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
              </select>

              <div class="s-12"><button class="submit-form button background-primary border-radius text-white">Submit Button</button></div>

            </div>
          </div>
      </p>
        </form>
        </div>
        &nbsp;
        <!-- Table in qdisplay.php -->
      </div>
    </article>
  </main>
  <section class="section background-white">
    <div class="line">
      <div class="s-12 m-4">
        <h4 class="headline text-thin text-s-size-30" style="font-size:25px !important">Fellowship Days</h4>
        <p class="text-size-20" style="font-size:17px !important">Sundays @Chapel Children Hall  -  5:00pm<br />
          Wednesdays @Chapel Children Hall  -  5:00pm<br />
          Thursday (Alpha Club) @NIFES SEC - 5:00pm
        </p><br>
        <a class="button border-radius background-primary text-size-12 text-white text-strong" href="/">GET MORE INFO</a>
      </div>
      <div class="s-12 m-4">
        <h4 class="headline text-thin text-s-size-30" style="font-size:25px !important">Join our Mailing List</h4>
        <p class="text-size-20" style="font-size:17px !important">Stay in touch, and get updates and news by mail from NIFES RSUST.</p><br>
        <a class="button border-radius background-primary text-size-12 text-white text-strong" href="/">GET MORE INFO</a>
      </div>
      <div class="s-12 m-4">
        <h4 class="headline text-thin text-s-size-30" style="font-size:25px !important">Got Jesus?</h4>
        <p class="text-size-20" style="font-size:17px !important">Have you ever wondered what being "born-again" is really about?</p><br>
        <a class="button border-radius background-primary text-size-12 text-white text-strong" href="/">GET MORE INFO</a>
      </div>
    </div>
  </section>
</div>
</div>
</article>
</main>
<!-- FOOTER -->
<footer>
<!-- Social -->
<div class="background-primary padding text-center">
<a href="/"><i class="icon-facebook_circle icon2x text-white"></i></a>
<a href="/"><i class="icon-twitter_circle icon2x text-white"></i></a>
<a href="/"><i class="icon-google_plus_circle icon2x text-white"></i></a>
<a href="/"><i class="icon-instagram_circle icon2x text-white"></i></a>
</div>

<!-- Main Footer -->

<!-- Collumn 1 -->


<!-- Bottom Footer -->
<section class="padding background-dark">
<div class="line">
<div class="s-12 l-12" style="text-align:center">
  <p class="text-size-12"><b>NIFES RSU © <?php echo date("M, Y");?></b></p>
  <p class="text-size-12"><b><a title="NIFES RSU">Design and Coding By<br> Rasonad MultiTech</a></b></p>
</div>
</div>
</section>
</footer>
<script type="text/javascript" src="js/responsee.js"></script>
<script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/template-scripts.js"></script>
<script type="text/javascript" src="js/project.js"></script>
<script type="text/javascript" src="js/material.js"></script>
<script type="text/javascript" src="js/question.js"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
acc[i].onclick = function() {
this.classList.toggle("active");
var panel = this.nextElementSibling;
if (panel.style.maxHeight){
panel.style.maxHeight = null;
} else {
panel.style.maxHeight = panel.scrollHeight + "px";
}
}
}
</script>
<script type="text/javascript">
$('#qselectForm').submit(function(e){
    e.preventDefault(); // Prevent Default Submission
    $.ajax({
    url: 'libdisplay.php',
    type: 'POST',
    data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
        $('#qform-container').fadeOut('slow', function(){
             $('#qform-container').fadeIn('slow').html(data);
        });
    })
    .fail(function(){
        alert('Submit Failed ... Try Again');    
    });
});

$('#mselectForm').submit(function(e){
    e.preventDefault(); // Prevent Default Submission
    $.ajax({
    url: 'libdisplay.php',
    type: 'POST',
    data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
        $('#mform-container').fadeOut('slow', function(){
             $('#mform-container').fadeIn('slow').html(data);
        });
    })
    .fail(function(){
        alert('Submit Failed ... Try Again');    
    });
});

$('#pselectForm').submit(function(e){
    e.preventDefault(); // Prevent Default Submission
    $.ajax({
    url: 'libdisplay.php',
    type: 'POST',
    data: $(this).serialize(), // it will serialize the form data
        dataType: 'html'
    })
    .done(function(data){
        $('#pform-container').fadeOut('slow', function(){
             $('#pform-container').fadeIn('slow').html(data);
        });
    })
    .fail(function(){
        alert('Submit Failed ... Try Again');    
    });
});
  </script>
  <script type='text/javascript'>
    $(document).ready(function() {
        $("#qform-container").submit(function() {
            $("#quploadPanel").toggle();
            $("#qwaitPanel").toggle();
        });
    });
    $(document).ready(function() {
        $("#mform-container").submit(function() {
            $("#muploadPanel").toggle();
            $("#mwaitPanel").toggle();
        });
    });
    $(document).ready(function() {
        $("#pform-container").submit(function() {
            $("#puploadPanel").toggle();
            $("#pwaitPanel").toggle();
        });
    });
</script>

</body>
</html>
