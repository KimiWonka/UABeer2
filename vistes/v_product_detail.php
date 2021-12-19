<div class="container">
    <?php foreach($detall as $deta){ ?>
        <div id="info1">
            <h3><?php echo $deta['nom']; ?></h3>
            <h5>Vol: <?php echo $deta['vol']; ?></h5>
            <h5>Ibu: <?php echo $deta['tipus']; ?></h5>

        </div>
        <div>
            <img src="/../img/<?php echo $deta['category_id'];?>/<?php echo $deta['product_id'];?>.jpg" alt="<?php echo $deta['nom']?>">
        </div>
        <div id="info2">
            <p><?php echo $deta['descripcio'];?></p>
            <h4><?php echo $deta['preu'];?>€</h4>
        </div>
    <?php } ?>
</div>

