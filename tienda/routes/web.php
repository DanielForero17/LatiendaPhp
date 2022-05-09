<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiendaController;
use App\Models\Tienda;



Route::get('paises', function(){ 
    $paises = [
        "Colombia" => [
            "Capital" => "Bogotá",
            "Moneda" => "peso",
            "Poblacion" => 50.88 
        ] ,
        "Peru" => [
            "Capital" => "Lima",
            "Moneda" => "Sol",
            "Poblacion" => 32.97 
        ] ,
        "Paraguay" => [
            "Capital" => "Asunción",
            "Moneda" => "guarani",
            "Poblacion" => 7.1 
        ]
    ];

    echo "<pre>";
    var_dump($paises)
    echo "</pre>";

}); 




