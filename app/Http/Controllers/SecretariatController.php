<?php

namespace App\Http\Controllers;

use App\Secretariat;
use Illuminate\Http\Request;

class SecretariatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $secretariats = Secretariat::all();
        // return view('secretariat.index', compact('secretariats'));
        return view('secretariat');
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
     * @param  \App\Secretariat  $secretariat
     * @return \Illuminate\Http\Response
     */
    public function show(Secretariat $secretariat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Secretariat  $secretariat
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretariat $secretariat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secretariat  $secretariat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secretariat $secretariat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Secretariat  $secretariat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretariat $secretariat)
    {
        //
    }
}
