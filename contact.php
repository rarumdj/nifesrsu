<?php
require('connection.php');

if(isset($_POST['submit'])){
  $name = mysql_real_escape_string(ucwords($_POST['name']));
  $email = mysql_real_escape_string($_POST['email']);
  $subject = mysql_real_escape_string($_POST['subject']);
  $message = mysql_real_escape_string($_POST['message']);

  $query = mysql_query("INSERT INTO contact_us (name, email, subject, message, date_added) VALUES ('$name','$email','$subject','$message',NOW())");

}
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
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">CONTACT US</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            <div class="margin">
              
              <!-- Company Information -->
              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong margin-bottom-30">REACH US HERE</h2>
                <div class="float-left">
                  <i class="icon-placepin background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h5 class="text-strong margin-bottom-0">NIFES SECRETARIAT</h5> &nbsp;
                  <p style="margin-left:5px"><b>Along F&G Hostel<br>
                     River State University<br>
                     Rivers, Port Harcourt Nigeria
                  </b></p>   
                  

            
                </div>
                <div class="float-left">
                  <i class="icon-paperplane_ico background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80 margin-bottom">
                  <h5 class="text-strong margin-bottom-0">General Enquiries</h5> &nbsp;
                  <p style="margin-left:5px"><b>nifesrsust@gmail.com<br>
                     nifesrsustmedia@gmail.com</b>
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-smartphone background-primary icon-circle-small text-size-20"></i>
                </div>
                <div class="margin-left-80">
                  <h5 class="text-strong margin-bottom-0">Phone Numbers</h5> &nbsp;
                  <p style="margin-left:5px"><b>0816 441 3492<br>
                     0450 5896 625 16<br>
                     0798 6546 465 15</b>
                  </p>             
                </div>
              </div>
              
              <!-- Contact Form -->
              <div class="s-12 m-12 l-6">
                <h2 class="text-uppercase text-strong margin-bottom-30">SEND A MASSAGE</h2>
                <form class="customform" method="POST">
                  <div class="line">
                    <div class="margin">
                      <div class="s-12 m-12 l-6">
                        <input name="email" class="required email border-radius" placeholder="Your e-mail" title="Your e-mail" type="text" />
                      </div>
                      <div class="s-12 m-12 l-6">
                        <input name="name" class="name border-radius" placeholder="Your name" title="Your name" type="text" />
                      </div>
                    </div>
                  </div>
                  <div class="s-12"> 
                    <input name="subject" class="subject border-radius" placeholder="Subject" title="Subject" type="text" />
                  </div>
                  <div class="s-12">
                    <textarea name="message" class="required message border-radius" placeholder="Your message" rows="3"></textarea>
                  </div>
                  <div class="s-12 m-12 l-4"><button name="submit" class="submit-form button background-primary border-radius text-white" type="submit">Submit Button</button></div> 
                </form>
              </div>  
            </div>  
          </div> 
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
   </body>
</html>