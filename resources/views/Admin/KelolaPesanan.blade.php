@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/adKelolaPesanan.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/word.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@section('content')
  <div class="header">
    <div class="input-group mb-3">
      <div class="icon">E-KANTIN</div>
      <div class="Admin">Admin</div>
    </div>
  </div>            

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <button class="openSidebarButton" onclick="showSidebar()"> <img src="{{ asset('/img/menu.png') }}" alt="E Kantin Logo"></button>
    <div class="sidebar-content">
      <div class="customer-icon">
        <img src="{{ asset('/img/user.png') }}" alt="Icon 2">
      </div>
      <span class="customer-name">Admin</span>
      <button class="menu-button" onclick="goToRoute('BerandaAdmin')">Semua Menu</button>
      <button class="menu-button" onclick="goToRoute('LaporanPenjualan')">Laporan penjualan</button>
      <button class="menu-button" onclick="goToRoute('InputLaporan')">Input laporan penjualan</button>
      <button class="menu-button" onclick="goToRoute('KelolaPesanan')">Kelola pesanan</button>
      <button class="menu-button" onclick="goToRoute('KelolaAkunCustomer')">Kelola akun customer</button>
      <button class="menu-button3" onclick="logout()">Keluar Akun</button>
    </div>
  </div>

  <!-- Main content of your page -->
  <div class="content">
    <div class="description">Hi, Admin!</div>
    <span class="selamat">Selamat Datang di E-Kantin Jurusan Teknologi Informasi</span>
    <div class="tablecs">
      <table>
        <thead>
          <tr>
            <th>Nama Customer</th>
            <th>Nama Produk</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Jumlah Pesanan</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Achmad</td>
            <td>Tahu Isi</td>
            <td>Gorengan</td>
            <td>Rp5.000</td>
            <td>2 pcs</td>
            <td><button class="btn-status">Ready</button></td>
            <td>
              <button class="btn-terima">Terima</button>
              <button class="btn-tolak">Tolak</button>
            </td>
          </tr>
         
        </tbody>
      </table>
    </div>
    
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
@endsection

<script>
  const kembaliButton = document.querySelector('.kembali-button');
  kembaliButton.addEventListener('click', function() {
    window.location.href = '/BerandaAdmin'; 
  });

  function goToRoute(routeName) {
    switch(routeName) {
      case 'BerandaAdmin':
        window.location.href = '/BerandaAdmin';
        break;
      case 'LaporanPenjualan':
        window.location.href = '/LaporanPenjualan/table';
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
 // Fungsi untuk menangani klik tombol "Terima"
 function terimaPesanan(idPesanan) {
    // Kirim permintaan AJAX ke endpoint untuk menambahkan data penjualan
    // Anda perlu mengganti 'url_endpoint' dengan URL sebenarnya untuk endpoint server Anda
    fetch(`/api/tambah-penjualan/${idPesanan}`, {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Jika Anda menggunakan Laravel, gunakan csrf_token() untuk token CSRF
      }
    })
    .then(response => {
      if (!response.ok) {
        throw new Error('Gagal menambahkan data penjualan');
      }
      // Refresh halaman setelah berhasil menambahkan data penjualan
      window.location.reload();
    })
    .catch(error => {
      console.error('Error:', error);
      alert('Gagal menambahkan data penjualan');
    });
  }
  
</script>
