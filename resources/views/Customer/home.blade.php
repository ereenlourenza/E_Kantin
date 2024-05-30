<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/cshomepage.css') }}">
<script type="text/javascript" src="/js/sidebar.js"></script>
<script type="text/javascript" src="/js/navigation.js"></script>
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
      <div class="description">HI. AHMAD MAULANA DANI AKBAR!!</div>
        <span class="selamat">Selamat Datang di E-Kantin Jurusan Teknologi Informasi</span>
        <div class="container">
          <div class="card-box">
            <div class="rekMenu">REKOMENDASI MENU</div>
              <div class="menu-grid">
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/tahu isi.jpg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Tahu isi</h2>
                      <p class="price">Rp2,500</p>
                  </div>
                      <p>Tahu isi ini berisi isian daging yang sangat gurih dan lezat. <a href="#" class="expand-link" onclick="expandDescription(this)">Selengkapnya</a></p>
                  <div class="rating-and-pesan">
                    <div class="rating">★★★★★</div>
                    <button class="pesan-button" onclick="redirectToKeranjang()">Pesan</button>
                  </div>
                  </div>
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/Sosis solo.jpeg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Sosis solo</h2>
                      <p class="price">Rp10,000</p>
                  </div>
                      <p>Sosis Solo adalah makanan khas Solo yang berbahan dasar daging sapi cincang.</p>
                      <div class="rating-and-pesan">
                        <div class="rating">★★★★★</div>
                        <button class="pesan-button">Pesan</button>
                      </div>
                  </div>
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Martabak</h2>
                      <p class="price">Rp10,000</p>
                   </div>
                      <p>Martabak adalah hidangan berupa nasi yang digoreng dengan bumbu khas.</p>
                  <div class="rating-and-pesan">
                    <div class="rating">★★★★★</div>
                    <button class="pesan-button">Pesan</button>
                  </div>
                  </div>
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Ayam Goreng</h2>
                      <p class="price">Rp10,000</p>
                  </div>
                      <p>Martabak ini sangat enak dengan isian coklat dan keju yang meleleh.</p>
                  <div class="rating-and-pesan">
                    <div class="rating">★★★★★</div>
                    <button class="pesan-button">Pesan</button>
                  </div>
                  </div>
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Martabak</h2>
                      <p class="price">Rp10,000</p>
                  </div>
                      <p>Tahu isi ini berisi isian daging yang sangat gurih dan lezat. <a href="#" class="expand-link" onclick="expandDescription(this)">Selengkapnya</a></p>
                  <div class="rating-and-pesan">
                    <div class="rating">★★★★★</div>
                    <button class="pesan-button">Pesan</button>
                  </div>
                  </div>
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Martabak</h2>
                      <p class="price">Rp10,000</p>
                  </div>
                      <p>Martabak ini sangat enak dengan isian coklat dan keju yang meleleh.</p>
                  <div class="rating-and-pesan">
                    <div class="rating">★★★★★</div>
                    <button class="pesan-button">Pesan</button>
                  </div>
                  </div>
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Martabak</h2>
                      <p class="price">Rp10,000</p>
                  </div>
                      <p>Tahu isi ini berisi isian daging yang sangat gurih dan lezat. <a href="#" class="expand-link" onclick="expandDescription(this)">Selengkapnya</a></p>
                  <div class="rating-and-pesan">
                    <div class="rating">★★★★★</div>
                    <button class="pesan-button">Pesan</button>
                  </div>
                  </div>
                  <div class="menu-item">
                    <img onclick="goToRoute('description')" src="{{ asset('/img/Martabak.jpg') }}" alt="Martabak">
                    <div class="menu-details">
                      <h2>Martabak</h2>
                      <p class="price">Rp10,000</p>
                  </div>
                      <p>Tahu isi ini berisi isian daging yang sangat gurih dan lezat. <a href="#" class="expand-link" onclick="expandDescription(this)">Selengkapnya</a></p>
                  <div class="rating-and-pesan">
                    <div class="rating">★★★★★</div>
                    <button class="pesan-button">Pesan</button>
                  </div>
                  </div>
              </div>
            <div class="navigation">
              <button onclick="prevMenu()">&lt;</button>
              <button onclick="showMenu(1)">1</button>
              <button onclick="showMenu(2)">2</button>
              <button onclick="showMenu(3)">3</button>
              <button onclick="nextMenu()">&gt;</button>
          </div>
          </div>
        </div>


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
      function goToRoute(routeName) {
        switch(routeName) {
            case 'homepage':
                window.location.href = '/homepage';
                break;
            case 'description':
              window.location.href = '/description';
            break;
        }
    }
      function logout() {
        window.location.href = '/Logout';
    }

//search bar
// Ambil input search
var searchInput = document.getElementById("searchInput");

// Tambahkan event listener untuk event input
searchInput.addEventListener("input", function() {
  // Ambil nilai dari input search
  var searchValue = this.value.toLowerCase();
  
  // Ambil semua item menu
  var menuItems = document.querySelectorAll(".menu-item");

  // Iterasi melalui setiap item menu
  menuItems.forEach(function(item) {
    // Ambil teks dari setiap item menu
    var menuItemText = item.textContent.toLowerCase();

    // Cek apakah teks item menu mengandung nilai pencarian
    if (menuItemText.includes(searchValue)) {
      // Jika iya, tampilkan item menu
      item.style.display = "block";
    } else {
      // Jika tidak, sembunyikan item menu
      item.style.display = "none";
    }
  });
});

    function redirectToKeranjang() {
        window.location.href = "{{ route('Customer.keranjang') }}";
    }
</script>