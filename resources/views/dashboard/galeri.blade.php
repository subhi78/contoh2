@extends('dashboard.partials.dashboardmain')

@section('dashboard')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Galeri Humas</li>
                </ol>
                <h2>Galeri Humas</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            <div class="container">
                <div class="section-header" data-aos="zoom-in" data-aos-duration="1000">
                    <h2>GALERI</h2>
                    <p>Galeri Humas <span>UNW</span></p>
                </div>
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">New</li>
                    </ul>
                    <!-- End Portfolio Filters -->
                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        @foreach ($images as $image)
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-new">
                                <div class="portfolio-content h-100">
                                    <img src="images/{{ $image->image }}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $image->title }}</h4>
                                        <p>{!! $image->description !!}</p>
                                        <a href="images/{{ $image->image }}" title=""
                                            data-gallery="portfolio-gallery-product"
                                            class="portfolio-lightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                        <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                                class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Portfolio Item -->
                        @endforeach

                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>
        </section><!-- /Portfolio Section -->

    </main><!-- End #main -->
@endsection
