<?php 
$banery = get_field('banery');

?>


<div class="inf-gd">
    <div class="inf-gd__wraper">
        <?php if($banery) { ?>
        <div class="inf-gd__baners">
            <?php foreach($banery as $baner) { ?>
            <div class="inf__baner__item">
                <?php if($baner['link']) { ?>
                <a href="<?php echo $baner['link']; ?>" target="_blank" rel='nofollow'>
                    <?php } ?>

                    <?php if( $baner['baner'] ) { echo wp_get_attachment_image( $baner['baner'], "full");  } ?>

                    <?php if($baner['link']) { ?>
                </a>
                <?php } ?>

            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </div>

    <div class="inf-gd__wraper">
        <div id="posts" class="inf-gd__posts"> </div>
    </div>

    <div class="inf-gd__wraper">
        <div class="inf-gd__app">
            <div class="left">
                <img src="<?php echo get_template_directory_uri() .'/src/img/logo-gmina-dziwnow.png' ?>" alt="Faceandlook - Holiday and travel - Gmina Dziwnów">
            </div>
            <div class="right">
                <div class="top">
                    <span>APLIKACJA MOBILNA <br>DZIWNÓW4FUN</span>
                </div>
                <div class="bottom">
                    <a href="https://play.google.com/store/apps/details?id=eu.stettiner.dziwnow&hl=pl" target="_blank" rel='nofollow'> <img src="<?php echo get_template_directory_uri() .'/src/img/google-play.png' ?>" alt="Google play"></a>
                    <a href="https://apps.apple.com/pl/app/dziwnów4fun/id1438120860?l=pl" target="_blank" rel='nofollow'> <img src="<?php echo get_template_directory_uri() .'/src/img/app-store.png' ?>" alt="App Store"></a>
                </div>
            </div>
        </div>
    </div>
</div>
