<?php

namespace App\Http\Controllers;

use App\Models\agro;
use App\Models\patokanBobotSaintek;
use App\Models\perhitungan;
use App\Models\periode;
use App\Models\ti;
use App\Models\tip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($periode)
    {

        $data = patokanBobotSaintek::all();
        return view('perhitungan.index', [
            'title' => 'Perhitungan',
            'data' => $data,
            'periode' => $periode
        ]);
    }

    public function prodi($periode, $prodi)
    {
        $dataMahasiswa = [];
        $title = '';

        if ($prodi == '3') {
            $title = 'Teknik Informatika';
            $dataMahasiswa = DB::table('camabas')
                ->join('tis', 'tis.camaba_id', '=', 'camabas.id')->where('camabas.periode', $periode)
                ->get();
            $dataMahasiswa->where('periode', $periode);
        } elseif ($prodi == '1') {
            $title = 'Teknik Industri Pertanian';
            $dataMahasiswa = DB::table('camabas')
                ->join('tips', 'tips.camaba_id', '=', 'camabas.id')->where('camabas.periode', $periode)
                ->get();
            $dataMahasiswa->where('periode', $periode);
        } elseif ($prodi == '2') {
            $title = 'Agroteknologi';
            $dataMahasiswa = DB::table('camabas')
                ->join('agros', 'agross.camaba_id', '=', 'camabas.id')->where('camabas.periode', $periode)
                ->get();
            $dataMahasiswa->where('periode', $periode);
        } elseif ($prodi == 'hi') {
            $title = 'Hubungan Internasional';
        } elseif ($prodi == 'ilkom') {
            $title = 'Ilmu Komunikasi';
        }

        $patokanBobotSaintekTi = patokanBobotSaintek::all();
        $dataMahasiswaTi =  DB::table('camabas')
            ->join('sainteks', 'sainteks.camaba_id', '=', 'camabas.id')
            ->where('camabas.prodi1', 'Teknik Informatika')
            ->orWhere('camabas.prodi2', 'Teknik Informatika')
            ->orWhere('camabas.prodi3', 'Teknik Informatika')
            ->get();

        $jumlahPatokanBobotSaintekTi = 0;
        $arrayPatokanBobotSaintekTi = [];

        // foreach ($patokanBobotSaintekTi as $key) {
        //     $jumlahPatokanBobotSaintekTi += $key['ti'];
        // }

        foreach ($patokanBobotSaintekTi as $key) {
            array_push($arrayPatokanBobotSaintekTi, $key["ti"] / $jumlahPatokanBobotSaintekTi);
        }




        function ulang($normalisasiNilai)
        {
            if ($normalisasiNilai >= 0 && $normalisasiNilai < 3) {
                return 1;
            } elseif ($normalisasiNilai >= 3 && $normalisasiNilai < 5) {
                return 2;
            } elseif ($normalisasiNilai >= 5 && $normalisasiNilai < 7) {
                return 3;
            } elseif ($normalisasiNilai >= 7 && $normalisasiNilai < 9) {
                return 4;
            } elseif ($normalisasiNilai >= 9 && $normalisasiNilai <= 10) {
                return 5;
            }
        };

        $i = 0;
        // return $dataMahasiswa[$key->id]['matematika;

        foreach ($dataMahasiswa as $key) {

            $key->matematika = ulang($key->matematika);
            $key->fisika = ulang($key->fisika);
            $key->kimia = ulang($key->kimia);
            $key->biologi = ulang($key->biologi);
            $key->inggris = ulang($key->inggris);
            $key->ujian_lisan = ulang($key->ujian_lisan);
            $key->arab = ulang($key->arab);
            $i++;
        }

        // perhitungan bobot
        $patokanBobotSaintek = patokanBobotSaintek::where('prodi', $title)->first();
        $jumlah = $patokanBobotSaintek['matematika'] + $patokanBobotSaintek['fisika'] + $patokanBobotSaintek['kimia'] + $patokanBobotSaintek['biologi'] + $patokanBobotSaintek['kesanggupan'] + $patokanBobotSaintek['pilihan'] + $patokanBobotSaintek['inggris'] + $patokanBobotSaintek['ujian_lisan'] + $patokanBobotSaintek['arab'] + $patokanBobotSaintek['pemikiran'] + $patokanBobotSaintek['pendanaan'] + $patokanBobotSaintek['pendidikan_terakhir'] + $patokanBobotSaintek['penghasilan'];
        $perhitunganSaintek['matematika'] = $patokanBobotSaintek['matematika'] / $jumlah;
        $perhitunganSaintek['fisika'] = $patokanBobotSaintek['fisika'] / $jumlah;
        $perhitunganSaintek['kimia'] = $patokanBobotSaintek['kimia'] / $jumlah;
        $perhitunganSaintek['biologi'] = $patokanBobotSaintek['biologi'] / $jumlah;
        $perhitunganSaintek['kesanggupan'] = $patokanBobotSaintek['kesanggupan'] / $jumlah;
        $perhitunganSaintek['inggris'] = $patokanBobotSaintek['inggris'] / $jumlah;
        $perhitunganSaintek['ujian_lisan'] = $patokanBobotSaintek['ujian_lisan'] / $jumlah;
        $perhitunganSaintek['arab'] = $patokanBobotSaintek['arab'] / $jumlah;
        $perhitunganSaintek['pemikiran'] = $patokanBobotSaintek['pemikiran'] / $jumlah;
        $perhitunganSaintek['pendanaan'] = $patokanBobotSaintek['pendanaan'] / $jumlah;
        $perhitunganSaintek['pendidikan_terakhir'] = $patokanBobotSaintek['pendidikan_terakhir'] / $jumlah;
        $perhitunganSaintek['penghasilan'] = $patokanBobotSaintek['penghasilan'] / $jumlah;
        $perhitunganSaintek['pilihan'] = $patokanBobotSaintek['pilihan'] / $jumlah;

        // perhitungan nil;ai vector s

        $vector = [];
        $i = 0;
        foreach ($dataMahasiswa as $key) {
            $vector[$i]['id_mahasiswa'] =  $key->id;
            $vector[$i]['nilai'] =  ($key->matematika ** $perhitunganSaintek['matematika']) * ($key->fisika ** $perhitunganSaintek['fisika']) * ($key->kimia ** $perhitunganSaintek['kimia']) * ($key->biologi ** $perhitunganSaintek['biologi']) * ($key->kesanggupan ** $perhitunganSaintek['kesanggupan']) * ($key->inggris ** $perhitunganSaintek['inggris']) * ($key->ujian_lisan ** $perhitunganSaintek['ujian_lisan']) * ($key->arab ** $perhitunganSaintek['arab']) * ($key->pemikiran ** $perhitunganSaintek['pemikiran']) * ($key->pendanaan ** $perhitunganSaintek['pendanaan']) * ($key->pendidikan_terakhir ** $perhitunganSaintek['pendidikan_terakhir']) * ($key->penghasilan ** $perhitunganSaintek['penghasilan']) * ($key->pilihan ** $perhitunganSaintek['pilihan']);
            $i++;
        }

        // ranking
        $totalVectorS = 0;
        foreach ($vector as $ranking) {
            $totalVectorS += $ranking['nilai'];
        }

        // return $vector;
        $i = 0;
        $ranking = [];
        foreach ($vector as $key) {
            $ranking[$i]['id'] = $key['id_mahasiswa'];
            $ranking[$i]['nilai'] = $key['nilai'] / $totalVectorS;
            $i++;
        }

        // return $totalVectorS;

        return view('perhitungan.perhitungan', [
            'title' => $title,
            'dataMahasiswa' => $dataMahasiswa,
            'perhitunganSaintek' => $perhitunganSaintek,
            'patokanBobotSaintek' => $patokanBobotSaintek,
            'vector' => $vector,
            'ranking' => $ranking
        ]);
    }

    public function periodePerhitungan()
    {
        $periodes = periode::all();
        return view('perhitungan.perperiode', [
            'title' => 'periode',
            'periodes' => $periodes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function show(perhitungan $perhitungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function edit(perhitungan $perhitungan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perhitungan $perhitungan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perhitungan  $perhitungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(perhitungan $perhitungan)
    {
        //
    }
}
