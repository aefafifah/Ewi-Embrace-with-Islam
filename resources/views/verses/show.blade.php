<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal Hafalan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            padding: 20px;
            margin: 0;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }

        .no-journal {
            margin-top: 20px;
            font-size: 18px;
            text-align: center;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .add-button {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .back-button {
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="back-button">
        <a href="{{ route('test.indexId', ['id' => $id]) }}" class="button">Back</a>
    </div>

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
                    <th>Action</th>
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
                        <td class="action-buttons">
                            <form action="{{ route('verses.destroy', ['day_number' => $verseProgress->day_number, 'hafalan_ayat' => $verseProgress->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button">Hapus</button>
                            </form>
                            <a href="{{ route('verses.edit', ['day_number' => $verseProgress->day_number]) }}" class="button">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{-- <div class="add-button">
        <a href="{{ route('verses.create') }}" class="button">Tambah Jurnal</a>
    </div> --}}
</div>
</body>
</html>
