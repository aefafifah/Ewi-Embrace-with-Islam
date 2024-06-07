@extends('Islamic Solution.master')
@section('content')
    <link rel="stylesheet" href="css/issostyle.css">

    <script>
        function searchTopic() {
            var searchText = document.getElementById("search-input").value.toLowerCase();
            var categories = document.querySelectorAll(".category");

            categories.forEach(function(category) {
                var title = category.querySelector("h3").innerText.toLowerCase();

                if (title.includes(searchText)) {
                    category.style.display = "block";
                } else {
                    category.style.display = "none";
                }
            });
        }
    </script>


    <!-- Hero Section-->
    <section class="hero">

        <div class="hero-content">
            <h1>ISLAMIC <span>SOLUTION</span></h1>
            <p>" Empowering you with comprehensive solutions rooted in Islamic guidance "</p>
            <a href="#content" class="cta-button">Gunakan Fitur</a>
        </div>

    </section>
    <!-- End of Hero Section -->


    <!-- About Section -->
    <section class="about">

        <div class="container">
            <h2 class="bismillah" id="bismillah">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</h2>

            <div class="about-content">
                <div class="about-image">
                    <img src="Assets/AboutImage6.jpg" alt="About Islamic Solution">
                </div>
                <div class="about-text">
                    <h2>Apa Itu Islamic Solution ?</h2>
                    <p>Islamic Solution adalah salah satu fitur dari platform website EWI yang menyediakan layanan solusi
                        terhadap berbagai permasalahan dengan perspektif
                        Islam. Disini akan disediakan solusi yang komprehensif berdasarkan ajaran dan prinsip-prinsip Islam.
                    </p>
                    <p>Fitur Islamic Solution dibuat dengan tujuan untuk membantu umat Muslim menghadapi berbagai
                        permasalahan dalam kehidupan
                        sehari-hari dengan cara memberikan solusi yang sesuai dengan nilai-nilai dan hukum Islam.</p>
                </div>
            </div>
        </div>


    </section>
    <!-- End of About Section -->


    <!-- Layanan Section -->
    <section class="layanan">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,160L60,160C120,160,240,160,360,181.3C480,203,600,245,720,229.3C840,213,960,139,1080,112C1200,85,1320,107,1380,117.3L1440,128L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <h2>Apa yang Kami Sediakan ?</h2>
            <p>Di sini kami menyediakan berbagai layanan untuk memberikan solusi terhadap permasalahan anda</p>

            <div class="layanan-content">
                <div class="layanan-item">
                    <!-- <img src="Assets/LayananIMG2.png" stalt="Layanan 1" id="layanan1"> -->
                    <div class="layanan1"></div>
                    <h3>Dalil Al-Qur'an</h3>
                    <p>Memaparkan ayat-ayat Al-Qur'an yang relevan dengan berbagai topik permasalahan kehidupan</p>
                </div>

                <div class="layanan-item">
                    <!-- <img src="Assets/LayananIMG2.png" alt="Layanan 2"> -->
                    <div class="layanan2"></div>
                    <h3>Hadits</h3>
                    <p>Memaparkan sabda-sabda Nabi Muhammad SAW guna memberikan panduan dan solusi terhadap berbagai
                        permasalahan kehidupan</p>
                </div>

                <div class="layanan-item">
                    <!-- <img src="Assets/LayananIMG2.png" alt="Layanan 3"> -->
                    <div class="layanan3"></div>
                    <h3>Tafsir</h3>
                    <p>Menyajikan penafsiran Al-Qur'an dan Hadits dari para ulama terkemuka untuk memahami konteks dan makna
                        secara mendalam</p>
                </div>

                <div class="layanan-item">
                    <!-- <img src="Assets/LayananIMG2.png" alt="Layanan 4"> -->
                    <div class="layanan4"></div>
                    <h3>Video Ulama</h3>
                    <p>Saksikan video-video inspiratif dari ulama ternama yang membahas topik-topik pilihan guna mendapatkan
                        solusi terhadap permalasahan yang dialami</p>
                </div>

            </div>
        </div>

    </section>
    <!-- End of Layanan Section -->


    <!-- Conten Section -->
    <section class="content">

        <div class="container">
            <br><br><br><br><br><br><br>
            <h2>Pilih Topik Anda</h2>

            <div class="search-bar">
                <input type="text" id="search-input" placeholder="Cari kategori topik...">
                <button onclick="searchTopic()">Cari</button>
            </div>

            <div class="category-box">
                <div class="category">
                    <div class="category-content">
                        <img src="Assets/shalat.png" alt="Category 1">
                        <h3>Hukum Meninggalkan Shalat</h3>
                        <a href="/shalat"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/zakat.jpeg" alt="Category 2">
                        <h3>Hukum Zakat</h3>
                        <a href="/zakat"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/puasa.jpg" alt="Category 2">
                        <h3>Hukum Berpuasa</h3>
                        <a href="/puasa"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/haji.png" alt="Category 2">
                        <h3>Hukum Haji</h3>
                        <a href="/haji"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/Pacaran.jpg" alt="Category 1">
                        <h3 style="padding: 5px;">Hukum Pacaran</h3>
                        <a href="/pacaran"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/Riba.jpg" alt="Category 2">
                        <h3>Hukum Riba</h3>
                        <a href="/riba"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/Berbohong.png" alt="Category 2">
                        <h3>Hukum Berbohong</h3>
                        <a href="/berbohong"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/Mencuri.jpg" alt="Category 2">
                        <h3 style="padding: 5px;">Hukum Mencuri</h3>
                        <a href="/mencuri"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/sabar.jpeg" alt="Category 1">
                        <h3 style="padding: 5px;">Bersabar Menghadapi Ujian</h3>
                        <a href="/sabar"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/taubat.png" alt="Category 2">
                        <h3>Taubat Maksiat</h3>
                        <a href="/taubat"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/Pendidikan.jpg" alt="Category 2">
                        <h3>Menuntut Ilmu</h3>
                        <a href="/ilmu"><button>Lebih Lanjut</button></a>
                    </div>
                </div>

                <div class="category">
                    <div class="category-content">
                        <img src="Assets/Sukses.jpg" alt="Category 2">
                        <h3 style="padding: 5px;">Kiat Sukses Dunia & Akhirat</h3>
                        <a href="/sukses"><button>Lebih Lanjut</button></a>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br>
        </div>

    </section>
    <!-- End of Content Section -->


    {{-- <!-- Footer -->
        <footer>

            <div class="container">
                <p>FOOTER</p>
            </div>

        </footer>
        <!-- End of Footer --> --}}


    <script src="script.js"></script>
@endsection
