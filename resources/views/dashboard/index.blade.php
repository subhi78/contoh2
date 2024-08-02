@extends('dashboard.partials.dashboardmain')

@section('dashboard')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="9000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            @foreach ($slider as $slide)
                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('gambar-slider/{{ $slide->gambar }}')">
                        <div class="carousel-container">
                            <div class="container">
                                <h2 class="animate__animated animate__fadeInDown">Welcome to Website <span><br> Humas
                                        UNW</span></h2>
                                <!-- <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa necessitatibus dolorem vel, similique debitis odit veritatis repellendus ipsa illo pariatur hic. Ipsam velit modi hic.</p> -->
                                <div
                                    class="d-flex justify-content-center justify-content-lg-start animate__animated animate__fadeInUp">
                                    <a href="#" class="btn-get-started scrollto">Get Started</a>
                                    <a href="https://youtu.be/lRAqqUlT7cI?si=rcOU6PUbCdvJntyl"
                                        class="portfolio-lightbox btn-watch-video"><i
                                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach


            <!-- Slide 2 -->
            {{-- <div class="carousel-item" style="background-image: url(/assets/img/slide/UNEWE2.jpg)">
                    <div class="carousel-container">
                    </div>
                </div> --}}

            <!-- Slide 3 -->
            @foreach ($artikel as $item)
                <div class="carousel-item" style="background-image:url('gambar-artikel/{{ $item->gambar }}')">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $item->title }}</h2>
                            <p class="animate__animated animate__fadeInUp">{!! $item->excerpt !!}</p>
                            </p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        </div>
    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi bi-newspaper icon"></i></div>
                            <h4><a href="/eventupdate.html" class="stretched-link">Liputan Kegiatan</a></h4>
                            <p>pendokumentasia kegiatan di universitas ngudi waluyo</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-image icon"></i></div>
                            <h4><a href="{{ route('galeri') }}" class="stretched-link">Galeri</a></h4>
                            <p>Dokumentasi Sarana dan Prasarana di universitas ngudi waluyo</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-cloud-download icon"></i></div>
                            <h4><a href="{{ route('download') }}" class="stretched-link">Downloads</a></h4>
                            <p>file download logo resmi, mars, hymne, DLL</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-envelope icon"></i></div>
                            <h4><a href="https://drive.google.com/drive/folders/1oNJJxJ5I5PH5bt8psZ5xYZUY7r9gXf6P?usp=drive_link "
                                    class="stretched-link">Surat peminjaman</a></h4>
                            <p>diperuntukan civitas akademika untuk peminjaman alat universitas</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->


        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Apa itu Humas?</h3>
                    <p>Biro Humas dan KIP UNW (Keterbukaan Informasi Publik) didirikan pada bulan .... merupakan divisi
                        Humas
                        Universitas Ngudi Waluyo memiliki fungsi untuk menciptakan serta memelihara reputasi
                        universitas. Melalui
                        Biro Humas dan KIP UNW menjalankan tugasnya sebagai jembatan antara instansi dan masyarakat
                        Selain membentuk
                        reputasi yang baik, Humas dan KIP UNW juga berfungsi untuk membangun serta mempertahankan
                        hubungan yang baik
                        bagi para pemangku kepentingan. Biro Humas dan KIP berusaha menyediakan informasi terlengkap dan
                        aktual yang
                        disampaikan secara langsung atau melalui media massa.</p>
                    {{-- <a href="eventupdate.html"><button type="button" class="btn btn-outline-light"><span>Event
                                Update</span></button></li></a> --}}
                </div>

            </div>
        </section><!-- End Cta Section -->


        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
            <div class="container">

                <div class="section-header" data-aos="zoom-in" data-aos-duration="1000">
                    <h2>gallery</h2>
                    <p>Gallery <span>Humas UNW</span></p>
                </div>

                <div class="gallery-slider swiper" data-aos="fade-up" data-aos-duration="50">
                    <div class="swiper-wrapper align-items-center">
                        @foreach ($images as $image)
                            <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                    href="images/{{ $image->image }}"><img src="images/{{ $image->image }}"
                                        class="img-fluid" alt=""></a>
                            </div>
                        @endforeach

                        {{-- <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg"
                                    class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="portfolio-lightbox" data-gallery="images-gallery"
                                href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg"
                                    class="img-fluid" alt=""></a></div> --}}
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->


    </main><!-- End #main -->

    <!-- contact -->
    <section id="contact" class="contact">
        <div class="container">



            <div class="row">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.781611119632!2d110.40623980845557!3d-7.1512314928233165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70861edd5fad7b%3A0x87b6e86cfcc66e3c!2sUniversitas%20Ngudi%20Waluyo!5e0!3m2!1sid!2sid!4v1710282812356!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="https://formspree.io/f/mnqebyqw" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center pt-3"><button type="submit"><span>Send Message</span></button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- end contact -->
@endsection
