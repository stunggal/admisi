<?php

namespace App\Http\Controllers;

use App\Models\camaba;
use App\Models\dataMahasiswa;
use App\Models\patokanBobotSaintek;
use App\Models\saintek;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Menu.data_mahasiswa', [
            'title' => 'Data Mahasiswa',
        ]);
    }

    public function perhitungan($id)
    {
        $nilai = DB::table('camabas')
            ->join('sainteks', 'sainteks.camaba_id', '=', 'camabas.id')
            ->where('camabas.prodi1', 'Teknik Informatika')
            ->orWhere('camabas.prodi2', 'Teknik Informatika')
            ->orWhere('camabas.prodi3', 'Teknik Informatika')
            ->get();

        return view('SubMenu2.datapribadi', [
            'title' => 'Data Mahasiswa',
            'nilai' => $nilai->where('camaba_id', $id)

        ]);
    }

    public function prodi($prodi)
    {
        if ($prodi == 'ti') {
            $title = 'Teknik Informatika';
        } elseif ($prodi == 'tip') {
            $title = 'Teknik Industri Pertanian';
        } elseif ($prodi == 'agro') {
            $title = 'Agroteknologi';
        } elseif ($prodi == 'hi') {
            $title = 'Hubungan Internasional';
        } elseif ($prodi == 'ilkom') {
            $title = 'Ilmu Komunikasi';
        }

        $ti = camaba::where('prodi1', '=', 'Teknik Informatika')
            ->orWhere('prodi2', '=', 'Teknik Informatika')
            ->orWhere('prodi3', '=', 'Teknik Informatika')
            ->get();


        // $ti = camaba::all();

        return view('SubMenu.data_mahasiswa', [
            'title' => $title,
            'ti' => $ti
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.tambahData', [
            'title' => 'Input Data'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $camaba_id = count(camaba::all()) + 1;
        $icamaba = $request->validate([
            'nama' => 'required',
            'prodi1' => 'required',
            'prodi2' => 'required',
            'prodi3' => 'required'
        ]);

        $isaintek = $request->validate([
            'matematika' => 'required',
            'fisika' => 'required',
            'kimia' => 'required',
            'biologi' => 'required',
            'kesanggupan' => 'required',
            'pilihan' => 'required',
            'inggris' => 'required',
            'ujian_lisan' => 'required',
            'arab' => 'required',
            'pemikiran' => 'required',
            'pemikiran' => 'required',
            'pendanaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'penghasilan' => 'required',
        ]);

        $pemikiran = patokanBobotSaintek::where('kriteria', 'Pemikiran')->get();
        $arab = patokanBobotSaintek::where('kriteria', 'Bahasa Arab')->get();
        $pendanaan = patokanBobotSaintek::where('kriteria', 'Pendanaan')->get();
        $fisika = patokanBobotSaintek::where('kriteria', 'Fisika')->get();
        $kimia = patokanBobotSaintek::where('kriteria', 'Kimia')->get();
        $biologi = patokanBobotSaintek::where('kriteria', 'Biologi')->get();
        $inggris = patokanBobotSaintek::where('kriteria', 'Bahasa Inggris')->get();
        $u_lisan = patokanBobotSaintek::where('kriteria', 'Ujian Lisan')->get();
        $penghasilan = patokanBobotSaintek::where('kriteria', 'Penghasilan Perbulan')->get();
        $pilihan = patokanBobotSaintek::where('kriteria', 'Pilihan Prodi')->get();
        $matematika = patokanBobotSaintek::where('kriteria', 'Matematika')->get();
        $pendidikan_terakhir = patokanBobotSaintek::where('kriteria', 'Pendidikan Terakhir')->get();
        $kesanggupan = patokanBobotSaintek::where('kriteria', 'Kesanggupan Studi')->get();

        $total = 0;

        # Teknik Informatika    
        foreach ($pemikiran as $value) {
            $total += $value->ti;
            $nilaiPemikiran = $value->ti;
        }
        foreach ($arab as $value) {
            $total += $value->ti;
            $nilaiarab = $value->ti;
        }
        foreach ($pendanaan as $value) {
            $total += $value->ti;
            $nilaipendanaan = $value->ti;
        }
        foreach ($fisika as $value) {
            $total += $value->ti;
            $nilaifisika = $value->ti;
        }
        foreach ($kimia as $value) {
            $total += $value->ti;
            $nilaikimia = $value->ti;
        }
        foreach ($biologi as $value) {
            $total += $value->ti;
            $nilaibiologi = $value->ti;
        }
        foreach ($inggris as $value) {
            $total += $value->ti;
            $nilaiinggris = $value->ti;
        }
        foreach ($u_lisan as $value) {
            $total += $value->ti;
            $nilaiu_lisan = $value->ti;
        }
        foreach ($penghasilan as $value) {
            $total += $value->ti;
            $nilaipenghasilan = $value->ti;
        }
        foreach ($pilihan as $value) {
            $total += $value->ti;
            $nilaipilihan = $value->ti;
        }
        foreach ($matematika as $value) {
            $total += $value->ti;
            $nilaimatematika = $value->ti;
        }
        foreach ($pendidikan_terakhir as $value) {
            $total += $value->ti;
            $nilaipendidikan_terakhir = $value->ti;
        }
        foreach ($kesanggupan as $value) {
            $total += $value->ti;
            $nilaikesanggupan = $value->ti;
        }

        $normslisasiPemikiran = $nilaiPemikiran / $total;
        $normslisasiArab = $nilaiarab / $total;
        $normslisasiPendanaan = $nilaipendanaan / $total;
        $normslisasiFisika = $nilaifisika / $total;
        $normslisasiKimia = $nilaikimia / $total;
        $normslisasiBiologi = $nilaibiologi / $total;
        $normslisasiIggris = $nilaiinggris / $total;
        $normslisasiIu_lisan = $nilaiu_lisan / $total;
        $normslisasiPenghasilan = $nilaipenghasilan / $total;
        $normslisasiPilihan = $nilaipilihan / $total;
        $normslisasiMatematika = $nilaimatematika / $total;
        $normslisasiPendidikan_terakhir = $nilaipendidikan_terakhir / $total;
        $normslisasiKesanggupan = $nilaikesanggupan / $total;

        $jumlah = $normslisasiPemikiran + $normslisasiArab + $normslisasiPendanaan + $normslisasiFisika + $normslisasiBiologi + $normslisasiIggris + $normslisasiIu_lisan + $normslisasiPenghasilan + $normslisasiPilihan + $normslisasiMatematika + $normslisasiPendidikan_terakhir + $normslisasiKesanggupan + $normslisasiKimia;

        $penilaian = ($request['matematika'] ** $normslisasiMatematika) * ($request['fisika'] ** $normslisasiFisika) * ($request['kimia'] ** $normslisasiKimia) * ($request['biologi'] ** $normslisasiBiologi) * ($request['arab'] ** $normslisasiArab) * ($request['inggris'] ** $normslisasiIggris) * ($request['ujian_lisan'] ** $normslisasiIu_lisan) * ($request['pilihan'] ** $normslisasiPilihan) * ($request['pendanaan'] ** $normslisasiPendanaan) * ($request['penghasilan'] ** $normslisasiPenghasilan) * ($request['kesanggupan'] ** $normslisasiKesanggupan) * ($request['pendidikan_terakhir'] ** $normslisasiPendidikan_terakhir) * ($request['pemikiran'] ** $normslisasiPemikiran);


        return $penilaian;

        $isaintek['camaba_id'] = $camaba_id;
        camaba::create($icamaba);
        saintek::create($isaintek);

        return redirect('/data-mahasiswa')->with('success', 'Data Berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(dataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(dataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataMahasiswa $dataMahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataMahasiswa  $dataMahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataMahasiswa $dataMahasiswa)
    {
        //
    }
}
