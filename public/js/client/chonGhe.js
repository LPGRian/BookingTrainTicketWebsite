
$(document).ready(function(){
    var btn = document.getElementById('btnChooseLocation');
    btn.onclick = ChooseLocation;
});

var currentChoose = false;
function ChooseLocation(){
    if(currentChoose == false){
        $('#btnChooseLocation').addClass('click-pos');
        currentChoose = true;
    }
    else{
        $('#btnChooseLocation').addClass('col-child-custom');
        currentChoose = false;
    }
}

 