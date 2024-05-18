@extends('home')
@include('nav')

<h1>Daftar Surah Al-Quran</h1>
<ul class="surah-container">
    @foreach ($response as $surah)
        <li>
            <div class="surah-box">
                <h2>{{ $surah->name }}</h2>
                <h2>{{ $surah->name_translations->id }}</h2>
                <p>Jumlah Ayat: {{ $surah->number_of_ayah }}</p>
                <p>Tempat: {{ $surah->place }}</p>
                <p>Tipe: {{ $surah->type }}</p>
                <button onclick="window.location='{{ route('quran.indexId', ['id' => $surah->number_of_surah]) }}'"class="custom-button">Buka Surat</button>

                <p>Recitations:</p>
                <ul>
                    {{-- @foreach ($surah->recitations as $recitation) --}}
                        <li>
                            <audio src="{{ $surah->recitation }}" controls></audio>
                        </li>
                    {{-- @endforeach --}}
                </ul>
            </div>
        </li>
    @endforeach
</ul>
