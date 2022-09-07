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
                <div class="col-lg-11">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Matriks Alternatif<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Alternatif</th>
                                            <th scope="col">C1</th>
                                            <th scope="col">C2</th>
                                            <th scope="col">C3</th>
                                            <th scope="col">C4</th>
                                            <th scope="col">C5</th>
                                            <th scope="col">C6</th>
                                            <th scope="col">C7</th>
                                            <th scope="col">C8</th>
                                            <th scope="col">C9</th>
                                            <th scope="col">C10</th>
                                            <th scope="col">C11</th>
                                            <th scope="col">C12</th>
                                            <th scope="col">C13</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($dataMahasiswaTi as $item)
                                            <tr>
                                                @php
                                                    $i++;
                                                @endphp
                                                <td>A{{ $i }}</td>
                                                <td>{{ $item->matematika }}</td>
                                                <td>{{ $item->fisika }}</td>
                                                <td>{{ $item->kimia }}</td>
                                                <td>{{ $item->biologi }}</td>
                                                <td>{{ $item->kesanggupan }}</td>
                                                <td>{{ $item->pilihan }}</td>
                                                <td>{{ $item->inggris }}</td>
                                                <td>{{ $item->ujian_lisan }}</td>
                                                <td>{{ $item->arab }}</td>
                                                <td>{{ $item->pemikiran }}</td>
                                                <td>{{ $item->pendanaan }}</td>
                                                <td>{{ $item->pendidikan_terakhir }}</td>
                                                <td>{{ $item->penghasilan }}</td>
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
        <section class="section">
            <div class="row">
                <div class="col-lg-11">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Perhitungan Bobot<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">C1</th>
                                            <th scope="col">C2</th>
                                            <th scope="col">C3</th>
                                            <th scope="col">C4</th>
                                            <th scope="col">C5</th>
                                            <th scope="col">C6</th>
                                            <th scope="col">C7</th>
                                            <th scope="col">C8</th>
                                            <th scope="col">C9</th>
                                            <th scope="col">C10</th>
                                            <th scope="col">C11</th>
                                            <th scope="col">C12</th>
                                            <th scope="col">C13</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tingkat Kepentingan</td>
                                            @foreach ($patokanBobotSaintekTi as $item)
                                                <td>{{ $item->ti }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Bobot Kepentingan</td>
                                            @foreach ($arrayPatokanBobotSaintekTi as $item)
                                                <td>{{ $item }}</td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Sales -->
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col-lg-11">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Perhitungan Pangkat<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">C1</th>
                                            <th scope="col">C2</th>
                                            <th scope="col">C3</th>
                                            <th scope="col">C4</th>
                                            <th scope="col">C5</th>
                                            <th scope="col">C6</th>
                                            <th scope="col">C7</th>
                                            <th scope="col">C8</th>
                                            <th scope="col">C9</th>
                                            <th scope="col">C10</th>
                                            <th scope="col">C11</th>
                                            <th scope="col">C12</th>
                                            <th scope="col">C13</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cost / Benefit</td>
                                            @foreach ($arrVector as $item)
                                                <td>{{ $item['costBenefit'] }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Bobot Kepentingan</td>
                                            @foreach ($arrVector as $item)
                                                <td>
                                                    @if ($item['costBenefit'] == 'cost')
                                                        -{{ $item['nilai'] }}
                                                    @else
                                                        {{ $item['nilai'] }}
                                                    @endif

                                                </td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Sales -->
                </div>
            </div>
        </section>
        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Perhitungan Nilai Vector S<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Alternatif</th>
                                            <th scope="col">Nilai Vektor S</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($vectorS as $item)
                                            <tr>
                                                @php
                                                    $i++;
                                                @endphp
                                                <td>A{{ $i }}</td>
                                                <td>{{ $item }}</td>
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
        <section class="section">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Ranking<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kriteria</th>
                                            <th scope="col">Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach ($arrRank as $item)
                                            <tr>
                                                @php
                                                    $i++;
                                                @endphp
                                                <td>A{{ $i }}</td>
                                                <td>{{ $item }}</td>
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
