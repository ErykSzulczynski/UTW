var burger = document.getElementById('burger__container');
var mobileMenu = document.getElementById('mobile__menu--overlay');
var mobileMenuCloseBtn = document.getElementById('mobile__container--close');

function mobileMenuOpen(){
    burger.style.display = "none";
    mobileMenu.style.display = "block";
    mobileMenuCloseBtn.style.display = "block";
}

function mobileMenuClose(){
    burger.style.display = "block";
    mobileMenu.style.display = "none";
    mobileMenuCloseBtn.style.display = "none";
}