<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function getProductos()
    {
        return response()->json(Producto::all(), 200);
    }

    public function producto($id)
    {
        $producto = Producto::find($id);
        if(is_null($producto))
        {
            return response()->json(['Mensaje'=>'Producto no encontrado', 404]);
        }
        return response()->json($producto::find($id), 200);
    }

    public function insertproducto(Request $request)
    {
        $producto = Producto::create($request->all());
        return response()->json(['Mensaje'=>'Producto creado correctamente', 200]);
    }

    public function updateProducto(Request $request, $id)
    {
        $producto = Producto::find($id);
        if(is_null($producto))
        {
            return response()->json(['Mensaje'=>'Producto no encontrado', 404]);
        }
            $producto->update($request->all());
            return response()->json(['Mensaje'=>'Producto modificado correctamente', 200]);
            //return response($producto, 200);
    }

    public function deleteProducto($id)
    {
        $producto = Producto::find($id);
        if(is_null($producto))
        {
            return response()->json(['Mensaje'=>'Producto no encontrado', 404]);
        }
            $producto->delete();
            return response()->json(['Mensaje'=>'Producto eliminado correctamente', 200]);
    }
}
