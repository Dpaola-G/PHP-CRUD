<?php
include ("../Models/ProductoDAO.php");

$clase = new ProductoDAO();
$msg = $clase->agregarClases($_GET['ID'], $_GET['nombre'], $_GET['descripcion']);


?>