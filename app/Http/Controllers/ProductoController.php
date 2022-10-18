<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductoController extends Controller
{
    public function listar() {
        $productos=Producto::all();

        return view('producto.listar',['productos'=>$productos]);

    }
    public function insertarGet() {
        $prod=new Producto(['nombre'=>'','precio'=>0]);
        return view('producto.insertar',['prod'=>$prod,'mensajeerror'=>'']);

    }
    public function insertarPost(Request $req) {
        //var_dump($prod);
        $prod=new Producto(['nombre'=>$req->nombre,'precio'=>$req->precio]);
        if($req->post('boton')==='insertar') {
            try {
                $prod->save(); // se inserta el producto.
            } catch(\Throwable $error) {
                return view('producto.insertar',['prod'=>$prod,'mensajeerror'=>$error->getMessage()]);
            }
            //
            return redirect('/producto/');
        } else {
            return redirect('/producto/');
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
