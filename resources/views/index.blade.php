@extends('master')

@section('title', 'Halaman Utama')

@section('content')
    <h1>Daftar Surah Al-Quran</h1>

    <!-- Memanggil fungsi index untuk mendapatkan seluruh Al-Quran -->
    {{-- @php
        // $quran = App\Http\Controllers\QuranController::index();
        $quranController = new App\Http\Controllers\QuranController();
        $quran = $quranController->index(); --}}

    {{-- @endphp --}}

    <ul>
        @foreach ($response as $surah)
            <li>
                <h2>{{ $surah->name }}</h2>
                <h2>{{ $surah->name_translations->id }}</h2>
                <p>Jumlah Ayat: {{ $surah->number_of_ayah }}</p>
                <p>Tempat: {{ $surah->place }}</p>
                <p>Tipe: {{ $surah->type }}</p>
                <p>
                    <audio src="{{ $surah->recitation }}" controls></audio>
                </p>
            </li>
        @endforeach
    </ul>
@endsection
<!-- Anda juga dapat memanggil fungsi indexId untuk mendapatkan data spesifik surah berdasarkan id -->
<!-- Misalnya: -->
{{-- @php

        $quranController = new App\Http\Controllers\QuranController();
        $surah = $quranController->indexId(1);

    @endphp

    @if (isset($surah))
        <h2>{{ $surah['name'] }}</h2>
        <p>Jumlah ayat: {{ $surah['number_of_ayah'] }}</p>
        <p>Tempat: {{ $surah['place'] }}</p>
    @else
        <p>Surah tidak ditemukan.</p>
    @endif --}}
<!-- dan seterusnya -->
{{-- @endsection --}}
