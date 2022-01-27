<?php

namespace App\Http\Controllers;

use App\Pasta;
use Illuminate\Http\Request;

class PastaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastas = Pasta::paginate(5); 
        return view('pastas.home_resource', compact('pastas'));
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
     * @param  \App\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show_pastas = Pasta::find($id);

        return view('pastas.show', compact('show_pastas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasta $pasta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasta $pasta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasta $pasta)
    {
        //
    }
}
