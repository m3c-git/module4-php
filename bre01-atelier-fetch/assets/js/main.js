import {addToCart} from "cart.js"

document.addEventListener("DOMContentLoaded", () => {
    console.log("Le DOM est chargé.");

function getRoute()
{
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);

    return urlParams.get('route');
}
console.log("toto")
getRoute()

    
    // votre code sera ici
    
    });

