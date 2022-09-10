@extends('Layouts.header')
@extends('Layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Data Kategori</li>
                    <li class="breadcrumb-item active">{{ $title }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">teknik informatika</h5>

                            <!-- General Form Elements -->
                            <form action="" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Matematika</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="mtk">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Fisika</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="fsk">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Kimia</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="kma">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">biologi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="bio">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Bahasa Arab</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="ar">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Bahasa Inggris</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="en">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Pilihan Prodi ke</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="prodi">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Ujian Lisan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="lisan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Pemikiran</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="pemikiran">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">kesanggupan studi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="sanggup">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">pendanaan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="pendanaan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Pendidikan terakhir</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="pendidikan">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">penghasilan perbulan</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="penghasilan">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
