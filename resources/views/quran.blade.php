@extends('layout.master')
@section('content')
<div class="surah-container">
    <h1>Daftar Surah Al-Quran</h1>
    <div class="daftar-surah">
        @foreach ($response as $surah)
            <div class="item-surah">
                <h2>{{ $surah->number_of_surah }}. {{ $surah->name }}</h2>
                <h2>{{ $surah->name_translations->id }}</h2>
                <p>Jumlah Ayat: {{ $surah->number_of_ayah }}</p>
                <p>Tempat: {{ $surah->place }}</p>
                <p>Tipe: {{ $surah->type }}</p>
                <button onclick="window.location='{{ route('quran.indexId', ['id' => $surah->number_of_surah]) }}'" class="custom-button">Buka Surat</button>

                <p>Audio:</p>
                <div class="audio-container">
                    <audio src="{{ $surah->recitation }}" controls></audio>
                </div>

                <div class="ayat-container">
                        <div class="ayat-item">
                        </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
