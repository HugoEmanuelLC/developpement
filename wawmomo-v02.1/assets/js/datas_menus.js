$(function(){
    
    let list_menus = $(".box_list_menus"); 

/*AFICHAGE des Menus*/
let item_menu = "";
$.ajax({
    url: "http://localhost/tests/Api/api-wawmomo/menus.php",
    dataType: "json",
    success: function(data){
        
        data.forEach(menu => {
            item_menu += '<div '+menu.ID+' class="item">';
            item_menu +=    '<div class="dark_opo">';
            item_menu +=        '<h1>'+menu.NAME+'</h1>';
            item_menu += '</div></div>';
        })
        list_menus.html(item_menu);
    }
});


/*AFICHAGE des produits*/
let item = "";
$.ajax({
    url: "http://localhost/tests/Api/api-wawmomo/produits.php?i=",
    dataType: "json",
    success: function(data){
        
        data.forEach(menu => {
            item += '<div '+menu.ID+' class="item"><div class="dark_opo"><h1>'+menu.NAME+'</h1></div></div>';
        })
        list_produits.html(item);
    }
});

})