@extends('layout.master')

@section('content')
{{-- @dd($response); --}}
<h1>Daftar Surah Al-Quran</h1>
        @foreach ($response as $surah)
            <div class="item-surah">
                <h2>{{ $surah->number_of_surah }}. {{ $surah->name }}</h2>
                <h2>{{ $surah->name_translations->id }}</h2>
                <p>Jumlah Ayat: {{ $surah->number_of_ayah }}</p>
                <p>Tempat: {{ $surah->place }}</p>
                <p>Tipe: {{ $surah->type }}</p>
                <a href="{{ route('test.indexId', ['id' => $surah->number_of_surah]) }}">Kunjungi halaman Test</a>
            </div>
{{-- <a href="{{ route('test', ['id' => $response->number_of_surah]) }}">Kunjungi halaman Test</a> --}}
{{-- <button onclick="window.location='{{ route('test', ['id' => $response->number_of_surah]) }}'" class="custom-button">Buka Surat</button> --}}
@endforeach
{{-- <body>
    <h2>{{ $response->name }}</h2>
    <h2>({{ $response->name_translations->id }})</h2>
    <p>{{ $response->number_of_ayah }} Ayat • Tempat: {{ $response->place }} • Tipe: {{ $response->type }} </p>

    <div class="panel panel-default">
    <div class="panel-heading">
        <h2>Verses:</h2>
    </div>
    <div class="panel-body">
        <ul>
            @foreach ($response->verses as $verse)
                <li>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> {{ $response->name}} Ayat {{$verse->number}}</h3>
                        </div>
                        <div class="panel-body">
                            <p class="verse">{{ $verse->text }}</p>
                            <p class="translation">Terjemahan: {{ $verse->translation_id }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
    </ul> --}}
<h1>Checklist App</h1>
    <form action="/checklist" method="POST">
        @csrf
        <input type="checkbox" id="checked" name="checked" value="1">
        <label for="checked">Selesai</label><br>
        <button type="submit">Tambahkan Item</button>
    </form>
@endsection

