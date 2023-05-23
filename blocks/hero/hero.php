<?php 
$bg = get_field( 'bg-image' );
$title = get_field( 'title' );
$subtitle = get_field( 'subtitle' );
$spans = get_field('spans');
?>

<section class="hero" style="background-image:url('<?php echo $bg; ?>')">
    <div class="hero__bg">
        <div class="hero__bg__2">
            <div class="container">
                <div class="row">
                    <div class="header">
                        <?php if($title){ ?>
                        <h1><?php echo $title; ?> <span id="feature-text"></span></h1>
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
<script>
const carouselText = [
    <?php foreach($spans as $span) { ?> {
        text: "<?php echo $span['span']; ?>",
        color: "#c2995e"
    },
    <?php } ?>
];
</script>
