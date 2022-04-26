<?php
global $flex_content;
$heading = $flex_content['heading'];
$clients = $flex_content['clients'];
?>

<section class="client-results">
    <div class="container container-main flex col afc jfc">
        <?php if(!empty($heading)): ?>
            <h2 class="client-results__heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <div class="client-results__clients flex col full jfsb afsb">
            <?php foreach($clients as $client): ?>
                <?php
                    $client_object = $client['client'];
                    $client_result = $client['result'];
                    $client_bg_image = $client['background_image'];
                    if(!empty($client_bg_image)) {
                        $client_bg_image = $client_bg_image['url'];
                    }
                ?>
                <div 
                 class="client-results__client flex col afc jfc" 
                 <?php 
                 if(!empty($client_bg_image)): 
                    ?>
                    style="background-image: url(<?php echo $client_bg_image; ?>);"
                    <?php
                 endif;
                ?>
                >
                    <h4 class="client-results__client--result">How <?php echo $client_object->post_title . ' ' . $client_result; ?></h4>
                    <a 
                     class="client-results__client--link" 
                     href="<?php echo get_permalink($client_object->ID); ?>"
                    >
                     Read case study <span>&rarr;</span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <a class="button" href="<?php echo trailingslashit(get_site_url()).'case-studies'; ?>">See all case studies <span>&rarr;</span></a>
    </div>
    <img class="dots" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/dots-results.png'; ?>">
</section>