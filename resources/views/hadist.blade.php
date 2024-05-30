@extends('layout.master')
@section('content')
<style>
    .hadis-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .hadis-box {
        width: 300px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .hadis-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .pagination {
        margin-top: 15px;
    }

    .pagination button {
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 5px 10px;
        cursor: pointer;
        margin: 5px;
    }

    .pagination button:hover {
        background-color: #45a049;
    }

    .hadith-group {
        display: none;
        text-align: left;
    }

    .hadith-group li {
        list-style: none;
        padding: 5px;
        border-bottom: 1px solid #ddd;
    }
</style>

<div class="hadis-container">
    @foreach($allBooks as $book)
        <div class="hadis-box">
            <div class="hadis-title">{{ $book['name'] }}</div>
            <div id="{{ $book['id'] }}-content" class="hadis-content">
                @php
                    $hadiths = [];
                    switch($book['id']) {
                        case 'bukhari':
                            $hadiths = $bukhariHadiths['hadiths'];
                            break;
                        case 'muslim':
                            $hadiths = $muslimHadiths['hadiths'];
                            break;
                        case 'tirmidzi':
                            $hadiths = $tirmidziHadiths['hadiths'];
                            break;
                        case 'nasai':
                            $hadiths = $nasaiHadiths['hadiths'];
                            break;
                        case 'abu-daud':
                            $hadiths = $abuHadiths['hadiths'];
                            break;
                        case 'ahmad':
                            $hadiths = $ahmadHadiths['hadiths'];
                            break;
                        case 'darimi':
                            $hadiths = $darimiHadiths['hadiths'];
                            break;
                        case 'ibnu-majah':
                            $hadiths = $ibnuHadiths['hadiths'];
                            break;
                        case 'malik':
                            $hadiths = $malikHadiths['hadiths'];
                            break;
                    }
                    $groupCount = ceil(count($hadiths) / 5);
                @endphp
                <div class="pagination">
                    @for ($i = 0; $i < $groupCount; $i++)
                        <button onclick="showHadithGroup('{{ $book['id'] }}', {{ $i + 1 }})">Bagian {{ $i + 1 }}</button>
                    @endfor
                </div>
                @foreach($hadiths as $index => $hadith)
                    @if($index % 5 == 0)
                        @if($index != 0)
                            </ul>
                        @endif
                        <ul id="{{ $book['id'] }}-group-{{ floor($index / 5) + 1 }}" class="hadith-group">
                    @endif
                    <li>
                        <p><strong>Hadis {{ $hadith['number'] }}:</strong></p>
                        <p>{{ $hadith['arab'] }}</p>
                        <p>{{ $hadith['id'] }}</p>
                    </li>
                @endforeach
                @if(count($hadiths) % 5 != 0)
                    </ul>
                @endif
            </div>
        </div>
    @endforeach
</div>

<script>
    function showHadithGroup(bookId, groupNumber) {
        // Menampilkan atau menyembunyikan kelompok hadis tergantung pada kondisi saat ini
        var selectedGroup = document.getElementById(bookId + '-group-' + groupNumber);
        if (selectedGroup) {
            if (selectedGroup.style.display === 'block') {
                selectedGroup.style.display = 'none'; // Jika sudah ditampilkan, maka sembunyikan
            } else {
                // Menyembunyikan semua kelompok hadis untuk buku yang sesuai
                var hadithGroups = document.querySelectorAll('#' + bookId + '-content .hadith-group');
                for (var i = 0; i < hadithGroups.length; i++) {
                    hadithGroups[i].style.display = 'none';
                }
                // Menampilkan kelompok hadis yang dipilih
                selectedGroup.style.display = 'block';
            }
        }
    }
</script>

@endsection
