<?php 
$wraper = get_field( 'container' );
$bc = get_field( 'bg_color' );

$container = '';
if($wraper === "full") {
    $container = 'go-container--full';
}
if($wraper === "narrow") {
    $container = 'go-container--narrow';
}

?>


<section class="go-container <?php echo $container; ?>">
    <div class="go-container__bg" style="background-color:<?php echo $bc; ?>;">
        <div class=" go-container__wraper">
            <div class="container">
                <div class="row">
                    <InnerBlocks />
                </div>
            </div>
        </div>
    </div>
</section>
