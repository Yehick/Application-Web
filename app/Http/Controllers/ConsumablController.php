<?php

namespace App\Http\Controllers;

use App\Consumabl;
use App\Entrance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsumablController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumabls = DB::table('consumabls')->paginate(10);
        return view('consumabls.index', compact('consumabls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consumabls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'price' => 'required',
                'quantity' => 'required'

            ]);
        Consumabl::create($request->all());
        return redirect()->route('consumabls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Consumabl $consumabl
     * @return \Illuminate\Http\Response
     */
    public function show(Consumabl $consumabl)
    {
        return view('consumabls.show', compact('consumabl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Consumabl $consumabl
     * @return \Illuminate\Http\Response
     */
    public function edit(Consumabl $consumabl)
    {
        return view('consumabls.edit', compact('consumabl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Consumabl $consumabl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consumabl $consumabl)
    {

        $consumabl->update($request->all());
        return redirect()->route('consumabls.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Consumabl $consumabl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumabl $consumabl)
    {
        $consumabl->delete();
        return redirect()->route('consumabls.index');
    }
}
