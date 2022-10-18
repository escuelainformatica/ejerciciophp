<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EstudianteController extends Controller
{
    public function listar(Request $req) {
        $pagina=$req->get('pagina',1);
        if(!is_numeric($pagina)) {
            $pagina=1;
        }
        $cantidad=Estudiante::count();
        $numPagina=ceil($cantidad/10);

        $estudiante=Estudiante::with('carrera')->skip(($pagina-1)*10)->take(10)->get();
        return view('estudiante.listar',['estudiantes'=>$estudiante,'pagina'=>$pagina,'numPagina'=>$numPagina]);
    }


    public function listarAPI() {
        $estudiante=Estudiante::with('carrera')->get();
        return $estudiante;
    }
    public function obtenerAPI($id) {
        $estudiante=Estudiante::with('carrera')->find($id);
        return $estudiante;
    }
    public function obtenerPorRutAPI($rut) {
        $estudiante=Estudiante::where('rut',$rut)->with('carrera')->first();
        return $estudiante;
    }

    public function insertarGet() {
        $est=new Estudiante(['rut'=>'','nombre'=>'','idCarrera'=>0]);
        $carreras=Carrera::orderBy('nombre')->get();
        return view('estudiante.insertar',['est'=>$est,'mensajeerror'=>'','carreras'=>$carreras]);
    }
    public function insertarPost(Request $req) {
        //var_dump($prod);
        $est=new Estudiante(['rut'=>$req->rut,'nombre'=>$req->nombre,'idCarrera'=>$req->idCarrera]);
        if($req->post('boton')==='insertar') {
            try {
                $est->save(); // se inserta el producto.
            } catch(\Throwable $error) {
                return view('estudiante.insertar',['est'=>$est,'mensajeerror'=>$error->getMessage()]);
            }
            //
            return redirect('/estudiante/');
        } else {
            return redirect('/estudiante/');
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
