<!DOCTYPE html>
<html lang="en" data-palette="ink" data-type="fraunces">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talent Management — Ifeanyi Nnadi</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ============================================================
           Ifeanyi Nnadi — Talent Page
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
        .btn-ghost.on-ink { color: var(--cream); border-color: rgba(247,243,236,.4); }
        .btn-ghost.on-ink:hover { background: var(--cream); color: var(--ink); border-color: var(--cream); }

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

        /* ---------- Topics grid ---------- */
        .topics {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0;
            border-top: 1px solid var(--rule);
        }
        .topic {
            padding: 40px 40px 40px 0;
            border-right: 1px solid var(--rule);
            border-bottom: 1px solid var(--rule);
            display: grid;
            grid-template-columns: 60px 1fr;
            gap: 20px;
            align-items: baseline;
        }
        .topic:nth-child(2n) { border-right: 0; padding-left: 40px; padding-right: 0; }
        .topic .n { font-family: var(--font-mono); font-size: 11px; color: var(--muted); letter-spacing: 0.2em; }
        .topic p { font-family: var(--font-display); font-size: 24px; font-weight: 300; line-height: 1.2; margin: 0; letter-spacing: -0.005em; }
        @media (max-width: 900px) { .topics { grid-template-columns: 1fr; } .topic { padding: 30px 0 !important; border-right: 0; } }

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

        /* ---------- Talent split ---------- */
        .talent-split { display: grid; grid-template-columns: 1fr 1fr; gap: 0; }
        .talent-panel { padding: 60px; }
        .talent-panel:first-child { background: var(--cream-2); }
        .talent-panel:last-child { background: var(--ink); color: var(--cream); }
        .talent-panel:last-child .eyebrow { color: color-mix(in oklab, var(--cream) 60%, transparent); }
        .talent-panel h3 { font-family: var(--font-display); font-weight: 300; font-size: clamp(32px, 4vw, 56px); margin: 20px 0 24px; letter-spacing: -0.02em; line-height: 1; }
        .talent-panel p { max-width: 32ch; font-size: 17px; line-height: 1.55; }
        .talent-panel:last-child p { color: color-mix(in oklab, var(--cream) 82%, transparent); }
        .talent-panel .btn { margin-top: 32px; }
        @media (max-width: 900px) { .talent-split { grid-template-columns: 1fr; } .talent-panel { padding: 40px var(--gutter); } }

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
            padding: 140px var(--gutter) 100px;
            border-bottom: 1px solid var(--rule);
            background-color: #0A1230;
            background-image: url('{{ asset('images/talent-hero-right.png') }}');
            background-size: cover;
            background-position: right center;
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
            color: var(--cream);
            text-transform: uppercase;
            margin-bottom: 40px;
            display: flex;
            gap: 14px;
            align-items: center;
        }
        .subhero .crumbs a {
            color: var(--cream);
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }
        .subhero .crumbs a:hover {
            opacity: 1;
            color: var(--bronze-soft);
        }
        .subhero h1 {
            margin: 0;
            max-width: 18ch;
            color: var(--cream);
            text-shadow: 0 2px 40px rgba(0, 0, 0, 0.3);
        }
        .subhero h1 .display em {
            color: var(--bronze-soft);
            text-shadow: 0 2px 40px rgba(0, 0, 0, 0.2);

        .subhero h1.display {
            font-size: clamp(40px, 5.5vw, 80px);
        }
        }
        .subhero .lede {
            margin-top: 30px;
            max-width: 42ch;
            color: var(--cream);
            font-family: var(--font-body);
            font-size: 18px;
            line-height: 1.55;
            font-weight: 400;
            text-shadow: 0 1px 20px rgba(0, 0, 0, 0.25);
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

        /* ---------- Feature section (Talent) ---------- */
        .feature {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 80px;
            align-items: center;
        }
        .feature-img {
            aspect-ratio: 4/5;
            background: var(--cream-2);
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }
        .feature-body h2 { margin-top: 24px; }
        .feature-body .sub {
            font-family: var(--font-display);
            font-style: italic;
            font-size: 24px;
            color: var(--bronze);
            margin: 28px 0 20px;
        }
        .feature-body p {
            color: var(--char);
            max-width: 46ch;
            font-size: 16.5px;
            line-height: 1.65;
        }
        .feature-body .ctas { display: flex; gap: 14px; margin-top: 34px; flex-wrap: wrap; }
        @media (max-width: 900px) { .feature { grid-template-columns: 1fr; gap: 40px; } }
    </style>
</head>
<body>

    <!-- ========================================
    NAVIGATION
    ======================================== -->
    @include('components.navigation')

    <!-- ========================================
    TALENT HERO
    ======================================== -->
    <section class="subhero">
        <div class="subhero-grid">
            <div>
                <div class="crumbs">
                    <a href="/">Home</a>
                    <span>—</span>
                    <span>Talent Management</span>
                </div>
                <h1 class="display" data-split style="font-size: clamp(42px, 6vw, 84px);">
                    We represent <em>exceptional people</em> before the world discovers them.
                </h1>
                <p class="lede">
                    Talent Management is built for the next generation of influential professionals, creators, executives, speakers, athletes, hospitality leaders, and public figures who need serious positioning, strategic visibility, and long-term career growth.
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================
    WHAT THIS MEANS
    ======================================== -->
    <section class="section">
        <div class="wrap">
            <div class="feature">
                <div class="feature-img img-reveal" style="aspect-ratio: 4/5; background: var(--cream-2); position: relative; overflow: hidden; border-radius: 8px;">
                    <img src="{{ asset('images/talent-1.jpg') }}" 
                         alt="Talent Management" 
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="feature-body reveal">
                    <div class="eyebrow">— 01 · What This Means</div>
                    <h2 class="display">Representation with <em>substance.</em></h2>
                    <p style="margin-top: 30px;">
                        This is not celebrity management built around noise. It is strategic representation built around potential, credibility, commercial alignment, and sustained relevance.
                    </p>
                    <p style="margin-top: 16px;">
                        The focus is on helping exceptional people become visible in the right spaces, trusted by the right audiences, and connected to the right opportunities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
    WHO WE REPRESENT
    ======================================== -->
    <section class="section cream-2">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="idx">02 · Who We Represent</div>
                    <h2 class="display" style="font-size: clamp(28px, 3.4vw, 48px);">
                        Who this is <em>for.</em>
                    </h2>
                </div>
                <div>
                    <p class="lede">Six categories, one standard: substance, credibility, commercial alignment.</p>
                </div>
            </div>
            <div class="sectors-grid reveal">
                <div class="sector"><span class="num">01</span>Executives</div>
                <div class="sector"><span class="num">02</span>Creators</div>
                <div class="sector"><span class="num">03</span>Speakers</div>
                <div class="sector"><span class="num">04</span>Athletes</div>
                <div class="sector"><span class="num">05</span>Hospitality</div>
                <div class="sector"><span class="num">06</span>Public Figures</div>
                <div class="sector"><span class="num">07</span>Founders</div>
                <div class="sector"><span class="num">08</span>Thought Leaders</div>
            </div>
        </div>
    </section>

    <!-- ========================================
    SERVICES INCLUDED
    ======================================== -->
    <section class="section">
        <div class="wrap">
            <div class="section-head">
                <div>
                    <div class="idx">03 · Services Included</div>
                    <h2 class="display" style="font-size: clamp(28px, 3.4vw, 48px);">
                        What representation <em>covers.</em>
                    </h2>
                </div>
                <div>
                    <p class="lede">End-to-end representation across nine strategic dimensions.</p>
                </div>
            </div>
            <div class="topics reveal">
                <div class="topic"><span class="n">— 01</span><p>Personal Branding</p></div>
                <div class="topic"><span class="n">— 02</span><p>PR &amp; Media Positioning</p></div>
                <div class="topic"><span class="n">— 03</span><p>Commercial Partnerships</p></div>
                <div class="topic"><span class="n">— 04</span><p>Brand Endorsements</p></div>
                <div class="topic"><span class="n">— 05</span><p>Speaking Engagements</p></div>
                <div class="topic"><span class="n">— 06</span><p>Media Representation</p></div>
                <div class="topic"><span class="n">— 07</span><p>Digital Strategy</p></div>
                <div class="topic"><span class="n">— 08</span><p>Career Positioning</p></div>
            </div>
        </div>
    </section>

    <!-- ========================================
    SPLIT — FOR TALENT / FOR BRANDS
    ======================================== -->
    <section class="section" style="padding: 0;">
        <div class="talent-split">
            <div class="talent-panel reveal">
                <div class="eyebrow">— For Talent</div>
                <h3>For talent ready to grow with <em style="color: var(--bronze); font-style: italic;">structure.</em></h3>
                <p>If you have the capability, voice, expertise, or public potential to build something meaningful, this platform helps you shape the narrative, strengthen your profile, and access higher-level opportunities.</p>
                <a class="btn btn-primary" href="#">Apply for Representation <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
            </div>
            <div class="talent-panel reveal">
                <div class="eyebrow">— For Brands</div>
                <h3 style="color: var(--cream);">For brands seeking <em style="color: var(--bronze-soft); font-style: italic;">credible people</em> with real value.</h3>
                <p>Brands increasingly need talent who can do more than attract attention. They need professionals and personalities with trust, relevance, clarity, and market fit. This platform helps connect brands with talent that can represent them with substance.</p>
                <a class="btn btn-ghost on-ink" href="#">Hire Talent <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
            </div>
        </div>
    </section>

<!-- ========================================
APPROACH
======================================== -->
<section class="section">
    <div class="wrap">
        <div class="section-head">
            <div>
                <div class="idx">04 · Approach</div>
                <h3 style="font-family: var(--font-display); font-weight: 300; font-size: 32px; line-height: 1.1; margin: 20px 0 0; letter-spacing: -0.01em;">
                    How representation <em style="color: var(--bronze); font-style: italic;">works.</em>
                </h3>
            </div>
            <div>
                <p class="lede">Each representation relationship begins with fit.</p>
            </div>
        </div>

        <div class="approach-content" style="display: grid; grid-template-columns: 1fr 1.4fr; gap: 60px; align-items: center;">
            <!-- Image -->
            <div class="reveal">
                <div class="img-reveal" style="aspect-ratio: 4/3; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);">
                    <img src="{{ asset('images/representation.jpg') }}" 
                         alt="Representation" 
                         style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
            <!-- Text -->
            <div class="reveal">
                <p style="color: var(--char); font-size: 17px; line-height: 1.65; max-width: 58ch;">
                    Understanding the talent, the market opportunity, the positioning gap, and the growth path. From there, strategy is built around visibility, partnerships, profile development, and long-term commercial value.
                </p>
                <ul style="padding-left: 0; list-style: none; margin: 20px 0 0;">
                    <li style="padding: 14px 0; border-bottom: 1px solid var(--rule); font-family: var(--font-display); font-size: 22px; font-weight: 300; color: var(--ink); display: flex; justify-content: space-between; align-items: baseline;">
                        <span style="font-family: var(--font-mono); font-size: 10px; color: var(--muted); letter-spacing: 0.2em; margin-right: 20px;">01</span>
                        Discovery — fit, potential, positioning
                    </li>
                    <li style="padding: 14px 0; border-bottom: 1px solid var(--rule); font-family: var(--font-display); font-size: 22px; font-weight: 300; color: var(--ink); display: flex; justify-content: space-between; align-items: baseline;">
                        <span style="font-family: var(--font-mono); font-size: 10px; color: var(--muted); letter-spacing: 0.2em; margin-right: 20px;">02</span>
                        Strategy — narrative, audience, opportunity map
                    </li>
                    <li style="padding: 14px 0; border-bottom: 1px solid var(--rule); font-family: var(--font-display); font-size: 22px; font-weight: 300; color: var(--ink); display: flex; justify-content: space-between; align-items: baseline;">
                        <span style="font-family: var(--font-mono); font-size: 10px; color: var(--muted); letter-spacing: 0.2em; margin-right: 20px;">03</span>
                        Execution — PR, partnerships, media, speaking
                    </li>
                    <li style="padding: 14px 0; border-bottom: 1px solid var(--rule); font-family: var(--font-display); font-size: 22px; font-weight: 300; color: var(--ink); display: flex; justify-content: space-between; align-items: baseline;">
                        <span style="font-family: var(--font-mono); font-size: 10px; color: var(--muted); letter-spacing: 0.2em; margin-right: 20px;">04</span>
                        Growth — long-term commercial value
                    </li>
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
                Built for people with <em>more to become.</em>
            </h2>
            <div class="ctas reveal">
                <a class="btn btn-primary" href="#">Apply for Representation 
                    <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1">
                        <line x1="1" y1="7" x2="12" y2="7"/>
                        <polyline points="7,2 12,7 7,12"/>
                    </svg>
                </a>
                <a class="btn btn-ghost" href="#">Hire Talent 
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