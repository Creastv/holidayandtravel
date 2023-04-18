<?php
function register_acf_block_types() {
  //Done
    acf_register_block_type(array(
        'name'              => 'accordions',
        'title'             => __('Accordions'),
        'render_template'   => 'blocks/accordions/block-accordions.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Accordions' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-accordions',  get_template_directory_uri() . '/blocks/accordions/accordions.min.css' );
          wp_enqueue_script('go-accordions', get_template_directory_uri().'/blocks/accordions/accordions.js', array( 'jquery' ),'4', true );
      },
    ));
    
    acf_register_block_type(array(
      'name'              => 'btn',
      'title'             => __('Btn'),
      'render_template'   => 'blocks/btn/btn.php',
      'category'          => 'formatting',
      'icon' => array(
        'background' => '#575289',
        'foreground' => '#fff',
        'src' => 'ellipsis',
      ),
      'mode'            => 'preview', 
      'keywords'          => array( 'btn' ),
    ));
    acf_register_block_type(array(
        'name'              => 'posts',
        'title'             => __('Ostatnio dodane posty'),
        'render_template'   => 'blocks/posts/posts.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Posts' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-posts',  get_template_directory_uri() . '/blocks/posts/posts.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'hotels',
        'title'             => __('Hotele'),
        'render_template'   => 'blocks/hotels/hotels.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'hotels' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-hotels',  get_template_directory_uri() . '/blocks/hotels/hotels.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => 'blocks/hero/hero.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
        'supports'		=> [
        'align'			=> false,
        'anchor'		=> true,
        'customClassName'	=> true,
        'jsx' 			=> true,
      ],
      'mode'            => 'preview', 
      'keywords'          => array( 'hero' ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-hero',  get_template_directory_uri() . '/blocks/hero/hero.min.css' );
            wp_enqueue_script('go-hero-js', get_template_directory_uri() . '/blocks/hero/hero.js' , array( 'jquery' ),'4', true );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'container',
        'title'             => __('Container'),
        'render_template'   => 'blocks/container/container.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'supports'		=> [
        'align'			=> false,
        'anchor'		=> true,
        'customClassName'	=> true,
        'jsx' 			=> true,
      ],
      'keywords'          => array( 'container' ),

      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-container',  get_template_directory_uri() . '/blocks/container/container.min.css' );
      },
    ));

    acf_register_block_type(array(
        'name'              => 'banner',
        'title'             => __('Banner'),
        'render_template'   => 'blocks/banner/banner.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'supports'		=> [
        'align'			=> false,
        'anchor'		=> true,
        'customClassName'	=> true,
      ],
      'keywords'          => array( 'banner' ),

      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-banner',  get_template_directory_uri() . '/blocks/banner/banner.min.css' );
      },
    ));


    acf_register_block_type(array(
        'name'              => 'informator',
        'title'             => __('Informator - Gmina Dziwów'),
        'render_template'   => 'blocks/informator/informator.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#575289',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'Informator' ),
      'supports' => array( 'align' =>false ),
      'enqueue_assets'    => function(){
          wp_enqueue_style( 'go-informator',  get_template_directory_uri() . '/blocks/informator/informator.min.css' );
          wp_enqueue_script('go-informator-js', get_template_directory_uri() . '/blocks/informator/informator.js' , array( 'jquery' ),'4', true );
      },
    ));
    //  acf_register_block_type(array(
    //     'name'              => 'list',
    //     'title'             => __('List'),
    //     'render_template'   => 'blocks/list/block-list.php',
    //     'category'          => 'formatting',
    //     'icon' => array(
    //       'background' => '#575289',
    //       'foreground' => '#fff',
    //       'src' => 'ellipsis',
    //     ),
    //   'mode'            => 'preview', 
    //   'keywords'          => array( 'list' ),
    //   'supports' => array( 'align' =>false ),
    //   'enqueue_assets'    => function(){
    //       wp_enqueue_style( 'go-list',  get_template_directory_uri() . '/blocks/list/list.min.css' );
    //       wp_enqueue_script('go-list-cdn', '//cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js', array( 'jquery' ),'4', true );
    //        wp_enqueue_script('go-list', get_template_directory_uri().'/blocks/list/list.js', array( 'jquery' ),'4', true );
    //   },
    // ));
}
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
