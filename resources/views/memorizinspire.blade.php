@extends('layout.master')

@section('content')
<style>
    .hero {
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://via.placeholder.com/1500') no-repeat center center/cover;
        color: white;
        padding: 100px 0; /* Menambahkan padding di bagian atas dan bawah hero */
        text-align: center;
        border-radius: 10px;
    }

    .hero-content {
        width: 80%;
        margin: auto;
        bottom:10px;
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
        margin-top: 50px; /* Menambahkan margin atas untuk memberikan ruang antara hero dan langkah-langkah */
    }

    .step {
        background-color: rgba(255, 255, 255, 0.95); /* Menurunkan kecerahan background */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        max-width: 300px;
        width: 100%;
        text-align: left;
        min-height: 300px; /* Menentukan ketinggian minimum */
    }

    .step:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .step h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        cursor: pointer; /* Menambahkan cursor pointer ketika di hover */
    }

    .step h2 span {
        font-size: 0.8rem;
        margin-left: 10px;
        color: #888;
    }

    .step ul {
        list-style: none;
        padding: 0;
    }

    .step ul li {
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        background-color: rgba(218, 192, 163, 0.8);
        color: #333;
    }

    .step ul li strong {
        color: #2e7d32;
    }

    .custom-button {
        display: inline-block; /* Mengubah display menjadi inline-block */
        width: 200px; /* Sesuaikan lebar sesuai kebutuhan */
        text-align: center;
        padding: 15px 20px; /* Menyesuaikan padding tombol */
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
        margin-top: 50px; /* Menambahkan margin atas */
    }

    .custom-button:hover {
        background-color: #0056b3;
    }

    .step-detail {
        display: none;
        flex-direction: column; /* Menjadikan flex-direction menjadi column */
        align-items: flex-start; /* Menjadikan align-items menjadi flex-start */
        width: 100%; /* Mengatur lebar menjadi 100% */
    }
    .step-detail.show {
        display: flex;
    }

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  top : 20px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
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

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>
{{-- <button id="playButton" class="custom-button">Mulai Audio</button> --}}
<audio id="backgroundAudio" loop>
    <source src="{{ asset('audio/Aku ingin jadi hafidz quran.mp3') }}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>


<header class="hero">
    <!-- Konten hero -->
    <div class="hero-content">
        {{-- <h1>Langkah-langkah Menggunakan Fitur Memorizinspire</h1>
        <p>Siap menghafal? Memorizinspire siap membantumu!</p> --}}

            <h1>Rasulullah ﷺ bersabda dalam hadis yang diriwayatkan oleh Abu Hurairah:</h1>
            <blockquote>
                "Sesungguhnya Allah akan memberikan seratus derajat kepada orang yang membaca Al-Quran dengan tartil (perlahan dan tajwid yang baik). Dan sesungguhnya Rasulullah ﷺ bertanya, ‘Bagaimana (amalan) orang yang tidak bisa membaca?’ Dia menjawab, ‘Dia akan diberikan dua pahala."
            </blockquote>
    </div>

    <!-- Slideshow YouTube -->
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/WMkdlWGRW9Y?si=Fw2MAvQLvM-vJ36M" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
         <iframe width="100%" height="315" src="https://www.youtube.com/embed/3cu0UpfNSk4?si=jRHnLKGwXWwtdkOv" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/RWQZX0M-SzY?si=Mbz54sqFjNGgFRkO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <div class="text">Caption Three</div>
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
    <!-- Langkah 1 -->
    <div class="step">
        <h2 data-step="step1" onclick="toggleStepDetail('step1')">1. Akses Fitur Memorizinspire <span>Click me!</span></h2>
        <div id="step1" class="step-detail">
            <ul>
                <li>Siapkan <strong>Niat</strong> untuk menghafal</li>
                <li>Buka aplikasi atau situs <strong>Qurdistime</strong>.</li>
                <li>Masuk ke bagian <strong>Quran</strong>.</li>
                <li>Tekan opsi <strong>Siap Menghafal</strong>.</li>
            </ul>
        </div>
    </div>
    <!-- Langkah 2 -->
    <div class="step">
        <h2 data-step="step2" onclick="toggleStepDetail('step2')">2. Mulai Menghafal <span>Click me!</span></h2>
        <div id="step2" class="step-detail">
            <ul>
                <li>Tiga ayat akan ditampilkan secara otomatis.</li>
                <li>Gunakan fitur <strong>rekam audio</strong> untuk membantu latihan hafalan.</li>
                <li>Rekaman ini bisa didownload untuk latihan offline.</li>
                <li>Tekan <strong>Next</strong>untuk 3 ayat selanjutnya.</li>
            </ul>
        </div>
    </div>
    <!-- Langkah 3 -->
    <div class="step">
        <h2 data-step="step3" onclick="toggleStepDetail('step3')">3. Siap Setor <span>Click me!</span></h2>
        <div id="step3" class="step-detail">
            <ul>
                <li>Jika sudah siap, klik <strong>Siap Setor</strong> untuk konfirmasi ke mentor.</li>
                <li>Masukkan urutan hari sesuai jadwal hafalan.</li>
                <li>Masukkan keterangan ayat yang sudah dihafal.</li>
                <li>Ceklis jika hafalan sudah selesai.</li>
            </ul>
        </div>
    </div>
</div>
<!-- Tombol Go to Quran -->
<a href="{{ route('quran.index') }}" class="custom-button">Go to Quran</a>

<!-- JavaScript -->
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
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
@endsection
