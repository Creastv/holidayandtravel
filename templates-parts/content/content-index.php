<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
    <header>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-item'); ?></a>
        <div class="meta-group">
            <div class="meta meta-pub">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.422" height="16.404" viewBox="0 0 16.422 16.404">
                    <path id="Shape_18" data-name="Shape 18" d="M3206.857,2065.7a.846.846,0,0,0-.124-.026,7.823,7.823,0,0,1-3.582-1.13,8.094,8.094,0,0,1-3.9-5.635c-.058-.308-.085-.62-.128-.932v-.96c.013-.115.027-.23.04-.346a8.233,8.233,0,0,1,6.758-7.248c.309-.054.622-.085.933-.128h.962c.052.01.1.021.156.03.359.051.723.08,1.076.157a8.214,8.214,0,0,1,6.455,8.839,7.92,7.92,0,0,1-1.994,4.572,8.064,8.064,0,0,1-4.759,2.679c-.309.055-.622.085-.933.128Zm-6.456-8.21a6.936,6.936,0,1,0,6.941-6.92h-.01A6.938,6.938,0,0,0,3200.4,2057.487Zm9.071,2.45c-.589-.436-1.173-.877-1.758-1.315-.231-.173-.458-.351-.693-.518a.73.73,0,0,1-.323-.642c0-.614,0-1.229,0-1.842s0-1.228,0-1.842a.638.638,0,0,1,.858-.638.655.655,0,0,1,.418.671c0,1.074,0,2.146,0,3.219a.344.344,0,0,0,.156.317q1.057.779,2.1,1.574a.63.63,0,0,1,.152.915.613.613,0,0,1-.49.248A.709.709,0,0,1,3209.472,2059.937Z" transform="translate(-3199.126 -2049.293)" fill="#c2995e"></path>
                </svg>
                <span><?php _e('Opublikowano: ', 'go' ); ?></span>
                <time class="meta meta-data-pub published" datetime="<?php the_time() ?>"> <span><?php the_time('d.m.Y');?></span></time>
            </div>
        </div>
    </header>
    <div class="content">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <!-- <div class="content__btn ">
            <a href="<?php the_permalink(); ?>" class="btn-rev"><?php _e( 'Czytaj więcej ', 'go' ); ?></a>
        </div> -->
    </div>
</article>
