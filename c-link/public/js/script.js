

$(".slideBloc").addClass("hide")//"slide bloc" desactive par default

$(".a-about").click(function () {//activer le "slide bloc"
    $("#about").addClass("show")
})
$(".slideBloc span").click(function () {//desactiver le "slide bloc"
    $(".slideBloc").addClass("hide").removeClass("show")
})

$(function(){
    $("header button").click(function(){
        $("body,div").toggleClass("bgColorDark","bgColorLight")
    })
})