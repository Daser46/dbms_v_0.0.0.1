var username = document.getElementById('userID');
var userPW = document.getElementById('userPW');
var reguserID = document.getElementById('reguserID');
var regemail = document.getElementById('regemail');
var mobile = document.getElementById('mobile');
var reguserPW = document.getElementById('reguserPW');
var regconfirmPW = document.getElementById('regconfirmPW');
//validation login
function validateUserName(){
    if(username.value.length == 0 || username.value == ''){
        let error = 'empty username';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else{
        document.getElementById('error').style.display = 'none';
        document.getElementById('e_message').innerHTML = '';
        return true;
    }
}
function validatePW(){
    if(userPW.value.length == 0 || userPW.value == ''){
        let error = 'empty password';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else{
        document.getElementById('error').style.display = 'none';
        document.getElementById('e_message').innerHTML = '';
        return true;
    }
}
//registration validation
function validateUserID(){
    let struct = /^[A-Z]{0,1}[a-z]{3,5}[0-9]{0,2}$/;
    if(reguserID.value.length == 0 || reguserID.value == ''){
        let error = 'user name can\'t be empty';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else if(!reguserID.value.match(struct)){
        let error = 'invalid username, username can be in form User01';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else{
        document.getElementById('error').style.display = 'none';
        document.getElementById('e_message').innerHTML = '';
        return true;
    }
}
function validateUserEmail(){
    let struct = /\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
    if(regemail.value.length == 0 || regemail.value == ''){
        let error = 'email can\'t be empty';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else if(!regemail.value.match(struct)){
        let error = 'invalid email';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else{
        document.getElementById('error').style.display = 'none';
        document.getElementById('e_message').innerHTML = '';
        return true;
    }
}
function validateUserMobile(){
    struct = /^[0-9]{10}$/;
    if(mobile.value.length == 0 || mobile.value == ''){
        let error = 'mobile number can\'t be empty';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else if(!mobile.value.match(struct)){
        let error = 'invalid mobile number';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;     
    }else{
        document.getElementById('error').style.display = 'none';
        document.getElementById('e_message').innerHTML = '';
        return true;
    }
}
function validateUserRegPW(){
    struct = /^[A-Z]{0,8}[a-z]{1,8}[A-Z]{1,8}[0-9]{2,8}$/;
    if(reguserPW.value.length == 0 || reguserPW.value == ''){
        let error = 'user password can\'t be empty';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else if(!reguserPW.value.match(struct)){
        let error = 'invalid password';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;

    }else{
        document.getElementById('error').style.display = 'none';
        document.getElementById('e_message').innerHTML = '';
        return true;
    }
}
function validateUserConfirmPW(){
    let pw1 = reguserPW.value.toString();
    let pw2 = regconfirmPW.value.toString();
    if(pw1 !== pw2){
        let error = 're-password is not matching';
        document.getElementById('error').style.display = 'grid';
        document.getElementById('e_message').innerHTML = error;
        return false;
    }else{
        document.getElementById('error').style.display = 'none';
        document.getElementById('e_message').innerHTML = '';
        return true;
    }
}
function checkLogin(){
    return validateUserName() && validatePW();
}
function checkReg(){
    return  validateUserID() && validateUserEmail() && validateUserMobile() && validateUserRegPW() && validateUserConfirmPW();
}