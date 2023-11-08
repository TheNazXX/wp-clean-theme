<?php get_header(); ?>

<?php
if (get_theme_mod('clean_home_category')) : ?>
<div id="fh5co-portfolio">
  <?php
    $query = new WP_Query([
      'category_name' => get_theme_mod('clean_home_category'),
      'posts_per_page' => 4
    ]);

    if ($query->have_posts()) {
      $i = 1;
      while ($query->have_posts()) :
        $query->the_post();
  ?>

  <?php get_template_part('template-parts/content', 'preview')?>

  <?php
        $i++;
      endwhile;
      wp_reset_postdata();
    } else {
      get_template_part('template-parts/content', 'none');
    }
  ?>
</div>
<div class="clearfix"></div>
<?php endif ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="fh5co-team">
  <?php the_content()?>
</div>
<?php endwhile; endif;?>

<?php get_footer(); ?>