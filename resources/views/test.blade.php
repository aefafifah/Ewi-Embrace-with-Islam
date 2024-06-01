{{-- @dd($response); --}}
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>Verses:</h2>
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
                </li>
            @endfor
        </ul>
        <button id="nextButton" onclick="showNextVerses()">Next</button>
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
</script>
