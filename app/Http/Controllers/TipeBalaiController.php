<?php

namespace App\Http\Controllers;

use App\Models\TipeBalai;
use Illuminate\Http\Request;

class TipeBalaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tipeabalai::all()->toArray();
        $tipe_balais = TipeBalai::all();
        return view('tipebalai.index', compact('tipe_balais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tipebalai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'nama_tipe' => 'required|unique:tipe_balais',
        ]);
        $input = $request->all();
        TipeBalai::create($input);
        return redirect()->route('tipebalai.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipeBalai  $tipeBalai
     * @return \Illuminate\Http\Response
     */
    public function show(TipeBalai $tipeBalai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipeBalai  $tipeBalai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //redirect to edit tipe balai page
        $tipe_balai = TipeBalai::find($id);
        return view('tipebalai.edit', compact('tipe_balai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipeBalai  $tipeBalai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nama_tipe' => 'required|unique:tipe_balais',
        ]);
        $input = $request->all();
        $tipe_balai = TipeBalai::find($id);
        $tipe_balai->update($input);
        return redirect()->route('tipebalai.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipeBalai  $tipeBalai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        TipeBalai::destroy($id);
        return redirect()->route('tipebalai.index')->with('success', 'Data berhasil dihapus');
    }
}
