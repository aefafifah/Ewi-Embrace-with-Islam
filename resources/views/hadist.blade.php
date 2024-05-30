@extends('layout.master')
@section('content')
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
                        <ul id="{{ $book['id'] }}-group-{{ floor($index / 5) + 1 }}" class="hadith-group" style="display: none;">
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

<<script>
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

