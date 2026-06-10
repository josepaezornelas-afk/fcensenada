document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const navLinksContainer = document.getElementById('navLinks');
    
    if (mobileMenuBtn && navLinksContainer) {
        mobileMenuBtn.addEventListener('click', () => {
            navLinksContainer.classList.toggle('active');
            
            // Toggle hamburger icon if needed
            const isExpanded = navLinksContainer.classList.contains('active');
            mobileMenuBtn.innerHTML = isExpanded ? '✕' : '☰';
        });
    }

    // Mobile Dropdowns Toggle
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        const link = item.querySelector('.nav-link');
        const dropdown = item.querySelector('.dropdown-menu');
        
        if (link && dropdown) {
            link.addEventListener('click', (e) => {
                if (window.innerWidth <= 991) {
                    // Prevent navigation if click is to open dropdown
                    e.preventDefault();
                    item.classList.toggle('active');
                }
            });
        }
    });

    // Hero Carousel / Slider
    const sliderContainer = document.getElementById('sliderContainer');
    const slides = document.querySelectorAll('.slide');
    const dotsContainer = document.getElementById('sliderDots');
    const prevBtn = document.getElementById('sliderPrev');
    const nextBtn = document.getElementById('sliderNext');
    
    if (sliderContainer && slides.length > 0) {
        let currentSlide = 0;
        const totalSlides = slides.length;
        let slideInterval;

        // Create navigation dots
        slides.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (index === 0) dot.classList.add('active');
            dot.addEventListener('click', () => {
                goToSlide(index);
                resetInterval();
            });
            if (dotsContainer) dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        function updateSlider() {
            sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        function goToSlide(index) {
            currentSlide = (index + totalSlides) % totalSlides;
            updateSlider();
        }

        function nextSlide() {
            goToSlide(currentSlide + 1);
        }

        function prevSlide() {
            goToSlide(currentSlide - 1);
        }

        // Event listeners
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                nextSlide();
                resetInterval();
            });
        }
        
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                prevSlide();
                resetInterval();
            });
        }

        // Auto cycling
        function startInterval() {
            slideInterval = setInterval(nextSlide, 5000); // cycle every 5 seconds
        }

        function resetInterval() {
            clearInterval(slideInterval);
            startInterval();
        }

        startInterval();
    }

    // Tabs System (Stages/Alumnos Procedures)
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    if (tabBtns.length > 0) {
        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tab;
                
                // Set active button
                tabBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                // Set active content
                tabContents.forEach(content => {
                    if (content.id === target) {
                        content.classList.add('active');
                    } else {
                        content.classList.remove('active');
                    }
                });
            });
        });
    }

    // Accordion System (Syllabus/Curriculum)
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(header => {
            header.addEventListener('click', () => {
                const parent = header.parentElement;
                
                // Toggle active class on parent
                parent.classList.toggle('active');
            });
        });
    }
    // Lightbox for Plan de Estudios image
    const planImageWrappers = document.querySelectorAll('.plan-image-wrapper');

    planImageWrappers.forEach(wrapper => {
        wrapper.addEventListener('click', () => {
            wrapper.classList.toggle('expanded');
        });
    });

    // Close lightbox with Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            planImageWrappers.forEach(wrapper => {
                wrapper.classList.remove('expanded');
            });
        }
    });
});
