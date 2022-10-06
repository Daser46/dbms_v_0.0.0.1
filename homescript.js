const drawer = document.getElementById('m_drawer');// i did this to increase the re-usability assigning to variables is not neccessary     
const dpset = document.getElementById('dpset')// i did this to increase the re-usability assigning to variables is not neccessary
const changedpbtn = document.getElementById('changedp')// i did this to increase the re-usability assigning to variables is not neccessary
const cancel = document.getElementById('cancel');// i did this to increase the re-usability assigning to variables is not neccessary
const overlay = document.getElementById('overlay');// i did this to increase the re-usability assigning to variables is not neccessary
const menubtn = document.getElementById('menu-btn');// i did this to increase the re-usability assigning to variables is not neccessary
const notifybtn = document.getElementById('notify-btn');// i did this to increase the re-usability assigning to variables is not neccessary
const addUserbtn = document.getElementById('adduser-btn');// i did this to increase the re-usability assigning to variables is not neccessary
const messagebtn = document.getElementById('message-btn');// i did this to increase the re-usability assigning to variables is not neccessary
const editdpbtn = document.getElementById('editdp');// i did this to increase the re-usability assigning to variables is not neccessary
const n_drawer = document.getElementById('n_drawer');// i did this to increase the re-usability assigning to variables is not neccessary
const u_drawer = document.getElementById('u_drawer');// i did this to increase the re-usability assigning to variables is not neccessary
n_drawer.style.display = 'none';
u_drawer.style.display = 'none';
drawer.style.display = 'none';
changedpbtn.style.display = 'none';
dpset.style.display = 'none';
cancel.style.display = 'none';
menubtn.addEventListener('click', () => {
    if (drawer.style.display == 'none'){
        drawer.style.display = 'flex';
    }else{
        drawer.style.display = 'none';
    }
});
editdpbtn.addEventListener('click', () => {
    changedpbtn.style.display = 'flex';
    dpset.style.display = 'flex';
    overlay.style.display = 'none';
    cancel.style.display = 'flex';
});
cancel.addEventListener('click', () => {
    cancel.style.display = 'none';
    changedpbtn.style.display = 'none';
    dpset.style.display = 'none';
    overlay.style.display = 'flex';
});
notifybtn.addEventListener('click', () => {
    if(n_drawer.style.display == 'none'){
        n_drawer.style.display ='flex';
    } else {
        n_drawer.style.display = 'none';
    }
});
addUserbtn.addEventListener('click', () => {
    if(u_drawer.style.display == 'none'){
        u_drawer.style.display ='flex';
    } else {
        u_drawer.style.display = 'none';
    }
});
