<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EWI | Kalkulator Zakat Mal</title>
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
        <h2>Kalkulator Zakat</h2>
        <p>Masukkan jumlah total harta (tabungan, investasi, dll.) Anda untuk menghitung zakat maal:</p>
    
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
    
    <script src="{{ asset('JS/kalkulator.js') }}"></script>

</body>

<div id="copyright">
    <div class="wrapper">
        &copy; 2024. <b>EWI.</b> All Rights Reserved.
    </div>

</div>

</html>
