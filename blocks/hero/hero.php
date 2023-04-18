<?php 
$bg = get_field( 'bg-image' );
$title = get_field( 'title' );
$subtitle = get_field( 'subtitle' );
?>

<section class="hero" style="background-image:url('<?php echo $bg; ?>')">
    <div class="hero__bg">
        <div class="hero__bg__2">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <?php if($title){ ?>
                        <h1><?php echo $title; ?></h1>
                        <?php } ?>
                        <?php if($subtitle){ ?>
                        <p><?php echo $subtitle; ?></p>
                        <?php } ?>
                    </div>
                    <div class="serach-form">
                        <InnerBlocks />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
