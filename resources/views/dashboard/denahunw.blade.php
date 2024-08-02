@extends('dashboard.partials.dashboardmain')

@section('dashboard')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Denah Kampus UNW</li>
                </ol>
                <h2>Denah Kampus UNW</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Adenah ======= -->

        <div class="section-header" data-aos="zoom-in" data-aos-duration="1000">
            <h2>Denah UNW</h2>
            <p>Denah Kampus <span> UNW</span></p>
        </div>

        <div class="container shadow p-3 mb-5 bg-body rounded">
            <div class="post-img" style="display: grid; place-items: center; margin-top: 20px;margin-bottom: 50px;">
                <img src="/assets/img/denah unw-1.png" alt="" class="img-fluid">
            </div>
        </div>
        <!-- end denah -->
    </main><!-- End #main -->
@endsection
