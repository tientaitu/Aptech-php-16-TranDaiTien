var div = document.getElementById('js-div-an-hien');

function hienDIV(){
    div.style.display ='block';
    //var element = document.getElementById("myDIV");
   //element.classList.remove("d-none");
}
function anDIV(){
    div.style.display = 'none';
}
function  ANhien(){
    if(div.style.display == 'none'){
        div.style.display='block';
    } else{
        div.style.display='none';
    }
}