<?php
require('connection.php');

$query1 = mysql_query("SELECT * FROM govcouncil");

$query2 = mysql_query("SELECT * FROM nationalstud");

$query3 = mysql_query("SELECT * FROM phareacouncil");

$query4 = mysql_query("SELECT * FROM phzonecouncil");

$query5 = mysql_query("SELECT * FROM phzonestaff");

$query6 = mysql_query("SELECT * FROM zonalofficial");

$query7 = mysql_query("SELECT * FROM eastzoneofficial");

$query8 = mysql_query("SELECT * FROM zonalgoal");

$query9 = mysql_query("SELECT * FROM subzonalgoal");

$query10 = mysql_query("SELECT * FROM groupgoal");

$query11 = mysql_query("SELECT * FROM president_speech");

$query12 = mysql_query("SELECT * FROM secretary_speech");








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
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="js/validation.js"></script> 
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
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">ABOUT US</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">

            <h3 style="font-size:32px; text-align:center">NIFES AT A GLANCE</h3>
            <p style="text-align: justify">
            The Nigeria Fellowship of Evangelical Students (NIFES) is nan evangelical indigenous, non-denominational, inter-denominational, non-governmental, Christian student’s movement in Nigeria’s post-secondary institutions.</p> &nbsp;
            <p style="text-align: justify">
            NIFES came into existence in 1968 as a result of the evangelical Christian witness in some post-secondary institutions in the early fifties. Students who have benefitted from the ministry in their secondary schools became involved with Christian lecturers who invited them for prayers, Bible Studies and squash parties, particularly at the University of Ibadan. Before long, more groups merged, leading to the formal inauguration of NIFES member groups number 300 with well over 35000 students involved. Through Bible Studies, Prayer meetings and biblical discipleship, NIFES challenges, motivates and mobilizes students to fulfill the great commission (Matt. 28:18-20). NIFS is an inter-denominational and non-denominational in nature/ that is membership is to open to people from various denomination and she does not align herself with any particular denomination, church or group. She is a membership movement of the International Fellowship of Evangelical Student (IFES). NIFES recognizes and identifies with witnesses of the church in Nigeria and throughout the World.
            </p> 

&nbsp;
        
            <h3 style="font-size:32px; text-align:center;padding-top:10px">NIFES VISION STATEMENT</h3>
            <p style="text-align: justify; padding: -40px">
            To be a movement of Christ like Student in Nigeria tertiary institutions, transforming the campus and society upon graduation.</p>
   &nbsp;
            <h3 style="font-size:32px; text-align:center;padding-top:10px">NIFES MISSION STATEMENT</h3>
            <p style="text-align: justify">
            NIFES exits to reach out to students through evangelism and discipleship training, to mobilize them upon graduation, to impact the campus, church and society with godly values.</p>

         &nbsp;
            <h3 style="font-size:32px; text-align:center;padding-top:10px">NIFES AIMS AND OBJECTIVES</h3>
        
       <ol>
           
            
   <li> To equip Christian student for evangelism especially among fellow students.</li><hr>
    <li>To nurture Christian students through personal discipleship thereby enabling them to grow into maturity in Christ.</li><hr>
   <li> To mobilize students and create mission awareness amongst Christian student, staff and associate.</li><hr>
   <li> To prepare and equip Christian students toward meeting the cardinal objectives of NIFES as provided for in the constitution.</li><hr>
   <li> To promote and support Christian literary work and Christian Library service.</li><hr>

</ol>
&nbsp;
<br>
<span><b>NIFES ARMS</b></span>
<p>The three arms of the fellowship are the students, staff and associates.</p><br>
<span><b>ORGANOGRAM</b></span>
<p>NIFES has five levels in the organizational structure. Viz:</p><br>
<span><b>NATIONAL BODY</b></span>
<p>National Director, Management Staffs, Governing council, National officials and National Executives.</p><br>
<span><b>AREA</b></span>
<p>We have 12 Areas across Nigeria and the leaders are the Area Directors, Area council Chairman, Vice-chairman and treasurer. Presently we are in Port Harcourt Area.</p><br>
<span><b>ZONES</b></span>
<p>There are 37 Zones across Nigeria and the leaders are the Zonal Council Chairman, Training Secretary and Student officials.</p><br>
<span><b>SUB-ZONE</b></span>
<p>There are 2 sub-zones in port Harcourt Zone and NIFES RSUST is under Port Harcourt East sub-zone. The leaders across the sub-zones are the sub-zonal students official.</p><br>
<span><b>GROUP</b></span>
<p>There are over 300 member groups across the country. NIFES RSUST is a group. </p><br/>
 

<h3 style="font-size:32px; text-align:center">NIFES PROFILE</h3>

<button class="accordion">GOVERNERING COUNCEL</button>
<div class="panel">
 <table>
 <?php
 $num_row = mysql_num_rows($query1);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query1)) {
     $office = $row['office'];
     $name = $row['name'];
 ?>
 <tbody>
   <tr>
     <td>
        <?php echo $office; ?>
     </td>
     <td>
        <?php echo $name; ?>
     </td>
   </tr>
   </tbody>
    <?php 
  }
}
?>
</table>
</div>

<button class="accordion">NATIONAL STUDENT OFFICIAL</button>
<div class="panel">
  <table>
 <?php
 $num_row = mysql_num_rows($query2);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query2)) {
     $office = $row['office'];
     $name = $row['name'];
 ?>
 <tbody>
   <tr>
     <td>
        <?php echo $office; ?>
     </td>
     <td>
        <?php echo $name; ?>
     </td>
   </tr>
   </tbody>
    <?php 
  }
}
?>
</table>
</div>

<button class="accordion">PORT HARCOURT AREA COUNCIL MEMBERS</button>
<div class="panel">
  <table>
 <?php
 $num_row = mysql_num_rows($query3);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query3)) {
     $office = $row['office'];
     $name = $row['name'];
     $phone = $row['phone'];
 ?>
 <tbody>
   <tr>
     <td>
        <?php echo $office; ?>
     </td>
     <td>
        <?php echo $name; ?>
     </td>
     <td>
        <?php echo $phone; ?>
     </td>
   </tr>
   </tbody>
    <?php 
  }
}
?>
</table>
</div>

<button class="accordion">PORT HARCOURT ZONAL COUNCIL MEMBERS</button>
<div class="panel">
<table>
 <?php
 $num_row = mysql_num_rows($query4);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query4)) {
     $office = $row['office'];
     $name = $row['name'];
     $phone = $row['phone'];
 ?>
 <tbody>
   <tr>
     <td>
        <?php echo $office; ?>
     </td>
     <td>
        <?php echo $name; ?>
     </td>
     <td>
        <?php echo $phone; ?>
     </td>
   </tr>
   </tbody>
    <?php 
  }
}
?>
</table>
</div>

<button class="accordion">PORT HARCOURT ZONAL STAFF</button>
<div class="panel">
  <table>
 <?php
 $num_row = mysql_num_rows($query5);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query5)) {
     $office = $row['office'];
     $name = $row['name'];
     $phone = $row['phone'];
 ?>
 <tbody>
   <tr>
     <td>
        <?php echo $office; ?>
     </td>
     <td>
        <?php echo $name; ?>
     </td>
     <td>
        <?php echo $phone; ?>
     </td>
   </tr>
   </tbody>
    <?php 
  }
}
?>
</table>
</div>

<button class="accordion">ZONAL STUDENT OFFICIALS</button>
<div class="panel">
  <table>
 <?php
 $num_row = mysql_num_rows($query6);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query6)) {
     $office = $row['office'];
     $name = $row['name'];
     $phone = $row['phone'];
     $school = $row['school'];
 ?>
 <tbody>
   <tr>
     <td>
        <?php echo $office; ?>
     </td>
     <td>
        <?php echo $name; ?>
     </td>
     <td>
        <?php echo $school; ?>
     </td>
     <td>
        <?php echo $phone; ?>
     </td>
   </tr>
   </tbody>
    <?php 
  }
}
?>
</table>
</div>

<button class="accordion">EAST SUB-ZONAL STUDENT OFFICIALS</button>
<div class="panel">
  <table>
 <?php
 $num_row = mysql_num_rows($query7);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query7)) {
     $office = $row['office'];
     $name = $row['name'];
     $phone = $row['phone'];
     $school = $row['school'];

 ?>
 <tbody>
   <tr>
     <td>
        <?php echo $office; ?>
     </td>
     <td>
        <?php echo $name; ?>
     </td>
     <td>
        <?php echo $school; ?>
     </td>
     <td>
        <?php echo $phone; ?>
     </td>
   </tr>
   </tbody>
    <?php 
  }
}
?>
</table>
</div>


<h3 style="font-size:32px; text-align:center">GOALS</h3>

<button class="accordion">ZONAL GOALS</button>
<div class="panel">
<?php
 $num_row = mysql_num_rows($query8);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query8)) {
    $goal_id = $row['goal_id'];
    $goal = $row['goal'];
    ?>
<p style="text-align:justify"><b><?php echo $goal_id; ?></b><?php echo $goal; ?>.</p>
<?php 
}
}
?>
</div>

<button class="accordion">EAST SUB-ZONAL GOALS</button>
<div class="panel">
<?php
 $num_row = mysql_num_rows($query9);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query9)) {
    $goal_id = $row['goal_id'];
    $goal = $row['goal'];
    ?>
<p style="text-align:justify"><b><?php echo $goal_id; ?></b><?php echo $goal; ?>.</p>
<?php 
}
}
?>
</div>

<button class="accordion">GROUP GOALS</button>
<div class="panel">
<?php
 $num_row = mysql_num_rows($query10);
 if ($num_row > 0) {
   while ($row = mysql_fetch_assoc($query10)) {
    $goal_id = $row['goal_id'];
    $goal = $row['goal'];
    ?>
<p style="text-align:justify"><b><?php echo $goal_id; ?></b><?php echo $goal; ?>.</p>
<?php 
}
}
?>
</div>

 
        &nbsp;
        <br>
            <div class="line">
              <div class="margin">
              <div class="s-12 m-12 l-6">
              <?php
               $num_row = mysql_num_rows($query11);
                if ($num_row > 0) {
                  while ($row = mysql_fetch_assoc($query11)) {
                    $img_path = $row['img_path'];
                    $speech = $row['speech'];
                    $name = $row['name'];
              ?>
              <h4>From The Desk of The President</h4><hr style="margin-top:0px;">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a><img src="<?php echo "admin/gensec/".$img_path; ?>" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a><?php echo $name; ?></a></h3>
                  <p>
                  <?php echo $speech; ?>
                  </p>
                  </div>
                    </div>  
                  </div>
                  <?php
                }
              }
              ?>
                  </div>

                     <div class="s-12 m-12 l-6">
                     <?php
               $num_row = mysql_num_rows($query12);
                if ($num_row > 0) {
                  while ($row = mysql_fetch_assoc($query12)) {
                    $img_path = $row['img_path'];
                    $speech = $row['speech'];
                    $name = $row['name'];
              ?>
                     <h4>From The Desk of The General Secertary</h4><hr style="margin-top:0px;">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a><img src="<?php echo "admin/gensec/".$img_path; ?>" alt=""></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a><?php echo $name; ?></a></h3>
                  <p>
                  <?php echo $speech; ?>
                  </p>
               </div>
                    </div>  
                  </div>
                  </div>
                  <?php
                }
              }
              ?>
              </div>  
            </div>
           

            <section class="section background-white" style="margin-top:0px; margin-bottom:-500px; clear:both">
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
   </body>
</html>
    

        


   
