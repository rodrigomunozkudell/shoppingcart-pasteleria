<?php
include_once 'bbdd.php';
session_start();
//session_destroy();
$resultado = mysqli_query($conexion, 'select * from productos where id = ' . $_GET['id']);
$producto = $resultado->fetch_assoc();

if(!isset($_SESSION['resultado'])) {
    $_SESSION['resultado'] = [];
}

if(array_key_exists($producto['id'], $_SESSION['resultado'])) {
    $_SESSION['resultado'][$producto['id']]['cantidad'] = $_SESSION['resultado'][$producto['id']]['cantidad'] + 1;
} else {
    $_SESSION['resultado'][$producto['id']] = array(
        'nombre' => $producto['nombre'],
        'precio' => $producto['precio'],
        'imagen' => $producto['imagen']
    );
    $_SESSION['resultado'][$producto['id']]['cantidad'] = 1;
}

header('Location:cart.php');
?>