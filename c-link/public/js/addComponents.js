var title = "C-Link ";

var routes = [
    {path: "#/notfound", name: "notfound"},
    {path: "#/", name: "home"},
    {path: "#/home", name: "home"},
    // {path: "#/about", name: "about"},
    {path: "#/page1", name: "page"},
    // {path: "#/contact", name: "contact"},
];


var HashChange = function(){
var hash = window.location.hash;
var hashRoutes ;

console.log(hash)

    if (hash.startsWith("#/") && hash.length>2){
        hash = hash.replace("#/", "");
        var file = "views/pages/" + hash + ".html";

        for (let ind = 0; ind < routes.length; ind++) {
            const route = routes[ind];
    
            if (window.location.hash == route["path"]) {
                hashRoutes = route["name"];
            }
        }

        if (hashRoutes) {
            $("#addContener").load( file );
        }else{
            window.location = "#/notfound";
        }
    }else{
        window.location = "#/home";
    }
}

window.onhashchange = HashChange
HashChange();