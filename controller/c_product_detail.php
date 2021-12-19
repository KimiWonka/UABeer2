<?php
$producte=$_GET['producte'];
include_once __DIR__.'/../models/connectaBD.php';
include_once __DIR__.'/../models/m_productDetail.php';
$connexio=getConn();
$detall= ConsultaDetall($connexio,$producte);
include_once __DIR__.'/../vistes/v_product_detail.php';

?>
