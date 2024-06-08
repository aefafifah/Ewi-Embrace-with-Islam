<style>
    body, h1, h2, h3, p, ul, li, form, label, input, button {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Arial", sans-serif;
        background-color: #FEFAF6;
        color: #333;
        padding: 20px;
        text-align: center;
    }

    .panel {
        border-radius: 10px;
        margin-bottom: 20px;
        background-color: #FEFAF6;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .panel-heading {
        background-color: #102C57;
         color: #ebe5e5;
        padding: 10px 15px;
        border-bottom: 2px solid #102C57;
        font-size: 18px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .panel-body {
        padding: 15px;
    }

    h2 {
        color: #102C57;
        margin-bottom: 10px;
        font-size: 24px;
    }

    h3 {
        color: #fbfbfb;
        margin-bottom: 15px;
        font-size: 18px;
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
        margin-bottom: 20px;
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

    /* Audio recording controls */
    #recordingControls {
        margin-top: 15px;
    }

    #recordingControls button {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
        transition: background-color 0.3s ease;
    }

    #recordingControls button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }

    #recordingControls button:hover:not(:disabled) {
        background-color: #218838;
    }

    #audioPreviewContainer {
        margin-top: 20px;
    }

    audio {
        width: 100%;
    }

    /* Form styling */
    form {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    form label {
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
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    form button[type="submit"]:hover {
        background-color: #0056b3;
    }

    #nextButton {
        background-color: #218838;
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

    #nextButton:hover {
        background-color: #145726;
    }

    /* Responsive styling */
    @media (max-width: 768px) {
        body {
            padding: 10px;
        }

        h2 {
            font-size: 20px;
        }

        h3 {
            font-size: 16px;
        }

        .verse {
            font-size: 24px;
        }

        .translation {
            font-size: 14px;
        }

        #recordingControls button, form button[type="submit"], #nextButton {
            padding: 8px 16px;
            font-size: 14px;
        }
    }

    @media (max-width: 480px) {
        h2 {
            font-size: 18px;
        }

        .panel-heading {
            font-size: 14px;
        }

        .verse {
            font-size: 20px;
            padding: 5px;
        }

        .translation {
            font-size: 12px;
        }
    }


        </style>
        <h2>{{ $response->name }}</h2>
        <h2>({{ $response->name_translations->id }})</h2>
        <p>{{ $response->number_of_ayah }} Ayat • Tempat: {{ $response->place }} • Tipe: {{ $response->type }}</p>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Hafalan:</h2>
        </div>
        <div class="panel-body">
            <ul id="verseList">
                @for ($i = 0; $i < min(3, count($response->verses)); $i++)
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>{{ $response->name }} Ayat {{ $response->verses[$i]->number }}</h3>
                            </div>
                            <div class="panel-body">
                                <p class="verse">{{ $response->verses[$i]->text }}</p>
                                <p class="translation">Terjemahan: {{ $response->verses[$i]->translation_id }}</p>
                            </div>
                        </div>

                        <h1>Rekam suaramu</h1>

                        <div id="recordingControls">
                            <button id="startRecord" onclick="startRecording()">Mulai Rekam</button>
                            <button id="stopRecord" onclick="stopRecording()" disabled>Stop rekaman</button>
                            <button id="getWhatsAppLink" onclick="getWhatsAppLink()">Konfirmasi Mentor</button>
                        </div>

                        <div id="audioPreviewContainer" style="display: none;">
                            <h2>Audio tersimpan</h2>
                            <audio controls id="audioPreview"></audio>
                        </div>
                        <form method="POST" action="{{ route('verses.store') }}">
                            @csrf
                            <label for="day_number">Hari ke:</label>
                            <input type="text" id="day_number" name="day_number" value="{{ old('day_number') }}">
                            <div>
                                <label for="hafalan_ayat_{{ $i }}">Ayat {{ $i + 1 }}:</label>
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
            <button id="nextButton" onclick="showNextVerses()">Next</button>
            <button id="nextButton" onclick="redirectToVersesShow()">Lihat Progres</button>
            <button id ="nextButton" onclick="redirectToQuranIndex()">Kembali ke Al-Quran</button>
        </div>
    </div>
    <script>

     function showNextVerses() {
    var verseList = document.getElementById("verseList");
    var verses = @json($response->verses); // Convert PHP array to JavaScript array

    // Start index for the next batch of verses
    var currentIndex = verseList.getElementsByTagName("li").length;

    // Loop to add the next 3 verses, if available
    for (var i = currentIndex; i < Math.min(currentIndex + 3, verses.length); i++) {
        var verse = document.createElement("li");
        verse.innerHTML = `
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>{{ $response->name }} Ayat ${verses[i].number}</h3>
                </div>
                <div class="panel-body">
                    <p class="verse">${verses[i].text}</p>
                    <p class="translation">Terjemahan: ${verses[i].translation_id}</p>
                </div>
            </div>
            <h1>Audio Recording</h1>

            <div id="recordingControls">
                <button id="startRecord" onclick="startRecording()">Mulai Rekam</button>
                <button id="stopRecord" onclick="stopRecording()" disabled>Stop Rekam</button>
                <button id="getWhatsAppLink" onclick="getWhatsAppLink()">Konfirmasi Setor</button>
            </div>

            <div id="audioPreviewContainer" style="display: none;">
                <h2>Recorded Audio</h2>
                <audio controls id="audioPreview"></audio>
            </div>
<form method="POST" action="{{ route('verses.store') }}">
                            @csrf
                            <label for="day_number">Hari ke:</label>
                            <input type="text" id="day_number" name="day_number" value="{{ old('day_number') }}">
                            <div>
                                <label for="hafalan_ayat_{{ $i }}">Ayat {{ $i + 1 }}:</label>
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
    var nextButton = document.getElementById("nextButton");
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
                        document.getElementById('audioPreview').src = audioURL;
                        document.getElementById('audioPreviewContainer').style.display = 'block';
                    });

                    document.getElementById('startRecord').disabled = true;
                    document.getElementById('stopRecord').disabled = false;
                })
                .catch(function(err) {
                    console.error('Error accessing microphone: ', err);
                });
        }

        function stopRecording() {
            mediaRecorder.stop();
            document.getElementById('startRecord').disabled = false;
            document.getElementById('stopRecord').disabled = true;
        }

        function getWhatsAppLink() {
            let phoneNumber = '6281217332804';
            let audioURL = document.getElementById('audioPreview').src;
            let whatsAppLink = 'https://wa.me/' + phoneNumber + '?text=Listen%20to%20my%20recording:%20' + encodeURIComponent(audioURL);
            window.open(whatsAppLink);
        }

        function redirectToQuranIndex() {
        window.location.href = "{{ route('quran.index') }}";
    }
    </script>
