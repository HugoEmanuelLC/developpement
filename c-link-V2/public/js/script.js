
/*SELECTOR*/
let test = $(".test")
let tagJob = $("#job");
let tagRegion = $("#regions");
let tagCity = $("#city");
let tagCompany = $(".items");

    
/*IDs*/
let IDjob = null;
let IDregion = null;
let IDcity = null;

/*AFICHAGE des jobs*/

let itemjobs = "";
$.ajax({
    url: "http://localhost/tests/Api/jobs.php",
    dataType: "json",
    success: function(data){

        itemjobs += '<option>Jobs :</option>';
        data.forEach(job => {
            itemjobs += '<option value="'+job.id+'" >'+job.name_job+'</option>';
        })
        tagJob.html(itemjobs);
    }
});


/*AFICHAGE des regions*/

let itemRegion = "";
$.ajax({
    url: "http://localhost/tests/Api/regions.php",
    dataType: "json",
    success: function(data){

        itemRegion += '<option>Region :</option>';
        data.forEach(region => {
            itemRegion += '<option value="'+region.id+'" >'+region.name+'</option>';
        })
        tagRegion.html(itemRegion);
    }
});


/*AFICHAGE des citys*/
let itemCity = "";
test.change(function(){
    $.ajax({
        url: "http://localhost/tests/Api/city.php?idRegion="+IDregion,
        dataType: "json",
        success: function(data){
    
            itemCity += '<option>City :</option>';
            data.forEach(city => {
                itemCity += '<option value="'+city.id+'" >'+city.name+'</option>';
            })
            tagCity.html(itemCity);
            itemCity = null;
        }
    });


/*AFICHAGE des company*/
let itemCompany = "";
    $.ajax({
        url: "http://localhost/tests/Api/company.php?idCity="+IDcity+"&idJob="+IDjob,
        dataType: "json",
        success: function(data){
            data.forEach(company => {
                itemCompany +='<div class="item">';
                itemCompany +=  '<div class="img item1" style="background: url('+company.img_background+')"></div>';
                itemCompany +=  '<div class="infos">';
                itemCompany +=      '<span><h4>Metier: &nbsp;</h4><p>'+company.name_job+'</p></span>';
                itemCompany +=      '<span><h4>nom: &nbsp;</h4><p>'+company.name_company+'</p></span>';
                itemCompany +=      '<span><h4>ville: &nbsp;</h4><p>'+company.adresse+'</p></span>';
                itemCompany +=  '</div>';
                itemCompany +=  '<a href="http://127.0.0.1:5500/?idPageCompany='+company.idCompany+'#/page1" class="lien">lien</a>';
                itemCompany +='</div>';
            })
            tagCompany.html(itemCompany);
            itemCompany = null;
        }
    });
})


tagJob.change(function(id){
    IDjob = `${id.target.value}`;
    console.log("job "+IDjob);
});

tagRegion.change(function(id){
    IDregion = `${id.target.value}`;
    console.log("job "+IDjob +" region " +IDregion);
});

tagCity.change(function(id){
    IDcity = `${id.target.value}`;
});
