// Fonction pour cacher les cookies

function hideLayer() {
 document.getElementById("layerId").style.display="none";
}


function cookies(){
    let httpRequest = new XMLHttpRequest();
    httpRequest.onload = function(){
        let ajaxCookies = document.getElementById("ajaxCookies");
                let data = JSON.parse(httpRequest.responseText);
                ajaxCookies.innerText = ` ${data.cookies}`;
    }

    httpRequest.open('GET', 'layer.json', true);
    httpRequest.send();
}


//Je la laisse la au cas ou

// function cookies(){
//     let httpRequest = new XMLHttpRequest();
//     httpRequest.onload = function(){
//         let ajaxCookies = document.getElementById("ajaxCookies");
//         if(httpRequest.readyState === XMLHttpRequest.DONE) {
//             if (httpRequest.status === 200) {
//                 alert("prout");
//                 let data = JSON.parse(httpRequest.responseText);
//                 ajaxCookies.innerText = ` ${data.cookies}`;
//             }
//             else{
//                 alert("abc");
//             }
//         }
//         else {
//             alert("bcd");
//         }
//     }

//     httpRequest.open('GET', 'layer.json', true);
//     httpRequest.send();
// }