let slideIndex = 0;
let slideInterval;

function showSlides(n) {
    const slides = document.querySelectorAll(".slides");
    const dots = document.querySelectorAll(".dots span");

    if (n >= slides.length) slideIndex = 0;
    if (n < 0) slideIndex = slides.length - 1;

    slides.forEach((slide) => slide.classList.remove("active"));
    dots.forEach((dot) => dot.classList.remove("active-dot"));

    slides[slideIndex].classList.add("active");
    dots[slideIndex].classList.add("active-dot");
}

function startSlideShow() {
    slideInterval = setInterval(() => {
        slideIndex++;
        showSlides(slideIndex);
    }, 5000);
}

function resetSlideShow() {
    clearInterval(slideInterval);
    startSlideShow();
}

function changeSlide(n) {
    slideIndex += n;
    showSlides(slideIndex);
    resetSlideShow();
}

function currentSlide(n) {
    slideIndex = n - 1;
    showSlides(slideIndex);
    resetSlideShow();
}

window.addEventListener("blur", () => {
    clearInterval(slideInterval);
});

window.addEventListener("focus", () => {
    resetSlideShow();
});

document.addEventListener("DOMContentLoaded", () => {
    startSlideShow();
});