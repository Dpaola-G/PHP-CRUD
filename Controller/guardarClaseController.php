<?php
include ("../Models/ProductoDAO.php");
$clase=new ProductoDAO();

if ($_REQUEST['ID']=='') {
    $clase->agregarClases($_GET['ID'], $_GET['nombre'], $_GET['descripcion']);
}else{
    $clase->actualizarClase($_REQUEST['ID'],$_REQUEST['nombre'],$_REQUEST['descripcion']);
}

?>