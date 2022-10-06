<?php 
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Management Log in</title>
    <link  rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body onload="defaultView()" id="body">
    <div class="header">
        <div class="inc">
            <img class='logo' src="Assets/logos/logo-01.png" width='50px' height='50px'/>
            <span class="brand">company name</span>
        </div>
        <ul class="nav">
            <li>About</li>
            <li>Contact</li>
        </ul>
    </div>
    <div class="container">
        <div class="form">
            <div class="switch">
                <button class="switchbtn" id="loginswitch">Log In</button>
                <button class="switchbtn" id="regswitch">Register</button>
            </div>
            <div class="formbox" id="login">
                <h1>Log in!</h1>
                <form action = "system/login.php" onsubmit = 'return checkLogin()' method="POST">
                    <table>
                        <div class="input">
                            <tr>
                                <td height=50px width=150px><span name="userName" class="label"><label>User Name</label></span></td>
                                <td height=50px align="right"><input type='text' class="textfield" id='userID' name='userID' placeholder="email / user name" onblur="validateUserName()"/></td>
                            </tr>
                        </div>
                        <div class="input">
                            <tr>
                                <td height=50px width=150px><span name="userName" class="label"><label>Password</label></span></td>
                                <td height=50px align="right"><input type='password' class="textfield" id='userPW' name='userPW' placeholder="password" onblur="validatePW()"/></td>
                            </tr>
                        </div>
                    </table>
                    <div class="buttons">
                        <button type="submit" class="regularbtn" id="btnlogin" name="btnlogin">Log in</button> 
                        <p>Forgot Password ? <a href="resetpass.html">Reset Password</a></p> 
                    </div>
                </form>
            </div>
            <div class="formbox" id="register">
                <h1>Register!</h1>
                <form action="system/register.php" method="POST" onsubmit="return checkReg()">
                    <table>
                        <div class="input">
                            <tr>
                                <td height=50px width=150px class="label"><span name="userName" class="label"><label name="userName">User Name</label></span></td>
                                <td height=50px align="right"><input class="textfield" type='text' id='reguserID' name='reguserID' placeholder="User Name" onblur="validateUserID()"/></td>
                            </tr>
                        </div>
                        <div class="input">
                            <tr>
                                <td height=50px width=150px class="label"><span name="userEmail" class="label"><label name="useremail">Email</label></span></td>
                                <td height=50px align="right"><input class="textfield" type='text' id='regemail' name='regemail' placeholder="Email" onblur="validateUserEmail()"/></td>
                            </tr>
                        </div>
                        <div class="input">
                            <tr>
                                <td height=50px width=150px class="label"><span name="userNumber" class="label"><label name="mobile">Mobile Number</label></span></td>
                                <td height=50px align="right"><input class="textfield" type="text" id="mobile" name="mobile" placeholder="Mobile Number" onblur="validateUserMobile()"/></td>
                            </tr>
                        </div>
                        <div class="input">
                            <tr>
                                <td height=50px width=150px class="label"><span name="userPassword" class="label"><label name="userPass">Password</label></span></td>
                                <td height=50px align="right"><input class="textfield" type='password' id='reguserPW' name='reguserPW' placeholder="Password" onblur="validateUserRegPW()"/></td>
                            </tr>
                        </div>
                         <div class="input">
                            <tr>
                                <td height=50px width=150px class="label"><span name="confirmPassword" class="label"><label name="userconfirmPass">Re-enter Password</label></span></td>
                                <td height=50px align="right"><input class="textfield" type='password' id='regconfirmPW' name='regconfirmPW' placeholder="Confirm Password" onblur="validateUserConfirmPW()"/>
                            </tr>
                        </div>
                    </table>
                    <div class="buttons">
                        <button type="submit" class="regularbtn" id="btnReg" name="btnReg">Register</button>  
                    </div>
                </form>
            </div>
        </div>
        <div class="errorScreen" id="errorScreen">
            <ul class="errorlist" id="errorlist">
                <li>
                    <div class="error" id="error">
                        <img class="e_icon" src="Assets/icons/i_error.png"/>
                        <p class="e_message" id="e_message">This is the sample errorr!</p>
                        <button id="closebtn" class="iconbtn"><img class="e_icon" src="Assets/icons/i_close.png"/></button>
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <?php
                if(isset($_SESSION['error'])){
                    $error = "<div id=\"phperror\" style=\"background-color: white; display: grid; grid-template-columns: 1fr 8fr 1fr; width: 300px; height: 75px; border-radius: 10px; margin: 10px; box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.3); align-items: center;padding: 10px\">
                        <img class=\"e_icon\" src=\"Assets/icons/i_error.png\"/>
                        <p class=\"e_message\">".
                            $_SESSION['error'].
                        "</p>
                        <button id=\"close\" class=\"iconbtn\" onclick=\"closebtn()\">
                            <img class=\"e_icon\" src=\"Assets/icons/i_close.png\"/>
                        </button>
                    </div>";
                    echo $error;
                }
            ?>
        </div>
    </div>
    <div class="footer">
        <p><a href='about.html'><span class="hyperlinks">About</span></a>|<a href='contact.html'><span class="hyperlinks">Contact</span></a></p>
        <hr color="gray"/>
        <p class="copyright">© 2021 All Rights Reserved by Fuel Company</p>
    </div>
    <script src="uiscript.js"></script>
    <script src="validationloginui.js"></script>
</body>
</html>