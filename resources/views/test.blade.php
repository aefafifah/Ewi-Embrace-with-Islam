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
            `;
            verseList.appendChild(verse);
        }
    }
</script>





