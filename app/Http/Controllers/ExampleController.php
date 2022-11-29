<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        return '<h1>The Best Homepage!</h1><a href="/about">View the super awesome about page</a><br/><a href="/contact">Contact Us!</a>';
    }

    public function aboutPage() {
        return '<h1>About Page</h1><a href="/">Back to home</a>';
    }

    public function contact() {
        return '<h1>Contact Us</h1><a href="/">Back to homepage</a>';
    }
}
