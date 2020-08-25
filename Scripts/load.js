$(document).ready(function(){
    var screen = $('#loader');
    loadingScreen(screen);
});

function loadingScreen(screen){
    $(document)
    .ajaxStart(function(){
        screen.fadeIn();
    })
    .ajaxStop(function(){
        screen.fadeOut();
    });
}