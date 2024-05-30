<?php

namespace App\Http\Controllers;
use App\Models\LaporanPenjualan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\LaporanPenjualanController;
use App\Models\Laporan;

class InputLaporanController extends Controller
{
    public function index()
    {
        return view('Admin.InputLaporan');
    }
   
      
    public function store(Request $request)
        {
            $validatedData = $request->validate([
                'tanggal' => 'required|date',
                // Add validation rules for other fields
            ]);
    
            // Store data into the database
            Laporan::create($validatedData);
    
            return redirect()->route('Admin.LaporanPenjualanExcel')->with('success', 'Data berhasil disimpan');
        }
    
        public function batal(Request $request)
        {
            // You can implement the logic for canceling the input here
            // For example, clearing form fields or any other necessary action
            return redirect()->back();
        }
    
}
