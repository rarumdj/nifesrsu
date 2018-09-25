<?php
session_start();
require('../../connection.php');
if (isset($_POST['delete'])) {
    $delete = $_POST['delete'];

    $del = mysql_query("DELETE FROM audio WHERE id = '$delete'");

    if($del == true){
    $reset = mysql_query("ALTER TABLE `audio` DROP `id`");
    $reset = mysql_query("ALTER TABLE `audio` AUTO_INCREMENT = 1");
    $reset = mysql_query("ALTER TABLE `audio` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }

 $select_aud = mysql_query("SELECT * FROM audio");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Audio | <?php echo $_SESSION["office"] ?></title>
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
                <a style="background-color:blue; font-size:25px" class="navbar-brand" href="index.php"><b><?php echo $_SESSION["office"] ?></b></a> 
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
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Upload Content<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="cwc_upload_pub.php">Upload Publication</a>
                            </li>
                            <li>
                                <a href="cwc_upload_audio.php">Upload Audio</a>
                            </li>
                        </ul>
                      </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Updata Content<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="cwc_update_pub.php">Update Publication</a>
                            </li>
                            <li>
                                <a href="cwc_update_audio.php">Update Audio</a>
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
               
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Audios
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Delete?');">
                            <?php
                            $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Delete</th
                                </tr>
                            </thead>";
                            
                            $num_row = mysql_num_rows($select_aud);
                            if ($num_row > 0) {
                              $table .= "<tbody>";
                            while ( $row = mysql_fetch_assoc($select_aud)) {
                $id = $row['id'];
                $title = $row['title'];
                $date = $row['date_added'];

                
                            
                             $table .= "<tr>
                                    <td>$id</td>
                                    <td>$title</td>
                                    <td>$date</td>
                                    <td><button type='submit' name='delete' value='$id'; class='btn btn-danger'>&#10008;</button></td>
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
