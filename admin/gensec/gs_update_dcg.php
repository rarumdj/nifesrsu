<?php 
session_start();
include('../../connection.php');
if (isset($_POST['submit'])) {
    if (isset($_FILES['img'])) {
        if($_POST['department'] !='Select Your Department' && $_POST['level'] !='Select Level'){
    
    $name = mysql_real_escape_string(ucwords($_POST['name']));
    $gender = mysql_real_escape_string($_POST['gender']);
    $dept = mysql_real_escape_string($_POST['department']);
    $email = mysql_real_escape_string($_POST['email']);
    $phone = mysql_real_escape_string($_POST['phone']);
    $level = mysql_real_escape_string($_POST['level']);
    $cell = mysql_real_escape_string(ucwords($_POST['cell_name']));

    $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $path = "dcgs/".$img_name;
    move_uploaded_file($img_tmp, $path);

    $check1 = mysql_query("SELECT * FROM dcg WHERE fullname = '$name' AND phone = '$phone'");
    $num = mysql_num_rows($check1);
    if($num > 0){
    $msger = "Already a Facilitator";
    }else{

    $dcg_query = "INSERT INTO dcg (fullname, gender, department, phone, email, level, cell_name, pro_pix, img_path, date_added) VALUES ('$name','$gender','$dept','$phone','$email','$level','$cell','$img_name','$path',NOW())";
    $dcg_result = mysql_query($dcg_query);

    if($dcg_result == true){
        $msg = "$name is Now a Facilitator";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
        }
        
        } else{
            $msger = "Please Make Sure All Fields Are Correctly Filled"; 
        }
        }

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add New Facilitator | <?php echo $_SESSION['office']; ?></title>
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
                        <h5>Welcome, <b><?php echo $_SESSION['office']; ?>.</b> </h5>
                        <?php if(isset($msger)){ ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> <?php echo $msger; }?>.
  <?php if(isset($msg)){ ?>
            <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Well Done!</strong> <?php echo $msg; }?>.
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update DCG Facilitators
                        </div>
                        <div class="panel-body">
                            <d
                                <div class="row">
                                <div class="col-md-6">
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name" placeholder="First & Last Name" required="reuiqred"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Faculty</label>
                                            <select class="form-control" id="faculty" onchange="changeCat(this);">
                                                <option selected>Select Your Faculty</option>
                                                <option value="A">Agriculture</option>
                                                <option value="B">Engineering</option>
                                                <option value="C">Environmental Sciences</option>
                                                <option value="D">Law</option>
                                                <option value="Q">Management Sciences</option>
                                                <option value="F">Sciences</option>
                                                <option value="G">Technical & Science Education</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control" name="department" id="category">
                                                <option>Select Your Department</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Cell name</label>
                                            <input class="form-control" name="cell_name" placeholder="Cell Name">
                                            </div>
                                        </div>
                                
                                <div class="col-md-6">                                    
                                        <fieldset>
                                            <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone" placeholder="0810XXXXXX81" required="required"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="john@hotmail.com" />
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level">
                                                <option>Select Level</option>
                                                <option>100</option>
                                                <option>200</option>
                                                <option>300</option>
                                                <option>400</option>
                                                <option>500</option>  
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img">
                                        </div>
                                        </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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
    <!-- Form Drop Down -->
    <script src="../assets/js/exco.js"></script>
</body>
</html>
