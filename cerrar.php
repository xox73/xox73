<?php

session_start();

include("./bd.php");

// Actualiza valores en la base de datos
$usuarioId = $_SESSION["id"];

// Actualiza la sesión actual a inactiva
$actualizarActividad = $conexion->prepare("UPDATE tbl_personal SET sesion_activa = 0 WHERE id = :id");

$actualizarActividad->bindParam(":id", $usuarioId);
$actualizarActividad->execute();

session_destroy();

header("location:./login.php");
