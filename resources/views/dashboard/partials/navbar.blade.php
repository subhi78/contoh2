    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:ngudiwaluyo@unw.ac.id">ngudiwaluyo@unw.ac.id</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>Telp: (024)-6925408</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://web.facebook.com/unw.ac.id/?locale=id_ID&_rdc=1&_rdr" class="facebook"><i
                        class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/universitas_ngudiwaluyo/" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/company/universitas-ngudi-waluyo/" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"
                        data-aos="flip-left" data-aos-duration="1000"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href="{{ route('about') }}">Profil</a></li>
                    <li class="dropdown"><a href="#"><span>Tentang UNW</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('denah') }}">Denah Kawasan UNW</a></li>
                            <li class="dropdown"><a href="#"><span>Video Perkenalan</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="https://youtu.be/lRAqqUlT7cI?si=B8hnVQkU-7SHqYIQ"
                                            class="portfolio-lightbox">Video
                                            Perkenalan</a></li>
                                    <li><a href="https://youtu.be/7YXFMPX-Pds?si=ax11oYdW8bCpK0rJ"
                                            class="portfolio-lightbox">Mars UNW</a>
                                    </li>
                                    <li><a href="https://youtu.be/UeqCnUR4Szk?si=6MEjsHKP6nbYlImA"
                                            class="portfolio-lightbox">Himne
                                            UNW</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Humas UNW</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('struktur') }}">Struktural Organisasi HUMAS</a></li>
                            <li><a href="{{ route('galeri') }}">Galery Humas</a></li>
                        </ul>
                    </li>
                    <li><a href="#">UNW News</a></li>
                    <li><a href="{{ route('download') }}"><button type="button"
                                class="btn btn-outline-info"><span>Download</span></button></li></a>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
