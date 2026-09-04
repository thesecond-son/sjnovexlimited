<footer class="site-footer">

    <div class="site-footer__container">

        <div class="site-footer__grid">

            {{-- Company --}}
            <div class="site-footer__column">

                <strong class="site-footer__heading">
                    {{ $settings->business_name }}
                </strong>

                <p>
                    Reliable logistics, courier and supply services
                    for individuals, businesses and organisations.
                </p>

            </div>


            {{-- Address --}}
            <div class="site-footer__column">

                <strong class="site-footer__heading">
                    Service Area
                </strong>

                @if($settings->address)
                    <p>
                        {{ $settings->address }}
                    </p>
                @endif

                @if($settings->service_area)
                    <p>
                        Serving {{ $settings->service_area }}
                    </p>
                @endif

            </div>


            {{-- Contact --}}
            <div class="site-footer__column">

                <strong class="site-footer__heading">
                    Contact
                </strong>

                @if($settings->phone)
                    <p>
                        {{ $settings->phone }}
                    </p>
                @endif

                @if($settings->email)
                    <p>
                        {{ $settings->email }}
                    </p>
                @endif

            </div>


            {{-- Social --}}
            <div class="site-footer__column">

                <strong class="site-footer__heading">
                    Follow Us
                </strong>

                <div class="site-footer__socials">

                    @if($settings->facebook_url)
                        <a
                            href="{{ $settings->facebook_url }}"
                            target="_blank"
                            rel="noopener"
                            aria-label="Facebook"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path d="M22 12a10 10 0 1 0-11.56 9.88v-6.99H7.9V12h2.54V9.8c0-2.5 1.49-3.89 3.78-3.89 1.1 0 2.24.2 2.24.2v2.46h-1.26c-1.24 0-1.63.77-1.63 1.56V12h2.78l-.44 2.89h-2.34v6.99A10 10 0 0 0 22 12z"/>
                            </svg>
                        </a>
                    @endif


                    @if($settings->instagram_url)
                        <a
                            href="{{ $settings->instagram_url }}"
                            target="_blank"
                            rel="noopener"
                            aria-label="Instagram"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true"
                            >
                                <rect
                                    x="3"
                                    y="3"
                                    width="18"
                                    height="18"
                                    rx="5"
                                />

                                <circle
                                    cx="12"
                                    cy="12"
                                    r="4"
                                />

                                <circle
                                    cx="17.2"
                                    cy="6.8"
                                    r="1.1"
                                    fill="currentColor"
                                    stroke="none"
                                />
                            </svg>
                        </a>
                    @endif


                    @if($settings->tiktok_url_business)
                        <a
                            href="{{ $settings->tiktok_url_business }}"
                            target="_blank"
                            rel="noopener"
                            aria-label="Business TikTok"
                        >
                            <svg
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path d="M16.5 3c.4 2.2 1.9 3.9 4 4.2v2.9c-1.5 0-2.9-.5-4-1.3v6.4a5.6 5.6 0 1 1-5.6-5.6c.2 0 .4 0 .6.03v2.9a2.7 2.7 0 1 0 1.9 2.6V3h3.1z"/>
                            </svg>
                        </a>
                    @endif

                </div>

            </div>

        </div>


        {{-- Footer bottom --}}
        <div class="site-footer__bottom">

            <span>
                &copy; {{ now()->year }}
                {{ $settings->business_name }}.
                All rights reserved.
            </span>


            <div class="site-footer__signature">

                <div class="site-footer__signature-divider">

                    <span></span>

                    <small>
                        Website by
                    </small>

                    <span></span>

                </div>

                <p>
                    <span class="site-footer__impactdev">
                        ImpactDev
                    </span>
                </p>

            </div>

        </div>

    </div>

</footer>