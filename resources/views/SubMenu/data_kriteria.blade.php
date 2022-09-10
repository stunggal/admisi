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
                                <form class="row g-3" action="" method="post">
                                    @csrf
                                    <div class="mb-4 mt-4">
                                        <button type="submit" class="btn btn-success">Ubah Data</button>
                                        <a href="" type="reset" class="btn btn-secondary">Kembali</a>
                                    </div>

                                    <!-- Multi Columns Form -->
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Matematika</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['matematika'] }}" name="matematika">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Fisika</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['fisika'] }}" name="fisika">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Kimia</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['kimia'] }}" name="kimia">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Biologi</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['biologi'] }}" name="biologi">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Sanggup Studi</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['kesanggupan'] }}" name="kesanggupan">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Pilihan Prodi</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['pilihan'] }}" name="pilihan">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Bahasa Inggris</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['inggris'] }}" name="inggris">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Ujian Lisan</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['ujian_lisan'] }}" name="ujian_lisan">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Bahasa Arab</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['arab'] }}" name="arab">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Pemikiran</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['pemikiran'] }}" name="pemikiran">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Pendanaan</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['pendanaan'] }}" name="pendanaan">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Studi terakhir</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['pendidikan_terakhir'] }}"
                                            name="pendidikan_terakhir">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Penghasilan</label>
                                        <input type="text" class="form-control" id=""
                                            value="{{ $nilaiKriteria['penghasilan'] }}" name="penghasilan">
                                    </div>
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
