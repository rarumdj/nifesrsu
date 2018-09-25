<?php 
session_start();
include('../../connection.php');
function generateUser($length = 5)
{

$user= "";

$possible = "123456789";

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

if (isset($_POST['submit'])) {
    if($_POST['grad_year'] !='Select Year'){

    $name = mysql_real_escape_string(ucwords($_POST['name']));
    $gender = mysql_real_escape_string($_POST['gender']);
    $birth = mysql_real_escape_string(ucwords($_POST['birth']));
    $phone = mysql_real_escape_string($_POST['phone']);
    $email = mysql_real_escape_string($_POST['email']);
    $location = mysql_real_escape_string(ucwords($_POST['location']));
    $grad_year = mysql_real_escape_string($_POST['grad_year']);
    $int_id = generateUser();

    $check1 = mysql_query("SELECT * FROM associates WHERE name = '$name' AND phone = '$phone'");
    $num = mysql_num_rows($check1);
    if($num > 0){
    $msger = "Already an Associate";
    }else{

    $asso_query = "INSERT INTO associates (int_id, name, gender, birthday, phone, email, location, year_of_graduation, date_added) VALUES ('$int_id','$name','$gender','$birth','$phone','$email','$location','$grad_year',NOW())";
    $assor_result = mysql_query($asso_query);

    if($assor_result == true){
        $msg = "$name is Now an Associate";
        
            }else{
            $msger = "Opps Something Went Wrong.. Try Again";
        }
        }
        
        } else{
            $msger = "Please Make Sure All Fields Are Correctly Filled"; 
        }
        }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Associates | <?php echo $_SESSION['office']; ?></title>
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
                            Update Associates
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" action="gs_update_asso.php" method="POST" accept-charset="utf-8" onsubmit="return confirm('Make Associate');">
                                     <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" name="name" placeholder="First Name & Last Name" required="reuiqred" />
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Birthday</label>
                                            <input class="form-control" name="birth" placeholder="May, 22" required="reuiqred" />
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone" placeholder="080xxxxxxxx" required="reuiqred" />
                                        </div>
                                        </div>
                                
                                <div class="col-md-6">                                    
                                        <fieldset>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="john@gmail.com" />
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" name="location" placeholder="Address" required="reuiqred" />
                                        </div>
                                        <div class="form-group">
                                            <label>Year of Graduation</label>
                                            <select class="form-control" name="grad_year">
                                                <option>Select Year</option>
                                                <option>2018</option>
                                                <option>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                                <option>2026</option>
                                                <option>2027</option>
                                            </select>
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
