@extends('layout.master')
@section('content')
<div class="surah-container about" style="background-color: #FEFAF6; padding: 20px; border-radius: 12px;">
    <h1 style="color: #102C57; text-align: center;">Daftar Surah Al-Quran</h1>
    <div class="daftar-surah">
        @foreach ($surahs as $surah)
            <div class="item-surah category-content" style="background-color: #EADBC8; padding: 20px; margin-bottom: 15px; border-radius: 12px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, background-color 0.3s ease;"
                onmouseover="this.style.transform='scale(1.02)'; this.style.backgroundColor='#DAC0A3';"
                onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#EADBC8';">
                <h2 style="color: #102C57;">{{ $surah->number_of_surah }}. {{ $surah->name }}</h2>
                <h3 style="color: #102C57;">{{ $surah->name_translations->id }}</h3>
                <p style="color: #333;">Jumlah Ayat: {{ $surah->number_of_ayah }}</p>
                <p style="color: #333;">Tempat: {{ $surah->place }}</p>
                <p style="color: #333;">Tipe: {{ $surah->type }}</p>
                <button onclick="window.location='{{ route('quran.indexId', ['id' => $surah->number_of_surah]) }}'" style="background-color: #102C57; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease; margin-bottom: 5px;"
                    onmouseover="this.style.backgroundColor='#081A3D';"
                    onmouseout="this.style.backgroundColor='#102C57';">Buka Surat</button>
                    <button onclick="window.location='{{ route('test.indexId', ['id' => $surah->number_of_surah]) }}'" style="background-color: #102C57; color: #fff; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;"
                        onmouseover="this.style.backgroundColor='#081A3D';"
                        onmouseout="this.style.backgroundColor='#102C57';">Siap menghafal?</button>

                {{-- <a href="{{ route('test.indexId', ['id' => $surah->number_of_surah]) }}" style="display: block; margin-top: 10px; color: #102C57; transition: color 0.3s ease;"
                    onmouseover="this.style.color='#081A3D';"
                    onmouseout="this.style.color='#102C57';">Kunjungi halaman Test</a> --}}

                <p style="color: #333;">Audio:</p>
                <div class="audio-container" style="margin-top: 10px;">
                    <audio src="{{ $surah->recitation }}" controls style="width: 100%;"></audio>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination" style="margin-top: 20px;">
        {{ $surahs->links('vendor.pagination.custom') }}
    </div>
</div>
@endsection
