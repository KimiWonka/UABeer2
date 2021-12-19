<?php
include_once __DIR__.'/../models/connectaBD.php';
include_once __DIR__.'/../models/m_registres.php';
$connexio=getConn();
setRegistre($connexio);
include_once __DIR__.'/../vistes/v_registre.php';

?>