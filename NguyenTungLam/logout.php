<?php 
session_start();
session_unset();
// var_dump($_SESSION);die;
header("location:login.php");
 ?>