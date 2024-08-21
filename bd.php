<?php
$servidor = "localhost";
$baseDeDatos = "lazo";
$usuario = "root";
$contraseña = "";

try {

    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contraseña);

    $mensajebd = "Conectado a la Base de Datos";
} catch (Exception $error) {

    echo $error->getMessage();
    $mensajebd = "No está conectado a la Base de Datos";
}
