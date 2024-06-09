@extends('layout.master')
@section('content')
    <h1 style="color: #102C57; text-align: center; margin-bottom: 30px;">Daftar Surah Al-Quran</h1>

    <!-- Search Form -->
    <form action="{{ route('quran.index') }}" method="GET" style="margin-bottom: 30px; max-width: 600px; margin-left: auto; margin-right: auto;">
        <input type="text" name="keyword" value="{{ request()->input('keyword') }}" placeholder="Cari Surah..." style="padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
        <input type="number" name="number_of_ayah" value="{{ request()->input('number_of_ayah') }}" placeholder="Berdasarkan Jumlah Ayat..." style="padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
        <input type="text" name="place" value="{{ request()->input('place') }}" placeholder="Berdasarkan Tempat (Mecca/Medina)..." style="padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
        <input type="text" name="type" value="{{ request()->input('type') }}" placeholder="Bertdasarkan Tipe (Meccan/Medinan)..." style="padding: 10px; width: 100%; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 20px;">
        <button type="submit" style="background-color: #102C57; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;"
        onmouseover="this.style.backgroundColor='#081A3D';"
        onmouseout="this.style.backgroundColor='#102C57';">Search</button>
    </form>

    <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
        @foreach ($surahs as $surah)
            <div class="item-surah category-content" style="background-color: #EADBC8; padding: 15px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, background-color 0.3s ease; width: calc(33.333% - 20px); max-width: 300px;"
                onmouseover="this.style.transform='scale(1.02)'; this.style.backgroundColor='#DAC0A3';"
                onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#EADBC8';">
                <h2 style="color: #102C57; font-size: 1.5em; margin-bottom: 10px;">{{ $surah->number_of_surah }}. {{ $surah->name ?? 'Unknown Name' }}</h2>
                <h3 style="color: #102C57; font-size: 1.2em; margin-bottom: 10px;">{{ $surah->name_translations->id ?? 'Unknown Translation' }}</h3>
                <p style="color: #333; margin-bottom: 5px;">Jumlah Ayat: {{ $surah->number_of_ayah ?? 'Unknown' }}</p>
                <p style="color: #333; margin-bottom: 5px;">Tempat: {{ $surah->place ?? 'Unknown' }}</p>
                <p style="color: #333; margin-bottom: 10px;">Tipe: {{ $surah->type ?? 'Unknown' }}</p>
                <button onclick="window.location='{{ route('quran.indexId', ['id' => $surah->number_of_surah]) }}'" style="background-color: #102C57; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease; margin-bottom: 5px;"
                    onmouseover="this.style.backgroundColor='#081A3D';"
                    onmouseout="this.style.backgroundColor='#102C57';">Buka Surat</button>
                <button onclick="window.location='{{ route('test.indexId', ['id' => $surah->number_of_surah]) }}'" style="background-color: #102C57; color: #fff; padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#081A3D';"
                    onmouseout="this.style.backgroundColor='#102C57';">Siap menghafal?</button>
                <p style="color: #333; margin-bottom: 5px;">Audio:</p>
                <div class="audio-container" style="margin-top: 10px;">
                    <audio src="{{ $surah->recitation ?? '' }}" controls style="width: 100%;"></audio>
                </div>
            </div>
        @endforeach
    </div>

    <div class="pagination" style="margin-top: 30px;">
        {{ $surahs->links('vendor.pagination.custom') }}
    </div>

    <!-- Responsive CSS -->
    <style>

        body{
            background-image: url('https://img.freepik.com/free-vector/mandala-illustration_53876-81805.jpg?t=st=1717911207~exp=1717914807~hmac=616f22c6a27d66670f919975100976fead8bf21ade3a336dea5ccf9a879e85ff&w=1380');
            background-size :contain;
            /* background-repeat :; */
        }

        @media (max-width: 768px) {
            .item-surah {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .item-surah {
                width: calc(100% - 20px);
            }

            form input, form button {
                font-size: 14px;
            }

            h1, h2, h3, p, button {
                font-size: 14px;
            }
        }
    </style>
@endsection
