<?php

namespace App\Http\Controllers;

use App\Models\dataKriteria;
use App\Models\patokanBobotSaintek;
use App\Models\prodi;
use App\Models\saintek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProdi = patokanBobotSaintek::all();
        // $dataProdi = DB::table('patokan_bobot_sainteks')->where('id', '=', '3')->get();

        return view('Menu.data_kriteria', [
            'title' => 'Data Kriteria',
            'dataProdi' => $dataProdi,

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

        // $dataProdi = patokanBobotSaintek::where('id', '=', '3');
        $dataProdi = DB::table('patokan_bobot_sainteks')->where('id', '=', '3')->get();

        // echo '<pre>';
        // print_r($dataProdi);
        // die;

        return view('SubMenu.data_kriteria', [
            'title' => $title,
            'dataProdi' => $dataProdi,
            'prodi' => $prodi,

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
        $nilaiKriteria = patokanBobotSaintek::all();
        return view('SubMenu.data_kriteria', [
            'title' => 'ubah nilai kriteria'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dataKriteria  $dataKriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKriteria $dataKriteria, $prodi)
    {
        $validatedData = $request->validate([
            'mtk' => 'required|between:1,5',
            'fsk' => 'required|between:1,5',
            'kma' => 'required|between:1,5',
            'bio' => 'required|between:1,5',
            'ar' => 'required|between:1,5',
            'en' => 'required|between:1,5',
            'prodi' => 'required|between:1,5',
            'lisan' => 'required|between:1,5',
            'pemikiran' => 'required|between:1,5',
            'sanggup' => 'required|between:1,5',
            'pendanaan' => 'required|between:1,5',
            'pendidikan' => 'required|between:1,5',
            'penghasilan' => 'required|between:1,5',
        ]);




        // $Updateperiode = periode::findOrFail($periode);
        // $Updateperiode->update($validatedData);
        // return redirect('/periode')->with('success', 'Period has been updated');

        // $arr = array('first' => 'a', 'second' => 'b',);
        // $key = array_search('a', $arr);
        // return $key;
        function ulangi($key)
        {

            $coba = patokanBobotSaintek::where('kriteria', 'pendanaan')->first();
            $data['ti'] = $key;
            $coba->update($data);
        };

        foreach ($validatedData as $key) {
            ulangi($key);
        }






        return 'dah';
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
