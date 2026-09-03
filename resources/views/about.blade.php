<!DOCTYPE html>
<html lang="en" data-palette="ink" data-type="fraunces">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Ifeanyi Nnadi</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ============================================================
           Ifeanyi Nnadi — About Page
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

        /* ---------- Belief points ---------- */
        .beliefs { display: grid; grid-template-columns: 1fr 1fr; gap: 0; }
        .belief { padding: 40px 40px 40px 0; border-bottom: 1px solid var(--rule); border-right: 1px solid var(--rule); }
        .belief:nth-child(2n) { border-right: 0; padding-left: 40px; padding-right: 0; }
        .belief:nth-last-child(-n+2) { border-bottom: 0; }
        .belief .n { font-family: var(--font-mono); font-size: 10px; letter-spacing: 0.2em; color: var(--bronze); }
        .belief p { font-family: var(--font-display); font-size: 26px; font-weight: 300; line-height: 1.2; margin: 16px 0 0; letter-spacing: -0.01em; }
        @media (max-width: 900px) { .beliefs { grid-template-columns: 1fr; } .belief { padding: 30px 0 !important; border-right: 0; } }

        /* ---------- Sectors grid ---------- */
        .sectors-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border-top: 1px solid var(--rule);
            border-bottom: 1px solid var(--rule);
        }
        .sector {
            padding: 34px 0;
            font-family: var(--font-display);
            font-weight: 300;
            font-size: 26px;
            border-right: 1px solid var(--rule);
            text-align: center;
            transition: color .3s ease, letter-spacing .3s ease;
            cursor: default;
        }
        .sector:last-child { border-right: 0; }
        .sector:hover { color: var(--bronze); font-style: italic; }
        .sector .num {
            font-family: var(--font-mono);
            font-size: 10px;
            letter-spacing: 0.2em;
            color: var(--muted);
            display: block;
            margin-bottom: 8px;
            font-style: normal;
        }
        @media (max-width: 900px) { .sectors-grid { grid-template-columns: repeat(2, 1fr); } }

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

        /* ========================================
           ABOUT HERO WITH ZOOM EFFECT (YOUR ORIGINAL)
           ======================================== */
        @keyframes slowZoom {
            0% { transform: scale(1); }
            100% { transform: scale(1.15); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s cubic-bezier(0.215, 0.61, 0.355, 1) forwards;
        }

        .about-hero-section {
            height: 100vh;
            width: 100%;
            position: relative;
            overflow: hidden;
        }

        .about-hero-section .hero-background {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .about-hero-section .hero-zoom-layer {
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            animation: slowZoom 18s ease-in-out infinite alternate;
        }

        .about-hero-section .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
        }

        .about-hero-section .hero-content {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0 var(--gutter);
            max-width: var(--maxw);
            margin: 0 auto;
        }

        .about-hero-section .hero-content-inner {
            max-width: 3xl;
        }

        .about-hero-section h1 {
            font-family: var(--font-display);
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 300;
            color: white;
            line-height: 1.2;
            font-variation-settings: "opsz" 144, "SOFT" 30, "WONK" 0;
            letter-spacing: -0.02em;
        }

        .about-hero-section h1 .text-gold {
            color: #c9a94e;
            font-style: italic;
            font-weight: 300;
            font-variation-settings: "opsz" 144, "SOFT" 50, "WONK" 1;
        }

        .about-hero-section .hero-divider {
            width: 64px;
            height: 4px;
            background: #c9a94e;
            margin: 24px 0;
        }

        .about-hero-section .hero-description {
            font-family: 'Newsreader Text', Georgia, serif;
            color: rgba(255, 255, 255, 0.8);
            font-size: clamp(1rem, 1.2vw, 1.25rem);
            max-width: 42ch;
            line-height: 1.7;
        }

        .about-hero-section .hero-description .highlight {
            color: #c9a94e;
        }

        /* Positioning block */
        .positioning {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: 80px;
            align-items: start;
        }
        .positioning p {
            font-size: 19px;
            line-height: 1.55;
            color: var(--char);
            max-width: 60ch;
        }
        .positioning p + p { margin-top: 22px; }

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
        @media (max-width: 900px) { .positioning { grid-template-columns: 1fr; gap: 30px; } }

        @media (max-width: 768px) {
            .about-hero-section h1 {
                font-size: clamp(2rem, 6vw, 2.5rem);
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
    ABOUT HERO WITH ZOOM EFFECT (YOUR ORIGINAL)
    ======================================== -->
    <section class="about-hero-section">
        <!-- Background Image with Zoom Effect -->
        <div class="hero-background scale-105"
             style="background-image: url('{{ asset('images/about-1.jpg') }}');">
        </div>
        
        <!-- Zoom Animation Layer -->
        <div class="hero-zoom-layer"
             style="background-image: url('{{ asset('images/about-1.jpg') }}');">
        </div>
        
        <!-- Dark Overlay -->
        <div class="hero-overlay"></div>

        <!-- Hero Content -->
        <div class="hero-content">
            <div class="hero-content-inner">
                <h1 class="opacity-0 animate-fadeInUp" style="animation-delay: 0.4s; animation-fill-mode: forwards;">
                    A Business <br>Leader Building <br><span class="text-gold">Brands, Reputation <br>&amp; Influence</span>
                </h1>
                <div class="hero-divider opacity-0 animate-fadeInUp" style="animation-delay: 0.6s; animation-fill-mode: forwards;"></div>
                <p class="hero-description opacity-0 animate-fadeInUp" style="animation-delay: 0.8s; animation-fill-mode: forwards;">
                    Ifeanyi Nnadi works at the intersection of strategic communications, business growth, 
                    executive positioning, and talent representation. His work helps organisations, leaders, 
                    and emerging talents build credibility, create opportunity, and strengthen long-term 
                    commercial value.
                </p>
            </div>
        </div>
    </section>

<!-- ========================================
THE JOURNEY
======================================== -->
<section class="section">
    <div class="wrap">
        <div class="section-head">
            <div>
                <div class="idx">01 · The Journey</div>
                <h2 class="display" style="font-size: clamp(28px, 3.4vw, 48px);">
                    From brand stewardship to strategic <em>influence.</em>
                </h2>
            </div>
            <div>
                <p class="lede">
                    One central idea: strong brands, respected leaders, and well-positioned talent create stronger businesses.
                </p>
            </div>
        </div>
        <div class="twocol">
            <div class="col-l">
                <div class="img-reveal" style="aspect-ratio: 3/4; background: var(--cream-2); position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="{{ asset('images/journey.jpeg') }}" 
                         alt="Ifeanyi Nnadi" 
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <div class="col-r reveal-stagger">
                <p>Over the years, Ifeanyi Nnadi has built a career around one central idea: strong brands, respected leaders, and well-positioned talent create stronger businesses and wider opportunities.</p>
                <p>His experience spans corporate communications, public relations, brand strategy, business development, and stakeholder engagement. That experience now informs a broader platform focused on advisory, representation, leadership visibility, and commercial growth.</p>
                <p>He currently serves as Marketing and Brand Manager at Transcorp Hilton Abuja, where he leads revenue-driven marketing initiatives, strategic partnerships, and brand positioning efforts.</p>
            </div>
        </div>
    </div>
</section>

    <!-- ========================================
    LEADERSHIP PHILOSOPHY
    ======================================== -->
    <section class="section ink">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="idx">02 · Philosophy</div>
                </div>
                <div>
                    <h2 class="display" data-split>
                        Leadership should create <em>clarity</em>, trust, and momentum.
                    </h2>
                </div>
            </div>
            <div class="positioning">
                <div></div>
                <div>
                    <p class="quiet reveal" style="font-size: 20px; max-width: 58ch;">
                        True leadership is not only about visibility. It is about direction, discipline, credibility, and the ability to move people and institutions forward.
                    </p>
                    <p class="quiet reveal" style="font-size: 20px; max-width: 58ch; margin-top: 24px;">
                        I believe brands perform better when leadership is clear, communication is deliberate, and reputation is managed with intention. I also believe growth becomes more sustainable when it is built on trust, strategic partnerships, and strong public positioning.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
    WHAT I BELIEVE
    ======================================== -->
    <section class="section">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="idx">03 · What I Believe</div>
                    <h2 class="display" style="font-size: clamp(28px, 3.4vw, 48px);">
                        The ideas behind the work.
                    </h2>
                </div>
                <div>
                    <p class="lede">Six beliefs that shape every engagement.</p>
                </div>
            </div>
            <div class="beliefs reveal-stagger">
                <div class="belief"><div class="n">— 01</div><p>Reputation is a growth asset.</p></div>
                <div class="belief"><div class="n">— 02</div><p>Positioning shapes opportunity.</p></div>
                <div class="belief"><div class="n">— 03</div><p>Influence should be earned, not manufactured.</p></div>
                <div class="belief"><div class="n">— 04</div><p>Strong partnerships accelerate business outcomes.</p></div>
                <div class="belief"><div class="n">— 05</div><p>African talent deserves world-class representation.</p></div>
                <div class="belief"><div class="n">— 06</div><p>Great brands are built with consistency, clarity, and commercial intelligence.</p></div>
            </div>
        </div>
    </section>

    <!-- ========================================
    INDUSTRIES SERVED
    ======================================== -->
    <section class="section cream-2">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="idx">04 · Industries Served</div>
                    <h2 class="display" style="font-size: clamp(28px, 3.4vw, 48px);">
                        Cross-sector experience with <em>commercial relevance.</em>
                    </h2>
                </div>
                <div>
                    <p class="lede">Sectors where public trust, market confidence, growth, and brand perception matter deeply.</p>
                </div>
            </div>
            <div class="sectors-grid reveal">
                <div class="sector"><span class="num">01</span>Hospitality</div>
                <div class="sector"><span class="num">02</span>Government</div>
                <div class="sector"><span class="num">03</span>NGOs</div>
                <div class="sector"><span class="num">04</span>Consumer Brands</div>
                <div class="sector"><span class="num">05</span>Luxury</div>
                <div class="sector"><span class="num">06</span>Entertainment</div>
                <div class="sector"><span class="num">07</span>Sports</div>
                <div class="sector"><span class="num">08</span>International</div>
            </div>
        </div>
    </section>

    <!-- ========================================
    GLOBAL PERSPECTIVE
    ======================================== -->
    <section class="section">
        <div class="wrap">
            <div class="twocol">
                <div class="col-l reveal">
                    <div class="idx">05 · Global Perspective</div>
                    <h3>Africa-first thinking with a <em style="font-style: italic; color: var(--bronze);">global standard.</em></h3>
                </div>
                <div class="col-r reveal-stagger">
                    <p>This platform is built from an African context, but it is not limited by geography. The vision is to advise, represent, and build relationships that connect African excellence to broader global opportunities.</p>
                    <p>Every engagement is guided by local insight, international awareness, and a commitment to building work that stands confidently on a global stage.</p>
                </div>
            </div>
        </div>
    </section>

<!-- ========================================
MEMBERSHIPS
======================================== -->
<section class="section cream-2">
    <div class="wrap">
        <div class="section-head">
            <div>
                <div class="idx">06 · Memberships &amp; Recognition</div>
                <h3 style="font-family: var(--font-display); font-weight: 300; font-size: 32px; line-height: 1.1; margin: 20px 0 0; letter-spacing: -0.01em;">
                    Committed to excellence and <em style="font-style: italic; color: var(--bronze);">professional growth.</em>
                </h3>
            </div>
            <div>
                <p class="lede">Professional affiliations and recognitions that reflect a commitment to excellence.</p>
            </div>
        </div>

        <div class="twocol" style="grid-template-columns: 1fr 1.4fr; gap: 60px; align-items: center;">
            <!-- Image - Left -->
            <div class="reveal">
                <div class="img-reveal" style="aspect-ratio: 4/3; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);">
                    <img src="{{ asset('images/section5.JPEG') }}" 
                         alt="Professional Growth" 
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <!-- Text - Right -->
            <div class="col-r reveal">
                <ul>
                    <li data-n="01">Nigerian Institute of Public Relations</li>
                    <li data-n="02">African Public Relations Association</li>
                    <li data-n="03">International Association of Business Communicators</li>
                    <li data-n="04">Marketing Society of Nigeria</li>
                    <li data-n="05">Hospitality Sales &amp; Marketing Association Intl.</li>
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
                Let us build influence with <em>intention.</em>
            </h2>
            <div class="ctas reveal">
                <a class="btn btn-primary" href="#">Book a Strategy Session 
                    <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1">
                        <line x1="1" y1="7" x2="12" y2="7"/>
                        <polyline points="7,2 12,7 7,12"/>
                    </svg>
                </a>
                <a class="btn btn-ghost" href="#">Explore Services 
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
        // Include .img-reveal in the observer
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
            const hero = document.querySelector('.about-hero-section');
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