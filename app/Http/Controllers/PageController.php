<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\ProcessStep;
use App\Models\SiteSetting;
use App\Models\Service;

class PageController extends Controller
{
    public function home()
    {
        $page = Page::where('slug', 'home')->firstOrFail();

        $aboutPage = Page::where('slug', 'about')->first();
    
        $servicesPage = Page::where('slug', 'services')->first();
    
        $contactPage = Page::where('slug', 'contact')->first();
    
        $settings = SiteSetting::first();
    
        $steps = ProcessStep::orderBy('sort_order')->get();
    
        $services = Service::orderBy('sort_order')->get();
    
        return view('pages.home', compact(
            'page',
            'aboutPage',
            'servicesPage',
            'contactPage',
            'settings',
            'steps',
            'services'
        ));
    }

    public function about()
    {
        $page = Page::where('slug', 'about')->firstOrFail();
        $settings = SiteSetting::current();
        return view('pages.about', compact('page', 'settings'));
    }

    public function services()
    {
        $page = Page::where('slug', 'services')->firstOrFail();
        $steps = ProcessStep::orderBy('sort_order')->get();
        $services = Service::where('is_active', true)->orderBy('sort_order')->get();
        $settings = SiteSetting::current();
        return view('pages.services', compact('page', 'steps', 'services', 'settings'));
    }

    public function contact()
    {
        $page = Page::where('slug', 'contact')->firstOrFail();
        $settings = SiteSetting::current();
        return view('pages.contact', compact('page', 'settings'));
    }
}
