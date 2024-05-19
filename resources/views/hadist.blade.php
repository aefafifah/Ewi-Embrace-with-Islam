

@include('nav')

@section('content')
    <h1>Daftar Hadis</h1>
    <div class="hadith-racks">
        @foreach($response['hadiths']['data'] as $hadith)
            <div class="hadith-rack">
                <strong>Hadis Nomor {{ $hadith['hadithNumber'] }}</strong><br>
                <strong>Bab:</strong> {{ $hadith['chapter']['chapterEnglish'] }}<br>
                <strong>Nomor Hadis:</strong> {{ $hadith['hadithNumber'] }}<br>
                {{-- <strong>Isi Hadis (Bahasa Arab):</strong> {{ $hadith['hadithArabic'] }} --}}
                <div class="hadith-arabic">
                    {{ $hadith['hadithArabic'] }}
                </div>
            </div>
        @endforeach
    </div>
@endsection
