@extends('layout.master')
@section('content')
<style>
    /* body, h1, h2, h3, p, ul, li, form, label, input, button {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    } */

    /* body {
        font-family: "Arial", sans-serif;
        background-color: #FEFAF6;
        color: #333;
        padding: 20px;
        /* text-align: center; */
body{
    background-image: url('https://img.freepik.com/free-vector/mandala-illustration_53876-81805.jpg?t=st=1717911207~exp=1717914807~hmac=616f22c6a27d66670f919975100976fead8bf21ade3a336dea5ccf9a879e85ff&w=1380');
}

    .test-panel {
        border-radius: 10px;
        margin-bottom: 20px;
        background-color: #FEFAF6;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }

    .test-panel-heading {
        background-color: #102C57;
        color: #ebe5e5;
        padding: 10px 15px;
        border-bottom: 2px solid #102C57;
        font-size: 18px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
         text-align: center;
    }

    .test-panel-heading h2{
        color:#ebe5e5;
        text-align: center;
        font-size:24px;

    }

    .test-panel-body {
        padding: 15px;
        text-align: center;
    }

    h2.test-h2 {
        color: #102C57;
        margin-bottom: 10px;
        font-size: 24px;
         text-align: center;
    }
    p.test-p{
    text-align: center;
    }
    h3.test-h3 {
        color: #fbfbfb;
        margin-bottom: 15px;
        font-size: 18px;
         text-align: center;
    }

    .test-verse {
        font-size: 30px;
        text-align: right;
        direction: rtl;
        padding: 10px;
        margin-bottom: 20px;
        font-family: 'Arial',sans-serif;
    }

    .test-translation {
        font-size: 16px;
        color: #666;
        text-align: left;
        margin-bottom: 20px;
         text-align: center;
    }

    #test-verselist ul {
        list-style-type: none;
        padding: 0;
    }

    #test-li {
    list-style-type: none; /* Menghilangkan daftar bulat */
    margin-bottom: 20px;
    /* background-color: #fafafa; */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, background-color 0.3s;
}
    #test-li li {
    list-style-type: none; /* Menghilangkan daftar bulat */
    margin-bottom: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s, background-color 0.3s;
}


    #test-li li:hover {
        list-style-type: none;
        transform: translateY(-5px);
        background-color: #DAC0A3;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Audio recording controls */
    #test-recordingControls {
        margin-top: 15px;
    }

    #test-recordingControls button {
        background-color: rgb(16, 44, 87);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
        transition: background-color 0.3s ease;
    }

    #test-recordingControls button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    #test-recordingControls button:hover:not(:disabled) {
        background-color: rgb(16, 44, 87);
    }

    #test-audioPreviewContainer {
        margin-top: 20px;
    }

    audio {
        width: 100%;
    }

    /* Form styling */
    form.test-form {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    form label.test-label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    form input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    form input[type="checkbox"] {
        margin-right: 10px;
    }

    form button[type="submit"] {
        margin-top: 10px;
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button[type="submit"]:hover {
        background-color: #102C57;
    }

    #test-nextButton {
        background-color: rgb(218, 192, 163);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        width: 100%;
        text-align: center;
        transition: background-color 0.3s ease;
        margin-bottom: 20px;
    }

    #test-nextButton:hover {
        background-color: rgb(16, 44, 87);
    }

    /* Responsive styling */
    @media (max-width: 768px) {

        h2.test-h2 {
            font-size: 20px;
        }

        h3.test-h3 {
            font-size: 16px;
        }

        .test-verse {
            font-size: 24px;
        }

        .test-translation {
            font-size: 14px;
        }

        #test-recordingControls button, form button[type="submit"], #test-nextButton {
            padding: 8px 16px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        h2.test-h2 {
            font-size: 18px;
        }

        .test-panel-heading {
            font-size: 14px;
        }

        .test-verse {
            font-size: 20px;
            padding: 5px;
        }

        .test-translation {
            font-size: 12px;
        }
    }
    /* Responsive styling */

    @media (max-width: 425px) {

/* Rules for screens up to 425px */

h2.test-h2 {
    font-size: 18px;
    text-align: center; /* Center aligning text on smaller screens */
}

h3.test-h3 {
    font-size: 14px;
    text-align: center; /* Center aligning text on smaller screens */
}

.test-verse {
    font-size: 20px;
    text-align: center; /* Center aligning text on smaller screens */
}

.test-translation {
    font-size: 12px;
    text-align: center; /* Center aligning text on smaller screens */
}

#test-recordingControls button,
form button[type="submit"],
#test-nextButton {
    padding: 6px 12px;
    font-size: 12px;
    margin-top:20px;
    margin-bottom:20px;
}

.test-panel-heading {
    font-size: 14px;
}

.test-panel {
    margin-left: 5px;
    margin-right: 5px;
}

form input[type="text"] {
    width: calc(100% - 10px);
    padding: 6px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

#test-recordingControls button {
        padding: 6px 12px; /* Mengurangi padding pada tombol untuk layar kecil */
        font-size: 12px; /* Mengurangi ukuran font pada tombol untuk layar kecil */
        margin-right: 5px; /* Mengurangi margin kanan pada tombol untuk layar kecil */
        bottom: 20px;
    }
}
@media (max-width: 768px) {

    #test-recordingControls button {
        padding: 8px 16px; /* Mengurangi padding pada tombol untuk layar kecil */
        font-size: 14px; /* Mengurangi ukuran font pada tombol untuk layar kecil */
        margin-right: 7px; /* Mengurangi margin kanan pada tombol untuk layar kecil */
        bottom : 20px;
    }

h2.test-h2 {
    font-size: 20px;
    text-align: center; /* menambahkan text-align untuk menengahkan teks pada layar kecil */
}

h3.test-h3 {
    font-size: 16px;
    text-align: center; /* menambahkan text-align untuk menengahkan teks pada layar kecil */
}

.test-verse {
    font-size: 24px;
    text-align: center; /* menambahkan text-align untuk menengahkan teks pada layar kecil */
}

.test-translation {
    font-size: 14px;
    text-align: center; /* menambahkan text-align untuk menengahkan teks pada layar kecil */
}

#test-recordingControls button, form button[type="submit"], #test-nextButton {
    padding: 8px 16px;
    font-size: 14px;
    margin-top:20px;
    margin-bottom:20px;
}

.test-panel-heading {
    font-size: 16px;
}

.test-panel {
    margin-left: 10px;
    margin-right: 10px;
}

form input[type="text"] {
    width: calc(100% - 20px);
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
}
}

</style>
<h2 class="test-h2">{{ $response->name }}</h2>
<h2 class="test-h2">({{ $response->name_translations->id }})</h2>
<p class="test-p">{{ $response->number_of_ayah }} Ayat • Tempat: {{ $response->place }} • Tipe: {{ $response->type }}</p>
<div class="test-panel">
    <div class="test-panel-heading">
        <h2>Hafalan:</h2>
    </div>
    <div class="test-panel-body">
        <ul id="test-verseList">
            @for ($i = 0; $i < min(3, count($response->verses)); $i++)
                <li id="test-li">
                    <div class="test-panel">
                        <div class="test-panel-heading">
                            <h3 class="test-h3">{{ $response->name }} Ayat {{ $response->verses[$i]->number }}</h3>
                        </div>
                        <div class="test-panel-body">
                            <p class="test-verse">{{ $response->verses[$i]->text }}</p>
                            <p class="test-translation">Terjemahan: {{ $response->verses[$i]->translation_id }}</p>
                        </div>
                    </div>

                    <h1>Rekam suaramu</h1>

                    <div id="test-recordingControls">
                        <button id="test-startRecord" onclick="startRecording()">Mulai Rekam</button>
                        <button id="test-stopRecord" onclick="stopRecording()" disabled>Stop rekaman</button>
                        <button id="test-getWhatsAppLink" onclick="getWhatsAppLink()">Konfirmasi Mentor</button>
                    </div>

                    <div id="test-audioPreviewContainer" style="display: none;">
                        <h2 class="test-h2">Audio tersimpan</h2>
                        <audio controls id="test-audioPreview"></audio>
                    </div>
                    <form class="test-form" method="POST" action="{{ route('verses.store') }}">
                        @csrf
                        <label class="test-label" for="day_number">Hari ke:</label>
                        <input type="text" id="day_number" name="day_number" value="{{ old('day_number') }}">
                        <div>
                            <label class="test-label" for="hafalan_ayat_{{ $i }}">Surat,ayat:</label>
                            <input type="text" id="hafalan_ayat_{{ $i }}" name="hafalan_ayat[{{ $i }}]" value="{{ old('hafalan_ayat.' . $i) }}">
                            <input type="hidden" name="is_finished[{{ $i }}]" value="0"> <!-- Hidden input for unchecked state -->
                            <input type="checkbox" id="is_finished_{{ $i }}" name="is_finished[{{ $i }}]" value="1" {{ old('is_finished.' . $i) ? 'checked' : '' }}>
                            <label for="is_finished_{{ $i }}">Selesai</label>
                            {{-- <button type="submit">OK</button> --}}
                        </div>
                        <button type="submit">OK</button>
                    </form>
                </li>
            @endfor
        </ul>
        <button id="test-nextButton" onclick="showNextVerses()">Next</button>
        <button id="test-nextButton" onclick="redirectToVersesShow()">Lihat Progres</button>
        <button id="test-nextButton" onclick="redirectToQuranIndex()">Kembali ke Al-Quran</button>
    </div>
</div>
<script>

function showNextVerses() {
    var verseList = document.getElementById("test-verseList");
    var verses = @json($response->verses); // Convert PHP array to JavaScript array

    // Start index for the next batch of verses
    var currentIndex = verseList.getElementsByTagName("li").length;

    // Loop to add the next 3 verses, if available
    for (var i = currentIndex; i < Math.min(currentIndex + 3, verses.length); i++) {
        var verse = document.createElement("li");
        verse.innerHTML = `
                 <div class="test-panel">
                        <div class="test-panel-heading">
                            <h3 class="test-h3">{{ $response->name }} Ayat ${verses[i].number}</h3>
                        </div>
                        <div class="test-panel-body">
                            <p class="test-verse">${verses[i].text}</p>
                            <p class="test-translation">Terjemahan: ${verses[i].translation_id}</p>
                        </div>
                    </div>
            </div>
            <h1>Rekam Suaramu</h1>

            <div id="test-recordingControls">
                <button id="test-startRecord" onclick="startRecording()">Mulai Rekam</button>
                <button id="test-stopRecord" onclick="stopRecording()" disabled>Stop Rekam</button>
                <button id="test-getWhatsAppLink" onclick="getWhatsAppLink()">Konfirmasi Setor</button>
            </div>

            <div id="test-audioPreviewContainer" style="display: none;">
                <h2>Audio Tersimpan</h2>
                <audio controls id="test-audioPreview"></audio>
            </div>
<form class="test-form" method="POST" action="{{ route('verses.store') }}">
                        @csrf
                        <label class="test-label" for="day_number">Hari ke:</label>
                        <input type="text" id="day_number" name="day_number" value="{{ old('day_number') }}">
                        <div>
                            <label class="test-label" for="hafalan_ayat_{{ $i }}">Surat,ayat:</label>
                            <input type="text" id="hafalan_ayat_{{ $i }}" name="hafalan_ayat[{{ $i }}]" value="{{ old('hafalan_ayat.' . $i) }}">
                            <input type="hidden" name="is_finished[{{ $i }}]" value="0"> <!-- Hidden input for unchecked state -->
                            <input type="checkbox" id="is_finished_{{ $i }}" name="is_finished[{{ $i }}]" value="1" {{ old('is_finished.' . $i) ? 'checked' : '' }}>
                            <label for="is_finished_{{ $i }}">Selesai</label>
                            {{-- <button type="submit">OK</button> --}}
                        </div>
                        <button type="submit">OK</button>
                    </form>
        `;
        verseList.appendChild(verse);
    }

    // Check if there are no more verses
    if (currentIndex >= verses.length) {
        var nextButton = document.getElementById("test-nextButton");
        if (nextButton) {
            nextButton.parentNode.removeChild(nextButton); // Remove the "Next" button if it exists
        }
        alert("Selamat! Kamu sudah selesai hafalan pada surat ini.");
        // Redirect to the Quran index page
        window.location.href = "{{ route('quran.index') }}";
    }
}

function redirectToVersesShow() {
    window.location.href = "{{ route('verses.show', ['id' => $id]) }}";
}

let mediaRecorder;
let audioChunks = [];

function startRecording() {
    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(function(stream) {
            mediaRecorder = new MediaRecorder(stream);
            mediaRecorder.start();

            mediaRecorder.addEventListener('dataavailable', function(event) {
                audioChunks.push(event.data);
            });

            mediaRecorder.addEventListener('stop', function() {
                let audioBlob = new Blob(audioChunks, { 'type': 'audio/wav' });
                let audioURL = URL.createObjectURL(audioBlob);
                document.getElementById('test-audioPreview').src = audioURL;
                document.getElementById('test-audioPreviewContainer').style.display = 'block';
            });

            document.getElementById('test-startRecord').disabled = true;
            document.getElementById('test-stopRecord').disabled = false;
        })
        .catch(function(err) {
            console.error('Error accessing microphone: ', err);
        });
}

function stopRecording() {
    mediaRecorder.stop();
    document.getElementById('test-startRecord').disabled = false;
    document.getElementById('test-stopRecord').disabled = true;
}

function getWhatsAppLink() {
    let phoneNumber = '6282219813400';
    let audioURL = document.getElementById('test-audioPreview').src;
    let whatsAppLink = 'https://wa.me/' + phoneNumber + '?text=Saya siap setor!' + encodeURIComponent(audioURL);
    window.open(whatsAppLink);
}

function redirectToQuranIndex() {
    window.location.href = "{{ route('quran.index') }}";
}
</script>
@endsection

