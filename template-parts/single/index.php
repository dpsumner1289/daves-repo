<?php
include(trailingslashit(get_template_directory()) . 'template-parts/single/content.php');
include(trailingslashit(get_template_directory()) . 'template-parts/single/header.php');
include(trailingslashit(get_template_directory()) . 'template-parts/single/author.php');
include_once(trailingslashit(get_template_directory()) . 'template-parts/sidebar/index.php');

if (!function_exists('post_main')) :
    function post_main($post_args)
    {
        $header_args = array(
            'title' => $post_args['title'],
            'authors_list' => $post_args['authors_list'],
        )
?>
        <div class="post-container container container-main flex row afs jfs">
            <?php bm_sidebar_optional_optin(); ?>
            <div class="social_share_side"><?php echo do_shortcode('[Sassy_Social_Share]'); ?></div>
            <main itemscope itemtype="https://schema.org/Article" class="flex col item_3_4 content-side">
                <?php bm_mainEntityOfPage_schema(); ?>
                <?php post_header($header_args); ?>
                <?php post_content($post_args['content']); ?>
                <?php bm_prefooter_cta($post_args['postID']); ?>
                <?php render_author_bio($post_args['authors_list']); ?>
            </main>
            <div class="flex col item_1_4 sidebar">
                <?php bm_render_sidebar(); ?>
            </div>
        </div>
<?php
    }
endif;
