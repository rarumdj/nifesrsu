<?php
session_start();
require('../../connection.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Final Year Data | <?php echo $_SESSION['office']; ?></title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
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
                                <h5 style="text-align:center" id="text"></h5>     
                            </div>
                        </div>
                        <!-- /. ROW  -->
                        <hr />
                        
                        <!-- /. ROW  -->
                        <div class="row">
                            <div class="col-md-12">
                                <!--   Kitchen Sink -->
                                <div class="panel panel-default" >
                                    <div class="panel-heading" >
                                        Final Year Details
                                    </div>
                                    <div class="panel-body" id="result">
                                        <div class="table-responsive">
                                        <form action="" method="POST" id="div"accept-charset="utf-8">
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
                                                        <th></th>
                                                    </tr>
                                                </thead>";
                                               
                                                $fyb_query = "SELECT * FROM members WHERE department in ('Animal Science', 'Forestry And Environment', 'Food Science And Technology', 'Home Science And Management', 'Fisheries', 'Crop/soil Science', 'Agricultural Economics And Extension', 'Petroleum Engineering', 'Mechanical Engineering', 'Marine Engineering', 'Civil Engineering', 'Chemical/petrochemical Engineering', 'Agricultural And Environmental Engineering', 'Electrical Engineering', 'Land Survey', 'Estate Management', 'Quantity Surveying', 'Architecture', 'Urban And Regional Planning', 'Business Law', 'International Law', 'Private Property Law', 'Public Law', 'Medical Laboratory Science') AND level = '500' || department in ('Banking and Finance', 'Accountancy', 'Mass Communication', ' Office And Information Management', 'Marketing', 'Management', 'Secretarial Administration', 'Mathematics','Computer Science', 'Physics', 'Chemistry', 'Applied And Environmental Biology', 'Science And Technical Education', 'Educational Foundations', 'Business Education') AND level = '400'";
                                                $result = mysql_query($fyb_query);
                                                $num_row = mysql_num_rows($result);
                                                if ($num_row > 0) {
                                                    $table .= "<tbody>";
                                                while ( $row = mysql_fetch_assoc($result)) {
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
                                                $new_id = $row['int_id'];
                                                
                                               
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
                                               <td>$grad_year</td>";
                                                        
                                $check = mysql_query("SELECT * FROM associates WHERE int_id = '$new_id'");
$num_row = mysql_num_rows($check);
if($num_row > 0){

                                                      $table .=  "<td id='removeasso".$new_id."'><input type='button' class='btn btn-danger' value='&#10008;' onclick='loadDoc1(".$new_id.")' /></td>";
 }else{
    $table .= "<td id='asso".$new_id."'><input type='button' class='btn btn-success' value='&#10004;' onclick='loadDoc(".$new_id.")' /></td>";
} 
$table .= "</tr>";
}
$table .= "</tbody>";

} 
$table .= "</table>";

echo $table;
                                                ?>
                                           
                                </form>
                                       
                                    
                                    <?php
                                     
                                   
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
            <script>

    function loadDoc(x) {
        var txt;
       var ok = confirm("Are You Sure You Want to Make Associate?");
       if (ok == true){
        
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("asso"+x).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "makeasso.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("asso="+x);

  txt = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Added Successfully!";
}else{
txt = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Cancelled";
}
document.getElementById("text").innerHTML = txt;
}

function loadDoc1(y) {
        var txt;
       var ok = confirm("Are You Sure You Want to Remove?");
       if (ok == true){
        
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("removeasso"+y).innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("POST", "removeasso.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("removeasso="+y);

  txt = "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Successfully Removed!";
}else{
txt = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button><strong>Warning!</strong> Cancelled";
}
document.getElementById("text").innerHTML = txt;
}

            </script>
            
        </body>
    </html>