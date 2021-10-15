// variables menu
var menu = document.getElementById("nav");
var menuBurger = document.getElementById("menu_burger");
var crossMenu = document.getElementById("cross_menu");
var banner = document.getElementsByClassName('banner');
var bannerName = document.getElementById('span_name');
// 0 or 1
var menuOnOrOff = false;
function openCloseMenu() {
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
}