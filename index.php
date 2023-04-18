<?php
get_header(); ?>
<?php if(is_home()) { ?>
<?php

$id=16; 
$post = get_post($id); 
$content = apply_filters('the_content', $post->post_content); 


$title = get_field( 'tytul', 16 );
$desc = get_field( 'desc', 16 );
$args = array(
'post_type'      => 'post',
'orderby'        => 'date',
'order'          => 'DSC',
'posts_per_page' => 1
);

// The Query
$the_query = new WP_Query( $args ); 
?>
<div class="i-header">
    <div class="container">
        <div class="row">
            <div class="i-header__wraper">
                <div class="col">
                    <?php if($title) { ?>
                    <h1 class="section-title"><?php echo $title; ?></h1>
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="17" viewBox="0 0 29 17">
                        <path id="Shape_3_copy_6" data-name="Shape 3 copy 6" d="M1283.5,1363a14.46,14.46,0,0,1-14.5-14.388,2.632,2.632,0,0,1,5.265,0,9.236,9.236,0,0,0,18.47,0,2.633,2.633,0,0,1,5.265,0A14.46,14.46,0,0,1,1283.5,1363Z" transform="translate(-1269 -1345.999)" fill="#575289" />
                    </svg>
                    <?php } ?>
                    <?php if($desc) { ?>
                    <div class="desc">
                        <p><?php echo $desc; ?></p>
                    </div>
                    <?php } ?>
                </div>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col">
                    <div class="img">
                        <?php the_post_thumbnail($recent['ID'], 'full'); ?>
                        <div class="o-border">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="i-header__excerpt">
                <div></div>
                <div class="i-header__excerpt__wraper">
                    <div class="top">
                        <h2><?php the_title(); ?></h2>
                        <a href="<?php the_permalink(); ?>" class="btn-rev"><?php _e( 'Czytaj więcej ', 'go' ); ?></a>
                    </div>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata();?>

        </div>
    </div>
</div>

<?php } ?>
<?php if ( have_posts() ) : ?>
<div class="posts-wraper">
    <?php while ( have_posts() ) : the_post(); 
    get_template_part( 'templates-parts/content/content', 'index' ); 
    endwhile; ?>
    <?php if(paginate_links()) { ?>
    <div class="go-pagination">
        <?php pagination_bars(); ?>
    </div>
    <?php } ?>
    <div class="entry-content">
        <?php echo $content;  ?>
    </div>
</div>
<?php else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
endif;
get_footer();
