<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surah Al-Fatiha</title>
    <!-- Tambahkan stylesheet CSS di sini jika diperlukan -->
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #007bff;
            margin-bottom: 10px;
        }

        p {
            color: #333;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .verse {
            font-size: 18px;
            color: #333;
            text-align: right;
            direction: rtl;
        }

        .translation {
            font-size: 16px;
            color: #666;
            text-align: right;
            direction: rtl;
        }
    </style>
</head>
<body>
    <h2>{{ $response->name }} - {{ $response->name_translations->id }}</h2>
    <p>Jumlah Ayat: {{ $response->number_of_ayah }}</p>
    <p>Tempat: {{ $response->place }}</p>
    <p>Tipe: {{ $response->type }}</p>

    <h2>Verses:</h2>
    <ul>
        @foreach ($response->verses as $verse)
            <li>
                <p class="verse">{{ $verse->number }}. {{ $verse->text }}</p>
                <p class="translation">Translation (ID): {{ $verse->translation_id }}</p>
            </li>
        @endforeach
    </ul>

    {{-- <h2>Tafsir:</h2>
    @foreach ($response->tafsir->id->kemenag->text as $key => $tafsir)
        <h3>Ayat {{ $key }}</h3>
        <p>{{ $tafsir }}</p>
    @endforeach --}}
</body>
</html>
