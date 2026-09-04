{{-- resources/views/pages/services.blade.php --}}

@extends('layouts.app')

@section('content')

<div class="sj-services-page">

    {{-- =========================================================
        HERO
    ========================================================== --}}

    <section class="sj-services-hero">

        <div class="sj-container">

            <div class="sj-services-hero-grid">

                <div class="sj-services-hero-copy">

                    <div class="sj-eyebrow">
                        {{ $page->eyebrow ?? 'What we do' }}
                    </div>

                    <h1>
                        {{ $page->headline }}
                    </h1>

                    <p class="sj-services-hero-intro">
                        {{ $page->intro }}
                    </p>

                    <div class="sj-services-actions">

                        @if(!empty($settings->whatsapp_number))

                            <a
                                href="https://wa.me/{{ preg_replace('/\D+/', '', $settings->whatsapp_number) }}"
                                class="sj-service-btn sj-service-btn-primary"
                                target="_blank"
                                rel="noopener"
                            >
                                <span>Get a quote</span>

                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M5 12h14M13 6l6 6-6 6"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                            </a>

                        @endif

                        <a
                            href="#our-services"
                            class="sj-service-btn sj-service-btn-secondary"
                        >
                            Explore our services
                        </a>

                    </div>

                    <div class="sj-hero-trust">

                        <div>
                            <strong>01</strong>
                            <span>Simple booking</span>
                        </div>

                        <div>
                            <strong>02</strong>
                            <span>Careful handling</span>
                        </div>

                        <div>
                            <strong>03</strong>
                            <span>Reliable delivery</span>
                        </div>

                    </div>

                </div>


                <div class="sj-services-hero-visual">

                    <div class="sj-hero-card">

                        <div class="sj-hero-card-top">
                            <span>LOGISTICS REQUEST</span>

                            <span class="sj-status">
                                <i></i>
                                READY
                            </span>
                        </div>

                        <div class="sj-route">

                            <div class="sj-route-point">

                                <span class="sj-route-marker"></span>

                                <div>
                                    <small>PICKUP</small>
                                    <strong>Lagos</strong>
                                </div>

                            </div>

                            <div class="sj-route-line">
                                <span></span>
                            </div>

                            <div class="sj-route-point">

                                <span class="sj-route-marker sj-route-marker-end"></span>

                                <div>
                                    <small>DELIVERY</small>
                                    <strong>Nationwide</strong>
                                </div>

                            </div>

                        </div>

                        <div class="sj-hero-card-footer">

                            <span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M12 21s7-6.1 7-12a7 7 0 1 0-14 0c0 5.9 7 12 7 12Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    />
                                    <circle
                                        cx="12"
                                        cy="9"
                                        r="2.5"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    />
                                </svg>

                                Lagos → Nationwide
                            </span>

                            <span>ON DEMAND</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        PROBLEM / SOLUTION
    ========================================================== --}}

    <section class="sj-problem-section">

        <div class="sj-container">

            <div class="sj-problem-grid">

                <div>

                    <div class="sj-eyebrow">
                        More than moving goods
                    </div>

                    <h2>
                        Logistics should remove problems,
                        <span>not create new ones.</span>
                    </h2>

                </div>

                <div class="sj-problem-copy">

                    <p>
                        Whether you are sending a single parcel, moving business
                        inventory or sourcing goods for an organisation, the
                        challenge is rarely just transportation.
                    </p>

                    <p>
                        You need someone who understands timing, communication,
                        handling, reliability and the consequences of delays.
                        That's where SJ Novex comes in.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        SERVICES
    ========================================================== --}}

    <section
        class="sj-services-section"
        id="our-services"
    >

        <div class="sj-container">

            <div class="sj-section-heading">

                <div>

                    <div class="sj-eyebrow">
                        Our services
                    </div>

                    <h2>
                        Practical solutions for
                        <span>real-world needs.</span>
                    </h2>

                </div>

                <p>
                    From individual deliveries to ongoing business requirements,
                    we provide flexible services built around what you actually
                    need to get done.
                </p>

            </div>


            <div class="sj-service-list">

                @foreach($services as $i => $service)

                    <article class="sj-service-card">

                        <div class="sj-service-number">
                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <div class="sj-service-icon">

                            @if($service->icon === 'truck')

                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M3 6h11v11H3zM14 10h4l3 3v4h-7z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    />
                                    <circle cx="7" cy="19" r="2" stroke="currentColor" stroke-width="1.7"/>
                                    <circle cx="18" cy="19" r="2" stroke="currentColor" stroke-width="1.7"/>
                                </svg>

                            @elseif($service->icon === 'map')

                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="m9 18-6 3V6l6-3 6 3 6-3v15l-6 3-6-3Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M9 3v15M15 6v15"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                    />
                                </svg>

                            @elseif($service->icon === 'cube')

                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="m12 3 9 5-9 5-9-5 9-5Z"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="m3 8 9 5 9-5M3 8v8l9 5 9-5V8"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linejoin="round"
                                    />
                                    <path d="M12 13v8" stroke="currentColor" stroke-width="1.7"/>
                                </svg>

                            @elseif($service->icon === 'wrench-screwdriver')

                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="m14 7 3-3 3 3-3 3M4 20l8-8"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linecap="round"
                                    />
                                    <path
                                        d="M14 4a5 5 0 0 0-6.5 6.5L3 15l2 2 4.5-4.5A5 5 0 0 0 16 6"
                                        stroke="currentColor"
                                        stroke-width="1.7"
                                        stroke-linejoin="round"
                                    />
                                </svg>

                            @else

                                <svg viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M7 7h13M7 17h13M4 7h.01M4 17h.01"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                    />
                                </svg>

                            @endif

                        </div>


                        <div class="sj-service-content">

                            <div class="sj-service-title-row">

                                <h3>
                                    {{ $service->title }}
                                </h3>

                                <span class="sj-service-arrow">
                                    →
                                </span>

                            </div>

                            <p>
                                {{ $service->description }}
                            </p>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =========================================================
        WHY CHOOSE US
    ========================================================== --}}

    <section class="sj-why-section">

        <div class="sj-container">

            <div class="sj-why-grid">

                <div class="sj-why-heading">

                    <div class="sj-eyebrow">
                        Why SJ Novex
                    </div>

                    <h2>
                        You need a logistics partner
                        <span>you don't have to chase.</span>
                    </h2>

                    <p>
                        We understand that your delivery is often connected
                        to something bigger; a customer waiting, a business
                        deadline, stock that needs replenishing or a transaction
                        that needs to happen on time.
                    </p>

                </div>


                <div class="sj-benefits">

                    <div class="sj-benefit">

                        <span class="sj-benefit-number">01</span>

                        <div>
                            <h3>Clear communication</h3>
                            <p>
                                Know what is happening, where your shipment is
                                going and what happens next.
                            </p>
                        </div>

                    </div>


                    <div class="sj-benefit">

                        <span class="sj-benefit-number">02</span>

                        <div>
                            <h3>Flexible service</h3>
                            <p>
                                We work around your route, shipment size,
                                timeline and specific requirements.
                            </p>
                        </div>

                    </div>


                    <div class="sj-benefit">

                        <span class="sj-benefit-number">03</span>

                        <div>
                            <h3>Careful handling</h3>
                            <p>
                                Your goods are handled with the seriousness
                                they deserve from pickup through delivery.
                            </p>
                        </div>

                    </div>


                    <div class="sj-benefit">

                        <span class="sj-benefit-number">04</span>

                        <div>
                            <h3>Business-minded support</h3>
                            <p>
                                We understand that reliable logistics directly
                                affects your customers, operations and reputation.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================================================
        PROCESS
    ========================================================== --}}

    <section class="sj-process-section">

        <div class="sj-container">

            <div class="sj-section-heading sj-process-heading">

                <div>

                    <div class="sj-eyebrow">
                        How it works
                    </div>

                    <h2>
                        From request to delivery,
                        <span>without the confusion.</span>
                    </h2>

                </div>

            </div>


            <div class="sj-process-grid">

                @foreach($steps as $i => $step)

                    <div class="sj-process-card">

                        <div class="sj-process-top">

                            <span class="sj-process-number">
                                {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <span class="sj-process-line"></span>

                        </div>

                        <h3>
                            {{ preg_replace('/^\d+\.\s*/', '', $step->title) }}
                        </h3>

                        <p>
                            {{ $step->description }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =========================================================
        PRICING / QUOTE
    ========================================================== --}}

    <section class="sj-quote-section">

        <div class="sj-container">

            <div class="sj-quote-card">

                <div class="sj-quote-content">

                    <div class="sj-eyebrow">
                        Need a price?
                    </div>

                    <h2>
                        Tell us what needs to move.
                    </h2>

                    <p>
                        Every job is different. Send us your pickup location,
                        destination, item details and preferred timeline and
                        we'll help you work out the right solution.
                    </p>

                </div>


                <div class="sj-quote-action">

                    @if(!empty($settings->whatsapp_number))

                        <a
                            href="https://wa.me/{{ preg_replace('/\D+/', '', $settings->whatsapp_number) }}"
                            class="sj-service-btn sj-service-btn-primary"
                            target="_blank"
                            rel="noopener"
                        >
                            Request a quote
                            <span>→</span>
                        </a>

                    @endif

                    <small>
                        Quick response via WhatsApp
                    </small>

                </div>

            </div>

        </div>

    </section>

</div>


@push('head')

<style>

/* ============================================================
   SJ NOVEX SERVICES PAGE
   Everything is scoped under .sj-services-page
============================================================ */

.sj-services-page {
    --page-navy: #071A3A;
    --page-navy-2: #0A2854;
    --page-blue: #0A70B8;
    --page-gold: #E3A11B;
    --page-gold-light: #F4C15D;

    --page-white: #FFFFFF;
    --page-paper: #F7F7F5;
    --page-text: #16202D;
    --page-muted: #647080;
    --page-border: #E3E6E9;

    color: var(--page-text);
    background: var(--page-white);
}


/* ============================================================
   HERO
============================================================ */

.sj-services-page .sj-services-hero {
    background:
        radial-gradient(
            circle at 78% 20%,
            rgba(25, 119, 190, .18),
            transparent 32%
        ),
        linear-gradient(
            135deg,
            var(--page-navy),
            #06152E
        );

    color: white;
    padding: 90px 0 80px;
    overflow: hidden;
}

.sj-services-page .sj-services-hero-grid {
    display: grid;
    grid-template-columns: 1.1fr .9fr;
    gap: 80px;
    align-items: center;
}

.sj-services-page .sj-services-hero-copy {
    max-width: 680px;
}

.sj-services-page .sj-services-hero h1 {
    margin: 16px 0 24px;
    color: white;
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(2.7rem, 5vw, 4.5rem);
    line-height: 1.02;
    letter-spacing: -.045em;
}

.sj-services-page .sj-services-hero-intro {
    max-width: 620px;
    margin: 0;
    color: rgba(255,255,255,.72);
    font-size: 1.08rem;
    line-height: 1.8;
}

.sj-services-page .sj-services-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 34px;
}

.sj-services-page .sj-service-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    min-height: 50px;
    padding: 0 20px;
    border-radius: 5px;
    font-size: .9rem;
    font-weight: 700;
    transition: .2s ease;
}

.sj-services-page .sj-service-btn-primary {
    background: var(--page-gold);
    color: var(--page-navy);
}

.sj-services-page .sj-service-btn-primary:hover {
    background: var(--page-gold-light);
    transform: translateY(-2px);
}

.sj-services-page .sj-service-btn-secondary {
    color: white;
    border: 1px solid rgba(255,255,255,.22);
}

.sj-services-page .sj-service-btn-secondary:hover {
    border-color: rgba(255,255,255,.55);
    background: rgba(255,255,255,.06);
}

.sj-services-page .sj-hero-trust {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 48px;
    padding-top: 22px;
    border-top: 1px solid rgba(255,255,255,.12);
}

.sj-services-page .sj-hero-trust div {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.sj-services-page .sj-hero-trust strong {
    color: var(--page-gold-light);
    font-family: 'JetBrains Mono', monospace;
    font-size: .7rem;
}

.sj-services-page .sj-hero-trust span {
    color: rgba(255,255,255,.65);
    font-size: .76rem;
}


/* ============================================================
   HERO VISUAL
============================================================ */

.sj-services-page .sj-services-hero-visual {
    position: relative;
}

.sj-services-page .sj-hero-card {
    padding: 28px;
    border: 1px solid rgba(255,255,255,.13);
    border-radius: 8px;
    background: rgba(255,255,255,.055);
    backdrop-filter: blur(12px);
    box-shadow: 0 30px 80px rgba(0,0,0,.22);
}

.sj-services-page .sj-hero-card-top {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    color: rgba(255,255,255,.48);
    font-family: 'JetBrains Mono', monospace;
    font-size: .62rem;
    letter-spacing: .1em;
}

.sj-services-page .sj-status {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #A8D6B8;
}

.sj-services-page .sj-status i {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #64B37B;
}

.sj-services-page .sj-route {
    margin: 55px 0;
}

.sj-services-page .sj-route-point {
    display: flex;
    align-items: center;
    gap: 16px;
}

.sj-services-page .sj-route-marker {
    width: 14px;
    height: 14px;
    border: 3px solid var(--page-gold);
    border-radius: 50%;
    background: var(--page-navy);
    flex-shrink: 0;
}

.sj-services-page .sj-route-marker-end {
    background: var(--page-gold);
}

.sj-services-page .sj-route-point small {
    display: block;
    margin-bottom: 2px;
    color: rgba(255,255,255,.4);
    font-family: 'JetBrains Mono', monospace;
    font-size: .58rem;
    letter-spacing: .1em;
}

.sj-services-page .sj-route-point strong {
    color: white;
    font-size: 1rem;
}

.sj-services-page .sj-route-line {
    width: 1px;
    height: 55px;
    margin: 0 0 0 7px;
    border-left: 1px dashed rgba(255,255,255,.28);
}

.sj-services-page .sj-hero-card-footer {
    display: flex;
    justify-content: space-between;
    gap: 15px;
    padding-top: 18px;
    border-top: 1px solid rgba(255,255,255,.1);
    color: rgba(255,255,255,.55);
    font-family: 'JetBrains Mono', monospace;
    font-size: .62rem;
    letter-spacing: .04em;
}

.sj-services-page .sj-hero-card-footer span:first-child {
    display: flex;
    align-items: center;
    gap: 7px;
}


/* ============================================================
   PROBLEM SECTION
============================================================ */

.sj-services-page .sj-problem-section {
    padding: 100px 0;
    background: var(--page-paper);
}

.sj-services-page .sj-problem-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 90px;
    align-items: start;
}

.sj-services-page .sj-problem-grid h2,
.sj-services-page .sj-section-heading h2,
.sj-services-page .sj-why-heading h2 {
    margin: 14px 0 0;
    color: var(--page-navy);
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(2rem, 4vw, 3.1rem);
    line-height: 1.08;
    letter-spacing: -.035em;
}

.sj-services-page h2 span {
    color: var(--page-blue);
}

.sj-services-page .sj-problem-copy {
    max-width: 570px;
}

.sj-services-page .sj-problem-copy p {
    margin: 0 0 20px;
    color: var(--page-muted);
    font-size: 1rem;
    line-height: 1.85;
}


/* ============================================================
   SERVICES
============================================================ */

.sj-services-page .sj-services-section {
    padding: 110px 0;
}

.sj-services-page .sj-section-heading {
    display: grid;
    grid-template-columns: 1fr .75fr;
    gap: 70px;
    align-items: end;
    margin-bottom: 55px;
}

.sj-services-page .sj-section-heading > p {
    margin: 0;
    color: var(--page-muted);
    font-size: .98rem;
    line-height: 1.8;
}

.sj-services-page .sj-service-list {
    border-top: 1px solid var(--page-border);
}

.sj-services-page .sj-service-card {
    display: grid;
    grid-template-columns: 65px 58px 1fr;
    gap: 25px;
    align-items: center;
    padding: 30px 10px;
    border-bottom: 1px solid var(--page-border);
    transition: .2s ease;
}

.sj-services-page .sj-service-card:hover {
    padding-left: 20px;
    padding-right: 0;
    background: #FBFBFA;
}

.sj-services-page .sj-service-number {
    color: var(--page-gold);
    font-family: 'JetBrains Mono', monospace;
    font-size: .75rem;
    font-weight: 600;
}

.sj-services-page .sj-service-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 52px;
    height: 52px;
    border-radius: 6px;
    background: #EEF5FA;
    color: var(--page-blue);
}

.sj-services-page .sj-service-icon svg {
    width: 25px;
    height: 25px;
}

.sj-services-page .sj-service-title-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.sj-services-page .sj-service-title-row h3 {
    margin: 0;
    color: var(--page-navy);
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.2rem;
}

.sj-services-page .sj-service-arrow {
    color: var(--page-gold);
    font-size: 1.3rem;
    transition: .2s ease;
}

.sj-services-page .sj-service-card:hover .sj-service-arrow {
    transform: translateX(5px);
}

.sj-services-page .sj-service-content p {
    max-width: 720px;
    margin: 7px 0 0;
    color: var(--page-muted);
    font-size: .9rem;
    line-height: 1.7;
}


/* ============================================================
   WHY US
============================================================ */

.sj-services-page .sj-why-section {
    padding: 110px 0;
    background: var(--page-navy);
    color: white;
}

.sj-services-page .sj-why-grid {
    display: grid;
    grid-template-columns: .9fr 1.1fr;
    gap: 100px;
}

.sj-services-page .sj-why-heading h2 {
    color: white;
}

.sj-services-page .sj-why-heading h2 span {
    color: var(--page-gold-light);
}

.sj-services-page .sj-why-heading > p {
    margin-top: 25px;
    color: rgba(255,255,255,.62);
    line-height: 1.85;
    font-size: .95rem;
}

.sj-services-page .sj-benefits {
    border-top: 1px solid rgba(255,255,255,.13);
}

.sj-services-page .sj-benefit {
    display: grid;
    grid-template-columns: 50px 1fr;
    gap: 20px;
    padding: 25px 0;
    border-bottom: 1px solid rgba(255,255,255,.13);
}

.sj-services-page .sj-benefit-number {
    color: var(--page-gold-light);
    font-family: 'JetBrains Mono', monospace;
    font-size: .7rem;
}

.sj-services-page .sj-benefit h3 {
    margin: 0 0 6px;
    color: white;
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1rem;
}

.sj-services-page .sj-benefit p {
    margin: 0;
    color: rgba(255,255,255,.55);
    font-size: .87rem;
    line-height: 1.7;
}


/* ============================================================
   PROCESS
============================================================ */

.sj-services-page .sj-process-section {
    padding: 110px 0;
    background: var(--page-paper);
}

.sj-services-page .sj-process-heading {
    display: block;
    max-width: 700px;
}

.sj-services-page .sj-process-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.sj-services-page .sj-process-card {
    padding: 30px;
    background: white;
    border: 1px solid var(--page-border);
    border-radius: 6px;
}

.sj-services-page .sj-process-top {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 45px;
}

.sj-services-page .sj-process-number {
    color: var(--page-gold);
    font-family: 'JetBrains Mono', monospace;
    font-size: .72rem;
    font-weight: 600;
}

.sj-services-page .sj-process-line {
    height: 1px;
    flex: 1;
    background: var(--page-border);
}

.sj-services-page .sj-process-card h3 {
    margin: 0 0 10px;
    color: var(--page-navy);
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.1rem;
}

.sj-services-page .sj-process-card p {
    margin: 0;
    color: var(--page-muted);
    font-size: .88rem;
    line-height: 1.75;
}


/* ============================================================
   QUOTE CTA
============================================================ */

.sj-services-page .sj-quote-section {
    padding: 100px 0;
}

.sj-services-page .sj-quote-card {
    display: grid;
    grid-template-columns: 1fr auto;
    gap: 60px;
    align-items: center;
    padding: 55px;
    border-radius: 8px;
    background:
        radial-gradient(
            circle at 90% 20%,
            rgba(0,116,194,.16),
            transparent 35%
        ),
        var(--page-navy);
}

.sj-services-page .sj-quote-card h2 {
    margin: 12px 0 15px;
    color: white;
    font-family: 'Space Grotesk', sans-serif;
    font-size: clamp(2rem, 4vw, 3rem);
    line-height: 1.05;
}

.sj-services-page .sj-quote-card p {
    max-width: 680px;
    margin: 0;
    color: rgba(255,255,255,.62);
    line-height: 1.8;
}

.sj-services-page .sj-quote-action {
    min-width: 190px;
    text-align: center;
}

.sj-services-page .sj-quote-action small {
    display: block;
    margin-top: 10px;
    color: rgba(255,255,255,.4);
    font-size: .7rem;
}


/* ============================================================
   RESPONSIVE
============================================================ */

@media (max-width: 900px) {

    .sj-services-page .sj-services-hero-grid,
    .sj-services-page .sj-problem-grid,
    .sj-services-page .sj-why-grid {
        grid-template-columns: 1fr;
        gap: 55px;
    }

    .sj-services-page .sj-section-heading {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .sj-services-page .sj-services-hero {
        padding: 70px 0;
    }

    .sj-services-page .sj-services-hero-visual {
        max-width: 650px;
    }

    .sj-services-page .sj-process-grid {
        grid-template-columns: 1fr;
    }

    .sj-services-page .sj-quote-card {
        grid-template-columns: 1fr;
    }

    .sj-services-page .sj-quote-action {
        text-align: left;
    }
}


@media (max-width: 650px) {

    .sj-services-page .sj-services-hero h1 {
        font-size: 2.6rem;
    }

    .sj-services-page .sj-hero-trust {
        gap: 20px;
    }

    .sj-services-page .sj-services-section,
    .sj-services-page .sj-why-section,
    .sj-services-page .sj-process-section {
        padding: 75px 0;
    }

    .sj-services-page .sj-problem-section,
    .sj-services-page .sj-quote-section {
        padding: 70px 0;
    }

    .sj-services-page .sj-service-card {
        grid-template-columns: 35px 48px 1fr;
        gap: 12px;
        padding: 25px 0;
    }

    .sj-services-page .sj-service-icon {
        width: 44px;
        height: 44px;
    }

    .sj-services-page .sj-service-icon svg {
        width: 21px;
        height: 21px;
    }

    .sj-services-page .sj-service-title-row h3 {
        font-size: 1rem;
    }

    .sj-services-page .sj-service-content p {
        font-size: .84rem;
    }

    .sj-services-page .sj-quote-card {
        padding: 32px 25px;
    }

}

</style>

@endpush

@endsection