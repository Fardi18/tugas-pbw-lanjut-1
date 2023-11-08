<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Porto;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $portos = Porto::with("portocategory")->get();
        $blogs = Blog::with("blogcategory")->get();
        return view("user.home", ["portos" => $portos, "blogs" => $blogs]);
    }

    public function about()
    {
        return view("user.about");
    }

    public function service()
    {
        return view("user.service");
    }

    public function portofolio()
    {
        $portos = Porto::with("portocategory")->get();
        return view("user.portofolio", ["portos" => $portos]);
    }

    public function blog()
    {
        $blogs = Blog::with("blogcategory")->get();
        return view("user.blog", ["blogs" => $blogs]);
    }

    public function contact()
    {
        return view("user.contact");
    }

    public function adminDashboard()
    {
        return view("admin.dashboard");
    }
}
