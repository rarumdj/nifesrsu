<?php 
session_start();
include('../../connection.php');
if (isset($_POST['submit1'])) {
    $office1 = $_POST['office1'];
    $name1 = $_POST['name1'];

    $query1 = mysql_query("INSERT INTO govcouncil (office, name, date_added) VALUES ('$office1','$name1',NOW())");

    if($query1 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit2'])) {
    $office2 = $_POST['office2'];
    $name2 = $_POST['name2'];

    $query2 = mysql_query("INSERT INTO nationalstud (office, name, date_added) VALUES ('$office2','$name2',NOW())");
    if($query2 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit3'])) {
    $office3 = $_POST['office3'];
    $name3 = $_POST['name3'];
    $phone3 = $_POST['phone3'];

    $query3 = mysql_query("INSERT INTO phzonecouncil (office, name, phone, date_added) VALUES ('$office3','$name3','$phone3',NOW())");
    if($query3 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit4'])) {
    $office4 = $_POST['office4'];
    $name4 = $_POST['name4'];
    $phone4 = $_POST['phone4'];

    $query4 = mysql_query("INSERT INTO phzonestaff (office, name, phone, date_added) VALUES ('$office4','$name4','$phone4',NOW())");
    if($query4 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit5'])) {
    $office5 = $_POST['office5'];
    $name5 = $_POST['name5'];
    $phone5 = $_POST['phone5'];
    $school5 = $_POST['school5'];

    $query5 = mysql_query("INSERT INTO zonalofficial (office, name, phone, school, date_added) VALUES ('$office5','$name5','$phone5','$school5',NOW())");
    if($query5 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit6'])) {
    $office6 = $_POST['office6'];
    $name6 = $_POST['name6'];
    $phone6 = $_POST['phone6'];
    $school6 = $_POST['school6'];

    $query6 = mysql_query("INSERT INTO eastzoneofficial (office, name, phone, school, date_added) VALUES ('$office6','$name6','$phone6','$school6',NOW())");
    if($query6 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit7'])) {
    $office7 = $_POST['office7'];
    $name7 = $_POST['name7'];
    $phone7 = $_POST['phone7'];

    $query7 = mysql_query("INSERT INTO phareacouncil (office, name, phone, date_added) VALUES ('$office7','$name7','$phone7',NOW())");
    if($query7 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit8'])) {
    $goal_id8 = $_POST['goal_id8'];
    $goal8 = $_POST['goal8'];

    $query8 = mysql_query("INSERT INTO zonalgoal (goal_id, goal, date_added) VALUES ('$goal_id8','$goal8',NOW())");
    if($query8 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit9'])) {
    $goal_id9 = $_POST['goal_id9'];
    $goal9 = $_POST['goal9'];

    $query9 = mysql_query("INSERT INTO subzonalgoal (goal_id, goal, date_added) VALUES ('$goal_id9','$goal9',NOW())");
    if($query9 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit10'])) {
    $goal_id10 = $_POST['goal_id10'];
    $goal10 = $_POST['goal10'];

    $query10 = mysql_query("INSERT INTO groupgoal (goal_id, goal, date_added) VALUES ('$goal_id10','$goal10',NOW())");
    if($query10 == true){
        $msg = "Submit Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}
elseif (isset($_POST['submit11'])) {
    $name11 = $_POST['name11'];
    $pspeech11 = $_POST['pspeech'];

    $image = $_FILES['img1']['name'];
    $img_tmp = $_FILES['img1']['tmp_name'];
    $target = "images/".$image;
    (move_uploaded_file($img_tmp, $target));

    $query11 = mysql_query("UPDATE president_speech SET name = '$name11', speech = '$pspeech11', img_path = '$target' WHERE id ='1'");

    if($query11 == true){
        $msg = "Change Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
  
}
elseif (isset($_POST['submit12'])) {
    $name12 = $_POST['name12'];
    $gspeech12 = $_POST['gspeech12'];

    $image1 = $_FILES['img2']['name'];
    $img_tmp1 = $_FILES['img2']['tmp_name'];
    $target1 = "images/".$image1;
    (move_uploaded_file($img_tmp1, $target1));

    $query12 = mysql_query("UPDATE secretary_speech SET name = '$name12', speech = '$pspeech12', img_path = '$target' WHERE id ='1'");
    if($query12 == true){
        $msg = "Change Successfully";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
}

// Delete Query
if (isset($_POST['delete1'])) {
    $delete = $_POST['delete1'];

    $del = mysql_query("DELETE FROM govcouncil WHERE id = '$delete1'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `govcouncil` DROP `id`");
        $reset = mysql_query("ALTER TABLE `govcouncil` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `govcouncil` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete2'])) {
    $delete = $_POST['delete2'];

    $del = mysql_query("DELETE FROM nationalstud WHERE id = '$delete2'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `nationalstud` DROP `id`");
        $reset = mysql_query("ALTER TABLE `nationalstud` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `nationalstud` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete3'])) {
    $delete = $_POST['delete3'];

    $del = mysql_query("DELETE FROM phzonecouncil WHERE id = '$delete3'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `phzonecouncil` DROP `id`");
        $reset = mysql_query("ALTER TABLE `phzonecouncil` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `phzonecouncil` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete4'])) {
    $delete = $_POST['delete4'];

    $del = mysql_query("DELETE FROM phzonestaff WHERE id = '$delete4'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `phzonestaff` DROP `id`");
        $reset = mysql_query("ALTER TABLE `phzonestaff` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `phzonestaff` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete5'])) {
    $delete = $_POST['delete5'];

    $del = mysql_query("DELETE FROM zonalofficial WHERE id = '$delete5'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `zonalofficial` DROP `id`");
        $reset = mysql_query("ALTER TABLE `zonalofficial` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `zonalofficial` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete6'])) {
    $delete = $_POST['delete6'];

    $del = mysql_query("DELETE FROM eastzoneofficial WHERE id = '$delete6'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `eastzoneofficial` DROP `id`");
        $reset = mysql_query("ALTER TABLE `eastzoneofficial` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `eastzoneofficial` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete7'])) {
    $delete = $_POST['delete7'];

    $del = mysql_query("DELETE FROM phareacouncil WHERE id = '$delete7'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `phareacouncil` DROP `id`");
        $reset = mysql_query("ALTER TABLE `phareacouncil` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `phareacouncil` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete8'])) {
    $delete = $_POST['delete8'];

    $del = mysql_query("DELETE FROM zonalgoal WHERE id = '$delete8'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `zonalgoal` DROP `id`");
        $reset = mysql_query("ALTER TABLE `zonalgoal` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `zonalgoal` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete9'])) {
    $delete = $_POST['delete9'];

    $del = mysql_query("DELETE FROM subzonalgoal WHERE id = '$delete9'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `subzonalgoal` DROP `id`");
        $reset = mysql_query("ALTER TABLE `subzonalgoal` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `subzonalgoal` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 if (isset($_POST['delete10'])) {
    $delete = $_POST['delete10'];

    $del = mysql_query("DELETE FROM groupgoal WHERE id = '$delete10'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `groupgoal` DROP `id`");
        $reset = mysql_query("ALTER TABLE `groupgoal` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `groupgoal` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 
// Select Querys

$select1 = mysql_query("SELECT * FROM govcouncil");
$select2 = mysql_query("SELECT * FROM nationalstud");
$select3 = mysql_query("SELECT * FROM phzonecouncil");
$select4 = mysql_query("SELECT * FROM phzonestaff");
$select5 = mysql_query("SELECT * FROM zonalofficial");
$select6 = mysql_query("SELECT * FROM eastzoneofficial");
$select7 = mysql_query("SELECT * FROM phareacouncil");
$select8 = mysql_query("SELECT * FROM zonalgoal");
$select9 = mysql_query("SELECT * FROM subzonalgoal");
$select10 = mysql_query("SELECT * FROM groupgoal");
$select11 = mysql_query("SELECT * FROM president_speech");
$select12 = mysql_query("SELECT * FROM secretary_speech");


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NIFES Profile | <?php echo $_SESSION['office']; ?></title>
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
                <a style="background-color:blue; font-size:25px"  class="navbar-brand" href="index.php"><?php echo $_SESSION['office']; ?></a> 
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
                  <li>
                    <a href="#"><i class="fa fa-sitemap fa-3x"></i> Database<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                         <li>
                            <a href="gs_memb_data.php">Members</a>
                        </li>
                        <li>
                            <a href="gs_asso_data.php">Associates</a>
                        </li>
                        <li>
                            <a href="gs_dcg_data.php">DCG Facilitators</a>
                        </li>
                        <li>
                            <a href="gs_vol_data.php">Voluntary Members</a>
                        </li>
                        <li>
                            <a href="gs_fyb_data.php">Final Year Brethren</a>
                        </li>
                        <li>
                        <a href="contact_us.php">Contact Us</a>
                    </li>
                </ul>
              </li>
            <li>
                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Updata Database Content<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="gs_update_asso.php">Update Associates</a>
                    </li>
                    <li>
                        <a href="gs_update_dcg.php">Update DCG</a>
                    </li>
                    <li>
                    <a href="#">Update Excutive<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="add_generation.php">Add Generation</a>
                            </li>
                            <li>
                                <a href="generation.php">View Generations</a>
                            </li>
                            
                        </ul>
                        </li>

                    <li>
                        <a href="gs_update_memb.php">Update Members</a>
                    </li>
                    <li>
                        <a href="nifes_profile.php">Update NIFES Profile</a>
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
                        <h5>Welcome, <b><?php echo $_SESSION['office']; ?>.</b> </h5>
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
                            NIFES Profile
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#gov-council" data-toggle="tab">Gov Council</a>
                                </li>
                                <li class=""><a href="#national-stud" data-toggle="tab">National Student</a>
                                </li>
                                <li class=""><a href="#ph-zone-council" data-toggle="tab">PH Zone Council</a>
                                </li>
                                <li class=""><a href="#ph-zone-staff" data-toggle="tab">PH Zone Staff</a>
                                </li>
                                <li class=""><a href="#zonal-stud" data-toggle="tab">Zonal Student</a>
                                </li>
                                <li class=""><a href="#subzone-stud" data-toggle="tab">Subzonal Student</a>
                                </li>
                                <li class=""><a href="#ph-area-council" data-toggle="tab">PH Area Council</a>
                                </li>
                                <li class=""><a href="#zonal-goal" data-toggle="tab">Zonal Goal</a>
                                </li>
                                <li class=""><a href="#subzone-goal" data-toggle="tab">Sub Zone Goal</a>
                                </li>
                                <li class=""><a href="#group-goal" data-toggle="tab">Group Goal</a>
                                </li>
                                <li class=""><a href="#president" data-toggle="tab">President Speech</a>
                                </li>
                                <li class=""><a href="#gensec" data-toggle="tab">Secretary Speech</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="gov-council">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>Office</label>
                                            <input class="form-control" name="office1" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name1" placeholder="" />
                                        </div>
                                        <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="national-stud">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>Office</label>
                                            <input class="form-control" name="office2" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name2" placeholder="" />
                                        </div>
                                        <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="ph-zone-council">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>Office</label>
                                            <input class="form-control" name="office3" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name3" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone3" placeholder="" />
                                        </div>
                                        <button type="submit" name="submit3" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="ph-zone-staff">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>Office</label>
                                            <input class="form-control" name="office4" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name4" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone4" placeholder="" />
                                        </div>
                                        <button type="submit" name="submit4" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="zonal-stud">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>Office</label>
                                            <input class="form-control" name="office5" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name5" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone5" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>School</label>
                                            <input class="form-control" name="school5" placeholder="" />
                                        </div>
                                        <button type="submit" name="submit5" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="subzone-stud">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>Office</label>
                                            <input class="form-control" name="office6" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name6" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone6" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>School</label>
                                            <input class="form-control" name="school6" placeholder="" />
                                        </div>
                                        <button type="submit" name="submit6" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="ph-area-council">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>Office</label>
                                            <input class="form-control" name="office7" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name7" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone7" placeholder="" />
                                        </div>
                                        <button type="submit" name="submit7" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="zonal-goal">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>#</label>
                                            <input class="form-control" name="goal_id8" placeholder="e.g Goal 1:" />
                                        </div>
                                        <div class="form-group">
                                            <label>Goal</label>
                                            <textarea class="form-control" name="goal8" placeholder="" row="3"></textarea>
                                        </div>
                                        <button type="submit" name="submit8" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="subzone-goal">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>#</label>
                                            <input class="form-control" name="goal_id9" placeholder="e.g Goal 1:" />
                                        </div>
                                        <div class="form-group">
                                            <label>Goal</label>
                                            <textarea class="form-control" name="goal9" placeholder="" row="3"></textarea>
                                        </div>
                                        <button type="submit" name="submit9" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="group-goal">
                                <div class="col-md-6">
                                    <form role="form" method="POST">
                                     <div class="form-group">
                                            <label>#</label>
                                            <input class="form-control" name="goal_id10" placeholder="e.g Goal 1:" />
                                        </div>
                                        <div class="form-group">
                                            <label>Goal</label>
                                            <textarea class="form-control" name="goal10" placeholder="" row="3"></textarea>
                                        </div>
                                        <button type="submit" name="submit10" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="president">
                                <div class="col-md-6">
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name11" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Speech</label>
                                            <textarea class="form-control" name="pspeech" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img1" />
                                        </div>
                                        <button type="submit" name="submit11" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                                <div class="tab-pane fade" id="gensec">
                                <div class="col-md-6">
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name12" placeholder="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Speech</label>
                                            <textarea class="form-control" name="gspeech12" row="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img2" />
                                        </div>
                                        <button type="submit" name="submit12" class="btn btn-primary">Submit</button>
                                        </form>
                                </div>
                                </div>
                            </div>
                        </div>
                        
                     <!-- End Form Elements -->

                </div>
                <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            NIFES Profile Data
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class=""><a href="#gov-council-table" data-toggle="tab">Gov Council</a>
                                </li>
                                <li class=""><a href="#national-stud-table" data-toggle="tab">National Student</a>
                                </li>
                                <li class=""><a href="#ph-zone-council-table" data-toggle="tab">PH Zone Council</a>
                                </li>
                                <li class=""><a href="#ph-zone-staff-table" data-toggle="tab">PH Zone Staff</a>
                                </li>
                                <li class=""><a href="#zonal-stud-table" data-toggle="tab">Zonal Student</a>
                                </li>
                                <li class=""><a href="#subzone-stud-table" data-toggle="tab">Subzonal Student</a>
                                </li>
                                <li class=""><a href="#ph-area-council-table" data-toggle="tab">PH Area Council</a>
                                </li>
                                <li class=""><a href="#zonal-goal-table" data-toggle="tab">Zonal Goal</a>
                                </li>
                                <li class=""><a href="#subzone-goal-table" data-toggle="tab">Sub Zone Goal</a>
                                </li>
                                <li class=""><a href="#group-goal-table" data-toggle="tab">Group Goal</a>
                                </li>
                                <li class=""><a href="#president-table" data-toggle="tab">President Speech</a>
                                </li>
                                <li class=""><a href="#gensec-table" data-toggle="tab">Secretary Speech</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="gov-council-table">
                                 <div class="table-responsive">
                                 <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                 <?php
                                 $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                     <thead>
                                         <tr>
                                             <th>#</th>
                                             <th>Full Name</th>
                                             <th>Office</th>
                                             <th>Delete</th>
                                         </tr>
                                     </thead>";
                                     
                                     $num_row = mysql_num_rows($select1);
                                     if ($num_row > 0) {
                                         $table .= "<tbody>";
                                     while ( $row = mysql_fetch_assoc($select1)) {
                         $id = $row['id'];
                         $name = $row['name'];
                         $office = $row['office'];
                                     
                              $table .= "<tr>
                                             <td>$id</td>
                                             <td>$name</td>
                                             <td>$office</td>
                                             <td><button type='submit' name='delete1' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                         </tr>";
                                     }
                          $table .= "</tbody>";
        
                                     } 
                         $table .= "</table>";
        
                                     echo $table;
                                 ?>
                                 </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="national-stud-table">
                                 <div class="table-responsive">
                                 <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                 <?php
                                 $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                     <thead>
                                         <tr>
                                             <th>#</th>
                                             <th>Full Name</th>
                                             <th>Office</th>
                                             <th>Delete</th>
                                         </tr>
                                     </thead>";
                                     
                                     $num_row = mysql_num_rows($select2);
                                     if ($num_row > 0) {
                                         $table .= "<tbody>";
                                     while ( $row = mysql_fetch_assoc($select2)) {
                         $id = $row['id'];
                         $name = $row['name'];
                         $office = $row['office'];
                                     
                              $table .= "<tr>
                                             <td>$id</td>
                                             <td>$name</td>
                                             <td>$office</td>
                                             <td><button type='submit' name='delete2' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                         </tr>";
                                     }
                          $table .= "</tbody>";
        
                                     } 
                         $table .= "</table>";
        
                                     echo $table;
                                 ?>
                                 </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="ph-zone-council-table">
                                 <div class="table-responsive">
                                 <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                 <?php
                                 $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                     <thead>
                                         <tr>
                                             <th>#</th>
                                             <th>Full Name</th>
                                             <th>Office</th>
                                             <th>Phone</th>
                                             <th>Delete</th>
                                         </tr>
                                     </thead>";
                                     
                                     $num_row = mysql_num_rows($select3);
                                     if ($num_row > 0) {
                                         $table .= "<tbody>";
                                     while ( $row = mysql_fetch_assoc($select3)) {
                         $id = $row['id'];
                         $name = $row['name'];
                         $office = $row['office'];
                         $office = $row['phone'];
                                     
                              $table .= "<tr>
                                             <td>$id</td>
                                             <td>$name</td>
                                             <td>$office</td>
                                             <td>$phone</td>
                                             <td><button type='submit' name='delete3' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                         </tr>";
                                     }
                          $table .= "</tbody>";
        
                                     } 
                         $table .= "</table>";
        
                                     echo $table;
                                 ?>
                                 </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="ph-zone-staff-table">
                                 <div class="table-responsive">
                                 <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                 <?php
                                 $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                     <thead>
                                         <tr>
                                             <th>#</th>
                                             <th>Full Name</th>
                                             <th>Office</th>
                                             <th>Phone</th>
                                             <th>Delete</th>
                                         </tr>
                                     </thead>";
                                     
                                     $num_row = mysql_num_rows($select4);
                                     if ($num_row > 0) {
                                         $table .= "<tbody>";
                                     while ( $row = mysql_fetch_assoc($select4)) {
                         $id = $row['id'];
                         $name = $row['name'];
                         $office = $row['office'];
                         $office = $row['phone'];
                                     
                              $table .= "<tr>
                                             <td>$id</td>
                                             <td>$name</td>
                                             <td>$office</td>
                                             <td>$phone</td>
                                             <td><button type='submit' name='delete4' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                         </tr>";
                                     }
                          $table .= "</tbody>";
        
                                     } 
                         $table .= "</table>";
        
                                     echo $table;
                                 ?>
                                 </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="zonal-stud-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Office</th>
                                            <th>School</th>
                                            <th>Phone</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select5);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select5)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $office = $row['office'];
                        $office = $row['phone'];
                        $school = $row['school'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$office</td>
                                            <td>$school</td>
                                            <td>$phone</td>
                                            <td><button type='submit' name='delete5' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="subzone-stud-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Office</th>
                                            <th>School</th>
                                            <th>Phone</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select6);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select6)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $office = $row['office'];
                        $office = $row['phone'];
                        $school = $row['school'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$office</td>
                                            <td>$school</td>
                                            <td>$phone</td>
                                            <td><button type='submit' name='delete6' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="ph-area-council-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Office</th>
                                            <th>Phone</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select7);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select7)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $office = $row['office'];
                        $office = $row['phone'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$office</td>
                                            <td>$phone</td>
                                            <td><button type='submit' name='delete7' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="zonal-goal-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Goal ID</th>
                                            <th>Goal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select8);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select8)) {
                        $id = $row['id'];
                        $goal_id = $row['goal_id'];
                        $goal = $row['goal'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$goal_id</td>
                                            <td>$goal</td>
                                            <td><button type='submit' name='delete8' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="subzone-goal-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Goal ID</th>
                                            <th>Goal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select9);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select9)) {
                        $id = $row['id'];
                        $goal_id = $row['goal_id'];
                        $goal = $row['goal'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$goal_id</td>
                                            <td>$goal</td>
                                            <td><button type='submit' name='delete9' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="group-goal-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Goal ID</th>
                                            <th>Goal</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select10);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select10)) {
                        $id = $row['id'];
                        $goal_id = $row['goal_id'];
                        $goal = $row['goal'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$goal_id</td>
                                            <td>$goal</td>
                                            <td><button type='submit' name='delete10' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="president-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Speech</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select11);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select11)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $speech = $row['speech'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$speech</td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                                <div class="tab-pane fade" id="gensec-table">
                                <div class="table-responsive">
                                <form method="POST" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                                <?php
                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>Speech</th>
                                        </tr>
                                    </thead>";
                                    
                                    $num_row = mysql_num_rows($select12);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ( $row = mysql_fetch_assoc($select12)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $speech = $row['speech'];
                                    
                             $table .= "<tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$speech</td>
                                        </tr>";
                                    }
                         $table .= "</tbody>";
       
                                    } 
                        $table .= "</table>";
       
                                    echo $table;
                                ?>
                                </form>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                     <!-- End Form Elements -->
            </div>
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
    <!-- Form Drop Down -->
    <script src="../assets/js/exco.js"></script>
</body>
</html>
