const burger_menu = document.querySelector('.menu-trigger');
const nav_icons = document.querySelectorAll('.nav-links i');
var is_open = true;
burger_menu.classList.add('open');
burger_menu.style.width = "25%";
burger_menu.style.height = "5vh";
burger_menu.style.borderRadius = "0rem 0rem .5rem 0rem";
burger_menu.style.backgroundColor = "var(--brown)";
is_open = true;
document.querySelector('.nav-links').style.width = "0%";
nav_icons.forEach(element => {
    element.style.display = 'none';
});
document.querySelector('#empty').style.width = "0%";
document.querySelector('.menu-trigger div > i').style.transform = "scale(2)";
burger_menu.addEventListener('click', () => {
    if(!is_open){
        burger_menu.classList.add('open');
        burger_menu.style.width = "25%";
        burger_menu.style.height = "5vh";
        burger_menu.style.borderRadius = "0rem 0rem .5rem 0rem";
        burger_menu.style.backgroundColor = "var(--brown)";
        is_open = true;
        document.querySelector('.nav-links').style.width = "0%";
        nav_icons.forEach(element => {
            element.style.display = 'none';
        });
        document.querySelector('#empty').style.width = "0%";
        document.querySelector('.menu-trigger div > i').style.transform = "scale(2)";
        document.querySelector('.content').classList.remove('blur');
    }
    else{
        burger_menu.classList.remove('open');
        burger_menu.style.width = "100%";
        burger_menu.style.height = "20vh";
        burger_menu.style.borderRadius = "0rem";
        burger_menu.style.backgroundColor = "#0e110e";
        is_open = false;
        document.querySelector('.nav-links').style.width = "100%";
        nav_icons.forEach(element => {
            element.style.display = 'unset';
        });
        document.querySelector('#empty').style.width = "100%";
        document.querySelector('.menu-trigger div > i').style.transform = "scale(300%)";
        document.querySelector('.content').classList.add('blur');
    }
});