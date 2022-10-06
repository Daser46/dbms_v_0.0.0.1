const dataContainer = document.getElementById('dataContainer');
// just using a neandertharlic way refactor code later on....
document.getElementById('addModbtn').addEventListener('click', () => {
    var xhr = new XMLHttpRequest();
    xhr.open('GET','modules/add.php', true);
    xhr.onload = function(){
        if( this.status == 200){
            dataContainer.innerHTML = this.responseText;
        }else{
            dataContainer.innerHTML = "<p class=\"data-empty\">NO DATA TO DISPLAY</p>";
        }     
    }
    xhr.send();
});

document.getElementById('viewModbtn').addEventListener('click', () => {
    var xhr = new XMLHttpRequest();
    xhr.open('GET','modules/view.php', true);
    xhr.onload = function(){
        if( this.status == 200){
            dataContainer.innerHTML = this.responseText;
        }else{
            dataContainer.innerHTML = "<p class=\"data-empty\">NO DATA TO DISPLAY</p>";
        }       
    }
    xhr.send();
});

document.getElementById('updateModbtn').addEventListener('click', () => {
    var xhr = new XMLHttpRequest();
    xhr.open('GET','modules/update.php', true);
    xhr.onload = function(){
        if(this.status == 200){
            dataContainer.innerHTML = this.responseText;
        }else{
            dataContainer.innerHTML = "<p class=\"data-empty\">NO DATA TO DISPLAY</p>";
        }       
    }
    xhr.send();
});

document.getElementById('delModbtn').addEventListener('click', () => {
    var xhr = new XMLHttpRequest();
    xhr.open('GET','modules/delete.php', true);
    xhr.onload = function(){
        if(this.status == 200){
            dataContainer.innerHTML = this.responseText;
        }else{
            dataContainer.innerHTML = "<p class=\"data-empty\">NO DATA TO DISPLAY</p>";
        }          
    }
    xhr.send();
});

