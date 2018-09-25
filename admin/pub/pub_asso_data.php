<?php
session_start();
require('../../connection.php');
$select_asso = mysql_query("SELECT * FROM associates");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Associate Data | <?php echo $_SESSION["office"] ?></title>
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
                        <h5>Welcome, <b><?php echo $_SESSION["office"] ?>.</b></h5>
                       
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
                            Associate Details
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                        <?php
                           $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Gender</th>
                                        <th>Birthday</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Year of Graduation</th>
                                    </tr>
                                </thead>";
                                
                                $num_row = mysql_num_rows($select_asso);
                                if ($num_row > 0) {
                                  $table .= "<tbody>";
                                while ( $row = mysql_fetch_assoc($select_asso)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $gender = $row['gender'];
                    $birth = $row['birthday'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $location = $row['location'];
                    $grad_year = $row['year_of_graduation'];

                    
                                
                                 $table .= "<tr>
                                        <td>$id</td>
                                        <td>$name</td>
                                        <td>$gender</td>
                                        <td>$birth</td>
                                        <td>$phone</td>
                                        <td>$email</td>
                                        <td>$location</td>
                                        <td>$grad_year</td>
                                    </tr>";
                               
                                 }
                                 $table .= "</tbody>";

                                 } 
                                 $table .= "</table>";

                                 echo $table;
                             ?>
                           
              
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
