function toggleMenu() { //open menu to access views or close menu
    const menu = document.querySelector(".menu-links"); 
    const icon = document.querySelector(".hamurger-icon"); 
    menu.classList.toggle("open"); 
    icon.classList.toggle("open");
}