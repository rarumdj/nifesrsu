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

if (isset($_POST['upload1'])) {
    $image1 = $_FILES['img1']['name'];
    $img_tmp1 = $_FILES['img1']['tmp_name'];
    $img_path1 = "images/".$image1;
    (move_uploaded_file($img_tmp1, $img_path1)); 
        
        $img_query4 = mysql_query("INSERT INTO carousel (image, img_path, date_added) VALUES ('$image1','$img_path1',NOW())");
    
    
}


elseif (isset($_POST['upload2'])) {
    $title2 = mysql_real_escape_string($_POST['title2']);
    $desc2 = mysql_real_escape_string($_POST['desc2']);
    $post_id = generateUser();

    $image2 = $_FILES['img2']['name'];
    $img_tmp2 = $_FILES['img2']['tmp_name'];
    $img_path2 = "images/".$image2;
    (move_uploaded_file($img_tmp2, $img_path2)); 

    $image02 = $_FILES['img02']['name'];
    $img_tmp02 = $_FILES['img02']['tmp_name'];
    $img_path02 = "images/".$image02;
    (move_uploaded_file($img_tmp02, $img_path02));

    // $img_query2 = mysql_query("INSERT INTO stayconnected (post_id, image, img_path, image2, img_path2, title, description, date_added) VALUES ('$post_id','$image2','$img_path2','$image02','$img_path02','$title2','$desc2',NOW())");
        
        $img_query2 = mysql_query("UPDATE stayconnected SET image = '$image2', img_path = '$img_path2', image2 = '$image02', img_path2 = '$img_path02', title = '$title2', description = '$desc2' WHERE id = '1'");
    
}

elseif (isset($_POST['upload3'])) {
    $title3 = mysql_real_escape_string($_POST['title3']);
    $desc3 = mysql_real_escape_string($_POST['desc3']);
    $post_id = generateUser();

    $image3 = $_FILES['img3']['name'];
    $img_tmp3 = $_FILES['img3']['tmp_name'];
    $img_path3 = "images/".$image3;
    (move_uploaded_file($img_tmp3, $img_path3)); 

    $image03 = $_FILES['img03']['name'];
    $img_tmp03 = $_FILES['img03']['tmp_name'];
    $img_path03 = "images/".$image03;
    (move_uploaded_file($img_tmp03, $img_path03));

    // $img_query3 = mysql_query("INSERT INTO stayconnected (post_id, image, img_path, image2, img_path2, title, description, date_added) VALUES ('$post_id','$image3','$img_path3','$image03','$img_path03','$title3','$desc3',NOW())");
    
        
        $img_query3 = mysql_query("UPDATE stayconnected SET image = '$image3', img_path = '$img_path3', image2 = '$image03', img_path2 = '$img_path03', title = '$title3', description = '$desc3' WHERE id = '2'");
    
    
}

elseif (isset($_POST['upload4'])) {
    $title4 = mysql_real_escape_string($_POST['title4']);
    $desc4 = mysql_real_escape_string($_POST['desc4']);
    $post_id = generateUser();

    $image4 = $_FILES['img4']['name'];
    $img_tmp4 = $_FILES['img4']['tmp_name'];
    $img_path4 = "images/".$image4;
    (move_uploaded_file($img_tmp4, $img_path4)); 

    $image04 = $_FILES['img04']['name'];
    $img_tmp04 = $_FILES['img04']['tmp_name'];
    $img_path04 = "images/".$image04;
    (move_uploaded_file($img_tmp04, $img_path04));

    // $img_query1 = mysql_query("INSERT INTO stayconnected (post_id, image, img_path, image2, img_path2, title, description, date_added) VALUES ('$post_id','$image4','$img_path4','$image04','$img_path04','$title4','$desc4',NOW())");
   
        
        $img_query1 = mysql_query("UPDATE stayconnected SET image = '$image4', img_path = '$img_path4', image2 = '$image04', img_path2 = '$img_path04', title = '$title4', description = '$desc4' WHERE id = '3'");
    
    
}

elseif (isset($_POST['upload5'])) {
    $title5 = mysql_real_escape_string($_POST['title5']);
    $desc5 = mysql_real_escape_string($_POST['desc5']);
    $post_id = generateUser();

    $image5 = $_FILES['img5']['name'];
    $img_tmp5 = $_FILES['img5']['tmp_name'];
    $img_path5 = "images/".$image5;
    (move_uploaded_file($img_tmp5, $img_path5));

    $image05 = $_FILES['img05']['name'];
    $img_tmp05 = $_FILES['img05']['tmp_name'];
    $img_path05 = "images/".$image05;
    (move_uploaded_file($img_tmp05, $img_path05)); 
    
    // $img_query5 = mysql_query("INSERT INTO stayconnected (post_id, image, img_path, image2, img_path2, title, description, date_added) VALUES ('$post_id','$image5','$img_path5','$image05','$img_path05','$title5','$desc5',NOW())");

        $img_query5 = mysql_query("UPDATE stayconnected SET image = '$image5', img_path = '$img_path5', image2 = '$image05', img_path2 = '$img_path05', title = '$title5', description = '$desc5' WHERE id = '4'");
    
    
}

if (isset($_POST['delete'])) {
    $delete = $_POST['delete'];

    $del = mysql_query("DELETE FROM carousel WHERE id = '$delete'");

    if($del == true){
    $reset = mysql_query("ALTER TABLE `carousel` DROP `id`");
    $reset = mysql_query("ALTER TABLE `carousel` AUTO_INCREMENT = 1");
    $reset = mysql_query("ALTER TABLE `carousel` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

$select_caro = mysql_query("SELECT * FROM carousel");

$img_select = mysql_query("SELECT * FROM stayconnected");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Homepage | <?php echo $_SESSION['office']; ?></title>
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
                <a style="background-color:blue; font-size:25px" class="navbar-brand" href="pub_index.php"><?php echo $_SESSION['office']; ?></a> 
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
                        <h5>Welcome <b><?php echo $_SESSION['office']; ?>.</b> </h5>
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
                            Home Updates
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Carosel Image</h3>
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <label>Image pixel: 1300 X 463 px</label>
                                            <input type="file" name="img1" />
                                        </div>
                                        <button type="submit" name="upload1" class="btn btn-primary">Upload</button>
                                         </form> 

                                 
    </div>
                          <div class="col-md-6">
                                    <h3>WORKCAMP</h3>
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                            <label>Index Display</label>
                                            <input type="file" name="img2" />
                                        </div>
                                        <div class="form-group">
                                            <label>Inner Display</label>
                                            <input type="file" name="img02" />
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Title" name="title2" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="desc2"></textarea>
                                        </div>
                                            <button type="submit" name="upload2" class="btn btn-primary">Update</button>
                                        </fieldset>
                                    </form>
                                  
                            </div>
                            <div class="col-md-6">
                                    <h3>EASTER CONFERENCE</h3>
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                            <label>Index Display</label>
                                            <input type="file" name="img3" />
                                        </div>
                                        <div class="form-group">
                                            <label>Inner Display</label>
                                            <input type="file" name="img03" />
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Title" name="title3" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="desc3"></textarea>
                                        </div>
                                            <button type="submit" name="upload3" class="btn btn-primary">Update</button>
                                        </fieldset>
                                    </form>
                                  
                            </div>
                            <div class="col-md-6">
                                    <h3>PROJECT 10:10</h3>
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                            <label>Index Display</label>
                                            <input type="file" name="img4" />
                                        </div>
                                        <div class="form-group">
                                            <label>Inner Display</label>
                                            <input type="file" name="img04" />
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Title" name="title4" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="desc4"></textarea>
                                        </div>
                                            <button type="submit" name="upload4" class="btn btn-primary">Update</button>
                                        </fieldset>
                                    </form>
                                  
                            </div>
                            <div class="col-md-6">
                                    <h3>LTC</h3>
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="form-group">
                                            <label>Index Display</label>
                                            <input type="file" name="img5" />
                                        </div>
                                        <div class="form-group">
                                            <label>Inner Display</label>
                                            <input type="file" name="img05" />
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" placeholder="Title" name="title5" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" name="desc5"></textarea>
                                        </div>
                                            <button type="submit" name="upload5" class="btn btn-primary">Update</button>
                                        </fieldset>
                                    </form>
                                  
                            </div>

                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                    
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            StayConnected 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Discription</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <?php
                                $num_row = mysql_num_rows($img_select);
                                if ($num_row > 0) {
                                    while ($row = mysql_fetch_assoc($img_select)) {
                                        $img_title = $row['title'];
                                        $img_desc = $row['description'];
                                        $date = $row['date_added'];
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $img_title; ?></td>
                                            <td><?php echo $img_desc; ?></td>
                                            <td><?php echo $date; ?></td>
                                        </tr>
                                    </tbody>
                                    <?php
                                }
                            }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                     <!--  -->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            Carosel 
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image Name</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php
                                $num_row = mysql_num_rows($select_caro);
                                if ($num_row > 0) {
                                    while ($row = mysql_fetch_assoc($select_caro)) {
                                        $id = $row['id'];
                                        $img = $row['image'];
                                        $date = $row['date_added'];
                                ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $img; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><button type='submit' name='delete' value='<?php echo $id; ?>' class='btn btn-danger'>&#10008;</button></td>
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
                    <!--  -->
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