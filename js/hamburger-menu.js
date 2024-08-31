const hamburgerImage = document.querySelector("div.menu-image img");
const navBarUl = document.querySelector("nav ul");
const headerHamburgerMenu = document.querySelector("div.hamburger-menu");

hamburgerImage.addEventListener("click", (event) => {
    if (hamburgerImage.getAttribute("src") == "images/hamburger-menu.png") {
        hamburgerImage.setAttribute("src", "images/cross-menu.png");
        navBarUl.style.display = "flex";
        headerHamburgerMenu.style.height = "37vh";

    } else {
        hamburgerImage.setAttribute("src", "images/hamburger-menu.png");
        navBarUl.style.display = "none";
        headerHamburgerMenu.style.height = "10vh";
    }

});
