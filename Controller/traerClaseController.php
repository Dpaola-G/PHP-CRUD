<?php
include ("../Models/ProductoDAO.php");
$clase=new ProductoDAO();
$clases = $clase->TraerClase($_GET['ID']);
print_r(json_encode($clases));
?>