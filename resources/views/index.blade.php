
@extends('layout.master')
@section('content')
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-prayer-mat-illustration_23-2149280347.jpg?t=st=1716081809~exp=1716085409~hmac=4e6e00bafa40d0d8edb7d5f88fe70cd05a906c83370bf957b9b5e96f8a3b4430&w=740"width="400" height="500">
            <div class="kolom">
                <p class="deskripsi">Qurdistime </p>
                <h2>Luangkan Waktumu! Untuk hidup yang lebih tenang </h2>
                <p>ر (( خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ )) رَوَاهُ البُخَارِيُّ .</p>
                <p>Utsman bin ‘Affan radhiyallahu ‘anhu berkata bahwa Rasulullah shallallahu ‘alaihi wa sallam bersabda, “Sebaik-baik orang di antara kalian adalah yang belajar Al-Qur’an dan mengajarkannya.” (HR. Bukhari) [HR. Bukhari, no. 5027]</p>
                <p><a href="" class="tbl-pink">Ayo Dibuka</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="coursexs">
            <div class="kolom">
                <p class="deskripsi">Telah Hadir</p>
                <h2>ISSOLUTION</h2>
                <p>siap membantu mu untuk menyelesaikan permasalahan yang telah teringkas menjadi beberapa sub tema </p>
                <p><a href="" class="tbl-biru">Kamu Ada Masalah</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/hand-drawn-prayer-mat-illustration_23-2149265397.jpg?t=st=1716081734~exp=1716085334~hmac=ec07806042d02813e09c5711aaef7cfa108742c9a2780ed138165afc761223dd&w=740"width="400" height="500"/>
        </section>
        <section id="home">
            <img src="https://img.freepik.com/free-vector/flat-ramadan-illustration_23-2148874349.jpg?t=st=1716082202~exp=1716085802~hmac=044590f1b69871714e680a4ecd4e75cfb6b168aad8eaa8363c348748873340a5&w=740"width="400" height="500">
            <div class="kolom">
                <p class="deskripsi">Zakatime </p>
                <h2>Membantumu dalam menghitung zakat  </h2>
                <p>Yuk ketahui asal muasal hitung zakat</p>
                <p>sehingga zakatmu lebih berwarna!</p>
                <p><a href="" class="tbl-pink">Hitung Zakat Yuk!</a></p>
            </div>
        </section>
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">Bingung Menghafal?</p>
                <h2>Memorizinspire</h2>
                <p>siap menginspirasimu dalam menghafal Al-Quran, Teruslah menghafal karena kelak ia akan menjadi syafaat untukmu dan keluargamu</p>
                <p><a href="" class="tbl-biru">Mulai Menghafal</a></p>
            </div>
            <img src="https://img.freepik.com/free-vector/hand-drawn-ramadan-concept-illustration_23-2148890135.jpg?t=st=1716082793~exp=1716086393~hmac=7c58ef4fa85031793e59444791be43b6759fa97ca6acf19f7ab2b5956416d8a7&w=826"width="400" height="500"/>
        </section>
        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Embrace!</p>
                    <h2>Mentor</h2>
                    <p>Bersama mentor-mentor berpengalaman siap merangkulmu, Embrace!</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        {{-- <img src="https://img.freepik.com/free-vector/boy-with-beanie-hat-natural-facial-expression_1308-159348.jpg?t=st=1716083152~exp=1716086752~hmac=af328007eefa91d7514f38a4898228d882931e62d6bf8a3a7a68cd62384f03bd&w=740"/> --}}
                        <p>Jaha Joel </p>
                    </div>
                    <div class="kartu-tutor">
                        {{-- <img src="https://images.ctfassets.net/1wryd5vd9xez/4DxzhQY7WFsbtTkoYntq23/a4a04701649e92a929010a6a860b66bf/https___cdn-images-1.medium.com_max_2000_1_Y6l_FDhxOI1AhjL56dHh8g.jpeg"/> --}}
                        <p>Afifah Fikriyah</p>
                    </div>
                    <div class="kartu-tutor">
                        {{-- <img src="https://images.fastcompany.net/image/upload/w_596,c_limit,q_auto:best,f_auto/fc/3021752-inline-i-1-why-square-designed-its-new-offices-to-work-like-a-city.jpg"/> --}}
                        <p>Iklil Mufidah</p>
                    </div>
                    <div class="kartu-tutor">
                        {{-- <img src="https://img.freepik.com/free-vector/boy-head-with-brown-hair-brown-eyes_1308-150489.jpg?t=st=1716083472~exp=1716087072~hmac=37614187bf29a8e1f6317e938ee00bee1788a8623ba6787508bd965a50803cda&w=740"/> --}}
                        <p>Alvito Uday</p>
                    </div>
                    <div class="kartu-tutor">
                        {{-- <img src="https://img.freepik.com/free-vector/handsome-boy-with-brown-eyes-black-hair_1308-160536.jpg?t=st=1716083389~exp=1716086989~hmac=c97018dae1e3b8dca55b174a3c83b084b1f341804e94fa45be31f27383b35ac9&w=826"/> --}}
                        <p>Hammam Jauharul</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        {{-- <section id="partners">
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
                </div> --}}
            </div>
        </section>
    </div>

    {{-- <div id="contact">
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
    </div> --}}
@endsection
