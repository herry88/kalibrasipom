<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alat = Alat::all(); //select * from alats
        return view('alat.index', compact('alat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alat.create');
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
        $this->validate($request,[
            'nm_alat' => 'required',
            'merk' => 'required',
            'tipe'=>'required',
            'balai_id'=>'required',
            'image' => 'nullable|image',
        ]);
        //deklarasi image
        $image_path = '';
        //jika ada image
        if($request->hasFile('image')){
            $image_path = $request->file('image')->store('alat','public');
        }
        //insert data
        $alat = Alat::create([
            'nm_alat' => $request->nm_alat,
            'merk' => $request->merk,
            'tipe' => $request->tipe,
            'balai_id' => $request->balai_id,
            'image' => $image_path,
        ]);
        //redirect
        if(!$alat){
            return redirect()->back()->with('error','Error Ada Yang Salah');
        }else{
            return redirect()->route('alat.index')->with('success','Data Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function show(Alat $alat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function edit(Alat $alat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alat $alat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alat  $alat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alat $alat)
    {
        //
    }
}
