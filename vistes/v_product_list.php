<div class="flip-card">
    <?php foreach($productes as $product){ $id=$product['product_id']?>
        <div id="<?php echo $id?>" class="flip-card-inner">
            <div class="flip-card-front">
                <img src="/../img/<?php echo $product['category_id'];?>/<?php echo $product['product_id'];?>.jpg" alt="<?php echo $product['nom'];?>" style="widith:300px;height:300px;">
            </div>
            <div class="flip-card-back">
                <h1><?php echo $product['nom'];?></h1>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#'+<?php echo $id?>).click(function(){
                    $('.container').hide().load('/../index.php?action=detall&producte='+<?php echo $id;?>,function(){
                        console.log('load complete!');
                    }).fadeIn(1500);
                    return false;
                });
            });
        </script>
    <?php } ?>
</div>