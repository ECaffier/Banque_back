function loadBlog() {
    alert("prout");
    let httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = function() {
        let apiContent = document.querySelector('section');
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                let data = JSON.parse(httpRequest.responseText);
                for (let i = 0 ; i< data.length; i++ ) {
                    apiContent.innerHTML += '<div class=card>'+'<h5 class="card-header">'+ data[i].id +'</h5>'+
                    '<div class="card-body">'+ '<h5 class="card-title">'+ data[i].titre + '</h5>'+
                    '<p class="card-text">'+ data[i].contenu +'</p>'+
                    '<a href="#" class="btn btn-primary">'+ "En savoir plus" +'</a>'+'</div>'+'</div>';
                }
            } 
            else {
                apiContent.innerText = "Nous n'avons pas réussi à récupérer le contenu";
            }
        } 
    };
    httpRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles', true);
    httpRequest.send();
}



// function actuApi(){
//     alert("pourt");

//     let httpRequest = new XMLHttpRequest();
//     httpRequest.onload = function(){
//         let ajaxActu = document.querySelector('section');
//         let data = JSON.parse(httpRequest.responseText)
//         for (let i = 0 ; i < data.length; i++ ) {
//             ajaxActu.innerHTML += '<div class=card>'+'<h5 class="card-header">'+ data[i].id +'</h5>'+
//             '<div class="card-body">'+ '<h5 class="card-title">'+ data[i].titre + '</h5>'+
//             '<p class="card-text">'+ data[i].contenu +'</p>'+
//             '<a href="#" class="btn btn-primary">'+ "En savoir plus" +'</a>'+'</div>'+'</div>';
//     }   
//     httpRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles', true);
//     httpRequest.send();
// }






// function actuApi(){
//         alert("pr0");
//         let httpRequest = new XMLHttpRequest();
//         httpRequest.onload = function(){
//             let ajaxActu = document.getElementById("ajaxActu");
//                     let data = JSON.parse(httpRequest.responseText);
//                     ajaxActu.innerText = ` nom : ${data[0].id}`;
//         }
    
//         httpRequest.open('GET', 'https://oc-jswebsrv.herokuapp.com/api/articles', true);
//         httpRequest.send();
// }
