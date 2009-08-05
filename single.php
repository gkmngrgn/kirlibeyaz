<?php get_header(); ?>

<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="navigation">
        <div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
        <div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
    </div>

    <div class="post" id="post-<?php the_ID(); ?>">
        <h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div id="postmetadata_date">
            <ul>
                <li><p class = "date_day"><?php the_time('j') ?></p></li>
                <li><p class = "date_month"><?php the_time('F') ?></p>
                    <p class = "date_year"><?php the_time('Y') ?></p></li>
            </ul>
        </div>

        <div class="postentry">
            <?php the_content(); ?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div>

        <div id="postmetadata">
            <?php if('open' == $post->comment_status) { ?><a href="#respond"><?php _e('Comment') ?></a> (<?php comments_rss_link('RSS'); ?>)<?php } ?>
            <?php if('open' == $post->ping_status) { ?>&nbsp;|&nbsp;&nbsp;<a href="<?php trackback_url(true); ?> " rel="trackback"><?php _e('Trackback') ?></a><?php } ?>
            <?php edit_post_link(__('Edit'), '&nbsp;|&nbsp;&nbsp;', ''); ?>
        </div>
    </div>

    <?php comments_template(); ?>

    <?php endwhile; else: ?>

    <div class="post">
        <h2 class="posttitle"><?php _e('Not Found') ?></h2>
        <div class="postentry"><p><?php _e('Sorry, no posts matched your criteria.'); ?></p></div>
    </div>

    <?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
