<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//primera ruta en laravel
Route::get('hola' , function(){
    echo "hola";
});


Route::get('arreglos', function(){


    $estudiantes =[ "JE" => "Jerson", "FE" => "Felipe", "JU" => "Juan"];
    echo "<pre>";
    var_dump($estudiantes);
    echo "</prev>";
    echo "<hr/>";
    //agregar posicion
    $estudiantes["DA"] = "Daniel";
    var_dump($estudiantes);
    echo "</prev>";
    //retirar elementos de arreglos
    echo "<hr/>";
    unset($estudiantes["JE"]);
    echo "<pre>";
    var_dump($estudiantes);
    echo "</prev>";
});

Route::get('paises', function(){
   $paises=["Colombia" =>["capital"=> "Bogota","moneda" => "peso","poblacion" => 51.6,
            "ciudades" =>["Bogota","Medellin","Cali"] ], 
            
            "Peru" => ["capital"=> "Lima","moneda" => "sol","poblacion" => 32.97,
            "ciudades" =>["Lima","San Juan de Lurigancho","Villa El Salvador"] ],

            "Paraguay" =>["capital"=> "Asuncion","moneda" => "guarani","poblacion" => 7.13,
            "Ciudades" =>["Asuncion","	Ciudad del Este","	Luque"] 

            ]];

 /*  echo "<pre>";
   var_dump($paises);


foreach($paises as $pais => $infopais){
echo "<h1> $pais </h1>";
echo "capital:".$infopais["capital"];
echo "<hr/>";
echo "moneda:".$infopais["moneda"];
echo "<hr/>";
echo "poblacion:".$infopais["poblacion"];
echo "<hr/>";
}

foreach($paises as $pais => $infopais){
echo "<h1> $pais </h1>";
  foreach($infopais as $clave => $valor){
      echo "$clave : $valor<br/>";

  }
}*/

return view('paises')
 -> with("paises", $paises);
});   

// rutas  rest //
route::resource('produtos',ProductosController::class);

