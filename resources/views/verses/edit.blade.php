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

    input[type="text"], input[type="checkbox"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    input[type="checkbox"] {
        width: auto;
    }

    button[type="submit"], a {
        display: inline-block;
        margin-top: 20px;
        background-color: #218838;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        border: none;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover, a:hover {
        background-color: rgb(16, 44, 87);
    }

    a {
        text-align: center;
    }
</style>
</head>
<body>
    @foreach($verseProgresses->unique('day_number') as $verseProgress)
    <h1>Edit Jurnal Hari: {{ $verseProgress->day_number }}</h1>

    <form action="{{ route('verses.update', ['day_number' => $verseProgress->day_number]) }}" method="POST">
        @csrf
        @method('PUT')

        <table>
            <thead>
                <tr>
                    <th>Keterangan Hafalan Ayat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($verseProgresses->where('day_number', $verseProgress->day_number) as $progress)
                    <tr>
                        <td>
                            <input type="text" name="hafalan_ayat[{{ $progress->id }}]" id="hafalan_ayat_{{ $progress->id }}" value="{{ $progress->hafalan_ayat }}" required>
                        </td>
                        <td>
                            <input type="checkbox" name="is_finished[{{ $progress->id }}]" id="is_finished_{{ $progress->id }}" {{ $progress->is_finished ? 'checked' : '' }}>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit">Update</button>
    </form>

    <a href="{{ route('verses.show', ['id' => $test_id]) }}">Back to Verse Progress</a>
    @endforeach
    </body>
