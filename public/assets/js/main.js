
document.addEventListener("DOMContentLoaded", function () {
    // Tahun otomatis pada footer
    const currentYear = document.getElementById("currentYear");

    if (currentYear) {
        currentYear.textContent = new Date().getFullYear();
    }

    // Tutup navbar setelah menu dipilih di perangkat mobile
    const navbar = document.getElementById("mainNavbar");
    const navLinks = document.querySelectorAll(
        "#mainNavbar .nav-link, #mainNavbar .btn-navbar"
    );

    if (navbar && typeof bootstrap !== "undefined") {
        navLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                if (navbar.classList.contains("show")) {
                    const collapse = bootstrap.Collapse.getOrCreateInstance(navbar);
                    collapse.hide();
                }
            });
        });
    }
});

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================
       1. NAVBAR SCROLL EFFECT
    ===================================== */

    const siteHeader = document.getElementById('siteHeader');

    function updateNavbar() {
        if (!siteHeader) return;

        if (window.scrollY > 30) {
            siteHeader.classList.add('scrolled');
        } else {
            siteHeader.classList.remove('scrolled');
        }
    }

    updateNavbar();

    window.addEventListener('scroll', updateNavbar, {
        passive: true
    });


    /* =====================================
       2. MOBILE NAVBAR AUTO CLOSE
    ===================================== */

    const mainNavbar = document.getElementById('mainNavbar');

    if (mainNavbar && typeof bootstrap !== 'undefined') {

        const navLinks = mainNavbar.querySelectorAll('a[href^="#"]');

        navLinks.forEach(link => {
            link.addEventListener('click', function () {

                if (window.innerWidth < 992) {
                    const collapse = bootstrap.Collapse.getInstance(mainNavbar);

                    if (collapse) {
                        collapse.hide();
                    }
                }

            });
        });

    }


    /* =====================================
       3. FOOTER CURRENT YEAR
    ===================================== */

    const currentYear = document.getElementById('currentYear');

    if (currentYear) {
        currentYear.textContent = new Date().getFullYear();
    }

});


AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80
});


/* =========================================
   TESTIMONIAL SLIDER
========================================= */

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.getElementById('testimonialSlider');
    const prevButton = document.getElementById('testimonialPrev');
    const nextButton = document.getElementById('testimonialNext');

    if (!slider || !prevButton || !nextButton) return;

    const cards = slider.querySelectorAll('.testimonial-card');

    if (!cards.length) return;

    function getScrollAmount() {
        const card = cards[0];
        const gap = parseFloat(getComputedStyle(slider).gap) || 0;

        return card.getBoundingClientRect().width + gap;
    }

    function updateButtons() {
        const maxScroll = slider.scrollWidth - slider.clientWidth;

        prevButton.disabled = slider.scrollLeft <= 2;
        nextButton.disabled = slider.scrollLeft >= maxScroll - 2;
    }

    prevButton.addEventListener('click', function () {
        slider.scrollBy({
            left: -getScrollAmount(),
            behavior: 'smooth'
        });
    });

    nextButton.addEventListener('click', function () {
        slider.scrollBy({
            left: getScrollAmount(),
            behavior: 'smooth'
        });
    });

    slider.addEventListener('scroll', updateButtons);

    window.addEventListener('resize', updateButtons);

    updateButtons();
});

