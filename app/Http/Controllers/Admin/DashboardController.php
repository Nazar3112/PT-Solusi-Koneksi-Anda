<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $servicesCount = Service::count();
        $articlesCount = Article::count();
        $galleriesCount = Gallery::count();

        return view('admin.dashboard', compact('servicesCount', 'articlesCount', 'galleriesCount'));
    }
}
