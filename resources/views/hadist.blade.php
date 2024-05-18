@extends('home')


@include('nav')

<h1>Daftar hadist</h1>

<body>
    <h1>Hadith Index</h1>
    <ul>
        @yield('content')
        {{-- @dd($response) --}}
        <ul>
            @foreach($response['hadiths']['data'] as $hadith)
            <li>
                <strong>Hadis Nomor {{ $hadith['hadithNumber'] }}</strong><br>
                <h2>Kitab:</h2> {{ $hadith['book']['bookName'] }}<br>
                <strong>Bab:</strong> {{ $hadith['chapter']['chapterEnglish'] }}<br>
                <strong>Nomor Hadis:</strong> {{ $hadith['hadithNumber'] }}<br>
                <strong>Narator (Bahasa Inggris):</strong> {{ $hadith['englishNarrator'] }}<br>
                <strong>Isi Hadis (Bahasa Inggris):</strong> {{ $hadith['hadithEnglish'] }}<br>
                <strong>Isi Hadis (Bahasa Arab):</strong> {{ $hadith['hadithArabic'] }}
            </li>
            @endforeach
        </ul>

</body>





