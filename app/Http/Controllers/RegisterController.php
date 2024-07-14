<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $data = User::all();
        return view('buatAkun', compact('data'));
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'phone_number' => 'required|string|max:15|unique:users',
            'Conditions' => 'required',
            // 'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'username.required' => 'Nama pengguna harap diisi',
            'email.required' => 'Email harap diisi',
            'password.required' => 'Kata sandi harap diisi',
            'phone_number.required' => 'Nomor Telepon harap diisi',
            'username.max' => 'Nama pengguna maximal karakter 255',
            'email.max' => 'Email maximal karakter 255',
            'phone_number.max' => 'Nomor maximal karakter 15 karakter',
            'email.unique' => 'Email telah terdaftar!',
            'phone_number.unique' => 'Nomor telepon telah terdaftar',
            // 'phone_number.number' => 'Nomor telepon harus berupa angka',
            'Conditions.required' => 'Centang untuk menyetujui persyaratan',
            'passwprd.min' => 'Passowrd minimal 5 Karakter'
        ]);
        

        $akunBaru = new User();
        $akunBaru->username = $request->username;
        $akunBaru->email = $request->email;
        $akunBaru->password = Hash::make($request->password);
        $akunBaru->phone_number = $request->phone_number;

        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
            $filePath = $file->store('public/gambar');
            $akunBaru->profile = $filePath;
        }

        $akunBaru->save();
        
        return redirect('/login');
    }
}
