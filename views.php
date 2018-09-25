<?php
require('connection.php');

$post_id = $_POST['p_id'];

$views = mysql_query("UPDATE images SET views = views + 1 WHERE post_id = '$post_id'");

$views = mysql_query("UPDATE videos SET views = views + 1 WHERE post_id = '$post_id'");

?>