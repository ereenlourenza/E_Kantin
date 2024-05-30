@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

@section('content')
<div class="container">
    <div class="row">
        <div class="left-container">
            <div class="logo-container_A">
                <img src="{{ asset('/img/kantin.png') }}" alt="E Kantin Logo">

                <p class="Kantin">E Kantin</p>
                <p class="Description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mauris odio, pretium quis molestie nec, condimentum ut mauris. Sed orci velit, aliquet tempor semper ut, convallis id ante. Vivamus vitae sapien augue. Nam ac metus nunc. Cras at aliquet leo. Donec vel nisi erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
        </div>
        <div class="right-container">
            <div class="icon-container_B">
                <img src="{{ asset('/img/KampusB.png') }}" alt="Icon 1">
                <img src="{{ asset('/img/JTI.png') }}" alt="Icon 2">
            </div>

            <p class="subtext1">Selamat datang!</p>
            <p class="subtext2">Silahkan masuk terlebih dahulu</p>
            <div class="card">
                <div class="card-body login-form">
                    <p class="subtext3">Anda akan masuk sebagai:</p>
                    <div class="button-container">
                        <button class="btn btn-warning" style="background-color: #DE5D01; color: white;" onclick="redirectTo('{{ route('login.Customer') }}')">Customer</button>
                        <button class="btn btn-warning" style="background-color: #DE5D01; color: white;" onclick="redirectTo('{{ route('login.Admin') }}')">Admin</button>
                    </div>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <input type="text" name="username" placeholder="Nama" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function redirectTo(url) {
        window.location.href = url;
    }
</script>
