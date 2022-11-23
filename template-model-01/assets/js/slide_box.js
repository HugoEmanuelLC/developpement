$(function(){
    
    let a_apropos = $(".a-apropos");
    let apropos = $(".apropos");
    let apropos_span = $(".apropos span");


    

    a_apropos.click(function(){
        apropos.addClass("show").removeClass("hide")
    });
    apropos_span.click(function(){
        apropos.addClass("hide").removeClass("show")
    });
})