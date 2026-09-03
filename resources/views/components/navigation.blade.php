<!-- Navigation -->
<nav style="position: fixed; top: 0; left: 0; width: 100%; z-index: 9999; padding: 16px 24px; background: transparent; transition: all 0.4s ease;" id="main-nav">
    <div style="max-width: 1280px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between;">
        <!-- Logo -->
        <a href="/" style="flex-shrink: 0;">
            <picture>
                <source media="(max-width: 768px)" srcset="{{ asset('images/logo-icon.png') }}">
                <source media="(min-width: 769px)" srcset="{{ asset('images/logo.png') }}">
                <img src="{{ asset('images/logo.png') }}" 
                     alt="Ifeanyi Nnadi"
                     style="height: 40px; width: auto; object-fit: contain;">
            </picture>
        </a>

        <!-- Desktop Navigation -->
        <div style="display: none; align-items: center; gap: 8px;" class="md-flex">
            <ul style="display: flex; align-items: center; gap: 8px; list-style: none; margin: 0; padding: 0;">
                @php
                    $navItems = [
                        'Home' => '/',
                        'About' => '/about',
                        'Advisory & Representation' => '/advisory',
                        'Talent' => '/talent-management',
                        'Contact' => '/contact'
                    ];
                    $currentPath = request()->path();
                    $currentUrl = '/' . ($currentPath === '/' ? '' : $currentPath);
                    
                    // Dropdown items
                    $dropdownItems = [
                        'Speaking' => '/',
                        'Insights' => '/',
                        'Media Centre' => '/',
                        'Case Studies' => '/'
                    ];
                @endphp
                
                @foreach ($navItems as $label => $url)
                    @php
                        $isActive = ($url === '/' && $currentUrl === '/') || 
                                    ($url !== '/' && strpos($currentUrl, $url) === 0);
                        $hasDropdown = $label === 'Advisory & Representation';
                    @endphp
                    <li style="list-style: none; position: relative;" class="{{ $hasDropdown ? 'has-dropdown' : '' }}">
                        <a href="{{ $url }}" class="nav-link {{ $isActive ? 'active' : '' }} {{ $hasDropdown ? 'dropdown-trigger' : '' }}" 
                           style="position: relative; display: block; text-transform: uppercase; text-decoration: none; font-family: 'Newsreader Text', Georgia, serif; font-size: 14px; font-weight: 600; padding: 10px 20px; letter-spacing: 0.5px; transition: 0.5s; z-index: 1; color: #c9a94e; cursor: pointer;">
                            {{ $label }}
                            @if($hasDropdown)
                                <span class="dropdown-arrow" style="display: inline-block; margin-left: 4px; font-size: 10px; transition: transform 0.3s ease;">▾</span>
                            @endif
                            @if($isActive)
                                <span class="active-indicator" style="position: absolute; bottom: 0; left: 20%; width: 60%; height: 3px; background: #c9a94e; border-radius: 2px;"></span>
                            @endif
                        </a>
                        
                        @if($hasDropdown)
                            <!-- Dropdown Menu -->
                            <ul class="dropdown-menu" style="position: absolute; top: calc(100% + 8px); left: 0; min-width: 220px; background: rgba(45, 45, 45, 0.95); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border-radius: 8px; padding: 8px 0; margin: 0; list-style: none; display: none; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3); border: 1px solid rgba(201, 169, 78, 0.12); z-index: 1000;">
                                @foreach ($dropdownItems as $dropdownLabel => $dropdownUrl)
                                    <li>
                                        <a href="{{ $dropdownUrl }}" class="dropdown-link" style="display: block; padding: 10px 20px; color: #ffffff; text-decoration: none; font-family: 'Newsreader Text', Georgia, serif; font-size: 13px; font-weight: 400; transition: all 0.3s ease; letter-spacing: 0.3px; border-left: 2px solid transparent;">
                                            {{ $dropdownLabel }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>

            <!-- Book a Strategy Session Button -->
            <a href="#" class="btn-flip-nav" style="display: inline-block; position: relative; text-align: center; letter-spacing: 1px; text-decoration: none; font-family: 'Newsreader Text', Georgia, serif; text-transform: uppercase; font-weight: 600; font-size: 11px; min-width: 160px; cursor: pointer; z-index: 10; opacity: 1; color: #fff; line-height: 36px;" data-back="Start Here" data-front="Book a Session"></a>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-toggle" style="display: block; color: #c9a94e; font-size: 24px; background: none; border: 0; cursor: pointer;" class="md-hidden">
            <svg style="width: 32px; height: 32px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" style="display: none; background: rgba(26, 42, 58, 0.95); backdrop-filter: blur(12px); margin-top: 16px; border-radius: 8px; padding: 16px;">
        @foreach ($navItems as $label => $url)
            @php
                $isActive = ($url === '/' && $currentUrl === '/') || 
                            ($url !== '/' && strpos($currentUrl, $url) === 0);
                $hasDropdown = $label === 'Advisory & Representation';
            @endphp
            <a href="{{ $url }}" class="nav-link {{ $isActive ? 'active' : '' }}" 
               style="display: block; text-transform: uppercase; text-decoration: none; font-family: 'Newsreader Text', Georgia, serif; font-size: 14px; font-weight: 600; padding: 12px 20px; text-align: center; transition: 0.5s; z-index: 1; position: relative; color: #c9a94e;">
                {{ $label }}
                @if($isActive)
                    <span class="active-indicator-mobile" style="display: block; width: 40px; height: 3px; background: #c9a94e; border-radius: 2px; margin: 6px auto 0;"></span>
                @endif
            </a>
            @if($hasDropdown)
                <!-- Mobile Dropdown Items -->
                @foreach ($dropdownItems as $dropdownLabel => $dropdownUrl)
                    <a href="{{ $dropdownUrl }}" style="display: block; padding: 8px 20px 8px 40px; color: rgba(255,255,255,0.7); text-decoration: none; font-family: 'Newsreader Text', Georgia, serif; font-size: 13px; font-weight: 400; transition: all 0.3s ease; text-align: left; border-left: 2px solid rgba(201, 169, 78, 0.3); margin-left: 20px;">
                        {{ $dropdownLabel }}
                    </a>
                @endforeach
            @endif
        @endforeach
        <div style="margin-top: 16px; display: flex; justify-content: center;">
            <a href="#" class="btn-flip-nav" style="display: inline-block; width: 100%; text-align: center; position: relative; letter-spacing: 1px; text-decoration: none; font-family: 'Newsreader Text', Georgia, serif; text-transform: uppercase; font-weight: 600; font-size: 12px; cursor: pointer; z-index: 10; opacity: 1; color: #fff; line-height: 40px;" data-back="Start Here" data-front="Book a Session"></a>
        </div>
    </div>
</nav>

<style>
    /* ========================================
       NAVIGATION STYLES
       ======================================== */

    /* Desktop nav show */
    @media (min-width: 768px) {
        .md-flex {
            display: flex !important;
        }
        .md-hidden {
            display: none !important;
        }
    }

    @media (max-width: 767px) {
        .md-flex {
            display: none !important;
        }
        .md-hidden {
            display: block !important;
        }
    }

    /* Navigation link base styles */
    .nav-link {
        position: relative;
        display: block;
        text-transform: uppercase;
        text-decoration: none;
        font-family: 'Newsreader Text', Georgia, serif;
        font-size: 14px;
        font-weight: 600;
        transition: 0.5s;
        z-index: 1;
        padding: 10px 20px;
        letter-spacing: 0.5px;
        color: #c9a94e;
    }

    /* Hover effects - only apply when NOT active */
    .nav-link:not(.active)::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top: 2px solid #c9a94e;
        border-bottom: 2px solid #c9a94e;
        transform: scaleY(2);
        opacity: 0;
        transition: 0.3s;
        pointer-events: none;
    }

    .nav-link:not(.active)::after {
        content: '';
        position: absolute;
        top: 2px;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(201, 169, 78, 0.08);
        transform: scale(0);
        opacity: 0;
        transition: 0.3s;
        z-index: -1;
        pointer-events: none;
        border-radius: 4px;
    }

    .nav-link:not(.active):hover {
        color: #c9a94e !important;
    }

    .nav-link:not(.active):hover::before {
        transform: scaleY(1);
        opacity: 1;
    }

    .nav-link:not(.active):hover::after {
        transform: scaleY(1);
        opacity: 1;
    }

    /* Active state - clean, no hover effects, gold color */
    .nav-link.active {
        color: #c9a94e !important;
        cursor: default;
    }

    /* Active indicator animation */
    .active-indicator {
        animation: pulse-glow 2s ease-in-out infinite;
    }

    @keyframes pulse-glow {
        0%, 100% {
            opacity: 1;
            transform: scaleX(1);
        }
        50% {
            opacity: 0.6;
            transform: scaleX(1.1);
        }
    }

    /* Dropdown link hover */
    .dropdown-link:hover {
        color: #c9a94e !important;
        background: rgba(201, 169, 78, 0.08);
        border-left-color: #c9a94e !important;
        padding-left: 24px !important;
    }

    /* Flip button styles */
    .btn-flip-nav:before {
        top: 0;
        left: 0;
        opacity: 1;
        color: #c9a94e;
        display: block;
        padding: 0 24px;
        line-height: 36px;
        transition: 0.5s;
        position: relative;
        background: rgba(26, 42, 58, 0.9);
        content: attr(data-front);
        transform: translateY(0) rotateX(0);
        border-radius: 4px;
        font-size: 11px;
        letter-spacing: 1px;
        white-space: nowrap;
        box-sizing: border-box;
        border: 1px solid #c9a94e;
    }

    .btn-flip-nav:after {
        top: 0;
        left: 0;
        opacity: 0;
        width: 100%;
        color: #1a2a3a;
        display: block;
        padding: 0 24px;
        line-height: 36px;
        transition: 0.5s;
        position: absolute;
        background: #c9a94e;
        content: attr(data-back);
        transform: translateY(-50%) rotateX(90deg);
        border-radius: 4px;
        font-size: 11px;
        letter-spacing: 1px;
        white-space: nowrap;
        box-sizing: border-box;
        border: 1px solid #c9a94e;
    }

    .btn-flip-nav:hover:after {
        opacity: 1;
        transform: translateY(0) rotateX(0);
    }

    .btn-flip-nav:hover:before {
        opacity: 0;
        transform: translateY(50%) rotateX(90deg);
    }

    /* Mobile menu toggle */
    #mobile-menu-toggle.active svg {
        transform: rotate(90deg);
        transition: transform 0.3s ease;
    }

    #mobile-menu.active {
        display: block !important;
    }

    /* Scrolled nav - appears when scrolling */
    #main-nav.nav-scrolled {
        background: rgba(45, 45, 45, 0.92);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25);
        padding: 12px 24px;
        border-bottom: 1px solid rgba(201, 169, 78, 0.12);
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .btn-flip-nav {
            min-width: 100%;
            font-size: 12px;
            line-height: 40px;
        }
        .btn-flip-nav:before,
        .btn-flip-nav:after {
            padding: 0 20px;
            line-height: 40px;
            font-size: 12px;
            white-space: normal;
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

        // ========================================
        // DROPDOWN TOGGLE - Fixed
        // ========================================
        const dropdownTriggers = document.querySelectorAll('.dropdown-trigger');
        let dropdownTimeout = null;
        
        dropdownTriggers.forEach(trigger => {
            const parentLi = trigger.closest('.has-dropdown');
            const dropdownMenu = parentLi ? parentLi.querySelector('.dropdown-menu') : null;
            const arrow = trigger.querySelector('.dropdown-arrow');
            
            if (dropdownMenu) {
                // Show dropdown on hover (with small delay to prevent flicker)
                parentLi.addEventListener('mouseenter', function(e) {
                    clearTimeout(dropdownTimeout);
                    dropdownMenu.style.display = 'block';
                    if (arrow) {
                        arrow.style.transform = 'rotate(180deg)';
                    }
                });
                
                // Hide dropdown with delay to allow moving to dropdown items
                parentLi.addEventListener('mouseleave', function(e) {
                    // Check if we're moving to the dropdown menu
                    const relatedTarget = e.relatedTarget;
                    if (relatedTarget && dropdownMenu.contains(relatedTarget)) {
                        return; // Don't close if moving to dropdown
                    }
                    
                    dropdownTimeout = setTimeout(function() {
                        dropdownMenu.style.display = 'none';
                        if (arrow) {
                            arrow.style.transform = 'rotate(0deg)';
                        }
                    }, 100);
                });
                
                // Keep dropdown open when hovering over it
                dropdownMenu.addEventListener('mouseenter', function() {
                    clearTimeout(dropdownTimeout);
                    this.style.display = 'block';
                });
                
                dropdownMenu.addEventListener('mouseleave', function(e) {
                    // Check if we're moving back to the trigger
                    const relatedTarget = e.relatedTarget;
                    if (relatedTarget && parentLi.contains(relatedTarget)) {
                        return; // Don't close if moving back to trigger
                    }
                    
                    dropdownTimeout = setTimeout(function() {
                        dropdownMenu.style.display = 'none';
                        if (arrow) {
                            arrow.style.transform = 'rotate(0deg)';
                        }
                    }, 100);
                });
            }
        });

        // Sticky nav - shows background when scrolling
        const nav = document.getElementById('main-nav');
        const hero = document.querySelector('.subhero') || document.querySelector('.hero-wrapper');

        function handleScroll() {
            if (nav && hero) {
                const heroHeight = hero.offsetHeight;
                if (window.scrollY > heroHeight * 0.1) {
                    nav.classList.add('nav-scrolled');
                } else {
                    nav.classList.remove('nav-scrolled');
                }
            } else if (nav) {
                // Fallback if no hero element found
                if (window.scrollY > 50) {
                    nav.classList.add('nav-scrolled');
                } else {
                    nav.classList.remove('nav-scrolled');
                }
            }
        }

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

        // Run once on load
        handleScroll();

        // Close mobile menu on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobile-menu');
                const toggleBtn = document.getElementById('mobile-menu-toggle');
                if (mobileMenu) {
                    mobileMenu.classList.remove('active');
                }
                if (toggleBtn) {
                    toggleBtn.classList.remove('active');
                }
            });
        });
    });
</script>