const slidesContainer = document.querySelector('.slides-container');
let currentSlide = 1;

function showSlide(index) {
    slidesContainer.style.transform = `translateX(-${index * 25}%)`;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % 4;
    showSlide(currentSlide);
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + 4) % 4;
    showSlide(currentSlide);
}

showSlide(currentSlide);

setInterval(nextSlide, 5000); // Change slide every 5 seconds
