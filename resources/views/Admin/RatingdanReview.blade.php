<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/csRWAd.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/navigation.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-QwoTKD26ry9Mhcq2GB9Po8qEZ2krdHqycD1FYH8LdC6U9D4p8WqoTVQ2rj7yb6N" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEpvIGio7NSnZH7eF4haBYoG1tH/Z/" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@section('content')
<div class="header">
    <div class="input-group mb-3">
        <div class="input-group mb-3">
            <div class="icon">E-KANTIN</div>
            <div class="Admin">Admin</div>
        </div>
    </div>
</div>

<div class="sidebar" id="sidebar">
    <button class="openSidebarButton" onclick="showSidebar()"><img src="{{ asset('/img/menu.png') }}" alt="E Kantin Logo"></button>
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


<div class="content">
    <div class="description">Deskripsi Produk</div>

    <div id="product-content">
      <!-- Default content is shown here -->
      <div class="product">
          <div class="product-image">
              <img src="{{ asset('img/tahu isi.jpg') }}" alt="Tahu Isi">
          </div>
          <div class="product-details">
              <div class="card">
                  <div class="product-name">Tahu Isi</div>
                  <div class="product-description">Tahu isi merupakan tahu goreng yang berisi sayur dan bihun</div>
                  <div class="product-rating">
                      <span class="stars">★★★★☆</span>
                  </div>
                  <div class="product-price">Rp 2.500</div>
              </div>
          </div>
      </div>
  
      <div class="review-section">
          <div class="review-title">Rating dan Review Produk</div>
          <div class="review">
              <div class="reviewer">Achmad Rifai Shalehry</div>
              <div class="rating">★★★★★</div>
              <div class="comment">Enak banget, gurih!</div>
          </div>
          <div class="review">
              <div class="reviewer">Siti Nuraisyah</div>
              <div class="rating">★★★☆☆</div>
              <div class="comment">Rasa tahu isinya enak, tapi tahu luarnya agak keras.</div>
          </div>
      </div>
  </div>

    <button class="btn-kembali" onclick="window.location.href='{{ route('Admin.BerandaAdmin') }}'">Kembali</button>
</div>

<footer class="footer">
    <div class="left-icons"></div>
    <div class="right-text">
        ©Kelompok 4-Sistem Informasi E-Kantin Jurusan Teknologi Informasi | D4 Sistem Informasi Bisnis | Politeknik Negeri Malang
    </div>
</footer>

@endsection

@push('scripts')
<script>
    function showMenu(product) {
        let content = '';

        if (product === 'tahu-isi') {
            content = `
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('/img/tahu_isi.jpg') }}" alt="Tahu Isi">
                    </div>
                    <div class="product-details">
                        <div class="card">
                            <div class="product-name">Tahu Isi</div>
                            <div class="product-description">Tahu isi merupakan tahu goreng yang berisi sayur dan bihun</div>
                            <div class="product-rating">
                                <span class="stars">★★★★☆</span>
                            </div>
                            <div class="product-price">Rp 2.500</div>
                        </div>
                    </div>
                </div>

                <div class="review-section">
                    <div class="review-title">Rating dan Review Produk</div>
                    <div class="review">
                        <div class="reviewer">Achmad Rifai Shalehry</div>
                        <div class="rating">★★★★★</div>
                        <div class="comment">Enak banget, gurih!</div>
                    </div>
                    <div class="review">
                        <div class="reviewer">Achmad Rifai Shalehry</div>
                        <div class="rating">★★★★★</div>
                        <div class="comment">Enak banget, gurih!</div>
                    </div>
                </div>
            `;
        } else if (product === 'martabak') {
            content = `
                <div class="product">
                    <div class="product-image">
                        <img src="{{ asset('/img/martabak.jpg') }}" alt="Martabak">
                    </div>
                    <div class="product-details">
                        <div class="card">
                            <div class="product-name">Martabak</div>
                            <div class="product-description">Martabak adalah makanan manis yang diisi dengan coklat, keju, dan kacang</div>
                            <div class="product-rating">
                                <span class="stars">★★★★★</span>
                            </div>
                            <div class="product-price">Rp 15.000</div>
                        </div>
                    </div>
                </div>

                <div class="review-section">
                    <div class="review-title">Rating dan Review Produk</div>
                    <div class="review">
                        <div class="reviewer">Reviewer 3</div>
                        <div class="rating">★★★★☆</div>
                        <div class="comment">Martabaknya lezat.</div>
                    </div>
                    <div class="review">
                        <div class="reviewer">Reviewer 4</div>
                        <div class="rating">★★★★★</div>
                        <div class="comment">Sangat rekomendasi!</div>
                    </div>
                </div>
            `;
        }

        document.getElementById('product-content').innerHTML = content;
    }

    // Load default content
    showMenu('tahu-isi');

    
</script>
@endpush
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
