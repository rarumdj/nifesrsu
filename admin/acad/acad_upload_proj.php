<?php
session_start();
include('../../connection.php');

function generateUser($length = 6)
{

$user= "";

$possible = "0123456789abcdefghijklmnopqrstuvwxyz";

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

if (isset($_POST['submit'])){

    if(isset($_FILES['files'])){

        if($_FILES['files']['size'] > 209715200){


        if ($_POST['faculty'] != 'Choose Your Faculty' && $_POST['department'] != 'Choose Your Department' && $_POST['level'] != 'Choose Your Level'){


            
                if ($_FILES['files']['name'] !=''){

$error=array();
    $extension=array("jpeg","jpg","png","gif","pdf","txt","docx");
    foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        $file_name = $_FILES['files']['name'][$key];
        $file_size =$_FILES['files']['size'][$key];
        $file_tmp =$_FILES['files']['tmp_name'][$key];
        $file_type=$_FILES['files']['type'][$key]; 
        
        $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                if(in_array($ext,$extension))
                {

                    
        
        
}

        $desired_dir="Projects";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);        // Create directory if it does not exist
            }
            $without = substr($file_name, 0, strrpos($file_name, "."));
            if(is_dir("$desired_dir/".$without)==false){
                $content = "$desired_dir/".$without.'_'.time().'.'.$ext;
                $type = $ext;
                move_uploaded_file($file_tmp, $content); 

                
            }  

                $img_id = generateUser();

// Move to Database
            $acad_query = "INSERT INTO Projects (img_id, faculty, department, level, file_name, file_size, file_type, content, type, date_added) VALUES ('$img_id','$_POST[faculty]','$_POST[department]','$_POST[level]','".$without.'_'.time()."','$file_size','$file_type','$content','$type',NOW())";

         $result_acad = mysql_query($acad_query); 


        }else{
               
        }
    }

    if(empty($error)){
        $success = 'Files Upload Successful';
    }
   


}else {
    $error_msg = 'Please select an image';
}

        }else {
            $error_msg = 'Please fill all the Fields';
        }


    
} else {
    $error_msg = 'File Too Large.. Upload Fail';
}
}
}

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
                        <?php if(isset($error_msg)){ ?>
            <div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> <?php echo $error_msg; }?>
  <?php if(isset($success)){ ?>
            <div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Well Done!</strong> <?php echo $success; }?>        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Project Upload Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form role="form" class="selectForm" id="selectForm" action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <label>Faculty</label>
                                            <select class="form-control" name="faculty" required="required">
                                                    <option>Choose Your Faculty</option>
                                                    <option value="agric">Agriculture</option>
                                                    <option value="engr">Engineering</option>
                                                    <option value="envi">Environmental Science</option>
                                                    <option value="law">Law</option>
                                                    <option value="mgtsci">Management Science</option>
                                                    <option value="sci">Science</option> 
                                                    <option value="tech">Technical Science and Education</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Department</label>
                                            <select class="form-control" name="department" id="department" required="required">
                                                <option>Choose Your Department</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <label>Level</label>
                                            <select class="form-control" name="level" required="required">
                                                <option>Choose Your Level</option>
                                                <option>100</option>
                                                <option>200</option>
                                                <option>300</option>
                                                <option>400</option>
                                                <option>500</option>
                                            </select>
                                            </div>
                                         

                                 
    </div>
    <div class="col-md-6">

                                    <div class="form-group">
                                            <label>Select File:</label>
                                            <input type="file" name="files[]" multiple="" />
                                        </div>
                                        
                                        </div>
                                        <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                         </form> 

                                 
    
                                
                                
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->

                    
                </div>
            </div>
                <!-- /. ROW  -->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <h3>More Customization</h3>
                         <p>
                        For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com 
                        </p>
                    </div>
                </div> -->
                <!-- /. ROW  -->
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
    <!-- SELECT MENU -->
    <script src="../assets/js/acad.js"></script>
      
    
    
   
</body>
</html>


