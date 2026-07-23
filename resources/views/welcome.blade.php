<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Paramount | Homepage</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <style>
            :root {
                --bg: #f6f7fb;
                --bg-soft: #eef3f7;
                --card: #ffffff;
                --text: #10233d;
                --muted: #63738b;
                --primary: #0f2747;
                --accent: #f4b43a;
                --line: #d9e1ec;
                --shadow: 0 20px 60px rgba(15, 39, 71, 0.12);
                --radius: 24px;
            }
            * {
                box-sizing: border-box;
            }
            body {
                margin: 0;
                font-family: "Inter", Arial, sans-serif;
                background:
                    radial-gradient(
                        circle at top left,
                        rgba(244, 180, 58, 0.14),
                        transparent 22%
                    ),
                    radial-gradient(
                        circle at top right,
                        rgba(15, 39, 71, 0.14),
                        transparent 28%
                    ),
                    var(--bg);
                color: var(--text);
            }
            a {
                text-decoration: none;
                color: inherit;
            }
            .container {
                width: min(1180px, calc(100% - 32px));
                margin: 0 auto;
            }
            .topbar {
                position: sticky;
                top: 0;
                z-index: 999;
                backdrop-filter: blur(12px);
                background: rgba(255, 255, 255, 0.9);
                border-bottom: 1px solid rgba(16, 35, 61, 0.08);
            }
            .topbar-inner {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 20px;
                padding: 16px 0;
            }
            .brand {
                display: flex;
                align-items: center;
                gap: 12px;
                font-weight: 800;
                font-size: 1.1rem;
            }
            .brand-mark {
                width: 42px;
                height: 42px;
                border-radius: 12px;
                display: grid;
                place-items: center;
                background: var(--primary);
                color: #fff;
                font-weight: 800;
            }
            .nav {
                display: flex;
                gap: 24px;
                color: var(--muted);
                font-size: 0.95rem;
                font-weight: 600;
            }
            .nav a:hover {
                color: var(--primary);
            }
            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 12px 22px;
                border-radius: 999px;
                font-weight: 700;
                font-size: 0.92rem;
                transition: 0.2s ease;
            }
            .btn-primary {
                background: var(--primary);
                color: #fff;
            }
            .btn-primary:hover {
                background: #16335d;
            }
            .btn-light {
                background: #fff;
                border: 1px solid #d5dce6;
                color: var(--primary);
            }
            .btn-light:hover {
                border-color: var(--primary);
            }
            .btn-accent {
                background: var(--accent);
                color: #10233d;
            }
            .btn-accent:hover {
                background: #f3a220;
            }
            .hero {
                padding: 72px 0 52px;
                position: relative;
                overflow: hidden;
            }
            .hero-grid {
                display: grid;
                grid-template-columns: 1.05fr 0.95fr;
                gap: 40px;
                align-items: center;
            }
            .eyebrow {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                padding: 8px 14px;
                border-radius: 999px;
                background: rgba(244, 180, 58, 0.14);
                color: #8b5a00;
                font-size: 0.78rem;
                font-weight: 800;
                letter-spacing: 0.18em;
                text-transform: uppercase;
            }
            h1 {
                margin: 18px 0 14px;
                font-size: clamp(2.8rem, 5vw, 4.7rem);
                line-height: 1.05;
                letter-spacing: -0.04em;
            }
            .lead {
                max-width: 640px;
                font-size: 1.05rem;
                line-height: 1.82;
                color: var(--muted);
            }
            .hero-actions {
                display: flex;
                gap: 14px;
                flex-wrap: wrap;
                margin-top: 28px;
            }
            .stats {
                margin-top: 26px;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 14px;
            }
            .stat-card,
            .panel,
            .card,
            .testimonial,
            .insight {
                background: var(--card);
                border: 1px solid rgba(16, 35, 61, 0.09);
                box-shadow: var(--shadow);
                border-radius: var(--radius);
            }
            .stat-card {
                padding: 18px;
            }
            .stat-value {
                font-size: 1.75rem;
                font-weight: 800;
                color: var(--primary);
            }
            .stat-label {
                margin-top: 6px;
                color: var(--muted);
                font-size: 0.9rem;
            }
            .hero-visual {
                position: relative;
                background: linear-gradient(180deg, #0f2747, #04152b);
                border-radius: 28px;
                padding: 20px;
                color: #fff;
                overflow: hidden;
            }
            .hero-visual::before {
                content: "";
                position: absolute;
                inset: 0;
                background: radial-gradient(
                    circle at top right,
                    rgba(50, 151, 214, 0.38),
                    transparent 32%
                );
                pointer-events: none;
            }
            .quality-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 12px;
                padding: 12px 14px;
                border-radius: 16px;
                background: rgba(255, 255, 255, 0.08);
                border: 1px solid rgba(255, 255, 255, 0.12);
                margin-bottom: 14px;
            }
            .dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #50e698;
                box-shadow: 0 0 0 6px rgba(80, 230, 152, 0.18);
            }
            .mini-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
                margin: 12px 0 16px;
            }
            .mini-card {
                background: rgba(255, 255, 255, 0.08);
                border-radius: 18px;
                padding: 18px;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            .mini-card .label {
                color: #a4b7ce;
                font-size: 0.76rem;
                letter-spacing: 0.15em;
                text-transform: uppercase;
            }
            .mini-card .value {
                font-size: 2rem;
                font-weight: 800;
                margin-top: 8px;
            }
            .section {
                padding: 80px 0;
            }
            .section-title {
                text-align: center;
                margin-bottom: 30px;
            }
            .section-title h2 {
                font-size: clamp(2rem, 4vw, 3rem);
                margin: 10px 0 8px;
            }
            .section-title p {
                max-width: 720px;
                margin: 0 auto;
                color: var(--muted);
                line-height: 1.8;
            }
            .cols-2 {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }
            .card {
                padding: 26px;
            }
            .card-icon {
                display: grid;
                place-items: center;
                width: 52px;
                height: 52px;
                border-radius: 14px;
                background: var(--primary);
                color: #fff;
                font-weight: 800;
                margin-bottom: 16px;
            }
            .card h3 {
                font-size: 1.6rem;
                margin: 0 0 10px;
            }
            .card p,
            .testimonial p,
            .insight p {
                color: var(--muted);
                line-height: 1.75;
            }
            .check-list {
                margin: 14px 0 0;
                padding: 0;
                list-style: none;
            }
            .check-list li {
                display: flex;
                align-items: center;
                gap: 10px;
                margin: 10px 0;
                color: #1d2b42;
                font-weight: 600;
            }
            .check-list li span {
                color: var(--accent);
                font-weight: 900;
            }
            .network-grid {
                display: grid;
                grid-template-columns: 0.9fr 1.1fr;
                gap: 24px;
                align-items: center;
            }
            .network-copy ul {
                list-style: none;
                padding: 0;
                margin: 20px 0 0;
            }
            .network-copy li {
                display: flex;
                gap: 14px;
                align-items: flex-start;
                margin-bottom: 16px;
            }
            .network-copy .icon {
                width: 38px;
                height: 38px;
                border-radius: 12px;
                background: var(--primary);
                color: #fff;
                display: grid;
                place-items: center;
                font-weight: 800;
                flex-shrink: 0;
            }
            .map-panel {
                position: relative;
                min-height: 340px;
                border-radius: 28px;
                padding: 22px;
                background: linear-gradient(180deg, #ffffff, #f3f6fb);
                border: 1px solid var(--line);
            }
            .map-core {
                position: absolute;
                inset: 20px;
                border-radius: 20px;
                border: 1px dashed #b6c4d8;
                background: radial-gradient(
                    circle at center,
                    rgba(15, 39, 71, 0.08),
                    transparent 52%
                );
            }
            .marker {
                position: absolute;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 6px;
            }
            .marker span:first-child {
                width: 12px;
                height: 12px;
                border-radius: 50%;
                background: var(--accent);
                box-shadow: 0 0 0 7px rgba(244, 180, 58, 0.18);
            }
            .marker span:last-child {
                padding: 4px 8px;
                border-radius: 999px;
                background: rgba(255, 255, 255, 0.95);
                font-size: 0.72rem;
                font-weight: 800;
                color: var(--primary);
            }
            .marker.houston {
                left: 24%;
                top: 24%;
            }
            .marker.rotterdam {
                left: 48%;
                top: 38%;
            }
            .marker.singapore {
                right: 22%;
                bottom: 26%;
            }
            .testimonials-grid,
            .insights-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }
            .testimonial,
            .insight {
                padding: 24px;
            }
            .stars {
                color: #f4b43a;
                letter-spacing: 3px;
                margin-bottom: 16px;
            }
            .quote {
                font-size: 0.98rem;
            }
            .person {
                margin-top: 18px;
                font-weight: 800;
            }
            .meta {
                color: var(--muted);
                font-size: 0.88rem;
                margin-top: 4px;
            }
            .insight-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                gap: 10px;
                margin-bottom: 12px;
                font-size: 0.78rem;
                color: var(--muted);
            }
            .insight-tag {
                color: #a56100;
                font-weight: 800;
                letter-spacing: 0.14em;
                text-transform: uppercase;
            }
            .insight h3 {
                margin: 0 0 10px;
                font-size: 1.15rem;
            }
            .cta {
                background: linear-gradient(135deg, #0f2747, #123a67);
                color: #fff;
                border-radius: 28px;
                padding: 68px 20px;
                text-align: center;
                position: relative;
                overflow: hidden;
            }
            .cta::before,
            .cta::after {
                content: "";
                position: absolute;
                width: 240px;
                height: 240px;
                border-radius: 50%;
                filter: blur(12px);
                opacity: 0.35;
                background: rgba(244, 180, 58, 0.6);
            }
            .cta::before {
                left: -80px;
                bottom: -100px;
            }
            .cta::after {
                right: -80px;
                top: -100px;
            }
            .cta h2 {
                font-size: clamp(2rem, 4.2vw, 4rem);
                margin: 0 0 12px;
            }
            .cta p {
                max-width: 720px;
                margin: 0 auto;
                color: rgba(255, 255, 255, 0.8);
                line-height: 1.8;
            }
            .cta-actions {
                margin-top: 24px;
                display: flex;
                gap: 12px;
                justify-content: center;
                flex-wrap: wrap;
            }
            footer {
                background: #0b1d39;
                color: #fff;
                padding: 54px 0 36px;
            }
            .footer-grid {
                display: grid;
                grid-template-columns: 1.2fr 0.7fr 0.7fr 1fr;
                gap: 24px;
            }
            .footer-grid h3 {
                font-size: 0.78rem;
                letter-spacing: 0.16em;
                text-transform: uppercase;
                color: #f4b43a;
                margin: 0 0 16px;
            }
            .footer-grid p,
            .footer-grid li,
            .footer-grid a {
                color: rgba(255, 255, 255, 0.72);
                line-height: 1.8;
            }
            .footer-grid ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }
            .newsletter-form {
                margin-top: 14px;
                display: flex;
                gap: 10px;
            }
            .newsletter-form input {
                flex: 1;
                border-radius: 999px;
                border: 1px solid rgba(255, 255, 255, 0.12);
                background: rgba(255, 255, 255, 0.05);
                color: #fff;
                padding: 12px 14px;
                outline: none;
            }
            .newsletter-form input::placeholder {
                color: rgba(255, 255, 255, 0.55);
            }
            .footer-bottom {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 12px;
                padding-top: 22px;
                margin-top: 24px;
                border-top: 1px solid rgba(255, 255, 255, 0.08);
                color: rgba(255, 255, 255, 0.58);
                font-size: 0.86rem;
            }
            @media (max-width: 980px) {
                .hero-grid,
                .network-grid,
                .cols-2,
                .testimonials-grid,
                .insights-grid,
                .footer-grid {
                    grid-template-columns: 1fr;
                }
                .stats {
                    grid-template-columns: 1fr;
                }
                .nav {
                    display: none;
                }
            }
            @media (max-width: 640px) {
                h1 {
                    font-size: 2.5rem;
                }
                .topbar-inner {
                    flex-wrap: wrap;
                }
                .brand {
                    width: 100%;
                }
                .btn {
                    width: 100%;
                }
                .hero-actions {
                    flex-direction: column;
                }
                .newsletter-form {
                    flex-direction: column;
                }
            }
        </style>
    </head>
    <body>
        <header class="topbar">
            <div class="container topbar-inner">
                <a href="#" class="brand"
                    ><span class="brand-mark">P</span><span>Paramount</span></a
                >
                <nav class="nav">
                    <a href="#solutions">Solutions</a>
                    <a href="#innovation">Innovation</a>
                    <a href="#insights">Insights</a>
                    <a href="#contact">Contact</a>
                </nav>
                <a href="#contact" class="btn btn-primary">Request a Quote</a>
            </div>
        </header>

        <main>
            <section class="hero">
                <div class="container hero-grid">
                    <div>
                        <span class="eyebrow"
                            >Trusted Industrial Performance</span
                        >
                        <h1>
                            Powering fleets with advanced lubricants and
                            engineering precision.
                        </h1>
                        <p class="lead">
                            Paramount delivers premium energy, specialty
                            lubricants, and AI-led quality control for
                            industrial operations that cannot afford downtime.
                        </p>
                        <div class="hero-actions">
                            <a href="#contact" class="btn btn-primary"
                                >Contact Us</a
                            >
                            <a href="#solutions" class="btn btn-light"
                                >Explore Solutions</a
                            >
                        </div>
                        <div class="stats">
                            <div class="stat-card">
                                <div class="stat-value">250+</div>
                                <div class="stat-label">Regional partners</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">99.2%</div>
                                <div class="stat-label">Batch conformity</div>
                            </div>
                            <div class="stat-card">
                                <div class="stat-value">24/7</div>
                                <div class="stat-label">Technical support</div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-visual">
                        <div class="quality-bar">
                            <div
                                style="
                                    display: flex;
                                    align-items: center;
                                    gap: 12px;
                                "
                            >
                                <span class="dot"></span
                                ><strong>Batch #9822-X Testing</strong>
                            </div>
                            <span
                                style="
                                    color: #8ff0ad;
                                    font-size: 0.76rem;
                                    font-weight: 800;
                                "
                                >Viscosity OK</span
                            >
                        </div>
                        <div class="mini-grid">
                            <div class="mini-card">
                                <div class="label">AI monitoring</div>
                                <div class="value">92.4%</div>
                            </div>
                            <div class="mini-card">
                                <div class="label">Output stability</div>
                                <div class="value">0.08%</div>
                            </div>
                        </div>
                        <div class="mini-card" style="margin-top: 8px">
                            <div
                                style="
                                    display: flex;
                                    justify-content: space-between;
                                    gap: 10px;
                                    margin-bottom: 12px;
                                "
                            >
                                <strong>Live Quality Matrix</strong
                                ><span
                                    style="
                                        color: #f4b43a;
                                        font-size: 0.76rem;
                                        font-weight: 700;
                                    "
                                    >Certified Process</span
                                >
                            </div>
                            <div style="display: grid; gap: 10px">
                                <div
                                    class="quality-bar"
                                    style="margin: 0; padding: 10px 12px"
                                >
                                    <span>Hydraulic fluid</span
                                    ><span
                                        style="color: #8ff0ad; font-weight: 700"
                                        >Passed</span
                                    >
                                </div>
                                <div
                                    class="quality-bar"
                                    style="margin: 0; padding: 10px 12px"
                                >
                                    <span>Gear grease</span
                                    ><span
                                        style="color: #8ff0ad; font-weight: 700"
                                        >Passed</span
                                    >
                                </div>
                                <div
                                    class="quality-bar"
                                    style="margin: 0; padding: 10px 12px"
                                >
                                    <span>Additive ratio</span
                                    ><span
                                        style="color: #8ff0ad; font-weight: 700"
                                        >100% Match</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="solutions" class="section">
                <div class="container">
                    <div class="section-title">
                        <span class="eyebrow">Innovation</span>
                        <h2>Smart Manufacturing & Advanced AI Testing</h2>
                        <p>
                            How we leverage high technology to guarantee
                            lubricant precision and structural safety.
                        </p>
                    </div>
                    <div class="cols-2">
                        <article class="card">
                            <div class="card-icon">?</div>
                            <h3>AI-Driven Quality Control</h3>
                            <p>
                                We employ real-time machine learning algorithms
                                across automated blending systems. Sensors
                                monitor physical properties, viscosities, and
                                additive ratios at microsecond intervals,
                                ensuring absolute conformity to specifications.
                            </p>
                            <ul class="check-list">
                                <li>
                                    <span>•</span> Zero-tolerance batch variance
                                    control
                                </li>
                                <li>
                                    <span>•</span> Continuous molecular-level
                                    inspection
                                </li>
                                <li>
                                    <span>•</span> Automated corrective process
                                    alerts
                                </li>
                            </ul>
                        </article>
                        <article class="card">
                            <div class="card-icon">?</div>
                            <h3>Precision Industrial Chemistry</h3>
                            <p>
                                From heavy-duty hydraulic oils to premium
                                greases and marine solutions, our formulations
                                are tuned for harsh conditions, long life, and
                                operating efficiency.
                            </p>
                            <ul class="check-list">
                                <li>
                                    <span>•</span> Lubricants for mining,
                                    construction, transport, and energy
                                </li>
                                <li>
                                    <span>•</span> Custom formulation support
                                    for OEM requirements
                                </li>
                                <li>
                                    <span>•</span> Eco-conscious and
                                    high-performance product lines
                                </li>
                            </ul>
                        </article>
                    </div>
                </div>
            </section>

            <section
                id="innovation"
                class="section"
                style="background: #edf3f8"
            >
                <div class="container network-grid">
                    <div class="network-copy">
                        <span class="eyebrow">Global Network</span>
                        <h2
                            style="
                                margin: 14px 0 10px;
                                font-size: clamp(2rem, 4vw, 3rem);
                            "
                        >
                            Our Footprint, Your Success
                        </h2>
                        <p style="color: var(--muted); line-height: 1.8">
                            With regional headquarters, state-of-the-art
                            blending plants, and a robust distributor network,
                            Paramount provides rapid technical support and
                            product availability worldwide.
                        </p>
                        <ul>
                            <li>
                                <div class="icon">?</div>
                                <div>
                                    <strong>Strategic Headquarters</strong
                                    ><br /><span
                                        style="
                                            color: var(--muted);
                                            font-size: 0.92rem;
                                        "
                                        >Main hubs in Houston, Rotterdam, and
                                        Singapore.</span
                                    >
                                </div>
                            </li>
                            <li>
                                <div class="icon">?</div>
                                <div>
                                    <strong>Blending Facilities</strong
                                    ><br /><span
                                        style="
                                            color: var(--muted);
                                            font-size: 0.92rem;
                                        "
                                        >5 high-capacity automated plants across
                                        three continents.</span
                                    >
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="map-panel">
                        <div class="map-core"></div>
                        <div class="marker houston">
                            <span></span><span>Houston HQ</span>
                        </div>
                        <div class="marker rotterdam">
                            <span></span><span>Rotterdam Plant</span>
                        </div>
                        <div class="marker singapore">
                            <span></span><span>Singapore Hub</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="section-title">
                        <span class="eyebrow">Testimonials</span>
                        <h2>What Our Partners Say</h2>
                    </div>
                    <div class="testimonials-grid">
                        <article class="testimonial">
                            <div class="stars">?????</div>
                            <p class="quote">
                                “Switching our entire mining fleet to
                                Paramount’s heavy hydraulic and grease
                                formulations saved us over 12% in maintenance
                                overheads in the first year alone.”
                            </p>
                            <div class="person">Marcus Vance</div>
                            <div class="meta">
                                Director of Fleet Operations, Apex Mining Corp
                            </div>
                        </article>
                        <article class="testimonial">
                            <div class="stars">?????</div>
                            <p class="quote">
                                “Their R&amp;D team worked directly with our
                                engineers to formulate a bespoke low-viscosity
                                gear lubricant. Their response speed and
                                laboratory depth are world-class.”
                            </p>
                            <div class="person">Dr. Elena Rostova</div>
                            <div class="meta">
                                Head of Mechanical Engineering, EuroTrans Marine
                            </div>
                        </article>
                        <article class="testimonial">
                            <div class="stars">?????</div>
                            <p class="quote">
                                “Paramount’s bio-lubricant line helped us meet
                                strict environmental mandates without
                                sacrificing speed or operating temperatures.”
                            </p>
                            <div class="person">Kenji Takahashi</div>
                            <div class="meta">
                                VP of Procurement, Pacific Power & Energy
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section id="insights" class="section" style="background: #edf3f8">
                <div class="container">
                    <div
                        style="
                            display: flex;
                            justify-content: space-between;
                            gap: 16px;
                            align-items: flex-end;
                            margin-bottom: 28px;
                            flex-wrap: wrap;
                        "
                    >
                        <div>
                            <span class="eyebrow">Media & Insights</span>
                            <h2
                                style="
                                    margin: 12px 0 0;
                                    font-size: clamp(2rem, 4vw, 3rem);
                                "
                            >
                                Industry Perspectives & Press Releases
                            </h2>
                        </div>
                        <a href="#" class="btn btn-primary"
                            >View All Insights</a
                        >
                    </div>
                    <div class="insights-grid">
                        <article class="insight">
                            <div class="insight-header">
                                <span class="insight-tag">Technology</span
                                ><span>Oct 24, 2024</span>
                            </div>
                            <h3>
                                The Future of Synthetic Hydrocarbons in Heavy
                                Machinery
                            </h3>
                            <p>
                                An in-depth look at how molecular structures are
                                being re-engineered to survive extreme
                                temperature ranges.
                            </p>
                            <a
                                href="#"
                                style="
                                    font-weight: 800;
                                    color: var(--primary);
                                    margin-top: 14px;
                                    display: inline-block;
                                "
                                >Read More ?</a
                            >
                        </article>
                        <article class="insight">
                            <div class="insight-header">
                                <span class="insight-tag">Sustainability</span
                                ><span>Oct 18, 2024</span>
                            </div>
                            <h3>
                                Paramount Achieves Gold Rating in ESG Evaluation
                            </h3>
                            <p>
                                Our continuous efforts to lower plant water
                                usage and deploy circular packaging earn
                                top-tier global recognition.
                            </p>
                            <a
                                href="#"
                                style="
                                    font-weight: 800;
                                    color: var(--primary);
                                    margin-top: 14px;
                                    display: inline-block;
                                "
                                >Read More ?</a
                            >
                        </article>
                        <article class="insight">
                            <div class="insight-header">
                                <span class="insight-tag">Corporate</span
                                ><span>Sep 30, 2024</span>
                            </div>
                            <h3>
                                Paramount Expands Blending Operations in
                                Rotterdam Hub
                            </h3>
                            <p>
                                The new facility phase integrates smart robots
                                and increases regional supply capacity by 40%
                                for European partners.
                            </p>
                            <a
                                href="#"
                                style="
                                    font-weight: 800;
                                    color: var(--primary);
                                    margin-top: 14px;
                                    display: inline-block;
                                "
                                >Read More ?</a
                            >
                        </article>
                    </div>
                </div>
            </section>

            <section id="contact" class="section">
                <div class="container">
                    <div class="cta">
                        <h2>Let’s Build a Better Future Together</h2>
                        <p>
                            Get in touch with our technical sales engineers to
                            optimize your industrial machinery lifespan, lower
                            utility consumption, and streamline your supply
                            chain.
                        </p>
                        <div class="cta-actions">
                            <a href="#" class="btn btn-accent">Contact Us</a>
                            <a
                                href="#"
                                class="btn btn-light"
                                style="
                                    border-color: rgba(255, 255, 255, 0.25);
                                    color: #fff;
                                    background: rgba(255, 255, 255, 0.08);
                                "
                                >Download Catalogue</a
                            >
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container footer-grid">
                <div>
                    <div class="brand" style="color: #fff; margin-bottom: 14px">
                        <span class="brand-mark">P</span><span>Paramount</span>
                    </div>
                    <p>
                        Premium corporate energy and specialty lubricant
                        formulations engineered for extreme performance, trust,
                        and complete sustainability.
                    </p>
                </div>
                <div>
                    <h3>Products</h3>
                    <ul>
                        <li><a href="#">Automotive Oils</a></li>
                        <li><a href="#">Industrial Lubricants</a></li>
                        <li><a href="#">Marine Solutions</a></li>
                        <li><a href="#">Hydraulic Fluids</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Technology & Labs</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h3>Newsletter</h3>
                    <p>
                        Subscribe to receive technical guides, product releases,
                        and energy transition updates.
                    </p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Your work email" />
                        <button type="button" class="btn btn-accent">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
            <div class="container footer-bottom">
                <div>ISO 9001 • ISO 14001 • API Approved</div>
                <div>
                    © 2024 Paramount Energy & Lubricants. All rights reserved.
                </div>
            </div>
        </footer>
    </body>
</html>
