<?php
    session_start();
    if(isset($_SESSION['user'])){//ADD DEFINED CHECKER LATER ON FOR DENY DIRECT ACCESS
        require "dbconnect.php";
        //taking user details
        $sql = "SELECT * FROM `notification`;";
        $row = mysqli_query($db_conn,$sql);
        $notifications = mysqli_fetch_all($row, MYSQLI_ASSOC);// FETCH DATA AS AN ASSOCIATIVE ARRAY
        echo json_encode($notifications);//create a json file from userdata
    }else{
        $_SESSION['error'] = 'Access_Denied/Login_to_continue';
        header("Location:index.php?login_required_".$error);
        exit();
    }
?>