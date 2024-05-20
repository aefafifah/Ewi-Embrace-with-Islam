@extends('layout.master')
@section('content')

    <div class="calculator-container">
        <h2>Kalkulator Zakat Fitrah</h2>
        <p>Masukkan jumlah anggota keluarga dan pilih jenis bahan pokok untuk menghitung zakat fitrah:</p>

        <div class="input-section">
            <label for="familyMembers">Jumlah Anggota Keluarga:</label>
            <input type="number" id="familyMembers" placeholder="Masukkan jumlah anggota keluarga">
        </div>

        <div class="input-section">
            <label for="basicFoodType">Jenis Bahan Pokok:</label>
            <select id="basicFoodType">
                <option value="beras">Beras</option>
                <option value="gandum">Gandum</option>
            </select>
        </div>

        <div class="input-section">
            <label for="foodPrice">Harga per Kilogram (Rp):</label>
            <input type="number" id="foodPrice" placeholder="Masukkan harga per kilogram">
        </div>

        <button onclick="calculateFitrah()">Hitung Zakat Fitrah</button>

        <div class="result-section">
            <h3>Total Zakat Fitrah (Rp):</h3>
            <p id="totalZakatFitrah">0</p>
        </div>
    </div>

    <script src="{{ asset('JS/kalkulator.js') }}"></script>
    @endsection

{{-- <div id="copyright">
    <div class="wrapper">
        &copy; 2024. <b>EWI.</b> All Rights Reserved.
    </div>

</div> --}}

