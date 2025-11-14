// ===== Navigation Scroll Effect =====
const navbar = document.getElementById('navbar');
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

window.addEventListener('scroll', () => {
    navbar?.classList.toggle('scrolled', window.scrollY > 50);
});

// ===== Mobile Menu Toggle =====
hamburger?.addEventListener('click', () => {
    navMenu.classList.toggle('active');

    const spans = hamburger.querySelectorAll('span');
    const active = navMenu.classList.contains('active');

    spans[0].style.transform = active ? 'rotate(45deg) translate(5px, 5px)' : 'none';
    spans[1].style.opacity = active ? '0' : '1';
    spans[2].style.transform = active ? 'rotate(-45deg) translate(7px, -6px)' : 'none';
});

// Close mobile menu when clicking link
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        const spans = hamburger?.querySelectorAll('span');
        if (spans) {
            spans[0].style.transform = 'none';
            spans[1].style.opacity = '1';
            spans[2].style.transform = 'none';
        }
    });
});

// ===== Smooth Scroll =====
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            e.preventDefault();
            window.scrollTo({
                top: target.offsetTop - 80,
                behavior: 'smooth'
            });
        }
    });
});

// ===== Scroll Animation Observer =====
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => entry.isIntersecting && entry.target.classList.add('visible'));
}, { threshold: 0.1, rootMargin: '-100px 0px 0px 0px' });

document.querySelectorAll('.about-card, .cert-card, .process-card').forEach((card, index) => {
    card.style.transitionDelay = `${index * 0.1}s`;
    observer.observe(card);
});

// ===== Contact Form =====
const contactForm = document.getElementById('contactForm');

contactForm?.addEventListener('submit', e => {
    e.preventDefault();
    alert('Terima kasih! Pesan Anda telah berhasil dikirim.');
    contactForm.reset();
});

// ===== Active Navigation Link =====
const sections = document.querySelectorAll('section[id]');
const setActiveNav = () => {
    const scrollY = window.pageYOffset;
    sections.forEach(section => {
        const top = section.offsetTop - 100;
        const bottom = top + section.offsetHeight;
        const link = document.querySelector(`.nav-link[href="#${section.id}"]`);
        link?.classList.toggle('active', scrollY > top && scrollY <= bottom);
    });
};
window.addEventListener('scroll', setActiveNav);

// ===== Parallax Effect =====
const heroBackground = document.querySelector('.hero-background');
window.addEventListener('scroll', () => {
    if (heroBackground) heroBackground.style.transform = `translateY(${window.pageYOffset * 0.5}px)`;
});

// ===== Input Animation =====
document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
    input.addEventListener('focus', () => input.parentElement.classList.add('focused'));
    input.addEventListener('blur', () => !input.value && input.parentElement.classList.remove('focused'));
});

// ===== Page Loaded =====
window.addEventListener('load', () => {
    setActiveNav();
    document.body.classList.add('loaded');
});

// =======================================
// ===== Dropdown User Login (Blade) =====
// =======================================
// Dropdown User
document.addEventListener("DOMContentLoaded", function () {
    const dropdownBtn = document.querySelector(".dropdown-btn");
    const dropdown = document.querySelector(".dropdown");

    if (dropdownBtn) {
        dropdownBtn.addEventListener("click", () => {
            dropdown.classList.toggle("show");
        });
    }

    // Tutup dropdown jika klik di luar
    document.addEventListener("click", function (e) {
        if (!dropdown.contains(e.target)) {
            dropdown.classList.remove("show");
        }
    });
});

