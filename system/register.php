<?php
// with prepared statements
if(isset($_POST['btnReg'])){
    require_once 'dbconnect.php';
    $reguserID = $_POST['reguserID'];
    $regemail = $_POST["regemail"];
    $mobile = $_POST["mobile"];
    $reguserPW = $_POST["reguserPW"];
    $regconfirmPW = $_POST["regconfirmPW"];
    if(empty($reguserID || $regemail || $mobile || $reguserPW)){
        $error = "EMPTY_FIELDS";
        header("Location: ../index.php?error=".$error);
        session_start();
        $_SESSION['error'] = $error;
        exit();
    }else if($reguserPW !== $regconfirmPW){
        $error = "Passwords_don't_match";
        header("Location: ../index.php?error=".$error);
        session_start();
        $_SESSION['error'] = $error;
        exit();
    }else{
        $sql = "SELECT users.userID,reg_users.userID FROM reg_users,users WHERE users.userID = ? OR reg_users.userID = ?";
        $stmt = mysqli_stmt_init($db_conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            $error = "QUERY_FAILED";
            header("Location: ../index.php?error=".$error);
            session_start();
            $_SESSION['error'] = $error;
            exit();
        }else{
            mysqli_stmt_bind_param($stmt, "ss", $reguserID,$reguserID);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $rowCount = mysqli_stmt_num_rows($stmt);
            if($rowCount > 0){
                $error = "User_Name_Taken";
                header("Location: ../index.php?error=".$error);
                session_start();
                $_SESSION['error'] = $error;
                exit();    
            }else{
                $sql = "SELECT users.userID,reg_users.userID FROM reg_users,users WHERE users.email = ? OR reg_users.email = ?";
                $stmt = mysqli_stmt_init($db_conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    $error = "QUERY_FAILED";
                    header("Location: ../index.php?error=".$error);
                    session_start();
                    $_SESSION['error'] = $error;
                    exit();
                }else{
                    mysqli_stmt_bind_param($stmt, "ss", $regemail,$regemail);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $rowCount = mysqli_stmt_num_rows($stmt);
                    if($rowCount > 0){
                        $error = "email_taken";
                        header("Location: ../index.php?error=".$error);
                        session_start();
                        $_SESSION['error'] = $error;
                        exit();
                    }else{
                        $sql = "SELECT users.userID,reg_users.userID FROM reg_users,users WHERE users.mobile = ? OR reg_users.mobile_no = ?";
                        $stmt = mysqli_stmt_init($db_conn);
                        if(!mysqli_stmt_prepare($stmt,$sql)){
                            $error = "QUERY_FAILED";
                            header("Location: ../index.php?error=".$error);
                            session_start();
                            $_SESSION['error'] = $error;
                            exit();
                        }else{
                            mysqli_stmt_bind_param($stmt, "ss", $mobile, $mobile);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                            $rowCount = mysqli_stmt_num_rows($stmt);
                            if($rowCount > 0){
                                $error = "mobile_No_taken";
                                header("Location: ../index.php?error=".$error);
                                session_start();
                                $_SESSION['error'] = $error;
                                exit();
                            }else{
                                //passwords needed to be encrypt for security.
                                // use a custom made encryption, ciphertext or hashed pass for encryption later -- just wanna check database include whatever values input from the fields.
                                $querry = "INSERT INTO `reg_users` VALUES (?, ?, ?, ?);";
                                $stmt = mysqli_stmt_init($db_conn);
                                if(!mysqli_stmt_prepare($stmt,$querry)){
                                $error = "QUERY_FAILED";
                                header("Location: ../index.php?error=".$error);
                                session_start();
                                $_SESSION['error'] = $error;
                                exit();
                                }else{
                                    mysqli_stmt_bind_param($stmt, "ssss", $reguserID,$regemail,$mobile,$reguserPW);
                                    mysqli_stmt_execute($stmt);
                                    session_abort();
                                    header("Location: ../index.php?Registration=Success");
                                    exit();
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($db_conn);
}else{
    $error = "Access_denied";
    header("Location: ../loginui.php?error=".$error);
    session_start();
    $_SESSION['error'] = $error;
    exit();
}
?>