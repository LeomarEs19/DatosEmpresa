<?php

namespace App\Http\Controllers;

use App\Models\Informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.edit');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Informacion $informacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $Curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Informacion $informacion)
    {
        // $user->name = $request->name;
        //     $user->username= $request->username;
        //     $user->card= $request->card;
        //     $user->email= $request->email;
        //     $user->address= $request->address;
        //     $user->phone= $request->phone;
        //     $user->save();
        //     return redirect()->route('/Actualizar', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Informacion $informacion)
    {
        //
    }
}
