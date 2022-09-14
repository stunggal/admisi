<?php

namespace App\Http\Controllers;

use App\Models\camaba;
use App\Models\dashboard;
use App\Models\periode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPeriode = [];
        $periodeTerakhir = periode::orderBy('periode', 'asc')->take(3)->get();
        $i = 0;
        foreach ($periodeTerakhir as $key) {
            $dataPeriode[$i]['nama'] = $key->periode;
            $dataCamaba = camaba::where('periode', $key->periode)->get();
            $dataPeriode[$i]['nilai'] =  $dataCamaba->count();
            $i++;
        };
        $periode = periode::where('status', 'aktif')->first();
        $ti = DB::table('camabas')
            ->join('tis', 'tis.camaba_id', '=', 'camabas.id')->where('camabas.periode', $periode['periode'])
            ->get();
        $tip = DB::table('camabas')
            ->join('tips', 'tips.camaba_id', '=', 'camabas.id')->where('camabas.periode', $periode['periode'])
            ->get();
        $agro = DB::table('camabas')
            ->join('agros', 'agros.camaba_id', '=', 'camabas.id')->where('camabas.periode', $periode['periode'])
            ->get();
        return view('beranda.index', [
            'title' => 'Beranda',
            'ti' => $ti,
            'tip' => $tip,
            'agro' => $agro,
            'dataPeriode' => $dataPeriode
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
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
