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
                <div class="col-lg-8">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 mt-4">
                                    <button type="submit" class="btn btn-success">Ubah Data</button>
                                    <a href="" type="reset" class="btn btn-secondary">Kembali</a>
                                </div>

                                <!-- Multi Columns Form -->
                                <form class="row g-3">
                                    @foreach ($nilai as $a)
                                        <div class="col-md-12">
                                            <label for="inputName5" class="form-label">Nama Camaba</label>
                                            <input type="text" class="form-control" id="inputName5" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Matematika</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Fisika</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Kimia</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Biologi</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Sanggup Studi</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Pilihan Prodi</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Bahasa Inggris</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Ujian Lisan</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Bahasa Arab</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Pemikiran</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Pendanaan</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputEmail5" class="form-label">Studi terakhir</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputPassword5" class="form-label">Penghasilan</label>
                                            <input type="text" class="form-control" id="" value="">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputCity" class="form-label">Rata-rata</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                    @endforeach
                                </form><!-- End Multi Columns Form -->

                            </div>
                        </div>

                    </div>
                    <!-- End Recent Sales -->
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
