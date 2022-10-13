var routes = [
    {"home" : "pages/home.html"},
    {"about" : "pages/home.html"}
];
    

if (window.location.href.endsWith("/")) {
    console.log("IF---"+window.location.href);
}
else if (window.location.href.endsWith("/home")){
    console.log("ELSE---"+window.location.href);
}
