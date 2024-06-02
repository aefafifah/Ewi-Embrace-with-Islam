<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $response->name }}</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #FEFAF6;
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #102C57;
            margin-bottom: 10px;
            font-size: 24px;
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
            background-color: #EADBC8;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, background-color 0.3s;
        }

        li:hover {
            transform: translateY(-5px);
            background-color: #DAC0A3;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .panel {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .panel-heading {
            padding: 10px 15px;
            background-color: #102C57;
            color: #fff;
            border-bottom: 2px solid #102C57;
        }

        .panel-body {
            padding: 15px;
            background-color: #FEFAF6;
        }

        .verse {
            font-size: 30px;
            text-align: right;
            direction: rtl;
            padding: 10px;
            margin-bottom: 20px;
            font-family: Scheherazade;
        }

        .translation {
            font-size: 16px;
            color: #666;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>{{ $response->name }}</h2>
    <h2>({{ $response->name_translations->id }})</h2>
    <p>{{ $response->number_of_ayah }} Ayat • Tempat: {{ $response->place }} • Tipe: {{ $response->type }}</p>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Verses:</h2>
        </div>
        <div class="panel-body">
            <ul>
                @foreach ($response->verses as $verse)
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>{{ $response->name }} Ayat {{ $verse->number }}</h3>
                            </div>
                            <div class="panel-body">
                                <p class="verse">{{ $verse->text }}</p>
                                <p class="translation">Terjemahan: {{ $verse->translation_id }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
