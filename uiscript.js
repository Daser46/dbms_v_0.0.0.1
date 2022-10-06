const loginSwitch = document.getElementById('loginswitch');
const regSwitch = document.getElementById('regswitch');
const regView = document.getElementById('register');
const loginView = document.getElementById('login');

loginSwitch.addEventListener('click',() => {
    loginSwitch.style.borderColor = 'black';
    loginView.style.position = 'relative';
    loginView.style.left = '0px';
    regSwitch.style.borderColor =  'rgba(0,0,0,0.2)';
    regView.style.position = 'absolute';
    regView.style.left = '-400px';
    loginView.style.visibility = 'visible';
    regView.style.visibility = 'hidden';
});
regSwitch.addEventListener('click',() => {
    regSwitch.style.borderColor = 'black';
    loginView.style.position = 'absolute';
    loginView.style.left = '-400px';
    loginView.style.visibility = 'hidden';
    loginSwitch.style.borderColor = 'rgba(0,0,0,0.2)';
    regView.style.position = 'relative';
    regView.style.left = '0px';
    regView.style.visibility = 'visible'
});
function defaultView(){
    loginSwitch.style.borderColor = 'black';
    loginView.style.position = 'relative';
    loginView.style.left = '0px';
    regSwitch.style.borderColor =  'rgba(0,0,0,0.2)';
    regView.style.position = 'absolute';
    regView.style.left = '-400px';
    document.getElementById('error').style.display = 'none';
};
document.getElementById("closebtn").addEventListener('click',() => {
    document.getElementById('error').style.display = 'none';
});
function closebtn(){
    document.getElementById('phperror').style.display = 'none';
}
