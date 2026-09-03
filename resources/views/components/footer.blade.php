<!-- ========================================
   FOOTER - Editorial Style
   ======================================== -->
<footer class="footer">
    <div class="wrap">
        <div class="footer-top">
            <div>
                <div class="bigmark">Ifeanyi Nnadi<span class="dot">.</span></div>
                <p class="bio">
                    A business leader, reputation strategist, hospitality growth expert, talent manager, 
                    and speaker helping brands, leaders, and talents grow with clarity, influence, and 
                    commercial purpose across Africa.
                </p>
            </div>
            <div>
                <h5>Explore</h5>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/advisory">Advisory &amp; Representation</a></li>
                    <li><a href="/talent-management">Talent Management</a></li>
                    <li><a href="/speaking">Speaking</a></li>
                </ul>
            </div>
            <div>
                <h5>Platform</h5>
                <ul>
                    <li><a href="/insights">Insights</a></li>
                    <li><a href="/media">Media Centre</a></li>
                    <li><a href="/case-studies">Case Studies</a></li>
                    <li><a href="/clients">Clients</a></li>
                    <li><a href="/resources">Books &amp; Reports</a></li>
                </ul>
            </div>
            <div>
                <h5>Connect</h5>
                <ul>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="#">LinkedIn</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">X · Twitter</a></li>
                </ul>
                <p class="bio" style="margin-top: 30px;">
                    For advisory, partnerships, speaking, or representation enquiries, get in touch.
                </p>
            </div>
        </div>
        <div class="footer-bottom">
            <div>&copy; {{ date('Y') }} IFEANYI NNADI · ALL RIGHTS RESERVED</div>
            <div>ABUJA · LAGOS · GLOBAL</div>
        </div>
    </div>
</footer>

<style>
    /* ========================================
       FOOTER STYLES
       ======================================== */

    .footer {
        padding: 80px 0 40px;
        background: var(--ink, #0F1B3D);
        color: var(--cream, #F7F3EC);
    }

    .footer .wrap {
        max-width: var(--maxw, 1360px);
        margin: 0 auto;
        padding: 0 var(--gutter, clamp(20px, 4vw, 64px));
    }

    .footer-top {
        display: grid;
        grid-template-columns: 1.4fr 1fr 1fr 1fr;
        gap: 60px;
        padding-bottom: 60px;
        border-bottom: 1px solid rgba(247, 243, 236, 0.12);
    }

    .footer .bigmark {
        font-family: var(--font-display, "Fraunces", "Times New Roman", serif);
        font-weight: 300;
        font-size: 56px;
        line-height: 1;
        letter-spacing: -0.03em;
    }

    .footer .bigmark .dot {
        color: var(--bronze, #B08D57);
    }

    .footer .bio {
        margin-top: 20px;
        color: rgba(247, 243, 236, 0.75);
        font-size: 14px;
        max-width: 40ch;
        line-height: 1.6;
        font-family: var(--font-body, "Inter Tight", ui-sans-serif, system-ui, sans-serif);
    }

    .footer h5 {
        font-family: var(--font-mono, "JetBrains Mono", ui-monospace, monospace);
        font-size: 11px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: rgba(247, 243, 236, 0.55);
        margin: 0 0 22px;
        font-weight: 500;
    }

    .footer ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        gap: 14px;
    }

    .footer ul a {
        color: var(--cream, #F7F3EC);
        font-size: 14px;
        transition: color 0.2s ease;
        text-decoration: none;
        font-family: var(--font-body, "Inter Tight", ui-sans-serif, system-ui, sans-serif);
    }

    .footer ul a:hover {
        color: var(--bronze-soft, #C9A87A);
    }

    .footer-bottom {
        padding-top: 30px;
        display: flex;
        justify-content: space-between;
        font-family: var(--font-mono, "JetBrains Mono", ui-monospace, monospace);
        font-size: 11px;
        letter-spacing: 0.12em;
        color: rgba(247, 243, 236, 0.55);
    }

    @media (max-width: 900px) {
        .footer-top {
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 12px;
            align-items: center;
            text-align: center;
        }
    }

    @media (max-width: 600px) {
        .footer-top {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .footer .bigmark {
            font-size: 40px;
        }
    }
</style>