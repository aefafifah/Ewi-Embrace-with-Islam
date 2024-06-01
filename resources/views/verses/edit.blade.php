<h1>Edit Verse Progress for Day Number: {{ $verseProgresses->first()->day_number }}</h1>

<form action="{{ route('verses.update', ['day_number' => $verseProgresses->first()->day_number]) }}" method="POST">
    @csrf
    @method('PUT')

    @foreach($verseProgresses as $verseProgress)
        <div class="verse-group">
            <label for="hafalan_ayat_{{ $verseProgress->id }}">Hafalan Ayat:</label>
            <input type="text" name="hafalan_ayat[{{ $verseProgress->id }}]" id="hafalan_ayat_{{ $verseProgress->id }}" value="{{ $verseProgress->hafalan_ayat }}" required>

            <label for="is_finished_{{ $verseProgress->id }}">Is Finished:</label>
            <input type="checkbox" name="is_finished[{{ $verseProgress->id }}]" id="is_finished_{{ $verseProgress->id }}" {{ $verseProgress->is_finished ? 'checked' : '' }}>
        </div>
        <br>
    @endforeach
    <input type="hidden" name="_method" value="PUT"> <!-- Simulasi metode PUT -->
    <button type="submit">Update</button>
</form>


    <a href="{{ route('verses.show', ['day_number' => $verseProgresses->first()->day_number]) }}">Back to Verse Progress</a>
</body>
