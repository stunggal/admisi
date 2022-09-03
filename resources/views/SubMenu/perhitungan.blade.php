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
                                    matriks alternatif<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">alternatif</th>
                                            <th scope="col">matematika</th>
                                            <th scope="col">fisika</th>
                                            <th scope="col">kimia</th>
                                            <th scope="col">biologi</th>
                                            <th scope="col">kesanggupan studi</th>
                                            <th scope="col">pilihan prodi</th>
                                            <th scope="col">bahasa inggris</th>
                                            <th scope="col">ujian lisan</th>
                                            <th scope="col">bahasa arab</th>
                                            <th scope="col">pemikiran</th>
                                            <th scope="col">pendanaan</th>
                                            <th scope="col">pendidikan terakhir</th>
                                            <th scope="col">penghasilan</th>
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
                                                <td>A {{ $i }}</td>
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
                                    perhitungan Bobot<span> | Periode</span>
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
                                            <th scope="col">c1</th>
                                            <th scope="col">c2</th>
                                            <th scope="col">c3</th>
                                            <th scope="col">c4</th>
                                            <th scope="col">c5</th>
                                            <th scope="col">c6</th>
                                            <th scope="col">c7</th>
                                            <th scope="col">c8</th>
                                            <th scope="col">c9</th>
                                            <th scope="col">c10</th>
                                            <th scope="col">c11</th>
                                            <th scope="col">c12</th>
                                            <th scope="col">c13</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>tingkat kepentingan</td>
                                            @foreach ($patokanBobotSaintekTi as $item)
                                                <td>{{ $item->ti }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>bobot kepentingan</td>
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
                                    perhitungan pangkat<span> | Periode</span>
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
                                            <th scope="col">c1</th>
                                            <th scope="col">c2</th>
                                            <th scope="col">c3</th>
                                            <th scope="col">c4</th>
                                            <th scope="col">c5</th>
                                            <th scope="col">c6</th>
                                            <th scope="col">c7</th>
                                            <th scope="col">c8</th>
                                            <th scope="col">c9</th>
                                            <th scope="col">c10</th>
                                            <th scope="col">c11</th>
                                            <th scope="col">c12</th>
                                            <th scope="col">c13</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>cost / benefit</td>
                                            @foreach ($arrVector as $item)
                                                <td>{{ $item['costBenefit'] }}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>bobot kepentingan</td>
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
                <div class="col-lg-11">
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">
                                    perhitungan nilai vector s<span> | Periode</span>
                                </h5>
                                @if (session()->has('delete'))
                                    <div class="alert alert-success">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                                <table class="table table-striped datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">alternatif</th>
                                            <th scope="col">nilai vektor s</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>$item->ti</td>
                                            <td>$item->ti</td>
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
                                    ranking<span> | Periode</span>
                                </h5>
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
                                            <th scope="col">Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        {{-- @foreach ($ti as $aiti) --}}
                                        @php
                                            $i++;
                                        @endphp
                                        <tr>
                                            {{-- <td>{{ $i }}</td>
                                                <td>{{ $aiti->kriteria }}</td>
                                                <td>{{ $aiti->ti }}</td> --}}
                                        </tr>
                                        {{-- @endforeach --}}
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
