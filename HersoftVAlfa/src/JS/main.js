// variables menu
var menu = document.getElementById("nav");
var menuBurger = document.getElementById("menu_burger");
var crossMenu = document.getElementById("cross_menu");
var banner = document.getElementsByClassName("banner");
var bannerName = document.getElementById("span_name");
// 0 or 1
var menuOnOrOff = false;
function openCloseMenu() {
  let widthScreen = parseInt(screen.width);
  if (widthScreen >= 1000) {
    if (menuOnOrOff === false) {
      menu.style.right = "0px";
      menuBurger.style = "font-size: 0px";
      crossMenu.style = "font-size: 1.6rem";
      menuOnOrOff = true;
    } else if (menuOnOrOff === true) {
      menu.style.right = "-150%";
      menuOnOrOff = false;
      menuBurger.style = "font-size: 1.6rem";
      crossMenu.style = "font-size: 0px";
    }
  } else if (widthScreen < 1000) {
    if (menuOnOrOff === false) {
      menu.style.left = "0px";
      menuBurger.style = "font-size: 0px";
      crossMenu.style = "font-size: 1.6rem";
      menuOnOrOff = true;
    } else if (menuOnOrOff === true) {
      menu.style.left = "-150%";
      menuOnOrOff = false;
      menuBurger.style = "font-size: 1.6rem";
      crossMenu.style = "font-size: 0px";
    }
  }
}
//Variables Menu SEO
let aI = document.getElementById("aI");
let b = document.getElementById("b");
let c = document.getElementById("c");
let d = document.getElementById("d");
let eI = document.getElementById("eI");
let f = document.getElementById("f");

// variables letras menu seo
let a = document.getElementById("a");
let e = document.getElementById("e");
let i = document.getElementById("i");
let o = document.getElementById("o");
let u = document.getElementById("u");
let us = document.getElementById("us");
//  estados menu
let aOnOrFalse = false;
let eOnOrFalse = false;
let iOnOrFalse = false;
let oOnOrFalse = false;
let uOnOrFalse = false;
let usOnOrFalse = false;

function hoverA() {
  if (aOnOrFalse === false) {
    aOnOrFalse = true;
    aI.style.marginRight = "0px";
  } else if (aOnOrFalse === true) {
    aOnOrFalse = false;
    aI.style.marginRight = "18vw";
  }
}
function hoverB(){
  if (eOnOrFalse === false){
    eOnOrFalse = true;
    b.style.marginRight = "0px";
  }else if (eOnOrFalse === true){
    eOnOrFalse = false;
    b.style.marginRight = "18vw";
  }
}
function hoverC(){
  if (iOnOrFalse === false){
    iOnOrFalse = true;
    c.style.marginRight = "0px";
  }else if (iOnOrFalse === true){
    iOnOrFalse = false;
    c.style.marginRight = "18vw";
  }
}
function hoverD(){
  if (oOnOrFalse === false){
    oOnOrFalse = true;
    d.style.marginRight = "0px";
  }else if (oOnOrFalse === true){
    oOnOrFalse = false;
    d.style.marginRight = "18vw";
  }
}
function hoverE(){
  if (uOnOrFalse === false){
    uOnOrFalse = true;
    eI.style.marginRight = "0px";
  }else if (uOnOrFalse === true){
    uOnOrFalse = false;
    eI.style.marginRight = "18vw";
  }
}
function hoverF(){
  if (usOnOrFalse === false){
    usOnOrFalse = true;
    eI.style.marginRight = "0px";
  }else if (usOnOrFalse === true){
    usOnOrFalse = false;
    eI.style.marginRight = "18vw";
  }
}

let previa = document.getElementById('product_img');
function eliminar(){
  previa.style.display = 'none';
}
var menuUser = document.getElementById("user_menu");
var menuUserIcon = document.getElementById("menu_user");
var crossUser = document.getElementById("cross_user");
// Estados
let menuUserOn = false;
function openCloseMenuUser (){  
  if(menuUserOn ===  false){
    menuUserOn = true;
    menuUser.style.transform = 'translateX(0px)';
    menuUserIcon.style.fontSize = '0px';
    crossUser.style.fontSize = '1.6rem';
  }else if(menuUserOn === true){
    menuUserOn = false;
    menuUser.style.transform = 'translateX(150%)';
    menuUserIcon.style.fontSize = '1.6rem';
    crossUser.style.fontSize = '0px';
  }
}