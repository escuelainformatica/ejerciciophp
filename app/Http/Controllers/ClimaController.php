<?php

namespace App\Http\Controllers;

use App\Models\Clima;
use Illuminate\Http\Request;


class ClimaController extends Controller
{
    public function listar() {
        $climas=Clima::all();  // Eloquent
        return view('clima.listar3',['climas'=>$climas]);
    }
}
