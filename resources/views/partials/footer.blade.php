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
                            <i class="bi bi-facebook" aria-hidden="true" style="font-size: 1.2rem;"></i>
                        </a>
                    @endif


                    @if($settings->instagram_url)
                        <a
                            href="{{ $settings->instagram_url }}"
                            target="_blank"
                            rel="noopener"
                            aria-label="Instagram"
                        >
                            <i class="bi bi-instagram" aria-hidden="true" style="font-size: 1.2rem;"></i>
                        </a>
                    @endif


                    @if($settings->tiktok_url_business)
                        <a
                            href="{{ $settings->tiktok_url_business }}"
                            target="_blank"
                            rel="noopener"
                            aria-label="Business TikTok"
                        >
                            <i class="bi bi-tiktok" aria-hidden="true" style="font-size: 1.2rem;"></i>
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