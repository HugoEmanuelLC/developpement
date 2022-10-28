
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

let itemName = '';
companies.forEach(element => {
    // console.log("===>" + element.name)
    label = '<div><label for="'+element.name+'">'+element.name+':&nbsp;&nbsp;&nbsp;</label>';
    input = '<input type="radio" name="metiers" value="'+element.name+'" id="'+element.name+'"></input></div>';
    itemName += label + input;
});
$(" form .metiers").html(itemName)


// const selectElement = document.querySelector(".metiers");
// selectElement.addEventListener('change', (event) => {
//     const result = document.querySelector('.result');
//     result.textContent = `Metier -> ${event.target.value}`;
//     console.log(result)
// });


let tabCompany = '';
$(".metiers").change(function(id){
    $('.result').html(`Metier -> ${id.target.value}`);

    companies.map(function(company) {

        for (let index = 0; index < companies.length; index++) {
            const element = companies[index];

            if (company.name === id.target.value) {

                console.log("c'est l'element trouver" + company.name + company.start);

                let itemCompany = '';

                h1 = '<h1>'+company.name+'</h1>'; 
                p = '<p>'+company.start+'</p>';
                img = '<img src="'+company.imgBGD+'">';
                desc = '<h3>' +company.description+ '</h3>';

                itemCompany += h1 + p + img + desc;

                return $(".company").html(itemCompany);

            }else{}
            
        }
    })

})
