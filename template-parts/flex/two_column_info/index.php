<?php
global $flex_content;
$eyebrow_heading = $flex_content['eyebrow_heading'];
$heading = $flex_content['heading'];
$show_statistics = $flex_content['show_statistics'];
$content = $flex_content['content'];
?>
<section class="two-column-info">
    <div class="container container-cs grid">
        <?php if(!empty($eyebrow_heading)): ?>
            <div class="two-column-info__eyebrow-heading gr_1_3">
                <?php echo $eyebrow_heading; ?>
            </div>
        <?php endif; ?>
        <div class="two-column-info__left-column gr_1_3-1">
            <?php if(!empty($heading)): ?>
                <h1 class="two-column-info__heading">
                    <?php echo $heading; ?>
                </h1>
            <?php endif; ?>
        </div>
        <div class="two-column-info__right-column gr_2_3-2">
            <?php if($show_statistics): ?>
                <div class="two-column-info__statistics flex row afs jfsb">
                    <?php 
                    $case_study = get_the_ID();
                    $cs_stats = get_post_meta($case_study, 'statistics', true);
                    for ($i = 0; $i < $cs_stats; $i++) {
                        $featured = get_post_meta($case_study, 'statistics_' . $i . '_featured', true);
                        $leading_character = get_post_meta($case_study, 'statistics_' . $i . '_leading_character', true);
                        $figure = get_post_meta($case_study, 'statistics_' . $i . '_figure', true);
                        $symbol = get_post_meta($case_study, 'statistics_' . $i . '_symbol', true);
                        $figure_title = get_post_meta($case_study, 'statistics_' . $i . '_figure_title', true);
                        ?>
                            <div class="stat flex col afc jfc">
                                <figure class="stat__figure flex row">
                                    <?php if(!empty($leading_character)): ?>
                                        <span class="figure__leading_character"><?php echo $leading_character; ?></span>
                                    <?php endif; ?>
                                    <?php if(!empty($figure)): ?>
                                        <span data-target="<?php echo $figure; ?>" class="figure__figure">0</span>
                                    <?php endif; ?>
                                    <?php if(!empty($symbol)): ?>
                                        <span class="figure__symbol"><?php echo $symbol; ?></span>
                                    <?php endif; ?>
                                </figure>
                                <?php if(!empty($figure_title)): ?>
                                    <span class="stat__title"><?php echo $figure_title; ?></span>
                                <?php endif; ?>
                            </div>
                        <?php
                    }
                    
                    ?>
                </div>
            <?php endif; ?>
            <?php if(!empty($content)): ?>
                <div class="two-column-info__content-text">
                    <?php echo $content; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>