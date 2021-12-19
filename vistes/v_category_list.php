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

