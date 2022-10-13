var title = "Spa avec JQuery ";

var routes = [
    {path: "#/notFound", name: "notFound"},
    {path: "#/", name: "home"},
    {path: "#/home", name: "home"},
    {path: "#/about", name: "about"},
    {path: "#/contact", name: "contact"},
];


var HashChange = function(){
var hash = window.location.hash;
var hashRoutes ;
console.log(window.location.hash)

    if (hash.startsWith("#/") && hash.length>2){
        hash = hash.replace("#/", "");
        var file = "pages/" + hash + ".html";

        for (let ind = 0; ind < routes.length; ind++) {
            const route = routes[ind];
    
            if (window.location.hash == route["path"]) {
                hashRoutes = route["name"];
            }
        }

        if (hashRoutes) {
            $("#AddContenents").load( file );
        }else{
            window.location = "#/notFound"
        }
    }else{
        window.location = "#/home"
    }
}

window.onhashchange = HashChange
HashChange();