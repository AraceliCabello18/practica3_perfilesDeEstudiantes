<?php
    session_start();
    include "funciones.php";

    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $nombre = $_POST['nombre'];
    $matricula = $_POST['matricula'];
    $fecha = $_POST['fecha'];
    $especialidad = $_POST['especialidad'];
    $sexo = $_POST['sexo'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $edad = calculaedad($fecha);
    
    $resultado = agregarDatos($paterno, $materno, $nombre, $edad, $fecha, $matricula, $especialidad, $sexo, $imagen);
    if ($resultado) {
        $_SESSION['operacion'] = "insert";
    } else {
        $_SESSION['operacion'] = "error";
    }
    header("location:../index.php");
?>