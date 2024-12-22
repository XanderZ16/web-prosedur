// Change Navbar
let scrolled = false;

function change_nav() {
    if (window.scrollY > 100) {
        if (!scrolled) {
            document.getElementById("nav").classList.remove('navbar-top');
            scrolled = true;
        }
    } else {
        document.getElementById("nav").classList.add('navbar-top');
        scrolled = false;
    }
}

addEventListener("scroll", change_nav);
addEventListener("DOMContentLoaded", change_nav);

// Typing Animation
const textContainer = document.getElementById('text-container');
const sentences = [
    "We Are From Group 3",
    "Easiest Way To Create An Account",
    "Make Your Account Now !!"
];

let sentenceIndex = 0;
let charIndex = 0;
let isDeleting = false;

function type() {
    const currentText = sentences[sentenceIndex];
    if (!isDeleting) {
        textContainer.textContent = currentText.substring(0, charIndex++);
    } else {
        textContainer.textContent = currentText.substring(0, charIndex--);
    }

    if (!isDeleting && charIndex > currentText.length) {
        isDeleting = true;
        setTimeout(type, 1000); // Pause before deleting
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        sentenceIndex = (sentenceIndex + 1) % sentences.length;
        setTimeout(type, 500); // Pause before typing next sentence
    } else {
        setTimeout(type, isDeleting ? 30 : 120); // Typing speed
    }
}

type(); // Start the animation

el = document.getElementsByClassName('.navbar');

el.addEventListener('transitiononrun', function () {
    console.log("TES");
});

addEventListener('cl')