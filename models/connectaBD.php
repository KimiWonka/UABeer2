<?php

function getConn()
{
    $servidor='localhost';
    $usuari='tdiw-a10';
    $clau='Lamisma10';
    $dbname='tdiw-a10';
    try{
        $connexio = new PDO("mysql:host=$servidor;dbname=$dbname;charset=UTF8",$usuari,$clau);
        $connexio->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $e){
        echo "Error: " .$e->getMessage();
    }
    return $connexio;
}
?>
