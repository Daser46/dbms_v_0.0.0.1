<?php
//without prepared statements
    if(isset($_POST['btnlogin'])){
        require "dbconnect.php";
        $userID = $_POST['userID'];
        $userPW = $_POST['userPW'];
        $sql = "SELECT * FROM users WHERE userID = '$userID'";
        $result = mysqli_query($db_conn,$sql);
        if($row = mysqli_fetch_assoc($result)){
            $password = $row['password'];
            if($userPW == $password){
                session_start();
                $_SESSION['user'] = $userID;
                if(isset($_SESSION['error'])){
                    unset($_SESSION['error']);
                }
                header("Location:../home.php");
                exit();
            }else{
                $error = "invalid_password";
                session_start();
                $_SESSION['error'] = $error;
                header("Location:../index.php?".$error);
                exit();
            }
        }else{
            $error = "invalid_credentials";
            session_start();
            $_SESSION['error'] = $error;
            header("Location:../index.php?".$error);
            exit();            
        }
    }else{
        $error = "Access_denied";
        session_start();
        $_SESSION['error'] = $error;
        header("Location:../index.php?".$error);
        exit();
    }
?>
