@extends('layout.master')

@section('content')
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('https://img.freepik.com/free-vector/mandala-illustration_53876-81805.jpg?t=st=1717911207~exp=1717914807~hmac=616f22c6a27d66670f919975100976fead8bf21ade3a336dea5ccf9a879e85ff&w=1380');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .ayat-h2 {
            color: #102C57;
            margin-bottom: 10px;
            font-size: 24px;
            text-align: center;
        }

        .ayat-p {
            color: #333;
            line-height: 1.6;
            margin-bottom: 10px;
            text-align: center;
        }

        .ayat-ul {
            list-style-type: none;
            padding: 0;
        }

        .ayat-li {
            margin-bottom: 20px;
            background-color: #EADBC8;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, background-color 0.3s;
        }

        .ayat-li:hover {
            transform: translateY(-5px);
            background-color: #DAC0A3;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .ayat-panel {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .ayat-panel-heading {
            padding: 10px 15px;
            background-color: #102C57;
            color: #fff;
            border-bottom: 2px solid #102C57;
            font-size: 18px;
        }

        .ayat-panel-heading h2 {
            color: #FEFAF6;
            text-align: center;
        }

        .ayat-panel-heading h3 {
            color: #FEFAF6;
        }

        .ayat-panel-body {
            padding: 15px;
            background-color: #FEFAF6;
        }

        .ayat-verse {
            font-size: 30px;
            text-align: right;
            direction: rtl;
            padding: 10px;
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
        }

        .ayat-translation {
            font-size: 16px;
            color: #666;
            text-align: left;
        }

        /* Responsive CSS */
        @media (max-width: 768px) {

            .ayat-h2 {
                font-size: 20px;
            }

            .ayat-p {
                font-size: 14px;
            }

            .ayat-panel-heading {
                font-size: 16px;
            }

            .ayat-verse {
                font-size: 24px;
            }

            .ayat-translation {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .ayat-h2 {
                font-size: 18px;
            }

            .ayat-panel-heading {
                font-size: 14px;
            }

            .ayat-verse {
                font-size: 20px;
                padding: 5px;
            }

            .ayat-translation {
                font-size: 12px;
            }
        }
    </style>

    <h2 class="ayat-h2">{{ $response->name }}</h2>
    <h2 class="ayat-h2">({{ $response->name_translations->id }})</h2>
    <p class="ayat-p">{{ $response->number_of_ayah }} Ayat • Tempat: {{ $response->place }} • Tipe: {{ $response->type }}</p>

    <div class="ayat-panel ayat-panel-default">
        <div class="ayat-panel-heading">
            <h2>Verses:</h2>
        </div>
        <div class="ayat-panel-body">
            <ul class="ayat-ul">
                @foreach ($response->verses as $verse)
                    <li class="ayat-li">
                        <div class="ayat-panel ayat-panel-default">
                            <div class="ayat-panel-heading">
                                <h3>{{ $response->name }} Ayat {{ $verse->number }}</h3>
                            </div>
                            <div class="ayat-panel-body">
                                <p class="ayat-verse">{{ $verse->text }}</p>
                                <p class="ayat-translation">Terjemahan: {{ $verse->translation_id }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
