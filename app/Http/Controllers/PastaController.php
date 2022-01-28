<?php

namespace App\Http\Controllers;

use App\Pasta;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function create(Pasta $pasta)
    {
        return view('pastas.create', compact('pasta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $new_pasta = new Pasta();
        // $new_pasta->title = $data['title'];
        // $new_pasta->image = $data['image'];
        // $new_pasta->type = $data['type'];
        // $new_pasta->cooking_time = $data['cooking_time'];
        // $new_pasta->description = $data['description'];
        $new_pasta->fill($data);

        $new_pasta->slug = $this->slugMaker($data['title']);
        $new_pasta->save();

        return redirect()->route('pastas.show', $new_pasta);
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

        if($show_pastas){

            return view('pastas.show', compact('show_pastas'));
        }
        abort(404, 'questa pagina non esiste');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pastas = Pasta::find($id);

        if($pastas){

            return view('pastas.edit', compact('pastas'));
        }
        abort(404, 'questa pagina non esiste');
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
        $data = $request->all();

        $pasta->update($data);
        $pasta->slug = $this->slugMaker($data['title']);

        return redirect()->route('pastas.show', $pasta);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasta $pasta)
    {
        $pasta->delete();

        return redirect()->route('pastas.index');
    }

    private function slugMaker($str){
        return Str::slug($str, '-');
    }
}
