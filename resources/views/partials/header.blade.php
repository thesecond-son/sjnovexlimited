<header class="site-header">

    <div class="site-header__inner">

        {{-- Brand --}}
        <div class="site-header__brand">

            <a
                href="{{ route('home') }}"
                class="site-header__logo-link"
            >

                @php
                    $logoUrl = $settings->logo_path 
                        ? (\Illuminate\Support\Str::startsWith($settings->logo_path, 'images/') ? asset($settings->logo_path) : asset('storage/' . $settings->logo_path))
                        : (file_exists(public_path('images/logo.png')) ? asset('images/logo.png') : null);
                @endphp

                @if($logoUrl)

                    <img
                        src="{{ $logoUrl }}"
                        alt="{{ $settings->business_name }} logo"
                        class="site-header__logo"
                    >

                @else

                    <div
                        class="site-header__logo-placeholder"
                        aria-label="Logo placeholder"
                    >
                        <span>
                            YOUR<br>LOGO
                        </span>
                    </div>

                @endif

            </a>


            <a
                href="{{ route('home') }}"
                class="site-header__brand-name"
            >

                {{ $settings->business_name }}

                <small>
                    LOGISTICS &amp; SUPPLY
                </small>

            </a>

        </div>


        {{-- Navigation --}}
        <nav
            class="site-header__nav"
            aria-label="Main navigation"
        >

            <a
                href="{{ route('home') }}"
                @class([
                    'is-active' => request()->routeIs('home')
                ])
            >
                Home
            </a>

            <a
                href="{{ route('about') }}"
                @class([
                    'is-active' => request()->routeIs('about')
                ])
            >
                About
            </a>

            <a
                href="{{ route('services') }}"
                @class([
                    'is-active' => request()->routeIs('services')
                ])
            >
                Services
            </a>

            <a
                href="{{ route('contact') }}"
                @class([
                    'is-active' => request()->routeIs('contact')
                ])
            >
                Contact
            </a>

        </nav>


        {{-- WhatsApp CTA --}}
        <a
            class="site-header__cta"
            href="https://wa.me/{{ $settings->whatsapp_number }}?text={{ urlencode($settings->whatsapp_default_message) }}"
            target="_blank"
            rel="noopener"
        >

            <i class="bi bi-whatsapp" aria-hidden="true" style="font-size: 1.1rem;"></i>

            <span class="site-header__cta-long">
                Chat on WhatsApp
            </span>

            <span class="site-header__cta-short">
                WhatsApp
            </span>

        </a>

    </div>

</header>