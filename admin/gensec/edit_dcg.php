<?php
session_start();
ob_start();
include('../../connection.php');
if(isset($_GET['id'])){$id=$_GET['id'];

$select_dcg = "SELECT * FROM dcg WHERE id ='$id'";
$result_dcg = mysql_query($select_dcg);
while ($row = mysql_fetch_assoc($result_dcg)) {
    $id = $row['id'];
    $fullnamex = $row['fullname'];
    $sex = $row['gender'];
    $phone = $row['phone'];
    $dept   = $row['department'];
    $email = $row['email'];
    $level = $row['level'];
    $cell = $row['cell_name'];
    $img = $row['img_path'];

    

    }                                    

}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit DCG | <?php echo $_SESSION['office']; ?></title>
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
                       <h5>Welcome, <b><?php echo $_SESSION['office']; ?>.</b>  </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <?php
                 // if(isset($_POST['id'])){$id=$_POST['id'];
                 if (isset($_POST['update'])){

                        $name = $_POST['fullname']; 
                        $nfullname = ucwords($name);
                        $nsex = $_POST['gender'];
                        $nphone = $_POST['phone'];
                        $ndept   = $_POST['department'];
                        $nemail = $_POST['email'];
                        $nlevel = $_POST['level'];
                        $ncell = $_POST['cell_name'];

                        $ndcg_pix = $_FILES['img']['name'];
                        $rphoto = $_FILES['img']['tmp_name'];
                        $ntarget= "dcgs/".$ndcg_pix;
                        if(move_uploaded_file($rphoto, $ntarget)){

                        $update_query = mysql_query("UPDATE dcg SET fullname = '$nfullname', gender = '$nsex', department = '$ndept', phone = '$nphone', email = '$nemail', level = '$nlevel', cell_name = '$ncell', pro_pix = '$ndcg_pix', img_path = '$ntarget' WHERE id = '$id'");
                       }
                       if($update_query == true){
                        header('location:gs_dcg_data.php?msg="Edit Successful!"');
                    }else{
                        header('location:gs_dcg_data.php?msger="Edit Failed!"');
                    }
                    }
                 // }
                 ?>
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit DCG Facilitator
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" class="selectForm" id="selectForm" action="" method="POST" enctype="multipart/form-data">
                                     <div class="form-group">
                                            <label>Full Name</label>
                                            <input class="form-control" placeholder="First & Last Name" name="fullname" value="<?php if(isset($fullnamex)){echo $fullnamex;} ?>" required="required" />
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control"  name="gender">
                                                <option value="">Select Gender</option>
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
                                            <select class="form-control" name="department"  id="category">
                                                <option value="">Select Your Department</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Cell Name</label>
                                            <input class="form-control" value="<?php if(isset($cell_name)){echo $cell;} ?>" name="cell_name">
                                        </div>
                                        </div>
                                
                                <div class="col-md-6">  
                                            <div class="form-group">
                                            <label>Phone</label>
                                            <input class="form-control" name="phone" placeholder="0810XXXXXXX"  value="<?php if(isset($phone)){echo $phone;} ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" placeholder="john@hotmail.com" value="<?php if(isset($email)){echo $email;} ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level" >
                                                <option value="">Select Level</option>
                                                <option>100</option>
                                                <option>200</option>
                                                <option>300</option>
                                                <option>400</option>
                                                <option>500</option>  
                                          </select>
                                        </div>
                                         <div class="profile-userpic">
                                    <img src="<?php if(isset($img)) echo $img; ?>" class="img-responsive" alt="" style="max-height:100px; clip: rect(0px,300px,300px,0px);" width="100px">
                                         </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="img" value="">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <input type="submit" name="update" id="submit" class="btn btn-primary" value="Update">
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

                          
