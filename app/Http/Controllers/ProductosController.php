<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $productos = [
            ['title' => 'jabon'],
            ['title' => 'detergente'],
            ['title' => 'Sopa'],
            ['title' => 'Galletas'],
        ];  

        return view('productos', compact('productos'));
    }
}
