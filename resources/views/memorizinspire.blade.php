@extends('layout.master')

@section('content')
<style>
    .hero {
    background: url('https://via.placeholder.com/1500') no-repeat center center/cover;
    color: white;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero-content {
    background: rgba(0, 0, 0, 0.6);
    padding: 2rem;
    border-radius: 8px;
    max-width: 800px;
}

.hero h1 {
    margin-bottom: 1rem;
    font-size: 2.5rem;
    color: #4caf50;
}

.hero p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
}

.steps .step {
    background: rgba(72, 187, 120, 0.9);
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
}

.steps .step h2 {
    margin-bottom: 0.5rem;
    font-size: 1.25rem;
}

.steps .step ul {
    list-style: none;
    padding: 0;
}

.steps .step ul li {
    background: rgba(200, 230, 201, 0.8);
    padding: 0.5rem;
    border-radius: 4px;
    margin-bottom: 0.5rem;
}

.steps .step ul li strong {
    color: #2e7d32;
}
    </style>
<header class="hero">
    <div class="hero-content">
        <h1>Langkah-langkah Menggunakan Fitur Memorizinspire</h1>
        <p>Siap menghafal? Memorizinspire siap membantumu!</p>
        <div class="steps">
            <div class="step">
                <h2>1. Akses Fitur Memorizinspire:</h2>
                <ul>
                    <li>Buka aplikasi atau situs <strong>Qurdistime</strong>.</li>
                    <li>Masuk ke bagian <strong>Quran</strong>.</li>
                    <li>Tekan opsi <strong>Siap Menghafal</strong>.</li>
                </ul>
            </div>
            <div class="step">
                <h2>2. Mulai Menghafal:</h2>
                <ul>
                    <li>Tiga ayat akan ditampilkan secara otomatis.</li>
                    <li>Gunakan fitur <strong>rekam audio</strong> untuk membantu latihan hafalan.</li>
                    <li>Rekaman ini bisa didownload untuk latihan offline.</li>
                </ul>
            </div>
            <div class="step">
                <h2>3. Setor Hafalan:</h2>
                <ul>
                    <li>Jika sudah siap, klik <strong>Siap Setor</strong> untuk konfirmasi ke mentor.</li>
                    <li>Masukkan urutan hari sesuai jadwal hafalan.</li>
                    <li>Masukkan keterangan ayat yang sudah dihafal.</li>
                    <li>Ceklis jika hafalan sudah selesai.</li>
                </ul>
            </div>

</header>

@endsection

