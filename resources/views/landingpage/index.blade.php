@extends('landingpage.layouts.app')

@section('main')
    <main id="main">

        <!-- ======= Details Section ======= -->
        <section id="details" class="details" action="{{ route('login') }}">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="{{ asset('public/landingpage/img/details-1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Akses website MDTA Zaid Bin Tsabit</h3>
                        <p class="fst-italic">
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Masuk ke halaman login.</li>
                            <li><i class="bi bi-check"></i> Silahkan login dengan memasukkan alamat email Anda dan password
                                email Anda.</li>
                            <li><i class="bi bi-check"></i> Gunakan format alamat email @gmail.ac.id atau @swa.gmail.ac.id
                            </li>
                        </ul>
                        <p>
                            Setelah alamat email Anda dan password email Anda dimasukkan, selanjutnya klik tombol
                            <strong>Login</strong>. Jika proses login berhasil, sistem akan mengarahkan ke halaman Dashboard
                            website.
                        </p>
                    </div>
                </div>

                <div class="row content">
                    <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                        <img src="{{ asset('public/landingpage/img/details-4.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
                        <h3>Masuk ke dashboard MDTA Zaid Bin Tsabit</h3>
                        <p class="fst-italic">
                            Anda sudah bisa mengakses berbagai sistem informasi yang ada di MDTA Zaid Bin Tsabit
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Nikmati layanan sistem informasi di halaman dashboard</li>
                            <li><i class="bi bi-check"></i> Masing-masing level user memiliki akses yang berbeda</li>
                        </ul>
                        <p>
                            Secara umum fitur yang MDTA sediakan adalah untuk pengelolaan sistem akademik mulai dari
                            kurikulum, jadwal kelas, hasil pembelajaran, dan pengelolaan user.
                        </p>
                    </div>
                </div>


            </div>
        </section><!-- End Details Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row justify-content-center" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Siswa</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Guru/Tendik</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Kelas</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>Our great team</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg col-md-6">
                        <div class="member" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('public/landingpage/img/team/team-1.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Aditya Sukma Pratama</h4>
                                <span>Product Manager</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 mt-5 mt-md-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('public/landingpage/img/team/team-2.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Apriliady Rahman</h4>
                                <span>Programmer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('public/landingpage/img/team/team-3.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Henry Abeliano</h4>
                                <span>Programmer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('public/landingpage/img/team/team-4.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Rendi</h4>
                                <span>Programmer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg col-md-6 mt-5 mt-lg-0">
                        <div class="member" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('public/landingpage/img/team/team-2.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Muthia</h4>
                                <span>Programmer</span>
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
