{{-- resources/views/pages/home.blade.php --}}

@extends('layouts.app')

@section('title', $page->meta_title ?? 'SJ Novex Limited | Logistics, Courier & Supply Services Nigeria')

@section('content')

<style>
/* =========================================================
   SJ NOVEX — HOMEPAGE
   ========================================================= */

:root {
    --novex-navy: #0A2050;
    --novex-navy-deep: #061431;
    --novex-blue: #0074C2;
    --novex-gold: #E8A020;
    --novex-gold-light: #F4C66A;
    --novex-white: #FFFFFF;
    --novex-off-white: #F6F4EF;
    --novex-ink: #182231;
    --novex-slate: #687383;
    --novex-line: #DDD8CC;
    --novex-red: #C24A3B;
    --novex-radius: 6px;
}

.novex-home,
.novex-home * {
    box-sizing: border-box;
}

.novex-home {
    margin: 0;
    padding: 0;
    background: var(--novex-off-white);
    color: var(--novex-ink);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    line-height: 1.65;
    -webkit-font-smoothing: antialiased;
}

.novex-home img {
    display: block;
    max-width: 100%;
}

.novex-home a {
    color: inherit;
    text-decoration: none;
}

.novex-home h1,
.novex-home h2,
.novex-home h3 {
    font-family: 'Space Grotesk', sans-serif;
    color: var(--novex-navy);
    line-height: 1.15;
    margin-top: 0;
}

.novex-container {
    width: 100%;
    max-width: 1120px;
    margin: 0 auto;
    padding: 0 24px;
}

.novex-section {
    padding: 88px 0;
}

.novex-eyebrow {
    font-family: 'JetBrains Mono', monospace;
    font-size: .68rem;
    letter-spacing: .15em;
    text-transform: uppercase;
    color: var(--novex-gold);
    font-weight: 700;
    margin: 0 0 10px;
}

.novex-section-head {
    max-width: 680px;
}

.novex-section-head h2 {
    font-size: clamp(1.8rem, 4vw, 2.6rem);
    margin-bottom: 0;
    letter-spacing: -.025em;
}

.novex-section-head > p:not(.novex-eyebrow) {
    color: var(--novex-slate);
    margin-top: 14px;
    font-size: .98rem;
    max-width: 62ch;
}


/* =========================================================
   BUTTONS
   ========================================================= */

.novex-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 13px 21px;
    border-radius: var(--novex-radius);
    font-weight: 650;
    font-size: .9rem;
    transition:
        transform .18s ease,
        background .18s ease,
        border-color .18s ease,
        color .18s ease,
        box-shadow .18s ease;
}

.novex-btn:hover {
    transform: translateY(-2px);
}

.novex-btn svg {
    width: 18px;
    height: 18px;
    flex-shrink: 0;
}

.novex-btn-primary {
    background: var(--novex-gold);
    color: var(--novex-navy-deep);
    box-shadow: 0 8px 22px rgba(232,160,32,.18);
}

.novex-btn-primary:hover {
    background: var(--novex-gold-light);
    color: var(--novex-navy-deep);
    box-shadow: 0 10px 26px rgba(232,160,32,.25);
}

.novex-btn-outline {
    border: 1px solid rgba(255,255,255,.32);
    color: var(--novex-white);
}

.novex-btn-outline:hover {
    border-color: var(--novex-gold-light);
    color: var(--novex-gold-light);
}


/* =========================================================
   HERO
   ========================================================= */

.novex-hero {
    position: relative;
    overflow: hidden;
    background:
        radial-gradient(
            circle at 78% 15%,
            rgba(232,160,32,.14),
            transparent 30%
        ),
        radial-gradient(
            circle at 100% 100%,
            rgba(0,116,194,.16),
            transparent 38%
        ),
        var(--novex-navy-deep);
    color: var(--novex-white);
}

.novex-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            90deg,
            rgba(6,20,49,.98) 0%,
            rgba(6,20,49,.88) 52%,
            rgba(6,20,49,.45) 100%
        );
    pointer-events: none;
}

.novex-hero-inner {
    position: relative;
    z-index: 1;
    padding: 92px 0 48px;
}

.novex-hero-grid {
    display: grid;
    grid-template-columns: 1.1fr .9fr;
    gap: 64px;
    align-items: center;
}

.novex-hero h1 {
    color: var(--novex-white);
    font-size: clamp(2.5rem, 5vw, 4.35rem);
    line-height: 1.02;
    letter-spacing: -.045em;
    margin: 14px 0 24px;
    max-width: 760px;
}

.novex-hero h1 em {
    color: var(--novex-gold-light);
    font-style: normal;
}

.novex-hero-lead {
    color: rgba(255,255,255,.75);
    font-size: 1.05rem;
    max-width: 58ch;
    margin: 0 0 32px;
}

.novex-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}


/* HERO VISUAL */

.novex-route-panel {
    position: relative;
    min-height: 330px;
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(255,255,255,.035);
    border-radius: 8px;
    overflow: hidden;
    padding: 28px;
    backdrop-filter: blur(4px);
}

.novex-route-panel::before {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    border-radius: 50%;
    border: 1px solid rgba(232,160,32,.12);
    right: -65px;
    top: -65px;
}

.novex-route-panel::after {
    content: "";
    position: absolute;
    width: 280px;
    height: 280px;
    border-radius: 50%;
    border: 1px solid rgba(255,255,255,.06);
    right: -120px;
    top: -115px;
}

.novex-route-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid rgba(255,255,255,.1);
    padding-bottom: 16px;
    margin-bottom: 25px;
}

.novex-route-top span {
    font-family: 'JetBrains Mono', monospace;
    font-size: .62rem;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: rgba(255,255,255,.5);
}

.novex-status {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    color: var(--novex-gold-light) !important;
}

.novex-status::before {
    content: "";
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: var(--novex-gold);
    box-shadow: 0 0 0 4px rgba(232,160,32,.1);
}

.novex-route-svg {
    width: 100%;
    height: auto;
    position: relative;
    z-index: 2;
}

.novex-route-label {
    font-family: 'JetBrains Mono', monospace;
    font-size: .62rem;
    fill: rgba(255,255,255,.55);
    letter-spacing: .08em;
}

.novex-route-footer {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 10px;
    margin-top: 22px;
}

.novex-route-stat {
    border-top: 1px solid rgba(255,255,255,.1);
    padding-top: 12px;
}

.novex-route-stat strong {
    display: block;
    color: var(--novex-white);
    font-family: 'Space Grotesk', sans-serif;
    font-size: .9rem;
}

.novex-route-stat span {
    color: rgba(255,255,255,.46);
    font-size: .68rem;
}


/* HERO MANIFEST */

.novex-manifest {
    position: relative;
    z-index: 2;
    border-top: 1px solid rgba(255,255,255,.12);
    margin-top: 62px;
    padding: 21px 0 0;
    display: flex;
    flex-wrap: wrap;
    gap: 10px 28px;
}

.novex-chip {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,.58);
    font-family: 'JetBrains Mono', monospace;
    font-size: .66rem;
}

.novex-chip-dot {
    width: 5px;
    height: 5px;
    background: var(--novex-gold);
    border-radius: 50%;
}


/* =========================================================
   TRUST STRIP
   ========================================================= */

.novex-trust {
    background: var(--novex-white);
    border-bottom: 1px solid var(--novex-line);
}

.novex-trust-grid {
    display: grid;
    grid-template-columns: repeat(4,1fr);
}

.novex-trust-item {
    padding: 25px 20px;
    border-right: 1px solid var(--novex-line);
}

.novex-trust-item:first-child {
    padding-left: 0;
}

.novex-trust-item:last-child {
    border-right: 0;
}

.novex-trust-number {
    font-family: 'Space Grotesk', sans-serif;
    color: var(--novex-navy);
    font-size: 1.3rem;
    font-weight: 700;
}

.novex-trust-item p {
    margin: 2px 0 0;
    color: var(--novex-slate);
    font-size: .78rem;
}


/* =========================================================
   PAIN POINTS
   ========================================================= */

.novex-painpoints {
    background: var(--novex-off-white);
}

.novex-pain-grid {
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 18px;
    margin-top: 38px;
}

.novex-pain-card {
    background: var(--novex-white);
    border: 1px solid var(--novex-line);
    border-radius: var(--novex-radius);
    padding: 27px;
    transition: transform .18s ease, box-shadow .18s ease;
}

.novex-pain-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 14px 32px rgba(10,32,80,.07);
}

.novex-pain-row {
    display: flex;
    gap: 13px;
    align-items: flex-start;
}

.novex-pain-row + .novex-pain-row {
    margin-top: 22px;
    padding-top: 20px;
    border-top: 1px solid var(--novex-line);
}

.novex-pain-tag {
    flex-shrink: 0;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: .7rem;
    font-weight: 700;
}

.novex-problem .novex-pain-tag {
    background: rgba(194,74,59,.1);
    color: var(--novex-red);
}

.novex-solution .novex-pain-tag {
    background: rgba(232,160,32,.14);
    color: var(--novex-gold);
}

.novex-pain-row p {
    margin: 0;
    font-size: .91rem;
}

.novex-problem p {
    color: var(--novex-ink);
    font-weight: 550;
}

.novex-solution p {
    color: var(--novex-slate);
}

.novex-pain-label {
    display: block;
    font-family: 'JetBrains Mono', monospace;
    font-size: .6rem;
    letter-spacing: .1em;
    text-transform: uppercase;
    margin-bottom: 4px;
}

.novex-problem .novex-pain-label {
    color: var(--novex-red);
}

.novex-solution .novex-pain-label {
    color: var(--novex-gold);
}


/* =========================================================
   PROCESS
   ========================================================= */

.novex-process {
    background: var(--novex-white);
    border-top: 1px solid var(--novex-line);
    border-bottom: 1px solid var(--novex-line);
}

.novex-process-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 18px;
    margin-top: 38px;
}

.novex-process-step {
    position: relative;
    background: var(--novex-off-white);
    border: 1px solid var(--novex-line);
    border-radius: var(--novex-radius);
    padding: 28px;
}

.novex-step-number {
    position: absolute;
    top: 22px;
    right: 22px;
    font-family: 'JetBrains Mono', monospace;
    font-size: .65rem;
    color: var(--novex-gold);
    letter-spacing: .1em;
}

.novex-process-icon {
    width: 48px;
    height: 48px;
    margin-bottom: 18px;
}

.novex-process-step h3 {
    font-size: 1.05rem;
    margin-bottom: 8px;
}

.novex-process-step p {
    color: var(--novex-slate);
    font-size: .88rem;
    margin: 0;
}


/* =========================================================
   FLEET BANNER
   ========================================================= */

.novex-fleet-banner {
    position: relative;
    min-height: 410px;
    overflow: hidden;
}

.novex-fleet-banner img {
    width: 100%;
    height: 100%;
    position: absolute;
    inset: 0;
    object-fit: cover;
    object-position: center;
}

.novex-fleet-banner::after {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            90deg,
            rgba(6,20,49,.96) 0%,
            rgba(6,20,49,.74) 45%,
            rgba(6,20,49,.25) 100%
        );
}

.novex-fleet-overlay {
    position: relative;
    z-index: 2;
    min-height: 410px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 60px max(24px, calc((100vw - 1120px) / 2));
}

.novex-fleet-overlay h2 {
    color: var(--novex-white);
    font-size: clamp(2rem, 4vw, 3rem);
    max-width: 16ch;
    margin: 8px 0 12px;
    letter-spacing: -.03em;
}

.novex-fleet-overlay p:last-child {
    color: rgba(255,255,255,.76);
    max-width: 48ch;
    font-size: .95rem;
    margin: 0;
}


/* =========================================================
   WHO WE SERVE
   ========================================================= */

.novex-serve {
    background: var(--novex-white);
}

.novex-serve-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 14px;
    margin-top: 34px;
}

.novex-serve-item {
    position: relative;
    border: 1px solid var(--novex-line);
    border-radius: var(--novex-radius);
    padding: 22px 20px 22px 24px;
    color: var(--novex-navy);
    background: var(--novex-off-white);
    font-size: .9rem;
    font-weight: 600;
    overflow: hidden;
}

.novex-serve-item::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 3px;
    background: var(--novex-gold);
}


/* =========================================================
   ABOUT
   ========================================================= */

.novex-about {
    background: var(--novex-off-white);
}

.novex-about-grid {
    display: grid;
    grid-template-columns: 1.2fr .8fr;
    gap: 50px;
    margin-top: 36px;
    align-items: stretch;
}

.novex-about-copy {
    padding-right: 10px;
}

.novex-about-copy p {
    color: var(--novex-slate);
    font-size: .97rem;
    margin: 0 0 17px;
}

.novex-about-copy p:last-child {
    margin-bottom: 0;
}

.novex-about-card {
    position: relative;
    min-height: 360px;
    overflow: hidden;
    border-radius: var(--novex-radius);
    border-left: 4px solid var(--novex-gold);
    background: var(--novex-navy);
}

.novex-about-card img {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: .52;
}

.novex-about-card::after {
    content: "";
    position: absolute;
    inset: 0;
    background:
        linear-gradient(
            180deg,
            rgba(10,32,80,.05) 10%,
            rgba(6,20,49,.96) 100%
        );
}

.novex-about-card-text {
    position: relative;
    z-index: 2;
    min-height: 360px;
    padding: 28px;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

.novex-about-card-text .novex-eyebrow {
    color: var(--novex-gold-light);
}

.novex-about-card-text h3 {
    color: var(--novex-white);
    font-size: 1.5rem;
    margin: 5px 0 8px;
}

.novex-about-card-text p:last-child {
    color: rgba(255,255,255,.76);
    font-size: .88rem;
    margin: 0;
}


/* =========================================================
   SERVICES
   ========================================================= */

.novex-services {
    background: var(--novex-white);
}

.novex-services-head {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    gap: 40px;
}

.novex-services-photo {
    width: 240px;
    height: 155px;
    object-fit: cover;
    border-radius: var(--novex-radius);
}

.novex-service-list {
    margin-top: 38px;
    border-top: 1px solid var(--novex-line);
}

.novex-service-row {
    display: grid;
    grid-template-columns: 60px 1fr auto;
    gap: 22px;
    padding: 25px 0;
    border-bottom: 1px solid var(--novex-line);
    align-items: start;
    transition: padding .18s ease;
}

.novex-service-row:hover {
    padding-left: 8px;
}

.novex-service-num {
    font-family: 'JetBrains Mono', monospace;
    color: var(--novex-gold);
    font-size: .78rem;
    font-weight: 700;
    padding-top: 3px;
}

.novex-service-row h3 {
    font-size: 1.08rem;
    margin-bottom: 5px;
}

.novex-service-row p {
    color: var(--novex-slate);
    font-size: .9rem;
    max-width: 64ch;
    margin: 0;
}

.novex-service-arrow {
    width: 34px;
    height: 34px;
    border: 1px solid var(--novex-line);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--novex-gold);
    font-size: 1rem;
}

.novex-pricing-note {
    margin-top: 30px;
    padding: 20px 22px;
    border: 1px dashed var(--novex-line);
    background: var(--novex-off-white);
    border-radius: var(--novex-radius);
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.novex-pricing-note p {
    color: var(--novex-slate);
    font-size: .88rem;
    margin: 0;
}

.novex-pricing-note strong {
    color: var(--novex-navy);
}


/* =========================================================
   REASSURANCE
   ========================================================= */

.novex-reassure {
    background: var(--novex-off-white);
}

.novex-reassure-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 18px;
    margin-top: 36px;
}

.novex-reassure-item {
    background: var(--novex-white);
    border: 1px solid var(--novex-line);
    border-radius: var(--novex-radius);
    padding: 25px;
}

.novex-reassure-icon {
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(232,160,32,.1);
    color: var(--novex-gold);
    border-radius: 50%;
    margin-bottom: 18px;
}

.novex-reassure-icon svg {
    width: 20px;
    height: 20px;
}

.novex-reassure-item h3 {
    font-size: 1rem;
    margin-bottom: 7px;
}

.novex-reassure-item p {
    color: var(--novex-slate);
    font-size: .86rem;
    margin: 0;
}


/* =========================================================
   COVERAGE
   ========================================================= */

.novex-coverage {
    position: relative;
    overflow: hidden;
    background:
        linear-gradient(
            120deg,
            rgba(6,20,49,.97),
            rgba(10,32,80,.91)
        ),
        url('/images/PHOTO-2026-09-03-13-53-43.jpg')
        center/cover no-repeat;
}

/* =========================================================
   VIDEO SHOWCASE & OPERATIONS GALLERY
   ========================================================= */

.novex-videos {
    background: var(--novex-navy-deep);
    color: var(--novex-white);
}

.novex-videos-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
    margin-top: 40px;
}

.novex-video-card {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.12);
    border-radius: var(--novex-radius);
    overflow: hidden;
    transition: transform 0.2s ease, border-color 0.2s ease;
}

.novex-video-card:hover {
    transform: translateY(-4px);
    border-color: var(--novex-gold);
}

.novex-video-wrapper {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 9;
    background: #000;
}

.novex-video-wrapper video {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.novex-video-info {
    padding: 18px 20px;
}

.novex-video-info h3 {
    color: var(--novex-white);
    font-size: 1.05rem;
    margin-bottom: 6px;
}

.novex-video-info p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.86rem;
    margin: 0;
}

.novex-gallery {
    background: var(--novex-off-white);
}

.novex-gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 20px;
    margin-top: 36px;
}

.novex-gallery-item {
    position: relative;
    border-radius: var(--novex-radius);
    overflow: hidden;
    aspect-ratio: 4 / 3;
    border: 1px solid var(--novex-line);
    background: var(--novex-white);
    box-shadow: 0 4px 12px rgba(0,0,0,0.04);
}

.novex-gallery-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.novex-gallery-item:hover img {
    transform: scale(1.04);
}

.novex-gallery-caption {
    position: absolute;
    bottom: 0;
    inset-x: 0;
    padding: 14px 16px;
    background: linear-gradient(0deg, rgba(6,20,49,0.92) 0%, transparent 100%);
    color: var(--novex-white);
    font-size: 0.82rem;
    font-weight: 500;
}

/* =========================================================
   COMPARE SECTION (SJ NOVEX VS TRADITIONAL CARGO)
   ========================================================= */

.novex-compare {
    background: var(--novex-white);
    border-top: 1px solid var(--novex-line);
    border-bottom: 1px solid var(--novex-line);
}

.novex-compare-table {
    width: 100%;
    margin-top: 36px;
    border-collapse: separate;
    border-spacing: 0;
    border: 1px solid var(--novex-line);
    border-radius: var(--novex-radius);
    overflow: hidden;
    background: var(--novex-white);
}

.novex-compare-table th,
.novex-compare-table td {
    padding: 18px 20px;
    text-align: left;
    font-size: 0.9rem;
    border-bottom: 1px solid var(--novex-line);
}

.novex-compare-table th {
    background: var(--novex-navy-deep);
    color: var(--novex-white);
    font-family: 'Space Grotesk', sans-serif;
    font-size: 0.95rem;
    font-weight: 600;
}

.novex-compare-table th.highlight {
    color: var(--novex-gold-light);
    background: var(--novex-navy);
}

.novex-compare-table tr:last-child td {
    border-bottom: none;
}

.novex-compare-table td.brand-col {
    background: rgba(232, 160, 32, 0.05);
    font-weight: 600;
    color: var(--novex-navy);
}

.novex-check-icon {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #10B981;
    font-weight: 600;
}

.novex-cross-icon {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #EF4444;
    font-weight: 500;
}

/* =========================================================
   TESTIMONIALS SECTION
   ========================================================= */

.novex-testimonials {
    background: var(--novex-navy-deep);
    color: var(--novex-white);
}

.novex-testi-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 22px;
    margin-top: 36px;
}

.novex-testi-card {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: var(--novex-radius);
    padding: 26px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    transition: transform 0.2s ease, border-color 0.2s ease;
}

.novex-testi-card:hover {
    transform: translateY(-3px);
    border-color: var(--novex-gold);
}

.novex-testi-stars {
    color: var(--novex-gold);
    font-size: 1.1rem;
    margin-bottom: 12px;
}

.novex-testi-card p {
    color: rgba(255, 255, 255, 0.85);
    font-size: 0.92rem;
    line-height: 1.6;
    margin-bottom: 20px;
    font-style: italic;
}

.novex-testi-author {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding-top: 14px;
}

.novex-testi-author strong {
    display: block;
    color: var(--novex-white);
    font-size: 0.92rem;
}

.novex-testi-author span {
    color: var(--novex-gold-light);
    font-size: 0.78rem;
    font-family: 'JetBrains Mono', monospace;
}

/* =========================================================
   FAQ ACCORDION SECTION
   ========================================================= */

.novex-faq {
    background: var(--novex-off-white);
}

.novex-faq-list {
    max-width: 800px;
    margin: 36px auto 0;
    display: flex;
    flex-direction: column;
    gap: 14px;
}

.novex-faq-item {
    background: var(--novex-white);
    border: 1px solid var(--novex-line);
    border-radius: var(--novex-radius);
    overflow: hidden;
    transition: border-color 0.2s ease;
}

.novex-faq-item.active {
    border-color: var(--novex-gold);
    box-shadow: 0 4px 14px rgba(10,32,80,0.06);
}

.novex-faq-question {
    padding: 20px 24px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    cursor: pointer;
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.02rem;
    font-weight: 600;
    color: var(--novex-navy);
    user-select: none;
}

.novex-faq-icon {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: rgba(232, 160, 32, 0.12);
    color: var(--novex-gold);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    font-weight: 700;
    transition: transform 0.25s ease;
    flex-shrink: 0;
}

.novex-faq-item.active .novex-faq-icon {
    transform: rotate(45deg);
    background: var(--novex-gold);
    color: var(--novex-navy-deep);
}

.novex-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s cubic-bezier(0, 1, 0, 1);
    padding: 0 24px;
    color: var(--novex-slate);
    font-size: 0.92rem;
    line-height: 1.65;
}

.novex-faq-item.active .novex-faq-answer {
    max-height: 500px;
    padding: 0 24px 22px;
    transition: max-height 0.3s cubic-bezier(1, 0, 1, 0);
}

.novex-coverage::before {
    content: "";
    position: absolute;
    width: 420px;
    height: 420px;
    border: 1px solid rgba(232,160,32,.08);
    border-radius: 50%;
    right: -160px;
    top: -160px;
}

.novex-coverage .novex-container {
    position: relative;
    z-index: 2;
}

.novex-coverage h2 {
    color: var(--novex-white);
}

.novex-coverage .novex-section-head > p:not(.novex-eyebrow) {
    color: rgba(255,255,255,.67);
}

.novex-coverage-grid {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 18px;
    margin-top: 38px;
}

.novex-coverage-card {
    border: 1px solid rgba(255,255,255,.12);
    background: rgba(255,255,255,.045);
    border-radius: var(--novex-radius);
    padding: 27px;
}

.novex-coverage-num {
    font-family: 'Space Grotesk', sans-serif;
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--novex-gold-light);
}

.novex-coverage-card p {
    color: rgba(255,255,255,.67);
    font-size: .86rem;
    margin: 6px 0 0;
}


/* =========================================================
   CONTACT CTA
   ========================================================= */

.novex-contact {
    background: var(--novex-white);
}

.novex-contact-box {
    position: relative;
    overflow: hidden;
    background: var(--novex-navy);
    border-radius: 8px;
    padding: 55px;
    display: grid;
    grid-template-columns: 1.3fr .7fr;
    gap: 40px;
    align-items: center;
}

.novex-contact-box::after {
    content: "";
    position: absolute;
    width: 350px;
    height: 350px;
    border-radius: 50%;
    border: 1px solid rgba(232,160,32,.12);
    right: -150px;
    top: -170px;
}

.novex-contact-content {
    position: relative;
    z-index: 2;
}

.novex-contact-content .novex-eyebrow {
    color: var(--novex-gold-light);
}

.novex-contact-content h2 {
    color: var(--novex-white);
    font-size: clamp(1.8rem,4vw,2.6rem);
    margin-bottom: 12px;
}

.novex-contact-content p {
    color: rgba(255,255,255,.7);
    max-width: 55ch;
    margin: 0;
}

.novex-contact-action {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: flex-end;
}


/* =========================================================
   FLOATING WHATSAPP
   ========================================================= */

.novex-wa-float {
    position: fixed;
    right: 18px;
    bottom: 18px;
    z-index: 200;
    width: 57px;
    height: 57px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #1DA851;
    color: white;
    box-shadow: 0 8px 25px rgba(0,0,0,.25);
    transition: transform .2s ease;
}

.novex-wa-float:hover {
    transform: translateY(-3px) scale(1.03);
}

.novex-wa-float svg {
    width: 28px;
    height: 28px;
}


/* =========================================================
   RESPONSIVE
   ========================================================= */

@media (max-width: 900px) {

    .novex-hero-grid {
        grid-template-columns: 1fr;
        gap: 45px;
    }

    .novex-hero h1 {
        max-width: 800px;
    }

    .novex-route-panel {
        max-width: 650px;
    }

    .novex-trust-grid {
        grid-template-columns: repeat(2,1fr);
    }

    .novex-trust-item:nth-child(2) {
        border-right: 0;
    }

    .novex-trust-item:nth-child(-n+2) {
        border-bottom: 1px solid var(--novex-line);
    }

    .novex-about-grid {
        grid-template-columns: 1fr;
    }

    .novex-about-card {
        min-height: 330px;
    }

    .novex-about-card-text {
        min-height: 330px;
    }

    .novex-contact-box {
        grid-template-columns: 1fr;
        padding: 42px;
    }

    .novex-contact-action {
        justify-content: flex-start;
    }
}


@media (max-width: 760px) {

    .novex-section {
        padding: 68px 0;
    }

    .novex-hero-inner {
        padding-top: 70px;
    }

    .novex-pain-grid {
        grid-template-columns: 1fr;
    }

    .novex-process-grid {
        grid-template-columns: 1fr;
    }

    .novex-serve-grid {
        grid-template-columns: repeat(2,1fr);
    }

    .novex-services-head {
        align-items: flex-start;
    }

    .novex-services-photo {
        display: none;
    }

    .novex-reassure-grid {
        grid-template-columns: 1fr;
    }

    .novex-coverage-grid {
        grid-template-columns: 1fr;
    }

    .novex-service-row {
        grid-template-columns: 42px 1fr;
        gap: 14px;
    }

    .novex-service-arrow {
        display: none;
    }

    .novex-fleet-overlay {
        padding: 50px 24px;
    }
}


@media (max-width: 560px) {

    .novex-container {
        padding: 0 18px;
    }

    .novex-hero h1 {
        font-size: clamp(2.2rem, 12vw, 3.2rem);
    }

    .novex-hero-lead {
        font-size: .96rem;
    }

    .novex-hero-actions {
        flex-direction: column;
        align-items: stretch;
    }

    .novex-btn {
        width: 100%;
    }

    .novex-route-panel {
        padding: 20px;
    }

    .novex-route-footer {
        grid-template-columns: 1fr;
        gap: 14px;
    }

    .novex-manifest {
        gap: 12px 18px;
    }

    .novex-trust-grid {
        grid-template-columns: 1fr;
    }

    .novex-trust-item,
    .novex-trust-item:first-child {
        padding: 18px 0;
        border-right: 0;
        border-bottom: 1px solid var(--novex-line);
    }

    .novex-trust-item:last-child {
        border-bottom: 0;
    }

    .novex-serve-grid {
        grid-template-columns: 1fr;
    }

    .novex-pricing-note {
        align-items: stretch;
        flex-direction: column;
    }

    .novex-contact-box {
        padding: 32px 24px;
    }

    .novex-wa-float {
        right: 14px;
        bottom: 14px;
        width: 53px;
        height: 53px;
    }
}

/* =========================================================
   MOBILE OPTIMIZATION
   ========================================================= */

/* Prevent horizontal overflow */
html,
body {
    overflow-x: hidden;
}

.novex-home {
    width: 100%;
    overflow-x: hidden;
}

/* ---------------------------------------------------------
   MOBILE: 0 - 639px
--------------------------------------------------------- */

@media (max-width: 639px) {

    .novex-container {
        padding-left: 18px;
        padding-right: 18px;
    }

    .novex-section {
        padding: 52px 0;
    }

    /* =========================
       TYPOGRAPHY
    ========================= */

    .novex-section-head {
        max-width: 100%;
    }

    .novex-section-head h2 {
        font-size: 1.55rem;
        line-height: 1.2;
    }

    .novex-section-head p:not(.novex-eyebrow) {
        font-size: .92rem;
        line-height: 1.6;
    }

    .novex-eyebrow {
        font-size: .64rem;
        letter-spacing: .1em;
    }


    /* =========================
       HERO
    ========================= */

    .novex-hero {
        padding: 48px 0 38px;
    }

    .novex-hero-grid {
        display: flex;
        flex-direction: column;
        gap: 28px;
    }

    .novex-hero h1 {
        font-size: clamp(2rem, 10vw, 2.55rem);
        line-height: 1.08;
        margin: 12px 0 16px;
    }

    .novex-hero .lead {
        font-size: .94rem;
        line-height: 1.65;
        margin-bottom: 24px;
    }

    .novex-hero-actions {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 10px;
    }

    .novex-btn {
        width: 100%;
        min-height: 48px;
        padding: 13px 16px;
        font-size: .88rem;
    }

    /* Route diagram */
    .novex-route-wrap {
        width: 100%;
        margin-top: 4px;
    }

    .novex-route-svg {
        width: 100%;
        max-width: 100%;
        height: auto;
    }

    .novex-route-label {
        font-size: .55rem;
    }

    /* Manifest */
    .novex-manifest {
        margin-top: 30px;
        padding-top: 18px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px 16px;
    }

    .novex-chip {
        font-size: .61rem;
        line-height: 1.4;
    }


    /* =========================
       PAIN POINTS
    ========================= */

    .novex-pain-grid {
        grid-template-columns: 1fr;
        gap: 12px;
        margin-top: 24px;
    }

    .novex-pain-card {
        padding: 20px 18px;
    }

    .novex-pain-row {
        gap: 10px;
    }

    .novex-pain-row p {
        font-size: .88rem;
        line-height: 1.55;
    }

    .novex-pain-tag {
        width: 21px;
        height: 21px;
        flex: 0 0 21px;
    }


    /* =========================
       PROCESS
    ========================= */

    .novex-process-grid {
        grid-template-columns: 1fr;
        gap: 12px;
        margin-top: 24px;
    }

    .novex-process-step {
        padding: 20px 18px;
    }

    .novex-process-icon {
        width: 40px;
        height: 40px;
        margin-bottom: 10px;
    }

    .novex-process-step h3 {
        font-size: .98rem;
    }

    .novex-process-step p {
        font-size: .86rem;
        line-height: 1.55;
    }


    /* =========================
       FLEET BANNER
    ========================= */

    .novex-fleet-banner {
        height: 300px;
    }

    .novex-fleet-overlay {
        padding: 24px 18px;
        background:
            linear-gradient(
                180deg,
                rgba(6,20,49,.25) 0%,
                rgba(6,20,49,.92) 100%
            );
    }

    .novex-fleet-overlay h2 {
        font-size: 1.55rem;
        line-height: 1.2;
        max-width: 100%;
    }

    .novex-fleet-overlay p:last-child {
        font-size: .86rem;
        line-height: 1.55;
        max-width: 100%;
    }


    /* =========================
       WHO WE SERVE
    ========================= */

    .novex-serve-grid {
        grid-template-columns: 1fr;
        gap: 10px;
        margin-top: 22px;
    }

    .novex-serve-item {
        padding: 14px 16px;
        font-size: .86rem;
    }


    /* =========================
       ABOUT
    ========================= */

    .novex-about-grid {
        grid-template-columns: 1fr;
        gap: 22px;
        margin-top: 22px;
    }

    .novex-about-copy p {
        font-size: .91rem;
        line-height: 1.65;
        margin-bottom: 12px;
    }

    .novex-about-card {
        min-height: 280px;
    }

    .novex-about-card-text {
        min-height: 280px;
        padding: 20px;
    }

    .novex-about-card h3 {
        font-size: 1.15rem;
    }

    .novex-about-card p:last-child {
        font-size: .84rem;
        line-height: 1.55;
    }


    /* =========================
       SERVICES
    ========================= */

    .novex-services-head {
        display: block;
    }

    .novex-services-photo {
        display: block;
        width: 100%;
        height: 180px;
        margin-top: 22px;
    }

    .novex-service-list {
        margin-top: 22px;
    }

    .novex-service-row {
        grid-template-columns: 34px 1fr;
        gap: 10px;
        padding: 18px 0;
    }

    .novex-service-num {
        font-size: .72rem;
    }

    .novex-service-row h3 {
        font-size: .98rem;
        line-height: 1.3;
    }

    .novex-service-row p {
        font-size: .86rem;
        line-height: 1.55;
    }

    .novex-pricing-note {
        display: flex;
        flex-direction: column;
        align-items: stretch;
        padding: 16px;
        gap: 12px;
    }

    .novex-pricing-note p {
        font-size: .84rem;
        line-height: 1.55;
    }

    .novex-pricing-note .novex-btn {
        width: 100% !important;
    }


    /* =========================
       REASSURANCE
    ========================= */

    .novex-reassure {
        padding-bottom: 52px;
    }

    .novex-reassure-grid {
        grid-template-columns: 1fr;
        gap: 10px;
        margin-top: 22px;
    }

    .novex-reassure-item {
        padding: 16px;
        gap: 11px;
    }

    .novex-reassure-item svg {
        width: 19px;
        height: 19px;
    }

    .novex-reassure-item h3 {
        font-size: .9rem;
    }

    .novex-reassure-item p {
        font-size: .81rem;
        line-height: 1.5;
    }


    /* =========================
       COVERAGE
    ========================= */

    .novex-coverage-grid {
        grid-template-columns: 1fr;
        gap: 10px;
        margin-top: 22px;
    }

    .novex-coverage-card {
        padding: 18px;
    }

    .novex-coverage-num {
        font-size: 1.45rem;
    }

    .novex-coverage-card p {
        font-size: .83rem;
    }


    /* =========================
       CONTACT
    ========================= */

    .novex-contact-grid {
        grid-template-columns: 1fr;
        gap: 12px;
        margin-top: 22px;
    }

    .novex-contact-card {
        padding: 20px 18px;
    }

    .novex-contact-card h3 {
        font-size: 1rem;
    }

    .novex-contact-card > p {
        font-size: .86rem;
        line-height: 1.55;
    }

    .novex-contact-line {
        align-items: flex-start;
        font-size: .84rem;
        line-height: 1.5;
        overflow-wrap: anywhere;
        word-break: break-word;
    }

    .novex-contact-line svg {
        margin-top: 3px;
    }

    .novex-social-note {
        font-size: .66rem;
        line-height: 1.6;
    }


    /* =========================
       WHATSAPP
    ========================= */

    .novex-wa-float {
        width: 52px;
        height: 52px;
        right: 14px;
        bottom: calc(14px + env(safe-area-inset-bottom));
    }

    .novex-wa-float svg {
        width: 25px;
        height: 25px;
    }
}


/* =========================================================
   SMALL PHONES
   0 - 380px
========================================================= */

@media (max-width: 380px) {

    .novex-container {
        padding-left: 15px;
        padding-right: 15px;
    }

    .novex-hero {
        padding-top: 40px;
    }

    .novex-hero h1 {
        font-size: 1.9rem;
    }

    .novex-hero .lead {
        font-size: .89rem;
    }

    .novex-manifest {
        grid-template-columns: 1fr;
    }

    .novex-fleet-banner {
        height: 280px;
    }

    .novex-fleet-overlay h2 {
        font-size: 1.4rem;
    }
}


/* =========================================================
   TABLETS
   640px - 779px
========================================================= */

@media (min-width: 640px) and (max-width: 779px) {

    .novex-container {
        padding-left: 28px;
        padding-right: 28px;
    }

    .novex-hero-grid {
        gap: 34px;
    }

    .novex-hero-actions {
        max-width: 560px;
    }

    .novex-btn {
        width: auto;
    }

    .novex-pain-grid {
        grid-template-columns: 1fr 1fr;
    }

    .novex-process-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .novex-about-grid {
        grid-template-columns: 1fr;
    }

    .novex-services-photo {
        display: block;
    }

    .novex-coverage-grid {
        grid-template-columns: repeat(3, 1fr);
    }

    .novex-reassure-grid {
        grid-template-columns: 1fr;
    }
}


/* =========================================================
   TOUCH DEVICES
========================================================= */

@media (hover: none) and (pointer: coarse) {

    .novex-btn {
        min-height: 48px;
    }

    .novex-wa-float {
        width: 54px;
        height: 54px;
    }

    .novex-btn:hover {
        transform: none;
    }

}
</style>


@php

    $whatsappNumber = preg_replace(
        '/\D+/',
        '',
        $settings->whatsapp_number ?? '2348031351449'
    );

    $whatsappMessage = $settings->whatsapp_default_message
        ?? "Hi, I found your website and I'd like to enquire about your services.";

    $whatsappUrl =
        "https://wa.me/{$whatsappNumber}?text=" .
        urlencode($whatsappMessage);

@endphp


<div class="novex-home">


{{-- =========================================================
     HERO
========================================================= --}}

<section class="novex-hero" id="home">

    <div class="novex-container">

        <div class="novex-hero-inner">

            <div class="novex-hero-grid">

                <div>

                    <p class="novex-eyebrow">
                        {{ $page->eyebrow ?? 'The courier problem, solved' }}
                    </p>

                    <h1>
                        Late deliveries.
                        Damaged goods.
                        Couriers who go quiet.
                        <em>Not with us.</em>
                    </h1>

                    <p class="novex-hero-lead">
                        {{ $page->intro
                            ?? "If a courier has ever cost you a customer, a deadline or your peace of mind, you already know the risk. SJ Novex Limited picks up, moves and delivers your parcels, documents and business goods across Nigeria and to Accra, Ghana; with clear timelines, careful handling and a real person to talk to until it lands."
                        }}
                    </p>

                    <div class="novex-hero-actions">

                        <a
                            class="novex-btn novex-btn-primary"
                            href="{{ $whatsappUrl }}"
                            target="_blank"
                            rel="noopener"
                        >

                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.46 1.32 4.96L2 22l5.29-1.39a9.9 9.9 0 0 0 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2z"/>
                            </svg>

                            Get a quote on WhatsApp

                        </a>


                        <a
                            class="novex-btn novex-btn-outline"
                            href="#services"
                        >
                            Explore our services
                        </a>

                    </div>

                </div>


                {{-- Route / Logistics Visual --}}

                <div class="novex-route-panel">

                    <div class="novex-route-top">

                        <span>
                            SJ NOVEX / DELIVERY NETWORK
                        </span>

                        <span class="novex-status">
                            ROUTE ACTIVE
                        </span>

                    </div>


                    <svg
                        class="novex-route-svg"
                        viewBox="0 0 600 180"
                        xmlns="http://www.w3.org/2000/svg"
                    >

                        <line
                            x1="20"
                            y1="82"
                            x2="580"
                            y2="82"
                            stroke="rgba(255,255,255,.1)"
                            stroke-width="1"
                        />

                        <path
                            d="M20,82 C120,25 180,140 300,82 S480,25 580,82"
                            fill="none"
                            stroke="#E8A020"
                            stroke-width="2"
                            stroke-dasharray="6 7"
                        />

                        <circle
                            cx="20"
                            cy="82"
                            r="6"
                            fill="#F4C66A"
                        />

                        <circle
                            cx="300"
                            cy="82"
                            r="4"
                            fill="rgba(255,255,255,.5)"
                        />

                        <circle
                            cx="580"
                            cy="82"
                            r="6"
                            fill="#F4C66A"
                        />


                        <text
                            x="8"
                            y="113"
                            class="novex-route-label"
                        >
                            LAGOS HUB
                        </text>

                        <text
                            x="265"
                            y="56"
                            class="novex-route-label"
                        >
                            IN TRANSIT
                        </text>

                        <text
                            x="500"
                            y="113"
                            class="novex-route-label"
                        >
                            DESTINATION
                        </text>


                        <g transform="translate(145,105)">

                            <rect
                                x="0"
                                y="0"
                                width="40"
                                height="18"
                                rx="2"
                                fill="#F4C66A"
                            />

                            <rect
                                x="40"
                                y="4"
                                width="16"
                                height="14"
                                rx="2"
                                fill="#F4C66A"
                            />

                            <rect
                                x="43"
                                y="6"
                                width="8"
                                height="6"
                                fill="#0A2050"
                            />

                            <circle
                                cx="10"
                                cy="20"
                                r="4"
                                fill="#0A2050"
                                stroke="#F6F4EF"
                                stroke-width="1"
                            />

                            <circle
                                cx="44"
                                cy="20"
                                r="4"
                                fill="#0A2050"
                                stroke="#F6F4EF"
                                stroke-width="1"
                            />

                        </g>

                    </svg>


                    <div class="novex-route-footer">

                        <div class="novex-route-stat">

                            <strong>Lagos</strong>

                            <span>Primary hub</span>

                        </div>

                        <div class="novex-route-stat">

                            <strong>Nigeria</strong>

                            <span>Nationwide</span>

                        </div>

                        <div class="novex-route-stat">

                            <strong>Accra</strong>

                            <span>Cross-border</span>

                        </div>

                    </div>

                </div>

            </div>


            <div class="novex-manifest">

                <div class="novex-chip">
                    <span class="novex-chip-dot"></span>
                    SMEs &amp; corporate clients
                </div>

                <div class="novex-chip">
                    <span class="novex-chip-dot"></span>
                    E-commerce sellers
                </div>

                <div class="novex-chip">
                    <span class="novex-chip-dot"></span>
                    Churches &amp; ministries
                </div>

                <div class="novex-chip">
                    <span class="novex-chip-dot"></span>
                    Government &amp; NGOs
                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     TRUST STRIP
========================================================= --}}

<section class="novex-trust">

    <div class="novex-container">

        <div class="novex-trust-grid">

            <div class="novex-trust-item">

                <div class="novex-trust-number">
                    Lagos
                </div>

                <p>
                    Primary operating hub
                </p>

            </div>

            <div class="novex-trust-item">

                <div class="novex-trust-number">
                    NG
                </div>

                <p>
                    Nationwide delivery
                </p>

            </div>

            <div class="novex-trust-item">

                <div class="novex-trust-number">
                    GH
                </div>

                <p>
                    Accra cross-border service
                </p>

            </div>

            <div class="novex-trust-item">

                <div class="novex-trust-number">
                    1:1
                </div>

                <p>
                    Direct WhatsApp communication
                </p>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     PAIN POINTS
========================================================= --}}

<section class="novex-section novex-painpoints">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow">
                Why clients switch to us
            </p>

            <h2>
                You've probably dealt with all of this before.
            </h2>

            <p>
                Every one of these is a reason a client first messaged us,
                and a promise we hold ourselves to on every job.
            </p>

        </div>


        <div class="novex-pain-grid">

            @php
                $painPoints = [
                    [
                        'problem' => 'Pickup times slip and deliveries arrive late, throwing off your plans or your customer\'s.',
                        'solution' => 'We confirm pickup and delivery windows before we move, and we keep to them.'
                    ],
                    [
                        'problem' => 'Goods arrive damaged, opened, or do not arrive at all with no one taking responsibility.',
                        'solution' => 'Every item is handled and accounted for from pickup to drop-off.'
                    ],
                    [
                        'problem' => 'You send a parcel and then hear nothing; no updates, no one to call, just silence.',
                        'solution' => 'You get a direct WhatsApp line to a real person from enquiry to delivery.'
                    ],
                    [
                        'problem' => 'Your business is growing, but the courier you used for one-off parcels cannot keep up.',
                        'solution' => 'From one document to recurring supply runs, we handle volume without dropping the standard.'
                    ]
                ];
            @endphp


            @foreach($painPoints as $point)

                <div class="novex-pain-card">

                    <div class="novex-pain-row novex-problem">

                        <div class="novex-pain-tag">
                            !
                        </div>

                        <p>

                            <span class="novex-pain-label">
                                The problem
                            </span>

                            {{ $point['problem'] }}

                        </p>

                    </div>


                    <div class="novex-pain-row novex-solution">

                        <div class="novex-pain-tag">
                            ✓
                        </div>

                        <p>

                            <span class="novex-pain-label">
                                How we fix it
                            </span>

                            {{ $point['solution'] }}

                        </p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>


{{-- =========================================================
     PROCESS
========================================================= --}}

<section class="novex-section novex-process">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow">
                How it works
            </p>

            <h2>
                Pickup to delivery, handled end to end.
            </h2>

        </div>


        <div class="novex-process-grid">

            @forelse($steps as $index => $step)

                <div class="novex-process-step">

                    <span class="novex-step-number">
                        STEP {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </span>


                    @if($index === 0)

                        <svg viewBox="0 0 64 64" class="novex-process-icon">

                            <rect
                                x="14"
                                y="24"
                                width="36"
                                height="26"
                                rx="2"
                                fill="none"
                                stroke="var(--novex-navy)"
                                stroke-width="2.5"
                            />

                            <path
                                d="M14 24 20 12h24l6 12"
                                fill="none"
                                stroke="var(--novex-navy)"
                                stroke-width="2.5"
                                stroke-linejoin="round"
                            />

                            <line
                                x1="14"
                                y1="34"
                                x2="50"
                                y2="34"
                                stroke="var(--novex-gold)"
                                stroke-width="2.5"
                            />

                            <circle
                                cx="47"
                                cy="16"
                                r="3"
                                fill="var(--novex-gold)"
                            />

                        </svg>

                    @elseif($index === 1)

                        <svg viewBox="0 0 64 64" class="novex-process-icon">

                            <rect
                                x="6"
                                y="26"
                                width="30"
                                height="18"
                                rx="2"
                                fill="none"
                                stroke="var(--novex-navy)"
                                stroke-width="2.5"
                            />

                            <path
                                d="M36 32h10l8 8v4H36z"
                                fill="none"
                                stroke="var(--novex-navy)"
                                stroke-width="2.5"
                            />

                            <circle
                                cx="18"
                                cy="46"
                                r="4"
                                fill="none"
                                stroke="var(--novex-gold)"
                                stroke-width="2.5"
                            />

                            <circle
                                cx="46"
                                cy="46"
                                r="4"
                                fill="none"
                                stroke="var(--novex-gold)"
                                stroke-width="2.5"
                            />

                        </svg>

                    @else

                        <svg viewBox="0 0 64 64" class="novex-process-icon">

                            <path
                                d="M18 8h28l6 10v34H12V18z"
                                fill="none"
                                stroke="var(--novex-navy)"
                                stroke-width="2.5"
                            />

                            <path
                                d="M12 18h40"
                                stroke="var(--novex-navy)"
                                stroke-width="2.5"
                            />

                            <path
                                d="M24 32l6 6 12-14"
                                fill="none"
                                stroke="var(--novex-gold)"
                                stroke-width="3"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />

                        </svg>

                    @endif


                    <h3>
                        {{ $step->title }}
                    </h3>

                    <p>
                        {{ $step->description }}
                    </p>

                </div>

            @empty

                <div class="novex-process-step">

                    <span class="novex-step-number">
                        STEP 01
                    </span>

                    <h3>
                        We pick up
                    </h3>

                    <p>
                        Message us your pickup details on WhatsApp
                        and we confirm a collection window that works for you.
                    </p>

                </div>


                <div class="novex-process-step">

                    <span class="novex-step-number">
                        STEP 02
                    </span>

                    <h3>
                        In transit
                    </h3>

                    <p>
                        Your goods move on our routes across Lagos,
                        nationwide, or to Accra, Ghana.
                    </p>

                </div>


                <div class="novex-process-step">

                    <span class="novex-step-number">
                        STEP 03
                    </span>

                    <h3>
                        Delivered
                    </h3>

                    <p>
                        Safe, on-time delivery with confirmation back to you.
                    </p>

                </div>

            @endforelse

        </div>

    </div>

</section>


{{-- =========================================================
     FLEET BANNER
========================================================= --}}

<section class="novex-fleet-banner">

    <img
        src="/images/PHOTO-2026-09-03-13-53-42.jpg"
        alt="SJ Novex Limited Courier & Logistics Fleet"
        loading="lazy"
    >

    <div class="novex-fleet-overlay">

        <p
            class="novex-eyebrow"
            style="color:var(--novex-gold-light);"
        >
            On the road
        </p>

        <h2>
            A fleet built to keep Nigeria moving.
        </h2>

        <p>
            Built for businesses that cannot afford a missed delivery,
            and individuals who simply want it done right.
        </p>

    </div>

</section>


{{-- =========================================================
     OPERATIONS IN ACTION (VIDEO SHOWCASE)
========================================================= --}}

<section class="novex-section novex-videos" id="videos">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow" style="color:var(--novex-gold-light);">
                Watch us in action
            </p>

            <h2 style="color:var(--novex-white);">
                Real-time dispatch &amp; delivery operations
            </h2>

            <p style="color:rgba(255,255,255,0.72);">
                Take a look inside our daily logistics workflow — from rapid motorcycle dispatching to interstate freight transport and doorstep delivery.
            </p>

        </div>

        <div class="novex-videos-grid">

            <div class="novex-video-card">
                <div class="novex-video-wrapper">
                    <video controls preload="metadata" poster="/images/PHOTO-2026-09-03-13-53-39.jpg">
                        <source src="/videos/VIDEO-2026-09-03-13-39-02.mp4" type="video/mp4">
                        Your browser does not support video playback.
                    </video>
                </div>
                <div class="novex-video-info">
                    <h3>Express Dispatch Rider Pickup</h3>
                    <p>Fast parcel collection by our dedicated riders across Lagos.</p>
                </div>
            </div>

            <div class="novex-video-card">
                <div class="novex-video-wrapper">
                    <video controls preload="metadata" poster="/images/PHOTO-2026-09-03-13-53-41.jpg">
                        <source src="/videos/VIDEO-2026-09-03-13-41-10.mp4" type="video/mp4">
                        Your browser does not support video playback.
                    </video>
                </div>
                <div class="novex-video-info">
                    <h3>Interstate &amp; Cargo Freight Transport</h3>
                    <p>Safe loading and transit of commercial goods across states.</p>
                </div>
            </div>

            <div class="novex-video-card">
                <div class="novex-video-wrapper">
                    <video controls preload="metadata" poster="/images/PHOTO-2026-09-03-13-53-44.jpg">
                        <source src="/videos/VIDEO-2026-09-03-13-43-18.mp4" type="video/mp4">
                        Your browser does not support video playback.
                    </video>
                </div>
                <div class="novex-video-info">
                    <h3>Doorstep Delivery Confirmation</h3>
                    <p>Verified handoffs directly to corporate and individual clients.</p>
                </div>
            </div>

            <div class="novex-video-card">
                <div class="novex-video-wrapper">
                    <video controls preload="metadata" poster="/images/PHOTO-2026-09-03-13-53-46.jpg">
                        <source src="/videos/VIDEO-2026-09-03-13-45-07.mp4" type="video/mp4">
                        Your browser does not support video playback.
                    </video>
                </div>
                <div class="novex-video-info">
                    <h3>Accra, Ghana Cross-Border Shipping</h3>
                    <p>Secure international logistics for business packages and cargo.</p>
                </div>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     LIVE OPERATIONS GALLERY
========================================================= --}}

<section class="novex-section novex-gallery" id="gallery">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow">
                Gallery
            </p>

            <h2>
                Our operations in photos
            </h2>

            <p>
                Every package handled with care. Here is a glimpse of our riders, vehicles, and active deliveries on the move.
            </p>

        </div>

        <div class="novex-gallery-grid">

            <div class="novex-gallery-item">
                <img src="/images/PHOTO-2026-09-03-13-53-39.jpg" alt="Dispatch Rider Ready" loading="lazy">
                <div class="novex-gallery-caption">Lagos Express Courier Dispatch</div>
            </div>

            <div class="novex-gallery-item">
                <img src="/images/PHOTO-2026-09-03-13-53-41.jpg" alt="Package Parcel Handling" loading="lazy">
                <div class="novex-gallery-caption">Secure Parcel Sorting &amp; Packaging</div>
            </div>

            <div class="novex-gallery-item">
                <img src="/images/PHOTO-2026-09-03-13-53-44.jpg" alt="Delivery Vehicle Fleet" loading="lazy">
                <div class="novex-gallery-caption">Fleet Operations &amp; Maintenance</div>
            </div>

            <div class="novex-gallery-item">
                <img src="/images/PHOTO-2026-09-03-13-53-46.jpg" alt="Nationwide Cargo Freight" loading="lazy">
                <div class="novex-gallery-caption">Nationwide Cargo Route Transit</div>
            </div>

            <div class="novex-gallery-item">
                <img src="/images/PHOTO-2026-09-03-13-53-47.jpg" alt="Doorstep Customer Delivery" loading="lazy">
                <div class="novex-gallery-caption">Client Package Delivery Handoff</div>
            </div>

            <div class="novex-gallery-item">
                <img src="/images/PHOTO-2026-06-30-22-43-57.jpg" alt="SJ Novex Corporate Logistics" loading="lazy">
                <div class="novex-gallery-caption">SJ Novex Logistics Team</div>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     WHO WE SERVE
========================================================= --}}

<section class="novex-section novex-serve">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow">
                Who we work with
            </p>

            <h2>
                Built for people and businesses who need it done right.
            </h2>

            <p>
                From individual parcels to recurring business supply runs,
                our clients count on us to show up and follow through.
            </p>

        </div>


        <div class="novex-serve-grid">

            <div class="novex-serve-item">
                Small &amp; medium businesses
            </div>

            <div class="novex-serve-item">
                Corporate organisations
            </div>

            <div class="novex-serve-item">
                E-commerce sellers
            </div>

            <div class="novex-serve-item">
                Churches &amp; ministries
            </div>

            <div class="novex-serve-item">
                Individuals
            </div>

            <div class="novex-serve-item">
                Government agencies &amp; NGOs
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     ABOUT
========================================================= --}}

<section class="novex-section novex-about" id="about">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow">
                {{ $aboutPage->eyebrow ?? 'About us' }}
            </p>

            <h2>
                {{ $aboutPage->headline ?? 'Reliable delivery, from pickup to doorstep' }}
            </h2>

        </div>


        <div class="novex-about-grid">

            <div class="novex-about-copy">

                @if(isset($aboutPage) && $aboutPage->body)

                    @foreach(preg_split("/\r\n|\n|\r/", $aboutPage->body) as $paragraph)

                        @if(trim($paragraph))

                            <p>
                                {{ trim($paragraph) }}
                            </p>

                        @endif

                    @endforeach

                @else

                    <p>
                        SJ Novex Limited is a courier and logistics company
                        built around one idea: you should not have to worry
                        once your goods leave your hands.
                    </p>

                    <p>
                        We handle the pickup, transportation and delivery of
                        parcels, documents and business goods across Nigeria
                        and to Accra, Ghana.
                    </p>

                    <p>
                        Beyond courier work, we support businesses and organisations
                        with transportation, general merchandise supply,
                        contracting, and buying-and-selling services.
                    </p>

                @endif

            </div>


            <div class="novex-about-card">

                <img
                    src="/images/PHOTO-2026-09-03-13-53-45.jpg"
                    alt="SJ Novex Limited Dispatch & Operations"
                    loading="lazy"
                >

                <div class="novex-about-card-text">

                    <p class="novex-eyebrow">
                        Coverage
                    </p>

                    <h3>
                        Lagos-based. Nationwide reach.
                    </h3>

                    <p>
                        Operating out of
                        {{ $settings->address ?? 'Jibowu, Lagos State' }},
                        with delivery routes covering Nigeria and
                        cross-border service to Accra, Ghana.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     SERVICES
========================================================= --}}

<section class="novex-section novex-services" id="services">

    <div class="novex-container">

        <div class="novex-services-head">

            <div class="novex-section-head">

                <p class="novex-eyebrow">
                    {{ $servicesPage->eyebrow ?? 'What we do' }}
                </p>

                <h2>
                    {{ $servicesPage->headline ?? 'Courier, logistics & supply services' }}
                </h2>

                <p>
                    {{ $servicesPage->intro
                        ?? 'Every job is quoted based on route, size and urgency; no guesswork, no hidden add-ons.'
                    }}
                </p>

            </div>


            <img
                class="novex-services-photo"
                src="/images/PHOTO-2026-09-03-13-53-40.jpg"
                alt="SJ Novex Package Freight & Logistics"
                loading="lazy"
            >

        </div>


        <div class="novex-service-list">

            @forelse($services as $index => $service)

                <div class="novex-service-row">

                    <div class="novex-service-num">
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </div>

                    <div>

                        <h3>
                            {{ $service->title }}
                        </h3>

                        <p>
                            {{ $service->description }}
                        </p>

                    </div>

                    <div class="novex-service-arrow">
                        →
                    </div>

                </div>

            @empty

                <div class="novex-service-row">

                    <div class="novex-service-num">
                        01
                    </div>

                    <div>

                        <h3>
                            Courier &amp; parcel delivery
                        </h3>

                        <p>
                            Pickup and delivery of parcels and documents
                            across Lagos and nationwide.
                        </p>

                    </div>

                    <div class="novex-service-arrow">
                        →
                    </div>

                </div>


                <div class="novex-service-row">

                    <div class="novex-service-num">
                        02
                    </div>

                    <div>

                        <h3>
                            Transportation &amp; logistics
                        </h3>

                        <p>
                            Scheduled and on-demand transport for goods
                            and business shipments.
                        </p>

                    </div>

                    <div class="novex-service-arrow">
                        →
                    </div>

                </div>

            @endforelse

        </div>


        <div class="novex-pricing-note">

            <p>

                <strong>Pricing:</strong>

                Rates depend on distance, size and urgency,
                you will always know the cost before we move.

            </p>


            <a
                class="novex-btn novex-btn-primary"
                href="{{ $whatsappUrl }}"
                target="_blank"
                rel="noopener"
            >
                Get a quote on WhatsApp
            </a>

        </div>

    </div>

</section>


{{-- =========================================================
     REASSURANCE
========================================================= --}}

<section class="novex-section novex-reassure">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow">
                Why clients stay
            </p>

            <h2>
                No surprises. Just delivery, done properly.
            </h2>

        </div>


        <div class="novex-reassure-grid">


            <div class="novex-reassure-item">

                <div class="novex-reassure-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M20 6 9 17l-5-5"/>
                    </svg>

                </div>

                <h3>
                    Confirmed pickup &amp; delivery times
                </h3>

                <p>
                    We agree a window with you upfront and stick to it,
                    instead of leaving you guessing.
                </p>

            </div>


            <div class="novex-reassure-item">

                <div class="novex-reassure-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M12 2 3 6v6c0 5.25 3.5 9.74 9 11 5.5-1.26 9-5.75 9-11V6z"/>
                    </svg>

                </div>

                <h3>
                    Handled with accountability
                </h3>

                <p>
                    Someone is responsible for your goods at every stage,
                    from pickup to final drop-off.
                </p>

            </div>


            <div class="novex-reassure-item">

                <div class="novex-reassure-icon">

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>

                </div>

                <h3>
                    Always reachable
                </h3>

                <p>
                    A direct WhatsApp line to a real person,
                    no call centres and no automated dead ends.
                </p>

            </div>


        </div>

    </div>

</section>


{{-- =========================================================
     COMPARE SECTION (SJ NOVEX VS TRADITIONAL CARGO)
========================================================= --}}

<section class="novex-section novex-compare" id="compare">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow">
                Why we are different
            </p>

            <h2>
                SJ Novex vs. Traditional Motor-Park Cargo
            </h2>

            <p>
                Say goodbye to chaotic transport terminals, long delays, and lost packages. Experience modern, professional logistics built around your convenience.
            </p>

        </div>

        <div style="overflow-x: auto;">
            <table class="novex-compare-table">
                <thead>
                    <tr>
                        <th>Logistics Feature</th>
                        <th class="highlight">SJ Novex Limited</th>
                        <th>Traditional Cargo Terminals (Chisco, GUO, ABC)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Doorstep Pickup</strong></td>
                        <td class="brand-col"><span class="novex-check-icon">✓ Included</span> (We pick up directly from your home/office)</td>
                        <td><span class="novex-cross-icon">✗ None</span> (You must travel to crowded park terminals)</td>
                    </tr>
                    <tr>
                        <td><strong>Direct Doorstep Delivery</strong></td>
                        <td class="brand-col"><span class="novex-check-icon">✓ Included</span> (Delivered straight to recipient's hands)</td>
                        <td><span class="novex-cross-icon">✗ None</span> (Recipient must travel to destination park to collect)</td>
                    </tr>
                    <tr>
                        <td><strong>Real-Time Updates</strong></td>
                        <td class="brand-col"><span class="novex-check-icon">✓ Direct WhatsApp</span> Updates at every stage</td>
                        <td><span class="novex-cross-icon">✗ Limited</span> No tracking until package arrives at terminal</td>
                    </tr>
                    <tr>
                        <td><strong>Package Care &amp; Handling</strong></td>
                        <td class="brand-col"><span class="novex-check-icon">✓ Dedicated Care</span> Handled individually with security</td>
                        <td><span class="novex-cross-icon">✗ Mixed Freight</span> Stacked under heavy luggage &amp; passenger cargo</td>
                    </tr>
                    <tr>
                        <td><strong>Cross-Border to Ghana</strong></td>
                        <td class="brand-col"><span class="novex-check-icon">✓ Full Service</span> Direct Lagos to Accra logistics</td>
                        <td><span class="novex-cross-icon">✗ Complex</span> Requires multiple transfers &amp; extra agents</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</section>


{{-- =========================================================
     TESTIMONIALS
========================================================= --}}

<section class="novex-section novex-testimonials" id="testimonials">

    <div class="novex-container">

        <div class="novex-section-head">

            <p class="novex-eyebrow" style="color:var(--novex-gold-light);">
                Client Stories
            </p>

            <h2 style="color:var(--novex-white);">
                Trusted by businesses &amp; individuals across Nigeria
            </h2>

            <p style="color:rgba(255,255,255,0.72);">
                Here is what our clients say about our prompt delivery, careful handling, and dependable service.
            </p>

        </div>

        <div class="novex-testi-grid">

            <div class="novex-testi-card">
                <div>
                    <div class="novex-testi-stars">★★★★★</div>
                    <p>"SJ Novex completely changed how I run my e-commerce business in Lagos. My customers get their packages same-day, and I never have to worry about missing items."</p>
                </div>
                <div class="novex-testi-author">
                    <strong>Adekoya Babatunde</strong>
                    <span>E-Commerce Fashion Brand Owner</span>
                </div>
            </div>

            <div class="novex-testi-card">
                <div>
                    <div class="novex-testi-stars">★★★★★</div>
                    <p>"We rely on SJ Novex for urgent corporate document runs and office merchandise supplies between Lagos and Abuja. Extremely professional and dependable."</p>
                </div>
                <div class="novex-testi-author">
                    <strong>Grace Nwachukwu</strong>
                    <span>Corporate Procurement Manager</span>
                </div>
            </div>

            <div class="novex-testi-card">
                <div>
                    <div class="novex-testi-stars">★★★★★</div>
                    <p>"Prompt delivery of ministry materials and event equipment across state lines. Their communication on WhatsApp is top-notch."</p>
                </div>
                <div class="novex-testi-author">
                    <strong>Pastor Emmanuel Oke</strong>
                    <span>Church Operations Director</span>
                </div>
            </div>

            <div class="novex-testi-card">
                <div>
                    <div class="novex-testi-stars">★★★★★</div>
                    <p>"Their cross-border courier service to Accra, Ghana is seamless. Smooth customs clearance and fast delivery. Best logistics team we've worked with."</p>
                </div>
                <div class="novex-testi-author">
                    <strong>Alhaji Farouk Usman</strong>
                    <span>General Merchandise Distributor</span>
                </div>
            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FAQ ACCORDION
========================================================= --}}

<section class="novex-section novex-faq" id="faq">

    <div class="novex-container">

        <div class="novex-section-head" style="margin: 0 auto; text-align:center;">

            <p class="novex-eyebrow">
                Got Questions?
            </p>

            <h2>
                Frequently Asked Questions
            </h2>

            <p style="margin: 10px auto 0;">
                Everything you need to know about our courier pickup, interstate shipping, and cross-border delivery services.
            </p>

        </div>

        <div class="novex-faq-list">

            <div class="novex-faq-item active">
                <div class="novex-faq-question">
                    <span>How fast is courier pickup and delivery in Lagos?</span>
                    <span class="novex-faq-icon">+</span>
                </div>
                <div class="novex-faq-answer">
                    We arrange rapid doorstep pickup across Lagos (Mainland &amp; Island) once you confirm your details on WhatsApp. Depending on urgency, we offer same-day express rider delivery or scheduled next-day drop-offs.
                </div>
            </div>

            <div class="novex-faq-item">
                <div class="novex-faq-question">
                    <span>How does nationwide interstate shipping work?</span>
                    <span class="novex-faq-icon">+</span>
                </div>
                <div class="novex-faq-answer">
                    We pick up your parcels or commercial goods from your location in Lagos and transport them securely to major cities across Nigeria. Your package is tracked throughout transit, and we confirm delivery once received.
                </div>
            </div>

            <div class="novex-faq-item">
                <div class="novex-faq-question">
                    <span>What is the process for Accra, Ghana cross-border delivery?</span>
                    <span class="novex-faq-icon">+</span>
                </div>
                <div class="novex-faq-answer">
                    We provide direct cross-border courier and cargo services from Lagos to Accra, Ghana. We handle package preparation, documentation, and safe transport to ensure your items arrive intact and on schedule.
                </div>
            </div>

            <div class="novex-faq-item">
                <div class="novex-faq-question">
                    <span>How do I get a price quote for my delivery?</span>
                    <span class="novex-faq-icon">+</span>
                </div>
                <div class="novex-faq-answer">
                    Because rates depend on distance, package dimensions, weight, and urgency, simply tap any "Chat on WhatsApp" button on our site. Our dispatch team will give you an instant, straightforward quote with no hidden add-ons.
                </div>
            </div>

            <div class="novex-faq-item">
                <div class="novex-faq-question">
                    <span>Do you offer recurring courier contracts for businesses?</span>
                    <span class="novex-faq-icon">+</span>
                </div>
                <div class="novex-faq-answer">
                    Yes! We partner with SMEs, corporate organizations, e-commerce stores, churches, and institutions for scheduled daily, weekly, or monthly delivery runs with priority dispatch and dedicated billing accounts.
                </div>
            </div>

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.novex-faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.novex-faq-question');
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(otherItem => otherItem.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});
</script>


{{-- =========================================================
     COVERAGE
========================================================= --}}

<section class="novex-section novex-coverage">

    <div class="novex-container">

        <div class="novex-section-head">

            <p
                class="novex-eyebrow"
                style="color:var(--novex-gold-light);"
            >
                Service area
            </p>

            <h2>
                Based in Lagos. Delivering nationwide.
            </h2>

            <p>
                From our Lagos base, we support deliveries across Nigeria
                and provide cross-border service to Accra, Ghana.
            </p>

        </div>


        <div class="novex-coverage-grid">


            <div class="novex-coverage-card">

                <div class="novex-coverage-num">
                    Lagos
                </div>

                <p>
                    Home base:
                    {{ $settings->address ?? 'Jibowu, Lagos State' }}
                </p>

            </div>


            <div class="novex-coverage-card">

                <div class="novex-coverage-num">
                    NG
                </div>

                <p>
                    Nationwide delivery across Nigeria
                </p>

            </div>


            <div class="novex-coverage-card">

                <div class="novex-coverage-num">
                    GH
                </div>

                <p>
                    Cross-border service to Accra, Ghana
                </p>

            </div>


        </div>

    </div>

</section>


{{-- =========================================================
     CONTACT CTA
========================================================= --}}

<section class="novex-section novex-contact" id="contact">

    <div class="novex-container">

        <div class="novex-contact-box">

            <div class="novex-contact-content">

                <p class="novex-eyebrow">
                    {{ $contactPage->eyebrow ?? 'Get in touch' }}
                </p>

                <h2>
                    {{ $contactPage->headline ?? 'Ready to send something?' }}
                </h2>

                <p>
                    {{ $contactPage->intro
                        ?? "Message us on WhatsApp for the fastest response. We'll confirm pickup details and give you a straightforward quote."
                    }}
                </p>

            </div>


            <div class="novex-contact-action">

                <a
                    class="novex-btn novex-btn-primary"
                    href="{{ $whatsappUrl }}"
                    target="_blank"
                    rel="noopener"
                >

                    <svg viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.46 1.32 4.96L2 22l5.29-1.39a9.9 9.9 0 0 1 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2z"/>
                    </svg>

                    Chat with us on WhatsApp

                </a>

            </div>

        </div>

    </div>

</section>


{{-- =========================================================
     FLOATING WHATSAPP
========================================================= --}}

<a
    class="novex-wa-float"
    href="{{ $whatsappUrl }}"
    target="_blank"
    rel="noopener"
    aria-label="Chat on WhatsApp"
>

    <svg viewBox="0 0 24 24" fill="currentColor">

        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.46 1.32 4.96L2 22l5.29-1.39a9.9 9.9 0 0 1 4.75 1.21h.01c5.46 0 9.91-4.45 9.91-9.91C21.96 6.45 17.5 2 12.04 2zm0 18.02h-.01a8.1 8.1 0 0 1-4.13-1.13l-.3-.18-3.14.82.84-3.06-.19-.31a8.11 8.11 0 0 1-1.24-4.34c0-4.49 3.65-8.14 8.15-8.14 4.49 0 8.14 3.65 8.14 8.14 0 4.49-3.65 8.2-8.12 8.2zm4.46-6.1c-.24-.12-1.44-.71-1.67-.79-.22-.08-.39-.12-.55.12-.16.24-.63.79-.78.95-.14.16-.28.18-.53.06-.24-.12-1.02-.38-1.95-1.21-.72-.64-1.2-1.44-1.35-1.68-.14-.24-.02-.37.11-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.55-1.32-.75-1.81-.2-.48-.4-.41-.55-.42h-.47c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2s.86 2.32.98 2.48c.12.16 1.7 2.6 4.13 3.64.58.25 1.03.4 1.38.51.58.18 1.11.16 1.53.1.47-.07 1.44-.59 1.64-1.16.2-.57.2-1.06.14-1.16-.06-.1-.22-.16-.46-.28z"/>

    </svg>

</a>


</div>

@endsection