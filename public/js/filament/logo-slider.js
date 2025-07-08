document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("logo-carousel");
    if (!carousel) return;

    let currentSlide = 0;
    const totalSlides = carousel.querySelectorAll(
        "[data-carousel-item]"
    ).length;
    let autoSlideInterval;

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            currentSlide = (currentSlide + 1) % totalSlides;

            const nextButton = carousel.querySelector("[data-carousel-next]");
            if (nextButton) {
                nextButton.click();
            }
        }, 4000);
    }

    function stopAutoSlide() {
        if (autoSlideInterval) {
            clearInterval(autoSlideInterval);
        }
    }

    startAutoSlide();

    carousel.addEventListener("mouseenter", () => {
        stopAutoSlide();
        carousel.setAttribute("data-carousel-pause", "true");
    });

    carousel.addEventListener("mouseleave", () => {
        carousel.removeAttribute("data-carousel-pause");
        startAutoSlide();
    });

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    carousel.addEventListener("touchstart", (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    carousel.addEventListener("touchend", (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;

        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                const nextButton = carousel.querySelector(
                    "[data-carousel-next]"
                );
                if (nextButton) nextButton.click();
            } else {
                const prevButton = carousel.querySelector(
                    "[data-carousel-prev]"
                );
                if (prevButton) prevButton.click();
            }
        }
    }

    // Keyboard navigation
    document.addEventListener("keydown", (e) => {
        if (e.key === "ArrowLeft") {
            const prevButton = carousel.querySelector("[data-carousel-prev]");
            if (prevButton) prevButton.click();
        } else if (e.key === "ArrowRight") {
            const nextButton = carousel.querySelector("[data-carousel-next]");
            if (nextButton) nextButton.click();
        }
    });
});
