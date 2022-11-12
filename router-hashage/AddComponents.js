
let AddComponents = $("#AddComponents");

title = "C-Link ";

var routes = [
    {path: "#/notfound", name: "notfound", component: "error.html"},
    {path: "#/", name: "home", component: "home.html"},
    {path: "#/home", name: "home", component: "home.html"},
    {path: "#/page1", name: "page", component: "page.html"},
    {path: "#/page2", name: "page", component: "page.html"},
];

var HashChange = function(){
var hash = window.location.hash;
var hashRoutes;
var hashComponent;

    if (hash.startsWith("#/") && hash.length>2){
        hash = hash.replace("#/", "");

        for (let ind = 0; ind < routes.length; ind++) {
            const route = routes[ind];
            if (window.location.hash == route["path"]) {
                hashRoutes = route["name"];
                hashComponent = route["component"]
            }
        }
        if (hashRoutes) {
            AddComponents.load( hashComponent );
        }else{
            window.location = "#/notfound";
        }
    }else{
        window.location = "#/home";
    }
}

window.onhashchange = HashChange
HashChange();