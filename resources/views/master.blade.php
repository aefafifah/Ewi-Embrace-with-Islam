<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tambahkan link CSS atau CDN yang diperlukan -->
</head>
<body>
    <header>
        <!-- Bagian header website -->
    </header>

    <nav>
        <!-- Navigasi menu, bisa dimasukkan dari file nav.blade.php jika diperlukan -->
    </nav>

    <main>
        @yield('content')
        <div class="wrapper">
            <!-- untuk home -->
            <section id="home">
                <img src="https://img.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
                <div class="kolom">
                    <p class="deskripsi">Qurdistime </p>
                    <h2>Luangkan Waktumu! Untuk hidup yang lebih tenang </h2>
                    <p>رَ (( خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ )) رَوَاهُ البُخَارِيُّ .</p>
                    <p>Utsman bin ‘Affan radhiyallahu ‘anhu berkata bahwa Rasulullah shallallahu ‘alaihi wa sallam bersabda, “Sebaik-baik orang di antara kalian adalah yang belajar Al-Qur’an dan mengajarkannya.” (HR. Bukhari) [HR. Bukhari, no. 5027]</p>
                    <p><a href="" class="tbl-pink">Ayo Dibuka</a></p>
                </div>
            </section>

            <!-- untuk courses -->
            <section id="courses">
                <div class="kolom">
                    <p class="deskripsi">Telah Hadir</p>
                    <h2>ISSOLUTION</h2>
                    <p>siap membantu mu untuk menyelesaikan permasalahan yang telah teringkas menjadi beberapa sub tema </p>
                    <p><a href="" class="tbl-biru">Kamu Ada Masalah</a></p>
                </div>
                <img src="https://img.freepik.com/free-vector/online-learning-isometric-concept_1284-17947.jpg?size=626&ext=jpg&ga=GA1.2.1769275626.1605867161"/>
            </section>

            <!-- untuk tutors -->
            <section id="tutors">
                <div class="tengah">
                    <div class="kolom">
                        <p class="deskripsi">Our Top Tutors</p>
                        <h2>Tutors</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, optio!</p>
                    </div>

                    <div class="tutor-list">
                        <div class="kartu-tutor">
                            <img src="https://dfu1k3y1rami2.cloudfront.net/wp-content/uploads/2014/07/26195109/2020_cb.jpg"/>
                            <p>Jason Lee Scott</p>
                        </div>
                        <div class="kartu-tutor">
                            <img src="https://images.ctfassets.net/1wryd5vd9xez/4DxzhQY7WFsbtTkoYntq23/a4a04701649e92a929010a6a860b66bf/https___cdn-images-1.medium.com_max_2000_1_Y6l_FDhxOI1AhjL56dHh8g.jpeg"/>
                            <p>John Doe</p>
                        </div>
                        <div class="kartu-tutor">
                            <img src="https://images.fastcompany.net/image/upload/w_596,c_limit,q_auto:best,f_auto/fc/3021752-inline-i-1-why-square-designed-its-new-offices-to-work-like-a-city.jpg"/>
                            <p>Michael Dell</p>
                        </div>
                        <div class="kartu-tutor">
                            <img src="https://blogs-images.forbes.com/jackkelly/files/2019/06/Jack-Kelly_avatar_1559658819-400x400.jpg"/>
                            <p>Bruce Wills</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- untuk partners -->
            <section id="partners">
                <div class="tengah">
                    <div class="kolom">
                        <p class="deskripsi">Our Top Partners</p>
                        <h2>Partners</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi magni tempore expedita sequi. Similique rerum doloremque impedit saepe atque maxime.</p>
                    </div>

                    <div class="partner-list">
                        <div class="kartu-partner">
                            <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png"/>
                        </div>
                        <div class="kartu-partner">
                            <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg"/>
                        </div>
                        <div class="kartu-partner">
                            <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg"/>
                        </div>
                        <div class="kartu-partner">
                            <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png"/>
                        </div>
                        <div class="kartu-partner">
                            <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg"/>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="contact">
            <div class="wrapper">
                <div class="footer">
                    <div class="footer-section">
                        <h3>RumahRafif.</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
                    </div>
                    <div class="footer-section">
                        <h3>About</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint, culpa!</p>
                    </div>
                    <div class="footer-section">
                        <h3>Contact</h3>
                        <p>Jl. Laksda Adisucipto Sleman Yogyakarta</p>
                        <p>Kode Pos: 57365</p>
                    </div>
                    <div class="footer-section">
                        <h3>Social</h3>
                        <p><b>YouTube: </b>Programming di RumahRafif</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">
            <div class="wrapper">
                &copy; 2024. <b>EWI.</b> All Rights Reserved.
            </div>

        </div>
    </body>
    </main>

    <footer>
        <!-- Bagian footer website -->
    </footer>

    <!-- Tambahkan script JavaScript atau CDN yang diperlukan -->
</body>
</html>
