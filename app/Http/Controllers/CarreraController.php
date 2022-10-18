<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CarreraController extends Controller
{
    public function listar() {
        $carrera=Carrera::all();
        return view('carrera.listar',['carreras'=>$carrera]);
    }

    public function listarAPI() {
        $carrera=Carrera::with('estudiantes')->get();
        return $carrera;
    }
    public function insertarGet() {
        $carr=new Carrera(['nombre'=>'']);
        return view('carrera.insertar',['carr'=>$carr,'mensajeerror'=>'']);

    }
    public function insertarPost(Request $req) {
        //var_dump($prod);
        $carr=new Carrera(['nombre'=>$req->nombre]);
        if($req->post('boton')==='insertar') {
            try {
                $carr->save(); // se inserta el producto.
            } catch(\Throwable $error) {
                return view('carrera.insertar',['carr'=>$carr,'mensajeerror'=>$error->getMessage()]);
            }
            //
            return redirect('/carrera/');
        } else {
            return redirect('/carrera/');
        }
    }
    public function actualizar(Request $req,$idProducto) {
        //  var_dump($req->method());
        $boton=$req->post('boton');


        switch ($boton) {
            case 'actualizar':
                try {
                    $prod = Producto::find($idProducto); // producto esta limpio.
                    $prod->nombre = $req->nombre; // producto como sucio
                    $prod->precio = $req->precio; // producto como sucio
                    $prod->save(); // save de un producto que se leyo y esta sucio => actualizar.
                    return redirect('/producto/');
                } catch(\Throwable $error) {
                    $mensajeerror=env('APP_DEBUG')?$error->getMessage():'Hay un error en los datos';
                    return view('producto.actualizar',['prod'=>$prod,'mensajeerror'=>$mensajeerror]);
                }
            case 'cancelar':
                return redirect('/producto/');
            default:
                $prod=Producto::find($idProducto);
                return view('producto.actualizar',['prod'=>$prod,'mensajeerror'=>'']);
        }
    }
    public function borrar(Request $req,$idProducto) {
        $prod = Producto::find($idProducto);
        $prod->delete();
        return redirect('/producto/');
    }
}
