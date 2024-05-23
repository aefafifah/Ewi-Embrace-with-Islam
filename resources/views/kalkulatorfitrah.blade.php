@extends('layout.master')
@section('content')

 <link rel="stylesheet" href="css/kalkulatorfitrah.css">

    <div class="container">
        <img src="logo.png" alt="EWI LOGO SOOOOOOOOOOON" class="logo">
        <h1>Kalkulator Zakat</h1>
        <p>Kalkulator zakat adalah layanan untuk mempermudah perhitungan jumlah zakat yang harus dikeluarkan oleh setiap umat muslim sesuai ketetapan syariah. Oleh karena itu, bagi Anda yang ingin mengetahui berapa jumlah zakat yang harus dikeluarkan, silahkan gunakan fasilitas Kalkulator Zakat BAZNAS di bawah ini.</p>
        
        <label for="jenis-zakat">Jenis Zakat:</label>
        <select id="jenis-zakat" onchange="ubahJenisZakat()">
            <option value="penghasilan">PENGHASILAN</option>
            <option value="perdagangan">PERDAGANGAN</option>
        </select>
        
        <div id="form-penghasilan">
            <form id="penghasilan-form">
                <label for="gaji">Gaji saya per bulan</label>
                <input type="number" id="gaji" name="gaji" placeholder="Rp.">
                
                <label for="penghasilan-lain">Penghasilan lain-lain per bulan</label>
                <input type="number" id="penghasilan-lain" name="penghasilan-lain" placeholder="Rp.">
                
                <label for="jumlah-penghasilan">Jumlah penghasilan per bulan</label>
                <input type="number" id="jumlah-penghasilan" name="jumlah-penghasilan" readonly>
                
                <label for="nisab-tahun">Nisab per tahun</label>
                <input type="number" id="nisab-tahun" name="nisab-tahun" value="81945667" readonly>
                <a href="SK_01_2024.pdf" class="sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>
                
                <label for="nisab-bulan">Nisab per bulan</label>
                <input type="number" id="nisab-bulan" name="nisab-bulan" value="6828806" readonly>
                <a href="SK_01_2024.pdf" class="sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>
                
                <button type="reset">Reset</button>
                <button type="button" onclick="hitungZakat('penghasilan')">Hitung Zakat</button>
            </form>
        </div>
        
        <div id="form-perdagangan" style="display: none;">
            <form id="perdagangan-form">
                <label for="aset-lancar">Aset Lancar</label>
                <input type="number" id="aset-lancar" name="aset-lancar" placeholder="Rp.">
                
                <label for="laba">Laba</label>
                <input type="number" id="laba" name="laba" placeholder="Rp.">
                
                <label for="jumlah-perdagangan">Jumlah</label>
                <input type="number" id="jumlah-perdagangan" name="jumlah-perdagangan" readonly>
                
                <label for="nisab-tahun-perdagangan">Nisab per tahun</label>
                <input type="number" id="nisab-tahun-perdagangan" name="nisab-tahun-perdagangan" value="81945667" readonly>
                <a href="SK_01_2024.pdf" class="sk-text" download>Sesuai SK Ketua BAZNAS No. 1 tahun 2024</a>
                
                <button type="reset">Reset</button>
                <button type="button" onclick="hitungZakat('perdagangan')">Hitung Zakat</button>
            </form>
        </div>
    </div>

    <script src="js/kalkulatorfitrah.js"></script>
    @endsection
