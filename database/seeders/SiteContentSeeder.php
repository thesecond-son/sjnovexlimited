<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Page, Service, ProcessStep, SiteSetting};

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        Page::updateOrCreate(['slug' => 'home'], [
            'title'    => 'Home',
            'eyebrow'  => 'Courier · Logistics · Supply — Nationwide',
            'headline' => 'Your goods, handled with care and delivered on time, every time.',
            'intro'    => 'SJ Novex Limited moves parcels, documents and business goods across Nigeria - fast, safe and dependable, from first pickup to final delivery.',
            'meta_title' => 'SJ Novex Limited | Logistics, Courier & Supply Services Nigeria',
            'meta_description' => 'SJ Novex Limited provides logistics, courier, procurement and supply services across Nigeria and Ghana.',
        ]);

        Page::updateOrCreate(['slug' => 'about'], [
            'title'    => 'About',
            'eyebrow'  => 'About us',
            'headline' => 'Reliable delivery, from pickup to doorstep',
            'intro'    => 'SJ Novex Limited is a reliable courier and logistics company committed to providing fast, safe and dependable delivery services across Nigeria and to Accra, Ghana.',
            'body'     => "SJ Novex Limited is a reliable courier and logistics company committed to providing fast, safe and dependable delivery services across Nigeria and to Accra, Ghana. We specialise in the pickup, transportation and delivery of parcels, documents and business goods, handled with professionalism and care from start to finish.\n\nBeyond courier work, we support businesses and organisations with transportation, general merchandise supply, contracting, and buying-and-selling services; giving clients a single, dependable partner for logistics and supply needs.\n\nOur mission is simple: every package reaches its destination securely and on time, backed by excellent customer service. Your trust is our priority, and every delivery matters.",
            'meta_title' => 'About SJ Novex Limited | Logistics Company in Lagos',
            'meta_description' => 'Learn about SJ Novex Limited, a Lagos-based courier and logistics company serving businesses and individuals across Nigeria and Accra, Ghana.',
        ]);

        Page::updateOrCreate(['slug' => 'services'], [
            'title'    => 'Services',
            'eyebrow'  => 'What we do',
            'headline' => 'Courier, logistics & supply services',
            'intro'    => 'Every job is quoted based on route, size and urgency — reach out on WhatsApp for a quick, accurate quote.',
            'meta_title' => 'Our Services | Courier & Logistics | SJ Novex Limited',
            'meta_description' => 'Courier and parcel delivery, transportation, general merchandise supply, contracting and trade support — nationwide from SJ Novex Limited, Lagos.',
        ]);

        Page::updateOrCreate(['slug' => 'contact'], [
            'title'    => 'Contact',
            'eyebrow'  => 'Get in touch',
            'headline' => 'Ready to send something?',
            'intro'    => "Message us on WhatsApp for the fastest response — we'll confirm pickup details and give you a quote.",
            'meta_title' => 'Contact SJ Novex Limited | Lagos Courier & Logistics',
            'meta_description' => 'Reach SJ Novex Limited on WhatsApp, phone or email for courier, logistics and supply enquiries across Nigeria.',
        ]);

        $services = [
            [
                'Courier & parcel delivery',
                'Reliable pickup and door-to-door delivery for parcels, documents and small shipments across Lagos and nationwide. We coordinate collection, transit and delivery around your preferred timeline.',
                'truck'
            ],
        
            [
                'Transportation & logistics',
                'Move goods with a transportation solution planned around your route, shipment size and urgency. Suitable for business shipments, scheduled movements and on-demand logistics needs.',
                'map'
            ],
        
            [
                'General merchandise supply',
                'Need goods sourced or supplied for your business or organisation? We help coordinate the buying, sourcing and supply of general merchandise according to your requirements.',
                'cube'
            ],
        
            [
                'General contracting',
                'Professional contracting support for organisations and businesses, with an emphasis on dependable execution, clear communication and getting the required work completed properly.',
                'wrench-screwdriver'
            ],
        
            [
                'Buying & selling / trade services',
                'Support for buying, selling and trade transactions, helping individuals and businesses coordinate commercial requirements with a practical and reliable approach.',
                'arrows-right-left'
            ],
        ];
        foreach ($services as $i => [$title, $desc, $icon]) {
            Service::updateOrCreate(['title' => $title], [
                'description' => $desc, 'icon' => $icon, 'sort_order' => $i,
            ]);
        }

        $steps = [
            [
                'We pick up',
                'Message us your pickup details on WhatsApp and we arrange collection at your location.'
            ],
            [
                'In transit',
                'Your goods move on our planned routes across Lagos, nationwide, or to Accra, Ghana.'
            ],
            [
                'Delivered',
                'Safe, on-time delivery with confirmation — every package, every time.'
            ],
        ];
        foreach ($steps as $i => [$title, $desc]) {
            ProcessStep::updateOrCreate(
                ['title' => $title],
                [
                    'description' => $desc,
                    'sort_order' => $i,
                ]
            );
        }

        SiteSetting::updateOrCreate(['id' => 1], [
            'business_name' => 'SJ Novex Limited',
            'logo_path' => 'images/logo.png',
            'phone' => '+234 803 135 1449',
            'whatsapp_number' => '2348031351449',
            'whatsapp_default_message' => "Hi, I found your website and I'd like to enquire about your services.",
            'email' => 'samsonosas2000@gmail.com',
            'address' => 'Jibowu, Lagos State, Nigeria',
            'service_area' => 'Nationwide Nigeria + Accra, Ghana',
            'facebook_url' => 'https://www.facebook.com/profile.php?id=61591409323974',
            'instagram_url' => 'https://www.instagram.com/sjnovexlimited',
            'tiktok_url_personal' => 'https://www.tiktok.com/@samson.james13',
            'tiktok_url_business' => 'https://www.tiktok.com/@sjnovexlimitedgmail.com',
        ]);
    }
}