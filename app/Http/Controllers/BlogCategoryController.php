<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $blogcategories = BlogCategory::all();
        return view("admin.blogcategory.index", ["blogcategories" => $blogcategories]);
    }

    public function create()
    {
        return view("admin.blogcategory.add");
    }

    public function store(Request $request)
    {
        // validasi form
        $validated = $request->validate([
            "name" => "required",
        ]);

        // mebnambahkan ke dalam database
        BlogCategory::create([
            "name" => $validated["name"],
        ]);

        // return
        return redirect('/admin/blogcategory');
    }

    public function show(string $id)
    {
        $blogcategory = BlogCategory::findOrFail($id);
        return view("admin.blogcategory.edit", ["blogcategory" => $blogcategory]);
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        BlogCategory::where('id', $id)->update([
            'name' => $validated['name'],
        ]);

        return redirect('/admin/blogcategory');
    }

    public function destroy(string $id)
    {
        BlogCategory::destroy($id);
        return redirect('/admin/blogcategory');
    }
}
