<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "LocalBusiness",
  "name": {!! json_encode($settings->business_name) !!},
  @if($settings->logo_path)
  "image": {!!  asset('images/logo.png') !!},
  @endif
  "telephone": {!! json_encode($settings->phone) !!},
  "email": {!! json_encode($settings->email) !!},
  "address": {
    "@type": "PostalAddress",
    "addressLocality": {!! json_encode($settings->address) !!},
    "addressCountry": "NG"
  },
  "areaServed": {!! json_encode($settings->service_area) !!},
  "url": {!! json_encode(url('/')) !!},
  "sameAs": {!! json_encode(array_values(array_filter([
      $settings->facebook_url,
      $settings->instagram_url,
      $settings->tiktok_url_business,
      $settings->tiktok_url_personal,
  ]))) !!}
}
</script>