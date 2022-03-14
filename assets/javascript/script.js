var kreis = document.getElementById("kreis");
var body = document.querySelector("body")
var popupinfo = document.getElementById("popup-info");
var popupfranz = document.getElementById("popup-franz");
var popupsowi = document.getElementById("popup-sowi");
var popupbio = document.getElementById("popup-bio");
var handymenü = document.getElementById("handymenü");
var popuphandyinfo = document.getElementById("popup-handy-info")
var popuphandyfranz = document.getElementById("popup-handy-franz")
var popuphandysowi = document.getElementById("popup-handy-sowi")
var popuphandybio = document.getElementById("popup-handy-bio")


// Darkmode
function darkmode(){
    kreis.classList.toggle("schiebung");
    body.classList.toggle("dark")
}

// Menüknopf handy
function container2(){
    document.getElementById("eins").classList.toggle("rotate1");
    document.getElementById("zwei").classList.toggle("rotate2");
    document.getElementById("drei").classList.toggle("active");
    handymenü.classList.toggle("schiebung");
}

// Popups
// Popup-info
function popup1(){
    popupinfo.classList.toggle("erscheinung");
}
// popup-französisch
function popup2(){
    popupfranz.classList.toggle("erscheinung");
}
// popup-Sowi
function popup3(){
    popupsowi.classList.toggle("erscheinung");
}
// popup-Bio
function popup4(){
    popupbio.classList.toggle("erscheinung");
}

// Popups handy
// Popup-handy-info
function popuphandy1(){
    popuphandyinfo.classList.toggle("erscheinung-handy");
}
function popuphandy2(){
    popuphandyfranz.classList.toggle("erscheinung-handy");
}
function popuphandy3(){
    popuphandysowi.classList.toggle("erscheinung-handy");
}
function popuphandy4(){
    popuphandybio.classList.toggle("erscheinung-handy");
}