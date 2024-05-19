<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EWI | Kalkulator Zakat Fitrah</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Embrace with Islam.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="home.html" class="tbl-biru">Home</a></li>
                    <li><a href="#home">Qurdistime</a></li>
                    <li><a href="Islamic Solution/issolution.html">Issolution</a></li>
                    <li class="dropdown">
                        <a href="">Zakatime</a>
                        <ul class="dropdown-menu">
                            <li><a href="kalkulatormal.html">Zakat Mal</a></li>
                            <li><a href="kalkulatorfitrah.html">Zakat Fitrah</a></li>
                        </ul>
                    </li>
                    <li><a href="memorizinspire.html">Memorizinspire</a></li>
                </ul>
            </div>
        </div>
    </nav>

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

</body>

<div id="copyright">
    <div class="wrapper">
        &copy; 2024. <b>EWI.</b> All Rights Reserved.
    </div>

</div>

</html>