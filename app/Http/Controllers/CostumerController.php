<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;
use App\Models\Paket;
use App\Models\hairartis;


class CostumerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $costumer= Costumer::all();
        return view('costumer.index', compact('costumer','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket = paket::all();
        $hairartis= hairartis::all();
        return view('costumer.form',compact('paket','hairartis'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $costumer = new costumer;

        $costumer->nama= $request -> nama;
        $costumer->alamat= $request -> alamat;
        $costumer->no_hp= $request -> no_hp;
        $costumer->pakets_id=$request -> nama_paket;
        $costumer->hairartiss_id= $request -> hair_artis;
        $costumer ->save();

        return redirect('/costumer');
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
        $costumer = Costumer::find($id);
        $paket = paket::all();
        $hairartis = hairartis::all();
        return view('costumer.edit',compact('costumer','paket','hairartis'));
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
        $costumer = costumer::find($id);

        $costumer->nama= $request -> nama;
        $costumer->alamat= $request -> alamat;
        $costumer->no_hp= $request -> no_hp;
        $costumer->pakets_id=$request -> nama_paket;
        $costumer->hairartiss_id= $request -> hair_artis;
        $costumer ->save();

        return redirect('/costumer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
