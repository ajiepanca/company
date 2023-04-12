<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimonial;
// use App\Models\User; 

class HomeController extends Controller
{
    public function index()
    {
        // untuk pasing data agar menjadi web dinamis
        // edit dari admin lte lalu passing ke web
        $sliders = Slider::all();
        $abouts = About::first(); // jika bukan crud maka menggunakan first  
        $services = Service::all();
        $portofolios = Portofolio::all();
        $clients = Client::all();
        $contact = Contact::first();


        return view('home.index', compact( // ditulis agar saat dihome tinggal dipanggil saja
            'sliders',
            'abouts',
            'services',
            'portofolios',
            'clients',
            'contact',
        )); 
        // masuk ke view lalu ke home index.blade.php
    }

    public function about()
    {
        $abouts = About::first();
        $clients = Client::all(); // jika bukan crud maka menggunakan first  
        $teams = Team::all();
        $contact = Contact::first();
        $services = Service::all();

        return view('home.about', compact( // ditulis agar saat dihome tinggal dipanggil saja
            'abouts',
            'contact',
            'clients',
            'teams',
            'services',
        ));
        // masuk ke view lalu ke home index.blade.php
    }

    public function team()
    {
        $teams = Team::all();

        $contact = Contact::first();
        $services = Service::all();
        return view('home.team',compact('teams','contact','services')); 
        // masuk ke view lalu ke home index.blade.php
    }

    public function testimoni()
    {
        $testimonials = Testimonial::all();
        $contact = Contact::first();
        $services = Service::all();
        return view('home.testimoni',compact('testimonials','contact','services')); 
        // masuk ke view lalu ke home index.blade.php
    }

    public function service()
    {
        $services = Service::all();
        $contact = Contact::first();
       
        return view('home.service',compact('services','contact')); 
        // masuk ke view lalu ke home index.blade.php
    }

    public function contact()
    {
        $contact = Contact::first();
       
        $services = Service::all();
        return view('home.contact',compact('contact','services')); 
        // masuk ke view lalu ke home index.blade.php
    }

    public function portofolio()
    {
        $portofolios = Portofolio::all();
        $contact = Contact::first();
        $services = Service::all();
        return view('home.portofolio',compact('portofolios','contact','services')); 
        // masuk ke view lalu ke home index.blade.php
    }
}
