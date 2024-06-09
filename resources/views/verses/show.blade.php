@extends('layout.master')
@section('content')
<title>Jurnal Hafalan</title>
<style>
    .show-body {
        font-family: 'Arial',sans-serif;
        background-image: url('https://img.freepik.com/free-vector/mandala-illustration_53876-81805.jpg?t=st=1717911207~exp=1717914807~hmac=616f22c6a27d66670f919975100976fead8bf21ade3a336dea5ccf9a879e85ff&w=1380');
    background-repeat: no-repeat;
    background-size: cover;
        color: #333;
        margin: 0;
    }

    .show-h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
        margin-top: 40px; /* Added margin to the top of the title */
    }

    .show-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        /* background-color: #fff; */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px; /* Added margin to bottom of the table */
    }

    .show-th, .show-td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    .show-th {
        background-color: #DAC0A3;
    }

    .show-tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .show-button {
        display: inline-block;
        background-color: #102C57;
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
        cursor: pointer;
    }

    .show-button:hover {
        background-color: #102C57;
    }

    .show-no-journal {
        margin-top: 20px;
        font-size: 18px;
        text-align: center;
    }

    .show-action-buttons {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .show-container {
        max-width: 800px;
        margin: 0 auto;
        padding-bottom: 40px; /* Added padding to bottom */
    }

    .show-add-button {
        display: block;
        text-align: center;
        margin-top: 20px;
    }

    .show-back-button {
        margin-top: 20px; /* Changed from margin-bottom to margin-top */
        text-align: center;
    }

    ul {
        list-style-type: none; /* Removed bullet points */
        padding: 0; /* Removed default padding */
        margin: 0; /* Removed default margin */
    }

    /* Media Queries */
@media only screen and (max-width: 768px) {
    .show-container {
        max-width: 80%; /* Adjusted container width for smaller screens */
    }

    .show-table {
        width: 90%;
        border-collapse: collapse;
        margin-top: 20px;
        /* background-color: #fff; */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px; /* Added margin to bottom of the table */
    }
}

@media only screen and (max-width: 425px) {
    .show-container {
        max-width: 80%; /* Adjusted container width for smaller screens */
    }
    .show-table {
        width: 60%;
        border-collapse: collapse;
        margin-top: 20px;
        /* background-color: #fff; */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px; /* Added margin to bottom of the table */
    }
    .show-h1 {
        font-size: 24px;
    }
    .show-button {
        padding: 6px 12px;
    }
}
</style>
<body class = "show-body">
<div class="show-container">
    <h1 class="show-h1">Jurnal Hafalan</h1>

    @if($verseProgresses->isEmpty())
        <p class="show-no-journal">Tidak ada jurnal untuk hari ini.</p>
    @else
        <table class="show-table">
            <thead>
                <tr class="show-tr">
                    <th class="show-th">Hari ke</th>
                    <th class="show-th">Keterangan Hafalan Ayat</th>
                    <th class="show-th">Status</th>
                    <th class="show-th">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($verseProgresses as $verseProgress)
                    <tr class="show-tr">
                        <td class="show-td">{{ $verseProgress->day_number }}</td>
                        <td class="show-td">
                            <ul>
                                <li>{{ $verseProgress->hafalan_ayat }}</li>
                            </ul>
                        </td>
                        <td class="show-td">{{ $verseProgress->is_finished ? 'Yes' : 'No' }}</td>
                        <td class="show-td show-action-buttons">
                            <form action="{{ route('verses.destroy', ['day_number' => $verseProgress->day_number, 'hafalan_ayat' => $verseProgress->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="show-button">Hapus</button>
                            </form>
                            <a href="{{ route('verses.edit', ['day_number' => $verseProgress->day_number]) }}" class="show-button">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="show-back-button">
        <a href="{{ route('test.indexId', ['id' => $id]) }}" class="show-button">Back</a>
    </div>

    {{-- Uncomment the below section if you want to add the "Tambah Jurnal" button --}}
    {{-- <div class="show-add-button">
        <a href="{{ route('verses.create') }}" class="show-button">Tambah Jurnal</a>
    </div> --}}
</div>
</body>
@endsection
