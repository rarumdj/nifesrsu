 <?php 
 session_start();
 include_once('../../connection.php');
// update
 $select_5yrs = mysql_query("SELECT * FROM members WHERE department IN ('Animal Science', 'Forestry And Environment', 'Food Science And Technology', 'Home Science And Management', 'Fisheries', 'Crop/soil Science', 'Agricultural Economics And Extension', 'Petroleum Engineering', 'Mechanical Engineering', 'Marine Engineering', 'Civil Engineering', 'Chemical/petrochemical Engineering', 'Agricultural And Environmental Engineering', 'Electrical Engineering', 'Land Survey', 'Estate Management', 'Quantity Surveying', 'Architecture', 'Urban And Regional Planning', 'Business Law', 'International Law', 'Private Property Law', 'Public Law', 'Medical Laboratory Science')");
 $num_row_5yrs = mysql_num_rows($select_5yrs);

 $select_4yrs = mysql_query("SELECT * FROM members WHERE department IN ('Banking and Finance', 'Accountancy', 'Mass Communication', ' Office And Information Management', 'Marketing', 'Management', 'Secretarial Administration', 'Mathematics','Computer Science', 'Physics', 'Chemistry', 'Applied And Environmental Biology', 'Science And Technical Education', 'Educational Foundations', 'Business Education')");
 $num_row_4yrs = mysql_num_rows($select_4yrs);
 
  

 if (isset($_POST['update'])) {
     if($num_row_4yrs > 0){
     while ( $row = mysql_fetch_array($select_4yrs)) {
         $level_4yrs = $row['level'];
                 
         if($level_4yrs < 400){

   }

}                              

 $result1 = mysql_query("UPDATE members SET level = level + 100 WHERE level < 400 AND department in ('Banking and Finance', 'Accountancy', 'Mass Communication', ' Office And Information Management', 'Marketing', 'Management', 'Secretarial Administration', 'Mathematics','Computer Science', 'Physics', 'Chemistry', 'Applied And Environmental Biology', 'Science And Technical Education', 'Educational Foundations', 'Business Education')");

}else{


} 
if($num_row_5yrs > 0){
 while ( $row = mysql_fetch_array($select_5yrs)) {
     $level_5yrs = $row['level'];
     if($level_5yrs < 500){
       }
 }   

         $result = mysql_query("UPDATE members SET level = level + 100 WHERE level < 500 AND department in ('Animal Science', 'Forestry And Environment', 'Food Science And Technology', 'Home Science And Management', 'Fisheries', 'Crop/soil Science', 'Agricultural Economics And Extension', 'Petroleum Engineering', 'Mechanical Engineering', 'Marine Engineering', 'Civil Engineering', 'Chemical/petrochemical Engineering', 'Agricultural And Environmental Engineering', 'Electrical Engineering', 'Land Survey', 'Estate Management', 'Quantity Surveying', 'Architecture', 'Urban And Regional Planning', 'Business Law', 'International Law', 'Private Property Law', 'Public Law', 'Medical Laboratory Science')");
     }else{
         
    
}
if($result || $result1 ==true){
    $msg = "Level Upgraded Successfully";
}else{
    $msger = "Level Upgarde Failed";
}
 }
//  end update


 if (isset($_POST['delete'])) {
    $delete = $_POST['delete'];

    $del = mysql_query("DELETE FROM members WHERE id = '$delete'");

    if($del == true){
    $reset = mysql_query("ALTER TABLE `members` DROP `id`");
    $reset = mysql_query("ALTER TABLE `members` AUTO_INCREMENT = 1");
    $reset = mysql_query("ALTER TABLE `members` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

        $msg = "Delete Successful";
    }else{
        $msger = "Delete Failed";
    }
 }
 
 $select_mem = mysql_query("SELECT * FROM members ORDER BY name ASC");



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Students Data | <?php echo $_SESSION['office']; ?></title>
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
                        <h5>Welcome, <b><?php echo $_SESSION['office']; ?>.</b> </h5>
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
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Members Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form action="gs_stud_data.php" method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Delete Member?');">
                            <?php
                            $table = "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Birthday</th>
                                    <th>Department</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Level</th>
                                    <th>Year of Graduation</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>";
                            
                            $num_row = mysql_num_rows($select_mem);
                            if ($num_row > 0) {
                              $table .= "<tbody>";
                            while ( $row = mysql_fetch_assoc($select_mem)) {
                $id = $row['id'];
                $name = $row['name'];
                $gender = $row['gender'];
                $birth = $row['birthday'];
                $dept = $row['department'];
                $phone = $row['phone'];
                $email = $row['email'];
                $location = $row['location'];
                $level = $row['level'];
                $grad_year = $row['year_of_graduation'];

                
                            
                             $table .= "<tr>
                                    <td>$id</td>
                                    <td>$name</td>
                                    <td>$gender</td>
                                    <td>$birth</td>
                                    <td>$dept</td>
                                    <td>$phone</td>
                                    <td>$email</td>
                                    <td>$location</td>
                                    <td>$level</td>
                                    <td>$grad_year</td>
                                    <td><button type='submit' name='delete' value='$id'; class='btn btn-danger'>&#10008;</button></td>
                                    <td><a href='edit_memb.php?id=$id;' class='btn btn-primary'>&#9997;</td>
                                </tr>";
                           
                             }
                             $table .= "</tbody>";

                             } 
                             $table .= "</table>";

                             echo $table;
                         ?>
                                    
                                    
                                </form>
                 
                                <form action="gs_memb_data.php" method="POST" accept-charset="utf-8" onsubmit="return confirm('Are You Sure You Want to Upgrade Level?');">
                                <input type="submit" name="update" value="Upgrade Level" class="btn btn-primary">
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
    <script>
  

           
           </script>
   
</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                                                                           