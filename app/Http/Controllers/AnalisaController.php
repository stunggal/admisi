<?php

namespace App\Http\Controllers;

use App\Models\analisa;
use Illuminate\Http\Request;

class AnalisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Menu.analisa',[
            'title'=>'Analisa'
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
     * @param  \App\Models\analisa  $analisa
     * @return \Illuminate\Http\Response
     */
    public function show(analisa $analisa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\analisa  $analisa
     * @return \Illuminate\Http\Response
     */
    public function edit(analisa $analisa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\analisa  $analisa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, analisa $analisa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\analisa  $analisa
     * @return \Illuminate\Http\Response
     */
    public function destroy(analisa $analisa)
    {
        //
    }
}
