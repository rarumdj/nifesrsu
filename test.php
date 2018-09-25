<?php
include('connection.php');

$reset = mysql_query("ALTER TABLE `associates` DROP `id`");
$reset = mysql_query("ALTER TABLE `associates` AUTO_INCREMENT = 1");
$reset = mysql_query("ALTER TABLE `associates` ADD `id` int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");

?>