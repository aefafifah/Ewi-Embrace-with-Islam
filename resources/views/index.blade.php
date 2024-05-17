@extends('home')
@include('nav')

    <h1>Daftar Surah Al-Quran</h1>

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

