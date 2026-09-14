<!DOCTYPE html>
<html lang="en" data-palette="ink" data-type="fraunces">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact — Ifeanyi Nnadi</title>
        <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo-icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* ============================================================
           Ifeanyi Nnadi — Contact Page
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
        html { scroll-behavior: smooth; }
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

        @media (max-width: 900px) { .twocol { grid-template-columns: 1fr; gap: 30px; } }

        /* ---------- Contact form ---------- */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 40px;
            scroll-margin-top: 120px; /* keep form below fixed nav when scrolled to */
        }
        .field { display: block; }
        .field label {
            font-family: var(--font-mono);
            font-size: 10px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--muted);
            display: block;
            margin-bottom: 10px;
        }
        .field input, .field textarea, .field select {
            width: 100%;
            border: 0;
            border-bottom: 1px solid var(--rule-strong);
            background: transparent;
            padding: 12px 0;
            font-family: var(--font-body);
            font-size: 17px;
            color: var(--ink);
            outline: none;
            border-radius: 0;
            transition: border-color .3s ease;
        }
        .field textarea { min-height: 100px; resize: vertical; }
        .field input:focus, .field textarea:focus, .field select:focus { border-color: var(--bronze); }
        .field.full { grid-column: 1 / -1; }

        @media (max-width: 900px) { .form-grid { grid-template-columns: 1fr; } }

        /* ---------- Inquiry chips ---------- */
        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 30px;
        }
        .chip {
            padding: 10px 18px;
            border: 1px solid var(--rule-strong);
            border-radius: 999px;
            font-size: 12px;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            cursor: pointer;
            transition: all .25s ease;
            font-family: var(--font-body);
            background: transparent;
            color: var(--ink);
        }
        .chip.active, .chip:hover {
            background: var(--ink);
            color: var(--cream);
            border-color: var(--ink);
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

        /* ---------- Sub-page hero with background image ---------- */
        .subhero {
            padding: 180px var(--gutter) 100px;
            border-bottom: 1px solid var(--rule);
            background-image: url('{{ asset('images/contact.jpg') }}');
            background-size: cover;
            background-position: center;
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
    CONTACT HERO
    ======================================== -->
    <section class="subhero">
        <div class="subhero-grid">
            <div>
                <div class="crumbs">
                    <span>Contact</span>
                </div>
                <h1 class="display" data-split>
                    Start the <em>right conversation.</em>
                </h1>
                <p class="lede">
                    Whether you are seeking advisory support, talent representation, a speaking engagement, a strategic partnership, or media engagement, this is the place to connect.
                </p>
            </div>
        </div>
    </section>

    <!-- ========================================
    CONTACT FORM
    ======================================== -->
<section class="section">
    <div class="wrap">
        <div class="twocol">
            <div class="col-l reveal">
                <div class="idx">01 · How can we help</div>
                <h3>Choose an <em style="color: var(--bronze); font-style: italic;">inquiry type.</em></h3>
                <p style="margin-top: 20px;">
                    To make the conversation productive, please share a short overview of your need, your organisation or profile, the outcome you are seeking, and any timing or context that matters.
                </p>
                <div class="chips" style="margin-top: 30px;">
                    <div class="chip active" data-inquiry="Book a Strategy Session">Book a Strategy Session</div>
                    <div class="chip" data-inquiry="Advisory / Consulting">Advisory / Consulting</div>
                    <div class="chip" data-inquiry="Talent Representation">Talent Representation</div>
                    <div class="chip" data-inquiry="Hire Talent">Hire Talent</div>
                    <div class="chip" data-inquiry="Speaking Invitation">Speaking Invitation</div>
                    <div class="chip" data-inquiry="Media / Press">Media / Press</div>
                    <div class="chip" data-inquiry="Partnership">Partnership</div>
                </div>
            </div>
                <div class="col-r reveal">
                    <form id="contact-form" class="form-grid" onsubmit="event.preventDefault(); alert('Thanks — this is a design prototype. Real form endpoint not wired.');">
                        <label class="field">
                            <label>Full name</label>
                            <input type="text" placeholder="Your full name" required />
                        </label>
                        <label class="field">
                            <label>Email</label>
                            <input type="email" placeholder="you@company.com" required />
                        </label>
                        <label class="field">
                            <label>Organisation / profile</label>
                            <input type="text" placeholder="Company or your public profile" />
                        </label>
                        <label class="field">
                            <label>Timeline</label>
                            <input type="text" placeholder="e.g. Q1 2027" />
                        </label>
                        <label class="field full">
                            <label>Website or profile link</label>
                            <input type="url" placeholder="https://" />
                        </label>
                        <label class="field full">
                            <label>Message · your need &amp; desired outcome</label>
                            <textarea placeholder="Share a short overview..." required></textarea>
                        </label>
                        <div class="field full" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
                            <div class="mono" id="inquiryTypeText" style="color: var(--muted);">INQUIRY TYPE — BOOK A STRATEGY SESSION</div>
                            <button type="submit" class="btn btn-primary">Send Inquiry <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
    FASTEST PATH
    ======================================== -->
    <section class="section cream-2">
        <div class="wrap">
            <div class="twocol">
                <div class="col-l reveal">
                    <div class="idx">02 · Fastest path</div>
                    <h3>For focused advisory <em style="color: var(--bronze); font-style: italic;">conversations.</em></h3>
                    <p style="margin-top: 20px;">
                        If you are looking for direct strategic guidance, the fastest place to start is with a strategy session.
                    </p>
                    <a class="btn btn-primary" href="#" style="margin-top: 30px; display: inline-flex; align-items: center; gap: 12px; padding: 16px 26px; border-radius: 999px; font-size: 13px; letter-spacing: 0.06em; text-transform: uppercase; transition: transform .2s ease, background .25s ease, color .25s ease; border: 1px solid transparent; cursor: pointer; text-decoration: none; background: var(--ink); color: var(--cream); border-color: var(--ink);">
                        Book a Strategy Session <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none" stroke="currentColor" stroke-width="1"><line x1="1" y1="7" x2="12" y2="7"/><polyline points="7,2 12,7 7,12"/></svg>
                    </a>
                </div>
                <div class="col-r reveal">
                    <ul>
                        <li data-n="01">hello@ifeanyinnadi.com</li>
                        <li data-n="02">bookings@ifeanyinnadi.com</li>
                        <li data-n="03">talent@ifeanyinnadi.com</li>
                        <li data-n="04">press@ifeanyinnadi.com</li>
                        <li data-n="05">Abuja · Nigeria · West Africa</li>
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
            <div class="eyebrow reveal" style="justify-content: center; display: inline-flex;">— Momentum</div>
            <h2 class="display reveal" style="margin-top: 30px;" data-split>
                Clarity creates <em>momentum.</em>
            </h2>
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
                root.querySelectorAll(".reveal, .reveal-stagger").forEach(el => io.observe(el));

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

            // Inquiry chips toggle
            function initChips() {
                document.querySelectorAll('.chips').forEach(chipGroup => {
                    chipGroup.querySelectorAll('.chip').forEach(chip => {
                        chip.addEventListener('click', function() {
                            chipGroup.querySelectorAll('.chip').forEach(c => c.classList.remove('active'));
                            this.classList.add('active');
                            
                            // Update the inquiry type text
                            const inquiryText = document.getElementById('inquiryTypeText');
                            if (inquiryText) {
                                inquiryText.textContent = 'INQUIRY TYPE — ' + this.textContent.trim().toUpperCase();
                            }
                        });
                    });
                });
            }

            // ========================================
            // AUTO-SELECT CHIP FROM ?inquiry=... QUERY PARAM
            // ========================================
            function autoSelectFromUrl() {
                const params = new URLSearchParams(window.location.search);
                const inquiry = params.get('inquiry');
                if (!inquiry) return;

                const inquiryMap = {
                    'book-session':          'Book a Strategy Session',
                    'advisory':              'Advisory / Consulting',
                    'talent-representation': 'Talent Representation',
                    'hire-talent':           'Hire Talent',
                    'speaking':              'Speaking Invitation',
                    'media':                 'Media / Press',
                    'partnership':           'Partnership'
                };

                const chipLabel = inquiryMap[inquiry];
                if (!chipLabel) return;

                const chips = document.querySelectorAll('.chips .chip');
                chips.forEach(chip => {
                    if (chip.textContent.trim() === chipLabel) {
                        chips.forEach(c => c.classList.remove('active'));
                        chip.classList.add('active');

                        const inquiryText = document.getElementById('inquiryTypeText');
                        if (inquiryText) {
                            inquiryText.textContent = 'INQUIRY TYPE — ' + chipLabel.toUpperCase();
                        }
                    }
                });
            }

            document.addEventListener("DOMContentLoaded", () => {
                initReveals();
                initChips();
                autoSelectFromUrl();
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