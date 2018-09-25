<?php
require('connection.php');

  if ($_POST['fullname'] !=''){

      $fname = $_POST['fullname'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $dept = $_POST['category'];
      $level = $_POST['level'];
      $birth = $_POST['birth'];
      $unit = $_POST['unit'];
      $gender = $_POST['gender'];

   

      $vol_query = "INSERT INTO voluntary (fullname, email, phone, address, department, level, birth, unit, gender, date_added) VALUES ('$fname','$email','$phone','$address','$dept','$level','$birth','$unit','$gender',NOW())";
      $result_vol = mysql_query($vol_query);
}
if ($vol_query == true) {
      
            $res="Thank you!! We have received your form.";
            echo json_encode($res);
          }
          else {
            $error="Form Not Submitted,Some Probelm occur.";
            echo json_encode($error);
          }

?>