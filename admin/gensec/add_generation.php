<?php
session_start();
include('../../connection.php');

if (isset($_POST['submit'])){

    if($_POST['year'] !='Select Year' && $_POST['generation'] !=''){

   
    $gen = mysql_real_escape_string($_POST['generation']);
    $year = $_POST['year'];
    $gen_name = strtoupper($gen);


    

    $add_gen = "INSERT INTO generations (gen_name, year, date_added) VALUES ('$gen_name','$year',NOW())";
    $add_result = mysql_query($add_gen);

    $msg = 'Generation Successfully Added.';
} else {
    $msger = 'Please Fill The Data Correctly.';
}
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Generation | <?php echo $_SESSION['office']; ?></title>
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
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add New Generation
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form"  action="add_generation.php" method="POST" accept-charset="utf-8" onsubmit="return confirm('Submit Generaton?');">
                                     <div class="form-group">
                                            <label>Generation Name</label>
                                            <input class="form-control" placeholder="Generation Name" name="generation" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <select class="form-control" name="year">
                                                <option>Select Year</option>
                                                <option>2017/2018</option>
                                                <option>2018/2019</option>
                                                <option>2019/2020</option>
                                                <option>2020/2021</option>
                                                <option>2021/2022</option>
                                                <option>2022/2023</option>
                                                <option>2023/2024</option>
                                                <option>2024/2025</option>
                                                <option>2025/2026</option>
                                                <option>2026/2027</option>
                                            </select>
                                        </div>
                                       
                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                        </div>
                                </form>
                            </div>
                            </div>
                            </div>
                        
                     <!-- End Form Elements -->
                </div>
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
    
      
    <script>
    var FacultyAndDepartment = {};
    FacultyAndDepartment['agric'] = ['Animal Science', 'Forestry And Environment', 'Food Science And Technology', 'Home Science And Management', 'Fisheries', 'Crop/soil Science', 'Agricultural Economics And Extension'];
    FacultyAndDepartment['engr'] = ['Petroleum', 'Mechanical', 'Marine', 'Civil', 'Chemical/petrochemical', 'Agricultural And Environmental', 'Electrical'];
    FacultyAndDepartment['environ'] = ['Land Survey', 'Estate Management', 'Quantity Surveying', 'Architecture', 'Urban And Regional Planning'];
    FacultyAndDepartment['law'] = ['Business Law', 'International Law', 'Private Property Law', 'Public Law'];
    FacultyAndDepartment['mgtsci'] = ['Banking and Finance', 'Accountancy', 'Mass Communication', ' Office And Information Management', 'Marketing', 'Management', 'Secretarial Administration'];
    FacultyAndDepartment['sci'] = ['Mathematics/computer Science', 'Physics', 'Chemistry', 'Medical Laboratory Science', 'Applied And Environmental Biology'];
    FacultyAndDepartment['techsci'] = ['Science And Technical Education', 'Educational Foundations', 'Business Education'];

    function ChangeFacultyList(){
    var facultyList = document.getElementById("faculty");
    var departmentList = document.getElementById("department");
    var SelFaculty = facultyList.options[facultyList.selectedIndex].value;
    while (departmentList.options.length){
    departmentList.remove(0);
    }
    var facultys = FacultyAndDepartment[SelFaculty];
    if (facultys){
    var i;
    for (i = 0; i < facultys.length; i++) {
    var faculty = new Option(facultys[i], i);
    departmentList.options.add(faculty);
    }
    }
    }
    
    </script>
</body>
</html>
