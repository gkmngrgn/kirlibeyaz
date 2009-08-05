<?php get_header(); ?>
    <div id="content">
    <div id="tag_cloud_for_content">
        <?php wp_tag_cloud('unit=pt&format=flat'); ?>
    </div>
    <div id="title_for_tag_cloud">
        <h3>Etiketler</h3>
    </div>

    <?php if (have_posts()) : ?>

        <h2><?php _e('Search') ?></h2>
		
		<p> Results for <em><?php echo $_GET['s'] ?></em></p>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h3 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="postentry">
					<?php the_excerpt(); ?>
				</div>
		
				<div class="postmetadata">
					<?php _e('Posted on') ?> <?php the_time('jS F Y, h:i a ') ?> <?php _e('under') ?> <?php the_category(', ') ?>
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
