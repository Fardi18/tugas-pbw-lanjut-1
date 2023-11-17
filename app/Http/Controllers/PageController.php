<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Porto;
use App\Models\PortoCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $portos = Porto::with("portocategory")->orderBy("id", "desc")->paginate(6);
        $blogs = Blog::with("blogcategory")->orderBy("id", "desc")->paginate(6);
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

    public function detailPorto($id)
    {
        $porto = Porto::with("portocategory")->findOrFail($id);
        return view("user.detailportofolio", ["porto" => $porto]);
    }

    public function blog()
    {
        $blogs = Blog::with("blogcategory")->get();
        return view("user.blog", ["blogs" => $blogs]);
    }

    public function detailBlog($id)
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(5);
        $blogcategories = BlogCategory::get();
        $blog = Blog::with("blogcategory")->findOrFail($id);
        return view("user.detailblog", ["blog" => $blog, "blogcategories" => $blogcategories, "blogs" => $blogs]);
    }

    public function contact()
    {
        return view("user.contact");
    }

    public function adminDashboard()
    {
        $portoCategoryCount = PortoCategory::count();
        $portoCount = Porto::count();
        $blogCategoryCount = BlogCategory::count();
        $blogCount = Blog::count();

        return view("admin.dashboard", ['porto_categories' => $portoCategoryCount, 'portos' => $portoCount, 'blog_categories' => $blogCategoryCount, 'blogs' => $blogCount]);
    }
}
