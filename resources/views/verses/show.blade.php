<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal Hafalan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: rgb(234, 219, 200);
            color: #333;
            padding: 20px;
        }

        h1 {
            color: rgb(16, 44, 87);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid rgb(16, 44, 87);
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: rgb(218, 192, 163);
            color: rgb(16, 44, 87);
        }

        tr:nth-child(even) {
            background-color: rgb(240, 229, 211);
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background-color:#218838;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: rgb(16, 44, 87);
        }

        .no-journal {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
<h1>Jurnal Hafalan</h1>

@if($verseProgresses->isEmpty())
    <p class="no-journal">Tidak ada jurnal untuk hari ini.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Hari ke</th>
                <th>Keterangan Hafalan Ayat</th>
                <th>Status</th>
                <th>Action</th> <!-- Kolom untuk action -->
            </tr>
        </thead>
        <tbody>
            @foreach($verseProgresses as $verseProgress)
                <tr>
                    <td>{{ $verseProgress->day_number }}</td>
                    <td>
                        <ul>
                            <li>{{ $verseProgress->hafalan_ayat }}</li>
                        </ul>
                    </td>
                    <td>{{ $verseProgress->is_finished ? 'Yes' : 'No' }}</td>
                    <td> <!-- Tambahkan kolom untuk action -->
                        <form action="{{ route('verses.destroy', ['day_number' => $verseProgress->day_number, 'hafalan_ayat' => $verseProgress->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tambahkan tautan ke halaman edit -->
    <a href="{{ route('verses.edit', ['day_number' => $verseProgresses->first()->day_number]) }}">Edit</a>
@endif
</body>
</html>
