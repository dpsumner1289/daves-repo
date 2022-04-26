<?php
global $flex_content;
$quote_highlight = $flex_content['quote_highlight'];
$long_quote = $flex_content['long_quote'];
$author = $flex_content['author'];
$company = $flex_content['company'];
?>

<section class="testimonial">
    <div class="container container-main grid">
        <?php render_svg('quote.svg', 'testimonial__quote-highlight__icon'); ?>
        <div class="gr_2_5-1 flex row jfs">
            <?php if(!empty($quote_highlight)): ?>
                <h3 class="testimonial__quote-highlight flex col afs">
                    <?php echo $quote_highlight; ?>
                </h3>
            <?php endif; ?>
        </div>
        <div class="gr_3_5-2">
            <?php if(!empty($long_quote)): ?>
                <p class="testimonial__long-quote"><?php echo $long_quote; ?></p>
            <?php endif; ?>
            <div class="testimonial__credit flex row afc">
                <?php if(!empty($author)): ?>
                    <p class="testimonial__credit__author">–– <?php echo $author; ?></p>
                <?php endif; ?>
                <?php if(!empty($company)): ?>
                    <p class="testimonial__credit__company">, <?php echo $company; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>