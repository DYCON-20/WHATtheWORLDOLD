const carousel = document.querySelector('.carousel');
const prevButton = document.querySelector('.carousel-control.left');
const nextButton = document.querySelector('.carousel-control.right');
const itemWidth = carousel.querySelector('.carousel-item').offsetWidth;
let currentTranslate = -itemWidth; // Set the initial position to the second item

// Set the initial position of the carousel
carousel.style.transform = `translateX(${currentTranslate}px)`;

prevButton.addEventListener('click', () => {
    currentTranslate += itemWidth;
    if (currentTranslate > 0) {
        currentTranslate = 0;
    }
    carousel.style.transition = 'transform 0.3s ease';
    carousel.style.transform = `translateX(${currentTranslate}px)`;
});

nextButton.addEventListener('click', () => {
    currentTranslate -= itemWidth;
    const maxTranslate = -itemWidth * (carousel.children.length - 1);
    if (currentTranslate < maxTranslate) {
        currentTranslate = maxTranslate;
    }
    carousel.style.transition = 'transform 0.3s ease';
    carousel.style.transform = `translateX(${currentTranslate}px)`;
});
