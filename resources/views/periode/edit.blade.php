@extends('Layouts.header')
@extends('Layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Periode</a></li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">


                        <!-- Customers Card -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Edit <span>| Periode Pendaftaran </span></h5>
                                <!-- Multi Columns Form -->
                                <form class="row g-3" method="post" action="">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success">Ubah Data</button>
                                        <a href="/periode" type="reset" class="btn btn-light">Kembali</a>
                                    </div>
                                    @csrf
                                    @foreach ($periode as $a)
                                        <div class="col-md-8">
                                            <label for="inputName5" class="form-label">Pendaftaran Gelombang</label>
                                            <input type="text" class="form-control" id="inputName5"
                                                value="{{ $a->periode }}" name="periode">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="status" class="form-label">Status</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="gridRadios1" value="aktif" checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        aktif
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="gridRadios2" value="nonaktif">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        nonaktif
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </form><!-- End Multi Columns Form -->

                            </div>
                        </div>

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
