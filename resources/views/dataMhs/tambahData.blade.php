@extends('Layouts.header')
@extends('Layouts.sidebar')

@section('body')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ $title }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Data Kriteria</a></li>
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
                                <h5 class="card-title">Data Baru <span>| Periode</span></h5>

                                <!-- Multi Columns Form -->
                                <form class="row g-3" method="post" action="/data-mahasiswa/create">
                                    @csrf

                                    {{-- @foreach ($nilai as $a) --}}
                                    <div class="col-md-12">
                                        <label for="inputName5" class="form-label">Nama Camaba</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            id="nama" name="nama">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputName5"
                                            class="form-label @error('prodi1') is-invalid @enderror">Pilihan Prodi 1</label>
                                        <select class="form-select" name="prodi1">
                                            <option selected=""></option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
                                            <option value="Agro teknologi">Agroteknologi</option>
                                        </select>
                                        {{-- <input type="text" class="form-control" id="prodi1" name="prodi1"> --}}
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputName5"
                                            class="form-label @error('prodi2') is-invalid @enderror">Pilihan Prodi 2</label>
                                        <select class="form-select" name="prodi2">
                                            <option selected=""></option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
                                            <option value="Agro teknologi">Agroteknologi</option>
                                        </select>
                                        {{-- <input type="text" class="form-control" id="prodi2" name="prodi2"> --}}
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputName5"
                                            class="form-label @error('prodi3') is-invalid @enderror">Pilihan Prodi 3</label>
                                        <select class="form-select" name="prodi3">
                                            <option selected=""></option>
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Teknik Industri Pertanian">Teknik Industri Pertanian</option>
                                            <option value="Agro teknologi">Agroteknologi</option>
                                        </select>
                                        {{-- <input type="text" class="form-control" id="prodi3" name="prodi3"> --}}
                                    </div>
                                    <div class="col-md-3">
                                        <label for="matematika" class="form-label">Matematika</label>
                                        <input type="text" class="form-control @error('matematika') is-invalid @enderror"
                                            id="matematika" name="matematika">
                                        @error('matematika')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="fisika" class="form-label">Fisika</label>
                                        <input type="text" class="form-control @error('fisika') is-invalid @enderror"
                                            id="fisika" name="fisika">
                                        @error('fisika')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Kimia</label>
                                        <input type="text" class="form-control @error('kimia') is-invalid @enderror"
                                            id="kimia" name="kimia">
                                        @error('kimia')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Biologi</label>
                                        <input type="text" class="form-control @error('biologi') is-invalid @enderror"
                                            id="biologi" name="biologi">
                                        @error('biologi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="kesanggupan" class="form-label">kesanggupan</label>
                                        <select class="form-select" name="kesanggupan">
                                            <option selected=""></option>
                                            <option value="5">lanjut S2</option>
                                            <option value="4">S1 + Staff</option>
                                            <option value="3">S1</option>
                                            <option value="2">1/2 tahun</option>
                                            <option value="1">tidak tau</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Bahasa Inggris</label>
                                        <input type="text" class="form-control @error('inggris') is-invalid @enderror"
                                            id="inggris" name="inggris">
                                        @error('inggris')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword5" class="form-label">Ujian Lisan</label>
                                        <input type="text"
                                            class="form-control @error('ujian_lisan') is-invalid @enderror"
                                            id="ujian_lisan" name="ujian_lisan">
                                        @error('ujian_lisan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputEmail5" class="form-label">Bahasa Arab</label>
                                        <input type="text" class="form-control @error('arab') is-invalid @enderror"
                                            id="arab" name="arab">
                                        @error('arab')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pemikiran" class="form-label">Pemikiran</label>
                                        <select class="form-select" name="pemikiran">
                                            <option selected=""></option>
                                            <option value="4">Baik</option>
                                            <option value="3">Cukup</option>
                                            <option value="2">Kurang</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pendanaan" class="form-label">pendanaan</label>
                                        <select class="form-select" name="pendanaan">
                                            <option selected=""></option>
                                            <option value="4">organisasi</option>
                                            <option value="3">keluarga</option>
                                            <option value="2">wali</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="pendidikan_terakhir" class="form-label">pendidikan terakhir</label>
                                        <select class="form-select" name="pendidikan_terakhir">
                                            <option selected=""></option>
                                            <option value="5">s3</option>
                                            <option value="4">s2</option>
                                            <option value="3">s1</option>
                                            <option value="2">sma kebawah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="penghasilan" class="form-label">penghasilan</label>
                                        <select class="form-select" name="penghasilan">
                                            <option selected=""></option>
                                            <option value="5">> 10Jt</option>
                                            <option value="4">5Jt - 9Jt</option>
                                            <option value="3">2Jt - 4Jt</option>
                                            <option value="2">
                                                < 1Jt</option>
                                        </select>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                        <a href="/data-mahasiswa" type="reset" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </form>
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
