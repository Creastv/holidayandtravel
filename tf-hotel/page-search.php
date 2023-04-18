<?php 
$id=14; 
$po = get_post($id); 
$content = apply_filters('the_content', $po->post_content); 
?>
<?php if (!is_single() && is_post_type('tf_hotel')){ ?>
<?php echo $content;  ?>
<?php } ?>
