<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome 6 (Free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Ifeanyi Nnadi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ========================================
           RESET & BASE
           ======================================== */
        body, html {
            height: 100%;
            margin: 0;
            scroll-behavior: smooth;
        }

        /* ========================================
           HERO SECTION WITH ZOOM EFFECT
           ======================================== */
        .hero-wrapper {
            height: 100vh;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .hero-background {
            position: absolute;
            top: -10%;
            left: -10%;
            right: -10%;
            bottom: -10%;
            width: 120%;
            height: 120%;
            background-image: url("{{ asset('images/Hero3.1.jpg') }}");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            animation: slowZoom 18s ease-in-out infinite alternate;
            z-index: 0;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        @keyframes slowZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.15); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .hero-text {
            text-align: center;
            color: white;
            width: 90%;
            max-width: 900px;
        }

        /* ========================================
           TYPEWRITER EFFECT
           ======================================== */
        .typewriter-wrapper {
            display: inline-block;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(28px, 5vw, 55px);
            color: #c9a94e;
            text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.8);
            line-height: 1.3;
        }

        .static-text {
            display: inline;
            color: white;
        }

        .typewriter-text {
            display: inline;
            border-right: 3px solid rgba(255, 255, 255, 0.9);
            animation: blinkCursor 600ms steps(50) infinite normal;
        }

        .dynamic-text {
            display: inline;
            color: #c9a94e;
        }

        @keyframes blinkCursor {
            from { border-right-color: rgba(255, 255, 255, 0.9); }
            to { border-right-color: transparent; }
        }

        /* ========================================
           SUBTITLE
           ======================================== */
        .hero-subtitle {
            font-family: 'Newsreader Text', Georgia, serif;
            font-size: clamp(16px, 1.5vw, 22px);
            color: rgba(255, 255, 255, 0.85);
            margin-top: 20px;
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-subtitle .highlight {
            color: #c9a94e;
        }

        /* ========================================
           FLIP CTA BUTTONS
           ======================================== */
        .btn-flip {
            opacity: 1;
            outline: 0;
            color: #fff;
            line-height: 44px;
            position: relative;
            text-align: center;
            letter-spacing: 1px;
            display: inline-block;
            text-decoration: none;
            font-family: 'Newsreader Text', Georgia, serif;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 13px;
            min-width: 160px;
            cursor: pointer;
        }

        .btn-flip:before {
            top: 0;
            left: 0;
            opacity: 1;
            color: #c9a94e;
            display: block;
            padding: 0 30px;
            line-height: 44px;
            transition: 0.5s;
            position: relative;
            background: #1a2a3a;
            content: attr(data-front);
            transform: translateY(0) rotateX(0);
            border-radius: 2px;
        }

        .btn-flip:after {
            top: 0;
            left: 0;
            opacity: 0;
            width: 100%;
            color: #1a2a3a;
            display: block;
            transition: 0.5s;
            position: absolute;
            background: #c9a94e;
            content: attr(data-back);
            transform: translateY(-50%) rotateX(90deg);
            border-radius: 2px;
        }

        .btn-flip:hover:after {
            opacity: 1;
            transform: translateY(0) rotateX(0);
        }

        .btn-flip:hover:before {
            opacity: 0;
            transform: translateY(50%) rotateX(90deg);
        }

        /* Gold Version */
        .btn-flip-gold:before {
            color: #1a2a3a;
            background: #c9a94e;
        }

        .btn-flip-gold:after {
            color: #c9a94e;
            background: #1a2a3a;
        }

        /* Outline Version */
        .btn-flip-outline:before {
            color: #ffffff;
            background: transparent;
            border: 2px solid #ffffff;
            line-height: 40px;
        }

        .btn-flip-outline:after {
            color: #1a2a3a;
            background: #ffffff;
        }

        .btn-flip-outline:hover:before {
            opacity: 0;
            transform: translateY(50%) rotateX(90deg);
        }

        .btn-flip-outline:hover:after {
            opacity: 1;
            transform: translateY(0) rotateX(0);
        }

        /* ========================================
        HERO TAGLINE
        ======================================== */

        .hero-tagline-wrapper {
            position: relative;
            padding-left: 24px;
            margin-top: 48px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        /* The animated left border */
        .hero-tagline-wrapper::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: 3px;
            height: 0;
            background: #c9a94e;
            animation: drawBorder 1s ease-out forwards;
            animation-delay: 2s; /* Delay to wait for typewriter */
            transform-origin: top;
        }

        /* Border glow effect */
        .hero-tagline-wrapper::after {
            content: '';
            position: absolute;
            left: -2px;
            top: 0;
            width: 7px;
            height: 0;
            background: rgba(201, 169, 78, 0.3);
            filter: blur(4px);
            animation: drawBorderGlow 1s ease-out forwards;
            animation-delay: 2s;
            transform-origin: top;
        }

        .hero-tagline {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(14px, 1.2vw, 18px);
            font-style: italic;
            color: rgba(255, 255, 255, 0.8);
            text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
            line-height: 1.7;
            letter-spacing: 0.3px;
            margin: 0;
            animation-delay: 2.5s;
        }

        /* Animation Keyframes */
        @keyframes drawBorder {
            0% {
                height: 0;
                opacity: 0;
            }
            100% {
                height: 100%;
                opacity: 1;
            }
        }

        @keyframes drawBorderGlow {
            0% {
                height: 0;
                opacity: 0;
            }
            100% {
                height: 100%;
                opacity: 1;
            }
        }

        /* Optional: Fade in text with border */
        .hero-tagline {
            opacity: 0;
            animation: fadeInText 0.8s ease-out forwards;
            animation-delay: 3.8s;
        }

        @keyframes fadeInText {
            0% {
                opacity: 0;
                transform: translateX(-10px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

/* ========================================
   SWIPER SPLIT-SCREEN WITH PARALLAX
   ======================================== */

.swiper-container {
    position: relative;
    overflow: hidden;
    background: #ffffff;
    touch-action: pan-y;
}

.swiper-container-wrapper {
    position: relative;
    overflow: visible;
}

.swiper-slide {
    position: relative;
    overflow: hidden;
    height: 100%;
    width: 100%;
}

/* Image containers */
.swiper-image {
    position: absolute;
    top: 0;
    height: 100%;
    overflow: hidden;
}

.swiper-image-left {
    left: 0;
    z-index: 10;
}

.swiper-image-right {
    right: 0;
    z-index: 1;
}

.swiper-image-inner {
    width: 100%;
    height: 100%;
    display: flex;
    background-size: cover;
    background-position: center;
}

/* Left side - Navy gradient background */
.swiper-image-left-inner {
    background: linear-gradient(135deg, #1a2a3a 0%, #2d2d2d 100%);
}

/* Text animation styles */
.slide-tag,
.slide-title,
.slide-desc,
.slide-title span {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s cubic-bezier(0.215, 0.61, 0.355, 1);
}

/* Active slide - text animations */
.swiper-slide-active .slide-tag {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.2s;
}

.swiper-slide-active .slide-title {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.4s;
}

.swiper-slide-active .slide-desc {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.6s;
}

.swiper-slide-active .btn-flip-small {
    opacity: 1;
    transform: translateY(0);
    transition-delay: 0.8s;
}

/* Image zoom effect */
.swiper-image-right-inner {
    transform: scale(1.1);
    transition: transform 1.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.swiper-slide-active .swiper-image-right-inner {
    transform: scale(1);
}

/* Custom Pagination - Gold */
.swiper-pagination {
    position: absolute;
    bottom: 24px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 20;
    display: flex;
    gap: 14px;
}

.swiper-pagination-bullet {
    width: 12px;
    height: 12px;
    background: #c9a94e;
    opacity: 0.4;
    border-radius: 50%;
    transition: all 0.3s ease;
    cursor: pointer;
}

.swiper-pagination-bullet-active {
    opacity: 1;
    background: #c9a94e;
    transform: scale(1.3);
}

/* ========================================
   SCROLL INDICATOR ANIMATION
   ======================================== */

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(8px);
    }
}

.animate-bounce {
    animation: bounce 2s ease-in-out infinite;
}

/* ========================================
   MOUSE SCROLL CUSTOM CURSOR
   ======================================== */

.swiper-container {
    cursor: default;
}

/* Mobile responsiveness */
@media screen and (max-width: 768px) {
    .swiper-container {
        height: 550px !important;
    }
    
    .swiper-image {
        width: 100% !important;
        height: 50% !important;
        position: relative !important;
    }
    
    .swiper-slide {
        display: flex;
        flex-direction: column;
    }
    
    .swiper-image-left {
        height: 55% !important;
        order: 2;
    }
    
    .swiper-image-right {
        height: 45% !important;
        order: 1;
    }
    
    .swiper-image-inner {
        padding: 1.5rem !important;
    }
    
    .slide-title {
        font-size: 1.8rem !important;
    }
    
    .slide-desc {
        font-size: 0.95rem !important;
        max-width: 100% !important;
    }
    
    .swiper-pagination {
        bottom: 12px;
        gap: 10px;
    }
    
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
    }
}

@media screen and (max-width: 480px) {
    .swiper-container {
        height: 500px !important;
    }
    
    .slide-title {
        font-size: 1.5rem !important;
    }
    
    .swiper-image-inner {
        padding: 1rem !important;
    }
}

/* ========================================
   IMAGE ZOOM HOVER EFFECT - FIXED
   ======================================== */

/* Parallax wrapper - handles the parallax transform */
.parallax-wrapper {
    width: 100%;
    height: 100%;
    overflow: hidden;
}

/* Image inner - handles the zoom */
.swiper-image-right-inner {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    transform: scale(1.1);
    transition: transform 1.2s cubic-bezier(0.215, 0.61, 0.355, 1);
}

/* Active slide - initial zoom out */
.swiper-slide-active .swiper-image-right-inner {
    transform: scale(1);
}

/* Hover effect - zoom in on the inner image, not the wrapper */
.swiper-image-right:hover .swiper-image-right-inner {
    transform: scale(1.15);
    transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}

/* Gold overlay on hover */
.swiper-image-right-inner::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(201, 169, 78, 0);
    transition: background 0.6s ease;
    pointer-events: none;
}

.swiper-image-right:hover .swiper-image-right-inner::after {
    background: rgba(201, 169, 78, 0.08);
}

/* Zoom indicator icon */
.swiper-image-right::before {
    content: '↗';
    position: absolute;
    bottom: 24px;
    right: 24px;
    z-index: 5;
    color: white;
    opacity: 0;
    transform: translate(10px, 10px);
    transition: all 0.4s cubic-bezier(0.215, 0.61, 0.355, 1);
    background: rgba(201, 169, 78, 0.85);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: bold;
    box-shadow: 0 4px 15px rgba(201, 169, 78, 0.3);
}

.swiper-image-right:hover::before {
    opacity: 1;
    transform: translate(0, 0) scale(1.1);
}



        
        /* ========================================
           RESPONSIVE
           ======================================== */
        @media screen and (max-width: 700px) {
            .typewriter-wrapper {
                font-size: clamp(22px, 4vw, 32px);
            }
            
            .hero-subtitle {
                font-size: 14px;
                margin-top: 15px;
            }
        }

        @media screen and (max-width: 640px) {
            .btn-flip {
                min-width: 100%;
                font-size: 12px;
                line-height: 40px;
            }
            
            .btn-flip:before,
            .btn-flip:after {
                padding: 0 20px;
                line-height: 40px;
            }
            
            .btn-flip-outline:before {
                line-height: 36px;
            }
        }

        /* Responsive adjustments */
        @media screen and (max-width: 640px) {
            .hero-tagline-wrapper {
                padding-left: 16px;
                margin-top: 32px;
            }
    
            .hero-tagline-wrapper::before {
                width: 2px;
            }
            
            .hero-tagline {
                font-size: 13px;
                line-height: 1.6;
            }
        }

        @media screen and (max-width: 480px) {
            .typewriter-wrapper {
                font-size: 18px;
            }
            
            .hero-subtitle {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    <!-- ========================================
    HERO SECTION
    ======================================== -->
    <div class="hero-wrapper">
        <div class="hero-background"></div>
        <div class="hero-overlay"></div>

        @include('components.navigation')

        <div class="hero-content">
            <div class="hero-text">
                <div class="typewriter-wrapper">
                    <span class="static-text" id="staticText"></span>
                    <span class="typewriter-text" id="typewriter"></span>
                    <span class="dynamic-text" id="dynamicWord"></span>
                </div>

                <p class="hero-subtitle">
                    Building influential brands, <span class="highlight">exceptional leaders</span>, and 
                    <span class="highlight">commercially successful businesses</span> across Africa.
                </p>

                <!-- 3 Flip CTA Buttons -->
                <div class="grid grid-cols-2 gap-4 mt-8 w-full max-w-lg mx-auto">
                    <a href="#" class="btn-flip w-full text-center" data-back="Let's Talk" data-front="Hire My Team"></a>
                    <a href="#" class="btn-flip btn-flip-outline w-full text-center" data-back="Connect Now" data-front="Join My Network"></a>
                </div>

                <!-- Tagline - Italicized -->
                <div class="hero-tagline-wrapper">
                    <p class="hero-tagline">
                        Ifeanyi Nnadi helps organisations, executives, and emerging talents unlock growth 
                        through strategic communications, commercial partnerships, reputation management, and 
                        talent representation.
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- ========================================
   MOCK SECTIONS - SWIPER SLIDER (MOUSE SCROLL)
   ======================================== -->
<section class="bg-white w-full">
    <!-- Section Title -->
    <div class="container-custom pt-16 md:pt-20">
        <h2 class="font-playfair text-3xl md:text-4xl font-bold text-center text-navy">
            Meet The Man Behind The Brand
        </h2>
        <p class="font-text text-center text-warm-grey max-w-2xl mx-auto mt-4">
            Explore how I help brands, leaders, and talent unlock growth and build lasting influence.
        </p>
    </div>

    <!-- Full Width Swiper -->
    <div class="w-full mt-6 md:mt-8">
        <div class="swiper-container w-full h-[500px] md:h-[550px] lg:h-[600px] overflow-hidden shadow-2xl">
            <div class="swiper-wrapper">
                
                <!-- ========================================
                SLIDE 1: A Modern African Advisory (Image Right)
                ======================================== -->
                <div class="swiper-slide">
                    <!-- Left Side - Text -->
                    <div class="swiper-image swiper-image-left w-full md:w-1/2 h-full absolute left-0 top-0 z-10" 
                        data-swiper-parallax-y="-30%">
                        <div class="swiper-image-inner swiper-image-left-inner flex flex-col justify-center items-start p-8 md:p-12 lg:p-16 w-full h-full">
                            <span class="slide-tag text-gold font-text text-sm font-semibold uppercase tracking-wider" 
                                data-swiper-parallax-y="-20%" data-swiper-parallax-duration="600">
                                A Modern African Advisory
                            </span>
                            <h1 class="slide-title font-playfair text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight" 
                                data-swiper-parallax-y="-30%" data-swiper-parallax-duration="800">
                                For Brands, Leaders, <br><span class="text-gold">and High-Potential Talent</span>
                            </h1>
                            <p class="slide-desc font-text text-white/80 text-base md:text-lg mt-4 max-w-md leading-relaxed" 
                            data-swiper-parallax-y="-40%" data-swiper-parallax-duration="1000">
                                The digital headquarters of a business leader shaping brands, building reputation, 
                                unlocking commercial growth, and representing the next generation of African talent.
                            </p>
                            <p class="slide-desc font-text text-white/70 text-base md:text-lg mt-4 max-w-md leading-relaxed" 
                            data-swiper-parallax-y="-50%" data-swiper-parallax-duration="1100">
                                Ifeanyi Nnadi works at the intersection of leadership, visibility, influence, and 
                                business performance—helping organisations and individuals position themselves for 
                                lasting relevance and global opportunity.
                            </p>
                            <div class="mt-6" data-swiper-parallax-y="-60%" data-swiper-parallax-duration="1200">
                                <a href="#" class="btn-flip-small" data-back="Learn More" data-front="Explore Advisory"></a>
                            </div>
                        </div>
                    </div>
    
                    <!-- Right Side - Image -->
                    <div class="swiper-image swiper-image-right w-full md:w-1/2 h-full absolute right-0 top-0" 
                        data-swiper-parallax-y="30%">
                        <div class="parallax-wrapper w-full h-full overflow-hidden">
                            <div class="swiper-image-inner swiper-image-right-inner w-full h-full"
                                style="background-image: url('{{ asset('images/section2.jpg') }}'); background-size: cover; background-position: center;">
                            </div>
                        </div>
                    </div>
                </div>

<!-- ========================================
SLIDE 2: Strategic Work (Image Left, Text Right)
======================================== -->
<div class="swiper-slide">
    <!-- Desktop Layout (hidden on mobile) -->
    <div class="hidden md:flex w-full h-full">
        <!-- Image - Left Side -->
        <div class="w-1/2 h-full relative overflow-hidden" data-swiper-parallax-y="30%">
            <div class="parallax-wrapper w-full h-full overflow-hidden">
                <div class="swiper-image-right-inner w-full h-full"
                     style="background-image: url('{{ asset('images/section3.jpg') }}'); background-size: cover; background-position: center;">
                </div>
            </div>
        </div>
        
        <!-- Text - Right Side -->
        <div class="w-1/2 h-full relative z-10" data-swiper-parallax-y="-30%">
            <div class="swiper-image-left-inner flex flex-col justify-start items-start p-8 md:p-12 lg:p-16 w-full h-full pt-12 md:pt-16 lg:pt-20">
                <span class="slide-tag text-gold font-text text-sm font-semibold uppercase tracking-wider" 
                      data-swiper-parallax-y="-20%" data-swiper-parallax-duration="600">
                    WHAT I DO
                </span>
                <h1 class="slide-title font-playfair text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-tight mb-4" 
                    data-swiper-parallax-y="-30%" data-swiper-parallax-duration="800">
                     <br>Strategic Work Built Around Growth, Influence &amp; Long-Term Value
                </h1>
                
                <!-- Cards Grid - 2 Columns -->
                <div class="grid grid-cols-2 gap-3 w-full max-w-xl" 
                     data-swiper-parallax-y="-40%" data-swiper-parallax-duration="900">
                    
                    <!-- Card 1: Executive Advisory -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-3 border border-white/10 hover:border-gold/50 transition-all duration-300">
                        <h4 class="text-gold font-text text-xs md:text-sm font-semibold uppercase tracking-wider">Executive Advisory</h4>
                        <p class="font-text text-white/80 text-xs md:text-sm mt-1 leading-snug">
                            Advising executives and leadership teams on brand positioning, reputation strategy, executive communications, and commercial partnerships that strengthen influence and unlock measurable business results.
                        </p>
                    </div>

                    <!-- Card 2: Talent Management -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-3 border border-white/10 hover:border-gold/50 transition-all duration-300">
                        <h4 class="text-gold font-text text-xs md:text-sm font-semibold uppercase tracking-wider">Talent Management</h4>
                        <p class="font-text text-white/80 text-xs md:text-sm mt-1 leading-snug">
                            Representing Africa’s next generation of influential professionals, creators, speakers, athletes, hospitality leaders, and public figures… before the world fully discovers them.
                        </p>
                    </div>

                    <!-- Card 3: Corporate Consulting -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-3 border border-white/10 hover:border-gold/50 transition-all duration-300">
                        <h4 class="text-gold font-text text-xs md:text-sm font-semibold uppercase tracking-wider">Corporate Consulting</h4>
                        <p class="font-text text-white/80 text-xs md:text-sm mt-1 leading-snug">
                            Helping companies strengthen communications, grow market presence, improve stakeholder trust, and drive brand-led commercial performance across key sectors.
                        </p>
                    </div>

                    <!-- Card 4: Speaking -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-3 border border-white/10 hover:border-gold/50 transition-all duration-300">
                        <h4 class="text-gold font-text text-xs md:text-sm font-semibold uppercase tracking-wider">Speaking</h4>
                        <p class="font-text text-white/80 text-xs md:text-sm mt-1 leading-snug">
                            Delivering sharp, relevant, and commercially grounded insights for conferences, universities, leadership summits, hospitality forums, and brand events.
                        </p>
                    </div>
                </div>

                <div class="mt-4" data-swiper-parallax-y="-50%" data-swiper-parallax-duration="1000">
                    <a href="#" class="btn-flip-small" data-back="Learn More" data-front="Explore Services"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Layout (hidden on desktop) -->
    <div class="flex flex-col md:hidden w-full h-full">
        <!-- Image - Top -->
        <div class="w-full h-[40%] relative overflow-hidden">
            <div class="parallax-wrapper w-full h-full overflow-hidden">
                <div class="swiper-image-right-inner w-full h-full"
                     style="background-image: url('{{ asset('images/section3.jpg') }}'); background-size: cover; background-position: center;">
                </div>
            </div>
        </div>
        
        <!-- Text - Bottom -->
        <div class="w-full h-[60%] relative z-10">
            <div class="swiper-image-left-inner flex flex-col justify-start items-start p-4 w-full h-full overflow-y-auto">
                <span class="slide-tag text-gold font-text text-xs font-semibold uppercase tracking-wider mb-1">
                    WHAT I DO
                </span>
                <h1 class="slide-title font-playfair text-xl font-bold text-white leading-tight mb-2">
                    Strategic Work Built Around <br>Growth, Influence &amp; Long-Term Value
                </h1>
                
                <!-- Mobile Cards - Single Column -->
                <div class="grid grid-cols-1 gap-2 w-full">
                    
                    <!-- Card 1: Executive Advisory -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-2 border border-white/10">
                        <h4 class="text-gold font-text text-[11px] font-semibold uppercase tracking-wider">Executive Advisory</h4>
                        <p class="font-text text-white/80 text-[11px] mt-0.5 leading-snug">
                            Advising executives and leadership teams on brand positioning, reputation strategy, executive communications, and commercial partnerships that strengthen influence and unlock measurable business results
                        </p>
                    </div>

                    <!-- Card 2: Talent Management -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-2 border border-white/10">
                        <h4 class="text-gold font-text text-[11px] font-semibold uppercase tracking-wider">Talent Management</h4>
                        <p class="font-text text-white/80 text-[11px] mt-0.5 leading-snug">
                            Representing Africa’s next generation of influential professionals, creators, speakers, athletes, hospitality leaders, and public figures… before the world fully discovers them.
                        </p>
                    </div>

                    <!-- Card 3: Corporate Consulting -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-2 border border-white/10">
                        <h4 class="text-gold font-text text-[11px] font-semibold uppercase tracking-wider">Corporate Consulting</h4>
                        <p class="font-text text-white/80 text-[11px] mt-0.5 leading-snug">
                            Helping companies strengthen communications, grow market presence, improve stakeholder trust, and drive brand-led commercial performance across key sectors.
                        </p>
                    </div>

                    <!-- Card 4: Speaking -->
                    <div class="slide-desc bg-white/10 backdrop-blur-sm rounded-lg p-2 border border-white/10">
                        <h4 class="text-gold font-text text-[11px] font-semibold uppercase tracking-wider">Speaking</h4>
                        <p class="font-text text-white/80 text-[11px] mt-0.5 leading-snug">
                            Delivering sharp, relevant, and commercially grounded insights for conferences, universities, leadership summits, hospitality forums, and brand events.
                        </p>
                    </div>
                </div>

                <div class="mt-2">
                    <a href="#" class="btn-flip-small" data-back="Learn More" data-front="Explore Services"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ========================================
SLIDE 3: Why This Work Matters (Image Right, Text Left)
======================================== -->
<div class="swiper-slide">
    <!-- Left Side - Text -->
    <div class="swiper-image swiper-image-left w-full md:w-1/2 h-full absolute left-0 top-0 z-10" 
         data-swiper-parallax-y="-30%">
        <div class="swiper-image-inner swiper-image-left-inner flex flex-col justify-center items-start p-8 md:p-12 lg:p-16 w-full h-full overflow-y-auto">
            <span class="slide-tag text-gold font-text text-sm font-semibold uppercase tracking-wider" 
                  data-swiper-parallax-y="-20%" data-swiper-parallax-duration="600">
                Why This Work Matters
            </span>
            <h1 class="slide-title font-playfair text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight" 
                data-swiper-parallax-y="-30%" data-swiper-parallax-duration="800">
                Influence Is No Longer Optional. <br><span class="text-gold">It is infrastructure.</span>
            </h1>
            <p class="slide-desc font-text text-white/80 text-base md:text-lg mt-4 max-w-md leading-relaxed" 
               data-swiper-parallax-y="-40%" data-swiper-parallax-duration="1000">
                Strong brands earn trust faster. Respected leaders move markets, shape narratives, 
                and create opportunity. Exceptional talent needs the right positioning to become 
                visible, credible, and commercially valuable.
            </p>
            <p class="slide-desc font-text text-white/70 text-base md:text-lg mt-4 max-w-md leading-relaxed" 
               data-swiper-parallax-y="-50%" data-swiper-parallax-duration="1100">
                In a fast-changing African and global market, growth belongs to those who know how 
                to communicate value, manage perception, build partnerships, and lead with intention.
            </p>
            <div class="mt-6" data-swiper-parallax-y="-60%" data-swiper-parallax-duration="1200">
                <a href="#" class="btn-flip-small" data-back="Learn More" data-front="Explore Impact"></a>
            </div>
        </div>
    </div>

    <!-- Right Side - Image -->
    <div class="swiper-image swiper-image-right w-full md:w-1/2 h-full absolute right-0 top-0" 
         data-swiper-parallax-y="30%">
        <div class="parallax-wrapper w-full h-full overflow-hidden">
            <div class="swiper-image-inner swiper-image-right-inner w-full h-full"
                 style="background-image: url('{{ asset('images/section4.jpg') }}'); background-size: cover; background-position: center;">
            </div>
        </div>
    </div>
</div>
<!-- ========================================
SLIDE 4: Who I Work With (Image Left, Text Right)
======================================== -->
<div class="swiper-slide">
    <!-- Desktop Layout (hidden on mobile) -->
    <div class="hidden md:flex w-full h-full">
        <!-- Image - Left Side -->
        <div class="w-1/2 h-full relative overflow-hidden" data-swiper-parallax-y="30%">
            <div class="parallax-wrapper w-full h-full overflow-hidden">
                <div class="swiper-image-right-inner w-full h-full"
                     style="background-image: url('{{ asset('images/section5.jpg') }}'); background-size: cover; background-position: center;">
                </div>
            </div>
        </div>
        
        <!-- Text - Right Side -->
        <div class="w-1/2 h-full relative z-10" data-swiper-parallax-y="-30%">
            <div class="swiper-image-left-inner flex flex-col justify-center items-start p-8 md:p-12 lg:p-16 w-full h-full">
                <span class="slide-tag text-gold font-text text-sm font-semibold uppercase tracking-wider" 
                      data-swiper-parallax-y="-20%" data-swiper-parallax-duration="600">
                    Who I Work With
                </span>
                <h1 class="slide-title font-playfair text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight" 
                    data-swiper-parallax-y="-30%" data-swiper-parallax-duration="800">
                    Built for Ambitious Organisations,<br>Credible Leaders &amp; Exceptional Talent
                </h1>
                <p class="slide-desc font-text text-white/80 text-base md:text-lg mt-4 max-w-md leading-relaxed" 
                   data-swiper-parallax-y="-40%" data-swiper-parallax-duration="1000">
                    The work is designed for people and institutions ready to grow with clarity, 
                    authority, and strategic direction.
                </p>
                
                <!-- Audience List -->
                <div class="slide-desc mt-4 w-full max-w-md" data-swiper-parallax-y="-50%" data-swiper-parallax-duration="1100">
                    <ul class="space-y-2 text-white/80 text-sm md:text-base">
                        <li class="flex items-start gap-2">
                            <span class="text-gold mt-1">▸</span>
                            <span class="font-text">Organisations seeking stronger brand positioning and stakeholder trust</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold mt-1">▸</span>
                            <span class="font-text">Executives building public credibility and leadership influence</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold mt-1">▸</span>
                            <span class="font-text">Businesses pursuing partnerships, visibility, and commercial growth</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold mt-1">▸</span>
                            <span class="font-text">Emerging and established talent seeking high-level representation</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold mt-1">▸</span>
                            <span class="font-text">Institutions looking for insights on leadership, hospitality, branding, and reputation</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-6" data-swiper-parallax-y="-60%" data-swiper-parallax-duration="1200">
                    <a href="#" class="btn-flip-small" data-back="Learn More" data-front="Explore Clients"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Layout (hidden on desktop) -->
    <div class="flex flex-col md:hidden w-full h-full">
        <!-- Image - Top -->
        <div class="w-full h-[40%] relative overflow-hidden">
            <div class="parallax-wrapper w-full h-full overflow-hidden">
                <div class="swiper-image-right-inner w-full h-full"
                     style="background-image: url('{{ asset('images/section5.jpg') }}'); background-size: cover; background-position: center;">
                </div>
            </div>
        </div>
        
        <!-- Text - Bottom -->
        <div class="w-full h-[60%] relative z-10">
            <div class="swiper-image-left-inner flex flex-col justify-start items-start p-4 w-full h-full overflow-y-auto">
                <span class="slide-tag text-gold font-text text-xs font-semibold uppercase tracking-wider mb-1">
                    Who I Work With
                </span>
                <h1 class="slide-title font-playfair text-xl font-bold text-white leading-tight mb-2">
                    Built for Ambitious Organisations,<br>Credible Leaders &amp; Exceptional Talent
                </h1>
                <p class="slide-desc font-text text-white/80 text-sm mb-2">
                    The work is designed for people and institutions ready to grow with clarity, 
                    authority, and strategic direction.
                </p>
                
                <!-- Mobile Audience List -->
                <div class="slide-desc w-full">
                    <ul class="space-y-1.5 text-white/80 text-[11px]">
                        <li class="flex items-start gap-2">
                            <span class="text-gold">▸</span>
                            <span class="font-text">Organisations seeking stronger brand positioning and stakeholder trust</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold">▸</span>
                            <span class="font-text">Executives building public credibility and leadership influence</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold">▸</span>
                            <span class="font-text">Businesses pursuing partnerships, visibility, and commercial growth</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold">▸</span>
                            <span class="font-text">Emerging and established talent seeking high-level representation</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-gold">▸</span>
                            <span class="font-text">Institutions looking for insights on leadership, hospitality, branding, and reputation</span>
                        </li>
                    </ul>
                </div>

                <div class="mt-3">
                    <a href="#" class="btn-flip-small" data-back="Learn More" data-front="Explore Clients"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ========================================
SLIDE 5: Talent Management Feature (Image Right, Text Left)
======================================== -->
<div class="swiper-slide">
    <!-- Left Side - Text -->
    <div class="swiper-image swiper-image-left w-full md:w-1/2 h-full absolute left-0 top-0 z-10" 
         data-swiper-parallax-y="-30%">
        <div class="swiper-image-inner swiper-image-left-inner flex flex-col justify-center items-start p-8 md:p-12 lg:p-16 w-full h-full overflow-y-auto">
            <span class="slide-tag text-gold font-text text-sm font-semibold uppercase tracking-wider" 
                  data-swiper-parallax-y="-20%" data-swiper-parallax-duration="600">
                Talent Management
            </span>
            <h1 class="slide-title font-playfair text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight" 
                data-swiper-parallax-y="-30%" data-swiper-parallax-duration="800">
                The African Talent Office
            </h1>
            <p class="slide-desc font-text text-white/80 text-base md:text-lg mt-4 max-w-md leading-relaxed" 
               data-swiper-parallax-y="-40%" data-swiper-parallax-duration="1000">
                Talent Management is a defining part of the vision. Not celebrity management for attention—but 
                strategic representation for people with substance, potential, and commercial relevance.
            </p>
            <p class="slide-desc font-text text-white/70 text-base md:text-lg mt-4 max-w-md leading-relaxed" 
               data-swiper-parallax-y="-45%" data-swiper-parallax-duration="1100">
                From personal branding and media positioning to endorsements, speaking opportunities, and 
                international exposure, the goal is simple: help outstanding people become impossible to ignore.
            </p>
            <p class="slide-desc font-text text-white/70 text-base md:text-lg mt-4 max-w-md leading-relaxed italic" 
               data-swiper-parallax-y="-50%" data-swiper-parallax-duration="1150">
                "We represent exceptional people before the world discovers them."
            </p>
            <div class="mt-6 flex flex-wrap gap-4" data-swiper-parallax-y="-60%" data-swiper-parallax-duration="1200">
                <a href="#" class="btn-flip w-auto" data-back="Find Talent" data-front="Hire Talent"></a>
                <a href="#" class="btn-flip btn-flip-gold w-auto" data-back="Join Us" data-front="Apply for Representation"></a>
            </div>
        </div>
    </div>

    <!-- Right Side - Image -->
    <div class="swiper-image swiper-image-right w-full md:w-1/2 h-full absolute right-0 top-0" 
         data-swiper-parallax-y="30%">
        <div class="parallax-wrapper w-full h-full overflow-hidden">
            <div class="swiper-image-inner swiper-image-right-inner w-full h-full"
                 style="background-image: url('{{ asset('images/section6.jpg') }}'); background-size: cover; background-position: center;">
            </div>
        </div>
    </div>
</div>

            </div>
            
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- ========================================
   FOOTER
   ======================================== -->
@include('components.footer')


    <!-- ========================================
    TYPEWRITER JAVASCRIPT
    ======================================== -->
    <script>
        // ---------- TYPEWRITER JAVASCRIPT ----------
        const prefix = "IFEANYI NNADI •  ";
        const words = ['Business Leader.', 'Reputation Strategist.', 'Hospitality Growth Expert.', 'Talent Manager.', 'Speaker.'];
        const typeSpeed = 80;
        const deleteSpeed = 40;
        const pauseBeforeDelete = 2000;
        const pauseBetweenWords = 1500;

        const staticTextEl = document.getElementById('staticText');
        const typewriterEl = document.getElementById('typewriter');
        const dynamicWordEl = document.getElementById('dynamicWord');

        let wordIndex = 0;
        let charIndex = 0;
        let phase = 'initial';
        let currentWord = '';

        function typeEffect() {
            if (phase === 'initial') {
                if (charIndex < prefix.length) {
                    staticTextEl.textContent = prefix.substring(0, charIndex + 1);
                    typewriterEl.textContent = '';
                    dynamicWordEl.textContent = '';
                    charIndex++;
                    setTimeout(typeEffect, typeSpeed);
                } else {
                    phase = 'typing';
                    currentWord = words[0];
                    charIndex = 0;
                    setTimeout(typeEffect, typeSpeed);
                }
                return;
            }

            if (phase === 'typing' && wordIndex === 0) {
                if (charIndex < currentWord.length) {
                    typewriterEl.textContent = currentWord.substring(0, charIndex + 1);
                    dynamicWordEl.textContent = '';
                    charIndex++;
                    setTimeout(typeEffect, typeSpeed);
                } else {
                    phase = 'deleting';
                    setTimeout(() => {
                        phase = 'delete';
                        setTimeout(typeEffect, deleteSpeed);
                    }, pauseBeforeDelete);
                }
                return;
            }

            if (phase === 'delete') {
                if (charIndex > 0) {
                    typewriterEl.textContent = currentWord.substring(0, charIndex - 1);
                    dynamicWordEl.textContent = '';
                    charIndex--;
                    setTimeout(typeEffect, deleteSpeed);
                } else {
                    phase = 'typing';
                    wordIndex = (wordIndex + 1) % words.length;
                    currentWord = words[wordIndex];
                    if (currentWord === words[0]) {
                        setTimeout(typeEffect, pauseBetweenWords);
                    } else {
                        setTimeout(typeEffect, typeSpeed);
                    }
                }
                return;
            }

            if (phase === 'typing') {
                if (charIndex < currentWord.length) {
                    typewriterEl.textContent = currentWord.substring(0, charIndex + 1);
                    dynamicWordEl.textContent = '';
                    charIndex++;
                    setTimeout(typeEffect, typeSpeed);
                } else {
                    phase = 'deleting';
                    setTimeout(() => {
                        phase = 'delete';
                        setTimeout(typeEffect, deleteSpeed);
                    }, pauseBeforeDelete);
                }
                return;
            }
        }

        setTimeout(typeEffect, 500);

        // ========================================
        // STICKY NAVIGATION
        // ========================================
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.getElementById('main-nav');
            const hero = document.querySelector('.hero-wrapper');
            let lastScrollY = window.scrollY;
            let isNavVisible = true;

            // Function to handle scroll
            function handleScroll() {
                const currentScrollY = window.scrollY;
                const heroHeight = hero ? hero.offsetHeight : 0;

                // Add background when scrolled past hero
                if (currentScrollY > heroHeight * 0.1) {
                    nav.classList.add('nav-scrolled');
                } else {
                    nav.classList.remove('nav-scrolled');
                }

                // Hide/show on scroll direction (optional)
                if (currentScrollY > 100) {
                    if (currentScrollY > lastScrollY) {
                        // Scrolling down - hide
                        nav.classList.add('nav-hidden');
                    } else {
                        // Scrolling up - show
                        nav.classList.remove('nav-hidden');
                    }
                } else {
                    // At top - always show
                    nav.classList.remove('nav-hidden');
                }

                lastScrollY = currentScrollY;
            }

            // Throttle scroll events for performance
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        handleScroll();
                        ticking = false;
                    });
                    ticking = true;
                }
            });

            // Initial check
            handleScroll();
        });

        // ========================================
// IMAGE ZOOM ON HOVER - FOLLOW CURSOR
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const imageContainers = document.querySelectorAll('.swiper-image-right');
    
    imageContainers.forEach(container => {
        const image = container.querySelector('.swiper-image-right-inner');
        
        if (image) {
            container.addEventListener('mouseenter', function(e) {
                image.style.transition = 'transform 0.15s ease';
            });
            
            container.addEventListener('mousemove', function(e) {
                const rect = container.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width;
                const y = (e.clientY - rect.top) / rect.height;
                
                const zoom = 1.15;
                const panX = (x - 0.5) * 20;
                const panY = (y - 0.5) * 20;
                
                image.style.transform = `scale(${zoom}) translate(${panX}px, ${panY}px)`;
            });
            
            container.addEventListener('mouseleave', function() {
                image.style.transform = 'scale(1) translate(0, 0)';
            });
        }
    });
});

    </script>

</body>
</html>