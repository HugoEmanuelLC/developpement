    
    let list_menus = $(".box_list_menus"); 
    let list_produits = $(".box_list_produits table tbody"); 

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
    let produitColor = "";
    let nameMenu = "";
    let i = 0;
    $.ajax({
        url: "http://localhost/tests/Api/api-wawmomo/produits.php?i="+id,
        dataType: "json",
        success: function(data){
            
            data.forEach(dataProduits => {

                nameMenu = '<h1>'+dataProduits.NAME+' :</h1>';
                produit += '<tr class="color1"> <td>'+dataProduits.nom+'</td>';
                produit += '<td>'+dataProduits.PRIX+' €</td> </tr>';

                // i = i+1;
                // if (i %2==0) {
                //     produit += '<tr> <td>'+dataProduits.nom+'</td>';
                //     produit += '<td>'+dataProduits.PRIX+' €</td> </tr>';
                // }
                // else{
                //     produit += '<tr> <td>'+dataProduits.nom+'</td>';
                //     produit += '<td>'+dataProduits.PRIX+' €</td> </tr>';
                // }
                
            })
            list_produits.html(nameMenu+produit+produitColor);
        }
    });
}


