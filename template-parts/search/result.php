<?php
if (!function_exists(('search_result'))) {
    function search_result()
    {
        $postID = get_the_ID();
        setup_postdata($postID);
        $title = get_the_title();
        $cats = get_the_category();
        $cat_list = $cats;
        $excerpt = get_excerpt($postID, 145);
        $thumb = get_post_meta($postID, 'article_thumbnail', true);
        $thumb_args = array(
            'size' => 'featuredPost'
        );
        if (!empty($thumb)) {
            $thumb_args['thumb_id'] = $thumb;
        } else {
            $thumb_args['thumb_id'] = get_post_thumbnail_id();
        }
?>
        <article class="flex row afc nowrap article">
            <a class="featured-image" href="<?php echo the_permalink(); ?>">
                <?php render_featured_image($thumb_args); ?>
            </a>
            <aside class="post-excerpt">
                <?php featured_cats($cat_list); ?>
                <hr />
                <a href="<?php the_permalink(); ?>">
                    <h4 class="featured-title"><?php echo $title; ?></h4>
                </a>
                <?php echo $excerpt; ?>
                <div class="flex row afc jfs">
                    <?php display_author(); ?>
                </div>
            </aside>
        </article>
<?php
    }
}
