@extends('Layouts.header')
@extends('Layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Tenik informatika</h5>
                                    <a href="/data-kriteria/ti" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
                                </div>
                            </div>

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Tenik Industri Pertanian</h5>
                                    <a href="/data-kriteria/tip" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
                                </div>
                            </div>

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Agroteknologi</h5>
                                    <a href="/data-kriteria/agro" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
                                </div>
                            </div>

                            {{-- <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Hubungan Internasional</h5>
                                    <a href="/data-kriteria/agro" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
                                </div>
                            </div>

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Ilmu Komunikasi</h5>
                                    <a href="/data-kriteria/ilkom" class="btn btn-success"><i class="bi bi-eye"></i></a>
                                    <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
                                </div>
                            </div> --}}

                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
