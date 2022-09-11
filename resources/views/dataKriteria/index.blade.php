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

                <div class="col-lg-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Sains dan Teknologi<span> | Nilai Bobot</span>
                                </h5>

                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Prodi</th>
                                            <th scope="col">Math</th>
                                            <th scope="col">Fisika</th>
                                            <th scope="col">Kimia</th>
                                            <th scope="col">Biologi</th>
                                            <th scope="col">Sanggup Studi</th>
                                            <th scope="col">pilihan</th>
                                            <th scope="col">Inggris</th>
                                            <th scope="col">Lisan</th>
                                            <th scope="col">Arab</th>
                                            <th scope="col">Fikir</th>
                                            <th scope="col">Dana</th>
                                            <th scope="col">Studi</th>
                                            <th scope="col">Hasil</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($dataProdi as $data)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->prodi }}</td>
                                                <td>{{ $data->matematika }}</td>
                                                <td>{{ $data->fisika }}</td>
                                                <td>{{ $data->kimia }}</td>
                                                <td>{{ $data->biologi }}</td>
                                                <td>{{ $data->kesanggupan }}</td>
                                                <td>{{ $data->pilihan }}</td>
                                                <td>{{ $data->inggris }}</td>
                                                <td>{{ $data->ujian_lisan }}</td>
                                                <td>{{ $data->arab }}</td>
                                                <td>{{ $data->pemikiran }}</td>
                                                <td>{{ $data->pendanaan }}</td>
                                                <td>{{ $data->pendidikan_terakhir }}</td>
                                                <td>{{ $data->penghasilan }}</td>
                                                <td>
                                                    <a href="/data-kriteria/edit/{{ $data->id }}"
                                                        class="btn btn-success">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Sales -->
                </div>

                <div class="col-lg-12">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Humaniora<span> | Nilai Bobot</span>
                                </h5>

                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Prodi</th>
                                            <th scope="col">P.Umum</th>
                                            <th scope="col">Sanggup Studi</th>
                                            <th scope="col">pilihan</th>
                                            <th scope="col">Inggris</th>
                                            <th scope="col">Lisan</th>
                                            <th scope="col">Arab</th>
                                            <th scope="col">Fikir</th>
                                            <th scope="col">Dana</th>
                                            <th scope="col">Studi</th>
                                            <th scope="col">Hasil</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        {{-- @foreach ($dataProdi as $data)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->prodi }}</td>
                                                <td>{{ $data->matematika }}</td>
                                                <td>{{ $data->fisika }}</td>
                                                <td>{{ $data->kimia }}</td>
                                                <td>{{ $data->biologi }}</td>
                                                <td>{{ $data->kesanggupan }}</td>
                                                <td>{{ $data->pilihan }}</td>
                                                <td>{{ $data->inggris }}</td>
                                                <td>{{ $data->ujian_lisan }}</td>
                                                <td>{{ $data->arab }}</td>
                                                <td>{{ $data->pemikiran }}</td>
                                                <td>{{ $data->pendanaan }}</td>
                                                <td>{{ $data->pendidikan_terakhir }}</td>
                                                <td>{{ $data->penghasilan }}</td>
                                                <td><a href="/data-kriteria/edit" class="btn btn-success"><i
                                                            class="bi bi-pencil"></i></a></td>

                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
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
