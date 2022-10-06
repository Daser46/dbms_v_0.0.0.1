<?php 
//should have ask for a confirmation logout but im just cutting the corners of this project for now.
session_start();
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    session_destroy();
    header("Location:../index.php");
}
?>