<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/csRW.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/word.js.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@section('content')
<div class="header">
  <div class="input-group mb-3">
    <div class="icon">E-KANTIN</div>
    <input id="searchInput" type="text" class="form-control input-text" placeholder="Cari menu yang anda cari di sini!" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="iconF">
      <a href="{{ route('Customer.RiwayatTransaksi') }}">
        <img src="{{ asset('/img/lists.png') }}" alt="list" style="width: 55px; height: 55px;">
      </a>
      <a href="{{ route('Customer.keranjang') }}">
        <img src="{{ asset('/img/check-out.png') }}" alt="cart" style="width: 55px; height: 55px;">
      </a>
    </div>
    </div>
  </div>
</div>
    
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <button class="openSidebarButton" onclick="showSidebar()"> <img src="{{ asset('/img/menu.png') }}" alt="E Kantin Logo">
      </button>
      <div class="sidebar-content">
        <div class="customer-icon">
          <img src="{{ asset('/img/user.png') }}" alt="Icon 2">
          
        </div>
        <span class="customer-name">Achmad</span>
        <button class="menu-button" onclick="goToRoute('homepage')">Semua Menu</button>
        <button class="menu-button" onclick="showAbout()">Tentang Kami</button>
        <button class="menu-button3" onclick="logout()">Keluar Akun</button>
      </div>
    </div>
<!-- Main content of your page -->
<div class="content">
  <div class="description">Rating dan Review</div>
  <span class="selamat">Ini Rating dan Review anda</span>
  <div class="card">
    <img src="{{ asset('/img/tahu isi.jpg') }}" alt="Tahu isi">
    <div class="detail-produk">
      <div class="nama-produk">Tahu isi</div>
      <div class="jumlah">
        <div class="jumlah">
            <span>2</span>
          </div>
      </div>
    </div>
    <div class="harga-dan-hapus">
      <div class="harga">Rp 5.000</div>
    </div>
    <div class="Total">
      <div class="Total-harga-ds">Total Harga</div>
      <div class="Total-harga">Rp 5.000</div>
    </div>
 <div class="cardPesan">
    {{-- <form id="pesanForm" action="{{ route('Customer.kirim_pesan') }}" method="post"> --}}
      @csrf
      <span class="tulisan-produk">Kepuasan produk :</span>
      <div class="rating">
          <span class="star" onclick="rateProduct(1)">☆</span>
          <span class="star" onclick="rateProduct(2)">☆</span>
          <span class="star" onclick="rateProduct(3)">☆</span>
          <span class="star" onclick="rateProduct(4)">☆</span>
          <span class="star" onclick="rateProduct(5)">☆</span>
      </div>
      <span class="tulisan-pesan">Review produk :</span>
      <div class="textarea-container">
        <textarea id="pesanTextarea" name="pesan" placeholder="(Opsional) Tinggalkan pesan ke penjual"></textarea>
        <div id="wordCount" class="word-count">0/100 kata</div>
      </div>
      <button type="submit" class="pesan-button">Beli lagi</button>
    </form>

    {{-- <span class="tulisan-pesan">Review produk :</span> --}}
</div>
</div>
<button class="kembali-button">Kembali</button>
</div>
  {{-- Footer --}}
    <footer class="footer">
      <div class="left-icons">
        {{-- <img src="{{ asset('/img/KampusB.png') }}" alt="Icon 1"> 
      <img src="{{ asset('/img/JTI.png') }}" alt="Icon 2"> --}}
       </div>
      <div class="right-text">
        ©Kelompok 4-Sistem Informasi E-Kantin Jurusan Teknologi Informasi | D4 Sistem Informasi Bisnis | Politeknik Negeri Malang
      </div>
    </footer>
  </body>
    
  <script>
    // Fungsi untuk mengarahkan pengguna ke rute yang sesuai
    function goToRoute(routeName) {
        switch(routeName) {
            case 'homepage':
                window.location.href = '/homepage';
                break;
            case 'LaporanPenjualan':
                window.location.href = '/LaporanPenjualan';
                break;
            case 'InputLaporan':
                window.location.href = '/InputLaporan';
                break;
            case 'KelolaPesanan':
                window.location.href = '/KelolaPesanan';
                break;
            case 'KelolaAkunCustomer':
                window.location.href = '/KelolaAkunCustomer';
                break;
            default:
                break;
        }
    }
    
    // Fungsi untuk logout
    function logout() {
        window.location.href = '/Logout';
    }

    function rateProduct(rating) {
        // Di sini, Anda dapat menambahkan logika untuk menyimpan nilai rating ke database atau melakukan tindakan lain sesuai kebutuhan
        console.log('Rating:', rating);
        // Misalnya, jika Anda ingin mengirim rating ke backend, Anda dapat menggunakan AJAX.
        // Contoh: $.post('/api/rating', { rating: rating });
        // Anda juga bisa mengirimkan rating ke form tersembunyi dan mengirimkannya saat form disubmit.
    }
    </script>  
