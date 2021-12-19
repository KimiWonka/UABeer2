
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=yes"/>
    <link rel="stylesheet"  href="/../CSS/style2.css"/>  <link rel="stylesheet" href="/CSS/productList.css"/>
    <script  src="/javaScript/lista_productos.js"></script>
    <script  src="/../javaScript/jquery-3.5.1.min.js"></script>
</head>

<body>

<header>
    <div class ="menu">
        <div>
            <a href="/../home.php">
                <img src="/../img/Logo-Blanco.png"/>
            </a>
        </div>
        <div class ="wrapper">
            <ul>
                <li> Les nostres cerveses de...
                    <ul>
                        <div id="dropdown-content">
                            <?php foreach($categories as $cate){ $categoria=$cate['category_id'];?>
                                <li id="<?php echo $categoria?>"><?php echo $cate["nom"] ?></li>
                                <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('#'+<?php echo $categoria?>).click(function(){
                                            $('.container').hide().load('/../index.php?action=productes&seleccio='+<?php echo $categoria;?>,function(){
                                                console.log('load complete!');
                                            }).fadeIn(1500);
                                            return false;
                                        });
                                    });
                                </script>
                            <?php } ?>
                        </div>
                    </ul>
                </li>

                <li><a href = "#article-Ale">Estas perdut? </a></li>
                <li><a href = "#article-Lagger">Sobre Nosaltres</a></li>
                <li class ="login"><a href = "/../index.php?action=login">Login </a></li>
                <li class = "Registre"><a href = "/../index.php?action=register">Registre </a></li>
            </ul>
        </div>
    </div>
</header>