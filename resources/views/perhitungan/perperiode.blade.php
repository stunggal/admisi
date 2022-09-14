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

                <!-- Left side columns -->
                <div class="col-lg-9">
                    <div class="row">

                        <!-- Customers Card -->
                        <div class="col-lg-9">
                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Periode Pendaftaran | <span> all </span>
                                        </h5>
                                        @if (session()->has('delete'))
                                            <div class="alert alert-success">
                                                {{ session()->get('delete') }}
                                            </div>
                                        @endif
                                        <table class="table table-striped datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Periode</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Data Mhs</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($periodes as $p)
                                                    <tr>
                                                        <td>{{ $p->periode }}</td>
                                                        @if ($p->status == 'aktif')
                                                            <td><span class="badge bg-success">Periode aktif</span></td>
                                                        @else
                                                            <td><span class="badge bg-danger">Periode nonaktif</span></td>
                                                        @endif
                                                        <td>
                                                            <a href="/perhitungan/{{ $p->periode }}"
                                                                class="btn btn-success"><i class="bi bi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- End Recent Sales -->
                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main>
    <!-- End #main -->
@endsection

@extends('Layouts.footer')
