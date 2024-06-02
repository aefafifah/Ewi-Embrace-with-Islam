@extends('layout.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/kalkulatorfitrah.css') }}">

<div class="container">
    <img src="{{ asset('Assets/Ewi Logo.png') }}" alt="EWI LOGO SOOOOOOOOOOON" class="logo">
    <h1>Kalkulator Zakat</h1>
    <p>"Ambillah zakat dari harta mereka, guna membersihkan dan menyucikan mereka, dan berdoalah untuk mereka. Sesungguhnya doamu itu (menumbuhkan) ketenteraman jiwa bagi mereka. Allah Maha Mendengar, Maha Mengetahui." Q.S Attaubah : 103</p>        

    <!-- Icon Section -->
    <div class="icon-container">
        <a href="#form-penghasilan" class="icon-item" onclick="ubahJenisZakat('penghasilan')">
            <img src="{{ asset('Assets/Penghasilan.svg') }}" alt="Penghasilan">
            <p>Penghasilan</p>
        </a>
        <a href="#form-tabungan" class="icon-item" onclick="ubahJenisZakat('tabungan')">
            <img src="{{ asset('Assets/Tabungan.svg') }}" alt="Tabungan">
            <p>Tabungan</p>
        </a>
        <a href="#form-perdagangan" class="icon-item" onclick="ubahJenisZakat('perdagangan')">
            <img src="{{ asset('Assets/Perdagangan.svg') }}" alt="Perdagangan">
            <p>Perdagangan</p>
        </a>
        <a href="#form-emas" class="icon-item" onclick="ubahJenisZakat('emas')">
            <img src="{{ asset('Assets/Emas.svg') }}" alt="Emas">
            <p>Emas</p>
        </a>
    </div>
    <!-- End of Icon Section -->

    <label for="jenis-zakat">Jenis Zakat:</label>
    <select id="jenis-zakat" onchange="ubahJenisZakat()">
        <option value="penghasilan">PENGHASILAN</option>
        <option value="tabungan">TABUNGAN</option>
        <option value="perdagangan">PERDAGANGAN</option>
        <option value="emas">EMAS</option>
    </select>

    <div id="form-penghasilan" class="form-section">
        <form id="penghasilan-form">
            <label for="gaji">Gaji saya per bulan</label>
            <input type="number" id="gaji" name="gaji" placeholder="Rp.">
            
            <label for="penghasilan-lain">Penghasilan lain-lain per bulan</label>
            <input type="number" id="penghasilan-lain" name="penghasilan-lain" placeholder="Rp.">
            
            <label for="jumlah-penghasilan">Jumlah penghasilan per bulan</label>
            <input type="number" id="jumlah-penghasilan" name="jumlah-penghasilan" readonly>
            
            <label for="nisab-tahun">Nisab per tahun</label>
            <input type="number" id="nisab-tahun" name="nisab-tahun" value="81945667" readonly>
            <a href="{{ asset('Assets/SK_01_2024.pdf') }}" class="sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>
            
            <label for="nisab-bulan">Nisab per bulan</label>
            <input type="number" id="nisab-bulan" name="nisab-bulan" value="6828806" readonly>
            <a href="{{ asset('Assets/SK_01_2024.pdf') }}" class="sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>
            
            <button type="reset">Reset</button>
            <button type="button" onclick="hitungZakat('penghasilan')">Hitung Zakat</button>
        </form>
    </div>

    <div id="form-tabungan" class="form-section" style="display: none;">
        <form id="tabungan-form">
            <label for="jumlah-tabungan">Jumlah Tabungan</label>
            <input type="number" id="jumlah-tabungan" name="jumlah-tabungan" placeholder="Rp.">
            
            <label for="nisab-tabungan">Nisab Tabungan</label>
            <input type="number" id="nisab-tabungan" name="nisab-tabungan" value="6828806" readonly>
            
            <button type="reset">Reset</button>
            <button type="button" onclick="hitungZakat('tabungan')">Hitung Zakat</button>
        </form>
    </div>
    
    <div id="form-perdagangan" class="form-section" style="display: none;">
        <form id="perdagangan-form">
            <label for="aset-lancar">Aset Lancar</label>
            <input type="number" id="aset-lancar" name="aset-lancar" placeholder="Rp.">
            
            <label for="laba">Laba</label>
            <input type="number" id="laba" name="laba" placeholder="Rp.">
            
            <label for="jumlah-perdagangan">Jumlah</label>
            <input type="number" id="jumlah-perdagangan" name="jumlah-perdagangan" readonly>
            
            <label for="nisab-tahun-perdagangan">Nisab per tahun</label>
            <input type="number" id="nisab-tahun-perdagangan" name="nisab-tahun-perdagangan" value="81945667" readonly>
            <a href="{{ asset('Assets/SK_01_2024.pdf') }}" class="sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>
            
            <button type="reset">Reset</button>
            <button type="button" onclick="hitungZakat('perdagangan')">Hitung Zakat</button>
        </form>
    </div>

    <div id="form-emas" class="form-section" style="display: none;">
        <form id="emas-form">
            <label for="berat-emas">Berat Emas (gram)</label>
            <input type="number" id="berat-emas" name="berat-emas" placeholder="gram">
            
            <label for="harga-emas">Harga Emas per gram</label>
            <input type="number" id="harga-emas" name="harga-emas" placeholder="Rp.">
            
            <label for="jumlah-emas">Jumlah Emas (Rp.)</label>
            <input type="number" id="jumlah-emas" name="jumlah-emas" readonly>
            
            <label for="nisab-emas">Nisab Emas (85 gram)</label>
            <input type="number" id="nisab-emas" name="nisab-emas" value="85" readonly>
            
            <button type="reset">Reset</button>
            <button type="button" onclick="hitungZakat('emas')">Hitung Zakat</button>
        </form>
    </div>
</div>

<style>
/* Additional CSS for the icons */
body {
    background-color: #FEFAF6;
    color: #102C57;
    font-family: Arial, sans-serif;
}

.container {
    background-color: #FEFAF6;
    padding: 20px;
    border-radius: 10px;
}

h1 {
    color: #102C57;
}

p {
    color: #102C57;
}

.icon-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.icon-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    text-decoration: none;
    color: #102C57;
}

.icon-item img {
    width: 60px;
    height: 60px;
    margin-bottom: 10px;
}

.icon-item p {
    margin: 0;
    font-size: 14px;
    font-weight: bold;
    position: relative;
}

.icon-item p:after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background-color: #102C57;
    position: absolute;
    bottom: -5px;
    left: 0;
    transition: width 0.3s;
}

.icon-item p:hover:after {
    width: 100%;
}

label {
    color: #102C57;
}

input, select, button {
    background-color: #EADBC8;
    border: 1px solid #DAC0A3;
    color: #102C57;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
}

button {
    background-color: #102C57;
    color: #FEFAF6;
    cursor: pointer;
}

button:hover {
    background-color: #DAC0A3;
    color: #102C57;
}

.form-section {
    background-color: #FEFAF6;
    padding: 20px;
    border-radius: 10px;
    border: 1px solid #DAC0A3;
    margin-bottom: 20px;
}

.sk-text {
    color: #ff6347; /* Keep the existing color for sk-text */
    text-decoration: none;
}
</style>

<script>
    function ubahJenisZakat(jenisZakat = document.getElementById('jenis-zakat').value) {
        var formSections = document.querySelectorAll('.form-section');
        formSections.forEach(function(section) {
            section.style.display = 'none';
        });

        if (jenisZakat === 'penghasilan') {
            document.getElementById('form-penghasilan').style.display = 'block';
        } else if (jenisZakat === 'tabungan') {
            document.getElementById('form-tabungan').style.display = 'block';
        } else if (jenisZakat === 'perdagangan') {
            document.getElementById('form-perdagangan').style.display = 'block';
        } else if (jenisZakat === 'emas') {
            document.getElementById('form-emas').style.display = 'block';
        }
    }

    function hitungZakat(jenis) {
        if (jenis === 'penghasilan') {
            var gaji = parseFloat(document.getElementById('gaji').value) || 0;
            var penghasilanLain = parseFloat(document.getElementById('penghasilan-lain').value) || 0;
            var jumlahPenghasilan = gaji + penghasilanLain;
            document.getElementById('jumlah-penghasilan').value = jumlahPenghasilan;
            var nisabBulanan = parseFloat(document.getElementById('nisab-bulan').value);
            if (jumlahPenghasilan >= nisabBulanan) {
                alert("Zakat yang harus dibayar: Rp. " + (jumlahPenghasilan * 0.025));
            } else {
                alert("Penghasilan Anda belum mencapai nisab untuk zakat penghasilan.");
            }
        } else if (jenis === 'tabungan') {
            var jumlahTabungan = parseFloat(document.getElementById('jumlah-tabungan').value) || 0;
            var nisabTabungan = parseFloat(document.getElementById('nisab-tabungan').value);
            if (jumlahTabungan >= nisabTabungan) {
                var zakat = jumlahTabungan * 0.025;
                alert('Zakat yang harus dikeluarkan: Rp. ' + zakat);
            } else {
                alert('Jumlah tabungan tidak mencapai nisab');
            }
        } else if (jenis === 'perdagangan') {
            var asetLancar = parseFloat(document.getElementById('aset-lancar').value) || 0;
            var laba = parseFloat(document.getElementById('laba').value) || 0;
            var jumlahPerdagangan = asetLancar + laba;
            document.getElementById('jumlah-perdagangan').value = jumlahPerdagangan;
            var nisabTahunPerdagangan = parseFloat(document.getElementById('nisab-tahun-perdagangan').value);
            if (jumlahPerdagangan >= nisabTahunPerdagangan) {
                alert("Zakat yang harus dibayar: Rp. " + (jumlahPerdagangan * 0.025));
            } else {
                alert("Aset Perdagangan Anda belum mencapai nisab untuk zakat perdagangan.");
            }
        } else if (jenis === 'emas') {
            var beratEmas = parseFloat(document.getElementById('berat-emas').value) || 0;
            var hargaEmas = parseFloat(document.getElementById('harga-emas').value) || 0;
            var jumlahEmas = beratEmas * hargaEmas;
            document.getElementById('jumlah-emas').value = jumlahEmas;
            var nisabEmas = parseFloat(document.getElementById('nisab-emas').value);
            if (beratEmas >= nisabEmas) {
                alert("Zakat yang harus dibayar: Rp. " + (jumlahEmas * 0.025));
            } else {
                alert("Berat emas Anda belum mencapai nisab untuk zakat emas.");
            }
        }
    }
</script>

@endsection
