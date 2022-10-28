

// functions de manipulation de donnes ( tableaux , objets )
// .map()
// .filter()
// .sort()
// .reduce()



let companies = 
[
    {
        name: "google", 
        imgBGD: "https://cdn.futura-sciences.com/cdn-cgi/image/width=1024,quality=50,format=auto/sources/images/actu/google-definition.jpg", 
        description: "petit text",
        start: "1981",
    },
    
    {
        name: "scp", 
        imgBGD: "https://www.mancity.com/meta/media/ilhj5my4/gettyimages-1355326792.jpg?width=1620",
         description: "petit text",
         start: "1991",

    },
    
    {
        name: "meta", 
        imgBGD: "https://www.cointribune.com/app/uploads/2022/05/metaverse-hyperlex-scaled.webp", 
        description: "petit text",
        start: "2001",
    },
]


console.log(companies[0]["name"])
console.log("..............--------------------...................")

    
for(let i = 0; i < companies.length; i++){
    console.log("===>" + companies[i]["name"])
}

console.log("..............--------------------...................")

companies.forEach(element => {
    console.log("===>" + element.name)
});

console.log("..............--------------------...................")

const retailCompanies = companies.filter(function(data){
    if(data.name === "google"){
        return true
    }
})
console.log(retailCompanies)
console.log("..............----------OU----------...................")

const retailCompanies2 = companies.filter(data => (data.start <= 2002))

console.log( retailCompanies2[0]["name"] + " " + retailCompanies2[0]["start"])

let item = '';
retailCompanies2.forEach(element => {
    console.log("===>" + element.name)

    h1 = '<h1>'+element.name+'</h1>';
    p = '<p>'+element.start+'</p>';
    img = '<img src="'+element.imgBGD+'">';
    desc = '<h3>' +element.description+ '</h3>';
    
    item += h1 + p + img + desc;
    item += '+++++++++++++++++++++++++++++++++++++++++++++++++++++++';
});
$(".table").html(item)





console.log("..............----------MAP----------...................")

const companiesName = companies.map(function(company) {
    return company.name
})
console.log(companiesName)

console.log("..............--------------------...................")

// $(".table h1").html(companiesName[0])
// $(".table p").html(companiesName[1])






