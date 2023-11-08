<?php get_header(); ?>

<?php
if (get_theme_mod('clean_home_category')) : ?>
<div id="fh5co-portfolio">
  <?php
    if (have_posts()) {
      $i = 1;
      while (have_posts()) :
        the_post();
  ?>

  <?php get_template_part('template-parts/content', 'preview')?>

  <?php
        $i++;
      endwhile;
			the_posts_pagination([
				'end_size' => 1,
				'mid_size' => 1,
				'type' => 'list'
			]);
      wp_reset_postdata();
    } else {
      get_template_part('template-parts/content', 'none');
    }
    ?>
</div>
<div class="clearfix"></div>
<?php endif ?>

<?php get_footer(); ?>