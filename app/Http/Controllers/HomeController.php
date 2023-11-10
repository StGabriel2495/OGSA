<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        return Inertia::render('FrontPages/Home');
    }

    public function about() {
        return Inertia::render('FrontPages/About');
    }

    public function faq() {
        return Inertia::render('FrontPages/Faq');
    }

    public function ressources() {
        return Inertia::render('FrontPages/Ressources');
    }

    public function contact() {
        return Inertia::render('FrontPages/Contact');
    }

    public function glossaire() {
        return Inertia::render('FrontPages/Glossaire');
    }
}
