@extends('layout.master')
@section('content')
<style>

    body{
        background-image: url('https://img.freepik.com/free-vector/mandala-illustration_53876-81805.jpg?t=st=1717911207~exp=1717914807~hmac=616f22c6a27d66670f919975100976fead8bf21ade3a336dea5ccf9a879e85ff&w=1380');
    background-repeat: no-repeat;
    background-size: cover;
    }

    .hadis-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
        /* background-color: #FEFAF6; */
    }

    .hadis-box {
        flex: 1 1 calc(33.33% - 40px);
        max-width: 1000px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background-color: #EADBC8;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    @media (max-width: 992px) {
        .hadis-box {
            flex: 1 1 calc(50% - 40px);
        }
    }

    @media (max-width: 600px) {
        .hadis-box {
            flex: 1 1 calc(100% - 40px);
        }
    }

    .hadis-box:hover {
        transform: translateY(-5px);
        background-color: #DAC0A3;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .hadis-title {
        font-size: 22px;
        font-weight: bold;
        color: #102C57;
        margin-bottom: 15px;
        border-bottom: 2px solid #4CAF50;
        padding-bottom: 10px;
    }

    .pagination {
        margin-top: 15px;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .pagination button {
        background-color: #102C57;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 12px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .pagination button:hover {
        background-color: #084C6C;
    }

    .hadith-group {
        display: none;
        text-align: left;
    }

    .hadith-group li {
        list-style: none;
        padding: 10px;
        border-bottom: 1px solid #ddd;
        background-color: #FEFAF6;
        margin-bottom: 10px;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .hadith-group li:hover {
        background-color: #f1f1f1;
    }

    .hadith-group p {
        margin: 5px 0;
    }

    .hadith-number {
        font-weight: bold;
        color: #4CAF50;
    }

    .hadith-arabic {
        font-size: 14px;
        color: #555;
    }

    .hadith-translation {
        font-size: 16px;
        color: #333;
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
                    $groupCount = ceil(count($hadiths) / 10);
                @endphp
                <div class="pagination">
                    @for ($i = 0; $i < $groupCount; $i++)
                        <button onclick="showHadithGroup('{{ $book['id'] }}', {{ $i + 1 }})">Bagian {{ $i + 1 }}</button>
                    @endfor
                </div>
                @foreach($hadiths as $index => $hadith)
                    @if($index % 10 == 0)
                        @if($index != 0)
                            </ul>
                        @endif
                        <ul id="{{ $book['id'] }}-group-{{ floor($index / 10) + 1 }}" class="hadith-group">
                    @endif
                    <li>
                        <p class="hadith-number">Hadis {{ $hadith['number'] }}:</p>
                        <p class="hadith-arabic">{{ $hadith['arab'] }}</p>
                        <p class="hadith-translation">{{ $hadith['id'] }}</p>
                    </li>
                @endforeach
                @if(count($hadiths) % 10 != 0)
                    </ul>
                @endif
            </div>
        </div>
    @endforeach
</div>

<script>
    function showHadithGroup(bookId, groupNumber) {
        var selectedGroup = document.getElementById(bookId + '-group-' + groupNumber);
        if (selectedGroup) {
            if (selectedGroup.style.display === 'block') {
                selectedGroup.style.display = 'none';
            } else {
                var hadithGroups = document.querySelectorAll('#' + bookId + '-content .hadith-group');
                for (var i = 0; i < hadithGroups.length; i++) {
                    hadithGroups[i].style.display = 'none';
                }
                selectedGroup.style.display = 'block';
            }
        }
    }
</script>

@endsection
