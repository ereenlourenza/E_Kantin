<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use Illuminate\Routing\Controller;

class KeranjangController extends Controller
{
    public function index()
    {
            // Mengirimkan data ke view 'keranjang' untuk ditampilkan
        return view('Customer.keranjang');
    }

    public function tambah(Request $request)
    {
        // Logic untuk menambahkan item ke keranjang
    }

    public function hapus($id)
    {
        // Logic untuk menghapus item dari keranjang
    }
}
