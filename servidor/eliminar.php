<?php
 session_start();
 include "conexion.php";
 $conexion = conexion();
 $id_estu = $_POST['id_estudiantes'];

  //eliminar el registro del archivo en bd

  $sql = "DELETE FROM t_estudiantes WHERE id_estudiantes = '$id_estu'";
  $respuesta = mysqli_query($conexion, $sql);

  if ($respuesta) {
     $_SESSION['operacion'] = "delete";
  } else {
      $_SESSION['operacion'] = "error2";
  }

  header("location:../index.php");


?>