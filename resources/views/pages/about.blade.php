{{-- resources/views/pages/about.blade.php --}}

@extends('layouts.app')

@section('content')

{{-- =========================================================
   ABOUT HERO
========================================================= --}}
<section class="sj-about-hero">

    <div class="sj-container">

        <div class="sj-about-hero__content">

            <div class="sj-about-hero__eyebrow">
                <span class="sj-about-hero__eyebrow-line"></span>
                {{ $page->eyebrow }}
            </div>

            <h1>
                {{ $page->headline }}
            </h1>

            <p class="sj-about-hero__intro">
                {{ $page->intro }}
            </p>

            <div class="sj-about-hero__actions">

                <a
                    href="{{ route('services') }}"
                    class="sj-about-btn sj-about-btn--primary"
                >
                    Explore our services

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14"/>
                        <path d="m13 6 6 6-6 6"/>
                    </svg>
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="sj-about-btn sj-about-btn--outline"
                >
                    Talk to us
                </a>

            </div>

        </div>


        {{-- Hero visual / positioning card --}}
        <div class="sj-about-hero__visual">

            <div class="sj-about-hero__visual-image">

                <img
                    src="/images/PHOTO-2026-09-03-13-53-45.jpg"
                    alt="SJ Novex logistics and transportation operations"
                >

                <div class="sj-about-hero__visual-overlay"></div>

                <div class="sj-about-hero__location">

                    <span class="sj-about-hero__location-label">
                        OPERATING FROM
                    </span>

                    <strong>
                        {{ $settings->address }}
                    </strong>

                    <span>
                        Serving {{ $settings->service_area }}
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
   BUSINESS POSITIONING
========================================================= --}}
<section class="sj-about-positioning">

    <div class="sj-container">

        <div class="sj-about-section-heading">

            <div>
                <p class="sj-eyebrow">
                    Why SJ Novex
                </p>

                <h2>
                    Logistics should make business easier,
                    not create another problem.
                </h2>
            </div>

            <p>
                Whether you need a parcel delivered, goods transported,
                products sourced or a supply requirement fulfilled,
                our job is to make the process straightforward,
                dependable and professionally handled.
            </p>

        </div>


        <div class="sj-about-problem-grid">

            {{-- Problem 01 --}}
            <article class="sj-about-problem">

                <div class="sj-about-problem__number">
                    01
                </div>

                <div>

                    <h3>
                        Unreliable delivery
                    </h3>

                    <p>
                        Missed pickups, unclear timelines and poor communication
                        can disrupt your plans and leave customers waiting.
                    </p>

                    <div class="sj-about-problem__solution">
                        <span>Our approach</span>
                        <strong>
                            Clear coordination &amp; dependable execution
                        </strong>
                    </div>

                </div>

            </article>


            {{-- Problem 02 --}}
            <article class="sj-about-problem">

                <div class="sj-about-problem__number">
                    02
                </div>

                <div>

                    <h3>
                        Too many moving parts
                    </h3>

                    <p>
                        Moving goods often involves pickups, transportation,
                        sourcing, coordination and delivery, all of which
                        become difficult when handled separately.
                    </p>

                    <div class="sj-about-problem__solution">
                        <span>Our approach</span>
                        <strong>
                            One dependable logistics partner
                        </strong>
                    </div>

                </div>

            </article>


            {{-- Problem 03 --}}
            <article class="sj-about-problem">

                <div class="sj-about-problem__number">
                    03
                </div>

                <div>

                    <h3>
                        Unclear costs and expectations
                    </h3>

                    <p>
                        Every route, shipment and delivery requirement is
                        different. Generic pricing often creates confusion
                        and unexpected costs.
                    </p>

                    <div class="sj-about-problem__solution">
                        <span>Our approach</span>
                        <strong>
                            Route-based, requirement-specific quotes
                        </strong>
                    </div>

                </div>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
   COMPANY STORY
========================================================= --}}
<section class="sj-about-story">

    <div class="sj-container">

        <div class="sj-about-story__grid">

            {{-- Story --}}
            <div class="sj-about-story__content">

                <p class="sj-eyebrow">
                    Who we are
                </p>

                <h2>
                    {{ $page->headline }}
                </h2>

                <div class="sj-about-story__body">

                    @foreach(explode("\n\n", $page->body) as $paragraph)

                        @if(trim($paragraph))

                            <p>
                                {{ trim($paragraph) }}
                            </p>

                        @endif

                    @endforeach

                </div>

            </div>


            {{-- Business card --}}
            <aside class="sj-about-story__card">

                <div class="sj-about-story__card-top">

                    <span class="sj-about-story__card-label">
                        SJ NOVEX
                    </span>

                    <span class="sj-about-story__card-status">
                        <span></span>
                        READY TO SERVE
                    </span>

                </div>


                <div class="sj-about-story__card-main">

                    <p class="sj-about-story__card-eyebrow">
                        Our focus
                    </p>

                    <h3>
                        Moving goods.
                        Supporting businesses.
                        Solving logistics problems.
                    </h3>

                </div>


                <div class="sj-about-story__card-bottom">

                    <div>
                        <span>BASE</span>
                        <strong>
                            {{ $settings->address }}
                        </strong>
                    </div>

                    <div>
                        <span>REACH</span>
                        <strong>
                            Nationwide
                        </strong>
                    </div>

                </div>

            </aside>

        </div>

    </div>

</section>


{{-- =========================================================
   WHAT CLIENTS CAN EXPECT
========================================================= --}}
<section class="sj-about-expectations">

    <div class="sj-container">

        <div class="sj-about-section-heading sj-about-section-heading--center">

            <p class="sj-eyebrow">
                What you can expect
            </p>

            <h2>
                Professional service from
                pickup to completion.
            </h2>

            <p>
                We understand that customers are not simply paying to move
                something from one location to another. They are paying for
                confidence that the job will be handled properly.
            </p>

        </div>


        <div class="sj-about-expectations__grid">

            <article class="sj-about-expectation">

                <div class="sj-about-expectation__icon">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 3v18"/>
                        <path d="M3 12h18"/>
                        <path d="m5 5 14 14"/>
                        <path d="m19 5-14 14"/>
                    </svg>

                </div>

                <h3>
                    Responsive communication
                </h3>

                <p>
                    We keep communication straightforward so you know what
                    is happening with your request and what comes next.
                </p>

            </article>


            <article class="sj-about-expectation">

                <div class="sj-about-expectation__icon">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M12 3 4 6v6c0 4.5 3.4 7.7 8 9 4.6-1.3 8-4.5 8-9V6l-8-3Z"/>
                        <path d="m8.5 12 2.2 2.2 4.8-5"/>
                    </svg>

                </div>

                <h3>
                    Careful handling
                </h3>

                <p>
                    Goods and parcels are handled with attention throughout
                    the movement process, from collection through delivery.
                </p>

            </article>


            <article class="sj-about-expectation">

                <div class="sj-about-expectation__icon">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="9"/>
                        <path d="M12 7v5l3 2"/>
                    </svg>

                </div>

                <h3>
                    Timelines that matter
                </h3>

                <p>
                    We plan around your requirements and urgency rather than
                    treating every shipment as though it has the same needs.
                </p>

            </article>


            <article class="sj-about-expectation">

                <div class="sj-about-expectation__icon">

                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 19V5"/>
                        <path d="M4 5h13l3 3-3 3H4"/>
                        <path d="M8 19h12"/>
                    </svg>

                </div>

                <h3>
                    Practical solutions
                </h3>

                <p>
                    We look at the actual requirement first, then determine
                    the most appropriate way to get the job done.
                </p>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
   COVERAGE
========================================================= --}}
<section class="sj-about-coverage">

    <div class="sj-container">

        <div class="sj-about-coverage__header">

            <div>

                <p class="sj-about-coverage__eyebrow">
                    SERVICE NETWORK
                </p>

                <h2>
                    Based in Lagos.
                    Built for wider reach.
                </h2>

            </div>

            <p>
                From local deliveries to nationwide logistics requirements,
                we coordinate services around where your goods need to go.
            </p>

        </div>


        <div class="sj-about-coverage__grid">

            <article class="sj-about-coverage__card sj-about-coverage__card--featured">

                <div class="sj-about-coverage__code">
                    LAG
                </div>

                <div>

                    <span>
                        OPERATIONS BASE
                    </span>

                    <h3>
                        Lagos
                    </h3>

                    <p>
                        {{ $settings->address }}
                    </p>

                </div>

                <div class="sj-about-coverage__arrow">
                    →
                </div>

            </article>


            <article class="sj-about-coverage__card">

                <div class="sj-about-coverage__code">
                    NG
                </div>

                <div>

                    <span>
                        NATIONAL
                    </span>

                    <h3>
                        Nigeria
                    </h3>

                    <p>
                        Nationwide delivery and logistics support.
                    </p>

                </div>

                <div class="sj-about-coverage__arrow">
                    →
                </div>

            </article>


            <article class="sj-about-coverage__card">

                <div class="sj-about-coverage__code">
                    GH
                </div>

                <div>

                    <span>
                        CROSS-BORDER
                    </span>

                    <h3>
                        Accra, Ghana
                    </h3>

                    <p>
                        Cross-border service for selected requirements.
                    </p>

                </div>

                <div class="sj-about-coverage__arrow">
                    →
                </div>

            </article>

        </div>

    </div>

</section>


{{-- =========================================================
   FINAL CTA
========================================================= --}}
<section class="sj-about-cta">

    <div class="sj-container">

        <div class="sj-about-cta__inner">

            <div>

                <p class="sj-eyebrow">
                    HAVE A LOGISTICS REQUIREMENT?
                </p>

                <h2>
                    Tell us what needs to move.
                    We'll help you work out the next step.
                </h2>

                <p>
                    Send us your pickup location, destination, shipment details
                    and timeline. We'll provide a quote based on your actual
                    requirement.
                </p>

            </div>

            <a
                href="https://wa.me/{{ $settings->whatsapp_number }}?text={{ urlencode($settings->whatsapp_default_message) }}"
                target="_blank"
                rel="noopener"
                class="sj-about-cta__button"
            >

                Get a quote on WhatsApp

                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14"/>
                    <path d="m13 6 6 6-6 6"/>
                </svg>

            </a>

        </div>

    </div>

</section>


@endsection


@push('head')

<style>

/* =========================================================
   ABOUT PAGE
   All styles are intentionally namespaced with sj-about-
   so they do not interfere with the global layout.
========================================================= */


/* =========================================================
   HERO
========================================================= */

.sj-about-hero {
    position: relative;
    overflow: hidden;

    padding: 86px 0 80px;

    background:
        radial-gradient(
            circle at 80% 15%,
            rgba(232,160,32,.13),
            transparent 35%
        ),
        var(--sj-navy);

    color: var(--sj-white);
}

.sj-about-hero::after {
    content: '';

    position: absolute;
    right: -180px;
    bottom: -260px;

    width: 520px;
    height: 520px;

    border: 1px solid rgba(232,160,32,.12);
    border-radius: 50%;
}

.sj-about-hero > .sj-container {
    display: grid;
    grid-template-columns: minmax(0, 1.05fr) minmax(360px, .95fr);

    gap: 70px;

    align-items: center;
}

.sj-about-hero__content {
    position: relative;
    z-index: 2;
}

.sj-about-hero__eyebrow {
    display: flex;
    align-items: center;
    gap: 10px;

    font-family: 'JetBrains Mono', monospace;

    font-size: .72rem;
    font-weight: 600;

    text-transform: uppercase;
    letter-spacing: .15em;

    color: var(--sj-gold-light);
}

.sj-about-hero__eyebrow-line {
    width: 32px;
    height: 1px;

    background: var(--sj-gold);
}

.sj-about-hero h1 {
    max-width: 760px;

    margin: 18px 0;

    color: var(--sj-white);

    font-size: clamp(2.4rem, 5vw, 4.4rem);

    line-height: 1.05;

    letter-spacing: -.035em;
}

.sj-about-hero__intro {
    max-width: 610px;

    margin: 0 0 32px;

    color: rgba(255,255,255,.72);

    font-size: 1.05rem;

    line-height: 1.8;
}

.sj-about-hero__actions {
    display: flex;
    flex-wrap: wrap;

    gap: 12px;
}

.sj-about-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 9px;

    min-height: 48px;

    padding: 12px 19px;

    border-radius: var(--sj-radius);

    font-size: .88rem;
    font-weight: 600;

    transition:
        transform .2s ease,
        background .2s ease,
        border-color .2s ease;
}

.sj-about-btn:hover {
    transform: translateY(-2px);
}

.sj-about-btn svg {
    width: 17px;
    height: 17px;
}

.sj-about-btn--primary {
    background: var(--sj-gold);
    color: var(--sj-navy-deep);
}

.sj-about-btn--primary:hover {
    background: var(--sj-gold-light);
}

.sj-about-btn--outline {
    border: 1px solid rgba(255,255,255,.25);

    color: var(--sj-white);
}

.sj-about-btn--outline:hover {
    border-color: var(--sj-gold-light);
    color: var(--sj-gold-light);
}


/* Hero visual */

.sj-about-hero__visual {
    position: relative;
    z-index: 2;
}

.sj-about-hero__visual-image {
    position: relative;

    min-height: 430px;

    overflow: hidden;

    border: 1px solid rgba(255,255,255,.12);
    border-radius: var(--sj-radius);

    box-shadow:
        0 30px 70px rgba(0,0,0,.28);
}

.sj-about-hero__visual-image img {
    position: absolute;
    inset: 0;

    width: 100%;
    height: 100%;

    object-fit: cover;
}

.sj-about-hero__visual-overlay {
    position: absolute;
    inset: 0;

    background:
        linear-gradient(
            180deg,
            rgba(6,20,49,.05) 20%,
            rgba(6,20,49,.88) 100%
        );
}

.sj-about-hero__location {
    position: absolute;

    left: 26px;
    right: 26px;
    bottom: 24px;

    display: flex;
    flex-direction: column;

    gap: 4px;
}

.sj-about-hero__location-label {
    font-family: 'JetBrains Mono', monospace;

    font-size: .62rem;
    letter-spacing: .13em;

    color: var(--sj-gold-light);
}

.sj-about-hero__location strong {
    color: var(--sj-white);

    font-family: 'Space Grotesk', sans-serif;

    font-size: 1.35rem;
}

.sj-about-hero__location span:last-child {
    color: rgba(255,255,255,.7);

    font-size: .84rem;
}


/* =========================================================
   POSITIONING
========================================================= */

.sj-about-positioning {
    padding: 90px 0;

    background: var(--sj-off-white);
}

.sj-about-section-heading {
    display: grid;

    grid-template-columns: minmax(0, 1fr) minmax(280px, .75fr);

    gap: 60px;

    align-items: end;

    margin-bottom: 46px;
}

.sj-about-section-heading h2 {
    max-width: 680px;

    margin-top: 12px;

    font-size: clamp(2rem, 4vw, 3rem);

    letter-spacing: -.025em;
}

.sj-about-section-heading > p {
    margin: 0;

    color: var(--sj-slate);

    font-size: .96rem;

    line-height: 1.8;
}

.sj-about-problem-grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    border-top: 1px solid var(--sj-line);
}

.sj-about-problem {
    display: grid;

    grid-template-columns: 42px 1fr;

    gap: 18px;

    padding: 30px 25px 30px 0;

    border-bottom: 1px solid var(--sj-line);
}

.sj-about-problem + .sj-about-problem {
    padding-left: 25px;

    border-left: 1px solid var(--sj-line);
}

.sj-about-problem:last-child {
    padding-left: 25px;
}

.sj-about-problem__number {
    font-family: 'JetBrains Mono', monospace;

    font-size: .72rem;
    font-weight: 600;

    color: var(--sj-gold);
}

.sj-about-problem h3 {
    margin: 0 0 9px;

    font-size: 1.1rem;
}

.sj-about-problem p {
    margin: 0;

    color: var(--sj-slate);

    font-size: .87rem;

    line-height: 1.7;
}

.sj-about-problem__solution {
    display: flex;
    flex-direction: column;

    gap: 3px;

    margin-top: 22px;
    padding-top: 14px;

    border-top: 1px solid var(--sj-line);
}

.sj-about-problem__solution span {
    font-family: 'JetBrains Mono', monospace;

    font-size: .61rem;

    text-transform: uppercase;
    letter-spacing: .1em;

    color: var(--sj-gold);
}

.sj-about-problem__solution strong {
    color: var(--sj-navy);

    font-size: .79rem;
}


/* =========================================================
   STORY
========================================================= */

.sj-about-story {
    padding: 90px 0;

    background: var(--sj-white);
}

.sj-about-story__grid {
    display: grid;

    grid-template-columns: minmax(0, 1.25fr) minmax(320px, .75fr);

    gap: 80px;

    align-items: stretch;
}

.sj-about-story__content h2 {
    max-width: 680px;

    margin: 13px 0 28px;

    font-size: clamp(2rem, 4vw, 3rem);

    letter-spacing: -.025em;
}

.sj-about-story__body {
    max-width: 690px;

    border-left: 2px solid var(--sj-gold);

    padding-left: 24px;
}

.sj-about-story__body p {
    margin: 0 0 18px;

    color: var(--sj-slate);

    font-size: .96rem;

    line-height: 1.85;
}

.sj-about-story__body p:last-child {
    margin-bottom: 0;
}


/* Story card */

.sj-about-story__card {
    display: flex;
    flex-direction: column;

    min-height: 430px;

    overflow: hidden;

    border-radius: var(--sj-radius);

    background: var(--sj-navy);

    color: var(--sj-white);

    box-shadow: 0 20px 45px rgba(6,20,49,.13);
}

.sj-about-story__card-top {
    display: flex;

    justify-content: space-between;
    align-items: center;

    padding: 21px 23px;

    border-bottom: 1px solid rgba(255,255,255,.1);
}

.sj-about-story__card-label {
    font-family: 'Space Grotesk', sans-serif;

    font-size: .76rem;
    font-weight: 700;

    letter-spacing: .08em;
}

.sj-about-story__card-status {
    display: flex;
    align-items: center;
    gap: 7px;

    font-family: 'JetBrains Mono', monospace;

    font-size: .56rem;
    letter-spacing: .08em;

    color: rgba(255,255,255,.55);
}

.sj-about-story__card-status span {
    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: #42C878;
}

.sj-about-story__card-main {
    flex: 1;

    display: flex;
    flex-direction: column;
    justify-content: center;

    padding: 35px 28px;

    background:
        radial-gradient(
            circle at 80% 20%,
            rgba(232,160,32,.12),
            transparent 40%
        );
}

.sj-about-story__card-eyebrow {
    margin: 0 0 12px;

    font-family: 'JetBrains Mono', monospace;

    font-size: .62rem;

    text-transform: uppercase;
    letter-spacing: .13em;

    color: var(--sj-gold-light);
}

.sj-about-story__card-main h3 {
    margin: 0;

    color: var(--sj-white);

    font-size: 1.8rem;

    line-height: 1.2;

    letter-spacing: -.025em;
}

.sj-about-story__card-bottom {
    display: grid;

    grid-template-columns: 1fr 1fr;

    border-top: 1px solid rgba(255,255,255,.1);
}

.sj-about-story__card-bottom div {
    padding: 20px 23px;
}

.sj-about-story__card-bottom div + div {
    border-left: 1px solid rgba(255,255,255,.1);
}

.sj-about-story__card-bottom span {
    display: block;

    margin-bottom: 4px;

    font-family: 'JetBrains Mono', monospace;

    font-size: .58rem;

    letter-spacing: .1em;

    color: rgba(255,255,255,.45);
}

.sj-about-story__card-bottom strong {
    font-size: .8rem;

    color: rgba(255,255,255,.85);
}


/* =========================================================
   EXPECTATIONS
========================================================= */

.sj-about-expectations {
    padding: 90px 0;

    background: var(--sj-off-white);
}

.sj-about-section-heading--center {
    display: block;

    max-width: 760px;

    margin: 0 auto 50px;

    text-align: center;
}

.sj-about-section-heading--center h2 {
    margin-inline: auto;
}

.sj-about-section-heading--center > p:last-child {
    max-width: 650px;

    margin: 15px auto 0;
}

.sj-about-expectations__grid {
    display: grid;

    grid-template-columns: repeat(4, 1fr);

    gap: 1px;

    overflow: hidden;

    border: 1px solid var(--sj-line);
    border-radius: var(--sj-radius);

    background: var(--sj-line);
}

.sj-about-expectation {
    min-height: 260px;

    padding: 28px 24px;

    background: var(--sj-white);
}

.sj-about-expectation__icon {
    width: 43px;
    height: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    margin-bottom: 22px;

    border: 1px solid rgba(232,160,32,.35);
    border-radius: 50%;

    color: var(--sj-gold);
}

.sj-about-expectation__icon svg {
    width: 20px;
    height: 20px;
}

.sj-about-expectation h3 {
    margin: 0 0 9px;

    font-size: 1rem;
}

.sj-about-expectation p {
    margin: 0;

    color: var(--sj-slate);

    font-size: .85rem;

    line-height: 1.75;
}


/* =========================================================
   COVERAGE
========================================================= */

.sj-about-coverage {
    padding: 90px 0;

    background:
        linear-gradient(
            135deg,
            var(--sj-navy-deep),
            var(--sj-navy)
        );

    color: var(--sj-white);
}

.sj-about-coverage__header {
    display: grid;

    grid-template-columns: minmax(0, 1fr) minmax(280px, .65fr);

    gap: 60px;

    align-items: end;

    margin-bottom: 42px;
}

.sj-about-coverage__eyebrow {
    margin: 0 0 12px;

    font-family: 'JetBrains Mono', monospace;

    font-size: .68rem;
    font-weight: 600;

    letter-spacing: .15em;

    color: var(--sj-gold-light);
}

.sj-about-coverage h2 {
    max-width: 680px;

    margin: 0;

    color: var(--sj-white);

    font-size: clamp(2rem, 4vw, 3rem);

    letter-spacing: -.025em;
}

.sj-about-coverage__header > p {
    margin: 0;

    color: rgba(255,255,255,.62);

    font-size: .92rem;

    line-height: 1.8;
}

.sj-about-coverage__grid {
    display: grid;

    grid-template-columns: repeat(3, 1fr);

    gap: 12px;
}

.sj-about-coverage__card {
    position: relative;

    min-height: 220px;

    display: flex;
    flex-direction: column;

    justify-content: space-between;

    padding: 25px;

    overflow: hidden;

    border: 1px solid rgba(255,255,255,.1);
    border-radius: var(--sj-radius);

    background: rgba(255,255,255,.035);
}

.sj-about-coverage__card--featured {
    background:
        linear-gradient(
            135deg,
            rgba(232,160,32,.12),
            rgba(255,255,255,.035)
        );

    border-color: rgba(232,160,32,.35);
}

.sj-about-coverage__code {
    font-family: 'Space Grotesk', sans-serif;

    font-size: 2rem;
    font-weight: 700;

    color: var(--sj-gold-light);
}

.sj-about-coverage__card span {
    display: block;

    margin-bottom: 5px;

    font-family: 'JetBrains Mono', monospace;

    font-size: .58rem;

    letter-spacing: .12em;

    color: rgba(255,255,255,.45);
}

.sj-about-coverage__card h3 {
    margin: 0 0 4px;

    color: var(--sj-white);

    font-size: 1.25rem;
}

.sj-about-coverage__card p {
    margin: 0;

    color: rgba(255,255,255,.62);

    font-size: .8rem;
}

.sj-about-coverage__arrow {
    position: absolute;

    right: 23px;
    top: 23px;

    color: rgba(255,255,255,.35);

    font-size: 1.2rem;
}


/* =========================================================
   CTA
========================================================= */

.sj-about-cta {
    padding: 0;

    background: var(--sj-white);
}

.sj-about-cta__inner {
    display: grid;

    grid-template-columns: minmax(0, 1fr) auto;

    gap: 50px;

    align-items: center;

    padding: 70px 0;
}

.sj-about-cta__inner h2 {
    max-width: 750px;

    margin: 10px 0 13px;

    font-size: clamp(1.9rem, 4vw, 2.8rem);

    letter-spacing: -.025em;
}

.sj-about-cta__inner > div > p:last-child {
    max-width: 650px;

    margin: 0;

    color: var(--sj-slate);

    font-size: .92rem;
}

.sj-about-cta__button {
    display: inline-flex;
    align-items: center;

    gap: 10px;

    padding: 15px 20px;

    border-radius: var(--sj-radius);

    background: var(--sj-gold);

    color: var(--sj-navy-deep);

    font-size: .85rem;
    font-weight: 700;

    white-space: nowrap;

    transition:
        transform .2s ease,
        background .2s ease;
}

.sj-about-cta__button:hover {
    background: var(--sj-gold-light);

    transform: translateY(-2px);
}

.sj-about-cta__button svg {
    width: 17px;
    height: 17px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 1000px) {

    .sj-about-hero > .sj-container {
        grid-template-columns: 1fr 1fr;

        gap: 35px;
    }

    .sj-about-problem-grid {
        grid-template-columns: 1fr;
    }

    .sj-about-problem,
    .sj-about-problem + .sj-about-problem,
    .sj-about-problem:last-child {
        padding: 25px 0;

        border-left: 0;
    }

    .sj-about-problem + .sj-about-problem {
        border-top: 1px solid var(--sj-line);
    }

    .sj-about-expectations__grid {
        grid-template-columns: repeat(2, 1fr);
    }

}


@media (max-width: 800px) {

    .sj-about-hero {
        padding: 65px 0;
    }

    .sj-about-hero > .sj-container {
        grid-template-columns: 1fr;
    }

    .sj-about-hero__visual-image {
        min-height: 340px;
    }

    .sj-about-section-heading,
    .sj-about-story__grid,
    .sj-about-coverage__header {
        grid-template-columns: 1fr;

        gap: 25px;
    }

    .sj-about-story__grid {
        gap: 45px;
    }

    .sj-about-coverage__grid {
        grid-template-columns: 1fr;
    }

    .sj-about-cta__inner {
        grid-template-columns: 1fr;

        gap: 30px;
    }

}


@media (max-width: 600px) {

    .sj-about-positioning,
    .sj-about-story,
    .sj-about-expectations,
    .sj-about-coverage {
        padding: 65px 0;
    }

    .sj-about-hero h1 {
        font-size: 2.5rem;
    }

    .sj-about-hero__intro {
        font-size: .94rem;
    }

    .sj-about-expectations__grid {
        grid-template-columns: 1fr;
    }

    .sj-about-expectation {
        min-height: auto;
    }

    .sj-about-story__card {
        min-height: 380px;
    }

    .sj-about-cta__inner {
        padding: 55px 0;
    }

    .sj-about-cta__button {
        width: 100%;

        justify-content: center;
    }

}

</style>

@endpush