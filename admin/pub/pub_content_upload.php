<?php
session_start();
require('../../connection.php');

function generateUser($length = 6)
{

$user= "";

$possible = "0123456789abcdefghijklmnopqrstuvwxyz";

$i = 0;

while ($i < $length) {
    
    $char = substr($possible, mt_rand(0, strlen($possible)-1), 1);

    if (!strstr($user, $char)) {
        $user .= $char;
        $i ++;
        
    }
}

return $user;

}

if (isset($_POST['img_upload'])) {
    $img_title = mysql_real_escape_string($_POST['img_title']);
    $img_desc = mysql_real_escape_string($_POST['img_desc']);
    $post_id = generateUser();

    $image = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_path = "images/".$image;
    if (move_uploaded_file($img_tmp, $img_path)) {
        
        $img_query = mysql_query("INSERT INTO images (post_id, image, img_path, title, description, date_added) VALUES ('$post_id','$image','$img_path','$img_title','$img_desc',NOW())");
    }
    
}


elseif (isset($_POST['vid_upload'])) {
    $vid_title = mysql_real_escape_string($_POST['vid_title']);
    $vid_desc = mysql_real_escape_string($_POST['vid_desc']);
    $post_id = generateUser();

    $video = $_FILES['vid']['name'];
    $vid_tmp = $_FILES['vid']['tmp_name'];
    $vid_path = "videos/".$video;
    if (move_uploaded_file($vid_tmp, $vid_path)) {
        
        $img_query = mysql_query("INSERT INTO videos (post_id, video, video_path, title, description, date_added) VALUES ('$post_id','$video','$vid_path','$vid_title','$vid_desc',NOW())");
    }
    
}

elseif (isset($_POST['up_upload'])) {
    $up_title = mysql_real_escape_string($_POST['up_title']);
    $up_desc = mysql_real_escape_string($_POST['up_desc']);
    $date = $_POST['date'];
    $post_id = generateUser();



    $update = $_FILES['up_img']['name'];
    $up_tmp = $_FILES['up_img']['tmp_name'];
    $up_path = "updates/".$update;
    (move_uploaded_file($up_tmp, $up_path)); 
        
        $img_query = mysql_query("INSERT INTO updates (post_id, image, img_path, title, description, event_date, date_added) VALUES ('$post_id','$update','$up_path','$up_title','$up_desc','$date',NOW())");
    }
    
    if (isset($_POST['delete1'])) {
        $delete1 = $_POST['delete1'];
    
        $del = mysql_query("DELETE FROM images WHERE id = '$delete1'");
    
        if($del == true){
        $reset = mysql_query("ALTER TABLE `images` DROP `id`");
        $reset = mysql_query("ALTER TABLE `images` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `images` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
    
            $msg = "Delete Successful";
        }else{
            $msger = "Delete Failed";
        }
     }

     if (isset($_POST['delete2'])) {
        $delete2 = $_POST['delete2'];
    
        $del = mysql_query("DELETE FROM videos WHERE id = '$delete2'");
    
        if($del == true){
        $reset = mysql_query("ALTER TABLE `videos` DROP `id`");
        $reset = mysql_query("ALTER TABLE `videos` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `videos` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
    
            $msg = "Delete Successful";
        }else{
            $msger = "Delete Failed";
        }
     }

     if (isset($_POST['delete3'])) {
        $delete3 = $_POST['delete3'];
    
        $del = mysql_query("DELETE FROM updates WHERE id = '$delete3'");
    
        if($del == true){
        $reset = mysql_query("ALTER TABLE `updates` DROP `id`");
        $reset = mysql_query("ALTER TABLE `updates` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `updates` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
    
            $msg = "Delete Successful";
        }else{
            $msger = "Delete Failed";
        }
     }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Content | <?php echo $_SESSION["office"] ?></title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="background-color:blue; font-size:25px" class="navbar-brand" href="index.php"><?php echo $_SESSION["office"] ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; <a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li  >
                    <a  href="#"><i class="fa fa-table fa-3x"></i> Database<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="pub_stud_data.php">Students Data</a>
                        </li>
                        <li>
                            <a href="pub_dcg_data.php">DCG Data</a>
                        </li>
                        <li>
                            <a href="pub_asso_data.php">Associate Data</a>
                        </li>
                    </ul>
                </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Publicity Content<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="pub_home_update.php">Update Home Page</a>
                            </li> 
                            <li>
                                <a href="pub_content_upload.php">Upload Content</a>
                            </li>
                        </ul>
                      </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Welcome, <b><?php echo $_SESSION["office"] ?>.</b> </h5>
                        <?php if(isset($msger)){ ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> <?php echo $msger; }?>
  <?php if(isset($msg)){ ?>
            <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Well Done!</strong> <?php echo $msg; }?>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Upload Contents
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Images</h3>
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <input type="file" name="img"/>
                                        </div>
                                         <div class="form-group">
                                            <input class="form-control" placeholder="Image Title" name="img_title" />
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Description" class="form-control" rows="3" name="img_desc"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="img_upload">Upload</button>
                                         </form> 

                                 
    </div>
                                
                                <div class="col-md-6">
                                    <h3>Videos</h3>
                                     <form role="form" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <input type="file" name="vid" />
                                        </div>
                                         <div class="form-group">
                                            <input class="form-control" placeholder="Video Title" name="vid_title" />
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Description" class="form-control" rows="3" name="vid_desc"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="vid_upload">Upload</button>
                                         </form> 
                                  
                            </div>
                            <div class="col-md-6">
                                    <h3>Latest Update</h3>
                                     <form role="form" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <input type="file" name="up_img" />
                                        </div>
                                         <div class="form-group">
                                            <input class="form-control" placeholder="Title" name="up_title" />
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Description" class="form-control" rows="3" name="up_desc"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input placeholder="format @ 23, Oct 2017" class="form-control" rows="3" name="date" /> 
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="up_upload">Upload</button>
                                         </form> 
                                  
                            </div>
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                     <?php
                     $img_select = mysql_query("SELECT * FROM images");
                     ?>
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Images 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                             <form method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Discription</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php
                                $num_row = mysql_num_rows($img_select);
                                if ($num_row > 0) {
                                    while ($row = mysql_fetch_assoc($img_select)) {
                                        $id = $row['id'];
                                        $img_title = $row['title'];
                                        $img_desc = $row['description'];
                                        $date = $row['date_added'];
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $img_title; ?></td>
                                            <td><?php echo $img_desc; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><button type="submit" name="delete1" value="<?php echo $id; ?>" class="btn btn-danger">&#10008;</button></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            }
                                    ?>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                     <?php
                     $vid_select = mysql_query("SELECT * FROM videos");
                     ?>
                     <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Videos
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Discription</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php
                                $num_row = mysql_num_rows($vid_select);
                                if ($num_row > 0) {
                                    while ($row = mysql_fetch_assoc($vid_select)) {
                                        $id = $row['id'];
                                        $vid_title = $row['title'];
                                        $vid_desc = $row['description'];
                                        $date = $row['date_added'];
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $vid_title; ?></td>
                                            <td><?php echo $vid_desc; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><button type="submit" name="delete2" value="<?php echo $id; ?>" class="btn btn-danger">&#10008;</button></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            }
                                    ?>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                      <?php
                     $up_select = mysql_query("SELECT * FROM updates");
                     ?>
                     <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Events
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                             <form method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Discription</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php
                                $num_row = mysql_num_rows($up_select);
                                if ($num_row > 0) {
                                    while ($row = mysql_fetch_assoc($up_select)) {
                                        $id = $row['id'];
                                        $up_title = $row['title'];
                                        $up_desc = $row['description'];
                                        $date = $row['date_added'];
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $up_title; ?></td>
                                            <td><?php echo $up_desc; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><button type="submit" name="delete3" value="<?php echo $id; ?>" class="btn btn-danger">&#10008;</button></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            }
                                    ?>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
                <!-- /. ROW  -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div> -->
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->


        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>