<?php
function getCategories($conn)
{

    $sql="SELECT category_id,`nom` FROM `category`";
    $stmt= $conn->prepare($sql);
    $stmt->execute();
    $categories=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return($categories);
}
?>