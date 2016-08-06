<?php
session_start(); 
require("global.php");
if(!isset($_SESSION["usuario"])){
header("Location: index.php");
exit();
}
?>