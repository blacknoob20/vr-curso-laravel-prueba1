<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutasController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')->get();

        return view('fruta.index',[
            'frutas' => $frutas,
        ]);
    }
}
