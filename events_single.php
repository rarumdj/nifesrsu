<?php 
require('connection.php');
if (isset($_GET['post_id'])) {
  $post_id = $_GET['post_id'];
}
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prospera Free - New Amazing HTML5 Template</title>
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!--  -->
    <link href="new-css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="new-css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="new-css/single.css" rel='stylesheet' type='text/css' />
<!-- news-css -->
<link rel="stylesheet" href="new-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="new-css/list.css" type="text/css" media="all" />
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
              <p class="text-size-12">Contact Us: 0800 200 200 | <a class="textrange-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
            </div>
          </div>
          <div class="s-12 m-6 l-6">
            <div class="right">
              <ul class="top-bar-social right">
                <li><a href="/"><i class="icon-facebook_circle textrange-hover"></i></a></li>
                <li><a href="/"><i class="icon-twitter_circle textrange-hover"></i></a> </li>
                <li><a href="/"><i class="icon-google_plus_circle textrange-hover"></i></a></li>
                <li><a href="/"><i class="icon-instagram_circle textrange-hover"></i></a></li>
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

 <main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
          <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">EVENT</h1>
        </header>
        

<?php
$query1 = mysql_query("SELECT * FROM images WHERE post_id = '$post_id'");

$query2 = mysql_query("SELECT * FROM videos WHERE post_id = '$post_id'");

?>

            <div class="faq">
      <div class="container">
        <div class="agileinfo-news-top-grids">
        <?php 
        $num_row = mysql_num_rows($query1);
        if ($num_row > 0) {
         
            while ($row = mysql_fetch_assoc($query1)) {
          $img_path = $row['img_path'];
          $title = $row['title'];
          $date = date("F d, Y",strtotime($row['date_added']));
          $description = $row['description'];
          // $date = date("F d, Y",strtotime(['$date_added']));
        ?>
          <div class="col-md-8 wthree-top-news-left">
            <div class="wthree-news-left">
              <div class="wthree-news-left-img">
                <img src="<?php echo "admin/pub/".$img_path; ?>" alt="" />
                <h4><?php echo $title; ?></h4>
                <div class="s-author">
               
                  <p>Posted By <a href="#"><i class="icon-user" aria-hidden="true"></i> Admin</a> &nbsp;&nbsp; <i class="icon-sli-calendar" aria-hidden="true"></i><?php echo $date; ?> &nbsp;&nbsp;
                  <?php
                  $u = mysql_query("SELECT count(*) AS c FROM comments WHERE post_id = '$post_id'");
                  // $num_row = mysql_num_rows($u);
                  if($u)
                  {
                   while($row=mysql_fetch_array($u))
                    {
                      ?>
                   <i class="icon-message" aria-hidden="true"></i> Comments (<?php echo $row['c']; ?>)&nbsp;&nbsp;

                  <?php
                    }
                  }
                  $like_query = mysql_query("SELECT * FROM likes WHERE post_id = '$post_id'");
                  $num_row = mysql_num_rows($like_query);
                  //  if ($num_row <  0){
                    $row = mysql_fetch_array($like_query);
                      $likes = $row['likes'];
                      $dislikes = $row['dislikes'];
                   
                    if($likes == 0 AND $dislikes == 0){
                  ?>
                  <i class="" aria-hidden="true" id='like<?php echo "$post_id"; ?>'>
                  <a class="btn btn-default btn-xs"  onclick="likes('<?php echo $post_id; ?>')"><i class="icon-sli-like" aria-hidden="true"></i>Likes<?php echo ($likes); ?></a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" onclick="dislikes('<?php echo $post_id; ?>')"><i class="icon-sli-dislike" aria-hidden="true"></i>Dislikes<?php echo($dislikes); ?></a>
                  </i>
                    <?php }else{ ?>
                      <i class="" aria-hidden="true" id='like<?php echo "$post_id"; ?>'>
                  <a class="btn btn-default btn-xs"  onclick="likes('<?php echo $post_id; ?>')"><i class="icon-sli-like" aria-hidden="true"></i>Likes(<?php echo $likes; ?>)</a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" onclick="dislikes('<?php echo $post_id; ?>')"><i class="icon-sli-dislike" aria-hidden="true"></i>Dislikes(<?php echo $dislikes; ?>)</a>
                  </i>
                    <?php } ?>
                  &nbsp;&nbsp;<a href="admin/pub/download.php?post_id=<?php echo $post_id; ?>" ><i class="icon-download" aria-hidden="true"></i>Download</a></p>
                </div>
                <div id="fb-root"></div>
                <div class="news-shar-buttons">
                <ul>
                  <li class="news-facebook">
                    <a href="https://facebook.com/nifesrsust" class="icon-facebook" data-show-count="false">Follow @NIFES RSU</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                  </li>
                  <li>
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone" data-size="medium"></div>

                    <!-- Place this tag after the last +1 button tag. -->
                    <script type="text/javascript">
                      (function() {
                      var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                      po.src = 'https://apis.google.com/js/platform.js';
                      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                      })();
                    </script>
                    </li>
                  </ul>
                </div>
                <div class="w3-agile-news-text">
                  <p><?php echo $description; ?>
                  </p>
                </div>
              </div>
            </div>
            <div class="clearfix"> </div>
            <!-- agile-comments -->
            
            
            <div class="all-comments">
						<div class="all-comments-info">
              <a href="#">Comments</a>
              <?php

            if(isset($_POST['comment_btn'])){
              $name = $_POST['name'];
              $msg = $_POST['comment'];
              $date = time();
             $query_com = mysql_query("INSERT INTO comments (post_id, name, comment, date_created) VALUES ('$post_id','$name','$msg','$date')");    
            }
            ?>
							<div class="agile-info-wthree-box">
								<form method="POST">
									<input type="text" placeholder="Name" name="name" required="">
									<textarea placeholder="Message" name="comment" required=""></textarea>
                  <input type="submit" class="btn btn-default btn-xs" name="comment_btn" value="SEND">
									<div class="clearfix"> </div>
                </form>
                
							</div>
						</div>
						<div class="media-grids">
              <?php
            $com_sel = mysql_query("SELECT * FROM comments WHERE post_id = '$post_id'");
            $num_row = mysql_num_rows($com_sel);
            if ($num_row > 0) {
              while ($row = mysql_fetch_assoc($com_sel)) {
                $comment = $row['comment'];
                $name = $row['name'];
                $comment_time = $row['date_created'];
                $current_time = time();
                $time = $current_time - $comment_time;
                if($time < 60){
                  $real_time = $time." seconds ago";
              } elseif ($time > 60 && $time <= 3600) {
                  $real_time = floor($time/60)." minutes ago";
              } elseif($time > 3600 && $time < 86400){
                  $real_time = floor($time/3600)." hrs ago";
              } elseif($time > 86400 && $time < 604800){
                  $real_time = floor($time/86400)." days ago";
              } elseif($time > 604800 && $time < 2628000){
                  $real_time = floor($time/604800)." weeks ago";
              } elseif($time > 2628000 && $time < 31536000){
                  $real_time = floor($time/2628000)." months ago";
              } elseif($time > 31536000){
                  $real_time = floor($time/31536000)." yrs ago";
              }
             ?>
							<div class="media">
								<h5><?php echo $name; ?></h5>
								<div class="media-left" style="width:8%; height:80%">
										<img src="img/user.jpg" title="One movies" alt=" " />
								</div>
								<div class="media-body">
									<p><?php echo $comment; ?></p>
									<span>Posted: <a href="#"><i class="icon-clock">  </i><?php echo $real_time; ?></a></span>
								</div>
              </div>
              <?php
              }
            }
              ?>
						</div>
					</div>
            <?php 
             
            
          }

          }

          else if (mysql_num_rows($query2) > 0) {
            while ($row = mysql_fetch_assoc($query2)) {
              $video_path = $row['video_path'];
              $title = $row['title'];
              $date = date("F d, Y",strtotime($row['date_added']));
              $description = $row['description'];
              // $date = date("F d, Y",strtotime(['$date_added']));
            ?>
              <div class="col-md-8 wthree-top-news-left">
                <div class="wthree-news-left">
                  <div class="wthree-news-left-img">
                  <video src="<?php echo "admin/pub/".$video_path; ?>" autobuffer autoloop loop controls poster="/images/video.png" width="712" height="400"></video>
                    <h4><?php echo $title; ?></h4>
                    <div class="s-author">
                   
                      <p>Posted By <a href="#"><i class="icon-user" aria-hidden="true"></i> Admin</a> &nbsp;&nbsp; <i class="icon-sli-calendar" aria-hidden="true"></i><?php echo $date; ?> &nbsp;&nbsp;
                      <?php
                      $u = mysql_query("SELECT count(*) AS c FROM comments WHERE post_id = '$post_id'");
                      // $num_row = mysql_num_rows($u);
                      if($u)
                      {
                       while($row=mysql_fetch_array($u))
                        {
                          ?>
                       <i class="icon-message" aria-hidden="true"></i> Comments (<?php echo $row['c']; ?>)&nbsp;&nbsp;
    
                      <?php
                        }
                      }
                      $like_query = mysql_query("SELECT * FROM likes WHERE post_id = '$post_id'");
                      $num_row = mysql_num_rows($like_query);
                      //  if ($num_row <  0){
                        $row = mysql_fetch_array($like_query);
                          $likes = $row['likes'];
                          $dislikes = $row['dislikes'];
                       
                        if($likes == 0 AND $dislikes == 0){
                      ?>
                      <i class="" aria-hidden="true" id='like<?php echo "$post_id"; ?>'>
                      <a class="btn btn-default btn-xs"  onclick="likes('<?php echo $post_id; ?>')"><i class="icon-sli-like" aria-hidden="true"></i>Likes<?php echo ($likes); ?></a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" onclick="dislikes('<?php echo $post_id; ?>')"><i class="icon-sli-dislike" aria-hidden="true"></i>Dislikes<?php echo($dislikes); ?></a>
                      </i>
                        <?php }else{ ?>
                          <i class="" aria-hidden="true" id='like<?php echo "$post_id"; ?>'>
                      <a class="btn btn-default btn-xs"  onclick="likes('<?php echo $post_id; ?>')"><i class="icon-sli-like" aria-hidden="true"></i>Likes(<?php echo $likes; ?>)</a>&nbsp;&nbsp;<a class="btn btn-default btn-xs" onclick="dislikes('<?php echo $post_id; ?>')"><i class="icon-sli-dislike" aria-hidden="true"></i>Dislikes(<?php echo $dislikes; ?>)</a>
                      </i>
                        <?php } ?>
                      &nbsp;&nbsp;<a href="admin/pub/download.php?post_id=<?php echo $post_id; ?>" ><i class="icon-download" aria-hidden="true"></i>Download</a></p>
                    </div>
                    <div id="fb-root"></div>
                    <div class="news-shar-buttons">
                    <ul>
                      <li class="news-facebook">
                        <a href="https://facebook.com/nifesrsust" class="icon-facebook" data-show-count="false">Follow @NIFES RSU</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                      </li>
                      <li>
                        <!-- Place this tag where you want the +1 button to render. -->
                        <div class="g-plusone" data-size="medium"></div>
  
                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                          (function() {
                          var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                          po.src = 'https://apis.google.com/js/platform.js';
                          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                          })();
                        </script>
                        </li>
                      </ul>
                    </div>
                    <div class="w3-agile-news-text">
                      <p><?php echo $description; ?>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="clearfix"> </div>
                <!-- agile-comments -->
                
                
                <div class="all-comments">
                <div class="all-comments-info">
                  <a href="#">Comments</a>
                  <?php
    
                if(isset($_POST['comment_btn'])){
                  $name = $_POST['name'];
                  $msg = $_POST['comment'];
                  $date = time();
                 $query_com = mysql_query("INSERT INTO comments (post_id, name, comment, date_created) VALUES ('$post_id','$name','$msg','$date')");    
                }
                ?>
                  <div class="agile-info-wthree-box">
                    <form method="POST">
                      <input type="text" placeholder="Name" name="name" required="">
                      <textarea placeholder="Message" name="comment" required=""></textarea>
                      <input type="submit" class="btn btn-default btn-xs" name="comment_btn" value="SEND">
                      <div class="clearfix"> </div>
                    </form>
                    
                  </div>
                </div>
                <div class="media-grids">
                  <?php
                $com_sel = mysql_query("SELECT * FROM comments WHERE post_id = '$post_id'");
                $num_row = mysql_num_rows($com_sel);
                if ($num_row > 0) {
                  while ($row = mysql_fetch_assoc($com_sel)) {
                    $comment = $row['comment'];
                    $name = $row['name'];
                    $comment_time = $row['date_created'];
                    $current_time = time();
                    $time = $current_time - $comment_time;
                    if($time < 60){
                      $real_time = $time." seconds ago";
                  } elseif ($time > 60 && $time <= 3600) {
                      $real_time = floor($time/60)." minutes ago";
                  } elseif($time > 3600 && $time < 86400){
                      $real_time = floor($time/3600)." hrs ago";
                  } elseif($time > 86400 && $time < 604800){
                      $real_time = floor($time/86400)." days ago";
                  } elseif($time > 604800 && $time < 2628000){
                      $real_time = floor($time/604800)." weeks ago";
                  } elseif($time > 2628000 && $time < 31536000){
                      $real_time = floor($time/2628000)." months ago";
                  } elseif($time > 31536000){
                      $real_time = floor($time/31536000)." yrs ago";
                  }
                 ?>
                  <div class="media">
                    <h5><?php echo $name; ?></h5>
                    <div class="media-left" style="width:8%; height:80%">
                        <img src="img/user.jpg" title="One movies" alt=" " />
                    </div>
                    <div class="media-body">
                      <p><?php echo $comment; ?></p>
                      <span>Posted: <a href="#"><i class="icon-clock">  </i><?php echo $real_time; ?></a></span>
                    </div>
                  </div>
                  <?php
                  }
                }
                  ?>
              </div>
            </div>
            <?php
            }
          }
          
        ?>
            <!-- //agile-comments -->
            </div>
            </div>
            
            

            
          <div class="col-md-4 wthree-news-right">
            <!-- news-right-top -->
            <div class="news-right-top">
              <div class="wthree-news-right-heading">
              <h3>Up Coming Events</h3>
              </div>
              <div class="wthree-news-right-top">
                <div class="news-grids-bottom">
                  <!-- date -->
                  <?php
                  $query1 = mysql_query("SELECT * FROM updates");
                  ?>
                  <div id="design" class="date">
                    <div id="cycler">   
                      <?php
                      $num_row = mysql_num_rows($query1);
                      if ($num_row > 0) {
                        while ($row = mysql_fetch_assoc($query1)) {
                          $date = $row['event_date'];
                          $title = $row['title'];
                          $desc = $row['description'];
                          $post_id = $row['post_id'];
                        
                      ?>
                      <div class="date-text">
                      <a href="update_single.php?post_id=<?php echo $post_id; ?>"><?php echo $date; ?></a>
                        <p><b><?php echo $title; ?></b></p>
                        <p><?php echo $desc; ?></p>
                      </div>
                      <?php
                    }
                      }
                      ?>
                     
                    </div>
                    </div>
                  <!-- //date -->
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
                    function blinker() {
                      $('.blinking').fadeOut(500);
                      $('.blinking').fadeIn(500);
                    }
                    setInterval(blinker, 1000);
                    </script>
                    <script>
                      function cycle($item, $cycler){
                        setTimeout(cycle, 2000, $item.next(), $cycler);
                        
                        $item.slideUp(1000,function(){
                          $item.appendTo($cycler).show();        
                        });
                        }
                      cycle($('#cycler div:first'),  $('#cycler'));
                    </script>
                    <script>

    function likes(x) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("like"+x).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "likes.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id="+x);
}

function dislikes(y) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("like"+y).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "dislikes.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("d_id="+y);
}
function colorx(){
setInterval(function(){loadDoc()}, 3000);
}

/*function comment(z,q) {
    $("#comment_btn").addClass("disabled");
  var q = document.getElementById('comment'+z).value;
 
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
           var reps = xhttp.responseText;
       $("#comm"+z).after(reps);
        $("#comment_btn").removeClass("disabled");
       
      document.getElementById("comm"+z).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "comments.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("post="+z);

} */
</script>
                    </body>
                    </html>
