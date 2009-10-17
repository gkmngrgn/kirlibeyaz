<?php get_header(); ?>
<div id="content">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
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
           <?php the_content(__('Continue reading'). " &#8216;" . the_title('', '', false) . "&#8217; &raquo;"); ?>
        </div>
        <div id="postmetadata">
            <div id="adsense">
                <script type="text/javascript"><!--
                google_ad_client = "pub-0952188451968791";
                /* 468x15, oluşturulma 27.04.2009 */
                google_ad_slot = "6424580101";
                google_ad_width = 468;
                google_ad_height = 15;
                //-->
                </script>
                <script type="text/javascript"
                src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                </script>
            </div>

            <ul>
                <?php if (!get_the_tags() == '') { ?>
                    <li style="background-color: #D8F2B8; border-color: #8ae234; text-align: left">
                        <?php _e('Tags:') ?>&nbsp;
                        <?php the_tags('') ?>
                    </li>
                <?php } ?>
                <li style="background-color: #DDD; border-color: #AAA; text-align: left">
                    <?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
                </li>
            </ul>
        </div>
    </div>
    <?php endwhile; ?>
    <div class="navigation">
        <div class="alignright">
            <?php next_posts_link(__('&laquo; Previous Entries')) ?>&nbsp;&nbsp;
            <?php previous_posts_link(__('Next Entries &raquo;')) ?>
        </div>
    </div>
    <?php else : ?>
    <div class="post">
        <h2 class="posttitle"><?php _e('Not Found') ?></h2>
        <div class="postentry"><p><?php _e('Sorry, no posts matched your criteria.'); ?></p></div>
    </div>
    <?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
