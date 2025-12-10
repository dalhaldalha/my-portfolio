document.addEventListener('DOMContentLoaded', () => {

    // Typing Effect for Hero Name
    const typedElement = document.getElementById('typed-name');
    if (typedElement) {
        const textToType = 'Dalha.';
        let charIndex = 0;

        function typeText() {
            if (charIndex < textToType.length) {
                typedElement.textContent += textToType.charAt(charIndex);
                charIndex++;
                setTimeout(typeText, 150);
            }
        }

        // Start typing after a short delay
        setTimeout(typeText, 500);
    }

    // Theme Toggle
    const themeToggle = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;

    // Check for saved user preference, if any, on load of the website
    const currentTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;

    if (currentTheme) {
        htmlElement.setAttribute('data-theme', currentTheme);
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            let theme = htmlElement.getAttribute('data-theme');
            if (theme === 'light') {
                htmlElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'dark');
            } else {
                htmlElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
            }
        });
    }

    // Mobile Menu Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            mobileToggle.classList.toggle('active');

            // Prevent body scroll when menu is open
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });

        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                mobileToggle.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }

    // Preloader
    const preloader = document.getElementById('preloader');
    if (preloader) {
        // Force hide after 3 seconds max, regardless of loading state
        // This prevents the user from staring at a loader if images take too long
        const safetyTimeout = setTimeout(() => {
            hidePreloader();
        }, 3000);

        window.addEventListener('load', () => {
            clearTimeout(safetyTimeout); // If loaded faster, cancel safety
            setTimeout(hidePreloader, 500); // Small aesthetic delay
        });

        function hidePreloader() {
            preloader.style.opacity = '0';
            preloader.style.visibility = 'hidden';
        }
    }


    // Smooth Scroll for Navigation Links
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');

            // Skip if it's just "#", modal links, or has modal-link class
            if (href === '#' || href === '#project-modal' || link.classList.contains('modal-link')) return;

            e.preventDefault();

            const targetId = href.substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                // Close mobile menu if open
                const mobileMenu = document.querySelector('.mobile-menu');
                if (mobileMenu && mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    const mobileToggle = document.querySelector('.mobile-toggle');
                    if (mobileToggle) {
                        mobileToggle.classList.remove('active');
                    }
                    document.body.style.overflow = '';
                }

                // Smooth scroll to section
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // Update URL without jumping
                history.pushState(null, null, href);
            }
        });
    });

    // Scroll Reveal
    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');

                // Animate skill bars if the target is a skill bar item
                if (entry.target.classList.contains('skill-bar-item')) {
                    const progressBar = entry.target.querySelector('.skill-bar-fill');
                    if (progressBar) {
                        const level = progressBar.getAttribute('data-level');
                        progressBar.style.width = level + '%';
                    }
                }
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in, .skill-bar-item').forEach(el => {
        observer.observe(el);
    });

    // --- Modal & Carousel Logic ---
    const modal = document.getElementById('project-modal');
    const closeModal = document.querySelector('.close-modal');
    const viewBtns = document.querySelectorAll('.view-project-btn');

    // Carousel Elements
    const track = document.getElementById('modal-carousel-track');
    const dotsContainer = document.getElementById('modal-carousel-dots');
    const nextBtn = document.querySelector('.next-btn');
    const prevBtn = document.querySelector('.prev-btn');

    let currentSlide = 0;
    let slides = [];

    if (modal && viewBtns) {
        // Open Modal
        viewBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const title = btn.getAttribute('data-title');
                const category = btn.getAttribute('data-category');
                const details = btn.getAttribute('data-details');
                const tech = JSON.parse(btn.getAttribute('data-tech'));
                const images = JSON.parse(btn.getAttribute('data-images'));
                const link = btn.getAttribute('data-link');

                // Populate Info
                document.getElementById('modal-title').textContent = title;
                document.getElementById('modal-category').textContent = category;
                document.getElementById('modal-details').textContent = details;
                document.getElementById('modal-link').href = link;

                // Populate Tech Stack
                const techContainer = document.getElementById('modal-tech-stack');
                techContainer.innerHTML = '';
                tech.forEach(t => {
                    const span = document.createElement('span');
                    span.className = 'tech-tag';
                    span.textContent = t;
                    techContainer.appendChild(span);
                });

                // Setup Carousel
                setupCarousel(images, title);

                // Show Modal
                modal.style.display = 'flex';
                // Small delay to allow display:flex to apply before adding opacity class for transition
                setTimeout(() => {
                    modal.classList.add('show');
                }, 10);
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            });
        });

        // Close Modal
        function hideModal() {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }, 300); // Match transition duration
        }

        closeModal.addEventListener('click', hideModal);

        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                hideModal();
            }
        });

        // Carousel Logic
        function setupCarousel(images, title) {
            track.innerHTML = '';
            dotsContainer.innerHTML = '';
            currentSlide = 0;

            // If no images, use placeholder
            if (!images || images.length === 0) {
                images = ['assets/img/placeholder.png']; // Ensure you have a placeholder or handle empty
            }

            images.forEach((imgSrc, index) => {
                // Create Slide
                const slide = document.createElement('div');
                slide.className = 'carousel-slide';
                const img = document.createElement('img');
                img.src = imgSrc;
                img.alt = `${title} - Image ${index + 1}`;
                slide.appendChild(img);
                track.appendChild(slide);

                // Create Dot
                const dot = document.createElement('div');
                dot.className = `dot ${index === 0 ? 'active' : ''}`;
                dot.addEventListener('click', () => goToSlide(index));
                dotsContainer.appendChild(dot);
            });

            slides = track.children;
            updateCarousel();
        }

        function updateCarousel() {
            track.style.transform = `translateX(-${currentSlide * 100}%)`;

            // Update dots
            const dots = dotsContainer.children;
            Array.from(dots).forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        function goToSlide(index) {
            currentSlide = index;
            updateCarousel();
        }

        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide + 1) % slides.length;
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateCarousel();
        });
    }
});
