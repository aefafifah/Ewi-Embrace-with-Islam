@extends('layout.master')
@section('content')
    <div class="calculator-container">
        <h2>Kalkulator Zakat</h2>
        <p>Zakat Harta (Maal) adalah sejumlah harta yang wajib dikeluarkan bila telah mencapai batas minimal tertentu (nisab) dalam kurun waktu (haul) setiap satu tahun kalender.</p>
        <p>Masukkan jumlah total harta (tabungan, investasi, dll.) Anda untuk menghitung zakat maal:</p>

        <div class="image-section">
            <img src="{{ asset('assets/niat-zakat-mal.jpg') }}" alt="Niat Zakat Maal" style="max-width: 100%; height: auto;">
        </div>

        <div class="input-section">
            <label for="totalWealth">Total Harta (Rp):</label>
            <input type="number" id="totalWealth" placeholder="Masukkan jumlah harta disini">
        </div>

        <div class="input-section">
            <label for="nisabAmount">Nisab (Rp):</label>
            <input type="text" id="nisabAmount" value="853 grams of silver" disabled>
        </div>

        <div class="input-section">
            <label for="zakatRate">Persentase Zakat (%):</label>
            <input type="number" id="zakatRate" value="2.5" min="0" max="100">
        </div>

        <button onclick="calculateMal()">Hitung Zakat</button>
    </div>

    <script src="{{ asset('JS/kalkulatormal.js') }}"></script>
@endsection
