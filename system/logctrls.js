const u_name = document.getElementById('u_name');
const f_name = document.getElementById('f_name');
const u_email = document.getElementById('u_email');
const u_mob = document.getElementById('u_mob');
const n_ul = document.querySelector('.notifications');
const users = document.querySelector('.users');
//may be I have to a make common function and set params because all functions here look same -> will look into that later;
function denyAdminAccess(type){
    if(!type == 'admin'){
        document.getElementById('adduser-btn').style.pointerEvents = 'none';
    }else{
        document.getElementById('adduser-btn').style.pointerEvents = 'auto';
    }
}
function setLogData(){
    var xhr = new XMLHttpRequest();
    xhr.open("POST",'system/logdetails.php',true);
    xhr.onload = function(){
        if(this.status == 200){
            var userdata = this.response;
            let logdata = JSON.parse(userdata);
            document.querySelector(".dp").src = logdata[0].userDP;
            u_name.innerHTML = "user name : " + logdata[0].userID;
            f_name.innerHTML = "full name : " + logdata[0].firstname + " " + logdata[0].lastname;
            u_email.innerHTML = "email : " + logdata[0].email;
            u_mob.innerHTML = "mobile number : " + logdata[0].mobile;
            denyAdminAccess(logdata[0].type);
        }else{
            alert('userdata retrieving error');
        }  
    };
    xhr.send();
}
function setNotifications(){
    var xhr = new XMLHttpRequest();
    xhr.open('get','system/notifs.php', true);
    xhr.onload = function(){
        if(this.status == 200){
           var ns = this.response;
           let notifications_obj = JSON.parse(ns);
           //console.log(notifications_obj);
           notifications_obj.forEach(element => {
            n_ul.innerHTML += '<li>'+element.message+'</li>';
            
            //console.log(element.message);
           });
           
        }else{
            alert('notification retrieving error');
        }  
    };
    xhr.send();
}
function getuserReqs(){
    var xhr = new XMLHttpRequest();
    xhr.open('get','system/userReqs.php', true);
    xhr.onload = function(){
        if(this.status == 200){
           var reqs = this.response;
           let userreqs = JSON.parse(reqs);
           console.log(userreqs);
           userreqs.forEach(element => {
            users.innerHTML += '<li>'+
            '<div class=\"req-details-container\">'+
                "<div class=\"req-data\">"+
                   '<span class=\"req-id\">'+element.userID+'</span>'+
                    '<span class=\"req-email\">'+element.email+'</span>'+
                '</div>'+
                '<div class=\"req-data\">'+
                    '<span class=\"req-mob\">'+element.mobile_no+'</span><span class=\"req-btns\">'+
                            '<button class=\'regular-btn\' id=\'regUserbtn\' type=\'submit\' name=\'adduser\' onclick = \'addUser('+'\"'+element.userID+'\"'+','+'\"'+element.email+'\"'+','+element.mobile_no+')\'>Add</button>'+
                            '<button class=\'regular-btn\' id=\'remUserbtn\' type=\'submit\' name=\'removeuser\' onclick =\'remUser('+'\"'+element.userID+'\"'+')\'>Del</button>'+
                   '</span>'+
                '<div>'+
            '</div>'+
            '</li>';
           });
        }else{
            alert('userreqs retrieving error');
        }
    }
    xhr.send();
}
getuserReqs();
setLogData();
setNotifications();
function addUser(userID,email,phone){
    console.log(userID,email,phone);
    //add user requset goes here

}
function remUser(userID){
    console.log(userID);
    //remove user requset goes here
}