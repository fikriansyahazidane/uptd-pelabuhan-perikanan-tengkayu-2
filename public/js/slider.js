document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("slider");
    const slides = slider.children;
    const totalSlides = slides.length;
    let currentIndex = 0;

    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");
    const indicators = document.querySelectorAll(".slider-indicator span");

    function updateSlider() {
        const translateValue = -currentIndex * 100 + "%";
        slider.style.transform = "translateX(" + translateValue + ")";
        updateIndicators();
    }

    function updateIndicators() {
        indicators.forEach((indicator, index) => {
            indicator.style.opacity = index === currentIndex ? "1" : "0.5";
        });
    }

    nextButton.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    });

    prevButton.addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
    });

    // Auto Slide setiap 5 detik
    setInterval(() => {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    }, 5000);

    updateSlider();
});
