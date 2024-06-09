@extends('layout.master')

@section('content')
    <style>
      .edit-body {
        font-family: 'Arial',sans-serif;
    background-color: rgb(234, 219, 200);
    color: #333;
    background-image: url('https://img.freepik.com/free-vector/mandala-illustration_53876-81805.jpg?t=st=1717911207~exp=1717914807~hmac=616f22c6a27d66670f919975100976fead8bf21ade3a336dea5ccf9a879e85ff&w=1380');
    background-repeat: no-repeat;
    background-size: cover;
    padding: 20px; /* Added padding */
}

.edit-h1 {
    color: rgb(16, 44, 87);
    text-align: center; /* Centered the heading */
    margin-bottom: 20px; /* Added margin bottom */
}

.edit-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.edit-th, .edit-td {
    border: 1px solid rgb(16, 44, 87);
    padding: 10px;
    text-align: center;
}

.edit-th {
    background-color: rgb(218, 192, 163);
    color: rgb(16, 44, 87);
}

.edit-tr:nth-child(even) {
    background-color: rgba(240, 229, 211, 0);
}

.edit-input-text, .edit-input-checkbox {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.edit-input-checkbox {
    width: 40%;
}

.edit-button-submit, .edit-a {
    display: inline-block;
    margin-top: 20px;
    background-color: #102C57;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    border: none;
    transition: background-color 0.3s ease;
}

.edit-button-submit:hover, .edit-a:hover {
    background-color: rgb(16, 44, 87);
}

.edit-a {
    text-align: center;
    /* display: block; */
    margin-top: 20px;
}

@media only screen and (max-width: 768px) {
    .edit-body {
        padding: 10px;
    }
    .edit-input-text, .edit-input-checkbox {
        width: 90%; /* Mengisi lebar layar penuh */
    }
    .edit-input-checkbox {
        width: 90%; /* Mengisi lebar layar penuh */
    }
}

@media only screen and (max-width: 425px) {
    .edit-body {
        padding: 10px;
    }
    .edit-input-text, .edit-input-checkbox {
        width: 90%; /* Mengisi lebar layar penuh */
    }
    .edit-input-checkbox {
        width: 90%; /* Mengisi lebar layar penuh */
    }
    .edit-h1 {
        font-size: 1.2em; /* Mengurangi ukuran font untuk judul */
    }
    .edit-th, .edit-td {
        padding: 5px; /* Mengurangi padding untuk sel tabel */
    }
    .edit-button-submit, .edit-a {
        padding: 8px 15px; /* Mengurangi padding untuk tombol dan tautan */
    }
}
    </style>
    <div class="edit-body">
        @foreach($verseProgresses->unique('day_number') as $verseProgress)
            <h1 class="edit-h1">Edit Jurnal Hari: {{ $verseProgress->day_number }}</h1>

            <form action="{{ route('verses.update', ['day_number' => $verseProgress->day_number]) }}" method="POST">
                @csrf
                @method('PUT')

                <table class="edit-table">
                    <thead>
                        <tr class="edit-tr">
                            <th class="edit-th">Keterangan Hafalan Ayat</th>
                            <th class="edit-th">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($verseProgresses->where('day_number', $verseProgress->day_number) as $progress)
                            <tr class="edit-tr">
                                <td class="edit-td">
                                    <input type="text" name="hafalan_ayat[{{ $progress->id }}]" id="edit-hafalan_ayat_{{ $progress->id }}" class="edit-input-text" value="{{ $progress->hafalan_ayat }}" required>
                                </td>
                                <td class="edit-td">
                                    <input type="checkbox" name="is_finished[{{ $progress->id }}]" id="edit-is_finished_{{ $progress->id }}" class="edit-input-checkbox" {{ $progress->is_finished ? 'checked' : '' }}>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="edit-button-submit">Update</button>
            </form>

            <a href="{{ route('verses.show', ['id' => $test_id]) }}" class="edit-a">Back to Verse Progress</a>
        @endforeach
    </div>
@endsection
