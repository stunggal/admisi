<?php

namespace App\Http\Controllers;

use App\Models\dataKriteria;
use App\Models\patokanBobotSaintek;
use App\Models\prodi;
use App\Models\saintek;
use Illuminate\Http\Request;

class DataKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('Menu.data_kriteria', [
            'title' => 'Data Kriteria',
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
        $ti = patokanBobotSaintek::all();
        $ti2 = saintek::all();

        return view('SubMenu.data_kriteria', [
            'title' => $title,
            'ti' => $ti,
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
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function show(dataKriteria $dataKriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKriteria $dataKriteria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKriteria $dataKriteria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKriteria $dataKriteria)
    {
        //
    }
}
