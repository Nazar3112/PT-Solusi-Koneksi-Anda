<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\Service;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Contact;

class PageController extends Controller
{
    public function home()
    {
        $profile = CompanyProfile::first();
        $services = Service::latest()->take(3)->get();
        $articles = Article::latest()->take(3)->get();
        $galleries = Gallery::latest()->take(4)->get();
        return view('home', compact('profile', 'services', 'articles', 'galleries'));
    }

    public function profile()
    {
        $profile = CompanyProfile::first();
        return view('profile', compact('profile'));
    }

    public function services()
    {
        $services = Service::latest()->get();
        return view('services', compact('services'));
    }

    public function articles()
    {
        $articles = Article::latest()->paginate(9);
        return view('articles', compact('articles'));
    }

    public function articleShow($id)
    {
        $article = Article::findOrFail($id);
        return view('article_show', compact('article'));
    }

    public function gallery()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('gallery', compact('galleries'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('contact', compact('contact'));
    }
}
