document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll Observer
    const animateElements = document.querySelectorAll('.animate-on-scroll, .skill-bar-fill, .stat-number');
    
    const observerOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const scrollObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                
                // Add animated class for generic animations
                if (el.classList.contains('animate-on-scroll')) {
                    el.classList.add('animated');
                }
                
                // 2. Skill Bar Animation
                if (el.classList.contains('skill-bar-fill')) {
                    const width = el.getAttribute('data-width');
                    if (width) el.style.width = width + '%';
                }
                
                // 3. Counter Animation
                if (el.classList.contains('stat-number') && !el.classList.contains('counted')) {
                    animateCounter(el);
                    el.classList.add('counted');
                }
                
                observer.unobserve(el);
            }
        });
    }, observerOptions);

    animateElements.forEach(el => scrollObserver.observe(el));

    // Counter Animation Helper
    function animateCounter(el) {
        const target = parseInt(el.getAttribute('data-count'), 10);
        if (isNaN(target)) return;
        
        const duration = 2000; // 2 seconds
        const startTime = performance.now();
        
        // easeOutQuart
        const easeOutQuart = (t) => 1 - Math.pow(1 - t, 4);

        const updateCounter = (currentTime) => {
            const elapsedTime = currentTime - startTime;
            if (elapsedTime > duration) {
                el.innerText = target;
                return;
            }
            
            const progress = elapsedTime / duration;
            const currentCount = Math.round(target * easeOutQuart(progress));
            el.innerText = currentCount;
            requestAnimationFrame(updateCounter);
        };
        
        requestAnimationFrame(updateCounter);
    }

    // 4. Tilt Effect
    const tiltElements = document.querySelectorAll('[data-tilt]');
    
    // Check if touch device
    const isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    
    if (!isTouchDevice) {
        tiltElements.forEach(el => {
            el.addEventListener('mousemove', (e) => {
                const rect = el.getBoundingClientRect();
                const x = e.clientX - rect.left; // x position within the element
                const y = e.clientY - rect.top;  // y position within the element
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const tiltX = ((y - centerY) / centerY) * -8; // Max 8 degrees
                const tiltY = ((x - centerX) / centerX) * 8;
                
                el.style.transform = `perspective(1000px) rotateX(${tiltX}deg) rotateY(${tiltY}deg) scale3d(1.02, 1.02, 1.02)`;
                
                // Optional: subtle glow shift depending on setup, e.g., via background or box-shadow
                el.style.boxShadow = `${-tiltY}px ${tiltX}px 20px rgba(0, 212, 255, 0.2)`;
            });
            
            el.addEventListener('mouseleave', () => {
                el.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
                el.style.boxShadow = 'none';
            });
        });
    }

    // 5. Parallax on scroll & 6. Navbar scroll effect
    const heroContent = document.querySelector('.hero-content');
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        
        // Navbar scrolled state
        if (navbar) {
            if (scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }
        
        // Parallax
        if (heroContent && scrollY < window.innerHeight) {
            heroContent.style.transform = `translateY(${scrollY * 0.3}px)`;
            heroContent.style.opacity = 1 - (scrollY / window.innerHeight) * 1.5;
        }
    });
});
