<?php

namespace App\Http\Controllers;

use App\Models\patokanBobotSaintek;
use App\Models\perhitungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('perhitungan.index', [
            'title' => 'Perhitungan'
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

        $arrayStatus = [];
        foreach ($patokanBobotSaintekTi as $key) {
            array_push($arrayStatus, $key->status);
        }

        $a1 = $arrayStatus;
        $a2 = $arrayPatokanBobotSaintekTi;
        $arrVector = [];
        for ($i = 0; $i < count($a1); $i++) {
            $arrVector[$i]['costBenefit'] = $a1[$i];
            $arrVector[$i]['nilai'] = $a2[$i];
        }

        $vectorS = [];
        $i = -1;
        foreach ($dataMahasiswaTi as $item) {
            $i++;
            $mtk = $item->matematika ** $arrayStatus['0']['nilai'];
            $fsk = $item->fisika ** $arrayStatus['1']['nilai'];
            $kma = $item->kimia ** $arrayStatus['2']['nilai'];
            $bio = $item->biologi ** $arrayStatus['3']['nilai'];
            $sanggup = $item->kesanggupan ** $arrayStatus['4']['nilai'];
            $pil = $item->pilihan ** $arrayStatus['5']['nilai'];
            $ing = $item->inggris ** $arrayStatus['6']['nilai'];
            $lisan = $item->ujian_lisan ** $arrayStatus['7']['nilai'];
            $arab = $item->arab ** $arrayStatus['8']['nilai'];
            $mikir = $item->pemikiran ** $arrayStatus['9']['nilai'];
            $dana = $item->pendanaan ** $arrayStatus['10']['nilai'];
            $didik = $item->pendidikan_terakhir ** $arrayStatus['11']['nilai'];
            $hasil = $item->penghasilan ** $arrayStatus['12']['nilai'];

            $vectorS[$i] = $mtk * $fsk * $kma * $bio * $sanggup * $pil * $ing * $lisan * $arab * $mikir * $dana * $didik * $hasil;
        }

        $ranking = 0;
        foreach ($vectorS as $key) {
            $ranking += $key;
        }

        $arrRank = [];
        foreach ($vectorS as $key) {
            array_push($arrRank, $key / $ranking);
        }

        // echo '<pre>';
        // print_r($arrRank);
        // die;


        // echo '<pre>';
        // print_r($arrVector[1]['nilai']);
        // die;


        return view('perhitungan.perhitungan', [
            'title' => $title,
            'dataMahasiswaTi' => $dataMahasiswaTi,
            'patokanBobotSaintekTi' => $patokanBobotSaintekTi,
            'arrayPatokanBobotSaintekTi' => $arrayPatokanBobotSaintekTi,
            'arrVector' => $arrVector,
            'vectorS' => $vectorS,
            'arrRank' => $arrRank
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
