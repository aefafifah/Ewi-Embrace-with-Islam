<!-- resources/views/verses/show.blade.php -->

<h1>Verse Progress</h1>

@if($verseProgresses->isEmpty())
    <p>Tidak ada jurnal untuk hari ini.</p>
@else
    @foreach($verseProgresses as $verseProgress)
        <div>
            <p>Day Number: {{ $verseProgress->day_number }}</p>
            <p>Hafalan Ayat:</p>
            <ul>
                <li>{{ $verseProgress->hafalan_ayat }}</li>
            </ul>
            <p>Is Finished: {{ $verseProgress->is_finished ? 'Yes' : 'No' }}</p>
        </div>
        <br>
    @endforeach

    <!-- Tambahkan tautan ke halaman edit -->
    <a href="{{ route('verses.edit', ['day_number' => $verseProgresses->first()->day_number]) }}">Edit</a>
@endif
