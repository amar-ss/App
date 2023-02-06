<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hairartis;

class HairartisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $hairartis= hairartis::all();
        return view('hairartis.index', compact('nomor','hairartis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hairartis.form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hairartis = new hairartis;

        $hairartis->nama= $request -> nama;
        $hairartis->no_hp=$request -> no_hp;
        $hairartis->harga=$request -> harga;
        $hairartis ->save();

        return redirect('/hairartis');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hairartis = Hairartis::find($id);
        return view('hairartis.edit', compact('hairartis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hairartis = Hairartis::find($id);

        $hairartis->nama= $request -> nama;
        $hairartis->no_hp=$request -> no_hp;
        $hairartis->harga=$request -> harga;
        $hairartis ->save();

        return redirect('/hairartis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
            $hairartis   = Hairartis::find($id);
            $hairartis->delete();
        
            return redirect('/hairartis');
        }
    
}
