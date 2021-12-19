<?php
function consultaProductesE($connexio){
    try{
        $consulta= $connexio ->prepare("SELECT product_id, category_id, `nom` FROM `product`");

        $consulta ->execute();
        $producte = $consulta ->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo "Error: ".$e->getMessage();}
    return($producte);
}
?>
