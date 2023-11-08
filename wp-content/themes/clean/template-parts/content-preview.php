<?php global $i?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="fh5co-portfolio-item <?php if (!($i % 2)) : echo 'fh5co-img-right';  endif ?>">
    <div class="fh5co-portfolio-figure animate-box"
      style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')" ;></div>
    <div class="fh5co-portfolio-description">
      <h2><?php the_title(); ?></h2>
      <p><?php the_excerpt() ?></p>
      <p><a href="<?php the_permalink() ?>" class="btn btn-primary"><?php esc_html_e('Read More', 'clean') ?></a>
      </p>
    </div>
  </div>
</article>