<?php get_header(); ?>

<?php
if (get_theme_mod('clean_home_category')) : ?>
  <div id="fh5co-portfolio">
    <?php
    $query = new WP_Query([
      'category_name' => get_theme_mod('clean_home_category')
    ]);

    if ($query->have_posts()) {
      $i = 1;
      while ($query->have_posts()) :
        $query->the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="fh5co-portfolio-item <?php if (!($i % 2)) : echo 'fh5co-img-right';  endif ?>">
            <div class="fh5co-portfolio-figure animate-box" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')" ;></div>
            <div class="fh5co-portfolio-description">
              <h2><?php the_title(); ?><?php echo get_query_var('index') ?></h2>
              <p><?php the_content() ?></p>
              <p><a href="<?php the_permalink() ?>" class="btn btn-primary"><?php esc_html_e('Read More', 'clean') ?></a></p>
            </div>
          </div>
        </article>

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
