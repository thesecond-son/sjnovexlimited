<!DOCTYPE html>
<html lang="en">
<head>

    @include('partials.seo', ['page' => $page])

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        /* =========================================================
           SJ NOVEX — GLOBAL DESIGN SYSTEM
           ========================================================= */

        :root {
            --sj-navy: #0A2050;
            --sj-navy-deep: #061431;
            --sj-blue: #0074C2;

            --sj-gold: #E8A020;
            --sj-gold-light: #F2BB55;

            --sj-white: #FFFFFF;
            --sj-off-white: #F6F4EF;

            --sj-ink: #1C2430;
            --sj-slate: #5A6472;
            --sj-line: #DDD8CC;

            --sj-radius: 6px;
            --sj-container: 1180px;
        }


        /* =========================================================
           GLOBAL RESET
           ========================================================= */

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;

            font-family:
                'Inter',
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            color: var(--sj-ink);
            background: var(--sj-white);

            line-height: 1.6;

            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button,
        input,
        textarea,
        select {
            font: inherit;
        }

        main {
            display: block;
            min-height: 50vh;
        }


        /* =========================================================
           GLOBAL CONTAINER
           ========================================================= */

        .sj-container {
            width: min(
                calc(100% - 40px),
                var(--sj-container)
            );

            margin-inline: auto;
        }


        /* =========================================================
           GLOBAL EYEBROW
           ========================================================= */

        .sj-eyebrow {
            font-family: 'JetBrains Mono', monospace;

            font-size: .72rem;
            font-weight: 600;

            text-transform: uppercase;
            letter-spacing: .14em;

            color: var(--sj-gold);
        }


        /* =========================================================
           SITE HEADER
           ========================================================= */

        .site-header {
            position: sticky;
            top: 0;

            z-index: 1000;

            width: 100%;

            background: var(--sj-navy);

            border-bottom:
                1px solid
                rgba(232, 160, 32, 0.35);

            box-shadow:
                0 2px 12px rgba(6, 20, 49, 0.08);
        }

        .site-header__inner {
            width: min(
                calc(100% - 40px),
                var(--sj-container)
            );

            min-height: 72px;

            margin-inline: auto;

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 24px;
        }


        /* ---------- Brand ---------- */

        .site-header__brand {
            display: flex;
            align-items: center;

            gap: 12px;

            min-width: 0;
        }

        .site-header__logo-link {
            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;
        }

        .site-header__logo {
            width: 44px;
            height: 44px;

            object-fit: contain;
        }

        .site-header__logo-placeholder {
            width: 44px;
            height: 44px;

            border:
                1.5px dashed
                rgba(242, 187, 85, 0.55);

            border-radius: var(--sj-radius);

            display: flex;
            align-items: center;
            justify-content: center;

            background: rgba(255,255,255,0.03);
        }

        .site-header__logo-placeholder span {
            font-family: 'JetBrains Mono', monospace;

            font-size: .5rem;
            line-height: 1.2;

            text-align: center;

            color: rgba(242, 187, 85, .7);

            letter-spacing: .03em;
        }


        /* ---------- Brand Name ---------- */

        .site-header__brand-name {
            font-family: 'Space Grotesk', sans-serif;

            font-weight: 700;
            font-size: 1.05rem;

            color: var(--sj-white);

            letter-spacing: .01em;

            line-height: 1.15;
        }

        .site-header__brand-name small {
            display: block;

            margin-top: 3px;

            font-family: 'JetBrains Mono', monospace;

            font-weight: 500;
            font-size: .6rem;

            color: var(--sj-gold-light);

            letter-spacing: .14em;
        }


        /* =========================================================
           NAVIGATION
           ========================================================= */

        .site-header__nav {
            display: none;

            align-items: center;

            gap: 32px;

            margin-left: auto;
        }

        .site-header__nav a {
            position: relative;

            padding: 25px 0;

            font-size: .88rem;
            font-weight: 500;

            color: rgba(255,255,255,.78);

            transition:
                color .2s ease;
        }

        .site-header__nav a:hover {
            color: var(--sj-gold-light);
        }

        .site-header__nav a.is-active {
            color: var(--sj-white);
        }

        .site-header__nav a.is-active::after {
            content: "";

            position: absolute;

            left: 0;
            right: 0;

            bottom: 16px;

            height: 2px;

            background: var(--sj-gold);

            border-radius: 999px;
        }


        /* =========================================================
           HEADER WHATSAPP CTA
           ========================================================= */

        .site-header__cta {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 8px;

            padding: 10px 16px;

            border-radius: var(--sj-radius);

            background: var(--sj-gold);

            color: var(--sj-navy-deep);

            font-size: .82rem;
            font-weight: 600;

            white-space: nowrap;

            transition:
                background .2s ease,
                transform .2s ease;
        }

        .site-header__cta:hover {
            background: var(--sj-gold-light);

            transform: translateY(-1px);
        }

        .site-header__cta svg {
            width: 16px;
            height: 16px;

            flex-shrink: 0;
        }

        .site-header__cta-short {
            display: none;
        }


        /* =========================================================
           HEADER RESPONSIVE
           ========================================================= */

        @media (min-width: 860px) {

            .site-header__nav {
                display: flex;
            }

        }

        @media (max-width: 859px) {

            .site-header__cta-long {
                display: none;
            }

            .site-header__cta-short {
                display: inline;
            }

        }

        @media (max-width: 520px) {

            .site-header__inner {
                width: calc(100% - 28px);

                min-height: 64px;

                gap: 12px;
            }

            .site-header__brand-name {
                font-size: .9rem;
            }

            .site-header__brand-name small {
                font-size: .5rem;
            }

            .site-header__logo,
            .site-header__logo-placeholder {
                width: 40px;
                height: 40px;
            }

            .site-header__cta {
                padding: 9px 11px;

                font-size: .74rem;
            }

        }


        /* =========================================================
           SITE FOOTER
           ========================================================= */

        .site-footer {
            background: var(--sj-navy-deep);

            color: rgba(255,255,255,.62);

            padding: 56px 0 28px;

            font-size: .85rem;

            margin-top: 0;
        }

        .site-footer__container {
            width: min(
                calc(100% - 40px),
                var(--sj-container)
            );

            margin-inline: auto;
        }


        /* ---------- Footer Grid ---------- */

        .site-footer__grid {
            display: grid;

            grid-template-columns: 1fr;

            gap: 32px;

            margin-bottom: 36px;
        }

        .site-footer__column {
            min-width: 0;
        }

        .site-footer__heading {
            display: block;

            margin-bottom: 10px;

            color: var(--sj-white);

            font-family: 'Space Grotesk', sans-serif;

            font-size: .95rem;
            font-weight: 600;
        }

        .site-footer__column p {
            margin: 0 0 6px;

            color: rgba(255,255,255,.58);

            line-height: 1.7;
        }


        /* ---------- Footer Socials ---------- */

        .site-footer__socials {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-top: 12px;
        }

        .site-footer__socials a {
            width: 36px;
            height: 36px;

            display: flex;
            align-items: center;
            justify-content: center;

            border:
                1px solid
                rgba(255,255,255,.18);

            border-radius: 50%;

            color: rgba(255,255,255,.7);

            transition:
                color .2s ease,
                border-color .2s ease,
                transform .2s ease;
        }

        .site-footer__socials a:hover {
            color: var(--sj-gold-light);

            border-color: var(--sj-gold-light);

            transform: translateY(-2px);
        }

        .site-footer__socials svg {
            width: 16px;
            height: 16px;
        }


        /* =========================================================
           FOOTER BOTTOM
           ========================================================= */

        .site-footer__bottom {
            border-top:
                1px solid
                rgba(255,255,255,.1);

            padding-top: 22px;

            display: flex;

            flex-wrap: wrap;

            align-items: center;
            justify-content: space-between;

            gap: 20px;

            font-size: .76rem;
        }

        .site-footer__signature {
            display: flex;

            flex-direction: column;

            align-items: flex-end;

            gap: 7px;
        }

        .site-footer__signature-divider {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .site-footer__signature-divider span {
            width: 24px;
            height: 1px;

            background:
                rgba(255,255,255,.18);
        }

        .site-footer__signature-divider small {
            font-size: .58rem;

            text-transform: uppercase;

            letter-spacing: .2em;

            color:
                rgba(255,255,255,.4);

            white-space: nowrap;
        }

        .site-footer__signature p {
            margin: 0;
        }

        .site-footer__impactdev {
            margin-left: 4px;

            font-family:
                'Cormorant Garamond',
                Georgia,
                serif;

            font-size: 1rem;

            color: var(--sj-white);

            letter-spacing: .02em;
        }


        /* ---------- Footer Responsive ---------- */

        @media (min-width: 700px) {

            .site-footer__grid {
                grid-template-columns:
                    1.3fr
                    1.2fr
                    1fr
                    .8fr;
            }

        }

        @media (max-width: 700px) {

            .site-footer__bottom {
                flex-direction: column;

                text-align: center;
            }

            .site-footer__signature {
                align-items: center;
            }

        }


        /* =========================================================
           FLOATING WHATSAPP
           ========================================================= */

        .site-whatsapp {
            position: fixed;

            right: 18px;
            bottom: 18px;

            z-index: 2000;

            width: 56px;
            height: 56px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background: #1DA851;

            color: var(--sj-white);

            box-shadow:
                0 8px 24px rgba(0,0,0,.25);

            transition:
                transform .2s ease,
                box-shadow .2s ease;
        }

        .site-whatsapp:hover {
            transform: translateY(-3px);

            box-shadow:
                0 12px 30px rgba(0,0,0,.3);
        }

        .site-whatsapp svg {
            width: 28px;
            height: 28px;
        }

        @media (max-width: 520px) {

            .site-whatsapp {
                right: 14px;
                bottom: 14px;

                width: 52px;
                height: 52px;
            }

            .site-whatsapp svg {
                width: 26px;
                height: 26px;
            }

        }


        /* =========================================================
           MOBILE CONTAINER
           ========================================================= */

        @media (max-width: 640px) {

            .sj-container {
                width: calc(100% - 28px);
            }

            .site-footer__container {
                width: calc(100% - 28px);
            }

        }

    </style>

    @stack('head')

</head>


<body>

    {{-- =========================================================
         HEADER
         ========================================================= --}}

    @include('partials.header', [
        'settings' => $settings
    ])


    {{-- =========================================================
         PAGE CONTENT
         ========================================================= --}}

    <main>
        @yield('content')
    </main>


    {{-- =========================================================
         FOOTER
         ========================================================= --}}

    @include('partials.footer', [
        'settings' => $settings
    ])


    {{-- =========================================================
         FLOATING WHATSAPP
         ========================================================= --}}

    @include('partials.whatsapp-float', [
        'settings' => $settings
    ])


    {{-- =========================================================
         SCHEMA
         ========================================================= --}}

    @include('partials.schema', [
        'settings' => $settings
    ])


    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "LocalBusiness",
        "name": "{{ $settings->business_name }}",
        "image": "{{ $settings->logo_path ? asset('storage/'.$settings->logo_path) : '' }}",
        "telephone": "{{ $settings->phone }}",
        "email": "{{ $settings->email }}",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "{{ $settings->address }}",
            "addressCountry": "NG"
        },
        "areaServed": "{{ $settings->service_area }}",
        "sameAs": [
            "{{ $settings->facebook_url }}",
            "{{ $settings->instagram_url }}",
            "{{ $settings->tiktok_url_business }}"
        ]
    }
    </script>


    @stack('scripts')

</body>
</html>