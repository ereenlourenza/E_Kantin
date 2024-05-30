<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer; // Import the Customer model
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Make sure this matches the view file path
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'namaCustomer' => 'required|string',
            'Nomer_Induk_Mahasiswa' => 'required|string',
            'Nomer_Telepon' => 'required|string|max:12',
            'alamat' => 'required|string',
            'password' => 'required|string|max:5|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $user = new User();
        // $user->username = $request->namaCustomer;
        // $user->nik = $request->Nomer_Induk_Mahasiswa;
        // $user->phone = $request->Nomer_Telepon;
        // $user->password = Hash::make($request->password);
        // $user->save();

        // // Save customer details
        // $customer = new Customer();
        // $customer->user_id = $user->id;
        // $customer->namaCustomer = $request->namaCustomer;
        // $customer->nik = $request->Nomer_Induk_Mahasiswa;
        // $customer->nomorTelepon = $request->Nomer_Telepon;
        // $customer->alamat = $request->alamat;
        // $customer->password = $user->password;
        // $customer->save();

        return redirect()->route('login.Customer');
    }
}
