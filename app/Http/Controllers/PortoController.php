<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use App\Models\PortoCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portos = Porto::with("portocategory")->get();
        // dd($portos);
        return view("admin.portofolio.index", ["portos" => $portos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $porto_categories = PortoCategory::all();
        return view("admin.portofolio.add", ["porto_categories" => $porto_categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form
        $validated = $request->validate([
            "name" => "required",
            "description" => "required",
            "tanggal" => "required",
            "portocategory_id" => "required",
            'image' => 'required|mimes:jpg,jpeg,png|max:5120'

        ]);

        $saveImage['image'] = Storage::putFile('public/image', $request->file('image'));

        // mebnambahkan ke dalam database
        Porto::create([
            "name" => $validated["name"],
            "description" => $validated["description"],
            "tanggal" => $validated["tanggal"],
            "portocategory_id" => $validated["portocategory_id"],
            'image' => $saveImage['image']
        ]);

        // return
        return redirect('/admin/porto');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $porto = Porto::with('portocategory')->findOrFail($id);
        $porto_categories = PortoCategory::all();
        return view('admin.portofolio.edit', ['porto' => $porto, 'porto_categories' => $porto_categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $porto = Porto::findOrFail($id);

        // validasi form
        $validated = $request->validate([
            "name" => "string",
            "description" => "string",
            "tanggal" => "",
            "portocategory_id" => "",
            'image' => 'mimes:jpg,jpeg,png|max:5120' // Menghapus 'required' untuk gambar
        ]);

        // Cek apakah ada unggahan gambar baru
        if ($request->hasFile('image')) {
            // Hapus foto yang lama
            Storage::delete($porto->image);

            // Simpan foto yang baru
            $newImage = ['image' => Storage::putFile('public/image', $request->file('image'))];
        } else {
            // Jika tidak ada gambar baru, gunakan gambar yang sudah ada
            $newImage = ['image' => $porto->image];
        }

        // Update data di database
        Porto::where('id', $id)->update([
            "name" => $validated["name"],
            "description" => $validated["description"],
            "tanggal" => $validated["tanggal"],
            "portocategory_id" => $validated["portocategory_id"],
            'image' => $newImage['image']
        ]);

        return redirect('/admin/porto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Porto::destroy($id);
        return redirect('/admin/porto');
    }
}
