<?php 

session_start();
session_destroy();
header("location:index.php?logout = you are successfully logout");

?>