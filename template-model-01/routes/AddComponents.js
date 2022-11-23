
let AddComponents = $("#AddComponents");

title = "C-Link ";

var routes = [
    {path: "#/notfound", name: "notfound", component: "errorPage.html"},

    {path: "#/", name: "home", component: "home.html"},
    {path: "#/home", name: "home", component: "home.html"},
    // {path: "#projets", name: "#projets", component: "home.html"}, // mode target
    // {path: "#demos", name: "#demos", component: "home.html"},
    // {path: "#contact", name: "#contact", component: "home.html"},

    {path: "#/pagetest", name: "page", component: "pageTest.html"},
];

var HashChange = function(){
var hash = window.location.hash;
var hashRoutes;
var hashComponent;
console.log(hash)
    if (hash.startsWith("#/") && hash.length>2){
        // hash = hash.replace("#/", "");

        for (let ind = 0; ind < routes.length; ind++) {
            const route = routes[ind];
            if (window.location.hash == route["path"]) {
                hashRoutes = route["name"];
                hashComponent = route["component"]
            }
        }
        if (hashRoutes) {
            AddComponents.load( "views/layout/" +hashComponent );
        }else{
            window.location = "#/notfound";
        }
    }else if(hash.startsWith("#") && hash.length>2){

        for (let ind = 0; ind < routes.length; ind++) {
            const route = routes[ind];
            if (window.location.hash == route["path"]) {
                hashRoutes = route["name"];
                hashComponent = route["component"]
            }
        }
        if (hashRoutes) {
            AddComponents.load( "views/layout/" +hashComponent );
            window.location = hashRoutes;
        }else{
            window.location = "#/notfound";
        }
    }
    else{
        window.location = "#/home";
    }
}

window.onhashchange = HashChange
HashChange();