<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index(){
        $artikels = Artikel::latest();
        // $artikels = Artikel::latest()->get();
        // return view('artikels', compact('artikels'));
        // if(request('artikelSearch')){
        //     $artikels->where('title', 'like', '%' . request('artikelSearch') . '%');
        // }
        return view('artikels', ['artikels' => $artikels->filter()->latest()->get()]);
    }

    public function store(Request $request, $id){
        // $request->validate([]);
        // Validasi request
        $user = User::find($id);
        $request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'title.required' => 'Judul artikel harus diisi.',
            'paragraph.required' => 'Paragraf artikel harus diisi.',
            'category.required' => 'Kategori artikel harus dipilih.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus memiliki format: jpeg, png, jpg, gif, svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ]);

        // Simpan gambar
        $imagePath = $request->file('image')->store('public/gambar');
        $imageName = basename($imagePath);
        // dd($user,$request);
        // Buat artikel
        Artikel::create([
            'title' => $request->title,
            'writer' => $user->username, 
            'paragraph' => $request->paragraph,
            'category' => $request->category,
            'image' => $imageName
        ]);

        // return dd($imagePath, $imageName);

        // Redirect ke dashboard
        return redirect()->intended('dashboard')->with('success', 'Artikel berhasil dibuat!');


    }

    public function delete($id){
        Artikel::destroy($id);
        // return dump($artikelss);
        // return dump($id);
        return redirect()->route('dashboard');
    }

    public function edit($id){
        $artikelEdit = Artikel::find($id);
        return view('editArtikel', compact('artikelEdit'));
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'title' => 'required|string|max:255',
            'paragraph' => 'required|string',
            'category' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        
        $artikel = Artikel::findOrFail($id);

        
        $artikel->title = $request->title;
        $artikel->paragraph = $request->paragraph;
        $artikel->category = $request->category;

        
        if ($request->hasFile('image')) {
            
            Storage::delete('public/gambar/' . $artikel->image);

            
            $imagePath = $request->file('image')->store('public/gambar');
            $artikel->image = basename($imagePath);
        }

        
        $artikel->save();

        
        return redirect()->route('dashboard')->with('success', 'Artikel berhasil diperbarui.');
    
    }

}
