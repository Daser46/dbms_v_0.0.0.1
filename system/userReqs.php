<?php
    session_start();
    if(isset($_SESSION['user'])){//ADD DEFINED variable CHECKER LATER ON FOR DENY DIRECT ACCESS
        require "dbconnect.php";
        //taking user details
        $user = $_SESSION['user'];
        $sql = "SELECT users.type FROM users WHERE userID = '$user';";
        $row = mysqli_query($db_conn,$sql);
        if($userdata = mysqli_fetch_assoc($row)){
            $type = $userdata['type'];
            if( !$type == 'admin' ){
                exit();
            }else{
                $sql = "SELECT * FROM `reg_users`;";
                $row = mysqli_query($db_conn,$sql);
                $results = mysqli_fetch_all($row, MYSQLI_ASSOC);
                echo json_encode($results);//create a json file from results
            }
        }else{
            echo 'query_failed';
            exit();
        } 
    }else{
        $_SESSION['error'] = 'Access_Denied/Login_to_continue';
        header("Location:index.php?login_required_".$error);
        exit();
    }
