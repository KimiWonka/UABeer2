<?php
function consultaProductes($conn,$cat){
    try{
        $consulta= $conn ->prepare("SELECT product_id, category_id, `nom` FROM `product` WHERE category_id=:iden");
        $consulta->bindParam(":iden",$cat);
        $consulta ->execute();
        $producte = $consulta ->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo "Error: ".$e->getMessage();}
    return($producte);
}
?>
