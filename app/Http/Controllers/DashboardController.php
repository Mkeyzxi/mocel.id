<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Bengkel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $dataUser = User::all();
        $dataArtikel = Artikel::all();
        $dataBengkel = Bengkel::all();
        return view('dashboard', compact(['dataUser','dataArtikel','dataBengkel']));
    }


}
