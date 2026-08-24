<!-- ========================================
   FOOTER - Always Visible
   ======================================== -->
<footer class="bg-navy text-white relative overflow-hidden">
    <!-- Subtle gold gradient overlay at top -->
    <div class="absolute top-0 left-0 right-0 h-[2px] bg-gradient-to-r from-transparent via-gold/50 to-transparent"></div>
    
    <div class="container-custom py-10 md:py-12">
        <!-- Top Section - Logo + CTA -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 md:gap-6 border-b border-white/10 pb-6 md:pb-8">
            <!-- Left - Logo + Tagline -->
            <div class="flex items-center gap-4">
                <a href="/" class="flex-shrink-0">
                    <img src="{{ asset('images/logo-icon.png') }}" 
                         alt="Ifeanyi Nnadi" 
                         class="h-10 w-auto object-contain">
                </a>
                <div class="hidden sm:block">
                    <h3 class="font-playfair text-xl font-bold">
                        <span class="text-white">Ifeanyi</span> <span class="text-gold">Nnadi</span>
                    </h3>
                    <p class="font-text text-white/40 text-xs tracking-wider uppercase">
                        Business Leader • Reputation Strategist • Talent Manager
                    </p>
                </div>
            </div>

            <!-- Right - CTA -->
            <div class="flex flex-col items-center md:items-end gap-2">
                <p class="font-text text-white/50 text-xs text-center md:text-right">
                    For advisory, partnerships, speaking, or representation enquiries
                </p>
                <a href="#" class="btn-flip-footer" data-back="Contact Me" data-front="Get in Touch"></a>
            </div>
        </div>

        <!-- Middle Section - Bio + Quick Links -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6 md:gap-8 pt-6 md:pt-8">
            <!-- Bio - Takes 3/5 on desktop -->
            <div class="md:col-span-3">
                <h4 class="font-text text-gold text-[10px] uppercase tracking-wider font-semibold mb-2">About</h4>
                <p class="font-text text-white/60 text-sm leading-relaxed max-w-lg">
                    Ifeanyi Nnadi is a business leader, reputation strategist, hospitality growth expert, 
                    talent manager, and speaker helping brands, leaders, and talents grow with clarity, 
                    influence, and commercial purpose across Africa.
                </p>
            </div>

            <!-- Quick Links - Takes 2/5 on desktop -->
            <div class="md:col-span-2">
                <h4 class="font-text text-gold text-[10px] uppercase tracking-wider font-semibold mb-2">Quick Links</h4>
                <div class="grid grid-cols-2 gap-x-6 gap-y-1.5">
                    @php
                        $footerLinks = [
                            'Home' => '#',
                            'About' => '#',
                            'Services' => '#',
                            'Talent Management' => '#',
                            'Speaking' => '#',
                            'Insights' => '#',
                            'Media Centre' => '#',
                            'Case Studies' => '#',
                            'Contact' => '#'
                        ];
                    @endphp
                    
                    @foreach ($footerLinks as $label => $url)
                        <a href="{{ $url }}" class="font-text text-white/50 hover:text-gold text-sm transition-colors duration-300">
                            {{ $label }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Bottom Section - Social + Copyright -->
        <div class="flex flex-col md:flex-row items-center justify-between gap-3 border-t border-white/10 mt-6 md:mt-8 pt-5 md:pt-6">
            <!-- Social Icons -->
            <div class="flex items-center gap-4">
                <span class="font-text text-white/30 text-[10px] uppercase tracking-wider">Connect</span>
                <ul class="flex items-center gap-5" id="social-icons">
                    <li>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-instagram instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-whatsapp whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-x-twitter twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <i class="fa-brands fa-linkedin-in linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Copyright -->
            <p class="font-text text-white/25 text-[11px] text-center md:text-right">
                &copy; {{ date('Y') }} Ifeanyi Nnadi. All rights reserved.
            </p>
        </div>
    </div>
</footer>