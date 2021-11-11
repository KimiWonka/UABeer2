<?php
include_once __DIR__.'/../models/connectaBD.php';
include_once __DIR__.'/../models/provaconnexio.php';
$connexio=getConn();
$detall=getDetall($connexio);
include_once __DIR__.'/../vistes/v_product_detail.php';

?>
