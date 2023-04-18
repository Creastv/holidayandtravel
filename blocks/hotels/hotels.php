<?php

$hotels = new WP_Query( array(
        'post_type' => 'tf_hotel',
        'posts_per_page' => 9,
        'order' => 'DESC',
));
?>

<section id="hotels">
    <?php if($hotels) { ?>
    <div class="container">
        <div class="hotels__wraper">
            <?php while ( $hotels->have_posts() ) : $hotels->the_post(); 
                // get post id
                $post_id = get_the_ID();

                /**
                 * Review query
                 */
                $args           = array(
                    'post_id' => $post_id,
                    'status'  => 'approve',
                    'type'    => 'comment',
                );
                $comments_query = new WP_Comment_Query( $args );
                $comments       = $comments_query->comments;
                /**
                 * Get hotel meta values
                 */
                $meta = get_post_meta( $post_id, 'tf_hotels_opt', true );

                // Location
                $address = ! empty( $meta['address'] ) ? $meta['address'] : '';

                $related_comments_hotel = get_comments( array( 'post_id' => get_the_ID() ) );

            ?>
            <div class="hotels__wraper__item">
                <div class="img">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo the_post_thumbnail('post-item'); ?>
                    </a>
                    <div class="bottom">
                        <div class="score">

                            <?php if ( tf_total_avg_rating( $related_comments_hotel ) > 0 ) { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.001" height="18.951" viewBox="0 0 21.001 18.951">
                                <path id="Shape_15" data-name="Shape 15" d="M1208.987,1450.692a1.77,1.77,0,0,1-.631.8c-1.393,1.14-2.776,2.29-4.168,3.431a.292.292,0,0,0-.121.342c.434,1.772.859,3.546,1.289,5.319a1,1,0,0,1-.4,1.152,1.148,1.148,0,0,1-1.3.03c-1.653-.931-3.307-1.859-4.954-2.8a.362.362,0,0,0-.419.007q-2.466,1.4-4.939,2.784a1.166,1.166,0,0,1-1.525-.214,1.017,1.017,0,0,1-.2-.931c.429-1.773.855-3.547,1.29-5.318a.332.332,0,0,0-.132-.392q-2.182-1.786-4.351-3.586a.986.986,0,0,1-.373-1.143,1.051,1.051,0,0,1,.979-.733c1.156-.1,2.313-.2,3.469-.3.8-.069,1.606-.138,2.409-.2a.248.248,0,0,0,.235-.17c.757-1.68,1.523-3.356,2.28-5.036a1.15,1.15,0,0,1,2.135-.013c.7,1.536,1.416,3.064,2.077,4.614a.932.932,0,0,0,.94.658c1.724.11,3.443.289,5.166.419a1.245,1.245,0,0,1,1.252.89Z" transform="translate(-1187.985 -1443.008)" fill="#ffcd3d" />
                            </svg>
                            <?php  echo tf_total_avg_rating( $related_comments_hotel ); ?>
                            <?php } ?>
                        </div>
                        <div class="link">
                            <a class=" btn" href="<?php the_permalink(); ?>">Zobacz ofertę</a>
                        </div>
                    </div>
                </div>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                </h3>
                <?php if ( $address ) { ?>
                <?php 	echo '<span class="tf-d-ib"><i class="fas fa-map-marker-alt"></i> ' . $address . '  </span>'; ?>
                <?php } ?>

            </div>
            <div class="hotels__wraper__item">
                <div class="img">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo the_post_thumbnail('post-item'); ?>
                    </a>
                    <div class="bottom">
                        <div class="score">

                            <?php if ( tf_total_avg_rating( $related_comments_hotel ) > 0 ) { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="21.001" height="18.951" viewBox="0 0 21.001 18.951">
                                <path id="Shape_15" data-name="Shape 15" d="M1208.987,1450.692a1.77,1.77,0,0,1-.631.8c-1.393,1.14-2.776,2.29-4.168,3.431a.292.292,0,0,0-.121.342c.434,1.772.859,3.546,1.289,5.319a1,1,0,0,1-.4,1.152,1.148,1.148,0,0,1-1.3.03c-1.653-.931-3.307-1.859-4.954-2.8a.362.362,0,0,0-.419.007q-2.466,1.4-4.939,2.784a1.166,1.166,0,0,1-1.525-.214,1.017,1.017,0,0,1-.2-.931c.429-1.773.855-3.547,1.29-5.318a.332.332,0,0,0-.132-.392q-2.182-1.786-4.351-3.586a.986.986,0,0,1-.373-1.143,1.051,1.051,0,0,1,.979-.733c1.156-.1,2.313-.2,3.469-.3.8-.069,1.606-.138,2.409-.2a.248.248,0,0,0,.235-.17c.757-1.68,1.523-3.356,2.28-5.036a1.15,1.15,0,0,1,2.135-.013c.7,1.536,1.416,3.064,2.077,4.614a.932.932,0,0,0,.94.658c1.724.11,3.443.289,5.166.419a1.245,1.245,0,0,1,1.252.89Z" transform="translate(-1187.985 -1443.008)" fill="#ffcd3d" />
                            </svg>
                            <?php  echo tf_total_avg_rating( $related_comments_hotel ); ?>
                            <?php } ?>
                        </div>
                        <div class="link">
                            <a class=" btn" href="<?php the_permalink(); ?>">Zobacz ofertę</a>
                        </div>
                    </div>
                </div>
                <h3>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                </h3>
                <?php if ( $address ) { ?>
                <?php 	echo '<span class="tf-d-ib"><i class="fas fa-map-marker-alt"></i> ' . $address . '  </span>'; ?>
                <?php } ?>

            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>

    </div>
    <?php } ?>
</section>
