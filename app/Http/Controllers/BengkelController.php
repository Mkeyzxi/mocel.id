<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bengkel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BengkelController extends Controller
{
    public function index(){



        $dataUser = User::all();
        $dataBengkels = Bengkel::latest();
        return view('bengkels', ['dataBengkels' => $dataBengkels->filter()->paginate(4), 'dataUser' => $dataUser]);
    }

    

    public function store(Request $request){
        $request->validate([
            'workshop_name' => 'required',
            'address' => 'required',
            'rating' => 'required',
            'ability' => 'required',
            'google_maps' => 'required',
            'city' => 'required',
            'workshop_category' => 'required',
            'workshop_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'workshop_number' => 'required|string|max:14|min:10',
        ], [
            'workshop_name.required' => 'Kolom nama bengkel harus diisi.',
            'address.required' => 'Kolom alamat bengkel harus diisi.',
            'rating.required' => 'Kolom rating bengkel harus diisi.',
            'ability.required' => 'Kolom kemampuan bengkel harus diisi.',
            'google_maps.required' => 'Kolom Google Maps bengkel harus diisi.',
            'city.required' => 'Kolom kota bengkel harus diisi.',
            'workshop_category.required' => 'Kolom kategori bengkel harus diisi.',
            'workshop_image.required' => 'Kolom gambar bengkel harus diisi.',
            'workshop_image.image' => 'Kolom gambar bengkel harus berupa gambar.',
            'workshop_image.mimes' => 'Kolom gambar bengkel harus berformat :values.',
            'workshop_image.max' => 'Kolom gambar bengkel tidak boleh lebih dari :max KB.',
            'workshop_number.required' => 'Kolom nomor telepon bengkel harus diisi.',
            'workshop_number.string' => 'Kolom nomor telepon bengkel harus berupa teks.',
            'workshop_number.max' => 'Nomor telepon tidak boleh lebih dari :max karakter.',
            'workshop_number.min' => 'Nomor telepon tidak boleh lebih kecil :min karakter.',
        ]);
        
        $imagePath = $request->file('workshop_image')->store('public/gambar_bengkel');
        $imageName = basename($imagePath);
        
        Bengkel::create([
            'workshop_name' => $request->workshop_name,
            'address' => $request->address,
            'rating' => $request->rating,
            'ability' => $request->ability,
            'google_maps' => $request->google_maps,
            'city' => $request->city,
            'workshop_category' => $request->workshop_category,
            'workshop_image' => $imageName,
            'workshop_number' => $request->workshop_number,
        ]);

        
        return redirect()->intended('dashboard')->with('success', 'Bengkel berhasil dibuat!');

    }

    public function delete($id){
        Bengkel::destroy($id);
        return redirect()->route('dashboard');
    }

    public function edit($id){
        $bengkelEdit = Bengkel::findOrFail($id);
        return view('editBengkel', compact('bengkelEdit'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'workshop_name' => 'required|string|max:255',
            'address' => 'required|string',
            'rating' => 'required|numeric',
            'ability' => 'required|string',
            'google_maps' => 'required|string',
            'city' => 'required|string',
            'workshop_category' => 'required|string',
            'workshop_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'workshop_number' => 'required|string|max:14|min:10',
        ],[
            'workshop_name.required' => 'Nama bengkel harus diisi.',
            'workshop_name.string' => 'Nama bengkel harus berupa teks.',
            'workshop_name.max' => 'Nama bengkel tidak boleh lebih dari 255 karakter.',
            'address.required' => 'Alamat bengkel harus diisi.',
            'address.string' => 'Alamat bengkel harus berupa teks.',
            'rating.required' => 'Rating bengkel harus diisi.',
            'rating.numeric' => 'Rating bengkel harus berupa angka.',
            'ability.required' => 'Kemampuan bengkel harus diisi.',
            'ability.string' => 'Kemampuan bengkel harus berupa teks.',
            'google_maps.required' => 'Link Google Maps bengkel harus diisi.',
            'google_maps.string' => 'Link Google Maps bengkel harus berupa teks.',
            'city.required' => 'Kota bengkel harus diisi.',
            'city.string' => 'Kota bengkel harus berupa teks.',
            'workshop_category.required' => 'Kategori bengkel harus diisi.',
            'workshop_category.string' => 'Kategori bengkel harus berupa teks.',
            'workshop_image.image' => 'File harus berupa gambar.',
            'workshop_image.mimes' => 'Gambar harus memiliki format: jpeg, png, jpg, gif, svg.',
            'workshop_image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'workshop_number.required' => 'Kolom nomor telepon bengkel harus diisi.',
            'workshop_number.string' => 'Kolom nomor telepon bengkel harus berupa teks.',
            'workshop_number.max' => 'Nomor telepon tidak boleh lebih dari :max karakter.',
            'workshop_number.min' => 'Nomor telepon tidak boleh lebih kecil :min karakter.',
        ]);

        $bengkel = Bengkel::findOrFail($id);

        $bengkel->workshop_name = $request->workshop_name;
        $bengkel->address = $request->address;
        $bengkel->rating = $request->rating;
        $bengkel->ability = $request->ability;
        $bengkel->google_maps = $request->google_maps;
        $bengkel->city = $request->city;
        $bengkel->workshop_category = $request->workshop_category;


        // if ($request->hasFile('workshop_image')) {
    
        //     Storage::delete('public/gambar_bengkel' . $bengkel->workshop_image);

    
        //     $imagePath = $request->file('workshop_image')->store('public/gambar_bengkel');
        //     $bengkel->workshop_image = basename($imagePath);
        // }

        if ($request->hasFile('workshop_image')) {
            // Menghapus gambar lama jika ada
            if ($bengkel->workshop_image) {
                Storage::delete('public/gambar_bengkel/' . $bengkel->workshop_image);
            }
        
            // Menyimpan gambar baru
            $imagePath = $request->file('workshop_image')->store('public/gambar_bengkel');
            $bengkel->workshop_image = basename($imagePath);
        }


        $bengkel->save();


        return redirect()->route('dashboard')->with('success', 'Bengkel berhasil diperbarui.');
    
    }
}
