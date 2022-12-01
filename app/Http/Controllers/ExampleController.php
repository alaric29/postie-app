<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    
    public function homepage() {
        // imagine we loaded data from the DB
        $ourName = 'Chris';
        $animals = ['Chinchpig', 'Chowmain', 'Weinerschnitzel'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catsName' => 'BillyBob']);
    }

    /*
    public function homepage() {
        return '<h1>The Best Homepage!</h1><a href="/about">View the super awesome about page</a><br/><a href="/contact">Contact Us!</a><br/><a href="/links">Links</a>';
    }
    */
    public function aboutPage() {
        return view('single-post');
    }

    public function contact() {
        return '<h1>Contact Us</h1><a href="/">Back to homepage</a><br/><a href="/links">Links</a>';
    }

    public function links() {
        return '<h1>Breadcrumbs</h1><a href="/">Home</a><br/><a href="/about">View the super awesome about page</a><br/><a href="/contact">Contact Us!</a>';
    }
    
}
