// alert("test test test");

const route = (event) => {
    event = event || window.event;
    event.preventDefault();
    window.history.pushState({}, "", event.target.href);
    gestionLocation();
}

const afficherUrl = "http://127.0.0.1:5500/";

const routes = {
    404 :           "pages/404.html",
    "/" :          "pages/accueil.html",
    "/apropos" :   "pages/apropos.html",
    "http://127.0.0.1:5500/produits" :  "pages/produits.html",
}



function getCurrentURL () {
    return window.location.href
}
const url = getCurrentURL()

console.log("LE URL EST :" + url);

const gestionLocation = async() => {
    const path = window.location.pathname || window.location.href;
    const route = routes[path] || routes[404];
    const html = await fetch(route).then((data) => data.text());
    document.getElementById('app').innerHTML = html;
    console.log(path);
    console.log(route);
}

window.onpopstate = gestionLocation;
window.route = route;
gestionLocation();


