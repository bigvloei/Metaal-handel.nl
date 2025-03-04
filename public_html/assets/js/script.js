document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    
    if (mobileMenuToggle && mainNav) {
        mobileMenuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            const bars = document.querySelectorAll('.mobile-menu-toggle .bar');
            bars[0].classList.toggle('rotate-45');
            bars[1].classList.toggle('opacity-0');
            bars[2].classList.toggle('rotate-negative-45');
        });
    }
    
    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Form validation for contact forms
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('error');
                } else {
                    field.classList.remove('error');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                const errorMessage = form.querySelector('.error-message') || document.createElement('div');
                errorMessage.textContent = 'Vul alle verplichte velden in.';
                errorMessage.className = 'error-message';
                
                if (!form.querySelector('.error-message')) {
                    form.prepend(errorMessage);
                }
            }
        });
    });
    
    // Log that website is loaded
    console.log('Metaal-handel.nl website geladen!');
});
