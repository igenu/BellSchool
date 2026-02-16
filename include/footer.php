    <!-- Footer -->
    <footer class="bg-green-900 text-white pt-14 pb-8">
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- About -->
                <div class="space-y-6">
                    <div class="flex items-center gap-3 bg-white/10 p-4 rounded-xl w-fit">
                        <img src="images/Bell-Logo_1.jpg" alt="Bell School Logo"
                            class="h-12 w-auto bg-white rounded-md p-1">
                        <div>
                            <h3 class="text-white font-bold text-lg">Bell School</h3>
                            <p class="text-white/60 text-[10px] uppercase tracking-wider">Est. 1992</p>
                        </div>
                    </div>
                    <p class="text-white/70 text-sm leading-relaxed">
                        A caring and collaborative learning institution, preparing students for personal and
                        professional success in the global community.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-dark transition-all">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-dark transition-all">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-dark transition-all">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary hover:text-dark transition-all">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-primary font-bold text-xl mb-6">Quick Links</h4>
                    <ul class="space-y-3 text-sm text-white/80">
                        <li><a href="about.html"
                                class="hover:text-primary transition-colors hover:translate-x-1 inline-block">About
                                Us</a></li>
                        <li><a href="academic.html"
                                class="hover:text-primary transition-colors hover:translate-x-1 inline-block">Academics</a>
                        </li>
                        <li><a href="admission.html"
                                class="hover:text-primary transition-colors hover:translate-x-1 inline-block">Admission
                                Process</a></li>
                        <li><a href="facilities.html"
                                class="hover:text-primary transition-colors hover:translate-x-1 inline-block">Campus
                                Facilities</a></li>
                        <li><a href="gallery.html"
                                class="hover:text-primary transition-colors hover:translate-x-1 inline-block">Photo
                                Gallery</a></li>
                        <li><a href="careers.html"
                                class="hover:text-primary transition-colors hover:translate-x-1 inline-block">Careers</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-primary font-bold text-xl mb-6">Contact Us</h4>
                    <ul class="space-y-4 text-sm text-white/80">
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone-alt text-primary shrink-0"></i>
                            <a href="tel:+914622574117" class="hover:text-white transition-colors">+91 (462) 257
                                4117</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fab fa-whatsapp text-primary shrink-0"></i>
                            <a href="tel:+919944674550" class="hover:text-white transition-colors">+91 99446 74550</a>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="far fa-envelope text-primary shrink-0"></i>
                            <a href="mailto:bellschool1992@gmail.com"
                                class="hover:text-white transition-colors">bellschool1992@gmail.com</a>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-primary shrink-0 mt-1"></i>
                            <span>Tiruchendur Road,<br> Kamaraj Nagar, Palayankottai,<br> Tirunelveli - 627 002</span>
                        </li>
                    </ul>
                </div>

                <!-- School Hours -->
                <div>
                    <h4 class="text-primary font-bold text-xl mb-6">School Hours</h4>
                    <div class="bg-white/5 p-6 rounded-lg space-y-3">
                        <div>
                            <p class="text-[10px] text-white/60 mb-1 uppercase tracking-widest">Pre-KG to UKG</p>
                            <p class="text-sm font-medium">9:00 AM - 3:00 PM</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-white/60 mb-1 uppercase tracking-widest">Classes 1 to 9</p>
                            <p class="text-sm font-medium">8:45 AM - 4:10 PM</p>
                        </div>
                        <div>
                            <p class="text-[10px] text-white/60 mb-1 uppercase tracking-widest">Classes 10 to 12</p>
                            <p class="text-sm font-medium">8:00 AM - 5:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-[10px] text-white/40 uppercase tracking-widest">
                    &copy; <span id="current-year"></span> Bell Matriculation Higher Secondary School. All rights
                    reserved.
                </p>
                <p class="text-[10px] text-white/40 mt-2">
                    Designed with <i class="fas fa-heart text-red-500"></i> for EDU WEB TECHNOLOGIES
                </p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop"
        class="fixed bottom-8 right-8 w-14 h-14 bg-secondary text-white rounded-full shadow-2xl hidden hover:bg-green-700 transition-all hover:scale-110 z-40">
        <i class="fas fa-arrow-up"></i>
    </button>




    <script>
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const title = document.getElementById('slider-title');
        const desc = document.getElementById('slider-desc');

        const content = [
            {
                t: "<span>Empowering Minds,</span><span class='text-primary mt-4 block'>Enriching Souls</span>",
                d: "Bell Matriculation Higher Secondary School provides a foundation of academic excellence combined with strong moral values."
            },
            {
                t: "<span>30 Years of</span><span class='text-primary mt-4 block'>Academic Excellence</span>",
                d: "Consistently producing state and district ranks through dedicated teaching and modern infrastructure."
            },
            {
                t: "<span>A Legacy of</span><span class='text-primary mt-4 block'>Holistic Growth</span>",
                d: "Nurturing talents in sports, arts, and character building to prepare students for the global stage."
            }
        ];

        let currentSlide = 0;

        function updateSlider(index) {
            // Reset Classes
            slides.forEach(s => s.style.opacity = '0');
            dots.forEach(d => d.classList.remove('active'));

            // Update Content
            slides[index].style.opacity = '1';
            dots[index].classList.add('active');

            // Text Animation Trigger
            title.classList.remove('hero-text-anim');
            desc.classList.remove('hero-text-anim');

            void title.offsetWidth; // Trigger reflow

            title.innerHTML = content[index].t;
            desc.innerText = content[index].d;

            title.classList.add('hero-text-anim');
            desc.classList.add('hero-text-anim');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlider(currentSlide);
        }

        function goToSlide(index) {
            currentSlide = index;
            updateSlider(currentSlide);
        }

        // Auto Play
        setInterval(nextSlide, 5000);

        // Initial Start
        updateSlider(0);
    </script>
    <script>
        // Header scroll effect logic
        const header = document.getElementById('main-header');
        const topBar = document.getElementById('top-bar');
        const navbar = document.getElementById('navbar');
        const navLogo = document.getElementById('nav-logo');
        const brandName = document.getElementById('brand-name');
        const brandSubtext = document.getElementById('brand-subtext');

        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            // 1. Handle Hide/Show on Scroll Direction
            if (currentScrollY > lastScrollY && currentScrollY > 150) {
                // Scrolling Down - Hide Header
                header.classList.add('header-hidden');
            } else {
                // Scrolling Up - Show Header
                header.classList.remove('header-hidden');
            }

            // 2. Handle Shrink/Compact Design
            if (currentScrollY > 20) {
                // Compact Mode
                topBar.style.height = '0px';
                topBar.style.opacity = '0';
                navbar.classList.remove('py-4');
                navbar.classList.add('py-2', 'header-scrolled');

                // Adjust Brand Branding
                if (navLogo) navLogo.style.height = '37px';
                if (brandName) brandName.classList.add('text-lg');
                if (brandSubtext) brandSubtext.classList.add('hidden');
            } else {
                // Full Mode
                topBar.style.height = 'auto';
                topBar.style.opacity = '1';
                navbar.classList.remove('py-2', 'header-scrolled');
                navbar.classList.add('py-4');

                if (navLogo) navLogo.style.height = '44px'; // Original size
                if (brandName) brandName.classList.remove('text-lg');
                if (brandSubtext) brandSubtext.classList.remove('hidden');

                // Ensure header is visible at the very top
                header.classList.remove('header-hidden');
            }

            lastScrollY = currentScrollY;
        });
    </script>
    <script>
        // Set current year
        document.getElementById('current-year').textContent = new Date().getFullYear();





        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        mobileMenuToggle.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');

            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.classList.replace('fa-bars', 'fa-times');
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.replace('fa-times', 'fa-bars');
            }
        });

        // Close mobile menu on click outside
        document.addEventListener('click', (e) => {
            if (!header.contains(e.target) && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.replace('fa-times', 'fa-bars');
            }
        });

        // Intersection Observer for scroll-triggered animations
        const observerOptions = {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Add staggered delay for multiple cards in the same section
                    if (entry.target.classList.contains('feature-card') ||
                        entry.target.classList.contains('card-hover')) {
                        const cards = entry.target.parentElement.querySelectorAll('.feature-card, .card-hover');
                        cards.forEach((card, index) => {
                            setTimeout(() => {
                                card.classList.add('animate-in');
                            }, index * 100);
                        });
                    } else {
                        entry.target.classList.add('animate-in');
                    }

                    // Trigger counter animation if this element has counters
                    const counters = entry.target.querySelectorAll('.counter');
                    if (counters.length > 0) {
                        animateCounters(counters);
                    }

                    // Unobserve after animation to prevent re-triggering
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.addEventListener('DOMContentLoaded', () => {
            // Observe all sections
            const sections = document.querySelectorAll('section:not(:first-of-type)');
            sections.forEach(section => {
                observer.observe(section);
            });

            // Observe animated elements (excluding hero section)
            const animatedElements = document.querySelectorAll(
                'section:not(:first-of-type) .animate-fadeInUp, section:not(:first-of-type) .animate-slideInLeft, section:not(:first-of-type) .animate-slideInRight, section:not(:first-of-type) .animate-scaleIn, .feature-card, .card-hover'
            );
            animatedElements.forEach(el => {
                observer.observe(el);
            });
        });

        // Counter animation with tracking
        const animatedCounters = new Set();

        const animateCounters = (counters) => {
            counters.forEach(counter => {
                if (animatedCounters.has(counter)) return;
                animatedCounters.add(counter);

                const target = parseInt(counter.getAttribute('data-target'));
                const speed = 200;
                const increment = target / speed;
                let current = 0;

                const updateCounter = () => {
                    if (current < target) {
                        current += increment;
                        counter.textContent = Math.ceil(current);
                        setTimeout(updateCounter, 10);
                    } else {
                        counter.textContent = target;
                    }
                };

                updateCounter();
            });
        };

        // Back to top button
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.remove('hidden');
            } else {
                backToTop.classList.add('hidden');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>








</body>

</html>