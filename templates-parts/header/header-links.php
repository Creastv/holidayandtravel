<?php
$links= get_field("links", "options");

?>
<?php if($links) { ?>
<div class="header__links">
    <?php foreach($links as $li) { 
        $link = $li['url'];
        if( $link ){ 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        }
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
        <?php if($li['icon']) { ?>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/<?php echo $li['icon']; ?>.svg" alt="ikona" width="19px" height="19px">
        <?php } ?>
        <span><?php echo $link_title; ?></span>
    </a>
    <?php } ?>
</div>
<?php } ?>
