<?php


ob_start();
include("Header.php");


session_destroy();

header("Location:Login.php");
ob_end_flush();
include("Footer.php");
?>