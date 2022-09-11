<?php

namespace App\Http\Controllers;

use App\Models\periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periode = periode::all();

        return view('periode.index', [
            'title' => 'Periode',
            'periode' => $periode
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
        $validatedData = $request->validate([
            'periode' => 'required|max:5|min:5'
        ]);
        $validatedData['status'] = 'nonaktif';
        // return $validatedData;
        periode::create($validatedData);
        return redirect('/periode')->with('success', 'Data Berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $periode = periode::where('status', 'aktif')->first();
        $periode = periode::where('id', $id)->get();

        return view(
            'periode.edit',
            [
                'periode' => $periode,
                'title' => 'Edit',
                'periode' => $periode->where('id', $id)
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $periode)
    {
        $validatedData = $request->validate([
            'periode' => 'required|max:5|min:5',
        ]);
        $validatedData['status'] = $request['status'];
        $Updateperiode = periode::findOrFail($periode);
        $Updateperiode->update($validatedData);
        return redirect('/periode')->with('success', 'Status periode berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy($periode)
    {
        // 
    }

    public function destroyed($periode)
    {
        periode::destroy('id', $periode);
        return redirect('/periode')->with('delete', 'Periode berhasil dihapus');
    }
}
