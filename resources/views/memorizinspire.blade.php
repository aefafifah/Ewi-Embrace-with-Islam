@extends('layout.master')

@section('content')
<style>
    .hero {
        background: #DAC0A3 no-repeat center center/cover;
        padding: 100px 0;
        text-align: center;
    }
    body {
        background-image: url('https://img.freepik.com/free-vector/mandala-illustration_53876-81805.jpg?t=st=1717911207~exp=1717914807~hmac=616f22c6a27d66670f919975100976fead8bf21ade3a336dea5ccf9a879e85ff&w=1380');
        background-repeat: no-repeat;
        background-size: cover;
        font-family: 'Arial', sans-serif;
    }
    .hero-content {
        width: 80%;
        margin: auto;
        bottom: 10px;
    }
    .hero h1 {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    .hero p {
        font-size: 1.5rem;
        margin-bottom: 30px;
    }
    .steps {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 30px;
        margin-top: 50px;
    }
    .steps-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .step {
        background-color: #f9f9f9;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .step:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .step h2 {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .step-detail {
        display: none;
        padding-top: 10px;
    }
    .step:hover .step-detail {
        display: block;
    }
    .custom-button {
        display: inline-block;
        background-color: #102C57;
        color: #fff;
        padding: 15px 30px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s;
        text-align: center;
        margin: 20px auto;
    }
    .custom-button:hover {
        background-color: #DAC0A3;
    }
    .step-detail {
        display: none;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }
    .step-detail.show {
        display: flex;
    }
    .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        top: 20px;
    }
    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 98%;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 5px;
    }
    .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
    }
    .dot {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
    }
    .active {
        background-color: #717171;
    }
    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }
    @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
    }
    @media only screen and (max-width: 300px) {
        .text {font-size: 11px}
    }
</style>

<audio id="backgroundAudio" loop>
    <source src="{{ asset('audio/Aku ingin jadi hafidz quran.mp3') }}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<header class="hero">
    <div class="hero-content">
        <h1>Rasulullah ﷺ bersabda dalam hadis yang diriwayatkan oleh Abu Hurairah:</h1>
        <blockquote>
            "Sesungguhnya Allah akan memberikan seratus derajat kepada orang yang membaca Al-Quran dengan tartil (perlahan dan tajwid yang baik). Dan sesungguhnya Rasulullah ﷺ bertanya, ‘Bagaimana (amalan) orang yang tidak bisa membaca?’ Dia menjawab, ‘Dia akan diberikan dua pahala."
        </blockquote>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <iframe class="youtube-video" width="100%" height="315" src="https://www.youtube.com/embed/WMkdlWGRW9Y?enablejsapi=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="text">Apakah sekarang giliranmu?</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <iframe class="youtube-video" width="100%" height="315" src="https://www.youtube.com/embed/3cu0UpfNSk4?enablejsapi=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="text">Kesempatan di depanmu! jadilah seperti mereka!!</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <iframe class="youtube-video" width="100%" height="315" src="https://www.youtube.com/embed/RWQZX0M-SzY?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <div class="text">Syafaat Keluargamu bersama dengan hafalanmu!</div>
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</header>

<div class="steps">
    <div class="steps-container">
        <div class="step">
            <h2 data-step="step1" onclick="toggleStepDetail('step1')">1. Akses Fitur Memorizinspire</h2>
            <div id="step1" class="step-detail">
                <ul>
                    <li>Siapkan <strong>Niat</strong> untuk menghafal</li>
                    <li>Buka aplikasi atau situs <strong>Qurdistime</strong>.</li>
                    <li>Masuk ke bagian <strong>Quran</strong>.</li>
                    <li>Tekan opsi <strong>Siap Menghafal</strong>.</li>
                </ul>
            </div>
        </div>
        <div class="step">
            <h2 data-step="step2" onclick="toggleStepDetail('step2')">2. Mulai Menghafal</h2>
            <div id="step2" class="step-detail">
                <ul>
                    <li>Tiga ayat akan ditampilkan secara otomatis.</li>
                    <li>Gunakan fitur <strong>rekam audio</strong> untuk membantu latihan hafalan.</li>
                    <li>Rekaman ini bisa didownload untuk latihan offline.</li>
                    <li>Tekan <strong>Next</strong> untuk 3 ayat selanjutnya.</li>
                </ul>
            </div>
        </div>
        <div class="step">
            <h2 data-step="step3" onclick="toggleStepDetail('step3')">3. Siap Setor</h2>
            <div id="step3" class="step-detail">
                <ul>
                    <li>Jika sudah siap, klik <strong>Siap Setor</strong> untuk konfirmasi ke mentor.</li>
                    <li>Masukkan urutan hari sesuai jadwal hafalan.</li>
                    <li>Masukkan keterangan ayat yang sudah dihafal.</li>
                    <li>Ceklis jika hafalan sudah selesai.</li>
                </ul>
            </div>
        </div>
        <a href="{{ route('quran.index') }}" class="custom-button">Go to Quran</a>
    </div>
</div>

<script>
    function toggleStepDetail(stepId) {
        var stepDetail = document.getElementById(stepId);
        stepDetail.classList.toggle('show');
    }

    document.addEventListener("DOMContentLoaded", function() {
        const backgroundAudio = document.getElementById('backgroundAudio');
        const title = document.querySelector('h1');

        title.addEventListener('click', function() {
            backgroundAudio.play();
        });
    });

    let slideIndex = 0;
    let slideInterval;

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        slideInterval = setTimeout(showSlides, 5000);
    }

    function stopSlides() {
        clearTimeout(slideInterval);
    }

    function resumeSlides() {
        slideInterval = setTimeout(showSlides, 5000);
    }

    document.addEventListener("DOMContentLoaded", function() {
        showSlides();

        let players = [];
        const backgroundAudio = document.getElementById('backgroundAudio');

        function onYouTubeIframeAPIReady() {
            const iframes = document.querySelectorAll('.youtube-video');
            iframes.forEach((iframe, index) => {
                players[index] = new YT.Player(iframe, {
                    events: {
                        'onStateChange': onPlayerStateChange
                    }
                });
            });
        }

        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING) {
                stopSlides();
                backgroundAudio.pause();
                players.forEach(player => {
                    if (player !== event.target) {
                        player.pauseVideo();
                    }
                });
            } else if (event.data == YT.PlayerState.PAUSED || event.data == YT.PlayerState.ENDED) {
                resumeSlides();
                backgroundAudio.play();
            }
        }

        if (typeof YT !== 'undefined' && YT && YT.Player) {
            onYouTubeIframeAPIReady();
        } else {
            let tag = document.createElement('script');
            tag.src = "https://www.youtube.com/iframe_api";
            let firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;
        }
    });
</script>
@endsection
