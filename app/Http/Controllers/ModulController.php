<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modul = Modul::all();
        // $modul = Cicle::with('cicles')->get();
        return response()->json($modul, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //! API NO SE HACE SERVIR
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
        if (isset($request->nombre) == true
        && isset($request->numero) == true) {
        
        $modul = Modul::create($request->all());
        return response()->json($modul, 200);
    } else {
        return response()->json(['message' => 'Bad request'], 400);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function show(Modul $id)
    {
        $modul = Modul::all();
        // $cicle = Cicle::with('cicles')->find($id);

        if ($modul) {
            return response()->json( $modul, 200);
        } else {
            return response()->json(['message' => 'Not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function edit(Modul $modul)  //! API NO SE HACE SERVIR
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cicle = Modul::find($id);

        if ($cicle) {
            $cicle->update($request->all());
            return response()->json($cicle, 200);                        
        } else {
            return response()->json(['message' => 'Not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Modul  $modul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modul = Modul::find($id);

        if ($modul) {
             $modul->delete();
            return response()->json(['message' => 'Success'], 204);                        
        } else {
            return response()->json(['message' => 'Not found'], 404);
        }
    }
}
