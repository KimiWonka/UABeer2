<?php
include_once __DIR__ . "/../models/connectaBD.php";
include_once __DIR__ . "/../models/m_mesVenuts.php";
$conn = getConn();
/*$mesvenuts = consultaProductesE($conn);*/
include_once  __DIR__ ."/../vistes/v_mesVenuts.php";
?>
