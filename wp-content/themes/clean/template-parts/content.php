<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="fh5co-portfolio-item">
    <div class="fh5co-portfolio-figure animate-box"
      style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')" ;></div>
    <div class="fh5co-portfolio-description">
      <h2><?php the_title() ?></h2>
      Standart
      <div class="js-animate-boxes--single">
        <p><?php the_content() ?></p>
      </div>
    </div>
  </div>
</article>