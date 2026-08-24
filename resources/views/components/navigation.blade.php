<!-- Navigation -->
<nav class="fixed top-0 left-0 w-full z-50 py-4 px-6 md:px-12 bg-transparent transition-all duration-300 ease-in-out" id="main-nav">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="/" class="flex-shrink-0">
                <picture>
                    <!-- Mobile: logo-icon.png (up to 768px) -->
                     <source 
                        media="(max-width: 768px)"
                        srcset="{{ asset('images/logo-icon.png') }}">
                        
                    <!-- Desktop: logo.png (above 768px) -->
                    <source
                        media="(min-width: 769px)" 
                        srcset="{{ asset('images/logo.png') }}">

                    <!-- Fallback image -->
                    <img src="{{ asset('images/logo.png') }}" 
                        alt="Ifeanyi Nnadi"
                        class="h-10 md:h-12 lg:h-14 w-auto object-contain">

                </picture>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center flex-1 justify-end">
                <ul class="flex items-center space-x-2">
                    @php
                        $navItems = ['Home', 'About', 'Advisory and Representation', 'Talent Management', 'Contact'];
                    @endphp
                    
                    @foreach ($navItems as $item)
                        <li class="list-none">
                            <a href="#" class="nav-link relative block uppercase tracking-wider text-white 
                                              px-5 py-2 transition-colors duration-300 z-10
                                              font-text text-sm font-semibold">
                                {{ $item }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <!-- Book a Strategy Session Button - Pushed to the Right -->
                <a href="#" class="btn-flip-nav ml-6 flex-shrink-0" data-back="Start Here" data-front="Book a Strategy Session"></a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-toggle" class="md:hidden text-white text-2xl focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-navy/90 backdrop-blur-sm mt-4 rounded-lg p-4">
            @foreach ($navItems as $item)
                <a href="#" class="nav-link relative block uppercase tracking-wider text-white 
                                  px-5 py-3 transition-colors duration-300 z-10 text-center
                                  font-text text-sm font-semibold">
                    {{ $item }}
                </a>
            @endforeach
            <div class="mt-4 flex justify-center">
                <a href="#" class="btn-flip-nav w-full text-center" data-back="Start Here" data-front="Book a Strategy Session"></a>
            </div>
        </div>
    </div>
</nav>

<style>
    /* ========================================
       NAVIGATION LINK ANIMATION
       ======================================== */
    .nav-link {
        position: relative;
        display: block;
        text-transform: uppercase;
        text-decoration: none;
        color: #ffffff;
        font-family: 'Newsreader Text', Georgia, serif;
        font-size: 14px;
        font-weight: 600;
        transition: 0.5s;
        z-index: 1;
        padding: 10px 20px;
        letter-spacing: 0.5px;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top: 2px solid #ffffff;
        border-bottom: 2px solid #ffffff;
        transform: scaleY(2);
        opacity: 0;
        transition: 0.3s;
        pointer-events: none;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        top: 2px;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #1a2a3a;
        transform: scale(0);
        opacity: 0;
        transition: 0.3s;
        z-index: -1;
        pointer-events: none;
    }

    .nav-link:hover {
        color: #c9a94e !important;
    }

    .nav-link:hover::before {
        transform: scaleY(1);
        opacity: 1;
    }

    .nav-link:hover::after {
        transform: scaleY(1);
        opacity: 1;
    }

    /* ========================================
       NAVIGATION FLIP BUTTON (Smaller Version)
       ======================================== */
    .btn-flip-nav {
        opacity: 1;
        outline: 0;
        color: #fff;
        line-height: 36px;
        position: relative;
        text-align: center;
        letter-spacing: 1px;
        display: inline-block;
        text-decoration: none;
        font-family: 'Newsreader Text', Georgia, serif;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 11px;
        min-width: 180px;
        cursor: pointer;
    }

    .btn-flip-nav:before {
        top: 0;
        left: 0;
        opacity: 1;
        color: #c9a94e;
        display: block;
        padding: 0 20px;
        line-height: 36px;
        transition: 0.5s;
        position: relative;
        background: #1a2a3a;
        content: attr(data-front);
        transform: translateY(0) rotateX(0);
        border-radius: 2px;
    }

    .btn-flip-nav:after {
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

    .btn-flip-nav:hover:after {
        opacity: 1;
        transform: translateY(0) rotateX(0);
    }

    .btn-flip-nav:hover:before {
        opacity: 0;
        transform: translateY(50%) rotateX(90deg);
    }

    /* Mobile Menu Toggle */
    #mobile-menu-toggle.active svg {
        transform: rotate(90deg);
        transition: transform 0.3s ease;
    }

    #mobile-menu.active {
        display: block !important;
    }



    @media (max-width: 768px) {
        .nav-link {
            font-size: 13px;
            padding: 8px 16px;
        }
        
        .btn-flip-nav {
            min-width: 100%;
            font-size: 12px;
            line-height: 40px;
        }
        
        .btn-flip-nav:before,
        .btn-flip-nav:after {
            padding: 0 20px;
            line-height: 40px;
        }
    }
</style>

<script>
    // Mobile Menu Toggle
    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (toggleBtn && mobileMenu) {
            toggleBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('active');
                this.classList.toggle('active');
            });
        }
    });
</script>