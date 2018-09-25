<?php
include('../../connection.php');

    $fname = strtoupper($_POST['fullname']);
    $gender = $_POST['gender'];
    $dept = $_POST['department'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $level = $_POST['level'];
    $office = $_POST['office'];
    $gen_id = $_POST['gen_id'];

    $exco_pix = $_FILES['pix']['name'];
    $rphoto = $_FILES['pix']['tmp_name'];
    $target= "excos/".$exco_pix;
    move_uploaded_file($rphoto, $target);


    $add_exco = "INSERT INTO executive (gen_id, fullname, gender, department, phone, email, level, office, pro_pix, img_path, date_added) VALUES ('$gen_id','$fname','$gender','$dept','$phone','$email','$level','$office','$exco_pix','$target',NOW())";
    $add_result = mysql_query($add_exco);

    if ($add_result == true) {
        //  header("location:generation.php?er=sucessfully Added");
      echo  '<script type="text/javascript">alert("Exco Successfully Added!")</script>';
      print "<script>window.location.assign('generation.php')</script>";
        
    }else {
        //  header("location:generation.php?er=Opps Something Went Wrong!");
         echo  '<script type="text/javascript">alert("Opps Something Went Wrong!")</script>';
         print "<script>window.location.assign('generation.php')</script>";
    }

         
?>
