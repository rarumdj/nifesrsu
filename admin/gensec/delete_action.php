<?php
session_start();
include('../../connection.php');
if(isset($_GET['id'])){$id=$_GET['id'];
	$delete_exco = "DELETE FROM executive WHERE id = '$id'";
    $delete_result = mysql_query($delete_exco);

    $reset = mysql_query("ALTER TABLE `members` DROP `id`");
    $reset = mysql_query("ALTER TABLE `members` AUTO_INCREMENT = 1");
    $reset = mysql_query("ALTER TABLE `members` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

    echo "<script language=\"JavaScript\">\n";
    echo "alert('Successfully Deleted!');\n";
    echo "window.location='generation.php'";
    echo "</script>";

    // header("location:generation.php?er=sucessfully deleted");
}else{
    echo "<script language=\"JavaScript\">\n";
    echo "alert('opps something went wrong!');\n";
    echo "window.location='generation.php'";
    echo "</script>";
// header("location:generation.php?er=opps something went wrong!");
}

?>