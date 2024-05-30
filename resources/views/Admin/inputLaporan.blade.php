@extends('layouts.app')

<link rel="stylesheet" href="{{ asset('css/adInputLaporan.css') }}">
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

<div class="description">Input Laporan</div>
<div class="content">
    <div class="informasi">Informasi Produk</div>
    <div class="cardPesan">
      <form id="inputForm" method="POST" action="{{ route('Admin.LaporanPenjualan.table') }}">
            @csrf
            <div class="cardPesan">            
                <div class="input-container">
                    <div class="tulisan-pesan">Tanggal:</div>
                    <input type="date" id="tanggalInput" name="tanggal" placeholder="Pilih tanggal">
                </div>
                <div class="textarea-container">
                    <span class="tulisan-pesan">Nama Produk :</span>
                    <textarea id="pesanTextareaNama" name="nama_produk" placeholder="Masukkan nama produk"></textarea>
                </div>
                <div class="textarea-container">
                    <div class="tulisan-pesan">Kategori Produk :</div>
                    <textarea id="pesanTextareaKategori" name="kategori_produk" placeholder="Masukkan kategori produk"></textarea>
                </div>
                <div class="textarea-container">
                    <span class="tulisan-pesan">Harga Produk :</span>
                    <textarea id="pesanTextareaHarga" name="harga_produk" placeholder="Rp"></textarea>
                </div>
                <div class="textarea-container">
                    <span class="tulisan-pesan">Stok Awal :</span>
                    <textarea id="pesanTextareaStokAwal" name="stok_awal" placeholder="pcs"></textarea>
                </div>
                <div class="textarea-container">
                    <div class="tulisan-pesan">Terjual :</div>
                    <textarea id="pesanTextareaTerjual" name="terjual" placeholder="pcs"></textarea>
                </div>
                <div class="textarea-container">
                    <span class="tulisan-pesan">Sisa Stok :</span>
                    <textarea id="pesanTextareaSisaStok" name="sisa_stok" placeholder="pcs"></textarea>
                </div>
                <div class="textarea-container">
                    <span class="tulisan-pesan">Total Pemasukan :</span>
                    <textarea id="pesanTextareaPemasukan" name="total_pemasukan" placeholder="Rp"></textarea>
                </div>
            </div>
            <div class="button-container">
                <button type="button" class="batal-button">Batal</button>
                <button type="submit" class="pesan-button">Simpan</button>
            </div>
        </form>
    </div>
    <button class="kembali-button" goro>Kembali</button>
</div>

<footer class="footer">
    <div class="left-icons"></div>
    <div class="right-text">
        ©Kelompok 4-Sistem Informasi E-Kantin Jurusan Teknologi Informasi | D4 Sistem Informasi Bisnis | Politeknik Negeri Malang
    </div>
</footer>

<script>
    const kembaliButton = document.querySelector('.kembali-button');
    kembaliButton.addEventListener('click', function() {
        window.location.href = '/LaporanPenjualan'; 
    });

    const batalButton = document.querySelector('.batal-button');
    batalButton.addEventListener('click', function() {
        document.getElementById('laporanForm').reset();
    });

    const batalButton = document.querySelector('.batal-button');
batalButton.addEventListener('click', function() {
    document.getElementById('laporanForm').reset();
});

document.querySelector('.pesan-button').addEventListener('click', function() {
    // Ambil nilai dari input field
    let tanggal = document.getElementById('tanggalInput').value;
    // Ambil nilai dari field lainnya sesuai kebutuhan

    // Kirim data ke server menggunakan AJAX
    fetch('{{ route('Admin.InputLaporan.store') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
        body: JSON.stringify({
            tanggal: tanggal,
            // Kirim data lainnya sesuai kebutuhan
        }),
    })
    .then(response => {
        if (response.ok) {
            alert('Data berhasil disimpan');
            // Redirect atau lakukan tindakan lainnya jika diperlukan
        } else {
            throw new Error('Gagal menyimpan data');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Gagal menyimpan data');
    });
});

document.querySelector('.batal-button').addEventListener('click', function() {
    // Kirim request untuk membatalkan input
    fetch('{{ route('Admin.InputLaporan.batal') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
    })
    .then(response => {
        if (response.ok) {
            alert('Input dibatalkan');
            // Lakukan tindakan lainnya jika diperlukan
        } else {
            throw new Error('Gagal membatalkan input');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Gagal membatalkan input');
    });
});
</script>
@endsection
