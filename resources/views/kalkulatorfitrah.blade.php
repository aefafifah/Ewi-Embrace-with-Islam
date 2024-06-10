@extends('layout.master')
@section('content')

<link rel="stylesheet" href="{{ asset('css/kalkulatorfitrah.css') }}">

<div class="zakat-container">
    <img src="{{ asset('Assets/Ewi Logo.png') }}" alt="EWI LOGO SOOOOOOOOOOON" class="zakat-logo">
    <h1>Kalkulator Zakat</h1>
    <p>"Ambillah zakat dari harta mereka, guna membersihkan dan menyucikan mereka, dan berdoalah untuk mereka. Sesungguhnya doamu itu (menumbuhkan) ketenteraman jiwa bagi mereka. Allah Maha Mendengar, Maha Mengetahui." Q.S Attaubah : 103</p>

    <!-- Icon Section -->
    <div class="zakat-icon-container">
        <a href="#form-penghasilan" class="zakat-icon-item" onclick="ubahJenisZakat('penghasilan')">
            <img src="{{ asset('Assets/Penghasilan.svg') }}" alt="Penghasilan">
            <p>Penghasilan</p>
        </a>
        <a href="#form-tabungan" class="zakat-icon-item" onclick="ubahJenisZakat('tabungan')">
            <img src="{{ asset('Assets/Tabungan.svg') }}" alt="Tabungan">
            <p>Tabungan</p>
        </a>
        <a href="#form-perdagangan" class="zakat-icon-item" onclick="ubahJenisZakat('perdagangan')">
            <img src="{{ asset('Assets/Perdagangan.svg') }}" alt="Perdagangan">
            <p>Perdagangan</p>
        </a>
        <a href="#form-emas" class="zakat-icon-item" onclick="ubahJenisZakat('emas')">
            <img src="{{ asset('Assets/Emas.svg') }}" alt="Emas">
            <p>Emas</p>
        </a>
    </div>
    <!-- End of Icon Section -->

    <label for="jenis-zakat">Jenis Zakat:</label>
    <select id="jenis-zakat" onchange="ubahJenisZakat(this.value)">
        <option value="penghasilan">PENGHASILAN</option>
        <option value="tabungan">TABUNGAN</option>
        <option value="perdagangan">PERDAGANGAN</option>
        <option value="emas">EMAS</option>
    </select>

    <div id="form-penghasilan" class="zakat-form-section">
        <form id="penghasilan-form">
            <label for="gaji">Gaji saya per bulan</label>
            <input type="number" id="gaji" name="gaji" placeholder="Rp.">

            <label for="penghasilan-lain">Penghasilan lain-lain per bulan</label>
            <input type="number" id="penghasilan-lain" name="penghasilan-lain" placeholder="Rp.">

            <label for="jumlah-penghasilan">Jumlah penghasilan per bulan</label>
            <input type="number" id="jumlah-penghasilan" name="jumlah-penghasilan" readonly>

            <label for="nisab-tahun">Nisab per tahun</label>
            <input type="number" id="nisab-tahun" name="nisab-tahun" value="81945667" readonly>
            <a href="{{ asset('Assets/SK_01_2024.pdf') }}" class="zakat-sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>

            <label for="nisab-bulan">Nisab per bulan</label>
            <input type="number" id="nisab-bulan" name="nisab-bulan" value="6828806" readonly>
            <a href="{{ asset('Assets/SK_01_2024.pdf') }}" class="zakat-sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>

            <button type="reset">Reset</button>
            <button type="button" onclick="hitungZakat('penghasilan')">Hitung Zakat</button>
        </form>
    </div>

    <div id="hasil-penghasilan" class="zakat-hasil-section" style="display: none;">
        <h3>Hasil Perhitungan Zakat Penghasilan</h3>
        <p id="penghasilan-result"></p>
    </div>

    <div id="form-tabungan" class="zakat-form-section" style="display: none;">
        <form id="tabungan-form">
            <label for="jumlah-tabungan">Jumlah Tabungan</label>
            <input type="number" id="jumlah-tabungan" name="jumlah-tabungan" placeholder="Rp.">

            <label for="nisab-tabungan">Nisab Tabungan</label>
            <input type="number" id="nisab-tabungan" name="nisab-tabungan" value="6828806" readonly>

            <button type="reset">Reset</button>
            <button type="button" onclick="hitungZakat('tabungan')">Hitung Zakat</button>
        </form>
    </div>

    <div id="hasil-tabungan" class="zakat-hasil-section" style="display: none;">
        <h3>Hasil Perhitungan Zakat Tabungan</h3>
        <p id="tabungan-result"></p>
    </div>

    <div id="form-perdagangan" class="zakat-form-section" style="display: none;">
        <form id="perdagangan-form">
            <label for="aset-lancar">Aset Lancar</label>
            <input type="number" id="aset-lancar" name="aset-lancar" placeholder="Rp.">

            <label for="laba">Laba</label>
            <input type="number" id="laba" name="laba" placeholder="Rp.">

            <label for="jumlah-perdagangan">Jumlah</label>
            <input type="number" id="jumlah-perdagangan" name="jumlah-perdagangan" readonly>

            <label for="nisab-tahun-perdagangan">Nisab per tahun</label>
            <input type="number" id="nisab-tahun-perdagangan" name="nisab-tahun-perdagangan" value="81945667" readonly>
            <a href="{{ asset('Assets/SK_01_2024.pdf') }}" class="zakat-sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>

            <button type="reset">Reset</button>
            <button type="button" onclick="hitungZakat('perdagangan')">Hitung Zakat</button>
        </form>
    </div>

    <div id="hasil-perdagangan" class="zakat-hasil-section" style="display: none;">
        <h3>Hasil Perhitungan Zakat Perdagangan</h3>
        <p id="perdagangan-result"></p>
    </div>

    <div id="form-emas" class="zakat-form-section" style="display: none;">
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

    <div id="hasil-emas" class="zakat-hasil-section" style="display: none;">
        <h3>Hasil Perhitungan Zakat Emas</h3>
        <p id="emas-result"></p>
    </div>
</div>

<style>
/* General styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Container styling */
.zakat-container {
    width: 80%;
    max-width: 600px;
    background-color: #fff;
    padding: 20px;
    margin: 50px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background: linear-gradient(to right, #f9f9f9, #e0e0e0);
}

/* Logo styling */
.zakat-logo {
    display: block;
    margin: 0 auto 20px auto;
    max-width: 100px;
}

/* Header styling */
.zakat-container h1 {
    color: #036635;
    text-align: center;
    font-size: 36px;
    margin-bottom: 10px;
}

.zakat-container p {
    text-align: center;
    font-size: 14px;
    line-height: 1.6;
    color: #555;
    margin-bottom: 30px;
}

/* Label styling */
.zakat-container label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
    color: #333;
}

/* Input and select styling */
.zakat-container input[type="number"], .zakat-container select {
    width: calc(100% - 22px);
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
    transition: border-color 0.3s, box-shadow 0.3s;
}

.zakat-container input[type="number"]:focus, .zakat-container select:focus {
    border-color: #0066cc;
    box-shadow: 0 0 5px rgba(0, 102, 204, 0.5);
}

/* SK text link styling */
.zakat-sk-text {
    color: red;
    font-size: 12px;
    margin-top: -10px;
    margin-bottom: 10px;
    display: block;
    text-decoration: none;
}

/* Button styling */
.zakat-container button {
    padding: 10px 15px;
    margin-top: 10px;
    margin-right: 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, box-shadow 0.3s;
}

.zakat-container button[type="reset"] {
    background-color: #ff6b6b;
    color: #fff;
}

.zakat-container button[type="button"] {
    background-color: #036635;
    color: #fff;
}

.zakat-container button:hover {
    box-shadow: 0 0 10px rgba(0, 102, 204, 0.5);
}

.zakat-container button[type="reset"]:hover {
    background-color: #ff4c4c;
}

.zakat-container button[type="button"]:hover {
    background-color: #024926;
}

/* Icon container styling */
.zakat-icon-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.zakat-icon-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    text-decoration: none;
    transition: transform 0.3s;
}

.zakat-icon-item img {
    width: 60px;
    height: 60px;
    margin-bottom: 10px;
}

.zakat-icon-item p {
    margin: 0;
    font-size: 14px;
    font-weight: bold;
    color: #000;
    position: relative;
}

.zakat-icon-item:hover {
    transform: scale(1.1);
}

.zakat-icon-item p:after {
    content: '';
    display: block;
    width: 0;
    height: 2px;
    background-color: orange;
    position: absolute;
    bottom: -5px;
    left: 0;
    transition: width 0.3s;
}

.zakat-icon-item p:hover:after {
    width: 100%;
}

/* Result section styling */
.zakat-hasil-section h3 {
    margin-top: 0;
}

/* Responsive CSS */
@media (max-width: 768px) {
    .zakat-container {
        padding: 10px;
    }
    .zakat-icon-container {
        gap: 10px;
    }
    .zakat-icon-item img {
        width: 50px;
        height: 50px;
    }
    .zakat-icon-item p {
        font-size: 12px;
    }
    .zakat-container label {
        font-size: 14px;
    }
    .zakat-container input, .zakat-container select, .zakat-container button {
        font-size: 14px;
    }
}
</style>

<script>
    function ubahJenisZakat(jenisZakat) {
        var formSections = document.querySelectorAll('.zakat-form-section');
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
                var zakat = jumlahPenghasilan * 0.025;
                document.getElementById('penghasilan-result').innerText = "Zakat yang harus dibayar: Rp. " + zakat;
            } else {
                document.getElementById('penghasilan-result').innerText = "Penghasilan Anda belum mencapai nisab untuk zakat penghasilan.";
            }
            document.getElementById('hasil-penghasilan').style.display = 'block';
        } else if (jenis === 'tabungan') {
            let jumlahTabungan = parseFloat(document.getElementById('jumlah-tabungan').value) || 0;
            let nisabTabungan = parseFloat(document.getElementById('nisab-tabungan').value);
            if (jumlahTabungan >= nisabTabungan) {
                let zakat = jumlahTabungan * 0.025;
                document.getElementById('tabungan-result').innerText = 'Zakat yang harus dikeluarkan: Rp. ' + zakat;
            } else {
                document.getElementById('tabungan-result').innerText = 'Jumlah tabungan tidak mencapai nisab';
            }
            document.getElementById('hasil-tabungan').style.display = 'block';
        } else if (jenis === 'perdagangan') {
            var asetLancar = parseFloat(document.getElementById('aset-lancar').value) || 0;
            var laba = parseFloat(document.getElementById('laba').value) || 0;
            var jumlahPerdagangan = asetLancar + laba;
            document.getElementById('jumlah-perdagangan').value = jumlahPerdagangan;
            var nisabTahunPerdagangan = parseFloat(document.getElementById('nisab-tahun-perdagangan').value);
            if (jumlahPerdagangan >= nisabTahunPerdagangan) {
                var zakat = jumlahPerdagangan * 0.025;
                document.getElementById('perdagangan-result').innerText = "Zakat yang harus dibayar: Rp. " + zakat;
            } else {
                document.getElementById('perdagangan-result').innerText = "Aset Perdagangan Anda belum mencapai nisab untuk zakat perdagangan.";
            }
            document.getElementById('hasil-perdagangan').style.display = 'block';
        } else if (jenis === 'emas') {
            var beratEmas = parseFloat(document.getElementById('berat-emas').value) || 0;
            var hargaEmas = parseFloat(document.getElementById('harga-emas').value) || 0;
            var jumlahEmas = beratEmas * hargaEmas;
            document.getElementById('jumlah-emas').value = jumlahEmas;
            var nisabEmas = parseFloat(document.getElementById('nisab-emas').value);
            if (beratEmas >= nisabEmas) {
                var zakat = jumlahEmas * 0.025;
                document.getElementById('emas-result').innerText = "Zakat yang harus dibayar: Rp. " + zakat;
            } else {
                document.getElementById('emas-result').innerText = "Berat emas Anda belum mencapai nisab untuk zakat emas.";
            }
            document.getElementById('hasil-emas').style.display = 'block';
        }
    }
</script>

@endsection
