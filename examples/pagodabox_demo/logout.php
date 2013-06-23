<?php 
require_once('utility.php');
session_start(); 
session_destroy();
$server_name = $_SERVER['SERVER_NAME'];
$root = get_root_url();
$url = "$root/index.php";
header("Location:$url");
?>
