<?php
include_once __DIR__.'/../models/connectaBD.php';
include_once __DIR__.'/../models/provaconnexio.php';
$connexio=getConn();
$productes=getProductes($connexio);
include_once __DIR__.'/../vistes/v_product_list.php';

?>