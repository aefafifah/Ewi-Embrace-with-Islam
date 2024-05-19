

@include('nav')



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

    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card border-light mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Light card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
