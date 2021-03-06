<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content">
<div class="post">
<h2><?php _e('Archives by Month') ?>:</h2>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h2><?php _e('Archives by Subject') ?>:</h2>
  <ul>
     <?php wp_list_cats(); ?>
  </ul>
</div>
</div>	

<?php get_sidebar(); ?>

<?php get_footer(); ?>
