<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsitePagesController extends Controller
{
    //
    public function homePage() {
        return view("website.home");
    }

    public function aboutPage() {
        return view("website.about");
    }

    public function contactsPage() {
        return view("website.contacts");
    }
}
