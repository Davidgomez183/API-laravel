<?php

namespace App\Http\Controllers;

use App\Models\Cicle;
use Illuminate\Http\Request;

class CicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $cicle = Cicle::all();
        // $cicle = Cicle::with('cicles')->get();
        return response()->json($cicle, 200);
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
        if (isset($request->nom) == true
        && isset($request->durada) == true
        && isset($request->horari) == true
        && isset($request->grau) == true
        && isset($request->modalidad) == true) {
        
        $cicle = Cicle::create($request->all());
        return response()->json($cicle, 200);
    } else {
        return response()->json(['message' => 'Bad request'], 400);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cicle  $cicle
     * @return \Illuminate\Http\Response
     */
    public function show(Cicle $id)
    {
        $cicle = Cicle::all();
        // $cicle = Cicle::with('cicles')->find($id);

        if ($cicle) {
            return response()->json( $cicle, 200);
        } else {
            return response()->json(['message' => 'Not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cicle  $cicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cicle $cicle) //! API NO SE HACE SERVIR
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cicle  $cicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cicle = Cicle::find($id);

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
     * @param  \App\Models\Cicle  $cicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    
    {
        $cicle = Cicle::find($id);

        if ($cicle) {
            $cicle->delete();
            return response()->json(['message' => 'Success'], 204);                        
        } else {
            return response()->json(['message' => 'Not found'], 404);
        }
    }
}
