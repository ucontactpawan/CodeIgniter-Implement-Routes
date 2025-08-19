<?php 

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        //handle home page logic
        return view('index');
    }

    public function about()
    {
        //handle about page logic
        return view('about');
    }
}