<?php

function consultaDetall($connexio,$prod){
    try{
        $consulta= $connexio -> prepare("SELECT product_id, `nom`, descripcio, vol, tipus, preu, category_id FROM `product` WHERE product_id=:id");
        $consulta->bindParam(":id",$prod);
        $consulta ->execute();
        $producte = $consulta ->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo "Error: ".$e->getMessage();}
    return($producte);
}
?>
