let slideIndex = 0;

function showSlides() {
    const slides = document.querySelectorAll(".carousel-item");
    slides.forEach((slide, index) => {
        slide.style.display = index === slideIndex ? "block" : "none";
    });
}

function nextSlide() {
    const slides = document.querySelectorAll(".carousel-item");
    slideIndex = (slideIndex + 1) % slides.length;
    showSlides();
}

function preSlide() {
    const slides = document.querySelectorAll(".carousel-item");
    slideIndex = (slideIndex - 1 + slides.length) % slides.length;
    showSlides();
}

// Mostra o primeiro slide automaticamente ao carregar a página
document.addEventListener("DOMContentLoaded", () => {
    showSlides();
    // Configura a troca automática de slides a cada 3 segundos
    setInterval(nextSlide, 3000);
});