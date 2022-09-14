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

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Prodi Teknik Informatika <span>| This Period</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alternatif</th>
                                                <th scope="col">MTK</th>
                                                <th scope="col">Bahasa Inggris</th>
                                                <th scope="col">Bahasa Arab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            <tr>
                                                @foreach ($ti as $item)
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->matematika }}</td>
                                                    <td>{{ $item->inggris }}</td>
                                                    <td>{{ $item->arab }}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Prodi Teknologi Industri Pertanian <span>| This Period</span>
                                    </h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alternatif</th>
                                                <th scope="col">MTK</th>
                                                <th scope="col">Bahasa Inggris</th>
                                                <th scope="col">Bahasa Arab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            <tr>
                                                @foreach ($tip as $item)
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->matematika }}</td>
                                                    <td>{{ $item->inggris }}</td>
                                                    <td>{{ $item->arab }}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Prodi Agroteknologi <span>| This Period</span></h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Alternatif</th>
                                                <th scope="col">MTK</th>
                                                <th scope="col">Bahasa Inggris</th>
                                                <th scope="col">Bahasa Arab</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i = 0;
                                            @endphp
                                            <tr>
                                                @foreach ($agro as $item)
                                                    @php
                                                        $i++;
                                                    @endphp
                                                    <th scope="row">{{ $i }}</th>
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->matematika }}</td>
                                                    <td>{{ $item->inggris }}</td>
                                                    <td>{{ $item->arab }}</td>
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Budget Report -->
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Budget Report <span>| This Month</span></h5>


                            <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [
                                                @foreach ($dataPeriode as $item)
                                                    {

                                                        name: {{ $item['nama'] }},
                                                        max: 25
                                                    },
                                                @endforeach
                                            ]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                value: [
                                                    @foreach ($dataPeriode as $item)
                                                        {{ $item['nilai'] }},
                                                    @endforeach
                                                ],
                                                name: 'Actual Spending'
                                            }]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Budget Report -->

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
    <!-- End #main --> --}}
@endsection

@extends('Layouts.footer')
