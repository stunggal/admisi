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
                        @foreach ($data as $item)
                            <div class="col-xxl-4 col-xl-12">

                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->prodi }}</h5>
                                        <a href="/perhitungan/{{ $periode }}/{{ $item->id }}"
                                            class="btn btn-success"><i class="bi bi-eye"></i></a>
                                        <a href="" class="btn btn-danger "><i class="bi bi-trash"></i></a>
                                    </div>
                                </div>

                            </div><!-- End Customers Card -->
                        @endforeach

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
