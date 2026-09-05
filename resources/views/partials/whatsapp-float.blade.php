<a
    class="site-whatsapp"
    href="https://wa.me/{{ $settings->whatsapp_number }}?text={{ urlencode($settings->whatsapp_default_message) }}"
    target="_blank"
    rel="noopener"
    aria-label="Chat with {{ $settings->business_name }} on WhatsApp"
>

    <i class="bi bi-whatsapp" aria-hidden="true" style="font-size: 28px; line-height: 1;"></i>

</a>