    
    let list_menus = $(".box_list_menus"); 
    let list_produits = $(".box_list_produits"); 
    // let a_test_out = $(".a_test_out");

/*AFICHAGE des Menus*/
let menus = "";
$.ajax({
    url: "http://localhost/tests/Api/api-wawmomo/menus.php",
    dataType: "json",
    success: function(data){
        
        data.forEach(dataMenus => {
            menus += '<div class="item" style="background-image: url(./assets/images/menus/'+dataMenus.URL_IMG+');">';
            menus +=    '<div onclick="idvalue('+dataMenus.ID+')" class="dark_opo">';
            menus +=        '<h1>'+dataMenus.NAME+'</h1>';
            menus += '</div></div>';
        })
        list_menus.html(menus);
    }
});


/*AFICHAGE des produits*/
function idvalue(id){
    let produit = "";
    $.ajax({
        url: "http://localhost/tests/Api/api-wawmomo/produits.php?i="+id,
        dataType: "json",
        success: function(data){
            // produit += '<a class="a_test_out">test</a>';
            data.forEach(dataProduits => {
                produit += '<h1>'+dataProduits.nom+'</h1>';
            })
            list_produits.html(produit);
        }
    });
}


