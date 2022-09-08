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

        return view('Menu.periode', [
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
        $periode = periode::all();
        return view(
            'SubMenu.periode',
            [
                'periode' => periode::find($id),
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
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            // period must be 5 digits long
            'periode' => 'required|digits:4|integer|unique:periode,periode,' . $id,
            'status' => 'required|boolean',
        ]);
        // $participants = Participants::findOrFail($id);
        $periode = periode::findOrFail($id);
        echo '<pre>';
        print_r($periode);
        die;
        $periode->update($validatedData);
        return redirect('/periode')->with('success', 'Period has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        periode::destroy($id);
        return redirect('/periode')->with('delete', 'Period has been delete');
    }
}
