<?php
require('connection.php'); 
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
              <p class="text-size-12">Contact Us: 0800 200 200 | <a class="text-orange-hover" href="mailto:nifesmedia.ust@gmail.com">nifesmedia.ust@gmail.com</a></p>
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
      <!-- Main Carousel -->
      <?php 
      $carousel = mysql_query("SELECT * FROM carousel");
      ?>
      <section class="section background-dark">
        <div class="line">
          <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
         <?php 
            $num_row = mysql_num_rows($carousel);
            if ($num_row > 0) {
              while ($row = mysql_fetch_assoc($carousel)) {
                $carousel_img = $row['image'];
                $img_path = $row['img_path'];
             
            ?>
            <div class="item"> 
              <div class="s-12 center">
              <img src="<?php  echo "admin/pub/".$img_path; ?>" alt="">
                <div class="carousel-content">
                  <div class="padding-2x">
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
      </section>
      
      <!-- Section 1 -->
      
      
      <!-- Section 2 -->
      
      
      <!-- Section 3 -->
      
      
      <!-- Section 4 --> 
      <?php

$query = mysql_query("SELECT * FROM updates");
// TO SELET THE LAST 3 LIKE 0,4 FORM DOWN
// AND FORM 3-8
// TO TRUMCATE TEXT
?>

      <section class="section background-white">
        <div class="line">
          <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">Latest <span class="text-primary">Events</span></h2>
          <div class="carousel-default owl-carousel carousel-wide-arrows">
          <?php 
        $num_row = mysql_num_rows($query);
        if ($num_row > 0) {
         
            while ($row = mysql_fetch_assoc($query)) {
          $img_path = $row['img_path'];
          $title = $row['title'];
          $date_added = $row['date_added'];
          $desc = $row['description'];
          $post_id = $row['post_id'];
        ?>
            <div class="item">
              <div class="margin"> 
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius margin-m-bottom">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="update_single.php?post_id=<?php echo $post_id; ?>"><img src="<?php echo "admin/pub/".$img_path; ?>" alt="" /></a>
                      </div>
                      <div class="s-12 m-12 l-8 margin-m-bottom">
                        <h3><a class="text-dark text-primary-hover" href="update_single.php?post_id=<?php echo $post_id; ?>"><?php echo $title; ?></a></h3>
                        <p><?php echo $desc; ?></p>
                        <a class="text-more-info text-primary-hover" href="update_single.php?post_id=<?php echo $post_id; ?>">Read more</a>
                      </div>
                    </div>  
                  </div>
                </div>
                <div class="s-12 m-12 l-6">
                  <div class="image-border-radius">
                    <div class="margin">
                      <div class="s-12 m-12 l-4 margin-m-bottom">
                        <a class="image-hover-zoom" href="update_single.php?post_id=<?php echo $post_id; ?>"><img src="<?php echo "admin/pub/".$img_path; ?>" alt="" /></a>
                      </div>
                      <div class="s-12 m-12 l-8">
                        <h3><a class="text-dark text-primary-hover" href="update_single.php?post_id=<?php echo $post_id; ?>"><?php echo $title; ?></a></h3>
                        <p><?php echo $desc; ?></p>
                        <a class="text-more-info text-primary-hover" href="update_single.php?post_id=<?php echo $post_id; ?>">Read more</a>
                      </div>
                    </div>  
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
          </div>
        </div>    
      </section>
      
 <section class="section background-primary text-center" style="margin-bottom:-10px">
        <h1 style="margin-top:-60px">STAY CONNECTED</h1>
        <div class="line">

        <div class="s-12 m-3">
        <?php 
        $wc = mysql_query("SELECT * FROM stayconnected WHERE id = '1'");
        while ($row = mysql_fetch_assoc($wc)) {
          $img_path = $row['img_path'];
          $post_id = $row['post_id'];
          $title = $row['title'];
          ?>
            <div class="image-border-radius">
            <div class="margin">
           <div class="s-12 m-12 l-9 margin-m-bottom">
              <a class="image-hover-zoom" href="stay_connected.php?post_id=<?php echo $post_id; ?>"><img src="<?php echo "admin/pub/".$img_path ?>" alt="" style="border-color:#fff; border-color:#000"></a>
              <h4><?php echo $title; ?></h4>
            </div>
            </div>
          </div>
          <?php
        }
        ?>
          </div>

          <div class="s-12 m-3">
        <?php 
        $wc = mysql_query("SELECT *FROM stayconnected WHERE id = '2'");
        while ($row = mysql_fetch_assoc($wc)) {
          $img_path = $row['img_path'];
          $post_id = $row['post_id'];
          $title = $row['title'];
          ?>
            <div class="image-border-radius">
            <div class="margin">
           <div class="s-12 m-12 l-9 margin-m-bottom">
              <a class="image-hover-zoom" href="stay_connected.php?post_id=<?php echo $post_id; ?>"><img src="<?php echo "admin/pub/".$img_path ?>" alt="" style="border-color:#fff; border-color:#000"></a>
              <h4><?php echo $title; ?></h4>
            </div>
            </div>
          </div>
          <?php
        }
        ?>
          </div>

          <div class="s-12 m-3">
        <?php 
        $wc = mysql_query("SELECT *FROM stayconnected WHERE id = '3'");
        while ($row = mysql_fetch_assoc($wc)) {
          $img_path = $row['img_path'];
          $post_id = $row['post_id'];
          $title = $row['title'];
          ?>
            <div class="image-border-radius">
            <div class="margin">
           <div class="s-12 m-12 l-9 margin-m-bottom">
              <a class="image-hover-zoom" href="stay_connected.php?post_id=<?php echo $post_id; ?>"><img src="<?php echo "admin/pub/".$img_path ?>" alt="" style="border-color:#fff; border-color:#000"></a>
              <h4><?php echo $title; ?></h4>
            </div>
            </div>
          </div>
          <?php
        }
        ?>
          </div>

          <div class="s-12 m-3">
        <?php 
        $wc = mysql_query("SELECT *FROM stayconnected WHERE id = '4'");
        while ($row = mysql_fetch_assoc($wc)) {
          $img_path = $row['img_path'];
          $post_id = $row['post_id'];
          $title = $row['title'];
          ?>
            <div class="image-border-radius">
            <div class="margin">
           <div class="s-12 m-12 l-9 margin-m-bottom">
              <a class="image-hover-zoom" href="stay_connected.php?post_id=<?php echo $post_id; ?>"><img src="<?php echo "admin/pub/".$img_path ?>" alt="" style="border-color:#fff; border-color:#000"></a>
              <h4><?php echo $title; ?></h4>
            </div>
            </div>
          </div>
          <?php
        }
        ?>
          </div>
        </div>  
      </section>

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
   </body>
</html>
    