
<style>
body, h1, h2, h3, p, ul, li, form, label, input, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    align-items: center;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: rgb(234, 219, 200);
    color: #333;
}

.panel {
    /* border: 1px solid rgb(16, 44, 87); */
    border-radius: 8px;
    margin-bottom: 20px;
    background-color: rgb(234, 219, 200);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.panel-heading {
    background-color: rgb(218, 192, 163);
    color: rgb(16, 44, 87);
    padding: 5px 5px;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.panel-body {
    padding: 15px;
}

h2, h3 {
    margin-bottom: 15px;
}

.verse {
    font-size: 18px;
    margin-bottom: 10px;
}

.translation {
    font-size: 16px;
    color: #555;
    margin-bottom: 20px;
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
    margin-bottom : 10px;
}

form label {
    /* display: block; */
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
    margin-top : 10px;
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
    margin-bottom:20px;
}

#nextButton:hover {
    background-color: #rgb(16, 44, 87);
}

    </style>
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
                    <button id="startRecord" onclick="startRecording()">Start Recording</button>
                    <button id="stopRecord" onclick="stopRecording()" disabled>Stop Recording</button>
                    <button id="getWhatsAppLink" onclick="getWhatsAppLink()">Get WhatsApp Link</button>
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
                            <label for="is_finished_{{ $i }}">Finished</label>
                            <button type="submit">Submit</button>
                        </div>
                    </form>
            `;
            verseList.appendChild(verse);
        }
    }
    function redirectToVersesShow() {
        window.location.href = "{{ route('verses.show') }}";
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
        let whatsAppLink = 'https://wa.me/' + phoneNumber + '?text=Saya Sudah Siap Setor!';
        window.open(whatsAppLink);
    }
</script>
