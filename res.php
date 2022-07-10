<?php
    include_once("class.php");
    $alto = $_POST['alto'];
    $ancho = $_POST['ancho'];
    $rectangulo = new CRectangulo($alto,$ancho);
    $rectangulo->MostrarDatos($alto,$ancho);
?>