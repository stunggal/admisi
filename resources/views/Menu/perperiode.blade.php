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
                            @foreach ($periodes as $item)
                                <div class="card info-card customers-card">
                                    <div class="card-body">
                                        <h5 class="card-title"><span>Periode | </span>{{ $item->periode }}</h5>
                                        <a href="/data-mahasiswa/{{ $item->periode }}/ti" class="btn btn-success"><i
                                                class="bi bi-eye"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
