<?php
    require_once("vendor/autoload.php");
    $cadena = "mongodb+srv://usuario:usuario123@basedatos.tdcsrym.mongodb.net/?retryWrites=true&w=majority";
    $cliente = new MongoDB\Client($cadena);
    $conexion = $cliente->selectDataBase("basedatos");
    
    $tablaColeccion = $conexion->comentario;
 
    $resultado = $tablaColeccion->updateOne(["correo" => $_GET["correo"]],
    ['$set' => [
                "mensaje"=>$_GET["mensaje"]
                ]  
    ]);
echo "Cantidad de registros actualizaos " . $resultado->getModifiedCount();