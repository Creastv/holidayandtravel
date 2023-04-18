<?php 
$left = get_field( 'lewo', 'options' );
$right = get_field( 'prawo', 'options' );

?>
<div class="f__info">
    <div class="f__info__wraper">
        <div class="col">
            <p><?php echo $left; ?></p>
        </div>
        <div class="col">
            <p><?php echo $right; ?></p>
        </div>
    </div>
</div>
