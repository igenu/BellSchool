<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bell Matriculation Higher Secondary School | Excellence Since 1992</title>
    <link rel="icon" type="image/jpeg" href="images/Bell-Logo_1.jpg">

    <link rel="shortcut icon" href="images/Bell-Logo_1.jpg" type="image/x-icon">

    <link rel="apple-touch-icon" href="images/Bell-Logo_1.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800;900&family=Noto+Serif:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FFD700',
                        secondary: '#1a7440',
                        accent: '#f97316',
                        dark: '#0f172a',
                        light: '#f8fafc',
                    },
                    fontFamily: {
                        'sans': ['Noto Sans', 'sans-serif'],
                        'serif': ['Noto Serif', 'serif'],
                    }
                }
            }
        }
    </script>

    <style>
        * {
            font-family: 'Noto Sans', sans-serif;
        }

        .counter {
            font-variant-numeric: tabular-nums;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        .animate-slideInRight {
            animation: slideInRight 0.8s ease-out forwards;
        }

        .animate-scaleIn {
            animation: scaleIn 0.6s ease-out forwards;
        }

        .delay-100 {
            animation-delay: 0.1s;
            opacity: 0;
        }

        .delay-200 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .delay-300 {
            animation-delay: 0.3s;
            opacity: 0;
        }

        .delay-400 {
            animation-delay: 0.4s;
            opacity: 0;
        }

        /* Initial hidden state for scroll animations */
        .animate-fadeInUp,
        .animate-slideInLeft,
        .animate-slideInRight,
        .animate-scaleIn {
            opacity: 0;
        }

        /* Hero section animations play immediately */
        section:first-of-type .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        section:first-of-type .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        section:first-of-type .animate-slideInRight {
            animation: slideInRight 0.8s ease-out forwards;
        }

        /* Trigger animation on scroll for other sections */
        .animate-in.animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-in.animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out forwards;
        }

        .animate-in.animate-slideInRight {
            animation: slideInRight 0.8s ease-out forwards;
        }

        .animate-in.animate-scaleIn {
            animation: scaleIn 0.6s ease-out forwards;
        }

        /* Feature cards scroll animation */
        .feature-card {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }

        .feature-card.animate-in {
            opacity: 1;
            transform: translateY(0);
        }

        /* Card hover with scroll animation */
        .card-hover {
            opacity: 0;
            transform: translateY(30px);
        }

        .card-hover.animate-in {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.6s ease-out;
        }

        .card-hover.animate-in:hover {
            transform: translateY(-8px);
        }

        .gradient-text {
            background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-gradient {
            /* background: linear-gradient(135deg, #1a7440 0%, #0f5a30 50%, #0a3d20 100%); */
            background: #000000ca;
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .image-overlay {
            position: relative;
            overflow: hidden;
        }

        .image-overlay::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.3) 100%);
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .image-overlay:hover::after {
            opacity: 1;
        }

        .image-overlay img {
            transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .image-overlay:hover img {
            transform: scale(1.08);
        }

        .parallax-section {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .section-divider {
            height: 4px;
            width: 80px;
            background: linear-gradient(90deg, #FFD700 0%, #FFA500 100%);
            margin: 0 auto 2rem;
        }

        .feature-icon {
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: rotateY(360deg);
        }

        .timeline-dot {
            width: 20px;
            height: 20px;
            background: #FFD700;
            border: 4px solid white;
            box-shadow: 0 0 0 4px #1a7440;
        }

        @media (max-width: 768px) {
            .parallax-section {
                background-attachment: scroll;
            }
        }

        .smooth-scroll {
            scroll-behavior: smooth;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #1a7440;
            border-radius: 0px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0f5a30;
        }
    </style>

    <style>
        /* Custom Animation Classes */
        .hero-text-anim {
            animation: heroTextEffect 0.8s forwards;
        }

        @keyframes heroTextEffect {
            from {
                opacity: 0;
                transform: translateY(30px);
                filter: blur(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
                filter: blur(0);
            }
        }

        .dot.active {
            background-color: #FFD700 !important;
            /* Primary Gold */
            width: 32px;
        }

        .hero-gradient {
            background: linear-gradient(to right, rgba(30, 41, 59, 0.9), rgba(30, 41, 59, 0.2));
        }
    </style>

    <style>
        /* ... your existing styles ... */

        #main-header {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), background-color 0.3s;
            will-change: transform;
        }

        /* This class will be toggled via JavaScript */
        .header-hidden {
            transform: translateY(-100%);
        }

        /* Optional: Add a stronger shadow when floating */
        .header-scrolled {
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="smooth-scroll text-slate-900 overflow-x-hidden bg-white text-[14px]">
    <!-- Header -->
    <header id="main-header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <!-- Top Bar -->
        <div id="top-bar" class="bg-dark text-white transition-all duration-300 opacity-100 overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 md:px-8 flex justify-between items-center text-sm font-medium py-2">
                <div class="flex items-center gap-6">
                    <a href="tel:+914622574117"
                        class="flex items-center gap-2 hover:text-primary transition-colors text-[11px]">
                        <i class="fas fa-phone-alt text-[10px]"></i>
                        <div>+91 (462) 257 4117</div>
                    </a>
                    <a href="mailto:bellschool1992@gmail.com"
                        class="hidden sm:flex items-center gap-2 hover:text-primary transition-colors text-[11px]">
                        <i class="far fa-envelope text-[10px]"></i>
                        <div>bellschool1992@gmail.com</div>
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <span class="hidden sm:inline opacity-80 text-[11px]">Tirunelveli, Tamil Nadu</span>
                    <a href="admission.html"
                        class="bg-primary text-dark px-3 py-1 rounded-md font-bold hover:bg-white transition-colors uppercase tracking-wider text-[10px]">
                        Apply Now
                    </a>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav id="navbar" class="bg-white backdrop-blur-md transition-all duration-300 shadow-sm py-4">
            <div class="max-w-7xl mx-auto px-4 md:px-8 flex items-center justify-between">
                <a href="/" class="flex items-center gap-3 group">
                    <img id="nav-logo" src="images/Bell-Logo_1.jpg" alt="Bell School Logo"
                        class="transition-all duration-300 object-contain h-10 w-auto -ml-2">
                    <div class="flex flex-col">
                        <span id="brand-name"
                            class="font-bold text-secondary leading-tight transition-all duration-300 text-xl md:text-lg">
                            BELL Matriculation
                        </span>
                        <span id="brand-subtext"
                            class="text-[10px] md:text-xs text-[#527a63] uppercase tracking-widest hidden md:block transition-all">
                            Higher Secondary School
                        </span>
                    </div>
                </a>

                <div class="hidden lg:flex items-center gap-1">
                    <a href="/"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-semibold text-[#1a7440] bg-[#1a74400d]">Home</a>
                    <a href="about.html"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-medium text-gray-600 hover:text-[#1a7440] hover:bg-[#1a74400d] transition-all">About</a>
                    <a href="academic.html"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-medium text-gray-600 hover:text-[#1a7440] hover:bg-[#1a74400d] transition-all">Academic</a>
                    <a href="admission.html"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-medium text-gray-600 hover:text-[#1a7440] hover:bg-[#1a74400d] transition-all">Admission</a>
                    <a href="facilities.html"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-medium text-gray-600 hover:text-[#1a7440] hover:bg-[#1a74400d] transition-all">Facilities</a>
                    <a href="gallery.html"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-medium text-gray-600 hover:text-[#1a7440] hover:bg-[#1a74400d] transition-all">Gallery</a>
                    <a href="careers.html"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-medium text-gray-600 hover:text-[#1a7440] hover:bg-[#1a74400d] transition-all">Careers</a>
                    <a href="contact.html"
                        class="nav-link px-4 py-2 rounded-full text-[13px] font-medium text-gray-600 hover:text-[#1a7440] hover:bg-[#1a74400d] transition-all">Contact</a>
                </div>

                <button id="mobile-menu-toggle" class="lg:hidden p-2 text-dark hover:bg-gray-100 rounded-md">
                    <i id="menu-icon" class="fas fa-bars text-xl"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden absolute top-full left-0 right-0 bg-white border-b shadow-xl">
                <div class="flex flex-col p-4 space-y-2">
                    <a href="/" class="px-4 py-3 rounded-lg text-base font-semibold bg-gray-100 text-dark">Home</a>
                    <a href="about.html"
                        class="px-4 py-3 rounded-lg text-base font-medium text-gray-600 hover:bg-gray-50">About</a>
                    <a href="academic.html"
                        class="px-4 py-3 rounded-lg text-base font-medium text-gray-600 hover:bg-gray-50">Academic</a>
                    <a href="admission.html"
                        class="px-4 py-3 rounded-lg text-base font-medium text-gray-600 hover:bg-gray-50">Admission</a>
                    <a href="facilities.html"
                        class="px-4 py-3 rounded-lg text-base font-medium text-gray-600 hover:bg-gray-50">Facilities</a>
                    <a href="gallery.html"
                        class="px-4 py-3 rounded-lg text-base font-medium text-gray-600 hover:bg-gray-50">Gallery</a>
                    <a href="careers.html"
                        class="px-4 py-3 rounded-lg text-base font-medium text-gray-600 hover:bg-gray-50">Careers</a>
                    <a href="contact.html"
                        class="px-4 py-3 rounded-lg text-base font-medium text-gray-600 hover:bg-gray-50">Contact</a>
                </div>
            </div>
        </nav>
    </header>
