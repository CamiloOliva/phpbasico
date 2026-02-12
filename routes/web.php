<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "CAMILO ANDRES OLIVA";
});

Route::get('/php-basico', function () {
    


    echo "<h1 style= 'color:red; '> Aprendiendo PHP </h1>";
    $name = "Camilo Oliva";
    $heihtheiht = 1.75;
    $isLogin = true;
    $age = 20;
    echo "<h4> ". $name . "</h4> ";
    echo "<p> ". $name . "</p> ";

    echo "<br><br><br> ************* ESTRUCTURAS DE CONTROL **************";

    $message = 'soy '.$name. 'y tengo' .$age.' años'. valadateAge($age);



    $message .= $isLogin ? " Estoy Logueado " : "No estoy Logueado";

    echo $message;

    echo "<br><br><br> ********Estructuras de Datos********";

    $pc = [
        "name"=>"pc gamer core9",
        "price"=>6000,
        "marca"=> "lenovo"

    ];
    $teclado = [
        "name"=>"teclado",
        "price"=>200,
        "marca"=> "Asus"
    ];
    
    $listaProductos = [$pc, $teclado];
    foreach ($listaProductos as $item) {
        echo $item["name"] . "<br>";

    }
});

function valadateAge($age){
        if ($age >= 18){
            return " Soy Mayor de edad. ";

    }else {
        return " Soy menor de edad. ";   
    }
}