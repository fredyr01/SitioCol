$(document).ready(function () {
    let ubicacionPrincipal = window.pageYOffset;
    window.onscroll = function(){
    let despActual = window.pageYOffset;
    if(ubicacionPrincipal > despActual){
        // document.getElementById('info').style.top= '0';
        // document.getElementById('info').style.visibility = 'visible';
        // document.getElementById('wrapperc').style.top='22px';
        $('#info').css("top", "0");
        $('#info').css("visibility", "visible");
        $('#wrapperc').css("top", "22px");
        $('#info').removeClass('animate__animated');
        $('#info').removeClass('animate__fadeOut');
        $('#info').addClass('animate__animated');
        $('#info').addClass('animate__fadeIn');

    } else {
        $('#info').css("visibility", "hidden");
        $('#info').addClass('animate__animated');
        $('#info').addClass('animate__fadeOut');
        $('#wrapperc').css("top", "0");
    }
}
    ubicacionPrincipal = despActual;
});