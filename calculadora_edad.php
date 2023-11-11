<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fecha_nacimiento = $_POST["fecha_nacimiento"];
  $fecha_actual = date("Y-m-d");
  $edad = date_diff(date_create($fecha_nacimiento), date_create($fecha_actual))->y;

  echo "Tu edad es: $edad años";
 }
?>
