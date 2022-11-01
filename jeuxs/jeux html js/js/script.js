
$(document).ready(function(){

    let contener = $("#contener");
    let ampliarLienzo = $("#lienZo");
    let btnAmpliar = $("#btnAmpliar");
    
    function ampliar() {
        contener.css({
            "width": "100%",
            "height": "100vh",
            "margin": "0",
        });
        ampliarLienzo.css({
            "width": "100%",
            "height": "100%",
        });
        btnAmpliar.css({
            "position": "fixed",
            "top": "10px",
            "left": "10px",
            "z-index": "10",
        });
        btnAmpliar.html("Reducir Canvas");
        btnAmpliar.attr("onclick", "reducir()");
    };
    
    function reducir(){
        btnAmpliar.html("Ampliar Canvas");
        btnAmpliar.attr("onclick", "ampliar()");
        contener.removeAttr("style");
        ampliarLienzo.removeAttr("style");
        btnAmpliar.removeAttr("style");
    };

})