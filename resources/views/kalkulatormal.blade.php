@extends('layout.master')
@section('content')
<link rel="stylesheet" href="{{ asset('css/kalkulatormal.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FEFAF6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #EADBC8;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #102C57;
            font-size: 24px;
        }
        .form-group-mal {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            transition: background-color 0.3s ease;
        }
        .form-group-mal:hover {
            background-color: #DAC0A3;
        }
        .form-group-mal label {
            width: 150px;
            margin-right: 10px;
            color: #102C57;
        }
        .form-group-mal input,
        .form-group-mal select {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }
        .form-group-mal input:focus,
        .form-group-mal select:focus {
            border-color: #102C57;
            outline: none;
        }
        #goldGroup {
            display: flex;
            align-items: center;
        }
        #goldGroup select {
            margin-right: 10px;
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #102C57;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #081A3D;
        }
        #result {
            margin-top: 20px;
            padding: 15px;
            background-color: #FEFAF6;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
            font-size: 16px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #DAC0A3;
        }
        .reference {
            margin-top: 20px;
            padding: 15px;
            background-color: #FEFAF6;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: #333;
            font-size: 16px;
        }

        /* Responsive CSS */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            h1 {
                font-size: 20px;
            }
            .form-group-mal label {
                width: 100px;
                font-size: 14px;
            }
            .form-group-mal input,
            .form-group-mal select {
                padding: 8px;
                font-size: 14px;
            }
            button {
                padding: 10px;
                font-size: 14px;
            }
            #result {
                font-size: 14px;
            }
            th, td {
                padding: 10px;
            }
        }

        @media (max-width: 480px) {
            .form-group-mal {
                flex-direction: column;
                align-items: flex-start;
            }
            .form-group-mal label {
                width: 100%;
                margin-bottom: 5px;
            }
            .form-group-mal input,
            .form-group-mal select {
                width: 100%;
                padding: 8px;
            }
            button {
                padding: 8px;
                font-size: 12px;
            }
            th, td {
                font-size: 12px;
            }
            .reference {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Kalkulator Zakat Maal</h1>
        <form id="zakatForm">
            <div class="form-group-mal">
                <label for="cash">Uang Tunai (IDR):</label>
                <input type="number" id="cash" name="cash" required>
            </div>
            <div class="form-group-mal">
                <label for="bank">Tabungan Bank (IDR):</label>
                <input type="number" id="bank" name="bank" required>
            </div>
            <div class="form-group-mal">
                <label for="receivables">Piutang (IDR):</label>
                <input type="number" id="receivables" name="receivables" required>
            </div>
            <div class="form-group-mal">
                <label for="investments">Investasi (IDR):</label>
                <input type="number" id="investments" name="investments" required>
            </div>
            <div class="form-group-mal" id="goldGroup">
                <label for="gold">Emas (gram):</label>
                <select id="goldKarat" name="goldKarat">
                    <option value="1">1 karat</option>
                    <option value="2">2 karat</option>
                    <option value="3">3 karat</option>
                    <option value="4">4 karat</option>
                    <option value="5">5 karat</option>
                    <option value="6">6 karat</option>
                    <option value="7">7 karat</option>
                    <option value="8">8 karat</option>
                    <option value="9">9 karat</option>
                    <option value="10">10 karat</option>
                    <option value="11">11 karat</option>
                    <option value="12">12 karat</option>
                    <option value="13">13 karat</option>
                    <option value="14">14 karat</option>
                    <option value="15">15 karat</option>
                    <option value="16">16 karat</option>
                    <option value="17">17 karat</option>
                    <option value="18">18 karat</option>
                    <option value="19">19 karat</option>
                    <option value="20">20 karat</option>
                    <option value="21">21 karat</option>
                    <option value="22">22 karat</option>
                    <option value="23">23 karat</option>
                    <option value="24">24 karat</option>
                </select>
                <input type="number" id="gold" name="gold" required>
            </div>
            <div class="form-group-mal">
                <label for="silver">Perak (gram):</label>
                <input type="number" id="silver" name="silver" required>
            </div>
            <div class="form-group-mal">
                <label for="business">Aset Bisnis (IDR):</label>
                <input type="number" id="business" name="business" required>
            </div>
            <button type="button" onclick="calculateZakat()">Hitung Zakat</button>
        </form>
        <div id="result"></div>
        <div class="reference">
            <h2>Referensi Harga</h2>
            <p>Harga Emas per Gram: <span id="goldPrice">1.221.000,00</span> IDR</p>
            <p>Harga Perak per Gram: <span id="silverPrice">15.893,00</span> IDR</p>
            <p>Jumlah Harta Minimal (Nisab) untuk Zakat: <span id="nisabAmount">103.785.000,00</span> IDR</p>
        </div>
    </div>
    <script>
        // Set the prices manually
        const goldPricePerGram = 1221000.00; // IDR per gram
        const silverPricePerGram = 15893.00; // IDR per gram
        const nisab = 103785000.00; // Nisab in IDR

        function formatNumber(num) {
            return new Intl.NumberFormat('id-ID', { style: 'decimal', minimumFractionDigits: 2, maximumFractionDigits: 2 }).format(num);
        }

        function calculateZakat() {
            const cash = parseFloat(document.getElementById('cash').value) || 0;
            const bank = parseFloat(document.getElementById('bank').value) || 0;
            const receivables = parseFloat(document.getElementById('receivables').value) || 0;
            const investments = parseFloat(document.getElementById('investments').value) || 0;
            const gold = parseFloat(document.getElementById('gold').value) || 0;
            const goldKarat = parseFloat(document.getElementById('goldKarat').value) || 0;
            const silver = parseFloat(document.getElementById('silver').value) || 0;
            const business = parseFloat(document.getElementById('business').value) || 0;

            const goldValue = gold * goldPricePerGram * (goldKarat / 24); // Adjust gold value based on karat
            const silverValue = silver * silverPricePerGram;
            const totalAssets = cash + bank + receivables + investments + goldValue + silverValue + business;

            let zakat = 0;
            if (totalAssets >= nisab) {
                zakat = totalAssets * 0.025;
            }

            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = `
                <h2>Rincian Zakat Maal</h2>
                <table>
                    <tr>
                        <th>Jenis Aset</th>
                        <th>Nilai (IDR)</th>
                    </tr>
                    <tr>
                        <td>Uang Tunai</td>
                        <td>${formatNumber(cash)}</td>
                    </tr>
                    <tr>
                        <td>Tabungan Bank</td>
                        <td>${formatNumber(bank)}</td>
                    </tr>
                    <tr>
                        <td>Piutang</td>
                        <td>${formatNumber(receivables)}</td>
                    </tr>
                    <tr>
                        <td>Investasi</td>
                        <td>${formatNumber(investments)}</td>
                    </tr>
                    <tr>
                        <td>Emas</td>
                        <td>${formatNumber(goldValue)}</td>
                    </tr>
                    <tr>
                        <td>Perak</td>
                        <td>${formatNumber(silverValue)}</td>
                    </tr>
                    <tr>
                        <td>Aset Bisnis</td>
                        <td>${formatNumber(business)}</td>
                    </tr>
                    <tr>
                        <th>Total Aset</th>
                        <th>${formatNumber(totalAssets)}</th>
                    </tr>
                    <tr>
                        <th>Zakat Maal (2.5%)</th>
                        <th>${formatNumber(zakat)}</td>
                    </tr>
                </table>
            `;
        }
    </script>
</body>
</html>

@endsection
