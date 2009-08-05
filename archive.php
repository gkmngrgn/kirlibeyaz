<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

	<?php /* If this is a category archive */ if (is_category()) { ?>
		<p>Archive for the &#8216;<?php echo single_cat_title(); ?>&#8217; Category.</p>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<p>Archive for <?php the_time('jS F Y'); ?></p>

	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<p>Archive for <?php the_time('F Y'); ?></p>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<p>Archive for <?php the_time('Y'); ?></p>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<p>Author Archive</p>

		<?php } ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

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
					<?php the_content("<small>".__('Continue reading'). " &#8216;" . the_title('', '', false) . "&#8217; &raquo;</small>"); ?>
				</div>
		
				<div class="postmetadata">
					<?php _e('Category:') ?> <?php the_category(', ') ?>&nbsp;&nbsp;|&nbsp;
					<?php comments_popup_link(__('Comment'), __('1 Comment'), __('% Comments')); ?>
					<?php edit_post_link(__('Edit'), '&nbsp;|&nbsp;&nbsp;', ''); ?>
				 </div>
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;')) ?></div>
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
