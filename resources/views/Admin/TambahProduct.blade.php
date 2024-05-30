<!-- resources/views/customer/login.blade.php -->

@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/adTambahAdmin.css') }}">
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
    
  
<!-- Main content of your page -->
<div class="description">Tambah Produk Baru</div>
<div class="content">
    <div class="informasi">Informasi Produk</div>
     <div class="cardPesan">
        <div class="cardPesan">            
            <!-- Textarea 1 -->
            <div class="textarea-container">
                <div class="tulisan-pesan">Nama Produk :</div>
                <textarea id="pesanTextarea1" name="pesan1" placeholder="Masukkan nama produk"></textarea>
            </div>
            
            <!-- Textarea 2 -->
            <div class="textarea-container1">
                <div class="tulisan-pesan1">Deskripsi Produk :</div>
                <textarea id="pesanTextarea2" name="pesan2" placeholder=""></textarea>
            </div>
            

            {{-- Upload image --}}
            <div class="upload-container">
                <div class="upload">
                    <div class="tulisan-pesan">Foto Produk :</div>
                    <input type="file" id="fotoUpload1" name="foto1" accept="image/*">
                </div>
            </div>
            
            <!-- Textarea 4 -->
            <div class="textarea-container">
                <span class="tulisan-pesan">Harga Produk :</span>
                <textarea id="pesanTextarea4" name="pesan4" placeholder="(Opsional) Tinggalkan pesan ke penjual"></textarea>
            </div>
            <!-- Textarea 5 -->
            <div class="textarea-container">
                <span class="tulisan-pesan">Stok Awal :</span>
                <textarea id="pesanTextarea4" name="pesan4" placeholder="(Opsional) Tinggalkan pesan ke penjual"></textarea>
            </div>
        </div>
        
        <div class="button-container">
            <button type="button" class="batal-button">Batal</button>
            <button type="submit" class="pesan-button">Simpan</button>
          </div>
    {{-- </form> --}}
    
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
    const kembaliButton = document.querySelector('.kembali-button');
        kembaliButton.addEventListener('click', function() {
        window.location.href = '/BerandaAdmin'; 
    });
  </script>