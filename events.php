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
    <!--  -->
    <link href="new-css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="new-css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="new-css/faqstyle.css" type="text/css" media="all" />
<link href="new-css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="new-css/contactstyle.css" type="text/css" media="all" />
<!-- <link rel="stylesheet" href="o/boot.css" type="text/css" media="all" /> -->
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
        



            <div class="faq">
      <div class="container">
       
        <div class="agileinfo-news-top-grids">
          <div class="col-md-8 wthree-top-news-left">
            <div class="wthree-news-left">
              <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
              <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="active" role="presentation"><a href="#images-pills" role="tab" data-toggle="tab" aria-controls="home1" aria-expanded="true">Images</a></li>
                <li role="presentation"><a href="#videos-pills" role="tab" data-toggle="tab" aria-controls="home1" aria-expanded="true">Videos</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" id="images-pills" class="tab-pane fade in active" aria-labelledby="home1-tab">
                 <!-- Pagination Call id -->
                  
                  </div>
                  <div role="tabpanel" id="videos-pills" class="tab-pane fade" aria-labelledby="home1-tab">
                   
                </div>
              </div>
            </div>
          </div></div>
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
    <script type="text/javascript" src="new-css/bootstrap.min.js"></script>
    <script type="text/javascript" src="new-css/jquery-2.1.4.min.js"></script>
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
                      function views(y) {
                        // alert(lllll);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("view"+y).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "views.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("p_id="+y);
}

                    </script>
                    <script src="jquery-1.9.0.min.js"></script>
        <script type="text/javascript">
        // fetching records
                            function displayRecords(numRecords, pageNum) {
                                $.ajax({
                                    type: "GET",
                                    url: "img_page.php",
                                    data: "show=" + numRecords + "&pagenum=" + pageNum,
                                    cache: false,
                                    beforeSend: function() {
                                        $('.wthree-news-top-left').html('<img src="loader.gif" alt="" width="24" height="24" style="padding-left: 350px; margin-top:50px;" >');
                                    },
                                    success: function(html) {
                                        $("#images-pills").html(html);
                                        $('.wthree-news-top-left').html('');
                                    }
                                });
                            }
                          
        // used when user change row limit
                            function changeDisplayRowCount(numRecords) {
                                displayRecords(numRecords, 1);
                            }

                            $(document).ready(function() {
                                displayRecords(2, 1);
                            });

                            function displayRecords1(numRecords1, pageNo) {
                                $.ajax({
                                    type: "GET",
                                    url: "vid_page.php",
                                    data: "show1=" + numRecords1 + "&pageno=" + pageNo,
                                    cache: false,
                                    beforeSend: function() {
                                        $('.wthree-news-top-left').html('<img src="loader.gif" alt="" width="24" height="24" style="padding-left: 350px; margin-top:50px;" >');
                                    },
                                    success: function(html) {
                                        $("#videos-pills").html(html);
                                        $('.wthree-news-top-left').html('');
                                    }
                                });
                            }
                          
        // used when user change row limit
                            function changeDisplayRowCount(numRecords1) {
                                displayRecords1(numRecords1, 1);
                            }

                            $(document).ready(function() {
                                displayRecords1(2, 1);
                            });
        </script>
                    </body>
                    </html>
