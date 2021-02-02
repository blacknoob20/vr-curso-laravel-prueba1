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

    public function detalle($id){
        // $frutas = DB::table('frutas')->where('id','=',$id)->get();
        $frutas = DB::table('frutas')->where('id','=',$id)->first();

        return view('fruta.detalle',[
            'fruta' => $frutas,
        ]);
    }

    public function crear(){
        return view('fruta.crear');
    }
    
    public function guardar(Request $request){
        // guardar
        DB::table('frutas')->insert([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d'),
            ]);
            
            return redirect()->action('FrutasController@index');
        }
    
    public function borrar($id){
        $fruta = DB::table('frutas')->delete();

        // El with mete variables en la sesión
        return redirect()->action('FrutasController@index')->with('status','fruta borrada exitosamente');
    }

    public function editar($id){
        // modificar las frutas
        $frutas = DB::table('frutas')->where('id','=',$id)->first();

        return view('frutas.crear',['fruta' => $fruta]);
    }

    public function actualizar(Request $r){
        $fruta = DB::table('frutas')->where('id','=',$r->id)->update(['nombre' => ]$r->nombre,'descripcion'=>$r->descricpion,'precio'=>$r->precio);

        return redirect()->action('FrutasController@index')->with('status','Fruta modificada exitosamente.');
    }
}
