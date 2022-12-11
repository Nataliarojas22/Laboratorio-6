<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usuario:usuario123@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;

    $resultado = $tablaColeccion->insertOne(["nombre"  => $_GET["n"], 
                                             "correo"  => $_GET["c"],
                                             "mensaje" => $_GET["m"],
                                             "apellido"=> $_GET["a"]]);
    echo "Se ha insertado el registro con id " . $resultado->getInsertedId(); 



    

?>