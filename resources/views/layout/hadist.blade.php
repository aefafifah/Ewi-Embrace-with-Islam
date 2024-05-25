@extends('layout.master')
@section('content')
    {{-- <h1>Daftar Hadis</h1>
    <div class="hadith-racks">
        @foreach($response['hadiths']['data'] as $hadith)
            <div class="hadith-rack">
                <strong>Hadis Nomor {{ $hadith['hadithNumber'] }}</strong><br>
                <strong>Bab:</strong> {{ $hadith['chapter']['chapterEnglish'] }}<br>
                <strong>Nomor Hadis:</strong> {{ $hadith['hadithNumber'] }}<br>
                <strong>Isi Hadis (Bahasa Arab):</strong> {{ $hadith['hadithArabic'] }}
                <div class="hadith-arabic">
                    {{ $hadith['hadithArabic'] }}
                    <h1>Hadist HR. Muslim</h1>
                    <ul>
                        @foreach($hadiths as $hadith)
                            <li>
                                <strong>Nomor Hadis:</strong> {{ $hadith['number'] }}<br>
                                <strong>Hadis Arab:</strong> {{ $hadith['arab'] }}<br>
                                <strong>Terjemahan:</strong> {{ $hadith['id'] }}
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        @endforeach
    </div>
@endsection --}}

<style>
    .hadis-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }

    .hadis-box {
        border: 2px solid #333;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        position: relative;
    }

    .hadis-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .hadis-info {
        font-size: 16px;
    }

    .open-button {
        position: absolute;
        bottom: 5px;
        right: 10px;
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .open-button:hover {
        background-color: #45a049;
    }
</style>
</head>
<div class="hadis-container">
    @foreach($allBooks as $book)
        <div class="hadis-box">
            <div class="hadis-title">{{ $book['name'] }}</div>
            <div class="hadis-info">
                <p><strong>ID:</strong> {{ $book['id'] }}</p>
                <p><strong>Tersedia:</strong> {{ $book['available'] }}</p>
            </div>
            <button class="open-button" onclick="toggleHadis('{{ $book['id'] }}')">Open</button>
            <div id="{{ $book['id'] }}-content" class="hadis-content">
                @if($book['id'] === 'bukhari')
                    <ul>
                        @foreach($bukhariHadiths['hadiths'] as $hadith)
                            <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                            <p></strong> {{ $hadith['arab'] }}</p>
                        <p></strong> {{ $hadith['id'] }}</li><p>
                        @endforeach
                    </ul>
                @endif
                @if($book['id'] === 'muslim')
                <ul>
                    @foreach($muslimHadiths['hadiths'] as $hadith)
                        <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                        <p></strong> {{ $hadith['arab'] }}</p>
                    <p></strong> {{ $hadith['id'] }}</li><p>
                    @endforeach
                </ul>
            @endif
            @if($book['id'] === 'tirmidzi')
            <ul>
                @foreach($tirmidziHadiths['hadiths'] as $hadith)
                    <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                    <p></strong> {{ $hadith['arab'] }}</p>
                <p></strong> {{ $hadith['id'] }}</li><p>
                @endforeach
            </ul>
        @endif
        @if($book['id'] === 'nasai')
            <ul>
                @foreach($nasaiHadiths['hadiths'] as $hadith)
                    <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                    <p></strong> {{ $hadith['arab'] }}</p>
                <p></strong> {{ $hadith['id'] }}</li><p>
                @endforeach
            </ul>
        @endif
        @if($book['id'] === 'abu-daud')
        <ul>
            @foreach($abuHadiths['hadiths'] as $hadith)
                <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                <p></strong> {{ $hadith['arab'] }}</p>
            <p></strong> {{ $hadith['id'] }}</li><p>
            @endforeach
        </ul>
    @endif
    @if($book['id'] === 'ahmad')
        <ul>
            @foreach($ahmadHadiths['hadiths'] as $hadith)
                <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                <p></strong> {{ $hadith['arab'] }}</p>
            <p></strong> {{ $hadith['id'] }}</li><p>
            @endforeach
        </ul>
    @endif
    @if($book['id'] === 'darimi')
        <ul>
            @foreach($darimiHadiths['hadiths'] as $hadith)
                <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                <p></strong> {{ $hadith['arab'] }}</p>
            <p></strong> {{ $hadith['id'] }}</li><p>
            @endforeach
        </ul>
    @endif
    @if($book['id'] === 'ibnu-majah')
        <ul>
            @foreach($ibnuHadiths['hadiths'] as $hadith)
                <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                <p></strong> {{ $hadith['arab'] }}</p>
            <p></strong> {{ $hadith['id'] }}</li><p>
            @endforeach
        </ul>
    @endif
    @if($book['id'] === 'malik')
        <ul>
            @foreach($malikHadiths['hadiths'] as $hadith)
                <li><p><strong>Hadis {{ $hadith['number'] }}:</p>
                <p></strong> {{ $hadith['arab'] }}</p>
            <p></strong> {{ $hadith['id'] }}</li><p>
            @endforeach
        </ul>
    @endif
            </div>
        </div>
    @endforeach
</div>

<script>
    function toggleHadis(id) {
        var content = document.getElementById(id + "-content");
        if (content.style.display === "none") {
            content.style.display = "block";
        } else {
            content.style.display = "none";
        }
    }
</script>
@endsection

