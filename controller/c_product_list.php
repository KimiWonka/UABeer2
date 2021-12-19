<?php
$categoria= $_GET['seleccio'];
include_once __DIR__ . "/../models/connectaBD.php";
include_once __DIR__ . "/../models/m_productes.php";
$conn = getConn();
$productes = consultaProductes($conn,$categoria);
include_once  __DIR__ ."/../vistes/v_product_list.php";
?>