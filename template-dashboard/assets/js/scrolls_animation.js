

// BIBLIOTHEQUE JQUERY
$(function(){
    let html_body = $('html, body');
    let a_scroll_up = $(".a_scroll_up");
    let a_projets = $(".a_projets");

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
})