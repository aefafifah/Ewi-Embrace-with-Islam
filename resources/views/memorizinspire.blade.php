@extends('layout.master')

@section('content')
<style>
    .hero {
    background: url('https://via.placeholder.com/1500') no-repeat center center/cover;
    color: white;
    /* height: 80vh; */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hero-content {
    background: rgb(218, 192, 163);
    border-radius: 8px;
    width: 100%;

}

.hero h1 {
    padding: 2%;
    margin-bottom: 1rem;
    font-size: 2.5rem;
    color:rgb(16, 44, 87);
}

.hero p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    color: rgb(16, 44, 87);
}

.steps .step {
    background: rgb(16, 44, 87);
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
}

.steps .step h2 {
    margin-bottom: 0.5rem;
    font-size: 1.25rem;
    color: rgb(218, 192, 163);
}

.steps .step ul {
    list-style: none;
    padding: 0;
}

.steps .step ul li {
    background: rgb(254, 250, 246);
    padding: 0.5rem;
    border-radius: 4px;
    margin-bottom: 0.5rem;
    color:rgb(16, 44, 87);
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
                <a href="{{ route('quran.index') }}" class="custom-button">Go to Quran</a>

            </div>

</header>

@endsection

