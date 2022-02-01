var kreis = document.getElementById("kreis");
var body = document.querySelector("body")
var kreuz = document.getElementById("times");
var bars = document.getElementById("bars");

function darkmode(){
    kreis.classList.toggle("schiebung");
    body.classList.toggle("dark")
}
function menu(){
    kreuz.classList.toggle("menü");
}
function container(){
    document.getElementById("eins").classList.toggle("rotate1");
    document.getElementById("zwei").classList.toggle("rotate2");
    document.getElementById("drei").classList.toggle("active");
    document.getElementById("liste").classList.toggle("schiebung")
}