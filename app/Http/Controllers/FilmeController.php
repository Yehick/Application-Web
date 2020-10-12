<?php

namespace App\Http\Controllers;

use App\Entrance;
use App\Filme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //almacenar todos los registros de la tabla movies en una variable
        $filmes = DB::table('filmes')->paginate(2);
        return view('filmes.index', compact('filmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filmes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Filme::create($request->all());
        return redirect()->route('filmes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function show(Filme $filme)
    {
        return view('filmes.show', compact('filme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function edit(Filme $filme)
    {
        return view('filmes.edit', compact('filme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filme $filme)
    {
        $request->validate(
            [
                'start' => 'required',
                'end' => 'required',
                'available' => 'required',
                'type' => 'required'
            ]
        );
        $filme->update($request->all());

        return redirect()->route('filmes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Filme  $filme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect()->route('filmes.index');
    }

    public function viewTable()
    {
        $filmes = DB::table('filmes')->paginate(10);
        return view('filmes.viewTable', compact('filmes'));

    }
}
