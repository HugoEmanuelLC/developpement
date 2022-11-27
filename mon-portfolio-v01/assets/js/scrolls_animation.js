

// BIBLIOTHEQUE JQUERY
$(function(){
    let html_body = $('html, body');
    let a_scroll_up = $(".a_scroll_up");
    let a_projets = $(".a_projets");
    let a_demos = $(".a_demos");
    let a_technologie = $(".a_technologie");
    let a_apropos = $(".a_apropos");

    a_scroll_up.click(function(){
        html_body.animate({
            scrollTop: html_body.offset().top
        }, 2000);
    })
    a_projets.click(function(){
        html_body.animate({
            scrollTop: $("#projets").offset().top
        }, 2000);
    })
    a_demos.click(function(){
        html_body.animate({
            scrollTop: $("#demos").offset().top
        }, 2000);
    })
    a_technologie.click(function(){
        html_body.animate({
            scrollTop: $("#technologie").offset().top
        }, 2000);
    })
    a_apropos.click(function(){
        html_body.animate({
            scrollTop: $("#apropos").offset().top
        }, 2000);
    })
})