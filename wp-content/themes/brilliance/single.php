<?php get_header(); ?>

  <p><a href="<?php bloginfo('siteurl');?>" title="Back home">&larr; Back home</a></p>

	<?php get_template_part('loop', 'index'); ?>
  
  <?php comments_template( '', true ); ?>
  
<?php get_footer(); ?>