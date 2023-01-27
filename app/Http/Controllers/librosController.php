<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class librosController extends Controller
{
    public function obtenerLibros()
    {
        $datos=[
            ['id' => 1, 'nombre' => 'Harry Potter y la Piedra Filosofal'],
            ['id' => 2, 'nombre' => 'Harry Potter y la Cámara Secreta'],
            ['id' => 3, 'nombre' => 'Harry Potter y el Prisionero de Azkaban']
        ];
        return $datos;
    }
    public function obtenerLibro($id)
    {
        $datos=[
            ['id' => 1, 'nombre' => 'Harry Potter y la Piedra Filosofal'],
            ['id' => 2, 'nombre' => 'Harry Potter y la Cámara Secreta'],
            ['id' => 3, 'nombre' => 'Harry Potter y el Prisionero de Azkaban']
        ];
        $res = array_filter($datos, function ($item) use($id){
            return $item['id'] == $id;
        });
        return $res;
    }
    public function obtenerLibrosv2(Request $request)
    {
        $datos=[
            ['id' => 1, 'nombre' => 'Harry Potter y la Piedra Filosofal'],
            ['id' => 2, 'nombre' => 'Harry Potter y la Cámara Secreta'],
            ['id' => 3, 'nombre' => 'Harry Potter y el Prisionero de Azkaban']
        ];
        $nombre = $request->query('nombre');
        $res = array_filter($datos, fn($item)=> str_contains($item['nombre'],$nombre));
        return $res;
    }
}
