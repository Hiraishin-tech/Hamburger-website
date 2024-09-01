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
const offset = 83; 

const ourBurgers = document.getElementById("our-burgers");
const ourBurgersHeading = document.querySelector("div.main-heading.row h2");

ourBurgers.addEventListener("click", (event) => {
    event.preventDefault();

    // Calculate the scroll position with the offset
    const scrollPosition = ourBurgersHeading.offsetTop - offset;

    window.scrollTo({
        top: scrollPosition,
        behavior: "smooth"
    });
});

const aboutOurBurgers = document.querySelector("#about-our-burgers");
const aboutOurBurgersButton = document.querySelector(".about-our-burgers");
const aboutOurBurgersHeading = document.querySelector("#about-our-burgers-heading");

aboutOurBurgersButton.addEventListener("click", (event) => {
    event.preventDefault();

    const scrollPostion = aboutOurBurgersHeading.offsetTop - offset;
    window.scrollTo({
       top: scrollPostion,
       behavior: "smooth",  
    });

});

aboutOurBurgers.addEventListener("click", (event) => {
    event.preventDefault();
    
    const scrollPosition = aboutOurBurgersHeading.offsetTop - offset;

    window.scrollTo({
       top: scrollPosition,
       behavior: "smooth", 
    });

});


const review = document.getElementById("review");
const reviewHeading = document.querySelector("#review-heading");

review.addEventListener("click", (event) => {
    event.preventDefault();
    
    const scrollPosition = reviewHeading.offsetTop - offset;

    window.scrollTo({
        top: scrollPosition,
        behavior: "smooth",
    });  

});




const gallery = document.getElementById("gallery");
const galleryHeading = document.getElementById("gallery-heading");

gallery.addEventListener("click", (event) => {
    event.preventDefault();
    const scrollPosition = galleryHeading.offsetTop - offset;

    window.scrollTo({
        top: scrollPosition,
        behavior: "smooth",
    }); 
});


const contact = document.querySelector("#contact");
const contactButton = document.querySelector("#contact-button");
const contactHeading = document.querySelector("#contact-heading");


contact.addEventListener("click", (event) => {
    event.preventDefault();
    const scrollPosition = contactHeading.offsetTop - offset;

    window.scrollTo({
        top: scrollPosition,
        behavior: "smooth",
    }); 
});

contactButton.addEventListener("click", (event) => {
    event.preventDefault();
    
    const scrollPosition = contactHeading.offsetTop - offset;

    window.scrollTo({
        top: scrollPosition,
        behavior: "smooth",
    }); 
});