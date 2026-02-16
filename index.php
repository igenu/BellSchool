<?php include('include/header.php'); ?>

<!-- <div class="h-28 md:h-0"></div> -->

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-start overflow-hidden bg-secondary">

    <div id="hero-slider" class="absolute inset-0 z-0">
        <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-100">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="absolute inset-0 bg-no-repeat bg-cover bg-center"
                style="background-image: url('images/Bell-School-car-1.png');background-position: top;"></div>
        </div>
        <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="absolute inset-0 bg-no-repeat bg-cover bg-center"
                style="background-image: url('images/Bell-School-building.png');background-position: bottom;">
            </div>
        </div>
        <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="absolute inset-0 bg-no-repeat bg-cover bg-center"
                style="background-image: url('images/Bell-School-building-3.png');">
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-20 text-white py-20">
        <div class="max-w-6xl text-center">
            <div id="hero-content">
                <div class="flex items-center justify-center gap-4 mb-6 animate-slideInLeft">
                    <span class="glass-effect p-3 rounded-full">
                        <img src="images/School-Torch-Logo.png" alt="Torch Logo" class="h-12 w-auto">
                    </span>
                    <span class="text-primary font-bold tracking-widest uppercase text-sm">Established 1992</span>
                </div>

                <h1 class="text-3xl md:text-4xl font-bold leading-tight mb-4" id="slider-title">
                    <span class="block">Empowering Minds,</span>
                    <span class="text-primary mt-4 block">Enriching Souls</span>
                </h1>

                <p class="text-[14px] text-white/90 mb-10 max-w-3xl leading-relaxed font-light" id="slider-desc">
                    Bell Matriculation Higher Secondary School provides a foundation of academic excellence combined
                    with strong moral values.
                </p>

                <div class="flex flex-wrap gap-4 justify-center">
                    <a href="#admission"
                        class="px-8 py-3 text-[12px] bg-primary text-secondary font-bold rounded-full hover:bg-white hover:scale-105 transition-all shadow-xl inline-flex items-center gap-2">
                        <i class="fas fa-graduation-cap"></i> Admissions Open 2026
                    </a>
                    <a href="#about"
                        class="px-8 py-3 text-[12px] glass-effect text-white font-bold rounded-full hover:bg-white/20 transition-all inline-flex items-center gap-2">
                        Explore Our Legacy <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-12 right-12 z-30 flex gap-3">
        <button onclick="goToSlide(0)"
            class="dot w-3 h-3 rounded-full bg-white/30 hover:bg-white transition-all"></button>
        <button onclick="goToSlide(1)"
            class="dot w-3 h-3 rounded-full bg-white/30 hover:bg-white transition-all"></button>
        <button onclick="goToSlide(2)"
            class="dot w-3 h-3 rounded-full bg-white/30 hover:bg-white transition-all"></button>
    </div>

    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-20">
        <i class="fas fa-chevron-down text-white text-2xl opacity-50"></i>
    </div>
</section>



<!-- About Section -->
<section id="about" class="py-14 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

        <div class="reveal-left opacity-0 transition-all duration-1000 ease-out">
            <span class="text-primary font-bold uppercase tracking-widest text-sm mb-4 inline-block">
                About Bell School
            </span>
            <div class="section-divider mb-6 mx-0 w-20 h-1 bg-primary"></div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-secondary leading-tight">
                A Legacy of <span class="text-primary">Excellence</span> Since 1992
            </h2>

            <div class="text-gray-700 space-y-5 leading-relaxed text-base">
                <p>
                    Founded by <strong class="text-secondary">Sri. A. Chelladhurai</strong> and supported by
                    <strong class="text-secondary">Mrs. Lily Darling Chelladhurai</strong>,
                    Bell School stands as an inspiring monument of learning and ethics.
                </p>
                <p>
                    Our <strong class="text-secondary">"Golden Triangle"</strong> partnership between faculty,
                    students, and parents creates a nurturing ecosystem for holistic development.
                </p>
            </div>

            <div class="mt-10 grid md:grid-cols-2 gap-6">
                <div
                    class="reveal-item opacity-0 translate-y-10 transition-all duration-700 delay-300 bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl border-2 border-orange-200 shadow-sm hover:shadow-md">
                    <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-eye text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-accent mb-2 text-lg">Our Vision</h4>
                    <p class="text-sm text-gray-700 leading-relaxed">To be a community of life-long learners
                        demonstrating values for global citizenship.</p>
                </div>

                <div
                    class="reveal-item opacity-0 translate-y-10 transition-all duration-700 delay-500 bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-2xl border-2 border-blue-200 shadow-sm hover:shadow-md">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-4">
                        <i class="fas fa-bullseye text-white text-xl"></i>
                    </div>
                    <h4 class="font-bold text-blue-600 mb-2 text-lg">Our Mission</h4>
                    <p class="text-sm text-gray-700 leading-relaxed">Ensuring each student achieves intellectual and
                        personal excellence for unique pathways.</p>
                </div>
            </div>
        </div>

        <div class="reveal-right opacity-0 transition-all duration-1000 ease-out relative">
            <div class="grid grid-cols-2 gap-6">
                <div class="space-y-6">
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                        <img src="images/Bell-School-car-1.png" class="w-full h-72 object-cover" alt="Learning">
                    </div>
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                        <img src="images/Bell-School-about-1.png" class="w-full h-48 object-cover" alt="Students">
                    </div>
                </div>
                <div class="space-y-6 mt-12">
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                        <img src="images/Bell-School-about-2.png" class="w-full h-48 object-cover" alt="Lab">
                    </div>
                    <div
                        class="rounded-3xl overflow-hidden shadow-2xl hover:scale-105 transition-transform duration-500">
                        <img src="images/Bell-School-about-3.png" class="w-full h-72 object-cover" alt="Campus">
                    </div>
                </div>
            </div>

            <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary/10 rounded-full blur-3xl -z-10 animate-pulse">
            </div>
            <div
                class="absolute -bottom-10 -left-10 w-40 h-40 bg-secondary/20 rounded-full blur-3xl -z-10 animate-pulse">
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const observerOptions = {
                threshold: 0.2 // Trigger when 20% of the section is visible
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate the left text content
                        const leftSide = entry.target.querySelector('.reveal-left');
                        leftSide.classList.remove('opacity-0', '-translate-x-20');
                        leftSide.classList.add('opacity-100', 'translate-x-0');

                        // Animate the right image grid
                        const rightSide = entry.target.querySelector('.reveal-right');
                        rightSide.classList.remove('opacity-0', 'translate-x-20');
                        rightSide.classList.add('opacity-100', 'translate-x-0');

                        // Animate the internal Vision/Mission boxes
                        const items = entry.target.querySelectorAll('.reveal-item');
                        items.forEach(item => {
                            item.classList.remove('opacity-0', 'translate-y-10');
                            item.classList.add('opacity-100', 'translate-y-0');
                        });

                        // Stop observing once animation is done
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Start watching the About section
            const aboutSection = document.querySelector('#about');

            // Initial State Setup (Manual helper)
            aboutSection.querySelector('.reveal-left').classList.add('-translate-x-20');
            aboutSection.querySelector('.reveal-right').classList.add('translate-x-20');

            observer.observe(aboutSection);
        });
    </script>
</section>

<!-- Stats Section with Counter Animation -->
<section id="stats-section" class="py-14 bg-green-900 relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div
            class="reveal-stats opacity-0 translate-y-10 transition-all duration-1000 ease-out grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <div
                class="group p-6 rounded-2xl bg-white shadow-lg transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl hover:ring-2 hover:ring-primary/20 cursor-default">
                <div
                    class="w-[60px] h-[60px] mx-auto mb-4 bg-gradient-to-br from-secondary to-green-600 rounded-2xl flex items-center justify-center shadow-xl transition-transform duration-500 group-hover:rotate-[360deg] group-hover:scale-110">
                    <i class="fas fa-graduation-cap text-xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold mb-2 text-secondary group-hover:text-green-700 transition-colors">
                    <span class="counter" data-target="32">0</span>+
                </h3>
                <p class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Years of Excellence</p>
            </div>

            <div
                class="group p-6 rounded-2xl bg-white shadow-lg transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl hover:ring-2 hover:ring-primary/20 cursor-default">
                <div
                    class="w-[60px] h-[60px] mx-auto mb-4 bg-gradient-to-br from-primary to-yellow-500 rounded-2xl flex items-center justify-center shadow-xl transition-transform duration-500 group-hover:rotate-[360deg] group-hover:scale-110">
                    <i class="fas fa-award text-xl text-dark"></i>
                </div>
                <h3 class="text-3xl font-bold mb-2 text-secondary group-hover:text-green-700 transition-colors">
                    <span class="counter" data-target="100">0</span>%
                </h3>
                <p class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Pass Percentage</p>
            </div>

            <div
                class="group p-6 rounded-2xl bg-white shadow-lg transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl hover:ring-2 hover:ring-primary/20 cursor-default">
                <div
                    class="w-[60px] h-[60px] mx-auto mb-4 bg-gradient-to-br from-accent to-orange-600 rounded-2xl flex items-center justify-center shadow-xl transition-transform duration-500 group-hover:rotate-[360deg] group-hover:scale-110">
                    <i class="fas fa-users text-xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold mb-2 text-secondary group-hover:text-green-700 transition-colors">
                    <span class="counter" data-target="1500">0</span>+
                </h3>
                <p class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">Proud Alumni</p>
            </div>

            <div
                class="group p-6 rounded-2xl bg-white shadow-lg transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl hover:ring-2 hover:ring-primary/20 cursor-default">
                <div
                    class="w-[60px] h-[60px] mx-auto mb-4 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-xl transition-transform duration-500 group-hover:rotate-[360deg] group-hover:scale-110">
                    <i class="fas fa-trophy text-xl text-white"></i>
                </div>
                <h3 class="text-3xl font-bold mb-2 text-secondary group-hover:text-green-700 transition-colors">
                    <span class="counter" data-target="50">0</span>+
                </h3>
                <p class="text-gray-500 uppercase tracking-widest text-[10px] font-bold">State Rank Holders</p>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const statsSection = document.querySelector('#stats-section');
            const counters = document.querySelectorAll('.counter');
            const speed = 200; // Lower is faster

            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // 1. Reveal the boxes
                        const grid = entry.target.querySelector('.reveal-stats');
                        grid.classList.remove('opacity-0', 'translate-y-10');
                        grid.classList.add('opacity-100', 'translate-y-0');

                        // 2. Start the counter for each number
                        counters.forEach(counter => {
                            const animate = () => {
                                const value = +counter.getAttribute('data-target');
                                const data = +counter.innerText;
                                const time = value / speed;

                                if (data < value) {
                                    counter.innerText = Math.ceil(data + time);
                                    setTimeout(animate, 20);
                                } else {
                                    counter.innerText = value;
                                }
                            };
                            animate();
                        });

                        // Stop observing once animation has run
                        statsObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 }); // Trigger when 30% visible

            statsObserver.observe(statsSection);
        });
    </script>
</section>

<!-- Salient Features Section -->
<section id="features-section" class="py-14 bg-slate-50 overflow-hidden pt-20">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-24 reveal-card opacity-0 transition-all duration-700">
            <span
                class="px-4 py-1.5 bg-secondary/10 text-secondary rounded-full text-[11px] font-bold uppercase tracking-widest inline-block mb-4 mr-3">
                What Sets Us Apart
            </span>
            <h2 class="text-xl md:text-3xl font-bold mb-6 relative inline-block text-secondary">
                Salient Features
                <span class="absolute -bottom-2 left-0 w-1/2 h-1 bg-primary rounded-full"></span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-[100px] gap-x-8">

            <div
                class="reveal-card opacity-0 translate-y-10 transition-all duration-700 delay-[100ms] group relative bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 border border-slate-100">
                <div class="absolute inset-0 z-0 rounded-[2.5rem] overflow-hidden">
                    <div
                        class="absolute inset-0 opacity-[0.06] group-hover:opacity-[0.09] transition-opacity duration-500">
                        <img src="images/Bell-School-about-1.png"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="background">
                    </div>
                </div>
                <div
                    class="absolute -top-8 left-10 z-20 w-16 h-16 bg-gradient-to-br from-secondary to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500">
                    <i class="fas fa-book-open text-2xl text-white"></i>
                </div>
                <div class="relative z-10 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-slate-800 group-hover:text-secondary transition-colors">
                        Comprehensive Curriculum</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Balanced academic program from Kindergarten to
                        Grade 12, integrating traditional values with modern pedagogy.</p>
                </div>
            </div>

            <div
                class="reveal-card opacity-0 translate-y-10 transition-all duration-700 delay-[200ms] group relative bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 border border-slate-100">
                <div class="absolute inset-0 z-0 rounded-[2.5rem] overflow-hidden">
                    <div
                        class="absolute inset-0 opacity-[0.06] group-hover:opacity-[0.09] transition-opacity duration-500">
                        <img src="images/Bell-School-about-2.png"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="background">
                    </div>
                </div>
                <div
                    class="absolute -top-8 left-10 z-20 w-16 h-16 bg-gradient-to-br from-primary to-yellow-500 rounded-2xl flex items-center justify-center shadow-lg group-hover:-rotate-12 transition-transform duration-500">
                    <i class="fas fa-microscope text-2xl text-slate-900"></i>
                </div>
                <div class="relative z-10 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-slate-800 group-hover:text-primary transition-colors">
                        State-of-the-Art Labs</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Modern Physics, Chemistry, Biology, and
                        Digital Labs equipped with latest technology and safety standards.</p>
                </div>
            </div>

            <div
                class="reveal-card opacity-0 translate-y-10 transition-all duration-700 delay-[300ms] group relative bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 border border-slate-100">
                <div class="absolute inset-0 z-0 rounded-[2.5rem] overflow-hidden">
                    <div
                        class="absolute inset-0 opacity-[0.06] group-hover:opacity-[0.09] transition-opacity duration-500">
                        <img src="images/Bell-School-about-3.png"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="background">
                    </div>
                </div>
                <div
                    class="absolute -top-8 left-10 z-20 w-16 h-16 bg-gradient-to-br from-accent to-orange-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500">
                    <i class="fas fa-running text-2xl text-white"></i>
                </div>
                <div class="relative z-10 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-slate-800 group-hover:text-accent transition-colors">
                        Sports Excellence</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">State and district-level champions in
                        athletics, football, and various indoor/outdoor competitive sports.</p>
                </div>
            </div>

            <div
                class="reveal-card opacity-0 translate-y-10 transition-all duration-700 delay-[400ms] group relative bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 border border-slate-100">
                <div class="absolute inset-0 z-0 rounded-[2.5rem] overflow-hidden">
                    <div
                        class="absolute inset-0 opacity-[0.06] group-hover:opacity-[0.09] transition-opacity duration-500">
                        <img src="images/Bell-School-about-4.png"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="background">
                    </div>
                </div>
                <div
                    class="absolute -top-8 left-10 z-20 w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:-rotate-12 transition-transform duration-500">
                    <i class="fas fa-users-cog text-2xl text-white"></i>
                </div>
                <div class="relative z-10 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-slate-800 group-hover:text-blue-600 transition-colors">
                        Expert Faculty</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Qualified, passionate educators dedicated to
                        nurturing each student's unique potential and academic excellence.</p>
                </div>
            </div>

            <div
                class="reveal-card opacity-0 translate-y-10 transition-all duration-700 delay-[500ms] group relative bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 border border-slate-100">
                <div class="absolute inset-0 z-0 rounded-[2.5rem] overflow-hidden">
                    <div
                        class="absolute inset-0 opacity-[0.06] group-hover:opacity-[0.09] transition-opacity duration-500">
                        <img src="images/Bell-School-car-1.png"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="background">
                    </div>
                </div>
                <div
                    class="absolute -top-8 left-10 z-20 w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500">
                    <i class="fas fa-palette text-2xl text-white"></i>
                </div>
                <div class="relative z-10 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-slate-800 group-hover:text-purple-600 transition-colors">
                        Creative Arts</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Digital Lab with photography, animation, and
                        traditional arts to foster creativity in every student.</p>
                </div>
            </div>

            <div
                class="reveal-card opacity-0 translate-y-10 transition-all duration-700 delay-[600ms] group relative bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 border border-slate-100">
                <div class="absolute inset-0 z-0 rounded-[2.5rem] overflow-hidden">
                    <div
                        class="absolute inset-0 opacity-[0.06] group-hover:opacity-[0.09] transition-opacity duration-500">
                        <img src="images/Bell-School-about-1.png"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            alt="background">
                    </div>
                </div>
                <div
                    class="absolute -top-8 left-10 z-20 w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:-rotate-12 transition-transform duration-500">
                    <i class="fas fa-hands-helping text-2xl text-white"></i>
                </div>
                <div class="relative z-10 mt-4">
                    <h3 class="text-xl font-bold mb-4 text-slate-800 group-hover:text-emerald-600 transition-colors">
                        Community Service</h3>
                    <p class="text-slate-500 leading-relaxed text-sm">Active involvement in charity and
                        environmental drives, instilling deep-rooted social responsibility.</p>
                </div>
            </div>

        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const featureObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const cards = entry.target.querySelectorAll('.reveal-card');
                        cards.forEach(card => {
                            card.classList.remove('opacity-0', 'translate-y-10');
                            card.classList.add('opacity-100', 'translate-y-0');
                        });
                        // Stop observing after the animation has fired once
                        featureObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 }); // Triggers when 15% of the section is visible

            const targetSection = document.querySelector('#features-section');
            if (targetSection) featureObserver.observe(targetSection);
        });
    </script>
</section>


<!-- Salient Features Section -->
<section class="py-14 bg-green-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <span
                class="text-primary font-bold uppercase tracking-widest text-xs mb-3 inline-block bg-white px-4 py-1 rounded-full shadow-sm">What
                We Do</span>
            <h2 class="text-2xl md:text-3xl font-bold text-secondary mb-4">Salient Facilities</h2>
            <div class="w-20 h-1 bg-primary mx-auto rounded-full mb-6"></div>
            <p class="text-gray-600 text-sm max-w-2xl mx-auto leading-relaxed">
                Discover the world-class infrastructure and specialized programs that make Bell School a leader in
                holistic student development.
            </p>
        </div>

        <div class="relative group">
            <div
                class="absolute inset-y-0 left-0 w-20 bg-gradient-to-r from-green-50 to-transparent z-10 pointer-events-none">
            </div>
            <div
                class="absolute inset-y-0 right-0 w-20 bg-gradient-to-l from-green-50 to-transparent z-10 pointer-events-none">
            </div>

            <div id="features-slider" class="flex gap-6 overflow-x-hidden py-6 cursor-grab active:cursor-grabbing">
                <div
                    class="feature-card min-w-[300px] md:min-w-[380px] bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-white group/card">
                    <div class="relative h-72 overflow-hidden">
                        <img src="images/Bell-School-about-1.png" alt="Yoga"
                            class="w-full h-full object-cover group-hover/card:scale-110 transition-transform duration-1000">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-secondary/20 to-transparent flex items-end p-8">
                            <div>
                                <span
                                    class="text-primary text-xs font-bold uppercase tracking-widest mb-2 block opacity-0 group-hover/card:opacity-100 transition-all transform translate-y-4 group-hover/card:translate-y-0">Wellness</span>
                                <h4 class="text-2xl font-bold text-white">Yoga Classes</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="feature-card min-w-[300px] md:min-w-[380px] bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-white group/card">
                    <div class="relative h-72 overflow-hidden">
                        <img src="images/Bell-School-about-2.png" alt="Robotics"
                            class="w-full h-full object-cover group-hover/card:scale-110 transition-transform duration-1000">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-secondary/20 to-transparent flex items-end p-8">
                            <div>
                                <span
                                    class="text-primary text-xs font-bold uppercase tracking-widest mb-2 block opacity-0 group-hover/card:opacity-100 transition-all transform translate-y-4 group-hover/card:translate-y-0">Technology</span>
                                <h4 class="text-2xl font-bold text-white">Robotics Lab</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="feature-card min-w-[300px] md:min-w-[380px] bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-white group/card">
                    <div class="relative h-72 overflow-hidden">
                        <img src="images/Bell-School-about-3.png" alt="Play Area"
                            class="w-full h-full object-cover group-hover/card:scale-110 transition-transform duration-1000">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-secondary/20 to-transparent flex items-end p-8">
                            <div>
                                <span
                                    class="text-primary text-xs font-bold uppercase tracking-widest mb-2 block opacity-0 group-hover/card:opacity-100 transition-all transform translate-y-4 group-hover/card:translate-y-0">Recreation</span>
                                <h4 class="text-2xl font-bold text-white">Lush Green Play Area</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="feature-card min-w-[300px] md:min-w-[380px] bg-white rounded-[2rem] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 border border-white group/card">
                    <div class="relative h-72 overflow-hidden">
                        <img src="images/Bell-School-about-4.png" alt="Transport"
                            class="w-full h-full object-cover group-hover/card:scale-110 transition-transform duration-1000">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-secondary/90 via-secondary/20 to-transparent flex items-end p-8">
                            <div>
                                <span
                                    class="text-primary text-xs font-bold uppercase tracking-widest mb-2 block opacity-0 group-hover/card:opacity-100 transition-all transform translate-y-4 group-hover/card:translate-y-0">Safety</span>
                                <h4 class="text-2xl font-bold text-white">Secure Transport</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center gap-4 mt-8">
                <button onclick="moveSlider('left')"
                    class="w-12 h-12 rounded-full border border-secondary/20 flex items-center justify-center text-secondary hover:bg-secondary hover:text-white transition-all">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button onclick="moveSlider('right')"
                    class="w-12 h-12 rounded-full border border-secondary/20 flex items-center justify-center text-secondary hover:bg-secondary hover:text-white transition-all">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="facilities.html"
                class="inline-flex items-center gap-3 px-10 py-4 bg-secondary text-white font-bold rounded-full hover:bg-dark hover:-translate-y-1 transition-all shadow-xl">
                Explore All Facilities
                <span
                    class="w-6 h-6 bg-primary text-dark rounded-full flex items-center justify-center text-[10px] group-hover:rotate-45 transition-transform">
                    <i class="fas fa-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
    <script>
        const slider = document.getElementById('features-slider');
        let isPaused = false;
        let isManualScrolling = false;
        let autoScrollSpeed = 0.8;

        // 1. Clone cards for infinite effect
        const cards = [...slider.children];
        cards.forEach(card => {
            const clone = card.cloneNode(true);
            slider.appendChild(clone);
        });

        // 2. Enhanced Animation Loop
        function animate() {
            // Only auto-scroll if NOT paused AND NOT manually jumping
            if (!isPaused && !isManualScrolling) {
                slider.scrollLeft += autoScrollSpeed;

                if (slider.scrollLeft >= slider.scrollWidth / 2) {
                    slider.scrollLeft = 0;
                }
            }
            requestAnimationFrame(animate);
        }

        // 3. FIXED Manual Button Navigation
        function moveSlider(direction) {
            // 1. Tell the auto-animator to stop 
            isManualScrolling = true;

            const scrollAmount = 400;
            const targetScroll = direction === 'left'
                ? slider.scrollLeft - scrollAmount
                : slider.scrollLeft + scrollAmount;

            // 2. Perform the smooth scroll
            slider.scrollTo({
                left: targetScroll,
                behavior: 'smooth'
            });

            // 3. Resume auto-scroll after the smooth scroll finishes (approx 600ms)
            setTimeout(() => {
                isManualScrolling = false;

                // Loop check for manual clicks
                if (slider.scrollLeft >= slider.scrollWidth / 2) {
                    slider.scrollLeft = 0;
                } else if (slider.scrollLeft <= 0) {
                    slider.scrollLeft = slider.scrollWidth / 2;
                }
            }, 600);
        }

        // 4. Interaction Listeners
        slider.addEventListener('mouseenter', () => isPaused = true);
        slider.addEventListener('mouseleave', () => isPaused = false);

        // Initialize
        requestAnimationFrame(animate);
    </script>
</section>






<!-- Academic Wings Section -->
<section id="academics" class="py-14 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <span class="text-primary font-bold uppercase tracking-widest text-sm mb-4 inline-block">Our
                Curriculum</span>
            <div class="section-divider"></div>
            <h2 class="text-xl md:text-2xl font-bold text-secondary mb-4">The Academic Wings</h2>
            <p class="text-gray-600 text-[14px] max-w-2xl mx-auto">Tailored learning experiences for every stage of
                your child's educational journey</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <!-- Kindergarten Wing -->
            <div
                class="bg-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 group border-b-4 border-accent card-hover">
                <div
                    class="w-[60px] h-[60px] bg-gradient-to-br from-accent to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-child text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-secondary">Darling Kindergarten</h3>
                <p class="text-sm text-accent font-semibold mb-3">Pre-KG, LKG & UKG</p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    A nurturing, Montessori-inspired environment focusing on play-based discovery, foundational
                    social skills, and joyful learning through hands-on activities.
                </p>

                <a href="#"
                    class="text-accent font-bold flex items-center gap-2 hover:gap-4 transition-all uppercase text-xs tracking-widest">
                    Explore KG Wing <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Junior Wing -->
            <div
                class="bg-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 group border-b-4 border-blue-500 card-hover">
                <div
                    class="w-[60px] h-[60px] bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-book-reader text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-secondary">Junior Wing</h3>
                <p class="text-sm text-blue-600 font-semibold mb-3">Classes 1 to 5</p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Activity-based learning focusing on core competencies, creativity, and building strong academic
                    basics while nurturing curiosity and confidence.
                </p>

                <a href="#"
                    class="text-blue-600 font-bold flex items-center gap-2 hover:gap-4 transition-all uppercase text-xs tracking-widest">
                    View Junior Classes <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <!-- Senior Wing -->
            <div
                class="bg-white p-10 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 group border-b-4 border-secondary card-hover">
                <div
                    class="w-[60px] h-[60px] bg-gradient-to-br from-secondary to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fas fa-university text-2xl text-white"></i>
                </div>
                <h3 class="text-xl font-bold mb-4 text-secondary">Senior Wing</h3>
                <p class="text-sm text-secondary font-semibold mb-3">Classes 6 to 12</p>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Rigorous curriculum promoting critical thinking, subject specialization, and comprehensive
                    preparation for board examinations and higher education.
                </p>

                <a href="#"
                    class="text-secondary font-bold flex items-center gap-2 hover:gap-4 transition-all uppercase text-xs tracking-widest">
                    Academic Paths <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section -->
<section id="leadership-section" class="py-14 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-green-50 rounded-full -mr-48 -mt-48 blur-3xl opacity-50"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-50 rounded-full -ml-48 -mb-48 blur-3xl opacity-50">
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div
            class="reveal-leader opacity-0 transition-all duration-1000 flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div class="max-w-xl">
                <span class="text-primary font-bold uppercase tracking-[0.3em] text-xs mb-3 block">Our
                    Leadership</span>
                <h2 class="text-2xl md:text-4xl font-bold text-secondary leading-tight">Guided by Vision <span
                        class="text-primary">&</span> Values</h2>
            </div>
            <p class="text-gray-500 max-w-sm text-sm leading-relaxed border-l-2 border-primary/30 pl-6">
                Meet the dedicated leaders shaping young minds and building a foundation of integrity at Bell
                School.
            </p>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-stretch">
            <div class="reveal-leader opacity-0 translate-y-10 transition-all duration-1000 delay-200 group relative">
                <div
                    class="flex flex-col h-full bg-slate-50 rounded-[3rem] p-8 md:p-12 transition-all duration-500 hover:bg-secondary hover:-translate-y-2 overflow-hidden">
                    <div class="flex justify-between items-start mb-8">
                        <div
                            class="w-20 h-20 bg-white rounded-3xl shadow-lg flex items-center justify-center group-hover:bg-primary transition-colors duration-500">
                            <i class="fas fa-user-tie text-3xl text-secondary group-hover:text-white"></i>
                        </div>
                        <span class="text-6xl font-serif text-secondary/5 group-hover:text-white/10">01</span>
                    </div>

                    <div class="mt-auto">
                        <h3 class="text-2xl font-bold text-secondary group-hover:text-white mb-2 transition-colors">
                            Sri. A. Chelladhurai</h3>
                        <p
                            class="text-primary font-bold text-xs uppercase tracking-widest mb-6 group-hover:text-primary-light">
                            Founder & Managing Trustee</p>
                        <div class="w-12 h-1 bg-primary mb-6"></div>
                        <p class="text-gray-600 group-hover:text-gray-200 leading-relaxed transition-colors">
                            Visionary founder of Bell School and Managing Trustee of Indrani Chelladhurai Charities,
                            dedicated to creating educational institutions of excellence and integrity.
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="reveal-leader opacity-0 translate-y-10 transition-all duration-1000 delay-500 group relative lg:mt-16">
                <div
                    class="flex flex-col h-full bg-slate-50 rounded-[3rem] p-8 md:p-12 transition-all duration-500 hover:bg-secondary hover:-translate-y-2 overflow-hidden">
                    <div class="flex justify-between items-start mb-8">
                        <div
                            class="w-20 h-20 bg-white rounded-3xl shadow-lg flex items-center justify-center group-hover:bg-accent transition-colors duration-500">
                            <i class="fas fa-user-graduate text-3xl text-secondary group-hover:text-white"></i>
                        </div>
                        <span class="text-6xl font-serif text-secondary/5 group-hover:text-white/10">02</span>
                    </div>

                    <div class="mt-auto">
                        <h3 class="text-2xl font-bold text-secondary group-hover:text-white mb-2 transition-colors">
                            Mrs. Lily Darling Chelladhurai</h3>
                        <p
                            class="text-accent font-bold text-xs uppercase tracking-widest mb-6 group-hover:text-accent-light">
                            First Correspondent</p>
                        <div class="w-12 h-1 bg-accent mb-6"></div>
                        <p class="text-gray-600 group-hover:text-gray-200 leading-relaxed transition-colors">
                            Pioneering educational leader whose dedication and support helped establish Bell School
                            as an inspiring monument of learning and ethical guidance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const leaderObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const elements = entry.target.querySelectorAll('.reveal-leader');
                        elements.forEach(el => {
                            el.classList.remove('opacity-0', 'translate-y-10');
                            el.classList.add('opacity-100', 'translate-y-0');
                        });
                        leaderObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15 });

            const leaderSection = document.querySelector('#leadership-section');
            if (leaderSection) leaderObserver.observe(leaderSection);
        });
    </script>
</section>



<!-- Admission CTA Section -->
<section id="admission" class="py-14 relative overflow-hidden parallax-section"
    style="background-image: linear-gradient(rgba(26, 116, 64, 0.92), rgba(15, 90, 48, 0.92)), url('images/Bell-School-about-4.png'); background-attachment: fixed; background-size: cover;">

    <div
        class="reveal-admission opacity-0 translate-y-10 scale-95 transition-all duration-1000 ease-out max-w-7xl mx-auto px-6 relative z-10 text-center text-white">
        <div class="max-w-4xl mx-auto">
            <div class="inline-block mb-6 glass-effect px-6 py-2 rounded-full border border-white/20">
                <span class="text-primary font-bold uppercase tracking-widest text-sm">Admissions 2026</span>
            </div>

            <h2 class="text-3xl md:text-4xl font-bold mb-6">Join the Bell Family</h2>
            <p class="text-[16px] opacity-90 mb-10 leading-relaxed max-w-2xl mx-auto">
                Admissions are open for Classes Pre-KG to Grade 12. Join our vibrant community where curiosity
                thrives and talents blossom.
            </p>

            <div class="grid md:grid-cols-3 gap-6 mb-12 max-w-3xl mx-auto">
                <div class="glass-effect p-6 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                    <i class="fas fa-calendar-alt text-3xl text-primary mb-3"></i>
                    <h4 class="font-bold mb-2">Applications Open</h4>
                    <p class="text-sm opacity-80">Throughout the year</p>
                </div>
                <div class="glass-effect p-6 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                    <i class="fas fa-users text-3xl text-primary mb-3"></i>
                    <h4 class="font-bold mb-2">Campus Visit</h4>
                    <p class="text-sm opacity-80">Schedule your tour</p>
                </div>
                <div class="glass-effect p-6 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors">
                    <i class="fas fa-file-alt text-3xl text-primary mb-3"></i>
                    <h4 class="font-bold mb-2">Easy Process</h4>
                    <p class="text-sm opacity-80">Simple documentation</p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="tel:+914622574117"
                    class="px-10 py-3 bg-primary text-secondary font-bold rounded-full hover:bg-white hover:scale-105 transition-all flex items-center justify-center gap-3 shadow-2xl">
                    <i class="fas fa-phone text-lg"></i>
                    <span>Call Admissions Office</span>
                </a>
                <a href="https://wa.me/919944674550" target="_blank"
                    class="px-10 py-3 bg-green-500 text-white font-bold rounded-full hover:bg-green-600 hover:scale-105 transition-all flex items-center justify-center gap-3 shadow-2xl">
                    <i class="fab fa-whatsapp text-xl"></i>
                    <span>WhatsApp Us</span>
                </a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const admissionObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const content = entry.target.querySelector('.reveal-admission');
                        content.classList.remove('opacity-0', 'translate-y-10', 'scale-95');
                        content.classList.add('opacity-100', 'translate-y-0', 'scale-100');

                        admissionObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            const admissionSection = document.querySelector('#admission');
            if (admissionSection) admissionObserver.observe(admissionSection);
        });
    </script>
</section>

<!-- Gallery Preview Section -->
<section id="campus-life" class="py-14 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16 reveal-gallery opacity-0 translate-y-10 transition-all duration-700">
            <span class="text-primary font-bold uppercase tracking-widest text-sm mb-4 inline-block">Campus
                Life</span>
            <div class="section-divider"></div>
            <h2 class="text-xl md:text-2xl font-bold text-secondary mb-4">Moments That Matter</h2>
            <p class="text-gray-600 text-[14px] max-w-2xl mx-auto">Experience the vibrant energy and joyful learning
                at Bell School</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-10">
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[100ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-about-1.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Students Learning">
            </div>
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[200ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-about-2.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Science Lab">
            </div>
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[300ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-about-3.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Sports Day">
            </div>
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[400ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-car-1.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Campus Building">
            </div>
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[500ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-about-1.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Students Learning">
            </div>
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[600ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-about-2.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Science Lab">
            </div>
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[700ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-about-3.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Sports Day">
            </div>
            <div
                class="reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[800ms] image-overlay rounded-2xl overflow-hidden shadow-lg h-64 cursor-pointer">
                <img src="images/Bell-School-car-1.png"
                    class="gallery-img w-full h-full object-cover hover:scale-110 transition-transform duration-500"
                    alt="Campus Building">
            </div>
        </div>

        <div class="text-center reveal-gallery opacity-0 translate-y-10 transition-all duration-700 delay-[500ms]">
            <a href="gallery.html"
                class="inline-flex items-center gap-3 px-10 py-4 bg-secondary text-white font-bold rounded-full hover:bg-green-700 hover:scale-105 transition-all shadow-xl">
                <i class="fas fa-images"></i>
                View Full Gallery
            </a>
        </div>
    </div>
    <div id="imageModal"
        class="fixed inset-0 z-[999] hidden bg-black/90 backdrop-blur-sm flex items-center justify-center p-4">
        <button id="closeModal"
            class="absolute top-6 right-6 text-white text-4xl hover:text-primary transition-colors cursor-pointer">
            <i class="fas fa-times"></i>
        </button>

        <img id="modalImg" src=""
            class="max-w-full max-h-[90vh] rounded-lg shadow-2xl scale-95 transition-transform duration-300"
            alt="Preview">
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const observerOptions = {
                threshold: 0.15 // Trigger when 15% of the section is visible
            };

            const galleryObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Find all elements with 'reveal-gallery' inside this section
                        const revealElements = entry.target.querySelectorAll('.reveal-gallery');

                        revealElements.forEach(el => {
                            el.classList.remove('opacity-0', 'translate-y-10');
                            el.classList.add('opacity-100', 'translate-y-0');
                        });

                        // Stop observing once animation is done
                        galleryObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const target = document.querySelector('#campus-life');
            if (target) galleryObserver.observe(target);
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImg');
            const closeModal = document.getElementById('closeModal');
            const galleryItems = document.querySelectorAll('.gallery-img');

            // 1. Popup Logic
            galleryItems.forEach(img => {
                // Trigger click on the image itself or its parent container
                img.parentElement.addEventListener('click', function () {
                    modal.classList.remove('hidden');
                    modalImg.src = img.src; // Set the large image source
                    document.body.style.overflow = 'hidden'; // Disable page scroll

                    setTimeout(() => {
                        modalImg.classList.remove('scale-95');
                        modalImg.classList.add('scale-100');
                    }, 10);
                });
            });

            // Close logic
            const closePopup = () => {
                modal.classList.add('hidden');
                modalImg.classList.add('scale-95');
                modalImg.classList.remove('scale-100');
                document.body.style.overflow = 'auto'; // Enable scroll
            };

            closeModal.addEventListener('click', closePopup);

            // Close on clicking the dark background
            modal.addEventListener('click', function (e) {
                if (e.target === modal) {
                    closePopup();
                }
            });
        });
    </script>
</section>


<?php include('include/footer.php'); ?>