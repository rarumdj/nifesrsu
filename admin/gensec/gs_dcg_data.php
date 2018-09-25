<?php
session_start();
require('../../connection.php');
 if (isset($_POST['delete'])) {
    $delete = $_POST['delete'];

    $del = mysql_query("DELETE FROM dcg WHERE id = '$delete'");

    if($del == true){
        $reset = mysql_query("ALTER TABLE `contact_us` DROP `id`");
        $reset = mysql_query("ALTER TABLE `contact_us` AUTO_INCREMENT = 1");
        $reset = mysql_query("ALTER TABLE `contact_us` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }


$select_dcg = mysql_query("SELECT * FROM dcg");

   ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DCG Data | <?php echo $_SESSION['office']; ?></title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                <a style="background-color:blue; font-size:25px" class="navbar-brand" href="index.php"><?php echo $_SESSION['office']; ?></a> 
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
                        <h5>Welcome, <b><?php echo $_SESSION['office']; ?>.</b></h5>
                        <?php if(isset($msger)){ ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> <?php echo $msger; }?>
  <?php if(isset($msg)){ ?>
            <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Well Done!</strong> <?php echo $msg; }?>
  <?php if(isset($_GET['msger'])){ ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> <?php echo $_GET['msger']; }?>
  <?php if(isset($_GET['msg'])){ ?>
            <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Well Done!</strong> <?php echo $_GET['msg']; }?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
   <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DCG Facilitators Details
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <?php
                             $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th align='' valign='middle'>#</th>
                                            <th align='' valign='middle'>Full Name</th>
                                            <th align='' valign='middle'>Sex</th>
                                            <th align='' valign='middle'>Phone</th>
                                            <th align='' valign='middle'>Department</th>
                                            <th align='' valign='middle'>Phone</th>
                                            <th align='' valign='middle'>Level</th>
                                            <th align='' valign='middle'>Cell Name</th>
                                            <th align='' valign='middle'>Delete</th>
                                            <th align='' valign='middle'>Edit</th>
                                        </tr>
                                    </thead>";
                                    $num_row = mysql_num_rows($select_dcg);
                                    if ($num_row > 0) {
                                        $table .= "<tbody>";
                                    while ($row = mysql_fetch_assoc($select_dcg)) {

                                            $id = $row['id'];
                                             $fullname = $row['fullname'];
                                              $sex = $row['gender'];
                                             $phone = $row['phone'];
                                             $dept   = $row['department'];
                                             $email = $row['email'];
                                             $level = $row['level'];
                                             $cell_name = $row['cell_name'];
                                             
                                
                            $table .= "<tr>
                                            <td align='' valign='middle'>$id</td>
                                            <td align='' valign='middle'>$fullname</td>
                                            <td align='' valign='middle'>$sex</td>
                                            <td align='' valign='middle'>$phone</td>
                                            <td align='' valign='middle'>$dept</td>
                                            <td align='' valign='middle'>$email</td>
                                            <td align='' valign='middle'>$level</td>
                                            <td align='' valign='middle'>$cell_name</td>
                                            <form method='POST'><td align='' valign='middle'><button type='submit' name='delete' value='$id' class='btn btn-danger'>&#10008;</button></td></form>
                                            <td align='' valign='middle'><a href='edit_dcg.php?id=<?$id' class='btn btn-primary'>Edit</td>
                                        </tr>";
                                    }
                                    $table .= "</tbody>";
                                    
                                    } 
                                    $table .= "</table>";
                                    
                                    echo $table;
                                    ?>
                            
                            </div>
                <!-- /. ROW  -->
            
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                   
                </div>
                </div>
                
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="../assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>
