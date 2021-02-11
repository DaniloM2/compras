<?php

namespace App\Http\Controllers;

use App\Models\Feira;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeiraController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Feira::create([
            'dia' => $request->dia,
            'valor' => $request->valor,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function show(Feira $feira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function edit(Feira $feira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feira $feira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Feira  $feira
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feira $feira)
    {
        //
    }
}
