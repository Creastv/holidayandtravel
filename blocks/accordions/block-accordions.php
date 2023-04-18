<?php
$colOne = get_field('col_one');
$title = get_field( 'title' );
$des = get_field( 'desc' );
$count = 0;
?>
<div id="faq">
    <div class="faq js">
        <div class="faq__wraper">
            <?php if($colOne) { ?>
            <div class="col" itemscope="" itemtype="https://schema.org/FAQPage">
                <?php foreach($colOne['accordion'] as $acc) { ?>
                <div class="accordion js <?php echo $count == 0  ?  'active' : false ?> " itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 class="question h5">
                        <span itemprop="name"><?php echo $acc['accordion_name']; ?></span>
                    </h3>
                    <div class="answer" itemscope="" itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <div itemprop="text">
                            <?php echo $acc['accordion_content']; ?>
                        </div>
                    </div>
                </div>
                <?php $count++; } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
