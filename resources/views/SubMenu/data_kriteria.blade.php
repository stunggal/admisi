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
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Calon Mahasiswa<span> | Periode</span>
                                </h5>
                                <a href="/data-kriteria/edit/{{ $prodi }}"><button class="btn btn-success">perbaharui
                                        nilai</button></a>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Cost / Benefit</th>
                                            <th scope="col">Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($dataProdi as $data)
                                            @php
                                            // echo '<pre>';print_r($data->matematika);die;
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->matematika }}</td>
                                                <td>{{ $data->status }}</td>

                                                @if ($prodi == 'ti')
                                                    <td>{{ $data->fisika }}</td>
                                                @endif
                                                @if ($prodi == 'tip')
                                                    <td>{{ $data->biologi }}</td>
                                                @endif
                                                @if ($prodi == 'agro')
                                                    <td>{{ $data->biologi }}</td>
                                                @endif

                                            </tr>
                                        @endforeach
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
