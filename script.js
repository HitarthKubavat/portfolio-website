document.addEventListener('DOMContentLoaded', () => {

    // --- RESPONSIVE NAVBAR --- //
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        // Toggle Nav
        navLinks.classList.toggle('nav-active');
        
        // Burger Animation
        hamburger.classList.toggle('toggle');
    });

    // --- TYPING ANIMATION --- //
    if (document.querySelector('.typing')) {
        new Typed('.typing', {
            strings: ['Frontend Developer', 'UI/UX Designer', 'Web Enthusiast', 'Application Developer'],
            typeSpeed: 80,
            backSpeed: 40,
            loop: true
        });
    }

    // --- SCROLL REVEAL ANIMATION --- //
    const sr = ScrollReveal({
        origin: 'top',
        distance: '80px',
        duration: 2000,
        reset: false
    });

    // Animate Hero section elements
    sr.reveal('.hero-content h1', {});
    sr.reveal('.hero-content h3', { delay: 200 });
    sr.reveal('.hero-content p', { delay: 400 });
    sr.reveal('.btn', { delay: 600 });
    
    // Animate other sections
    sr.reveal('.section-title', {});
    sr.reveal('.about-image', { origin: 'left' });
    sr.reveal('.about-text', { origin: 'right' });
    sr.reveal('.skill-item', { interval: 200 });
    sr.reveal('.project-card', { interval: 200 });
    sr.reveal('#contact-form', { origin: 'bottom' });
    sr.reveal('.social-links a', { origin: 'bottom', interval: 200 });

    // --- STICKY HEADER ON SCROLL --- //
    let lastScrollTop = 0;
    const header = document.getElementById('header');
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Downscroll
            header.style.top = "-80px";
        } else {
            // Upscroll
            header.style.top = "0";
        }
        lastScrollTop = scrollTop;
    });

    // --- CONTACT FORM SUBMISSION (Client-side simulation) --- //
    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const name = this.name.value;
        const email = this.email.value;
        const message = this.message.value;
        
        // In a real application, you would send this data to a server
        // using fetch() or another method.
        alert(`Thank you, ${name}! Your message has been sent.`);
        
        // Clear the form
        this.reset();
    });

});