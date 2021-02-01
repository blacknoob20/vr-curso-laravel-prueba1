<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutasController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
                  ->orderBy('id','desc')
                  ->get();

        return view('fruta.index',[
            'frutas' => $frutas,
        ]);
    }

    public function detalle($id)
    {
        $fruta = DB::table('frutas')->where('id','=',$id)->first();

        return view('fruta.detalle',[
            'fruta' => $fruta,
        ]);
    }
}
