fetch('http://localhost/projets/test-jquery-api-php/api/')
  .then((response) => response.json())
  .then((data) => console.log(data));