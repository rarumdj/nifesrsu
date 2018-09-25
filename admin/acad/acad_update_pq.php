<?php
session_start();
require('../../connection.php');

if (isset($_POST['delete'])){
$quest_id = $_POST['delete'];
$delete = mysql_query("DELETE FROM questions WHERE id = '$quest_id'");

if($delete == true){
    $reset = mysql_query("ALTER TABLE `questions` DROP `id`");
    $reset = mysql_query("ALTER TABLE `questions` AUTO_INCREMENT = 1");
    $reset = mysql_query("ALTER TABLE `questions` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
}

$search_question = mysql_query("SELECT * FROM questions");


?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Uploade Projects | <?php echo $_SESSION["office"] ?></title>
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
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Upload Content<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="acad_upload_pq.php">Upload Pass Questions</a>
                                    </li>
                                    <li>
                                        <a href="acad_upload_mat.php">Upload Materials</a>
                                    </li>
                                    <li>
                                        <a href="acad_upload_proj.php">Upload Projects</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-3x"></i> Updata Content<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="acad_update_pq.php">Update Pass Questions</a>
                                    </li>
                                    <li>
                                        <a href="acad_update_mat.php">Update Materials</a>
                                    </li>
                                    <li>
                                        <a href="acad_update_proj.php">Update Projects</a>
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
                                        Uploaded Past Questions
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <form method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Deletes?');">
                                            <?php
                                                $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                                    <thead>
                                                        <tr>
                                                            <th align='' valign='middle'>Course/Code</th>
                                                            <th align='' valign='middle'>Semester</th>
                                                            <th align='' valign='middle'>level</th>
                                                            <th align='' valign='middle'>Department</th>
                                                            <th align='' valign='middle'>Download</th>
                                                            <th align='' valign='middle'>Size</th>
                                                            <th align='' valign='middle'>File Type</th>
                                                            <th align='' valign='middle'>Delete</th>
                                                        </tr>
                                                    </thead>";

                                                    $qsearchNum = mysql_num_rows($search_question);
                                                    if ($qsearchNum > 0) {
                                                        $table .= "<tbody>";
                                                    while ($row = mysql_fetch_assoc($search_question)) {
                                                    $rowcourse = $row['file_name'];
                                                    $rowdepartment = $row['department'];
                                                    $rowlevel = $row['level'];
                                                    $rowsem = $row['sem'];
                                                    $rowfile_size = $row['file_size'];
                                                    $newfilesize = $rowfile_size/1024/1024;
                                                    $newr=round($newfilesize, 2);
                                                    $rowtype = $row['type'];
                                                    $rowimg_id = $row['img_id'];
                                                    $rowcontent = $row['content'];
                                                    $rowid = $row['id'];
                                                    
                                                        $table .= "<tr>
                                                            <td align='' valign='middle'>$rowcourse</td>
                                                            <td align='' valign='middle'>$rowsem</td>
                                                            <td align='' valign='middle'>$rowlevel</td>
                                                            <td align='' valign='middle'>$rowdepartment</td>
                                                            <td align='' valign='middle'><a href='download.php?img_id=$rowimg_id' >Download</a></td>
                                                            <td align='' valign='middle'>$newr MB</td>
                                                            <td align='' valign='middle'>$rowtype</td>
                                                            <td align='' valign='middle'><button type='submit' class='btn btn-danger' name='delete' value='$rowid'>&#10008;</button></td>
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