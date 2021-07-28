<?php
 require "conexion.php";
  function agregarDatos($paterno, $materno, $nombre, $edad, $fecha, $matricula, $especialidad, $sexo, $imagen){
    $conexion = conexion();
    $sql = "INSERT INTO t_estudiantes(paterno,
                                       materno,
                                       nombre,
                                       edad,
                                       fechaInsert,
                                       matricula,
                                       especialidad,
                                       sexo,
                                       imagen) 
            VALUES ('$paterno',
                    '$materno', 
                    '$nombre',
                    '$edad',
                    '$fecha',   
                    '$matricula', 
                    '$especialidad', 
                    '$sexo',
                    '$imagen')";
    $respuesta = mysqli_query($conexion, $sql);
    return  $respuesta;
  }  
  function calculaedad($fechanacimiento){
    list($ano,$mes,$dia) = explode("-",$fechanacimiento);
    $ano_diferencia  = date("Y") - $ano;
    $mes_diferencia = date("m") - $mes;
    $dia_diferencia   = date("d") - $dia;
    if ($dia_diferencia < 0 || $mes_diferencia < 0)
      $ano_diferencia--;
    return $ano_diferencia;
  }
    

?>