<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function faq()
    {
        return view('faq');
    }

    public function blogHome()
    {
        return view('blog.home');
    }

    public function blogPost()
    {
        return view('blog.post');
    }

    public function portfolioOverview()
    {
        return view('portfolio.overview');
    }

    public function portfolioItem()
    {
        return view('portfolio.item');
    }
}
