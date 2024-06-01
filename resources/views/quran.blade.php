@extends('layout.master')
@section('content')
<div class="surah-container">
    <h1>Daftar Surah Al-Quran</h1>
    <div class="daftar-surah">
        @foreach ($surahs as $surah)
            <div class="item-surah">
                <h2>{{ $surah->number_of_surah }}. {{ $surah->name }}</h2>
                <h3>{{ $surah->name_translations->id }}</h3>
                <p>Jumlah Ayat: {{ $surah->number_of_ayah }}</p>
                <p>Tempat: {{ $surah->place }}</p>
                <p>Tipe: {{ $surah->type }}</p>
                <button onclick="window.location='{{ route('quran.indexId', ['id' => $surah->number_of_surah]) }}'" class="custom-button">Buka Surat</button>
                <a href="{{ route('test.indexId', ['id' => $surah->number_of_surah]) }}">Kunjungi halaman Test</a>

                <p>Audio:</p>
                <div class="audio-container">
                    <audio src="{{ $surah->recitation }}" controls></audio>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination">
        {{ $surahs->links('vendor.pagination.custom') }}
    </div>
</div>
@endsection
