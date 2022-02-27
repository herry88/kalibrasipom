<?php

namespace App\Http\Controllers;

use App\Models\Balai;
use Illuminate\Http\Request;
use DB;

class BalaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //passing data dari database
        $balai = Balai::all(); //select * from balai
        // $balai = DB::table('balais')->get(); //select * from balai
        //kita test master bladenya dulu

        return view('balai.index',compact('balai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirect to create page
        return view('balai.create');
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
     * @param  \App\Models\Balai  $balai
     * @return \Illuminate\Http\Response
     */
    public function show(Balai $balai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balai  $balai
     * @return \Illuminate\Http\Response
     */
    public function edit(Balai $balai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balai  $balai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balai $balai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balai  $balai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balai $balai)
    {
        //
    }
}
