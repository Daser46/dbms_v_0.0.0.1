<?php 
    require_once "system/dbconnect.php";
    session_start();
?>
<?php
    if(!isset($_SESSION['user'])){
        $error = "Access_denied/Login_required";
        $_SESSION['error'] = $error;
        header("Location:index.php?login_required_".$error);
        exit();
    }
?>