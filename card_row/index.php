<?php
global $flex_content;
$heading = $flex_content['heading'];
$cards = $flex_content['cards'];
$theme = $flex_content['theme'];
?>

<section class="card-row card-row__<?php echo $theme ?>">
    <div class="container container-main flex col afc jfc">
        <?php if(!empty($heading)): ?>
            <h2 class="card-row__heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <div class="card-row__cards flex row full jfsb">
            <?php foreach($cards as $card): ?>
                <?php
                    $card_heading = $card['heading'];
                    $card_content = $card['content'];
                    $card_icon = $card['icon'];
                ?>
                <div class="card-row__card item_1_<?php echo count($cards); ?>_gut">
                    <?php
                        if(!empty($card_icon)) {
                            echo wp_get_attachment_image($card_icon['id'], 'full');
                        }
                    ?>
                    <?php if(!empty($card_heading)): ?>
                        <h3 class="card-row__card__heading"><?php echo $card_heading; ?></h3>
                    <?php endif; ?>
                    <?php if(!empty($card_content)): ?>
                        <div class="card-row__card__content">
                            <?php echo $card_content; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>