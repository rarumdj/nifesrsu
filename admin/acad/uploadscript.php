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

    
        if ($_POST['faculty'] != 'Choose Your Faculty' && $_POST['department'] != 'Choose Your Department' && $_POST['level'] != 'Choose Your Level' && $_POST['sem'] != 'Choose Your Semester'){


            
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

        $desired_dir="Materials";
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

            $acad_query = "INSERT INTO materials (img_id, faculty, department, level, sem, file_name, file_size, file_type, content, type, date_added) VALUES ('$img_id','$_POST[faculty]','$_POST[department]','$_POST[level]','$_POST[sem]','".$without.'_'.time()."','$file_size','$file_type','$content','$type',NOW())";

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