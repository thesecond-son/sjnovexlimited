@extends('layouts.app')

@section('content')

<style>
    /* =========================================================
       SJ NOVEX — CONTACT PAGE
       Everything is scoped to .sj-contact-page
       ========================================================= */

    .sj-contact-page {
        background: var(--sj-off-white);
        color: var(--sj-ink);
    }

    .sj-contact-page *,
    .sj-contact-page *::before,
    .sj-contact-page *::after {
        box-sizing: border-box;
    }

    /* =========================================================
       HERO
       ========================================================= */

    .sj-contact-hero {
        position: relative;
        overflow: hidden;

        background:
            radial-gradient(
                circle at 85% 20%,
                rgba(232, 160, 32, .16),
                transparent 35%
            ),
            linear-gradient(
                135deg,
                var(--sj-navy-deep),
                var(--sj-navy)
            );

        padding: 78px 0 86px;

        color: var(--sj-white);
    }

    .sj-contact-hero::before {
        content: '';

        position: absolute;
        width: 430px;
        height: 430px;

        right: -180px;
        top: -240px;

        border: 1px solid rgba(255,255,255,.08);
        border-radius: 50%;
    }

    .sj-contact-hero::after {
        content: '';

        position: absolute;
        width: 300px;
        height: 300px;

        right: -110px;
        bottom: -190px;

        border: 1px solid rgba(232,160,32,.13);
        border-radius: 50%;
    }

    .sj-contact-hero__inner {
        position: relative;
        z-index: 2;

        width: min(100% - 40px, var(--sj-container));
        margin: 0 auto;
    }

    .sj-contact-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;

        font-family: 'JetBrains Mono', monospace;
        font-size: .7rem;
        font-weight: 600;

        text-transform: uppercase;
        letter-spacing: .14em;

        color: var(--sj-gold-light);
    }

    .sj-contact-eyebrow::before {
        content: '';

        width: 28px;
        height: 1px;

        background: var(--sj-gold);
    }

    .sj-contact-hero h1 {
        max-width: 780px;

        margin: 16px 0 18px;

        color: var(--sj-white);

        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(2.25rem, 6vw, 4rem);
        font-weight: 700;

        line-height: 1.04;
        letter-spacing: -.035em;
    }

    .sj-contact-hero h1 span {
        color: var(--sj-gold-light);
    }

    .sj-contact-hero__intro {
        max-width: 650px;

        margin: 0;

        color: rgba(255,255,255,.72);

        font-size: 1rem;
        line-height: 1.8;
    }

    .sj-contact-hero__note {
        display: flex;
        align-items: center;
        gap: 10px;

        margin-top: 28px;

        color: rgba(255,255,255,.58);

        font-family: 'JetBrains Mono', monospace;
        font-size: .67rem;
        letter-spacing: .04em;
    }

    .sj-contact-hero__dot {
        width: 7px;
        height: 7px;

        flex-shrink: 0;

        border-radius: 50%;

        background: var(--sj-gold);

        box-shadow:
            0 0 0 5px rgba(232,160,32,.1);
    }


    /* =========================================================
       MAIN CONTACT AREA
       ========================================================= */

    .sj-contact-main {
        padding: 72px 0 86px;
    }

    .sj-contact-container {
        width: min(100% - 40px, var(--sj-container));
        margin: 0 auto;
    }

    .sj-contact-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 26px;

        align-items: stretch;
    }


    /* =========================================================
       CONTACT CARD
       ========================================================= */

    .sj-contact-card {
        position: relative;

        background: var(--sj-white);

        border: 1px solid var(--sj-line);
        border-radius: var(--sj-radius);

        padding: 32px;

        overflow: hidden;

        box-shadow:
            0 12px 35px rgba(6,20,49,.045);
    }

    .sj-contact-card::before {
        content: '';

        position: absolute;

        top: 0;
        left: 0;

        width: 100%;
        height: 3px;

        background: linear-gradient(
            90deg,
            var(--sj-gold),
            var(--sj-gold-light)
        );
    }

    .sj-contact-card--dark {
        background:
            linear-gradient(
                145deg,
                var(--sj-navy-deep),
                var(--sj-navy)
            );

        border-color: rgba(255,255,255,.08);

        color: var(--sj-white);
    }

    .sj-contact-card--dark::before {
        background: var(--sj-gold);
    }


    /* =========================================================
       CARD HEADER
       ========================================================= */

    .sj-contact-card__label {
        margin-bottom: 9px;

        color: var(--sj-gold);

        font-family: 'JetBrains Mono', monospace;
        font-size: .68rem;
        font-weight: 600;

        text-transform: uppercase;
        letter-spacing: .13em;
    }

    .sj-contact-card--dark .sj-contact-card__label {
        color: var(--sj-gold-light);
    }

    .sj-contact-card h2 {
        margin: 0 0 11px;

        color: var(--sj-navy);

        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(1.45rem, 3vw, 1.9rem);
        line-height: 1.15;
    }

    .sj-contact-card--dark h2 {
        color: var(--sj-white);
    }

    .sj-contact-card__intro {
        margin: 0 0 30px;

        color: var(--sj-slate);

        font-size: .92rem;
        line-height: 1.75;
    }

    .sj-contact-card--dark .sj-contact-card__intro {
        color: rgba(255,255,255,.67);
    }


    /* =========================================================
       WHATSAPP CTA
       ========================================================= */

    .sj-contact-whatsapp {
        display: flex;
        align-items: center;
        gap: 15px;

        width: 100%;

        padding: 17px 18px;

        border-radius: var(--sj-radius);

        background: var(--sj-gold);

        color: var(--sj-navy-deep);

        font-size: .9rem;
        font-weight: 700;

        transition:
            transform .2s ease,
            background .2s ease,
            box-shadow .2s ease;
    }

    .sj-contact-whatsapp:hover {
        background: var(--sj-gold-light);

        transform: translateY(-2px);

        box-shadow:
            0 10px 24px rgba(232,160,32,.2);
    }

    .sj-contact-whatsapp__icon {
        width: 42px;
        height: 42px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: rgba(6,20,49,.12);
    }

    .sj-contact-whatsapp svg {
        width: 22px;
        height: 22px;
    }

    .sj-contact-whatsapp__text {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .sj-contact-whatsapp__text strong {
        font-size: .92rem;
    }

    .sj-contact-whatsapp__text small {
        font-size: .7rem;
        font-weight: 500;
        opacity: .72;
    }


    /* =========================================================
       CONTACT DETAILS
       ========================================================= */

    .sj-contact-details {
        margin-top: 28px;

        padding-top: 24px;

        border-top: 1px solid var(--sj-line);
    }

    .sj-contact-detail {
        display: flex;
        align-items: flex-start;
        gap: 13px;

        margin-bottom: 18px;
    }

    .sj-contact-detail:last-child {
        margin-bottom: 0;
    }

    .sj-contact-detail__icon {
        width: 34px;
        height: 34px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 5px;

        background: rgba(232,160,32,.1);

        color: var(--sj-gold);
    }

    .sj-contact-detail__icon svg {
        width: 17px;
        height: 17px;
    }

    .sj-contact-detail__content {
        min-width: 0;
    }

    .sj-contact-detail__content small {
        display: block;

        margin-bottom: 2px;

        color: var(--sj-slate);

        font-family: 'JetBrains Mono', monospace;
        font-size: .61rem;

        text-transform: uppercase;
        letter-spacing: .08em;
    }

    .sj-contact-detail__content span,
    .sj-contact-detail__content a {
        color: var(--sj-navy);

        font-size: .88rem;
        line-height: 1.5;

        overflow-wrap: anywhere;
    }

    .sj-contact-detail__content a:hover {
        color: var(--sj-blue);
    }


    /* =========================================================
       SOCIALS
       ========================================================= */

    .sj-contact-socials {
        margin-top: 28px;

        padding-top: 22px;

        border-top: 1px solid var(--sj-line);
    }

    .sj-contact-socials__label {
        display: block;

        margin-bottom: 12px;

        color: var(--sj-slate);

        font-family: 'JetBrains Mono', monospace;
        font-size: .63rem;

        text-transform: uppercase;
        letter-spacing: .1em;
    }

    .sj-contact-socials__links {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .sj-contact-social {
        padding: 7px 11px;

        border: 1px solid var(--sj-line);
        border-radius: 4px;

        color: var(--sj-navy);

        font-size: .75rem;
        font-weight: 600;

        transition:
            border-color .2s ease,
            color .2s ease,
            background .2s ease;
    }

    .sj-contact-social:hover {
        border-color: var(--sj-gold);

        background: rgba(232,160,32,.06);

        color: var(--sj-navy);
    }


    /* =========================================================
       BUSINESS INFORMATION CARD
       ========================================================= */

    .sj-contact-business {
        display: grid;
        gap: 22px;

        margin-top: 28px;
    }

    .sj-contact-business__item {
        display: flex;
        align-items: flex-start;
        gap: 15px;

        padding-bottom: 22px;

        border-bottom: 1px solid rgba(255,255,255,.1);
    }

    .sj-contact-business__item:last-child {
        padding-bottom: 0;

        border-bottom: 0;
    }

    .sj-contact-business__number {
        width: 38px;
        height: 38px;

        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border: 1px solid rgba(232,160,32,.35);
        border-radius: 50%;

        color: var(--sj-gold-light);

        font-family: 'JetBrains Mono', monospace;
        font-size: .68rem;
        font-weight: 600;
    }

    .sj-contact-business__content strong {
        display: block;

        margin-bottom: 4px;

        color: var(--sj-white);

        font-family: 'Space Grotesk', sans-serif;
        font-size: .95rem;
    }

    .sj-contact-business__content p {
        margin: 0;

        color: rgba(255,255,255,.61);

        font-size: .82rem;
        line-height: 1.65;
    }


    /* =========================================================
       QUOTE STRIP
       ========================================================= */

    .sj-contact-quote {
        margin-top: 26px;

        padding: 24px 26px;

        display: flex;
        flex-direction: column;
        gap: 18px;

        background: var(--sj-white);

        border: 1px solid var(--sj-line);
        border-left: 3px solid var(--sj-gold);

        border-radius: var(--sj-radius);
    }

    .sj-contact-quote__title {
        margin: 0 0 5px;

        color: var(--sj-navy);

        font-family: 'Space Grotesk', sans-serif;
        font-size: 1rem;
    }

    .sj-contact-quote p {
        margin: 0;

        color: var(--sj-slate);

        font-size: .84rem;
        line-height: 1.65;
    }

    .sj-contact-quote__action {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        width: fit-content;

        padding: 10px 16px;

        border-radius: 4px;

        background: var(--sj-navy);

        color: var(--sj-white);

        font-size: .78rem;
        font-weight: 600;

        transition:
            background .2s ease,
            transform .2s ease;
    }

    .sj-contact-quote__action:hover {
        background: var(--sj-blue);

        transform: translateY(-1px);
    }


    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (min-width: 760px) {

        .sj-contact-hero {
            padding: 92px 0 100px;
        }

        .sj-contact-main {
            padding: 84px 0 100px;
        }

        .sj-contact-grid {
            grid-template-columns: 1.08fr .92fr;
            gap: 30px;
        }

        .sj-contact-card {
            padding: 36px;
        }

        .sj-contact-quote {
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .sj-contact-quote__content {
            max-width: 700px;
        }

    }


    @media (max-width: 520px) {

        .sj-contact-hero {
            padding: 58px 0 66px;
        }

        .sj-contact-hero__inner,
        .sj-contact-container {
            width: min(100% - 28px, var(--sj-container));
        }

        .sj-contact-main {
            padding: 52px 0 70px;
        }

        .sj-contact-card {
            padding: 25px 21px;
        }

        .sj-contact-hero h1 {
            font-size: 2.25rem;
        }

        .sj-contact-whatsapp {
            padding: 14px;
        }

        .sj-contact-whatsapp__icon {
            width: 38px;
            height: 38px;
        }

    }
</style>


<div class="sj-contact-page">

    {{-- =====================================================
         HERO
         ====================================================== --}}

    <section class="sj-contact-hero">

        <div class="sj-contact-hero__inner">

            <div class="sj-contact-eyebrow">
                {{ $page->eyebrow }}
            </div>

            <h1>
                {{ $page->headline }}
            </h1>

            <p class="sj-contact-hero__intro">
                {{ $page->intro }}
            </p>

            <div class="sj-contact-hero__note">
                <span class="sj-contact-hero__dot"></span>
                Fast response • Clear communication • Reliable service
            </div>

        </div>

    </section>


    {{-- =====================================================
         CONTACT CONTENT
         ====================================================== --}}

    <section class="sj-contact-main">

        <div class="sj-contact-container">

            <div class="sj-contact-grid">


                {{-- =================================================
                     LEFT — CONTACT / WHATSAPP
                     ================================================== --}}

                <div class="sj-contact-card">

                    <div class="sj-contact-card__label">
                        Start a conversation
                    </div>

                    <h2>
                        Tell us what you need moved, supplied or handled.
                    </h2>

                    <p class="sj-contact-card__intro">
                        Whether you need a parcel delivered, goods transported,
                        merchandise sourced or support with a trade or contracting
                        requirement, send us the details and we'll help you work out
                        the most practical solution.
                    </p>


                    {{-- WhatsApp CTA --}}

                    <a
                        class="sj-contact-whatsapp"
                        href="https://wa.me/{{ $settings->whatsapp_number }}?text={{ urlencode($settings->whatsapp_default_message) }}"
                        target="_blank"
                        rel="noopener"
                    >

                        <span class="sj-contact-whatsapp__icon">

                            <svg
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.46 1.32 4.96L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2zm0 18.02h-.01a8.1 8.1 0 0 1-4.13-1.13l-.3-.18-3.14.82.84-3.06-.19-.31a8.11 8.11 0 0 1-1.24-4.34c0-4.49 3.65-8.14 8.15-8.14 4.49 0 8.14 3.65 8.14 8.14 0 4.49-3.65 8.2-8.12 8.2zm4.46-6.1c-.24-.12-1.44-.71-1.67-.79-.22-.08-.39-.12-.55.12-.16.24-.63.79-.78.95-.14.16-.28.18-.53.06-.24-.12-1.02-.38-1.95-1.21-.72-.64-1.2-1.44-1.35-1.68-.14-.24-.02-.37.11-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.55-1.32-.75-1.81-.2-.48-.4-.41-.55-.42h-.47c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.7 2.6 4.13 3.64.58.25 1.03.4 1.38.51.58.18 1.11.16 1.53.1.47-.07 1.44-.59 1.64-1.16.2-.57.2-1.06.14-1.16-.06-.1-.22-.16-.46-.28z"/>
                            </svg>

                        </span>

                        <span class="sj-contact-whatsapp__text">

                            <strong>
                                Chat with {{ $settings->business_name }}
                            </strong>

                            <small>
                                Get a quick response and request a quote
                            </small>

                        </span>

                    </a>


                    {{-- Contact details --}}

                    <div class="sj-contact-details">

                        @if($settings->phone)

                            <div class="sj-contact-detail">

                                <div class="sj-contact-detail__icon">

                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a1 1 0 0 0-1.03.24l-1.57 1.97a15.05 15.05 0 0 1-6.91-6.91l1.95-1.66a1 1 0 0 0 .24-1.02 11.4 11.4 0 0 1-.56-3.53 1 1 0 0 0-1-1H4.19a1 1 0 0 0-1 1c0 9.39 7.61 17 17 17a1 1 0 0 0 1-1v-3.5a1 1 0 0 0-1-1z"/>
                                    </svg>

                                </div>

                                <div class="sj-contact-detail__content">

                                    <small>Phone / WhatsApp</small>

                                    <a href="tel:{{ $settings->phone }}">
                                        {{ $settings->phone }}
                                    </a>

                                </div>

                            </div>

                        @endif


                        @if($settings->email)

                            <div class="sj-contact-detail">

                                <div class="sj-contact-detail__icon">

                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <rect
                                            x="2"
                                            y="4"
                                            width="20"
                                            height="16"
                                            rx="2"
                                        />

                                        <path d="m2 7 10 6 10-6"/>
                                    </svg>

                                </div>

                                <div class="sj-contact-detail__content">

                                    <small>Email</small>

                                    <a href="mailto:{{ $settings->email }}">
                                        {{ $settings->email }}
                                    </a>

                                </div>

                            </div>

                        @endif

                    </div>


                    {{-- Social links --}}

                    @if(
                        $settings->facebook_url ||
                        $settings->instagram_url ||
                        $settings->tiktok_url_business ||
                        $settings->tiktok_url_personal
                    )

                        <div class="sj-contact-socials">

                            <span class="sj-contact-socials__label">
                                Connect with us
                            </span>

                            <div class="sj-contact-socials__links">

                                @if($settings->facebook_url)

                                    <a
                                        class="sj-contact-social"
                                        href="{{ $settings->facebook_url }}"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        Facebook
                                    </a>

                                @endif

                                @if($settings->instagram_url)

                                    <a
                                        class="sj-contact-social"
                                        href="{{ $settings->instagram_url }}"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        Instagram
                                    </a>

                                @endif

                                @if($settings->tiktok_url_business)

                                    <a
                                        class="sj-contact-social"
                                        href="{{ $settings->tiktok_url_business }}"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        TikTok
                                    </a>

                                @endif

                                @if($settings->tiktok_url_personal)

                                    <a
                                        class="sj-contact-social"
                                        href="{{ $settings->tiktok_url_personal }}"
                                        target="_blank"
                                        rel="noopener"
                                    >
                                        Personal TikTok
                                    </a>

                                @endif

                            </div>

                        </div>

                    @endif

                </div>


                {{-- =================================================
                     RIGHT — BUSINESS / SERVICE INFORMATION
                     ================================================== --}}

                <div class="sj-contact-card sj-contact-card--dark">

                    <div class="sj-contact-card__label">
                        Before you contact us
                    </div>

                    <h2>
                        Give us the details. We'll work out the route.
                    </h2>

                    <p class="sj-contact-card__intro">
                        The more information you provide, the faster we can
                        understand your requirement and give you an accurate
                        response.
                    </p>


                    <div class="sj-contact-business">

                        <div class="sj-contact-business__item">

                            <div class="sj-contact-business__number">
                                01
                            </div>

                            <div class="sj-contact-business__content">

                                <strong>
                                    What are you moving?
                                </strong>

                                <p>
                                    Tell us what you need transported, delivered,
                                    sourced or supplied.
                                </p>

                            </div>

                        </div>


                        <div class="sj-contact-business__item">

                            <div class="sj-contact-business__number">
                                02
                            </div>

                            <div class="sj-contact-business__content">

                                <strong>
                                    Where is it going?
                                </strong>

                                <p>
                                    Share the pickup location, destination and
                                    any important route information.
                                </p>

                            </div>

                        </div>


                        <div class="sj-contact-business__item">

                            <div class="sj-contact-business__number">
                                03
                            </div>

                            <div class="sj-contact-business__content">

                                <strong>
                                    When do you need it?
                                </strong>

                                <p>
                                    Let us know your preferred pickup, delivery
                                    or completion timeline.
                                </p>

                            </div>

                        </div>


                        <div class="sj-contact-business__item">

                            <div class="sj-contact-business__number">
                                04
                            </div>

                            <div class="sj-contact-business__content">

                                <strong>
                                    Any special requirements?
                                </strong>

                                <p>
                                    Include quantity, size, urgency, handling
                                    requirements or anything else we should know.
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- Location --}}

                    <div class="sj-contact-details">

                        <div class="sj-contact-detail">

                            <div class="sj-contact-detail__icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path d="M20 10c0 6-8 12-8 12S4 16 4 10a8 8 0 1 1 16 0Z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>

                            </div>

                            <div class="sj-contact-detail__content">

                                <small style="color:rgba(255,255,255,.45);">
                                    Based in
                                </small>

                                <span style="color:rgba(255,255,255,.82);">
                                    {{ $settings->address }}
                                </span>

                            </div>

                        </div>


                        <div class="sj-contact-detail">

                            <div class="sj-contact-detail__icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <circle cx="12" cy="12" r="10"/>
                                    <path d="M12 6v6l4 2"/>
                                </svg>

                            </div>

                            <div class="sj-contact-detail__content">

                                <small style="color:rgba(255,255,255,.45);">
                                    Service area
                                </small>

                                <span style="color:rgba(255,255,255,.82);">
                                    {{ $settings->service_area }}
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 QUOTE STRIP
                 ================================================== --}}

            <div class="sj-contact-quote">

                <div class="sj-contact-quote__content">

                    <h3 class="sj-contact-quote__title">
                        Need a quick quote?
                    </h3>

                    <p>
                        Send us the pickup point, destination, item details
                        and preferred timeline on WhatsApp. We'll take it
                        from there.
                    </p>

                </div>

                <a
                    class="sj-contact-quote__action"
                    href="https://wa.me/{{ $settings->whatsapp_number }}?text={{ urlencode($settings->whatsapp_default_message) }}"
                    target="_blank"
                    rel="noopener"
                >
                    Request a quote
                </a>

            </div>

        </div>

    </section>

</div>

@endsection