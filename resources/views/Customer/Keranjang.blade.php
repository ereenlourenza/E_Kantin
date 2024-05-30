@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/csKeranjang.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/ceklist.js"></script>
<script type="text/javascript" src="/js/box.js"></script>
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
  <div class="description">Keranjang Anda</div>
  <span class="selamat">Ini isi keranjang anda, yuk segera di pesan!</span>
  
  <div class="card" data-card-id="1">
    <div class="cek-list">
      <button class="cek-button" onclick="ubahWarna()"></button>
    </div>
    <img src="{{ asset('/img/tahu isi.jpg') }}" alt="Martabak">
    <div class="detail-produk">
      <div class="nama-produk">Tahu isi</div>
      <div class="jumlah">
        <button onclick="kurangiData()">-</button>
        <span id="quantity">1</span>
        <button onclick="tambahData()">+</button>
      </div>
      <div class="harga-dan-hapus">
        <div id="harga" class="harga">Rp 2.500</div>
        <button class="hapus">hapus</button>
      </div>
    </div>
  </div>
  <button id="pesanButton" class="pesan">Pesan</button>
  <button class="kembali-button">Kembali</button>
</div>

<!-- Footer -->
<footer class="footer">
  <div class="left-icons"></div>
  <div class="right-text">
    ©Kelompok 4-Sistem Informasi E-Kantin Jurusan Teknologi Informasi | D4 Sistem Informasi Bisnis | Politeknik Negeri Malang
  </div>
</footer>

<script>
  function goToRoute(routeName) {
    switch(routeName) {
      case 'homepage':
        window.location.href = '/homepage';
        break;
      case 'pesanan':
        window.location.href = '/pesanan';
        break;
      case 'description':
        window.location.href = '/description';
        break;
      case 'pembayaran':
        window.location.href = '/pembayaran';
        break;
    }
  }

  function logout() {
    window.location.href = '/Logout';
  }

  const kembaliButton = document.querySelector('.kembali-button');
  kembaliButton.addEventListener('click', function() {
    window.location.href = '/homepage';
  });

  function tambahData() {
    var quantityElement = document.getElementById("quantity");
    var hargaElement = document.getElementById("harga");

    var quantity = parseInt(quantityElement.innerText);
    var harga = 2500;

    quantity++;
    quantityElement.innerText = quantity;
    hargaElement.innerText = 'Rp ' + (harga * quantity).toLocaleString();
  }

  function kurangiData() {
    var quantityElement = document.getElementById("quantity");
    var hargaElement = document.getElementById("harga");

    var quantity = parseInt(quantityElement.innerText);
    var harga = 2500;

    if (quantity > 1) {
      quantity--;
      quantityElement.innerText = quantity;
      hargaElement.innerText = 'Rp ' + (harga * quantity).toLocaleString();
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.hapus').forEach(function(button) {
      button.addEventListener('click', function () {
        var card = button.closest('.card');
        if (card) {
          card.remove();
        }
      });
    });
  });

    // Add event listener for the "Pesan" button
    const pesanButton = document.getElementById('pesanButton');
  pesanButton.addEventListener('click', function() {
    window.location.href = '{{ route("Customer.pesanan") }}';
  });
</script>
@endsection
