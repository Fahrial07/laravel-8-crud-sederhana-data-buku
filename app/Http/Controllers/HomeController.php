<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class HomeController extends Controller
{
    public function index()
    {
        $buku = Buku::get();
        $data = array(
            'title' => 'Data Buku',
            'data'  => $buku
        );
        return view('home', $data);
    }
}
