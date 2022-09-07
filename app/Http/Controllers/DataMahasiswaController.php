<?php

namespace App\Http\Controllers;

use App\Models\camaba;
use App\Models\dataMahasiswa;
use App\Models\patokanBobotSaintek;
use App\Models\periode;
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
            $data = camaba::where('prodi1', '=', 'Teknik Informatika')
                ->orWhere('prodi2', '=', 'Teknik Informatika')
                ->orWhere('prodi3', '=', 'Teknik Informatika')
                ->get();
        } elseif ($prodi == 'tip') {
            $title = 'Teknik Industri Pertanian';
            $data = camaba::where('prodi1', '=', 'Teknik Industri Pertanian')
                ->orWhere('prodi2', '=', 'Teknik Industri Pertanian')
                ->orWhere('prodi3', '=', 'Teknik Industri Pertanian')
                ->get();
        } elseif ($prodi == 'agro') {
            $title = 'Agroteknologi';
            $data = camaba::where('prodi1', '=', 'Agroteknologi')
                ->orWhere('prodi2', '=', 'Agroteknologi')
                ->orWhere('prodi3', '=', 'Agroteknologi')
                ->get();
        } elseif ($prodi == 'hi') {
            $title = 'Hubungan Internasional';
        } elseif ($prodi == 'ilkom') {
            $title = 'Ilmu Komunikasi';
        }




        // $ti = camaba::all();

        return view('SubMenu.data_mahasiswa', [
            'title' => $title,
            'data' => $data,
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

        // $pemikiran = patokanBobotSaintek::where('kriteria', 'Pemikiran')->get();
        // $total = 0;

        // # Teknik Informatika    
        // foreach ($pemikiran as $value) {
        //     $total += $value->ti;
        //     $nilaiPemikiran = $value->ti;
        // }

        $isaintek['camaba_id'] = $camaba_id;
        $icamaba['periode'] = 0;
        $c = periode::where('status', 'aktif')->get();
        foreach ($c as $key) {
            $icamaba['periode'] = $key['periode'];
        }
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
