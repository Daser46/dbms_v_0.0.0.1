<?php 
    require_once "include.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>Home</title>
</head>
<body>
<div class='header'>
    <div class="menu">
        <button id="menu-btn"><img class='icon' src="Assets/icons/i_menu.png"/><span class="i_title">Menu</span></button>
        <a href="home.html" class="inc">
            <img class='logo' src="Assets/logos/logo-01.png" width='50px' height='50px'/>
            <span class="brand">company name</span>
        </a>
    </div>
    <div class="controlls">
        <button id="adduser-btn"><img class="icon" src="Assets/icons/i_adduser.png"/><span class="i_title">Add User</span></button>
        <button id="message-btn"><img class="icon" src="Assets/icons/i_chat.png"/><span class="i_title">Messages</span></button>
        <button id="notify-btn"><img class="icon" src="Assets/icons/i_notification.png"/><span class="i_title">Notifications</span></button>
        <!--<a href="about.html"><img class="icon" src="Assets/icons/i_info.png"><span class="i_title">About</span></a>
        <a href="contact.html"><img class='icon' src="Assets/icons/i_contact.png"/><span class="i_title">Contact</span></a>
        <a href="home.html"><img class='icon' src="Assets/icons/i_home.png"/><span class="i_title">Home</span></a>-->   
    </div>
</div>
<div class="main-container">
    <div class="drawer" id="m_drawer">
        <div class="profile">
            <div class="profile-pic">
                <img src="<?php echo $imgurl ?>" class='dp'/>
                <form action="system/usersettings.php" method='post' enc-type='multi-part/formdata'>
                    <input type='file' id="dpset" class='dpinput' name='profilepic'/>
                    <button class='changedp-btn' id='changedp'>Done</button>
                </form>
            </div>
            <div class="overlay" id="overlay">
                    <button class='editdp-btn' id='editdp'><img class='icon' src="Assets/icons/i_camera-01.png"/></button>
            </div>
        </div>
        <div style="display: flex; margin: 4px; float: left; position: absolute; left: -40; top: 120px;">
            <button class='cancel' id='cancel'>cancel</button>    
        </div>
        <div class='userdetails'>
            <p id="u_name"> USER Name </p>
            <p id="f_name"> FirstName LastName </p>
            <p id="u_email"> user@email.com </p>
            <p id="u_mob"> 0754864881 </p>
        </div>
        <div>
            <form method="get" action="system\logout.php">
                <button type='submit' class='logout-btn'> Logout <img src="Assets/icons/i_logout-01.png" class="icon"/></button>
            </form>
        </div>
        <div style="display: flex; width: 100%; text-align: center; padding-left: auto; padding-right: auto; height: fit-content; justify-content: center;">
            <a href='home.html'><span class="hyperlinks">Home</span></a>|<a href='contact.html'><span class="hyperlinks">Contact</span></a>|<a href='about.html'><span class="hyperlinks">About</span></a>
        </div>
    </div>
    <div class="n_container" id="n_drawer">
        <p class="title">Notifications</p>
        <ul class="notifications">
        </ul>
        <button class="txt-btn" id='n_refresh'> Refresh </button>
    </div>
    <div class="n_container user-req-container" id="u_drawer">
        <p class="title">User Requests</p>
        <ul class="users">
        </ul>
        <button class="txt-btn" id='u_refresh'> Refresh </button>
    </div>
    <div class="sub-container">
        <div class="modules">
            <div class="mod-container">
                <div class="module">
                    <img src="wp1.jpg" class="mod-img">
                    <div class="mod-content">
                        <p class="mod-title">Add data</p>
                        <div class="mod-function">
                            <button class="mod-btn" id='addModbtn'>
                                <img src="Assets/icons/i_add-01.png" class="icon">
                                <span class="mod-action">ADD FUEL DATA</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="module">
                    <img src="wp1.jpg" class="mod-img">
                    <div class="mod-content">
                        <p class="mod-title">View data</p>
                        <div class="mod-function">
                            <button class="mod-btn" id='viewModbtn'>
                                <img src="Assets/icons/i_read-01.png" class="icon">
                                <span class="mod-action">VIEW FUEL DATA</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="module">
                    <img src="wp1.jpg" class="mod-img">
                    <div class="mod-content">
                        <p class="mod-title">Update data</p>
                        <div class="mod-function">
                            <button class="mod-btn" id='updateModbtn'>
                                <img src="Assets/icons/i_update-01.png" class="icon">
                                <span class="mod-action">UPDATE FUEL DATA</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="module">
                    <img src="wp1.jpg" class="mod-img">
                    <div class="mod-content">
                        <p class="mod-title">Delete data</p>
                        <div class="mod-function">
                            <button class="mod-btn" id='delModbtn'>
                                <img src="Assets/icons/i_del-01.png" class="icon">
                                <span class="mod-action">DELETE FUEL DATA</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="display">
            <div class="display-title">
                <p>FUEL DETAILS DISPLAY</p>
            </div>
            <div class="data">
            <!-- data view layer -->
                <div id="dataContainer">
                    <p class="data-empty">Select a module to display!</p>
                </div>
            <!--------------------------------->
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <p><a href='home.html'><span class="hyperlinks">Home</span></a>|<a href='contact.html'><span class="hyperlinks">Contact</span></a>|<a href='about.html'><span class="hyperlinks">About</span></a></p>
    <hr color="gray"/>
    <p class="copyright">© 2021 All Rights Reserved by Fuel Company</p>
</div>
<script src="homescript.js"></script> 
<script src ="modules/controls.js"></script>
<script src="system/logctrls.js"></script>
</body>
</html>