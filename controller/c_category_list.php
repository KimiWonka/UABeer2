<?php
include_once __DIR__.'/../models/connectaBD.php';
include_once __DIR__.'/../models/provaconnexio.php';
$connexio=getConn();
$categories=getCategories($connexio);
include_once __DIR__.'/../vistes/v_category_list.php';

?>