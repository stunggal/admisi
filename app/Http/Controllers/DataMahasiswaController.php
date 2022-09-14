<?php

namespace App\Http\Controllers;

use App\Models\agro;
use App\Models\camaba;
use App\Models\dataMahasiswa;
use App\Models\patokanBobotSaintek;
use App\Models\periode;
use App\Models\saintek;
use App\Models\ti;
use App\Models\tip;
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

        return view('dataMhs.index', [
            'title' => 'Data Mahasiswa',
        ]);
    }

    public function perperiode($prodi)
    {
        $periodes = periode::all();
        return view('dataMhs.perperiode', [
            'periodes' => $periodes,
            'prodi' => $prodi,
            'title' => 'Periode'
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

        return view('dataMhs.editData', [
            'title' => 'Data Mahasiswa',
            'nilai' => $nilai->where('camaba_id', $id)

        ]);
    }

    public function perperiodeperprodi($periode, $prodi)
    {
        if ($prodi == 'ti') {
            $title = 'Teknik Informatika';
            $data = camaba::Where(function ($query) use ($periode) {
                $query->where("periode", $periode);
            })
                ->Where(function ($query) {
                    $query->where('prodi1', '=', 'Teknik Informatika')
                        ->orWhere('prodi2', '=', 'Teknik Informatika')
                        ->orWhere('prodi3', '=', 'Teknik Informatika');
                })
                ->get();
        } elseif ($prodi == 'tip') {
            $title = 'Teknik Industri Pertanian';
            $data = camaba::Where(function ($query) use ($periode) {
                $query->where("periode", $periode);
            })
                ->Where(function ($query) {
                    $query->where('prodi1', '=', 'Teknik Industri Pertanian')
                        ->orWhere('prodi2', '=', 'Teknik Industri Pertanian')
                        ->orWhere('prodi3', '=', 'Teknik Industri Pertanian');
                })
                ->get();
        } elseif ($prodi == 'agro') {
            $title = 'Agroteknologi';
            $data = camaba::Where(function ($query) use ($periode) {
                $query->where("periode", $periode);
            })
                ->Where(function ($query) {
                    $query->where('prodi1', '=', 'Agroteknologi')
                        ->orWhere('prodi2', '=', 'Agroteknologi')
                        ->orWhere('prodi3', '=', 'Agroteknologi');
                })
                ->get();
        }

        return view('dataMhs.dataMhs', [
            'title' => $title,
            'data' => $data,
        ]);
    }

    public function prodi($prodi)
    {
        // if ($prodi == 'ti') {
        //     $title = 'Teknik Informatika';
        //     $data = camaba::where('prodi1', '=', 'Teknik Informatika')
        //         ->orWhere('prodi2', '=', 'Teknik Informatika')
        //         ->orWhere('prodi3', '=', 'Teknik Informatika')
        //         ->get();
        // } elseif ($prodi == 'tip') {
        //     $title = 'Teknik Industri Pertanian';
        //     $data = camaba::where('prodi1', '=', 'Teknik Industri Pertanian')
        //         ->orWhere('prodi2', '=', 'Teknik Industri Pertanian')
        //         ->orWhere('prodi3', '=', 'Teknik Industri Pertanian')
        //         ->get();
        // }

        // // $ti = camaba::all();

        // return view('SubMenu.data_mahasiswa', [
        //     'title' => $title,
        //     'data' => $data,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dataMhs.tambahData', [
            'title' => 'Input Data'
        ]);
    }

    public function bobot($bobot)
    {
        if ($bobot == 0 - 2) {
            $value = '2';
        } elseif ($bobot == 3 - 4) {
            $value = '3';
        } elseif ($bobot == 5 - 6) {
            $value = '4';
        } elseif ($bobot == 7 - 8) {
            $value = '5';
        }
        echo '<pre>';
        print_r($bobot);
        die;
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
            'inggris' => 'required',
            'ujian_lisan' => 'required',
            'arab' => 'required',
            'pemikiran' => 'required',
            'pendanaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'penghasilan' => 'required',
        ]);

        $isaintek['matematika'] /= 2;
        $isaintek['fisika'] /= 2;
        $isaintek['biologi'] /= 2;
        $isaintek['kimia'] /= 2;
        $isaintek['inggris'] /= 2;
        $isaintek['ujian_lisan'] /= 2;
        $isaintek['arab'] /= 2;

        $isaintek['camaba_id'] = $camaba_id;

        $icamaba['periode'] = 0;

        if ($request['prodi1'] == 'ti') {
            $iti = $isaintek;
            $iti['pilihan'] = 5;
            $iti['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iti['periode'] = $key['periode'];
            }
            ti::create($iti);
        } elseif ($request['prodi2'] == 'ti') {
            $iti = $isaintek;
            $iti['pilihan'] = 3;
            $iti['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iti['periode'] = $key['periode'];
            }
            ti::create($iti);
        } elseif ($request['prodi3'] == 'ti') {
            $iti = $isaintek;
            $iti['pilihan'] = 2;
            $iti['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iti['periode'] = $key['periode'];
            }
            ti::create($iti);
        }

        if ($request['prodi1'] == 'tip') {
            $itip = $isaintek;
            $itip['pilihan'] = 5;
            $itip['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $itip['periode'] = $key['periode'];
            }
            tip::create($itip);
        } elseif ($request['prodi2'] == 'tip') {
            $itip = $isaintek;
            $itip['pilihan'] = 3;
            $itip['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $itip['periode'] = $key['periode'];
            }
            tip::create($itip);
        } elseif ($request['prodi3'] == 'tip') {
            $itip = $isaintek;
            $itip['pilihan'] = 2;
            $itip['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $itip['periode'] = $key['periode'];
            }
            tip::create($itip);
        }

        if ($request['prodi1'] == 'agro') {
            $iagro = $isaintek;
            $iagro['pilihan'] = 5;
            $iagro['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iagro['periode'] = $key['periode'];
            }
            agro::create($iagro);
        } elseif ($request['prodi2'] == 'agro') {
            $iagro = $isaintek;
            $iagro['pilihan'] = 3;
            $iagro['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iagro['periode'] = $key['periode'];
            }
            agro::create($iagro);
        } elseif ($request['prodi3'] == 'agro') {
            $iagro = $isaintek;
            $iagro['pilihan'] = 2;
            $iagro['camaba_id'] = $camaba_id;
            $c = periode::where('status', 'aktif')->get();
            foreach ($c as $key) {
                $iagro['periode'] = $key['periode'];
            }
            agro::create($iagro);
        }

        // $isaintek['camaba_id'] = $camaba_id;
        $icamaba['periode'] = 0;
        $c = periode::where('status', 'aktif')->first();
        $icamaba['periode'] = $c['periode'];
        camaba::create($icamaba);
        // saintek::create($isaintek);

        // return $request;

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
