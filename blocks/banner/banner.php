<?php 
$title = get_field( 'title' );
$subTitle = get_field( 'subtitle' );
$tc = get_field( 'text_color' );
$link = get_field( 'link' );

    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
?>


<section class="go-banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="color:<?php echo $tc; ?>"><?php echo $title; ?></h2>
                <?php if($subTitle) { ?>
                <p style="color:<?php echo $tc; ?>"><?php echo $subTitle; ?></p>
                <?php } ?>
            </div>
            <div class="col">
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
        </div>
    </div>
</section>
