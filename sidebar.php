<div id="sidebar">
    <ul>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
<!-- Tag cloud -->
        <li>
            <h2><?php _e('Tags') ?></h2>
            <div id="tag_cloud_for_content" style="-moz-border-radius: 5px">
                <?php wp_tag_cloud('unit=pt&format=flat'); ?>
            </div>
        </li>

<!-- Recent comments -->
        <?php if (function_exists('last_comments')) { ?>
            <li>
                <h2><?php _e('Recent Comments') ?></h2>
                <ul>
                    <?php last_comments(); ?>
                </ul>
            </li>
        <?php } ?>

<!-- Archives -->
        <li><h2><?php _e('Archives') ?></h2>
            <ul>
            <select name=\"archive-dropdown\" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
  <option value=\"\"><?php echo attribute_escape(__('Select Month')); ?></option> 
  <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> </select>
            </ul>
        </li>

<!-- Blogroll -->
        <?php get_links_list(); ?>
    <?php endif; ?>
    </ul>
</div>
