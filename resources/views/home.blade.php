<!DOCTYPE html>
<html lang="en" data-palette="ink" data-type="fraunces">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifeanyi Nnadi — Business Leader · Reputation Strategist · Talent Manager</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ============================================================
           Ifeanyi Nnadi — Editorial Personal Site
           Palette + type tokens (driven by Tweaks via CSS vars on :root)
           ============================================================ */

        :root {
            /* Palette — default: Ink Editorial */
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

            /* Type — default pairing A: Fraunces + Inter Tight */
            --font-display: "Fraunces", "Times New Roman", serif;
            --font-body: "Inter Tight", ui-sans-serif, system-ui, sans-serif;
            --font-mono: "JetBrains Mono", ui-monospace, monospace;

            /* Scale */
            --step-0: 15px;
            --step-1: 17px;
            --step-2: 22px;
            --step-3: 30px;
            --step-4: 44px;
            --step-5: 68px;
            --step-6: 104px;
            --step-7: 148px;

            --maxw: 1360px;
            --gutter: clamp(20px, 4vw, 64px);
        }

        /* Palette variants triggered by data attribute on <html> */
        html[data-palette="cream"] {
            --ink: #1A1A1A;
            --ink-deep: #0F0F0F;
            --cream: #F1EBDF;
            --cream-2: #E7E0D0;
            --char: #2A2A2F;
            --bronze: #B08D57;
            --rule: rgba(26, 26, 26, 0.14);
            --rule-strong: rgba(26, 26, 26, 0.32);
        }
        html[data-palette="plum"] {
            --ink: #3A2A3A;
            --ink-deep: #24172E;
            --cream: #F5EFE6;
            --cream-2: #E9E1D2;
            --char: #2A2029;
            --bronze: #B08D57;
            --rule: rgba(58, 42, 58, 0.16);
            --rule-strong: rgba(58, 42, 58, 0.34);
        }

        /* Type variants */
        html[data-type="instrument"] {
            --font-display: "Instrument Serif", "Times New Roman", serif;
            --font-body: "Geist", ui-sans-serif, system-ui, sans-serif;
        }
        html[data-type="playfair"] {
            --font-display: "Playfair Display", "Times New Roman", serif;
            --font-body: "DM Sans", ui-sans-serif, system-ui, sans-serif;
        }

        /* ---------- Reset & base ---------- */
        *, *::before, *::after { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; }
        body {
            font-family: var(--font-body);
            font-size: var(--step-1);
            line-height: 1.55;
            color: var(--ink);
            background: var(--cream);
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            overflow-x: hidden;
        }
        img { display: block; max-width: 100%; }
        a { color: inherit; text-decoration: none; }
        button { font: inherit; color: inherit; background: none; border: 0; cursor: pointer; }

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

        .serif { font-family: var(--font-display); font-weight: 400; }
        .mono  { font-family: var(--font-mono); font-size: 12px; letter-spacing: 0.05em; }

        p { text-wrap: pretty; }
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
        .grid12 {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
        .rule { height: 1px; background: var(--rule); border: 0; }
        .rule-strong { height: 1px; background: var(--rule-strong); border: 0; }

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
        .btn-underline {
            padding: 6px 0;
            border-radius: 0;
            border-bottom: 1px solid var(--ink);
            text-transform: uppercase;
            font-size: 12px;
            letter-spacing: 0.14em;
        }
        .btn-underline:hover { color: var(--bronze); border-color: var(--bronze); }

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
            align-items: center;
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

/* ========================================
   POSITIONING - WITH BRONZE BACKGROUND
   ======================================== */

.positioning {
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 60px;
    align-items: center;
}

/* Bronze Background Shape */
.positioning-image-wrapper {
    position: relative;
    width: 100%;
    aspect-ratio: 4/3;
    overflow: visible; !important;
}

.bronze-shape {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 85%;
    height: 85%;
    background: #B08D57;
    border-radius: 16px;
    overflow: hidden;
    z-index: 1;
    animation: bronzePulse 4s ease-in-out infinite alternate;
}

/* Optional: Decorative shape overlay */
.bronze-shape::before {
    content: '';
    position: absolute;
    top: -20%;
    right: -10%;
    width: 60%;
    height: 80%;
    background: rgba(255, 255, 255, 0.06);
    border-radius: 50%;
    pointer-events: none;
}

.bronze-shape::after {
    content: '';
    position: absolute;
    bottom: -15%;
    left: -5%;
    width: 40%;
    height: 60%;
    background: rgba(0, 0, 0, 0.05);
    border-radius: 50%;
    pointer-events: none;
}

/* PNG Image Overlay */
.positioning-overlay-image {
    position: absolute;
    z-index: 2;
    top: -42%;
    left: -10%;
    width: 160%;
    height: 170%;
    object-fit: contain;
    filter: drop-shadow(0 8px 30px rgba(0, 0, 0, 0.15));
    transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
    transform: perspective(800px) rotateY(-5deg) rotateX(3deg);
}

.positioning-image-wrapper:hover .positioning-overlay-image {
    transform: perspective(800px) rotateY(0deg) rotateX(0deg) scale(1.05) translateY(-10px);
}

/* Slight pulse animation for the bronze shape */
.bronze-shape {
    animation: bronzePulse 4s ease-in-out infinite alternate;
}

@keyframes bronzePulse {
    0% {
        box-shadow: 0 0 0 0 rgba(176, 141, 87, 0.2);
    }
    100% {
        box-shadow: 0 0 40px 10px rgba(176, 141, 87, 0.05);
    }
}

.positioning p {
    font-size: 19px;
    line-height: 1.55;
    color: var(--char);
    max-width: 60ch;
}

.positioning p + p {
    margin-top: 22px;
}

@media (max-width: 900px) {
    .positioning {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .positioning-image-wrapper {
        max-width: 500px;
        margin: 0 auto;
        aspect-ratio: 4/3;
    }
}


        /* ---------- Pillars ---------- */
        .pillars {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border-top: 1px solid var(--rule);
        }
        .pillar {
            padding: 40px 30px 40px 0;
            border-right: 1px solid var(--rule);
            position: relative;
            transition: background .35s ease;
            cursor: pointer;
        }
        .pillar:last-child { border-right: 0; padding-right: 0; }
        .pillar:not(:first-child) { padding-left: 30px; }
        .pillar-num {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.18em;
            color: var(--muted);
        }
        .pillar h3 {
            font-family: var(--font-display);
            font-weight: 300;
            font-size: 34px;
            line-height: 1.05;
            margin: 22px 0 20px;
            letter-spacing: -0.01em;
        }
        .pillar p {
            color: var(--char);
            font-size: 15px;
            line-height: 1.55;
            max-width: 30ch;
        }
        .pillar .learn {
            display: inline-flex;
            gap: 8px;
            margin-top: 24px;
            font-size: 11px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--ink);
            border-bottom: 1px solid var(--rule);
            padding-bottom: 4px;
            transition: color .2s ease, border-color .2s ease;
        }
        .pillar:hover .learn { color: var(--bronze); border-color: var(--bronze); }

        @media (max-width: 900px) {
            .pillars { grid-template-columns: 1fr; }
            .pillar { border-right: 0; border-bottom: 1px solid var(--rule); padding: 30px 0; }
            .pillar:not(:first-child) { padding-left: 0; }
        }

        /* ---------- Sectors row ---------- */
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

        /* Split text — words fade */
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

        /* ---------- Newsletter band ---------- */
        .newsletter {
            padding: 100px 0;
            background: var(--cream-2);
            text-align: center;
        }
        .newsletter h3 { max-width: 20ch; margin: 0 auto 30px; }
        .newsletter .form { display: flex; gap: 12px; max-width: 480px; margin: 30px auto 0; }
        .newsletter input { flex: 1; padding: 14px 0; background: transparent; border: 0; border-bottom: 1px solid var(--rule-strong); font-family: var(--font-body); font-size: 16px; outline: none; }
        .newsletter input:focus { border-color: var(--bronze); }

        /* ---------- Utilities ---------- */
        .center { text-align: center; }
        .quiet { color: var(--muted); }
        .italic { font-style: italic; }
        .bronze { color: var(--bronze); }
        .hidden { display: none !important; }
        .spacer-lg { height: clamp(80px, 12vw, 160px); }
        .spacer-md { height: clamp(40px, 6vw, 80px); }

/* ========================================
   HERO SECTION - COLOR BACKGROUND + PNG
   ======================================== */
.hero-wrapper {
    height: 100vh;
    width: 100%;
    position: relative;
    overflow: hidden;
}

/* Full-width background color */
.hero-bg-color {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #0F1B3D;
    z-index: 0;
}

/* PNG Image Wrapper - Similar to positioning section */
.hero-image-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: visible;
}

/* PNG Image - sits on top of color background */
.hero-png-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 1.5;
    /* Adjust opacity as needed */
}

/* Dark Overlay for Readability */
.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(15, 27, 61, 0.3);
    z-index: 2;
}

/* Hero Content - on top */
.hero-content {
    position: relative;
    z-index: 3;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 20px 40px;
    max-width: 1280px;
    margin: 0 auto;
    width: 100%;
}

.hero-text {
    text-align: left;
    color: white;
    width: 100%;
    max-width: 800px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    flex: 1;
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
    margin-left: 0;
    margin-right: 0;
}

.hero-subtitle .highlight {
    color: #c9a94e;
}

/* ========================================
   FLIP CTA BUTTONS
   ======================================== */
.hero-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-top: 40px;
    justify-content: flex-start;
    align-items: center;
}

.hero-buttons .btn-flip {
    min-width: 200px;
}

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
    min-width: 180px;
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
    border-radius: 10px;
}

.btn-flip:after {
    top: 0;
    left: 0;
    opacity: 0;
    width: 100%;
    color: #1a2a3a;
    display: block;
    padding: 0 30px;
    line-height: 44px;
    transition: 0.5s;
    position: absolute;
    background: #c9a94e;
    content: attr(data-back);
    transform: translateY(-50%) rotateX(90deg);
    border-radius: 10px;
}

.btn-flip:hover:after {
    opacity: 1;
    transform: translateY(0) rotateX(0);
}

.btn-flip:hover:before {
    opacity: 0;
    transform: translateY(50%) rotateX(90deg);
}

/* Outline Version */
.btn-flip-outline:before {
    color: #ffffff;
    background: transparent;
    border: 2px solid #ffffff;
    line-height: 40px;
    border-radius: 10px;
}

.btn-flip-outline:after {
    color: #1a2a3a;
    background: #ffffff;
    border-radius: 10px;
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
    margin-top: 40px;
    max-width: 700px;
    margin-left: 0;
    margin-right: 0;
}

.hero-tagline-wrapper::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 3px;
    height: 0;
    background: #c9a94e;
    animation: drawBorder 1s ease-out forwards;
    animation-delay: 2s;
    transform-origin: top;
}

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
    opacity: 0;
    animation: fadeInText 0.8s ease-out forwards;
    animation-delay: 3.8s;
}

@keyframes drawBorder {
    0% { height: 0; opacity: 0; }
    100% { height: 100%; opacity: 1; }
}

@keyframes drawBorderGlow {
    0% { height: 0; opacity: 0; }
    100% { height: 100%; opacity: 1; }
}

@keyframes fadeInText {
    0% { opacity: 0; transform: translateX(-10px); }
    100% { opacity: 1; transform: translateX(0); }
}

/* ========================================
   RESPONSIVE
   ======================================== */
@media screen and (max-width: 700px) {
    .hero-content {
        padding: 20px;
    }
    
    .typewriter-wrapper {
        font-size: clamp(22px, 4vw, 32px);
    }
    .hero-subtitle {
        font-size: 14px;
        margin-top: 15px;
    }
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

@media screen and (max-width: 480px) {
    .typewriter-wrapper {
        font-size: 18px;
    }
    .hero-subtitle {
        font-size: 12px;
    }
}

/* ========================================
   NAVIGATION STYLES
   ======================================== */

/* Navigation container */
#main-nav {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    padding: 16px 24px;
    background: transparent;
    transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

#main-nav.nav-scrolled {
    background: rgba(45, 45, 45, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25);
    padding: 12px 24px;
    border-bottom: 1px solid rgba(201, 169, 78, 0.12);
}

/* Logo */
.nav-logo-desktop,
.nav-logo-mobile {
    transition: all 0.3s ease;
}

#main-nav.nav-scrolled .nav-logo-desktop {
    height: 2.5rem;
}

#main-nav.nav-scrolled .nav-logo-mobile {
    height: 2rem;
}

/* Navigation link animation */
.nav-link {
    position: relative;
    display: block;
    text-transform: uppercase;
    text-decoration: none;
    color: #c9a94e;
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
    border-top: 2px solid #c9a94e;
    border-bottom: 2px solid #c9a94e;
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

/* Navigation flip button */


/* ========================================
   NAVIGATION OVERRIDES
   ======================================== */

/* Nav background when scrolled */
#main-nav.nav-scrolled {
    background: rgba(45, 45, 45, 0.95);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.25);
    padding: 12px 24px;
    border-bottom: 1px solid rgba(201, 169, 78, 0.12);
}

/* Mobile menu background */
#main-nav.nav-scrolled #mobile-menu {
    background: rgba(45, 45, 45, 0.98);
}

@media (max-width: 768px) {
    #main-nav {
        padding: 12px 16px;
    }
    
    #main-nav.nav-scrolled {
        padding: 10px 16px;
    }
}

/* ========================================
   THESIS SECTION - IMAGE IN LEFT COLUMN
   ======================================== */

.thesis-image-wrapper {
    width: 100%;
    max-width: 340px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
    transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.thesis-image-wrapper:hover {
    transform: translateY(-6px);
}

.thesis-image-wrapper img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.thesis-image-wrapper:hover img {
    transform: scale(1.03);
}

.thesis-image-wrapper {
    border: 1px solid rgba(176, 141, 87, 0.15);
}


/* Responsive */
@media (max-width: 900px) {
    .positioning {
        grid-template-columns: 1fr !important;
        gap: 30px !important;
    }
    
    .thesis-image-wrapper {
        max-width: 280px;
    }
}

@media (max-width: 480px) {
    .thesis-image-wrapper {
        max-width: 200px;
    }
}

/* ========================================
   IMAGE REVEAL CLIP
   ======================================== */
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
    </style>
</head>
<body>

    <!-- ========================================
    NAVIGATION
    ======================================== -->
    @include('components.navigation')

<!-- ========================================
    HERO SECTION - COLOR BACKGROUND + PNG
    ======================================== -->
<section class="hero-wrapper">
    <!-- Background Color -->
    <div class="hero-bg-color"></div>

    <!-- PNG Image Overlay -->
    <div class="hero-image-wrapper">
        <img src="{{ asset('images/hero-1.png') }}" 
             alt="Ifeanyi Nnadi" 
             class="hero-png-image">
    </div>

    <!-- Dark Overlay for Readability -->
    <div class="hero-overlay"></div>

    <!-- Hero Content -->
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

            <div class="hero-tagline-wrapper">
                <p class="hero-tagline">
                    Ifeanyi Nnadi helps organisations, executives, and emerging talents unlock growth 
                    through strategic communications, commercial partnerships, reputation management, and 
                    talent representation.
                </p>
            </div>

            <div class="hero-buttons">
                <a href="{{ url('/contact?inquiry=hire-talent#contact-form') }}" class="btn-flip" data-back="Let's Talk" data-front="Hire My Team"></a>
                <a href="#" onclick="openJoinNetworkModal(); return false;" class="btn-flip btn-flip-outline" data-back="Connect Now" data-front="Join My Network"></a>
            </div>
        </div>
    </div>
</section>

<!-- Join Network Modal -->
<div id="joinNetworkModal" style="display: none; position: fixed; inset: 0; z-index: 10000; background: rgba(15, 27, 61, 0.7); backdrop-filter: blur(8px); align-items: center; justify-content: center; padding: 20px;">
    <div style="max-width: 520px; width: 100%; background: #FFFFFF; border-radius: 16px; padding: 40px; box-shadow: 0 40px 80px rgba(0, 0, 0, 0.3); position: relative; max-height: 90vh; overflow-y: auto;">
        
        <!-- Close Button -->
        <button id="closeModalBtn" style="position: absolute; top: 16px; right: 20px; background: none; border: 0; font-size: 28px; color: #6B6558; cursor: pointer; transition: 0.3s; padding: 0; line-height: 1;">
            &times;
        </button>

        <!-- Modal Header -->
        <div style="text-align: center; margin-bottom: 30px;">
            <div style="display: inline-block; background: #c9a94e; width: 60px; height: 3px; border-radius: 2px; margin-bottom: 16px;"></div>
            <h2 style="font-family: 'Fraunces', 'Georgia', serif; font-weight: 300; font-size: 32px; color: #0F1B3D; margin: 0;">
                Join My <em style="color: #B08D57; font-style: italic;">Network</em>
            </h2>
            <p style="color: #6B6558; font-size: 15px; margin-top: 10px; line-height: 1.5;">
                Join a community of thinkers, doers, and builders. Get exclusive insights, updates, and opportunities.
            </p>
        </div>

        <!-- Success Message (hidden by default) -->
        <div id="successMessage" style="display: none; text-align: center; padding: 20px 0;">
            <div style="font-size: 48px; margin-bottom: 16px;">✅</div>
            <h3 style="font-family: 'Fraunces', 'Georgia', serif; font-weight: 300; font-size: 24px; color: #0F1B3D; margin: 0;">You're in!</h3>
            <p style="color: #6B6558; margin-top: 10px; line-height: 1.5;">
                Thank you for joining my network. A confirmation email has been sent to your inbox.
            </p>
        </div>

        <!-- Form -->
        <form id="joinNetworkForm" style="display: block;">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #6B6558; font-weight: 600; margin-bottom: 6px;">
                    Full Name <span style="color: #B08D57;">*</span>
                </label>
                <input type="text" id="name" name="name" required 
                       style="width: 100%; padding: 14px 16px; border: 1px solid #e0ddd6; border-radius: 8px; font-size: 16px; font-family: 'Inter Tight', sans-serif; transition: 0.3s; outline: none; background: #F7F3EC; color: #0F1B3D;">
                <span class="error-message" id="nameError" style="display: none; color: #e74c3c; font-size: 13px; margin-top: 4px;"></span>
            </div>

            <div style="margin-bottom: 20px;">
                <label for="email" style="display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #6B6558; font-weight: 600; margin-bottom: 6px;">
                    Email Address <span style="color: #B08D57;">*</span>
                </label>
                <input type="email" id="email" name="email" required 
                       style="width: 100%; padding: 14px 16px; border: 1px solid #e0ddd6; border-radius: 8px; font-size: 16px; font-family: 'Inter Tight', sans-serif; transition: 0.3s; outline: none; background: #F7F3EC; color: #0F1B3D;">
                <span class="error-message" id="emailError" style="display: none; color: #e74c3c; font-size: 13px; margin-top: 4px;"></span>
            </div>

            <div style="margin-bottom: 24px;">
                <label for="phone" style="display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 0.1em; color: #6B6558; font-weight: 600; margin-bottom: 6px;">
                    Phone Number <span style="color: #B08D57;">*</span>
                </label>
                <input type="tel" id="phone" name="phone" required 
                       style="width: 100%; padding: 14px 16px; border: 1px solid #e0ddd6; border-radius: 8px; font-size: 16px; font-family: 'Inter Tight', sans-serif; transition: 0.3s; outline: none; background: #F7F3EC; color: #0F1B3D;">
                <span class="error-message" id="phoneError" style="display: none; color: #e74c3c; font-size: 13px; margin-top: 4px;"></span>
            </div>

            <button type="submit" id="submitBtn" 
                    style="width: 100%; padding: 16px; background: #0F1B3D; color: #FFFFFF; border: none; border-radius: 999px; font-size: 16px; font-weight: 600; font-family: 'Inter Tight', sans-serif; text-transform: uppercase; letter-spacing: 0.05em; cursor: pointer; transition: 0.3s; position: relative;">
                <span id="btnText">Join Now</span>
                <span id="btnSpinner" style="display: none;">
                    <svg style="width: 24px; height: 24px; margin: 0 auto;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" stroke-opacity="0.3"/>
                        <path d="M12 2a10 10 0 0 1 10 10" stroke="currentColor">
                            <animateTransform attributeName="transform" type="rotate" from="0 12 12" to="360 12 12" dur="1s" repeatCount="indefinite"/>
                        </path>
                    </svg>
                </span>
            </button>
        </form>

        <!-- Footer note -->
        <p style="text-align: center; margin-top: 16px; font-size: 12px; color: #8a8a8a;">
            By joining, you agree to receive occasional emails from Ifeanyi Nnadi.
        </p>
    </div>
</div>

    <!-- ========================================
    POSITIONING
    ======================================== -->
    <section class="section">
        <div class="wrap">
            <div class="section-head reveal-stagger">
                <div>
                    <div class="idx">01 · Positioning</div>
                    <h2 class="display" style="font-size: clamp(32px, 4vw, 56px);">
                        A modern African advisory for brands, <em>leaders</em>, and high-potential talent.
                    </h2>
                </div>
                <div>
                    <p class="lede">
                        The digital headquarters of a business leader shaping brands, building reputation, unlocking commercial growth, and representing the next generation of African talent.
                    </p>
                </div>
            </div>
            <div class="positioning">
                <!-- Left - Bronze Background with Image -->
                <div class="reveal">
                    <div class="positioning-image-wrapper">
                        <!-- Bronze Background Shape -->
                        <div class="bronze-shape"></div>
                            <!-- PNG Image Overlay -->
                            <img src="{{ asset('images/section2.png') }}" 
                                alt="Ifeanyi Nnadi" 
                                class="positioning-overlay-image">
                    </div>
                </div>
                <!-- Right - Text -->
                <div class="reveal">
                    <p>
                        Ifeanyi Nnadi works at the intersection of leadership, visibility, influence, and business performance — helping organisations and individuals position themselves for lasting relevance and global opportunity.
                    </p>
                    <p class="quiet" style="margin-top: 30px; font-size: 15px;">
                        Over a decade of experience in corporate communications, public relations, brand strategy, and business development. Currently Marketing and Brand Manager at Transcorp Hilton Abuja.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
    PILLARS
    ======================================== -->
    <section class="section cream-2">
        <div class="wrap">
            <div class="section-head reveal-stagger">
                <div>
                    <div class="idx">02 · What I Do</div>
                    <h2 class="display" style="font-size: clamp(32px, 4vw, 56px);">
                        Strategic work built around <em>growth</em>, influence, and long-term value.
                    </h2>
                </div>
                <div><p class="lede">Four pillars. One coherent practice.</p></div>
            </div>
            <div class="pillars reveal-stagger">
                <div class="pillar">
                    <div class="pillar-num">— 01</div>
                    <h3>Executive<br/>Advisory</h3>
                    <p>Advising executives and leadership teams on brand positioning, reputation strategy, executive communications, and commercial partnerships that unlock measurable business results.</p>
                    <a class="learn" href="{{ url('/contact?inquiry=advisory#contact-form') }}">Explore <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
                </div>
                <div class="pillar">
                    <div class="pillar-num">— 02</div>
                    <h3>Talent<br/>Management</h3>
                    <p>Representing Africa's next generation of influential professionals, creators, speakers, athletes, hospitality leaders, and public figures — before the world fully discovers them.</p>
                    <a class="learn" href="{{ url('/contact?inquiry=talent-representation#contact-form') }}">Explore <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
                </div>
                <div class="pillar">
                    <div class="pillar-num">— 03</div>
                    <h3>Corporate<br/>Consulting</h3>
                    <p>Helping companies strengthen communications, grow market presence, improve stakeholder trust, and drive brand-led commercial performance across key sectors.</p>
                    <a class="learn" href="{{ url('/contact?inquiry=advisory#contact-form') }}">Explore <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
                </div>
                <div class="pillar">
                    <div class="pillar-num">— 04</div>
                    <h3>Speaking</h3>
                    <p>Delivering sharp, relevant, and commercially grounded insights for conferences, universities, leadership summits, hospitality forums, and brand events.</p>
                    <a class="learn" href="{{ url('/contact?inquiry=speaking#contact-form') }}">Explore <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
                </div>
            </div>
        </div>
    </section>

<!-- ========================================
    WHY THIS WORK MATTERS
    ======================================== -->
<section class="section ink">
    <div class="wrap">
        <!-- Section Heading - Full Width with left label -->
        <div class="section-head" style="display: grid; grid-template-columns: 1fr 1.6fr; gap: 60px; padding-bottom: 60px; border-bottom: 1px solid rgba(247,243,236,0.14); margin-bottom: 60px; align-items: center;">
            <div>
                <div class="idx" style="font-family: var(--font-mono); font-size: 11px; letter-spacing: 0.2em; color: var(--muted, #6B6558); text-transform: uppercase;">
                    03 · Why This Work Matters
                </div>
            </div>
            <div>
                <h2 class="display" data-split style="font-size: clamp(36px, 5.6vw, 84px); text-align: left;">
                    Influence is no longer optional. It is <em>infrastructure.</em>
                </h2>
            </div>
        </div>

        <!-- Content Row - Image + Text -->
        <div class="positioning" style="display: grid; grid-template-columns: 1fr 1.4fr; gap: 60px; align-items: center;">
            <!-- Left - Image with Reveal Effect -->
            <div class="reveal" style="display: flex; justify-content: center;">
                <div class="img-reveal" style="max-width: 340px; width: 100%; aspect-ratio: 3/4; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);">
                    <img src="{{ asset('images/section.JPEG') }}" 
                         alt="Influence is infrastructure" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            <!-- Right - Text -->
            <div>
                <p class="quiet reveal" style="font-size: 20px; max-width: 58ch;">
                    Strong brands earn trust faster. Respected leaders move markets, shape narratives, and create opportunity. Exceptional talent needs the right positioning to become visible, credible, and commercially valuable.
                </p>
                <p class="quiet reveal" style="font-size: 20px; max-width: 58ch; margin-top: 24px;">
                    In a fast-changing African and global market, growth belongs to those who know how to communicate value, manage perception, build partnerships, and lead with intention.
                </p>
            </div>
        </div>

        <!-- Impact Numbers -->
        <div style="margin-top: 100px;">
            <div class="impact reveal-stagger">
                <div class="impact-cell">
                    <div class="n"><span data-count="12" data-suffix="+">0</span></div>
                    <div class="lbl">Years of practice</div>
                </div>
                <div class="impact-cell">
                    <div class="n"><span data-count="40" data-suffix="+">0</span></div>
                    <div class="lbl">Brands advised</div>
                </div>
                <div class="impact-cell">
                    <div class="n"><em><span data-count="8" data-suffix="">0</span></em></div>
                    <div class="lbl">Sectors served</div>
                </div>
                <div class="impact-cell">
                    <div class="n"><span data-count="1">0</span></div>
                    <div class="lbl">Africa-first, global-standard</div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- ========================================
    SECTORS
    ======================================== -->
    <section class="section">
        <div class="wrap">
            <div class="section-head reveal-stagger">
                <div>
                    <div class="idx">04 · Sectors</div>
                    <h2 class="display" style="font-size: clamp(32px, 4vw, 56px);">
                        Cross-sector thinking. <em>Commercially grounded</em> execution.
                    </h2>
                </div>
                <div><p class="lede">Where reputation, visibility, leadership, and market confidence matter deeply.</p></div>
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
    TALENT FEATURE
    ======================================== -->
<section class="section cream-2">
    <div class="wrap">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 items-center">
            <!-- Left - Text Content -->
            <div class="reveal">
                <div class="eyebrow">— 05 · The Talent Office</div>
                <h2 class="display" style="font-size: clamp(36px, 5.6vw, 84px); margin-top: 24px;">
                    The African Talent Office.
                </h2>
                <div class="font-display italic text-2xl text-bronze mt-6 mb-5">
                    We represent exceptional people before the world discovers them.
                </div>
                <p class="text-charcoal text-base leading-relaxed max-w-lg">
                    Talent Management is a defining part of the vision. Not celebrity management for attention — but strategic representation for people with substance, potential, and commercial relevance.
                </p>
                <p class="text-charcoal text-base leading-relaxed max-w-lg mt-4">
                    From personal branding and media positioning to endorsements, speaking opportunities, and international exposure, the goal is simple: help outstanding people become impossible to ignore.
                </p>
                <div class="flex flex-wrap gap-3 mt-8">
                    <a class="btn btn-primary inline-flex items-center gap-3 px-6 py-4 rounded-full bg-ink text-cream border border-ink hover:bg-bronze hover:border-bronze transition-all duration-200 text-sm uppercase tracking-wide" href="{{ url('/contact?inquiry=hire-talent#contact-form') }}">
                        Hire Talent 
                        <svg class="arrow w-3.5 h-3.5 transition-transform duration-300" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg>
                    </a>
                    <a class="btn btn-ghost inline-flex items-center gap-3 px-6 py-4 rounded-full border border-rule-strong text-ink hover:bg-ink hover:text-cream transition-all duration-200 text-sm uppercase tracking-wide" href="{{ url('/contact?inquiry=talent-representation#contact-form') }}">
                        Apply for Representation 
                        <svg class="arrow w-3.5 h-3.5 transition-transform duration-300" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg>
                    </a>
                </div>
            </div>

            <!-- Right - Image with Reveal Effect -->
            <div class="reveal flex justify-center items-center">
                <div class="img-reveal w-full max-w-md rounded-xl overflow-hidden shadow-2xl transition-transform duration-500 hover:-translate-y-2" style="aspect-ratio: 4/5;">
                    <img src="{{ asset('images/section5.PNG') }}" 
                         alt="African Talent Office" 
                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                </div>
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
            <h2 class="display reveal" style="margin-top: 30px;" data-split>Let's build what people will remember.</h2>
            <div class="ctas reveal">
                <a class="btn btn-primary" href="{{ url('/contact?inquiry=book-session#contact-form') }}">Book a Strategy Session <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
                <a class="btn btn-ghost" href="{{ url('/contact?inquiry=hire-talent#contact-form') }}">Hire My Team <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></a>
            </div>
        </div>
    </section>

    <!-- ========================================
    NEWSLETTER
    ======================================== -->
    <section class="newsletter">
        <div class="wrap">
            <div class="eyebrow no-rule reveal" style="justify-content: center; display: inline-flex;">— Newsletter</div>
            <h3 class="display reveal" style="margin-top: 20px;">Stay connected to the ideas shaping what comes <em>next.</em></h3>
            <p class="quiet reveal" style="max-width: 40ch; margin: 24px auto 0;">Join the network for insight, perspective, and strategic thinking on growth, reputation, leadership, and African opportunity.</p>
            <div class="form reveal">
                <input type="email" placeholder="your@email.com" />
                <button class="btn btn-primary">Join <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></button>
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
        // TYPEWRITER JAVASCRIPT
        // ========================================
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

            // Number counter
            function initCounters(root = document) {
                const io = new IntersectionObserver((entries, obs) => {
                    entries.forEach(e => {
                        if (!e.isIntersecting) return;
                        const el = e.target;
                        const target = parseFloat(el.dataset.count);
                        const suffix = el.dataset.suffix || "";
                        const dur = 1400;
                        const start = performance.now();
                        const step = (t) => {
                            const p = Math.min(1, (t - start) / dur);
                            const eased = 1 - Math.pow(1 - p, 3);
                            const v = target * eased;
                            el.textContent = (target % 1 === 0 ? Math.round(v) : v.toFixed(1)) + suffix;
                            if (p < 1) requestAnimationFrame(step);
                        };
                        requestAnimationFrame(step);
                        obs.unobserve(el);
                    });
                }, { threshold: 0.4 });
                root.querySelectorAll("[data-count]").forEach(el => io.observe(el));
            }

            document.addEventListener("DOMContentLoaded", () => {
                initReveals();
                initCounters();

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
            const hero = document.querySelector('.hero-wrapper');
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

        // ========================================
        // JOIN NETWORK MODAL
        // ========================================
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('joinNetworkModal');
            const closeBtn = document.getElementById('closeModalBtn');
            const form = document.getElementById('joinNetworkForm');
            const successMessage = document.getElementById('successMessage');
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnSpinner = document.getElementById('btnSpinner');

            // Open modal function (call this when "Join My Network" is clicked)
            window.openJoinNetworkModal = function() {
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                // Reset form
                form.style.display = 'block';
                successMessage.style.display = 'none';
                form.reset();
                // Clear errors
                document.querySelectorAll('.error-message').forEach(el => {
                    el.style.display = 'none';
                    el.textContent = '';
                });
                document.querySelectorAll('input').forEach(input => {
                    input.style.borderColor = '#e0ddd6';
                });
            };

            // Close modal
            function closeModal() {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }

            closeBtn.addEventListener('click', closeModal);

            // Close on backdrop click
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    closeModal();
                }
            });

            // Close on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal.style.display === 'flex') {
                    closeModal();
                }
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Clear previous errors
                document.querySelectorAll('.error-message').forEach(el => {
                    el.style.display = 'none';
                    el.textContent = '';
                });
                document.querySelectorAll('input').forEach(input => {
                    input.style.borderColor = '#e0ddd6';
                });

                // Show loading state
                btnText.style.display = 'none';
                btnSpinner.style.display = 'block';
                submitBtn.disabled = true;

                // Get form data
                const formData = new FormData(form);

                // Send request
                fetch('{{ route('join.network') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show success
                        form.style.display = 'none';
                        successMessage.style.display = 'block';
                    } else if (data.errors) {
                        // Show validation errors
                        Object.keys(data.errors).forEach(key => {
                            const errorEl = document.getElementById(key + 'Error');
                            const inputEl = document.getElementById(key);
                            if (errorEl) {
                                errorEl.textContent = data.errors[key][0];
                                errorEl.style.display = 'block';
                            }
                            if (inputEl) {
                                inputEl.style.borderColor = '#e74c3c';
                            }
                        });
                    }
                })
                .catch(error => {
                    alert('Something went wrong. Please try again.');
                })
                .finally(() => {
                    // Hide loading state
                    btnText.style.display = 'block';
                    btnSpinner.style.display = 'none';
                    submitBtn.disabled = false;
                });
            });

            // Input focus styling
            document.querySelectorAll('input').forEach(input => {
                input.addEventListener('focus', function() {
                    this.style.borderColor = '#c9a94e';
                });
                input.addEventListener('blur', function() {
                    if (!this.style.borderColor || this.style.borderColor === '#c9a94e') {
                        this.style.borderColor = '#e0ddd6';
                    }
                });
            });
        });
    </script>

    <style>
        /* ========================================
           IMPACT NUMBERS (Dark Section)
           ======================================== */
        .impact {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            border-top: 1px solid rgba(247,243,236,0.16);
            border-bottom: 1px solid rgba(247,243,236,0.16);
        }
        .impact-cell {
            padding: 60px 30px 60px 0;
            border-right: 1px solid rgba(247,243,236,0.14);
        }
        .impact-cell:last-child { border-right: 0; }
        .impact-cell:not(:first-child) { padding-left: 30px; }
        .impact-cell .n {
            font-family: var(--font-display);
            font-weight: 300;
            font-size: clamp(48px, 6vw, 88px);
            line-height: 1;
            letter-spacing: -0.03em;
        }
        .impact-cell .n em { color: var(--bronze-soft); font-style: italic; }
        .impact-cell .lbl {
            font-family: var(--font-mono);
            font-size: 11px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: color-mix(in oklab, var(--cream) 65%, transparent);
            margin-top: 18px;
        }
            #joinNetworkModal input:focus {
        border-color: #c9a94e !important;
        box-shadow: 0 0 0 3px rgba(201, 169, 78, 0.1);
    }
    
    #joinNetworkModal button[type="submit"]:hover {
        background: #B08D57 !important;
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(15, 27, 61, 0.2);
    }
        @media (max-width: 900px) { 
            .impact { grid-template-columns: repeat(2, 1fr); } 
            .impact-cell { padding: 40px 20px !important; } 
        }

        /* Feature section */
        .feature {
            display: grid;
            grid-template-columns: 1.1fr 1fr;
            gap: 80px;
            align-items: center;
        }
        @media (max-width: 900px) { 
            .feature { grid-template-columns: 1fr; gap: 40px; } 
        }

        /* Arrow SVG */
        .arrow {
            width: 14px;
            height: 14px;
            transition: transform .3s ease;
        }
        .btn:hover .arrow { transform: translateX(4px); }
    </style>

</body>
</html>