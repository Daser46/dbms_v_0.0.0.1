<?php
    session_start();
    if(isset($_SESSION['user'])){//ADD DEFINED CHECKER LATER ON FOR DENY DIRECT ACCESS
        require "dbconnect.php";
        //taking user details
        $user = $_SESSION['user'];
        $sql = "SELECT * FROM `users` WHERE userID = '$user'";// THIS WILL IMPORT USER PASSWORDS TOO, CAN SELECT ONLY REQUIRED FIELDS BUT I WILL LEAVE IT THIS WAY FOR NOW!
        $row = mysqli_query($db_conn,$sql);
        $userdata = mysqli_fetch_all($row, MYSQLI_ASSOC);// FETCH DATA AS AN ASSOCIATIVE ARRAY
        echo json_encode($userdata);//create a json file from userdata
    }else{
        $_SESSION['error'] = 'Access_Denied/Login_to_continue';
        header("Location:index.php?login_required_".$error);
        exit();
    }
?>