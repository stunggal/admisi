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
        return view('Menu.perhitungan', [
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

        foreach ($patokanBobotSaintekTi as $key) {
            $jumlahPatokanBobotSaintekTi += $key['ti'];
        }

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


        return view('SubMenu.perhitungan', [
            'title' => $title,
            'dataMahasiswaTi' => $dataMahasiswaTi,
            'patokanBobotSaintekTi' => $patokanBobotSaintekTi,
            'arrayPatokanBobotSaintekTi' => $arrayPatokanBobotSaintekTi,
            'arrVector' => $arrVector
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
