<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
//dependencia para el validador
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;




class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "aqui va la lista de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        return view('productos.new') 
               ->with("marcas", $marcas)
               ->with("categorias", $categorias);
                      
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $reglas = [

            "nombre" => 'required|alpha|unique:productos,nombre',
            "desc" => 'required|min:10 |max:20',
            "precio" => 'required|numeric',
            "imagen" => 'required|image',
            "categoria" => 'required'

        ];

        $mensajes=[

            "required" => "campo obligatorio",
            "alpha" => "solo letras",
            "numeric" => "solo numeros",
            "image" => "debe ser un archivo imagen",
            "min" => "minimo :min valor"


        ];



        //crear el objeto validador
        $v = Validator::make($request->all(), $reglas, $mensajes); 

        //validar
        //fails() retorna:
        //true: si la validacion falla 

       if ($v->fails()){
        //validacion incorrecta

        return redirect('productos/create')
        ->withErrors($v);

        

       }else{

         //crear el objeto UploadedFile
         $archivo=$request->imagen;
         //capturar nombre "original" del archivo
         //desde el cliente
         $nombre_archivo =$archivo->getClientOriginalName();
         var_dump($nombre_archivo);
         //mover el archivo ala carpeta "public/img"
         $ruta = public_path();
         var_dump($ruta);
         $archivo->move("$ruta/img" , $nombre_archivo);
         //registrar producto
         $producto = new producto;
       $producto->nombre = $request->nombre;
       $producto->desc = $request->desc;
       $producto->precio = $request->precio;
       $producto->imagen =$nombre_archivo;
       $producto->marca_id = $request->marca;
       $producto->categoria_id = $request->categoria;
       $producto->save();
       //redireccionar al formulario
       //levando un mensaje de exito
       return redirect('productos/create')
       ->with("mensajito" ,  "producto registrado");
    
       }
    }
       


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */

    public function show( $producto)
    {
        echo"aqui va el detalle de producto con Id: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo"aqui va la edicion de producto con Id: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
