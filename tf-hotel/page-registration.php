<?php 
/**
*
* Template name: rejestracja
* Template Post Type:  page
*/
get_header();

while ( have_posts() ) : the_post(); ?>
<div class="container-narrow">
    <?php echo do_shortcode('[tf_registration_form]'); ?>
</div>
<?php
	get_template_part( 'template-parts/content/content-page' );
endwhile; 
get_footer();
