<!DOCTYPE html>
<html lang="en" data-palette="ink" data-type="fraunces">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisory & Representation — Ifeanyi Nnadi</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ============================================================
           Ifeanyi Nnadi — Advisory Page
           Palette + type tokens
           ============================================================ */

        :root {
            --ink: #0F1B3D;
            --ink-deep: #0A1230;
            --cream: #F7F3EC;
            --cream-2: #EFE9DC;
            --paper: #FFFFFF;
            --char: #2A2A2F;
            --bronze: #B08D57;
            --bronze-soft: #C9A87A;
            --rule: rgba(15, 27, 61, 0.14);
            --rule-strong: rgba(15, 27, 61, 0.32);
            --muted: #6B6558;

            --font-display: "Fraunces", "Times New Roman", serif;
            --font-body: "Inter Tight", ui-sans-serif, system-ui, sans-serif;
            --font-mono: "JetBrains Mono", ui-monospace, monospace;

            --maxw: 1360px;
            --gutter: clamp(20px, 4vw, 64px);
        }

        /* ---------- Reset & base ---------- */
        *, *::before, *::after { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; }
        body {
            font-family: var(--font-body);
            font-size: 17px;
            line-height: 1.55;
            color: var(--ink);
            background: var(--cream);
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            overflow-x: hidden;
        }
        img { display: block; max-width: 100%; }
        a { color: inherit; text-decoration: none; }

        ::selection { background: var(--bronze); color: var(--cream); }

        /* ---------- Type primitives ---------- */
        .eyebrow {
            font-family: var(--font-body);
            font-size: 11px;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            font-weight: 500;
            color: var(--muted);
            display: inline-flex;
            align-items: center;
            gap: 12px;
        }
        .eyebrow::before {
            content: "";
            width: 28px;
            height: 1px;
            background: var(--bronze);
        }
        .eyebrow.no-rule::before { display: none; }

        .display {
            font-family: var(--font-display);
            font-weight: 300;
            font-variation-settings: "opsz" 144, "SOFT" 30, "WONK" 0;
            line-height: 0.98;
            letter-spacing: -0.02em;
            color: var(--ink);
            text-wrap: balance;
        }
        .display em, .display .it {
            font-style: italic;
            font-weight: 300;
            color: var(--bronze);
            font-variation-settings: "opsz" 144, "SOFT" 50, "WONK" 1;
        }
        h1.display { font-size: clamp(48px, 8vw, 128px); }
        h2.display { font-size: clamp(36px, 5.6vw, 84px); }
        h3.display { font-size: clamp(28px, 3.4vw, 52px); }

        .mono { font-family: var(--font-mono); font-size: 12px; letter-spacing: 0.05em; }

        .lede {
            font-family: var(--font-display);
            font-weight: 300;
            font-size: clamp(20px, 2.1vw, 30px);
            line-height: 1.35;
            color: var(--ink);
            letter-spacing: -0.005em;
            max-width: 30ch;
        }

        /* ---------- Layout ---------- */
        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 var(--gutter);
        }
        .rule { height: 1px; background: var(--rule); border: 0; }
        .rule-strong { height: 1px; background: var(--rule-strong); border: 0; }

        /* ---------- Sections ---------- */
        .section {
            padding: clamp(80px, 12vw, 160px) 0;
            position: relative;
        }
        .section.ink {
            background: var(--ink);
            color: var(--cream);
        }
        .section.ink .eyebrow { color: color-mix(in oklab, var(--cream) 65%, transparent); }
        .section.ink .display { color: var(--cream); }
        .section.ink .display em { color: var(--bronze-soft); }
        .section.ink .rule { background: rgba(247,243,236,0.14); }
        .section.ink .quiet { color: color-mix(in oklab, var(--cream) 70%, transparent); }
        .section.cream-2 { background: var(--cream-2); }

        .section-head {
            display: grid;
            grid-template-columns: 1fr 1.6fr;
            gap: 60px;
            padding-bottom: 60px;
            align-items: end;
            border-bottom: 1px solid var(--rule);
            margin-bottom: 80px;
        }
        .section-head .idx {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.2em;
            color: var(--muted);
            text-transform: uppercase;
        }
        .section-head h2 { margin: 20px 0 0; }
        .section-head p.lede { margin: 0; max-width: 40ch; }

        @media (max-width: 900px) {
            .section-head { grid-template-columns: 1fr; gap: 20px; padding-bottom: 30px; margin-bottom: 40px; }
        }

        /* ---------- Buttons ---------- */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 16px 26px;
            border-radius: 999px;
            font-size: 13px;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            transition: transform .2s ease, background .25s ease, color .25s ease;
            border: 1px solid transparent;
            cursor: pointer;
            text-decoration: none;
        }
        .btn .arrow {
            width: 14px; height: 14px;
            transition: transform .3s ease;
        }
        .btn:hover .arrow { transform: translateX(4px); }
        .btn-primary { background: var(--ink); color: var(--cream); border-color: var(--ink); }
        .btn-primary:hover { background: var(--bronze); border-color: var(--bronze); color: var(--cream); }
        .btn-ghost { border-color: var(--rule-strong); color: var(--ink); }
        .btn-ghost:hover { border-color: var(--ink); background: var(--ink); color: var(--cream); }

        /* ---------- Two-column editorial ---------- */
        .twocol {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 80px;
            align-items: start;
        }
        .twocol .col-l h3 {
            font-family: var(--font-display);
            font-weight: 300;
            font-size: 32px;
            line-height: 1.1;
            margin: 0 0 20px;
            letter-spacing: -0.01em;
        }
        .twocol .col-l .idx {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.2em;
            color: var(--muted);
            margin-bottom: 20px;
        }
        .twocol p {
            color: var(--char);
            font-size: 17px;
            line-height: 1.65;
            max-width: 58ch;
        }
        .twocol p + p { margin-top: 18px; }
        .twocol ul { padding-left: 0; list-style: none; margin: 20px 0 0; }
        .twocol ul li {
            padding: 14px 0;
            border-bottom: 1px solid var(--rule);
            font-family: var(--font-display);
            font-size: 22px;
            font-weight: 300;
            color: var(--ink);
            display: flex;
            justify-content: space-between;
            align-items: baseline;
        }
        .twocol ul li::before {
            content: attr(data-n);
            font-family: var(--font-mono);
            font-size: 10px;
            color: var(--muted);
            letter-spacing: 0.2em;
            margin-right: 20px;
        }
        @media (max-width: 900px) { .twocol { grid-template-columns: 1fr; gap: 30px; } }

        /* ---------- Service accordion ---------- */
        .serv-list { border-top: 1px solid var(--rule); }
        .serv {
            padding: 60px 0;
            border-bottom: 1px solid var(--rule);
            display: grid;
            grid-template-columns: 80px 1fr 1.2fr auto;
            gap: 40px;
            align-items: start;
            transition: padding-left .35s ease;
        }
        .serv:hover { padding-left: 20px; }
        .serv .num { font-family: var(--font-mono); font-size: 12px; letter-spacing: 0.2em; color: var(--muted); }
        .serv h3 {
            font-family: var(--font-display);
            font-weight: 300;
            font-size: clamp(28px, 3vw, 42px);
            margin: 0;
            line-height: 1.05;
            letter-spacing: -0.02em;
            max-width: 12ch;
        }
        .serv .body p { color: var(--char); font-size: 16px; line-height: 1.65; max-width: 42ch; margin: 0; }
        .serv .body ul { margin: 20px 0 0; padding: 0; list-style: none; display: grid; grid-template-columns: 1fr 1fr; gap: 8px 24px; }
        .serv .body ul li { font-size: 14px; padding: 6px 0; border-bottom: 1px solid var(--rule); }
        .serv .body ul li::before { content: "— "; color: var(--bronze); }
        .serv .go { font-family: var(--font-mono); font-size: 24px; color: var(--muted); transition: color .3s, transform .3s; }
        .serv:hover .go { color: var(--bronze); transform: translateX(6px); }
        @media (max-width: 900px) {
            .serv { grid-template-columns: 1fr; gap: 20px; padding: 40px 0; }
            .serv .go { display: none; }
            .serv .body ul { grid-template-columns: 1fr; }
        }

        /* ---------- Final CTA ---------- */
        .finalcta {
            padding: clamp(100px, 15vw, 200px) 0;
            text-align: center;
        }
        .finalcta h2 { max-width: 22ch; margin: 0 auto; }
        .finalcta .ctas { margin-top: 60px; display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }

        /* ---------- Reveal animations ---------- */
        .reveal { opacity: 0; transform: translateY(24px); transition: opacity .9s cubic-bezier(.2,.7,.2,1), transform .9s cubic-bezier(.2,.7,.2,1); }
        .reveal.in { opacity: 1; transform: translateY(0); }
        .reveal-stagger > * { opacity: 0; transform: translateY(24px); transition: opacity .8s cubic-bezier(.2,.7,.2,1), transform .8s cubic-bezier(.2,.7,.2,1); }
        .reveal-stagger.in > * { opacity: 1; transform: translateY(0); }
        .reveal-stagger.in > *:nth-child(1) { transition-delay: .0s; }
        .reveal-stagger.in > *:nth-child(2) { transition-delay: .08s; }
        .reveal-stagger.in > *:nth-child(3) { transition-delay: .16s; }
        .reveal-stagger.in > *:nth-child(4) { transition-delay: .24s; }
        .reveal-stagger.in > *:nth-child(5) { transition-delay: .32s; }
        .reveal-stagger.in > *:nth-child(6) { transition-delay: .40s; }
        .reveal-stagger.in > *:nth-child(7) { transition-delay: .48s; }
        .reveal-stagger.in > *:nth-child(8) { transition-delay: .56s; }

        /* Split text */
        .split-word {
            display: inline-block;
            opacity: 0;
            transform: translateY(0.3em);
            transition: opacity .7s cubic-bezier(.2,.7,.2,1), transform .7s cubic-bezier(.2,.7,.2,1);
        }
        .split-in .split-word { opacity: 1; transform: translateY(0); }
        .split-in .split-word:nth-child(1) { transition-delay: 0ms; }
        .split-in .split-word:nth-child(2) { transition-delay: 40ms; }
        .split-in .split-word:nth-child(3) { transition-delay: 80ms; }
        .split-in .split-word:nth-child(4) { transition-delay: 120ms; }
        .split-in .split-word:nth-child(5) { transition-delay: 160ms; }
        .split-in .split-word:nth-child(6) { transition-delay: 200ms; }
        .split-in .split-word:nth-child(7) { transition-delay: 240ms; }
        .split-in .split-word:nth-child(8) { transition-delay: 280ms; }
        .split-in .split-word:nth-child(9) { transition-delay: 320ms; }
        .split-in .split-word:nth-child(10) { transition-delay: 360ms; }

        /* ---------- Utilities ---------- */
        .quiet { color: var(--muted); }
        .center { text-align: center; }

        /* ---------- Image reveal clip ---------- */
        .img-reveal {
            position: relative;
            overflow: hidden;
        }
        .img-reveal::after {
            content: "";
            position: absolute;
            inset: 0;
            background: var(--cream);
            transform-origin: right center;
            transform: scaleX(1);
            transition: transform 1.1s cubic-bezier(.7, 0, .2, 1);
            pointer-events: none;
            z-index: 1;
        }
        .img-reveal.in::after {
            transform: scaleX(0);
        }
        .section.ink .img-reveal::after {
            background: var(--ink);
        }

        /* ---------- Sub-page hero with background image ---------- */
        .subhero {
            padding: 120px var(--gutter) 100px;
            border-bottom: 1px solid var(--rule);
            background-color: #EFE9DC;
            background-image: url('{{ asset('images/advisory.png') }}');
            background-size: cover;
            background-position: right top;
            background-repeat: no-repeat;
            min-height: 80vh;
            display: flex;
            align-items: center;
            position: relative;
        }
        .subhero-grid {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 40px;
            align-items: end;
            max-width: var(--maxw);
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 2;
        }
        .subhero .crumbs {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.14em;
            color: var(--muted);
            text-transform: uppercase;
            margin-bottom: 40px;
            display: flex;
            gap: 14px;
            align-items: center;
        }
        .subhero .crumbs a {
            color: var(--muted);
            transition: color 0.3s ease;
        }
        .subhero .crumbs a:hover { 
            color: var(--bronze); 
        }
        .subhero h1 {
            margin: 0;
            max-width: 18ch;
            color: var(--ink);
        }
        .subhero h1 .display em {
            color: var(--bronze);
        }
        .subhero .lede {
            margin-top: 30px;
            max-width: 42ch;
            color: var(--char);
            font-family: var(--font-body);
            font-size: 18px;
            line-height: 1.55;
            font-weight: 400;
        }

        @media (max-width: 900px) {
            .subhero-grid { grid-template-columns: 1fr; gap: 20px; }
            .subhero { 
                padding: 140px var(--gutter) 60px;
                min-height: 70vh;
                background-size: cover;
                background-position: center 30%;
            }
        }
    </style>
</head>
<body>

    <!-- ========================================
    NAVIGATION
    ======================================== -->
    @include('components.navigation')

    <!-- ========================================
    ADVISORY HERO
    ======================================== -->
    <section class="subhero">
        <div class="subhero-grid">
            <div>
                <div class="crumbs">
                    <a href="/">Home</a>
                    <span>—</span>
                    <span>Advisory &amp; Representation</span>
                </div>
                <h1 class="display" data-split style="font-size: clamp(42px, 6vw, 84px);">
                    Advisory and representation built for <em>growth</em>, visibility, and commercial value.
                </h1>
                <p class="lede">
                    Strategic support for organisations, executives, and high-potential talent looking to strengthen reputation, improve positioning, unlock partnerships, and grow with purpose.
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================
    OVERVIEW
    ======================================== -->
    <section class="section">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="idx">Overview</div>
                    <h2 class="display" style="font-size: clamp(28px, 3.4vw, 48px);">
                        One platform, multiple paths to <em>growth.</em>
                    </h2>
                </div>
                <div>
                    <p class="lede">
                        The services are designed around a simple outcome: helping people and organisations become more visible, more trusted, and more commercially effective.
                    </p>
                </div>
            </div>

            <div class="serv-list">
                <a class="serv reveal" href="#">
                    <div class="num">— 01</div>
                    <h3>Executive Advisory</h3>
                    <div class="body">
                        <p>For leaders who need stronger positioning, clearer communication, and a more intentional public presence.</p>
                        <ul>
                            <li>Brand Positioning</li>
                            <li>Reputation Strategy</li>
                            <li>Executive Communications</li>
                            <li>Commercial Partnerships</li>
                        </ul>
                    </div>
                    <div class="go">→</div>
                </a>

                <a class="serv reveal" href="#">
                    <div class="num">— 02</div>
                    <h3>Corporate Consulting</h3>
                    <div class="body">
                        <p>For organisations looking to strengthen brand perception, stakeholder confidence, communications effectiveness, and growth strategy.</p>
                        <ul>
                            <li>Communications Strategy</li>
                            <li>Hospitality Marketing</li>
                            <li>Destination Marketing</li>
                            <li>Crisis Communications</li>
                            <li>Employer Branding</li>
                            <li>Brand Partnerships</li>
                            <li>Stakeholder Engagement</li>
                        </ul>
                    </div>
                    <div class="go">→</div>
                </a>

                <a class="serv reveal" href="#">
                    <div class="num">— 03</div>
                    <h3>Talent Management</h3>
                    <div class="body">
                        <p>For exceptional professionals and public-facing talent who need strategic representation, not surface-level promotion.</p>
                        <ul>
                            <li>Personal Branding</li>
                            <li>PR</li>
                            <li>Commercial Partnerships</li>
                            <li>Brand Endorsements</li>
                            <li>Speaking Engagements</li>
                            <li>Media Representation</li>
                            <li>Digital Strategy</li>
                            <li>Career Positioning</li>
                            <li>International Opportunities</li>
                        </ul>
                    </div>
                    <div class="go">→</div>
                </a>

                <a class="serv reveal" href="#">
                    <div class="num">— 04</div>
                    <h3>Speaking &amp; Knowledge Platforms</h3>
                    <div class="body">
                        <p>Ifeanyi Nnadi also brings insights to rooms where leadership, brand growth, hospitality, reputation, and the future of African business are being discussed.</p>
                        <ul>
                            <li>Corporate Conferences</li>
                            <li>Universities</li>
                            <li>Leadership Summits</li>
                            <li>Hospitality Forums</li>
                            <li>Brand Conferences</li>
                        </ul>
                    </div>
                    <div class="go">→</div>
                </a>
            </div>
        </div>
    </section>

    <!-- ========================================
    ENGAGEMENT MODEL
    ======================================== -->
    <section class="section cream-2">
        <div class="wrap">
            <div class="twocol">
                <div class="col-l reveal">
                    <div class="idx">Engagement Model</div>
                    <h3>How we <em style="color: var(--bronze); font-style: italic;">work.</em></h3>
                </div>
                <div class="col-r reveal">
                    <p>Engagements can begin as a focused advisory session, a project-based consulting mandate, or an ongoing strategic partnership depending on the need, scope, and growth objective.</p>
                    <ul style="margin-top: 30px;">
                        <li data-n="01">Advisory Session — 90 minutes, focused strategic guidance</li>
                        <li data-n="02">Project Mandate — 3–6 month scoped engagement</li>
                        <li data-n="03">Strategic Partnership — ongoing retainer, embedded thinking</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
    FINAL CTA
    ======================================== -->
    <section class="finalcta section">
        <div class="wrap">
            <div class="eyebrow reveal" style="justify-content: center; display: inline-flex;">— the next move</div>
            <h2 class="display reveal" style="margin-top: 30px;" data-split>
                Every strong move starts with <em>strategy.</em>
            </h2>
            <div class="ctas reveal">
                <a class="btn btn-primary" href="{{ url('/contact?inquiry=book-session#contact-form') }}">Book a Strategy Session 
                    <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1">
                        <line x1="1" y1="7" x2="12" y2="7"/>
                        <polyline points="7,2 12,7 7,12"/>
                    </svg>
                </a>
                <a class="btn btn-ghost" href="{{ url('/contact?inquiry=advisory#contact-form') }}">Hire My Team 
                    <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1">
                        <line x1="1" y1="7" x2="12" y2="7"/>
                        <polyline points="7,2 12,7 7,12"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ========================================
    FOOTER
    ======================================== -->
    @include('components.footer')

    <!-- ========================================
    JAVASCRIPT
    ======================================== -->
    <script>
        // ========================================
        // REVEAL ANIMATIONS
        // ========================================
        (function () {
            const IO_OPTS = { threshold: 0.15, rootMargin: "0px 0px -80px 0px" };

            function initReveals(root = document) {
                const io = new IntersectionObserver((entries, obs) => {
                    entries.forEach(e => {
                        if (e.isIntersecting) {
                            e.target.classList.add("in");
                            obs.unobserve(e.target);
                        }
                    });
                }, IO_OPTS);
                root.querySelectorAll(".reveal, .reveal-stagger, .img-reveal").forEach(el => io.observe(el));

                // Split text
                root.querySelectorAll("[data-split]").forEach(el => {
                    if (el.dataset.splitDone) return;
                    const words = el.textContent.trim().split(/\s+/);
                    el.innerHTML = words.map(w => `<span class="split-word">${w}</span>`).join(" ");
                    el.dataset.splitDone = "1";
                });
                const splitIO = new IntersectionObserver((entries, obs) => {
                    entries.forEach(e => {
                        if (e.isIntersecting) {
                            e.target.classList.add("split-in");
                            obs.unobserve(e.target);
                        }
                    });
                }, { threshold: 0.4 });
                root.querySelectorAll("[data-split]").forEach(el => splitIO.observe(el));
            }

            document.addEventListener("DOMContentLoaded", () => {
                initReveals();

                // Also check if any img-reveal elements are already visible
                document.querySelectorAll('.img-reveal').forEach(el => {
                    const rect = el.getBoundingClientRect();
                    const windowHeight = window.innerHeight;
                    if (rect.top < windowHeight * 0.8) {
                        el.classList.add('in');
                    }
                });
            });
        })();

        // ========================================
        // STICKY NAVIGATION
        // ========================================
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.getElementById('main-nav');
            const hero = document.querySelector('.subhero');
            let lastScrollY = window.scrollY;

            function handleScroll() {
                const currentScrollY = window.scrollY;
                const heroHeight = hero ? hero.offsetHeight : 0;

                if (currentScrollY > heroHeight * 0.1) {
                    nav.classList.add('nav-scrolled');
                } else {
                    nav.classList.remove('nav-scrolled');
                }

                lastScrollY = currentScrollY;
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

            handleScroll();
        });
    </script>

</body>
</html>