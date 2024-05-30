@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@section('content')
<div class="container">
    <div class="row">
        <div class="left-container">
            <div class="logo-container_A">
                <img src="{{ asset('/img/kantin.png') }}" alt="E Kantin Logo">
                <p class="Kantin">E Kantin</p>
                <p class="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mauris odio, pretium quis molestie nec, condimentum ut mauris. Sed orci velit, aliquet tempor semper ut, convallis id ante. Vivamus vitae sapien augue. Nam ac metus nunc. Cras at aliquet leo. Donec vel nisi erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="right-container">
            <div class="icon-container_B">
                <img src="{{ asset('/img/KampusB.png') }}" alt="Icon 1">
                <img src="{{ asset('/img/JTI.png') }}" alt="Icon 2">
            </div>

            <p class="subtext">REGISTRASI</p>
            <div class="card">
                <div class="card-body register-form">
                    <form method="POST" action="{{ route('register.post') }}">
                        @csrf
                        <input type="text" name="namaCustomer" placeholder="Nama" required value="{{ old('namaCustomer') }}">
                        @error('namaCustomer')
                            <span>{{ $message }}</span>
                        @enderror

                        <input type="text" name="Nomer_Induk_Mahasiswa" placeholder="NIK" required value="{{ old('Nomer_Induk_Mahasiswa') }}">
                        @error('Nomer_Induk_Mahasiswa')
                            <span>{{ $message }}</span>
                        @enderror
                        
                        <input type="text" name="alamat" placeholder="Alamat" required value="{{ old('alamat') }}">
                        @error('alamat')
                            <span>{{ $message }}</span>
                        @enderror

                        <input type="text" id="Nomer_Telepon" name="Nomer_Telepon" placeholder="NoHp" maxlength="12" required value="{{ old('Nomer_Telepon') }}">
                        @error('Nomer_Telepon')
                            <span>{{ $message }}</span>
                        @enderror

                        <input type="password" name="password" placeholder="Password" required>
                        @error('password')
                            <span>{{ $message }}</span>
                        @enderror

                        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>
                        
                        <p>Anda sudah punya akun? Silahkan <span class="link" onclick="redirectToLogin()">masuk disini</span>.</p>
                        <button type="submit" id="btnDaftar">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    function redirectToLogin() {
        window.location.href = "{{ route('login.Customer') }}";
    }

    document.getElementById('btnDaftar').addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default behavior of the button

        // Manually submit the form
        document.querySelector('form').submit();
    });

    // JavaScript to allow only numeric input
    document.getElementById('Nomer_Telepon').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>
