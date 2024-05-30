<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/adBerandaAdmin.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/word.js.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@section('content')
  <div class="header">
    <div class="input-group mb-3">
      <div class="icon">E-KANTIN</div>
      <div class="Admin">Admin</div>
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
        <div class="description">HI. AHMAD MAULANA DANI AKBAR!!</div>
          <span class="selamat">Selamat Datang di E-Kantin Jurusan Teknologi Informasi</span>
          <table class="product-table">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok Awal</th>
                    <th>Rating dan Review</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="img/tahu isi.jpg" alt="Tahu Isi"></td>
                    <td>Tahu Isi</td>
                    <td>Gorengan</td>
                    <td>Rp2.500</td>
                    <td>50 pcs</td>
                    <td><a href="{{ route('Admin.RatingdanReview') }}">4.9/5<br>Lihat review</a></td>
                    <td><button class="status-btn">Ready</button></td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td><img src="img/martabak.jpg" alt="Martabak"></td>
                    <td>Martabak</td>
                    <td>Gorengan</td>
                    <td>Rp2.500</td>
                    <td>50 pcs</td>
                    <td><a href="{{ route('Admin.RatingdanReview') }}">4.6/5<br>Lihat review</a></td>
                    <td><button class="status-btn">Ready</button></td>
                    <td>
                        <button class="edit-btn">Edit</button>
                        <button class="delete-btn">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button class="add-btn" onclick="window.location.href='{{ route('Admin.TambahProduct') }}'">Tambah</button>
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
    </script>  
