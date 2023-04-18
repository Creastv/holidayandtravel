<?php
$desc = get_field( 'desc', 'options' );

$menu1 = get_field( 'menu_1', 'options' );
$menu2 = get_field( 'menu_2', 'options' );
$menu3 = get_field( 'menu_3', 'options' );

$sm = get_field( 'social_media', 'options' );
$pay = get_field( 'platnosci', 'options' );
$send = get_field( 'wysylka', 'options' );

?>
<div class="f-main">
    <div class="f-main__wraper">
        <div class="col">
            <a class="logo" href="/">
                <img src="<?php echo get_template_directory_uri() .'/src/img/faceandlook-holiday-and-travel.png' ?>" alt="Faceandlook - Holiday and travel">
            </a>
            <div class="f-main__wraper__desc">
                <?php if($desc) { ?>
                <p><?php echo $desc; ?></p>
                <?php } ?>
                <?php if($sm) { ?>
                <div class="social-media">
                    <?php if($sm['tytul']) { ?>
                    <span><?php echo $sm['tytul']; ?></span>
                    <?php } ?>
                    <?php if($sm['linki']) { ?>
                    <ul>
                        <?php foreach($sm['linki'] as $s) { ?>
                        <li>
                            <a href="<?php echo $s['link']; ?>" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/src/img/icons/<?php echo $s['ikona']; ?>.svg" width="28px" height="28px" alt="Social media">
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="col">

            <div class="calaps">
                <?php if($menu1['tytul']) { ?>
                <div class="calaps__opener">
                    <p class="title-menu"><?php echo $menu1['tytul']; ?></p>
                </div>
                <?php } ?>

                <?php if($menu1['menu']) { ?>
                <div class="calaps__list">
                    <?php echo $menu1['menu']; ?>
                </div>
                <?php } ?>
            </div>

        </div>
        <div class="col">
            <div class="calaps">
                <?php if($menu2['tytul']) { ?>
                <div class="calaps__opener">
                    <p class="title-menu"><?php echo $menu2['tytul']; ?></p>
                </div>
                <?php } ?>
                <?php if($menu2['menu']) { ?>
                <div class="calaps__list">
                    <?php echo $menu2['menu']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="col">
            <div class="calaps">
                <?php if($menu3['tytul']) { ?>
                <div class="calaps__opener">
                    <p class="title-menu"><?php echo $menu3['tytul']; ?></p>
                </div>
                <?php } ?>
                <?php if($menu3['menu']) { ?>
                <div class="calaps__list">
                    <?php echo $menu3['menu']; ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
