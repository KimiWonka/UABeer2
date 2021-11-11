<?php
$action = $_GET['action'] ?? null;

switch ($action){
    case 'categories':
        require __DIR__.'/resource_category_list.php';
        break;
    case 'productes':
        require __DIR__.'/resource_product_list.php';
        break;
    case 'detall':
        require __DIR__.'/resource_product_detail.php';
        break;
    case 'login':
        require __DIR__.'/resource_login.php';
        break;
    case 'register':
        require __DIR__.'/resource_register.php';
        break;
    default:
        require __DIR__.'/home.php';
        break;
}
?>