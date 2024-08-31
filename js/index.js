const arrow = document.querySelector(".arrow");
const header = document.querySelector("header");

arrow.addEventListener("click", (event) => {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
});

window.addEventListener("wheel", (event) => {
    // console.log(window.scrollY);
    // console.log(header.getBoundingClientRect());

    const headerPosition = header.getBoundingClientRect();
    if (window.scrollY > headerPosition.bottom) {
        arrow.classList.add("appear");
    } else {
        arrow.classList.remove("appear");
    } 
});


// animace po kliknutí na odkazu se odscrolluje dolů
const ourBurgers = document.getElementById("our-burgers");
const ourBurgersHeading = document.querySelector("div.main-heading.row h2");

ourBurgers.addEventListener("click", (event) => {
    event.preventDefault();

    const positionOurBurger = ourBurgersHeading.getBoundingClientRect();

    window.scrollTo({
        top: positionOurBurger.bottom - positionOurBurger.height,
        behavior: "smooth",
    });
});

// ourBurgers.addEventListener("click", (event) => {
//     event.preventDefault();
//     ourBurgersHeading.scrollIntoView({ behavior: "smooth" });
// });


const aboutOurBurgers = document.querySelector("#about-our-burgers");
const aboutOurBurgersButton = document.querySelector(".about-our-burgers");
const aboutOurBurgersHeading = document.querySelector("#about-our-burgers-heading");

const positionAboutOurBurgers = aboutOurBurgersHeading.getBoundingClientRect();
// console.log(positionAboutOurBurgers);

aboutOurBurgersButton.addEventListener("click", (event) => {
    window.scrollTo({
        top: positionAboutOurBurgers.bottom - positionAboutOurBurgers.height,
        behavior: "smooth",
    })
});

aboutOurBurgers.addEventListener("click", (event) => {
    window.scrollTo({
        top: positionAboutOurBurgers.bottom - positionAboutOurBurgers.height,
        behavior: "smooth",
    })
});


const review = document.getElementById("review");
const reviewHeading = document.querySelector("#review-heading");

const positionReviewHeading = reviewHeading.getBoundingClientRect();

review.addEventListener("click", () => {
    window.scrollTo({
        top: positionReviewHeading.bottom - positionReviewHeading.height,
        behavior: "smooth",
    });  
});


const gallery = document.getElementById("gallery");
const galleryHeading = document.getElementById("gallery-heading");

const positionGalleryHeading = galleryHeading.getBoundingClientRect();
// console.log(positionGalleryHeading);

gallery.addEventListener("click", () => {
    window.scrollTo({
        top: positionGalleryHeading.bottom - positionGalleryHeading.height,
        behavior: "smooth",
    });  
});


const contact = document.querySelector("#contact");
const contactButton = document.querySelector("#contact-button");
const contactHeading = document.querySelector("#contact-heading");

const positionContactHeading = contactHeading.getBoundingClientRect();
// console.log(positionContactHeading);

contact.addEventListener("click", () => {
    window.scrollTo({
        top: positionContactHeading.bottom,
        behavior: "smooth",
    });
});
contactButton.addEventListener("click", () => {
    window.scrollTo({
        top: positionContactHeading.bottom,
        behavior: "smooth",
    });
});