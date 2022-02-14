var kreis = document.getElementById("kreis");
var body = document.querySelector("body")
var handymenü = document.getElementById("handymenü");
var handystundenplan = document.getElementById("handy-stundenplan");


function darkmode(){
    kreis.classList.toggle("schiebung");
    body.classList.toggle("dark")
}
function container2(){
    document.getElementById("eins").classList.toggle("rotate1");
    document.getElementById("zwei").classList.toggle("rotate2");
    document.getElementById("drei").classList.toggle("active");
    handymenü.classList.toggle("schiebung");
}

function stundenpläne(){
    handystundenplan.classList.toggle("dropdown-handy");
}