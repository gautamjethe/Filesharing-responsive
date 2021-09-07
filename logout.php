<?php
/*
Created by Gautam Jethe
dated : 6 sep 2021
*/
session_start();
$_SESSION = array();
session_destroy();
header("location: login.php");

?>
