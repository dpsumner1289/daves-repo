<?php
global $flex_content;
$number_of_columns = $flex_content['number_of_columns'];
$column_heading = $flex_content['column_heading'];
$subheading = $flex_content['subheading'];
$checkbox_list = $flex_content['checkbox_list'];
$image = $flex_content['image'];
$eyebrow_heading = $flex_content['eyebrow_heading'];
$big_heading = $flex_content['big_heading'];
$content = $flex_content['content'];

?>

<section class="hero hero__<?php echo $number_of_columns; ?>-column">
    <?php if($number_of_columns == 1): ?>
        <img class="dots-top" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/dots-half-vertical.png'; ?>">
        <img class="dots-bottom" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/dots-half-vertical.png'; ?>">
    <?php endif; ?>
    <div class="container container-main flex row afc">
        <?php if($number_of_columns > 1): ?>
            <div class="item_1_2">
                <?php if(!empty($column_heading)): ?><h1 class="hero__heading"><?php echo $column_heading; ?></h1> <?php endif; ?>
                <?php if(!empty($subheading)): ?><h2 class="hero__subheading"><?php echo $subheading; ?></h2> <?php endif; ?>
                <?php if(!empty($checkbox_list)): ?>
                    <ul class="hero__checkbox-list">
                    <?php foreach($checkbox_list as $checkbox): ?>
                        <li class="hero__checkbox-list-item flex row afs nowrap">
                            <?php 
                            render_svg('circle-check.svg', 'circle-check');
                            echo '<span>' . $checkbox['checkbox_content'] . '</span>';; 
                            ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
            <div class="item_1_2 flex row jfe">
                <?php if(!empty($image)): ?>
                    <picture>
                        <source srcset="<?php echo wp_get_attachment_image_src($image['id'], 'large')[0]; ?>" media="(min-width: 991px)">
                        <source srcset="<?php echo wp_get_attachment_image_src($image['id'], 'medium')[0]; ?>" media="(min-width: 768px)">
                        <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
                    </picture>
                <?php endif; ?>
                </div>
            </div>
        <?php else: ?>
            <div class="flex col afc jfc full">
                <?php if(!empty($eyebrow_heading)): ?>
                    <div class="hero__eyebrow-heading">
                        <?php echo $eyebrow_heading; ?>
                    </div>
                <?php endif; ?>
                <?php if(!empty($big_heading)): ?>
                    <h1 class="hero__heading">
                        <?php echo $big_heading; ?>
                    </h1>
                <?php endif; ?>
                <?php if(!empty($content)): ?>
                    <div class="hero__content-text">
                        <?php echo apply_filters( 'the_content', $content ); ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>