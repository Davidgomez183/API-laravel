<?php

namespace App\Http\Controllers;
use App\Models\Cicle;


class CiclesController extends Controller
{
    public function getMitjos()
    {
        $mitjos = Cicle::where('grau', 'mitja')->get();

        return response()->json($mitjos);
    }

    public function getSuperiors()
    {
        $superiors = Cicle::where('grau', 'superior')->get();

        return response()->json($superiors);
    }
}
