<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $response->name }}</title>

    <!-- Tambahkan stylesheet CSS di sini jika diperlukan -->
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: rgb(234, 219, 200);
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: rgb(16, 44, 87);
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
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .panel {
            margin-bottom: 20px;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05);
            box-shadow: 0 1px 1px rgba(0,0,0,0.05);
        }

        .panel-heading {
    padding: 10px 15px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    background-color: #102c67;
    border-color: #ddd;
}

.panel-heading h2, .panel-heading h3 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    color: #fff;
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
            font-size: 20px;
            color: #666;
            text-align: left;
            padding: 2%;
        }
    </style>
</head>
<body>
    <h2>{{ $response->name }}</h2>
    <h2>({{ $response->name_translations->id }})</h2>
    <p>{{ $response->number_of_ayah }} Ayat • Tempat: {{ $response->place }} • Tipe: {{ $response->type }} </p>

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
                            <h3> {{ $response->name}} Ayat {{$verse->number}}</h3>
                        </div>
                        <div class="panel-body">
                            <p class="verse">{{ $verse->text }}</p>
                            <p class="translation">Terjemahan: {{ $verse->translation_id }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
    </ul>
</body>
</html>
